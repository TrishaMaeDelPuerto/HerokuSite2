<?php
 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserJob extends Model{
   

   protected $table = 'tbluserjob';

// column sa table
   protected $fillable = [
       'Name','Age','Gender','jobid'
   ];

   public $timestamps = false;
   protected $primarykey = 'id';
}