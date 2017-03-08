<?php

namespace Marello\Bundle\ProductBundle\Tests\Functional\DataFixtures;

use Marello\Bundle\DemoDataBundle\Migrations\Data\Demo\ORM\LoadProductData;
use Marello\Bundle\SalesBundle\Tests\Functional\DataFixtures\LoadSalesDataTest;
use Marello\Bundle\SupplierBundle\Tests\Functional\DataFixtures\LoadSupplierData;

class LoadProductDataTest extends LoadProductData
{
    public function getDependencies()
    {
        return [
            LoadSalesDataTest::class,
            LoadSupplierData::class
        ];
    }

    /**
     * Get dictionary file by name
     * @param $name
     * @return string
     */
    protected function getDictionary($name)
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'dictionaries' . DIRECTORY_SEPARATOR . $name;
    }
}