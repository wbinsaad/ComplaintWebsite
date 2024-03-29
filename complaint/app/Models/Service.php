<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'department_id',
        'responsible_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function responsibleBy()
    {
        return $this->hasOne(User::class,'id','responsible_id');
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class,'service_id','id');
    }
}
