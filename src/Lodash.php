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

    public function concat($i0, $i1 = null, $i2 = null, $i3 = null)
    {
        $result=[];
         if ($i0) array_push($result, is_array($i0) ? reset($i0) : $i0);
        if ($i1)array_push($result, is_array($i1) ? reset($i1) : $i1);
        if ($i2)array_push($result, is_array($i2) ? reset($i2) : $i2);
        if ($i3)array_push($result, is_array($i3) ? reset($i3) : $i3);
        return $result;
    }
}
