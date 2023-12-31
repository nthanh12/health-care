<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $primaryKey = 'idWork';
    protected $table = 'works';
    public $timestamps = false;
    protected $fillable = [
        'idWork',
        'txtTimeNextWork',
        'txtTitleNextWork',
        'txtNoteNextWork',
        'checkboxNextWork'
    ];
}
