<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
	protected static $tags = ['laravel', 'rolling', 'beer'];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Create initial tags
		foreach (static::$tags as $tag) {
			if (Tag::where('name', $tag)->doesntExist()) {
				Tag::create(['name' => $tag]);
			}
		}
	}
}
