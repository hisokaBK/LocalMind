<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
     protected $fillable =[
        'question_id',
        'user_id',
        'content'
     ];

     public function question(){
           return $this->belongsTo(Question::class);
     }

     public function user(){
           return $this->belongsTo(User::class);
     }
}
