<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'due_date'];
    /*
            $table->string('title');
            $table->string('description');
            $table->dateTime('due_date');
    */
    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
