<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'pesan'
    ];

    public function scopeFilter($query, array $filters)
    {   
        // if(isset($filters['nama_instansi']) ? $filters['nama_instansi'] : false){
        //     return $query->where('nama_instansi', 'like', '%' . $filters['nama_instansi']. '%');
        // }
        $query->when($filters['name'] ?? false, function($query, $name){
            return $query->where('name', 'like', '%' . $name. '%');
        });
        
    }
}
