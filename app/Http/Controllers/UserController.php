<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Subscription;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function dashboard()
    {
        $user = auth()->user();

        return view('user.index', compact('user'));
    }

    public function pricing()
    {
        return view('user.pricing');
    }


    public function showProfile()
    {
        return view('user.profile', [
            'user' => auth()->user(),
        ]);

    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'nullable|string|max:15',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:10',
            'country' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $user = auth()->user();
        $user->fill($request->except('avatar'));

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);

            // Update the user's avatar path in the database
            $user->avatar = '/images/' . $avatarName;
        }

        $user->save();

        return redirect()->back()->with('success', 'User Details Updated successfully!');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = auth()->user();

        // Check if current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully!');
    }

    public function payment()
    {


        $user = auth()->user();
        $subscription = $user->subscription;
        $invoices = $user->invoices()->latest()->get(); // Fetch user invoices


        return view('user.payment', compact('user', 'subscription', 'invoices'));
    }


    public function cancelSubscription(Request $request)
{
    $request->validate([
        'subscription_id' => 'required|exists:subscriptions,id',
    ]);

    $subscription = Subscription::findOrFail($request->subscription_id);

    // Ensure the subscription belongs to the authenticated user
    if ($subscription->user_id !== auth()->id()) {
        return redirect()->back()->withErrors('You are not authorized to cancel this subscription.');
    }

    // Update the subscription status
    $subscription->update(['status' => 'inactive']);


    // Redirect with success message
    return redirect()->route('user.payment')->with('success', 'Subscription canceled successfully.');
}




}
