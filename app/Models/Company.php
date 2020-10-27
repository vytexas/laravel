<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Company extends Model
{

    protected $table = 'companies';
protected $fillable = ['name', 'code', 'adress', 'description']; //tai kas leidziama


public function comments ()
{

return $this->hasMany(Comment::class);

}


}
//public function user ()
//{

//return $this->belongsTo(User::class);

//}

//public function chechAuthor ($user)
//{

//return $this->user_id === $user_id;

//}


