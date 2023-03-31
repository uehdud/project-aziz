<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbMClient extends Model
{
    use HasFactory;
    protected $primaryKey = 'client_id';
    protected $fillable = [
        'client_id',
        'client_name',
        'client_address',
    ];

    public function project()
    {
        return  $this->hasMany(TbMProject::class);
    }
}
