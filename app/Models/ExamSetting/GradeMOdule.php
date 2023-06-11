<?php

namespace App\Models\ExamSetting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\academic_module\AllClass;
use App\Models\User;

class GradeMOdule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function classname(){
       return $this->belongsTo(AllClass::class,'class_name','id');
    }
    public function username(){
       return $this->belongsTo(User::class,'created_by','id');
    }
}
