<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@ewbcredit.org',
            'password' => Hash::make('Password'),
        ]);

        $this->call([


            DashboardTableSeeder::class,
            AnalyticsTableSeeder::class,
            FintechTableSeeder::class,
            CustomerSeeder::class,
            OrderSeeder::class,
            InvoiceSeeder::class,
            MemberSeeder::class,
           TransactionSeeder::class,
            JobSeeder::class,
            CampaignSeeder::class,
            MarketerSeeder::class,
            CampaignMarketerSeeder::class,
        ]);
    }
}
