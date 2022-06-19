<?php

namespace App\MergeSort;

class Program
{
    public function sort(array $unsortedItems): array
    {
        $container = $this->initContainer($unsortedItems);

        while (count($container) > 1) {
            $firstArray = array_shift($container);
            $secondArray = array_shift($container);

            $merged = $this->mergeToOne($firstArray, $secondArray);

            $container[] = $merged;
        }

        $result = $container[0];

        return $result;
    }

    private function mergeToOne(array $firstArray, array $secondArray = []): array
    {
        $result = [];

        $firstArrayItem = null;
        $secondArrayItem = null;

        while (count($firstArray) > 0 && count($secondArray) > 0) {
            if (is_null($firstArrayItem)) {
                $firstArrayItem = $firstArray[0];
            }

            if (is_null($secondArrayItem)) {
                $secondArrayItem = $secondArray[0];
            }

            if ($firstArrayItem <= $secondArrayItem) {
                $result[] = $firstArrayItem;
                array_shift($firstArray);
                $firstArrayItem = null;
            } else {
                $result[] = $secondArrayItem;
                array_shift($secondArray);
                $secondArrayItem = null;
            }
            continue;
        }

        if (count($firstArray) > 0) {
            $result = array_merge($result, $firstArray);
        }

        if (count($secondArray) > 0) {
            $result = array_merge($result, $secondArray);
        }

        return $result;
    }

    private function initContainer(array $unsortedItems): array
    {
        $result = [];

        foreach ($unsortedItems as $unsortedItem) {
            $result[] = [$unsortedItem];
        }

        return $result;
    }
}