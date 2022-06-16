<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "Aboubakary",
                "email" => "aboubakarycisse410@gmail.com"
            ],
            [
                "name" => "John",
                "email" => "aboubakarycisse472@gmail.com"
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
