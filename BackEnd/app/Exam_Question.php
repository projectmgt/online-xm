<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exam;

class Exam_Question extends Model
{

protected $fillable = [
		'star','customer','review'
	];
	
    public function Exam()
    {
    	return $this->hasOne(Exam::class); 
    }

 public function QuestionType()
    {
        return $this->hasMany('App\QuestionType');
    }


}
