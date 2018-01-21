<?php

class CatalogTest extends \TestCase
{
    public function testCalculate()
    {
        $answer = $this->getMock(User::class);
        //наполнения имитированного объекта данными
        //в обьекте $answer есть метод calculate, который возращает 100
        $answer->method('calculate')->willReturn(100);
        $this->assertEquals(10, 10);

        //ожидаю,  что метод calculate имитированного объекта будет вызван только один раз
        $answer->expects($this->once())->method('calculate')->willReturn(100);

        //ожидаю,  что метод calculate имитированного объекта будет вызван любое количество раз
        $answer->expects($this->any())->method('calculate')->willReturn(100);

        //ожидаю,  что метод calculate имитированного объекта не будет вызван никогда
        $answer->expects($this->never())->method('calculate')->willReturn(100);
    }
}


class CatalogInternetTest extends \TestCase
{
    /**
     * @return array
     */
    public static function visitDataProvider()
    {
        return [
            ['firstValueParameter', 'secondValueParameter', 'thirdValueParameter'],
            ['1firstValueParameter', '1secondValueParameter', '1thirdValueParameter'],
            ['2firstValueParameter', '2secondValueParameter', '2thirdValueParameter']
        ];
    }

    /**
     * @dataProvider visitDataProvider
     *
     * @param $firstValueParameter
     * @param $secondValueParameter
     * @param $thirdValueParameter
     */
    public function testCalculate( $firstValueParameter, $secondValueParameter, $thirdValueParameter )
    {
        //all data will be loaded from visitDataProvider()
        //use parameters
        $check = $firstValueParameter + $secondValueParameter + $thirdValueParameter;

        $this->assertEquals(10, $check);
    }
}

