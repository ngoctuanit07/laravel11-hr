<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AssignRolesSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'admin@example.com')->first();
        if ($user) {
            $user->assignRole('admin');
        }

        $user = User::where('email', 'writer@example.com')->first();
        if ($user) {
            $user->assignRole('writer');
        }
    }
}
