<?php

namespace Tests\RadixSort;

use App\RadixSort\Program;
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
    public function GivenUnsortedItems_WhenCall_ThenSort(array $unsortedItems, array $expected)
    {
        //Arrange
        $this->sut = new Program();

        //Act
        $actual = $this->sut->sort($unsortedItems);

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function GivenInteger_WhenCallCurrentDigitNumber_ThenReturnDigitNumber()
    {
        //Arrange
        $this->sut = new Program();

        $item = 135;

        //Act
        //Assert
        $this->assertEquals(5, $this->sut->getCurrentDigitNumber($item, 1));
        $this->assertEquals(3, $this->sut->getCurrentDigitNumber($item, 2));
        $this->assertEquals(1, $this->sut->getCurrentDigitNumber($item, 3));
    }

}
