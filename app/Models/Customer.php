<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table  = 'customer';
    protected $primaryKey = 'c_id';

    protected function name() : Attribute{
        return Attribute::make(
            set: fn($value) => ucwords($value),
            get : fn($value) => strtolower($value)
        );
    }

}
