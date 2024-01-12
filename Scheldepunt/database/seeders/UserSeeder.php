<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => true,
            'birthday' => '1990-01-01',
            'avatar' => 'avatar.jpg',
            'about' => 'This is the admin user.',
            'remember_token' => 'asdadfasdfasdfadfadfasdfasdfasdfasdfasdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@ehb.be',
            'email_verified_at' => now(),
            'password' => Hash::make('Password!321'),
            'is_admin' => true,
            'birthday' => '1990-01-01',
            'avatar' => 'avatar.jpg',
            'about' => 'This is the default admin user.',
            'remember_token' => 'asdadfasdfasdfadfadfasdfasdfasdfasdfasdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => false,
            'birthday' => '1980-02-02',
            'avatar' => 'avatar.jpg',
            'about' => 'This is a regular user.',
            'remember_token' => 'asdadfasdfasdfadfadfasdfasdfasdfasdfasdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => false,
            'birthday' => '1985-03-03',
            'avatar' => 'avatar.jpg',
            'about' => 'This is another regular user.',
            'remember_token' => 'asdadfasdfasdfadfadfasdfasdfasdfasdfasdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Tom Smith',
            'email' => 'tom@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => false,
            'birthday' => '1995-04-04',
            'avatar' => 'avatar.jpg',
            'about' => 'This is yet another regular user.',
            'remember_token' => 'asdadfasdfasdfadfadfasdfasdfasdfasdfasdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}