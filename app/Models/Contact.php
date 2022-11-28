<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'mobile',
        'email',
        'group'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters){
        if ($filters['search'] ?? false) {
            $query->where('mobile', 'like', '%' . request('search') . '%');
        }
    }
}
