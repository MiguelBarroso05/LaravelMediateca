<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkType extends Model
{
    /** @use HasFactory<\Database\Factories\WorkTypeFactory> */
    use HasFactory, SoftDeletes;
}
