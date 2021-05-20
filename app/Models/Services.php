<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = ['name','status','created_from','description','price',
    'currency','purchase','edited_purchase','creatted_by','Offered_by','date'];
}

