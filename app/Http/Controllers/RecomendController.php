<?php

namespace App\Http\Controllers;

use App\Recomend;
use Illuminate\Http\Request;

class RecomendController extends Controller
{
    public function index(Recomend $recomend)
    {
        $a = $recomend->all();
        $b = $a[0];
        $b->genery = 2;
        $b->travel = 2;
        $b->drink = 2;
        $c=$recomend->minkowski($a,$b,1);
//        dd($b);
//        $recomend->minkowski($a,)
    }
}
