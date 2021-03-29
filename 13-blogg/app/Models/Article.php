<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'excerpt',
		'content',
	];

	/**
	 * Get the User that this Article is written by.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function author() {
		return $this->belongsTo(User::class);
	}

	/**
	 * Get the Tags that this Article is associated with.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function tags() {
		return $this->belongsToMany(Tag::class);
	}
}
