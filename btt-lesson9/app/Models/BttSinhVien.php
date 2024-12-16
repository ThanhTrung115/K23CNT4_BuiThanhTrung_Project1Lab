<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BttSinhVien extends Model
{
    use HasFactory;

    protected $table = 'sinhvien';

    public $timestamps = false;
}
