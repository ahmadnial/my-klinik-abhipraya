<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class mstr_supplier extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'mstr_supplier';
    protected $fillable = [
        'fm_kd_supplier',
        'fm_nm_supplier',
        'fm_email',
        'fm_no_tlp',
        'fm_alamat',
        'fm_kota',
        'fm_kd_pos',
        'fm_npwp'
    ];
}
