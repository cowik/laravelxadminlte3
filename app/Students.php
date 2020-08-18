<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class Students extends Model
{
    protected $table = 'students';
    protected $fillable = ['name', 'gender', 'religion', 'address'];
}
