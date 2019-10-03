<?php

namespace App;

use http\Exception\InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;

class Recomend extends Model
{
    protected $fillable = ['id', 'genery', 'hobby', 'travel', 'drink', 'product'];

    /**
     * Calculates eucilean distances for an array dataset
     *
     * @param array $sourceCoords In format array(x, y)
     * @param array $sourceKey Associated array key
     * @param array $data
     * @return array Of distances to the rest of the data set
     */
    function euclideanDistance(&$sourceCoords, $sourceKey, $data)
    {
        $x1 = $sourceCoords->genery;
        $y1 = $sourceCoords->hobby;
        $w1 = $sourceCoords->travel;
        $z1 = $sourceCoords->drink;
        $distances = array();
        foreach ($data as $destinationKey => $destinationCoords) {
            // Same point, ignore
            if ($sourceKey === $destinationKey) {
                continue;
            }
//            list ($x2, $y2, $w2, $z2) = $destinationCoords;
            $x2 = $destinationCoords->genery;
            $y2 = $destinationCoords->hobby;
            $w2 = $destinationCoords->travel;
            $z2 = $destinationCoords->drink;
//            dd($x2);
            $distances[$destinationKey] = sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2) + pow($w1 - $w2, 2) + pow($z1 - $z2, 2));
        }
        asort($distances);
        return $distances;

    }

    /**
     * Returns n-nearest neighbors
     *
     * @param array $distances Distances generated above ^
     * @param mixed $key Array key of source location
     * @param int $num Of neighbors to fetch
     * @return array Of nearest neighbors
     */
    public function getNearestNeighbors($distances, $key, $num)
    {
        return array_slice($distances[$key], 0, $num, true);
    }

    /**
     * Gets result label from associated data
     *
     * @param array $data
     * @param array $neighbors Result from getNearestNeighbors()
     * @return string label
     */
    public function getLabel($neighbors)
    {
//        dd($neighbors);
//        $results = array();
//        $neighbors = array_keys($neighbors);
        foreach ($neighbors as $key => $neighbor) {
            $results[] = $this->find($key)->product;
        }
        $values = array_count_values($results);
        $values = array_flip($values);
        ksort($values);
        return array_pop($values);
    }

    public function getVizinhos($neighbors)
    {
        $results = array();
//        $neighbors = array_keys($neighbors);
        foreach ($neighbors as $key => $neighbor) {
            $results[] = $this->find($key)->product;
        }
        return $results;
    }


}
