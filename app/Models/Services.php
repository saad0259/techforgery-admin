<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','status','created_from','description','price',
    'currency','purchase','edited_purchase','creatted_by','Offered_by','date'];

    protected $dates=['deleted_at'];
}

