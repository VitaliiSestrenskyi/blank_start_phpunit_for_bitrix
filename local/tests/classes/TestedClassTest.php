<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 15.07.17
 * Time: 15:17
 */

class TestedClassTest extends \PHPUnit_Framework_TestCase
{
    protected $obElement;
    protected $obCatalog;

    public function setUp()
    {
        $this->obElement = new \CIBlockElement();
        $this->obCatalog = new \CCatalogProduct();
    }

    public function testCIblockElement()
    {
        $rs = $this->obElement->GetList(
            [],
            ['IBLOCK_CODE'=>'clothes'],
            false,
            false,
            ['ID']
        );
        $count = 0;
        while ($res = $rs->fetch())
            $count++;

        $this->assertTrue($count>0, 'В инфоблоке нет товаров');
    }

    public function testMyTest()
    {
        $this->assertTrue(true);
    }

    public function testIfModulesInstalled()
    {
        $this->assertTrue(Bitrix\Main\ModuleManager::IsModuleInstalled("iblock"), 'Модуль "iblock" не установлен.');
        $this->assertTrue(Bitrix\Main\ModuleManager::IsModuleInstalled("catalog"), 'Модуль "catalog" не установлен.');
        $this->assertTrue(Bitrix\Main\ModuleManager::IsModuleInstalled("sale"), 'Модуль "sale" не установлен.');
    }

    public function tearDown()
    {
        unset($this->obElement);
        unset($this->obCatalog);
    }
}

