<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class category extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}