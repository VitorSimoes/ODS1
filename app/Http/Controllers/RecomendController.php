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

    public function search(Recomend $recomend, Ranking $ranking, Request $request)
    {

        $dataset = Recomend::select('genery', 'hobby', 'travel', 'drink', 'id_product')->get();
        $dataset2 = Ranking::select('fragancy', 'teor', 'price', 'id_product', 'id_user')->get();


        $algo2 = new Ranking();
        $algo2->fragancy = $request->fragancy;
        $algo2->teor = $request->teor;
        $algo2->price = $request->price;
//        dd($algo2);

        $algo = new Recomend();
        $algo->genery = $request->genery;
        $algo->hobby = $request->hooby;
        $algo->travel = $request->travel;
        $algo->drink = $request->drink;
        // Random cartesian coordinates (x, y) and labels

// Build distance matrix
//        array_walk($distances, 'euclideanDistance', $data);
        $distances = $recomend->euclideanDistance($algo, 'euclideanDistance', $dataset);

        $distancescont = $ranking->euclideanDistance($algo2, 'euclideanDistance', $dataset2);

        $algo = array($distances);
        $algo2 = array($distancescont);
//        dd($algo2);

// Example, target = datapoint 5, getting 3 nearest neighbors

        $neighbors = $recomend->getNearestNeighbors($algo, 0, 5);
        $neighbors2 = $ranking->getNearestNeighbors($algo2, 0, 5);

        unset($neighbors[0]);
        unset($neighbors2[0]);

        $resultado = $recomend->getLabel($neighbors);
        $resultado2 = $ranking->getLabel($neighbors2);

        $vizinhos = $recomend->getVizinhos($neighbors);
        $vizinhos2 = $ranking->getVizinhos($neighbors2);
        $vizinhos3 = $vizinhos;
        foreach ($vizinhos2 as $vz){
            array_push($vizinhos3,$vz);
        }

        $values = array_count_values($vizinhos3);
//        dd($values);
        $values = array_flip($values);
        ksort($values);
        $resultado3=array_pop($values);
//        return view('home', ['resultado' => $resultado, 'resultado2' => $resultado2]);
        return view('home', [
            'resultado' => array_pop($resultado),
            'resultado2' => array_pop($resultado2),
            'resultado3' => $resultado3,
            'vizinhos2' => $vizinhos2,
            'vizinhos3' => $vizinhos3,
            'vizinhos' => $vizinhos,
        ]);

    }

}
