<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type_product;
class Product extends Model
{
   use HasFactory;
//    protected $witd
   public   function type_products(){
    //    return $this-> hasOne(Type_product::class, 'type_id');
     return $this->belongsTo(Type_product::class,'type_id','id');
   }
 
   public function scopeSearch($query){
      if($key = request()->key){
         $query = $query->where('product_name','like','%'.$key.'%');
      }
      return $query;
   }


}
