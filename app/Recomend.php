<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomend extends Model
{
    protected $fillable = ['id', 'genery', 'hobby', 'travel', 'drink', 'product'];

    public function minkowski($rating1, $rating2,$r)
    {
        $distance=0;
        $commonRating= False;
        foreach($rating1 as $x=>$atribute){

        }
    }


}
