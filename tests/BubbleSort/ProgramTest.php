<?php

namespace Tests\BubbleSort;

use PHPUnit\Framework\TestCase;
use App\BubbleSort\Program;

class ProgramTest extends TestCase
{
	/**
	 * @test
	 *
	 * @dataProvider unsortItemsProvider
	 */
	public function GivenUnsortItems_WhenCall_ThenSort(array $unsortItems, array $expected)
	{
		//Arrange
		$this->sut = new Program();

		//Act
		$actual = $this->sut->sort($unsortItems);

		//Assert
		$this->assertEquals($expected, $actual);
	}

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
