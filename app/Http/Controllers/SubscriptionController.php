<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use App\Models\Subscription;
use Unicodeveloper\Paystack\Facades\Paystack;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

        /**
     * Validate if the paid amount matches the expected amount for the given plan.
     *
     * @param string $plan
     * @param int $amount Paid amount in kobo (since Paystack charges are in kobo)
     * @return bool
     */
    private function isValidPlanAndAmount($plan, $amount)
    {
        $validAmounts = [
            'starter-monthly' => 320000,  // ₦3200 in Kobo
            'starter-yearly' => 3200000,  // ₦32000 in Kobo
            'pro-monthly' => 640000,      // ₦6400 in Kobo
            'pro-yearly' => 5760000,      // ₦57600 in Kobo
            'vip-monthly' => 1920000,     // ₦19200 in Kobo
            'vip-yearly' => 15840000      // ₦158400 in Kobo
        ];

        return $amount === $validAmounts[$plan] ?? null;
    }


     /**
     * Calculate the end date for the subscription based on the plan.
     *
     * @param string $plan
     * @return Carbon
     */
    private function calculateEndDateForPlan($plan)
    {
        $startDate = Carbon::now();
        if (str_contains($plan, 'yearly')) {
            return $startDate->addYear();
        } else {
            return $startDate->addMonth();
        }
    }


    public function redirectToGateway(Request $request)
    {
        $request->validate(['email' => 'required|email', 'plan' => 'required']);

        $planPrices = [
            'starter-monthly' => 320000,  // ₦3200 in Kobo
            'starter-yearly' => 3200000,  // ₦32000 in Kobo
            'pro-monthly' => 640000,      // ₦6400 in Kobo
            'pro-yearly' => 5760000,      // ₦57600 in Kobo
            'vip-monthly' => 1920000,     // ₦19200 in Kobo
            'vip-yearly' => 15840000      // ₦158400 in Kobo

        ];

        $plan = $request->input('plan');
        $amount = $planPrices[$plan] ?? null;

        if (!$amount) {
            return back()->withErrors('Invalid plan selected. Please try again.');
        }

        try {
            $paymentDetails = Paystack::getAuthorizationUrl([
                'amount' => $amount, // Amount in kobo
                'email' => $request->email,
                'metadata' => [
                    'plan' => $plan,
                    'user_id' => auth()->id()
                ]
            ])->redirectNow();
            return $paymentDetails;
        } catch (\Exception $e) {
            \Log::error('Paystack payment error: ' . $e->getMessage());
            return back()->withErrors('Payment initiation failed. Please try again.');
        }
    }


    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // Check if payment was successful and data is in expected format
        if (isset($paymentDetails['data']) && $paymentDetails['data']['status'] === 'success') {
            // Accessing user ID and plan from metadata assuming they are stored correctly
            $userId = $paymentDetails['data']['metadata']['user_id'];
            $user = User::find($userId);
            $plan = $paymentDetails['data']['metadata']['plan'];

            // Verify the right amount was paid for the plan
            if ($this->isValidPlanAndAmount($plan, $paymentDetails['data']['amount'])) {
                // Calculate end date based on the plan
                $endDate = $this->calculateEndDateForPlan($plan);

                // Create or update subscription
                $subscription = Subscription::updateOrCreate(
                    ['user_id' => $user->id],
                    ['plan' => $plan, 'start_date' => now(), 'end_date' => $endDate, 'status' => 'active']
                );

                // Redirect the user with success message
                return redirect()->route('confirmation.page')->with('success', 'Subscription successful!');
            } else {
                // Handle case where the payment amount does not match the expected amount for the plan
                return back()->withErrors('Payment amount does not match the required amount for the selected plan.');
            }
        }

        // Handle failure case
        return back()->withErrors('Payment failed or was cancelled.');
    }

    public function showConfirmationPage(){

        return view('user.confirmation');

    }



}
