<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'description', 'completed'];

	/**
	 * Get the project that this todo belongs to.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function project() {
		return $this->belongsTo(Project::class);
	}

	public function isComplete() {
		return !is_null($this->completed_at);
	}

	public function markAsCompleted() {
		$this->completed = true;
		$this->completed_at = \Carbon\Carbon::now();
		$this->save();
	}
}
