<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class post extends Model
{
    use HasFactory;
    protected $fillable=['user_id','title','content','status','author'];
public function user()
{
    return $this->belongsTo(User::class);
}

public function tags()//many to many 
{
    return $this->belongsToMany(Tag::class);
}

}
