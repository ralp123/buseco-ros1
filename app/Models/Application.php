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
        'CivilStatus',
        'Sex',
        //'Ownership',
        'TelNo',

        'Sitio',
        // 'email',
        'birthdateSpouse',
        'fam1',
        'fam2',
        'fam3',
        'fam4',

        'ctcissuedon',
        'ctcno',

        'street',
        'houseno',

        'requirement1'
    ];
    
    protected $table = 'application';

    /* Remove this line if the primary key has name "id" */
    protected $primaryKey = 'ApplicationID';

    /* Ignore created_at and updated_at columns. */
    public $timestamps = false;
}
