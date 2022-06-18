<?php

namespace App\SelectionSort;

class Program
{
	public function sort(array $unsortedItems): array
	{
		$itemCount = count($unsortedItems);

		for ($i = 0; $i < $itemCount - 1; $i++) {
			$minInfo = $this->findMin($unsortedItems, $i);

			$unsortedItems = $this->swap($unsortedItems, $i, $minInfo);
		}

		return $unsortedItems;
	}

	private function findMin(array $unsortedItems, int $currentIndex): array
	{
		$sliceItems = array_slice($unsortedItems, $currentIndex);

		$min = min($sliceItems);
		$minKey = array_keys($unsortedItems, min($sliceItems))[0];

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
