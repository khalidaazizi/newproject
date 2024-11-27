<?php

namespace App\Models\validation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'forms';
 
    // Accessor برای تبدیل رشته به آرایه
    public function getExperienceAttribute($value)
    {
        return $value ? explode(',', $value) : [];
    }

    // Mutator برای تبدیل آرایه به رشته
    public function setExperienceAttribute($value)
    {
        $this->attributes['experience'] = is_array($value) ? implode(',', $value) : $value;
    }
}
