<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'Address';
    protected $fillable = [
        'id',
        'user_address',
        'user_id'
    ];
    //An user has one address
    public function getUserAddress(){
        return $this->hasOne(Address::class);
    }
}
