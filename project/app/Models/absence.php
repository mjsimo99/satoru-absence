<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $table = 'absences';

    protected $primaryKey = 'id';

    protected $fillable = [
        'seance_id',
        'user_id',
        'justify',
        'comm_abs',
    ];

    public function seance()
    {
        return $this->belongsTo(seances::class, 'seance_id');
    }
    public function student()
    {
        return $this->belongsTo(student::class, 'user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
