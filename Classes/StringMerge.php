<?php
namespace Classes;

class StringMerge
{
    /**
     * @param string $first_string
     * @param string $second_string
     * @return string
     */
    public function merge(string $first_string, string $second_string): string
    {
        $first_string_arr = str_split($first_string);
        $second_string_arr = str_split($second_string);

        // Work out the longer of the strings
        $longer_string_arr = $first_string_arr;
        if (count($first_string_arr) < count($second_string_arr)) {
            $longer_string_arr = $second_string_arr;
        }

        $string = '';
        foreach ($longer_string_arr as $key => $a) {
            if (isset($first_string_arr[$key])) {
                $string .= $first_string_arr[$key];
            }

            if (isset($second_string_arr[$key])) {
                $string .= $second_string_arr[$key];
            }
        }
        return $string;
    }
}
