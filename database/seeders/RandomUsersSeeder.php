<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RandomUsersSeeder extends Seeder
{
    const USER_COUNT = 20;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Factory::create();
        $usersToSave = [];
        for ($i = 0; $i < self::USER_COUNT; $i++){
            $password = $faker->password;
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;

            $user = User::query()
                ->create([
                   'first_name' => $firstName,
                   'last_name' => $lastName,
                   'login' => $firstName . $lastName."@gmail.com",
                   'email' => $faker->email,
                   'password' => Hash::make($password),
                ]);

            $usersToSave[$user->id] = ['login' => $user->email, 'password' => $password];
        }

        Storage::disk('local')
            ->put('fake_users.json', json_encode($usersToSave));
    }
}
