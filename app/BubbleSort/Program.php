<?php

namespace App\BubbleSort;

class Program
{
	public function sort(array $unsortItems): array
	{
		$firstIndex = 0;
		$lastIndex = count($unsortItems) - 1;

		for ($j = $lastIndex; $j > $firstIndex; $j--) {
			for ($i = $lastIndex; $i > $firstIndex; $i--) {
				if ($unsortItems[$i] < $unsortItems[$i - 1]) {
					$unsortItems = $this->swap($unsortItems, $i, $i - 1);
				}
			}
		}

		$result = $unsortItems;
		return $result;
	}

	private function swap(array $unsortItems, int $i, int $j): array
	{
		$itemA = $unsortItems[$i];
		$itemB = $unsortItems[$j];

		$unsortItems[$j] = $itemA;
		$unsortItems[$i] = $itemB;

		return $unsortItems;
	}
}
