<?php

use App\Email;
use App\Phone;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($user) {
            $user->emails()->saveMany(factory(Email::class, 2)->make());
            $user->phones()->saveMany(factory(Phone::class, 2)->make());
        });
    }
}
