<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diabetes extends Model
{
    use HasFactory;

    protected $fillable = [
        'age',
        'gender_id',
        'polyuria',
        'polydipsia',
        'sudden_weight_loss',
        'weakness',
        'polyphagia',
        'genital_thrush',
        'visual_blurring',
        'itching',
        'irritability',
        'delayed_healing',
        'partial_paresis',
        'muscle_stiffness',
        'alopecia',
        'obesity',
        'result_id',
    ];

    public function gender(){
        return $this->belongsTo(Gender::class);
    }
    public function result(){
        return $this->belongsTo(Result::class);
    }
}
