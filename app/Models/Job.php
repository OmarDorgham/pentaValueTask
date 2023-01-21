<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'amount', 'project_id'];

    public $timestamps = false;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

//    public function jobWithProject()
//    {
//        return $this->whereHas('project', function ($query) {
//            $query->where('price', '<', 100);
//        })->get();
//    }
}
