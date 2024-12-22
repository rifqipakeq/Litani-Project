<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
      'name',
      'slug',  
      'icon', 
    ];

    //kenapa jamak karena lebih dari satu , satu category dimiliki banyak kasus one to many, category menerima banyak kasus
    public function fundraisings(){
      return $this->hasMany(Fundraising::class);
    }
}
