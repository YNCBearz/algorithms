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
