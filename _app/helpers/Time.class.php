<?php


class Time
{
    public function diaMesAno($sData = null)
    {
        $data = new DateTime($sData);
        return $data->format('d/m/Y');
    }

    public function validateDate($date, $format = 'Y-m-d H:i:s'){
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    // verifica se a data é valida formato d/m/y
    public function checkDate($data)
    {
        $data = explode('/', $data);
        if (checkdate($data[1], $data[0], $data[2])) {
            return true;
        }
        return false;
    }
// compara intervalo entre as datas, retorna objeto
// formato de inpute y-m-d h:i:s
    public function diferencaEntreDatas($dataInicio, $dataTermino, $tipo = 'y'){
        $date  = new DateTime($dataInicio);
        $date2 = new DateTime($dataTermino);
        if($tipo == 'y'){
            $diff = $date->diff($date2);
            return intval($diff->y);
        }
        return $date->diff($date2);
    }
    /**
     * date
     *
     * Converte os valores para serem salvos no DB
     * a referência para conversão é o sufixo do campo que identifica o tipo de valor
     *
     * @param string $sValue
     * @return string
     */
    public function convertToDB($sValue)
    {
        if (strstr($sValue, '-')) {
            return $sValue;
        }
        if ($sValue) {
            if (strstr($sValue, ' ')) {
                // datetime
                list($sDate, $sTime) = explode(' ', $sValue);
                list($sDay, $sMonth, $sYear) = explode('/', $sDate);
            } else {
                $aDate = explode('/', $sValue);
                if (count($aDate) == 2) {
                    // monthyear
                    $sDay = 1;
                    list($sMonth, $sYear) = $aDate;
                } else {
                    // date
                    list($sDay, $sMonth, $sYear) = $aDate;
                }
            }

            $sDay = substr('00' . $sDay, -2);
            $sMonth = substr('00' . $sMonth, -2);
            if (isset($sYear)) {
                $iYear = (int) $sYear;
                if ($iYear > 99 && $iYear < 1000) {
                    $sYear = substr('1' . $iYear, -4);
                } else if ($iYear > 19 and $iYear < 100) {
                    $sYear = substr('19' . $iYear, -4);
                } else if ($iYear > 9 and $iYear < 20) {
                    $sYear = substr('20' . $iYear, -4);
                } else {
                    $sYear = substr('200' . $iYear, -4);
                }
            }

            $sDate = $sYear . '-' . $sMonth . '-' . $sDay;
            if (isset($sTime)) {
                $sDate .= ' ' . $sTime;
            }
            return $sDate;
        }
    }
}
