<?php
namespace Classes;

class DateParser
{
    /**
     * @param string $date
     * @return string
     */
    public function formatDate(string $date): string
    {
        $date = str_replace("The", '', $date);
        return date('Y-m-d', strtotime($date));
    }
}
