<?php

namespace Konstmal\Separator;

class Separator
{

    /**
     * Create a new Separator Instance
     */
    public function __construct()
    {
    }

    /**
     * Static method to separate an array
     *
     * @param array $array Input array to separate
     * @param int $n Number to use in separation rule
     *
     * @return int Returns the position of separator
     */
    public static function separate($array, $n)
    {
        $n_count = 0;
        $not_n_count = 0;
        $result = -1;

        //I don't understand how to do this by one run, but two runs has the same algorithm complexity as one, AFAIK

        foreach ($array as $value) {
            if ($value != $n)
                $not_n_count++;
        }

        $i = 0;

        while ($i < count($array) && ($result == -1)) {
            if ($array[$i] == $n)
                $n_count++;
            else
                $not_n_count--;

            if (($n_count == $not_n_count) && ($n_count > 0))
                $result = $i + 1;

            $i++;
        }

        return $result;
    }
}
