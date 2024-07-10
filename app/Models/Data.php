<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
    'submit_by',
    'submit_when',
    'site_code',
    'Activity',
    'Uom',
    'Block',
    'Task',
    'Start',
    'End',
    'Mesin_id',
    'Fuel'
];

}
