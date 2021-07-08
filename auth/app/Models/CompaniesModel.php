<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaniesModel extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    protected $fillable = [
        'company_name',
        'company-name',
        'company_web',
        'company_address',
        'company_code',
        'company_phone'
    ];
    public $timestamps = true;
    use HasFactory;
}
