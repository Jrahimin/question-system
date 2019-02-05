<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['title', 'slug', 'body', 'views', 'answers', 'votes', 'best_answer_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getUrlAttribute(){
        return route('questions.show', $this->id);
    }
    public function getCreatedDateAttribute(){
        return $this->created_at->diffForHumans();
    }
}
