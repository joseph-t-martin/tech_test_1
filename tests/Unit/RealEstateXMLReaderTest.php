<?php
namespace tests\Unit;

use Classes\RealEstateXMLReader;
use PHPUnit\Framework\TestCase;

class RealEstateXMLReaderTest extends TestCase
{
    /**
     * @test
     */
    public function readXML()
    {
        $super_digit = new RealEstateXMLReader();
        $result = $super_digit->read();
        $this->assertIsArray($result);
    }
}
