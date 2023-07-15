<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User:: create ([
            'name'=>'mymine',
            'email'=>'admin1@gmail.com',
            'phone'=>'09400404122',
            'address'=>'monywa',
            'role'=>'admin',
            'password'=>Hash::make('admin123')

        ]);
    }
}
