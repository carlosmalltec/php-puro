<?php


class Time
{
    public function diaMesAno($sData = null)
    {
        $data = new DateTime($sData);
        return $data->format('d/m/Y');
    }
}
