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
        $result = $this->pusher($result, $i0);
        $result = $this->pusher($result, $i1);
        $result = $this->pusher($result, $i2);
        $result = $this->pusher($result, $i3);

        return $result;
    }

    private function pusher($result, $input)
    {
        if ($input) array_push($result, is_array($input) ? reset($input) : $input);

        return $result;
    }
}
