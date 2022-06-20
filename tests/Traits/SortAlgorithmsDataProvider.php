<?php

namespace Tests\Traits;

trait SortAlgorithmsDataProvider
{
    public function unsortedItemsProvider()
    {
        return [
            [
                [4, 5, 1, 3, 2],
                [1, 2, 3, 4, 5],
            ],
            [
                [0],
                [0],
            ],
            [
                [1, 2, 3],
                [1, 2, 3],
            ],
            [
                [2, 1],
                [1, 2],
            ],
            [
                [101, 20, 50, 1, 37],
                [1, 20, 37, 50, 101],
            ],
        ];
    }
}
