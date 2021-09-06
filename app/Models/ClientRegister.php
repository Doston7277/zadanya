<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRegister extends Model
{
    use HasFactory;
    protected $fillable = [ 'surname', 'name', 'fullname', 'citizenship', 'passport_series', 'passport_number', 'register_date', 'release_date', 'room_category', 'room_type', 'room_number' ];
}
