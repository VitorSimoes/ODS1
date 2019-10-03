<?php

namespace App\Http\Controllers;

use App\Recomend;
use Illuminate\Http\Request;

class RecomendController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function search(Recomend $recomend, Request $request)
    {
//        dd($request->all());
        $dataset = Recomend::select('genery', 'hobby', 'travel', 'drink', 'product')->get();
//        dd($dataset[0]);
        $algo = new Recomend();
        $algo->genery = $request->genery;
        $algo->hobby = $request->hooby;
        $algo->travel = $request->travel;
        $algo->drink = $request->drink;
        // Random cartesian coordinates (x, y) and labels
//        $data = array(
//            array(1, 2, 'red'),   // 0 =>
//            array(5, 3, 'blue'),  // 1 =>
//            array(-1, 2, 'blue'), // 2 =>
//            array(2, 5, 'red'),   // 3 =>
//            array(3, 3, 'red'),   // 4 =>
//            array(-4, 5, 'blue'), // 5 =>
//            array(2, 2, 'blue'),  // 6 =>
//            array(5, -2, 'red'),  // 7 =>
//            array(-1, -2, 'blue'),// 8 =>
//        );

// Build distance matrix

//        array_walk($distances, 'euclideanDistance', $data);
        $distances = $recomend->euclideanDistance($algo, 'euclideanDistance', $dataset);
        $algo = array($distances);
//        dd($algo);

// Example, target = datapoint 5, getting 3 nearest neighbors
        $neighbors = $recomend->getNearestNeighbors($algo, 0, 7);
        dd($neighbors);
        unset($neighbors[0]);
//        dd($neighbors);
        $resultado = $recomend->getLabel($neighbors);
//        dd($resultado);
        $vizinhos = $recomend->getVizinhos($neighbors);
//        dd($vizinhos);
        return view('home', ['resultado' => $resultado, 'vizinhos' => $vizinhos]);

    }

}
