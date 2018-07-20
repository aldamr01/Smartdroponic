<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_nama extends Eloquent
{
    protected $table    = 'kitg_person';
    public $timestamps  = false;
}
