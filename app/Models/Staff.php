<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffs extends Model
{
    protected $table = "Staffs";
    use HasFactory;
    //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["#","Name","Age","salary","Phone","Actione"];    
    //Primary Key
 	protected $primaryKey = "id";

}