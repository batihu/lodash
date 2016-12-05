<?php

namespace Lodash;

class Lodash
{
    public function chunk($tomb, $oszto)
    {
        return array_chunk($tomb, $oszto);
    }

    public function compact(array $input)
    {
        foreach ($input as $item) {
            if ($item)
            $result [] = $item;
        }
        sort($result);

        return $result;
    }
}
