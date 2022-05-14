<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adres extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'city',
        'street',
        'entance',
        'room',
    ];
}