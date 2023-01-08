<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelIgnition\Solutions\SolutionProviders\UndefinedLivewireMethodSolutionProvider;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class,'questions_id','id');
    }
}
