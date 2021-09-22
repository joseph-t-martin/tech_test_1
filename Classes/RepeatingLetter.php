<?php
namespace Classes;

class RepeatingLetter
{
    /**
     * @param string $word
     * @return bool
     */
    public function hasNoRepeatedLetters(string $word): bool
    {
        //Make sure all letters are in same case
        $word = strtolower($word);

        //Remove any non letter characters
        $word = preg_replace("/[^A-Za-z]/", '', $word);

        $word_arr = str_split($word);

        return count($word_arr) === count(array_unique($word_arr));
    }
}
