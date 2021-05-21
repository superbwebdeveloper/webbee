<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = "menu_items";
    protected $fillable = ['name', 'url', 'parent_id', 'created_at', 'updated_at'];
}
