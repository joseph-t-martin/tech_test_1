<?php
namespace tests\Unit;

use Classes\StringMerge;
use PHPUnit\Framework\TestCase;

class StringMergeTest extends TestCase
{
    /**
     * @test
     */
    public function checkForRepeatingLetters()
    {
        $dataset = [
            [
                'first_string' => 'MICHAEL',
                'second_string' => 'JORDAN',
                'expected' => 'MJIOCRHDAAENL',
            ],
            [
                'first_string' => 'Hello',
                'second_string' => 'There',
                'expected' => 'HTehlelroe',
            ],
        ];

        $string_merger = new StringMerge();
        foreach($dataset as $data) {
            $result = $string_merger->merge($data['first_string'], $data['second_string']);
            $this->assertEquals($data['expected'], $result, 'Expected value for ' . $data['first_string'] . ' '
                . $data['second_string'] .' is incorrect');
        }
    }
}
