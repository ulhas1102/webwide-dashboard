<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;
    public $table = 'careers';
    public $primaryKey = 'id';
	 protected $fillable = [
        'name', 'email', 'phone', 'position', 'resume',
    ];
}
