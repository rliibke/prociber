<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeTest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'ip',
        'email',
        'phone',
        'businessname',
        'softwareId',
        'ip'
    ];
   protected $table = 'freetest';

}
