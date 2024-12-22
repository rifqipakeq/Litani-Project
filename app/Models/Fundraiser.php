<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fundraiser extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'is_active',
        'user_id',
    ];

    // kita bisa lihat oh fundraiser dgn id sekian user sekian
    public function user(){
        return $this->belongsTo(User::class);
    }
}
