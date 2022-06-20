<?php

namespace App\QuickSort;

class Program
{
    public function sort(array $unsortedSortItems): array
    {
        if (count($unsortedSortItems) <= 1) {
            return $unsortedSortItems;
        }

        $pivot = array_shift($unsortedSortItems);

        $left = [];
        $right = [];
        foreach ($unsortedSortItems as $unsortedSortItem) {
            if ($unsortedSortItem <= $pivot) {
                $left[] = $unsortedSortItem;
            } else {
                $right[] = $unsortedSortItem;
            }
        }

        return array_merge($this->sort($left), [$pivot], $this->sort($right));
    }
}
