<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subscription;
use Carbon\Carbon;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure you have at least one user to associate with a subscription
        User::firstOrCreate([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'avatar' => 'avatar-1.jpg',
            'role' => 'user'
        ]);

        // Fetch the first user
        $user = User::first();

        // Create a few subscriptions
        Subscription::create([
            'user_id' => $user->id,
            'plan' => 'starter',
            'status' => 'active',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addMonths(1)
        ]);

        Subscription::create([
            'user_id' => $user->id,
            'plan' => 'pro',
            'status' => 'active',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addMonths(1)
        ]);

        Subscription::create([
            'user_id' => $user->id,
            'plan' => 'vip',
            'status' => 'active',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addMonths(1)
        ]);
    }
}

