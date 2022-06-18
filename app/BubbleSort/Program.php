<?php

namespace App\BubbleSort;

class Program
{
	public function sort(array $unsortedItems): array
	{
		$firstIndex = 0;
		$lastIndex = count($unsortedItems) - 1;

		for ($j = $lastIndex; $j > $firstIndex; $j--) {
			for ($i = $lastIndex; $i > $firstIndex; $i--) {
				if ($unsortedItems[$i] < $unsortedItems[$i - 1]) {
					$unsortedItems = $this->swap($unsortedItems, $i, $i - 1);
				}
			}
		}

		$result = $unsortedItems;
		return $result;
	}

	private function swap(array $unsortedItems, int $i, int $j): array
	{
		$itemA = $unsortedItems[$i];
		$itemB = $unsortedItems[$j];

		$unsortedItems[$j] = $itemA;
		$unsortedItems[$i] = $itemB;

		return $unsortedItems;
	}
}
