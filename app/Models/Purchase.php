<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'company_id', 'quality_id', 'rate', 'weight', 'load', 'mate', 'detail','amount','status'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class , 'company_id');
    }
    public function quality()
    {
        return $this->belongsTo(Quality::class , 'quality_id');
    }
    public function company_payments()
    {
        return $this->hasMany(Company_payment::class);
    }
}
