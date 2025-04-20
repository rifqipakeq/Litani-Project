<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        $fundraiserRole = Role::create([
            'name' =>'fundraiser'
        ]);

        $userOwner = User::create([
            'name' => 'admin',
            'avatar' => '/public/assets/images/default-avatar.jpg',
            'email' => 'admin@owner.com',
            'password' => bcrypt('admin@owner.com'),
        ]);

        $userOwner->assignRole($ownerRole);
    }
}
