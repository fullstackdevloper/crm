<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Note extends Authenticatable
{
   protected $table = 'notes';
	
}
