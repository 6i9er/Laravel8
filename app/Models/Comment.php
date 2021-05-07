<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['body','creator' , 'user_id', 'support_ticket_id' , 'created_at' , 'image'];
    use HasFactory;


    public function getImagePathAttribute(){
        return url('/storage/'.$this->image);

    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
