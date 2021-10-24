<?php

namespace App\Models;

use App\Traits\TranslationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    use HasFactory, TranslationTrait;


    protected $fillable = [
        'name',
        'locale'
    ];
}
