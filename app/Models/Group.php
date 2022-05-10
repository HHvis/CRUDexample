<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', 'project_id'
    ];

    public function setGroup($value){
        $this->attributes['student_id'] = json_encode($value);

    }
    public function getGroup($value){
        return $this->attributes['student_id'] = json_decode($value);

    }

    public function students(){
        return $this->hasMany(Student::class);
    }
    public function projects(){
        return $this->belongsTo(Project::class, 'project_id');
    }
}