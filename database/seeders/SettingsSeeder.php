<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'site_logo','value'=> 'assets/images/logo/fishseller.png','type'=> 'image'],
            ['key' => 'site_brand_name' ,'value'=> 'FishSeller','type'=> 'text'],
            ['key' => 'site_slogan' ,'value'=> 'FishSeller','type'=> 'text'],
            ['key'=> 'site_phone','value'=> '0123456789','type'=> 'text'],
            ['key'=> 'site_email','value'=> 'fishseller@example.com','type'=> 'text'],
            ['key'=> 'site_address','value'=> '123 Main St, Anytown, USA','type'=> 'text'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate($setting);
        }
    }
}
