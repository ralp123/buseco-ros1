<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'ApplicationStatus',
        'CIFKey',
        'ApplicationDate',
        'Firstname',
        'MI',
        'Lastname',
        'Spouse',
        'Address',
        'BirthDate',
        'MemberType',
        'Municipality',
        'Barangay',
        'Citizenship',
        'Sex',
        'Ownership',
        'TellNo'
    ];
    
    protected $table = 'application';

    /* Remove this line if the primary key has name "id" */
    protected $primaryKey = 'ApplicationID';

    /* Ignore created_at and updated_at columns. */
    public $timestamps = false;
}
