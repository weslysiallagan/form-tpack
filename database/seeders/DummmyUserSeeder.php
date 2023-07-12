<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummmyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'User 1',
                'email'=>'user1@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('111111'),
                'jnskelamin'=>'L',
                'tgllahir'=>'2004-12-02'
            ],
            [
                'name'=>'Admin',
                'email'=>'siallaganwesly@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('555555'),
                'jnskelamin'=>'L',
                'tgllahir'=>'2000-03-04'
            ]
        ];
        
        foreach($userData as $key => $val){
            User::create($val);
        };
    }
}
