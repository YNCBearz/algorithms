<?php

namespace Tests\Traits;

trait SortAlgorithmsDataProvider
{
	public function unsortItemsProvider()
	{
		return [
			[
				[4, 5, 1, 3, 2],
				[1, 2, 3, 4, 5]
			],
			[
				[0],
				[0]
			],
			[
				[1, 2, 3],
				[1, 2, 3]
			],
		];
	}
}
