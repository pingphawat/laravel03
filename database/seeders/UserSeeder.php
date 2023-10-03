<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        if (User::count() > 0){
            echo "There are some songs in database";
            return;
        }
        $user = new User();
        $user->name = "User01";
        $user->email = "user01@example.com";
        $user->eamil_verified_at = "2023-08-05 23:10:55";
        $user->password = "anypassword";
        $user->remember_token = "afkme";
        $user->save();
        
        User::factory(1000) -> create();
    }
}
