<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
