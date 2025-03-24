<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $table = 'websites'; // Specify the table name

    protected $fillable = [
        'name','about','customer','type','development','concept','design','front-end','back-end','database','url' // Adjust based on your database columns
    ];
}
