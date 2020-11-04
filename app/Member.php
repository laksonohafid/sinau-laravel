<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;

class Member extends Model
{
    //
    
    protected $table = 'members';

    protected $fillable = ['nama', 'no_handphone', 'alamat'];
}
