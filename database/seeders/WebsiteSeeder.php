<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $websiteUrl = [
            'http://localhost:8080',
            'http://localhost:3400',
        ];
        foreach ($websiteUrl as $url) {
            Website::create(['url' => $url]);
        }
    }
}
