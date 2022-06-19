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

        $rightItems = [];
        $leftItems = [];
        foreach ($unsortedSortItems as $unsortedSortItem) {
            if ($unsortedSortItem >= $pivot) {
                $rightItems[] = $unsortedSortItem;
            } else {
                $leftItems[] = $unsortedSortItem;
            }
        }

        $result = [];

        foreach ($leftItems as $leftItem) {
            $result[] = $leftItem;
        }

        $result[] = $pivot;

        foreach ($rightItems as $rightItem) {
            $result[] = $rightItem;
        }

        return $result;
    }
}
