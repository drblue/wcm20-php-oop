<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Create initial user
		if (User::where('email', 'admin@admin.org')->doesntExist()) {
			User::create([
				'name' => 'Admin Adminsson',
				'email' => 'admin@admin.org',
				'password' => Hash::make('apa'),
			]);
		}
	}
}
