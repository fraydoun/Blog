<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $table = 'admin';
    
    public $fillable = ['username', 'password', 'phone_number', 'name', 'email'];
    
}
