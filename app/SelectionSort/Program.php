<?php

namespace App\SelectionSort;

class Program
{
	public function sort(array $unsortItems): array
	{
		$itemCount = count($unsortItems);

		for ($i = 0; $i < $itemCount - 1; $i++) {
			$minInfo = $this->findMin($unsortItems, $i);

			$unsortItems = $this->swap($unsortItems, $i, $minInfo);
		}

		return $unsortItems;
	}

	private function findMin(array $unsortItems, int $currentIndex): array
	{
		$sliceItems = array_slice($unsortItems, $currentIndex);

		$min = min($sliceItems);
		$minKey = array_keys($unsortItems, min($sliceItems))[0];

		return [
			'value' => $min,
			'key' => $minKey,
		];
	}

	private function swap(array $unsortItems, int $currentIndex, array $minInfo): array
	{
		$itemA = $unsortItems[$currentIndex];
		$itemB = $minInfo['value'];

		$unsortItems[$currentIndex] = $itemB;
		$unsortItems[$minInfo['key']] = $itemA;

		return $unsortItems;
	}
}
