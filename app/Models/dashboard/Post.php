<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded =['id'];

    public function User(){

       return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
