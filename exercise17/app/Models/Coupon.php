<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable=['code','type','value','status'];
    public static function findByCode($code){
        return self::where('code',$code)->first();
    }
    public function discount($total)
    {
        if($this->type=="fixed")
        {
            return $this->value;
        }
        else{
            return 0;
        }
    }
}
