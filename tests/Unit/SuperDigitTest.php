<?php
namespace tests\Unit;

use Classes\SuperDigit;
use PHPUnit\Framework\TestCase;

class SuperDigitTest extends TestCase
{
    /**
     * @test
     */
    public function calculateSuperDigit()
    {
        $dataset = [
            [
                'values' => [
                    4
                ],
                'expected' => 4,
            ],
            [
                'values' => [
                    1, 8
                ],
                'expected' => 9,
            ],
            [
                'values' => [
                    2, 5, 8
                ],
                'expected' => 6,
            ],
        ];

        $super_digit = new SuperDigit();
        foreach($dataset as $data) {
            $result = $super_digit->calculate($data['values']);
            $this->assertEquals($data['expected'], $result);
        }
    }
}
