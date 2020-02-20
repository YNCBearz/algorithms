<?php
namespace App\GreedyAlgorithms;

$class = new StationCoverCity();
var_dump($class->getFinalStations());

class StationCoverCity
{
    protected $cities_needed = ['Taipei', 'Kaohsiung', 'Hsinchu', 'Taichung'];
    protected $stations = [
        'KissRadio' => ['Kaohsiung', 'Pingtung', 'Tainan'],
        'BestRadio' => ['Kaohsiung', 'Miaoli', 'Chiayi', 'Hsinchu'],
        'ICRT' => ['Taipei', 'Tainan', 'New Taipei'],
        'PainoRadio' => ['Taipei', 'Taichung'],
        // 'GodRadio' => ['Taipei', 'Kaohsiung', 'Hsinchu', 'Taichung'],
        'FreeRadio' => ['Taichung', 'Taitung'],
        'SportRadio' => ['Hsinchu'],
    ];

    protected $selected_stations = [];

    public function getFinalStations()
    {
        //貪婪演算法，每次找出覆蓋最多城市的電台，直到全部覆蓋
        while (count($this->cities_needed) > 0) {
            $best_station = null;
            $best_station_covered_cities = [];

            foreach ($this->stations as $station => $covered_cities) {
                $covered_cities_amount = count(array_intersect($this->cities_needed, $covered_cities));

                if ($covered_cities_amount > count($best_station_covered_cities)) {
                    $best_station = $station;
                    $best_station_covered_cities = $covered_cities;
                }
            }

            $this->selected_stations[] = $best_station;
            $this->cities_needed = array_diff($this->cities_needed, $best_station_covered_cities);
            unset($this->stations[$best_station]);
        }

        return $this->selected_stations;
    }
}

