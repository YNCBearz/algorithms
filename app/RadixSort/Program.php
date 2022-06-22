<?php

namespace App\RadixSort;

class Program
{
    public function sort(array $unsortedItems): array
    {
        $max = max($unsortedItems);

        $numberOfDigits = strlen((string)$max);

        $unsortedItems = $this->convertToStringWithZero($unsortedItems, $numberOfDigits);
        $grouped = $this->emptyGroup();

        foreach ($unsortedItems as $unsortedItem) {
            $number = $unsortedItem % 10;
            $grouped[$number][] = $unsortedItem;
        }

        if ($numberOfDigits == 1) {
            return $this->flatten($grouped);
        }

        for ($digit = 2; $digit <= $numberOfDigits; $digit++) {
            $grouped = $this->sortByDigitNumber($grouped, $digit);
        }

        return $this->flatten($grouped);
    }

    /**
     * @param array $unsortedItems
     * @param int $numberOfDigits
     * @return array
     */
    private function convertToStringWithZero(array $unsortedItems, int $numberOfDigits): array
    {
        $result = [];
        foreach ($unsortedItems as $unsortedItem) {
            $unsortedItemsWithZero = str_pad($unsortedItem, $numberOfDigits, '0', STR_PAD_LEFT);
            $result[] = $unsortedItemsWithZero;
        }

        return $result;
    }

    private function emptyGroup(): array
    {
        return [
            0 => [],
            1 => [],
            2 => [],
            3 => [],
            4 => [],
            5 => [],
            6 => [],
            7 => [],
            8 => [],
            9 => [],
        ];
    }

    private function flatten(array $grouped): array
    {
        $result = [];

        foreach ($grouped as $number => $items) {
            foreach ($items as $item) {
                $result[] = (int)$item;
            }
        }

        return $result;
    }

    private function sortByDigitNumber(array $grouped, int $digit): array
    {
        $result = $this->emptyGroup();
        $flatten = $this->flatten($grouped);

        foreach ($flatten as $item) {
            $number = $this->getCurrentDigitNumber($item, $digit);
            $result[$number][] = $item;
        }

        return $result;
    }

    public function getCurrentDigitNumber(int $item, int $digit): int
    {
        $digitNumber = $item % 10;

        if ($digit == 1) {
            return $digitNumber;
        }

        for ($i = 2; $i <= $digit; $i++) {
            $item = ($item - ($item % 10)) / 10;
            $digitNumber = $item % 10;
        }

        return $digitNumber;
    }

}
