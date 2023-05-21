<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            "name"=>"Nurzhan Duisenbaev",
            "username"=>"nurzhanduisenbaev480",
            "email"=>"nurzhanduisenbaev480@mail.ru",
            "password"=>Hash::make("iitu1995"),
            "visible_password"=>"iitu1995",
            "from_company"=>"Magic Home Media",
            "from_city"=>1,
            "from_phone"=>"+77073729565",
            "from_address"=>"Alatau street",
            "from_site"=>"https://mhm.kz/",
            "type"=>"user",
            "company_type"=>1,
            "iin"=>"123456789123",
        ]);
    }
}
