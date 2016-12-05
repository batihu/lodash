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
        $result = array_filter($input);
        sort($result);

        return $result;
    }
}
