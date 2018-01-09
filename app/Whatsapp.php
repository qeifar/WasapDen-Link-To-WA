<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Whatsapp extends Model
{
	protected $table   = 'whatsapps';
	protected $guarded =[];
	public $timestamps=false;
}