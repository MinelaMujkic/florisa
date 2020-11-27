<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "role" =>"Admin",
                "name" => "Admin",
                "email" => "admin@admin.com",
                "password" => Hash::make("123456789")

                //hash iramo pasworde klijenata da ih ne bi neko mogao vidjeti kroz bazu
            ],

            [
                "role" =>"Guest",
                "name" => "Guest",
                "email" => "guest@guest.com",
                "password" => Hash::make("123456")

            ]
        ]);
    }
}
