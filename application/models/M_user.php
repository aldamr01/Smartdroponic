<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_user extends Eloquent
{
    protected $table    = 'kitg_user';
    public $timestamps  = false;

    
}
