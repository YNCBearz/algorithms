<?php

namespace Tests\SelectionSort;

use PHPUnit\Framework\TestCase;
use Tests\Traits\SortAlgorithmsDataProvider;
use App\SelectionSort\Program;

class ProgramTest extends TestCase
{
	use SortAlgorithmsDataProvider;

	protected Program $sut;

	/**
	 * @test
	 *
	 * @dataProvider unsortedItemsProvider
	 */
	public function GivenUnsortedItems_WhenCall_ThenSort(array $unsortedItems, array $expected)
	{
		//Arrange
		$this->sut = new Program();

		//Act
		$actual = $this->sut->sort($unsortedItems);

		//Assert
		$this->assertEquals($expected, $actual);
	}
}
