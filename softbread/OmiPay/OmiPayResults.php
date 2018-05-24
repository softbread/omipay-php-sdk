<?php

namespace Softbread\OmiPay;

/**
 *
 * class for API Response
 *
 */
class OmiPayResults extends OmiData
{
    public static function init($array)
    {
        $obj = new self();
        $obj->fromArray($array);
        return $obj->getReceivedData();
    }
    
    public function fromArray($array)
    {
        $this->receivedData = json_decode($array, true);
    }
    
    public function setLanguage($value)
    {
        $this->parameters['language'] = $value;
    }
    
    public function getLanguage()
    {
        return $this->parameters['language'];
    }
}
