<?php
namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use Classes\RepeatingLetter;

class RepeatingLetterTest extends TestCase
{
    /**
     * @test
     */
    public function checkForRepeatingLetters()
    {
        $dataset = [
            [
                'value' => 'documentarily',
                'expected' => true,
            ],
            [
                'value' => 'aftershock',
                'expected' => true,
            ],
            [
                'value' => 'countryside',
                'expected' => true,
            ],
            [
                'value' => '!234six-year-old',
                'expected' => true,
            ],
            [
                'value' => 'Double-down',
                'expected' => false,
            ],
            [
                'value' => 'Euclidean',
                'expected' => false,
            ],
            [
                'value' => 'epidemic',
                'expected' => false,
            ],
        ];

        $repeating_letter = new RepeatingLetter();
        foreach($dataset as $data) {
            $result = $repeating_letter->hasNoRepeatedLetters($data['value']);
            $this->assertEquals($data['expected'], $result, 'Expected value for ' . $data['value'] . ' is incorrect');
        }
    }
}
