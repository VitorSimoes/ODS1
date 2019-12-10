<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $fillable = ['id', 'fragancy', 'teor', 'price', 'id_product', 'id_user'];

    public function product()
    {
        return $this->hasOne(Product::class,'id','id_product');
    }

    function euclideanDistance(&$sourceCoords, $sourceKey, $data)
    {
        $x1 = $sourceCoords->fragancy;
        $y1 = $sourceCoords->teor;
        $w1 = $sourceCoords->price;
        $distances = array();
        foreach ($data as $destinationKey => $destinationCoords) {
            // Same point, ignore
            if ($sourceKey === $destinationKey) {
                continue;
            }
            $x2 = $destinationCoords->fragancy;
            $y2 = $destinationCoords->teor;
            $w2 = $destinationCoords->price;

            $distances[$destinationKey] = sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2) + pow($w1 - $w2, 2));
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
            $results[] = $this->find($key)->product->name;
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
            $results[] = $this->find($key)->product->name;
        }
        return $results;
    }
}
