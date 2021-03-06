<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->profile_image ="profile_image1.png";
        $user->name ="Perla Sandoval";
        $user->email ="perla@gmail.com";
        $user->password = bcrypt("secret");
        $user->save();

        $user = new User();
        $user->profile_image ="profile_image2.png";
        $user->name ="Miguel Aviles";
        $user->email ="miguel@gmail.com";
        $user->password = bcrypt("secret");
        $user->save();

        $user = new User();
        $user->profile_image ="profile_image3.png";
        $user->name ="Guillermo Dominguez";
        $user->email ="guillermo@gmail.com";
        $user->password = bcrypt("asd");
        $user->save();
    }
}
