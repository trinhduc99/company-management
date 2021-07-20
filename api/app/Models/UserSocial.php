<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use HasFactory;

    protected $table ='user_social';
    protected $fillable = [
        'user_id',
        'social_id',
        'service'
    ];

    // relationship

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
}
