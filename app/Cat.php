<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Cat extends Model
{
    protected $fillable = [
    	'name',
    	'photo',
    	'description',
    	'color',
    	'active',
    	'weight'
    ]; 

    public static $enum_color = [
     	"black" => "black",
     	"white" => "white",
     	"grey" => "grey"
    ];
    
}
