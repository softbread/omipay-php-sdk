<?php

namespace Softbread\OmiPay;

class OmiPayExchangeRate extends OmiData
{
    
    public function setCurrency($value)
    {
        $this->parameters['currency'] = $value;
    }
    
    public function getCurrency()
    {
        return $this->parameters['currency'];
    }
    
    public function setBaseCurrency($value)
    {
        $this->parameters['base_currency'] = $value;
    }
    
    public function getBaseCurrency()
    {
        return $this->parameters['base_currency'];
    }
}
