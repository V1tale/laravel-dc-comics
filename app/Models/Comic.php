<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['title', 'type', 'series', 'sale_date', 'thumb', 'price', 'description'];
}
