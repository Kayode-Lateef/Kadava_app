<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }


    public function dashboard()
    {
        $admin = Auth::user();

        return view('index', compact('admin'));
    }


      /**
     * Show admin profile.
     */
    public function showProfile()
    {
        $admin = Auth::user(); // Get the authenticated admin
        return view('profile', compact('admin'));
    }

    /**
     * Update admin profile.
     */
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'nullable|string|max:15',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:10',
            'country' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $admin = Auth::user();
        $admin->fill($request->except('avatar'));

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);

            $admin->avatar = '/images/' . $avatarName;
        }

        $admin->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Update admin password.
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $admin = Auth::user();

        // Check if current password matches
        if (!Hash::check($request->current_password, $admin->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->back()->with('success', 'Password updated successfully!');
    }

    public function userList()
    {
        // Fetch users with their subscriptions and count total users
        $users = User::with('subscription')->get();
        $totalUsers = $users->count();

        return view('user-list', compact('users', 'totalUsers'));
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:user,admin',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'User added successfully!');
    }

    public function updateUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $request->user_id,
            'role' => 'required|in:user,admin',
        ]);

        $user = User::find($request->user_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->back()->with('success', 'User updated successfully!');
    }

    public function createSubscription(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'plan' => 'required|string',
        ]);

        $endDate = str_contains($request->plan, 'yearly') ? now()->addYear() : now()->addMonth();

        Subscription::create([
            'user_id' => $request->user_id,
            'plan' => $request->plan,
            'start_date' => now(),
            'end_date' => $endDate,
            'status' => 'active',
        ]);

        return redirect()->back()->with('success', 'Subscription created successfully!');
    }


    public function updateSubscription(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'plan' => 'required|string',
        ]);


        $subscription = Subscription::where('user_id', $request->user_id)->firstOrFail();
        $endDate = str_contains($request->plan, 'yearly') ? now()->addYear() : now()->addMonth();

        $subscription->update([
            'plan' => $request->plan,
            'start_date' => now(),
            'end_date' => $endDate,
        ]);

        return redirect()->back()->with('success', 'Subscription updated successfully!');
    }


    public function cancelSubscription($id)
    {
        $subscription = Subscription::findOrFail($id);
        $subscription->update(['status' => 'inactive']);

        return redirect()->back()->with('success', 'Subscription canceled successfully!');
    }


    public function banUser($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'banned']);

        return redirect()->back()->with('success', 'User has been banned successfully!');
    }


    public function removeUser($id)
    {
        $user = User::findOrFail($id);

        // Optionally delete related data (e.g., subscriptions, invoices, etc.)
        $user->subscription()->delete(); // Assuming `subscription()` relationship exists in the User model
        $user->delete();

        return redirect()->back()->with('success', 'User has been removed successfully!');
    }


    public function unbanUser($id)
    {
        $user = User::findOrFail($id);

        // Check if the user is currently banned
        if ($user->status !== 'banned') {
            return redirect()->back()->withErrors('This user is not banned.');
        }

        // Update the user's status to active
        $user->update(['status' => 'active']);

        return redirect()->back()->with('success', 'User has been unbanned successfully!');
    }




    public function toggleSubscription(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:active,inactive',
        ]);

        $subscription = Subscription::findOrFail($id);

        // Update the subscription status
        $subscription->update(['status' => $request->status]);


        return redirect()->back()->with('success', 'Subscription status updated successfully.');
    }


    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

}
