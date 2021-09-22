<?php
namespace Classes;

class SuperDigit
{
    /**
     * @param array $numbers
     * @return int
     */
    public function calculate(array $numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }

        if ($total > 9) {
            $total =  (str_split((int) $total));
            $total = self::calculate($total);
        }
        return $total;
    }
}
