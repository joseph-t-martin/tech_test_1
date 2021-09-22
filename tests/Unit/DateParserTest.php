<?php
namespace tests\Unit;

use Classes\DateParser;
use PHPUnit\Framework\TestCase;

class DateParserTest extends TestCase
{
    /**
     * @test
     */
    public function checkForRepeatingLetters()
    {
        $dataset = [
            [
                'value' => 'The first Monday of October 2019',
                'expected' => '2019-10-07',
            ],
            [
                'value' => 'The second Wednesday of October 2019',
                'expected' => '2019-10-09',
            ],
            [
                'value' => 'The third Tuesday of October 2019',
                'expected' => '2019-10-15',
            ],
            [
                'value' => 'The fourth Wednesday of October 2019',
                'expected' => '2019-10-23',
            ],
            [
                'value' => 'The fifth Wednesday of September 2021',
                'expected' => '2021-09-29',
            ],
            [
                'value' => 'The last Wednesday of October 2019',
                'expected' => '2019-10-30',
            ],
        ];

    $date_parser = new DateParser();
        foreach($dataset as $data) {
            $result = $date_parser->formatDate($data['value']);
            $this->assertEquals($data['expected'], $result, 'Expected value for ' . $data['value'] . ' is incorrect');
        }
    }
}
