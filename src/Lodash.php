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
        $result = [];
        $args = func_get_args();
        foreach ($args as $arg) {
            $result = $this->pusher($result, $arg);
        }

        return $result;
    }

    private function pusher($result, $input)
    {
        if ($input) array_push($result, is_array($input) ? reset($input) : $input);

        return $result;
    }
}
