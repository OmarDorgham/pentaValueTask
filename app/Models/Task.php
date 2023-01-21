<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'job_id'];

    public $timestamps = false;

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function project()
    {
        return $this->guessBelongsToRelation(Job::class);
    }
}
