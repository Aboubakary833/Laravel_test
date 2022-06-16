<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Website;
use App\Models\WebsiteUser;
use Illuminate\Database\Seeder;

class WebsiteUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $website = Website::first();
        $users = User::all();
        foreach ($users as $user) {
            WebsiteUser::create([
                'website_uuid' => $website->uuid,
                'user_id' => $user->id
            ]);
        }
    }
}
