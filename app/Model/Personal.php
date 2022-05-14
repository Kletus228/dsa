<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'floor',
        'the date',
        'registration',
        'position',
        'subdivision',
    ];
}