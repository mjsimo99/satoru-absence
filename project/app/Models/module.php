<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;

    protected $table = 'modules';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name_modul',
   
    ];
    public function seances()
    {
        return $this->hasMany(seances::class, 'module_id');
    }
    public function affect()
    {
        return $this->hasMany(affect::class, 'id_module');
    }
}
