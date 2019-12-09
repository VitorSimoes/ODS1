<?php

namespace App\Http\Controllers;

use App\Ranking;
use App\Recomend;
use Illuminate\Http\Request;

class RecomendController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function search(Recomend $recomend,Ranking $ranking, Request $request)
    {

        $dataset = Recomend::select('genery', 'hobby', 'travel', 'drink', 'id_product')->get();
        $dataset2= Ranking::select('fragancy','teor','price','id_product','id_user')->get();


        $algo2 = new Ranking();
        $algo2->fragancy = $request->fragancy;
        $algo2->teor = $request->teor;
        $algo2->price = $request->price;


        $algo = new Recomend();
        $algo->genery = $request->genery;
        $algo->hobby = $request->hooby;
        $algo->travel = $request->travel;
        $algo->drink = $request->drink;
        // Random cartesian coordinates (x, y) and labels

// Build distance matrix
//        array_walk($distances, 'euclideanDistance', $data);
        $distances = $recomend->euclideanDistance($algo, 'euclideanDistance', $dataset);

        $distancescont=$ranking->euclideanDistance($algo2,'euclideanDistance',$dataset2);

        $algo = array($distances);
        $algo2 = array($distancescont);
//        dd($algo);

// Example, target = datapoint 5, getting 3 nearest neighbors
        $neighbors = $recomend->getNearestNeighbors($algo, 0, 5);
        $neighbors2 = $ranking->getNearestNeighbors($algo2, 0, 5);
//        dd($neighbors);
        unset($neighbors[0]);
        unset($neighbors2[0]);
//        dd($neighbors);
//        $resultado = $recomend->getLabel($neighbors);
//        dd($resultado);
//        dd('oi');
        $vizinhos = $recomend->getVizinhos($neighbors);
        $vizinhos2 = $ranking->getVizinhos($neighbors2);
//        dd($vizinhos);
        return view('home', ['vizinhos2' => $vizinhos2, 'vizinhos' => $vizinhos]);

    }

}
