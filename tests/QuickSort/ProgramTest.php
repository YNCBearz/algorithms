<?php

namespace Tests\QuickSort;

use App\QuickSort\Program;
use PHPUnit\Framework\TestCase;
use Tests\Traits\SortAlgorithmsDataProvider;

class ProgramTest extends TestCase
{
    use SortAlgorithmsDataProvider;

    protected Program $sut;

    /**
     * @test
     *
     * @dataProvider unsortedItemsProvider
     */
//    public function GivenUnsortedItems_WhenCall_ThenSort(array $unsortedItems, array $expected)
//    {
//        //Arrange
//        $this->sut = new Program();
//
//        //Act
//        $actual = $this->sut->sort($unsortedItems);
//
//        //Assert
//        $this->assertEquals($expected, $actual);
//    }

    /**
     * @test
     */
    public function GivenOneItem_WhenCall_ThenReturn()
    {
        //Arrange
        $this->sut = new Program();

        $unsortedItems = [1];

        $expected = [1];

        //Act
        $actual = $this->sut->sort($unsortedItems);

        //Assert
        $this->assertEquals($expected, $actual);
    }
}
