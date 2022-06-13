<?php

namespace Tests\BubbleSort;

use PHPUnit\Framework\TestCase;
use App\BubbleSort\Program;
use Tests\Traits\SortAlgorithmsDataProvider;

class ProgramTest extends TestCase
{
	use SortAlgorithmsDataProvider;

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
}
