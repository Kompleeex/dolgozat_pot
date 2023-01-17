<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;

    protected  $PrimaryKey = ['subject_id','user_id'];

    function setKeysForSaveQuery($query)
    {
        $query
            ->where('subject_id', '=', $this->getAttribute('subject_id'))
            ->where('user_id', '=', $this->getAttribute('user_id'));

        return $query;
    } 

    protected $fillable = [
        'subject_id',
        'user_id',
        'achieve',
        'status',
    ];

    public function subject_c()
    {    return $this->hasOne(Subject::class, 'subject_id', 'subject_id');   }

    public function user_c()
    {    return $this->hasOne(User::class, 'id', 'user_id');   }



}
