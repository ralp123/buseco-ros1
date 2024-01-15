<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitio extends Model
{
    use HasFactory;

    protected $table = 'sitio';

    /* Ignore created_at and updated_at columns. */
    public $timestamps = false;
}
