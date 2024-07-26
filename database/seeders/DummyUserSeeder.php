<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Pelajar 2',
                'userno'=>'121212',
                'role'=>'pelajar',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Pelajar 3',
                'userno'=>'343434',
                'role'=>'pelajar',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Pengajar 2',
                'userno'=>'A4567',
                'role'=>'pengajar',
                'password'=>bcrypt('123456')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
