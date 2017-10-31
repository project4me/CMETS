<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'key' => 'site.about',
                'display_name' => 'About',
                'value' => 'About',
            ],
            [
                'key' => 'site.contact',
                'display_name' => 'Contact',
                'value' => 'Contact',
            ]
        ]);
    }
}
