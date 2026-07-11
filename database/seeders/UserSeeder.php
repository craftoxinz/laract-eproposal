<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->unverified()->create([
            'name' => 'Randie',
            'email' => '240414100@fellow.lpkia.ac.id',
        ]);

        $user->assignRole(RoleEnum::STUDENT);
    }
}
