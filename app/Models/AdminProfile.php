<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
    ];

    function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }
}