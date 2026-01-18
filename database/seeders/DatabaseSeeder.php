<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Option;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin123'),
                'email_verified_at' => now(),
                'role' => 'admin',
                'role_id' => 1,
            ]
        );
        Role::firstOrCreate(
            ['id' => 1],
            [
                'role_name' => 'admin',
                'role_description' => 'Administrator role with full permissions',
                'permissions' => json_encode(['create', 'read', 'update', 'delete']),
            ]
        );
        Role::firstOrCreate(
            ['id' => 2],
            [
                'role_name' => 'user',
                'role_description' => 'Standard user role with limited permissions',
                'permissions' => json_encode(['read']),
            ]
        );
        Option::firstOrCreate(
            ['option_name' => 'site_name'],
            ['option_value' => 'My Application']
        );
        Option::firstOrCreate(
            ['option_name' => 'site_description'],
            ['option_value' => 'This is my application description.']
        );

    }
}
