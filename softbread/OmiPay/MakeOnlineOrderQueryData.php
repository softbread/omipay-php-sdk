<?php

namespace Softbread\OmiPay;

class MakeOnlineOrderQueryData extends MakeOrderQueryData
{
    /**
     * Set pay type
     * 设置支付类型
     * @param string $value
     **/
    public function setPayType($value)
    {
        $this->parameters['type'] = $value;
    }
    
    /**
     * Get pay type
     * 获取支付类型
     * @return string
     **/
    public function getPayType()
    {
        return $this->parameters['type'];
    }
    
    /**
     * Set Return URL
     * @param string $value
     **/
    public function setReturnUrl($value)
    {
        $this->parameters['return_url'] = $value;
    }
    
    /**
     * Get Return URL
     * @return string
     **/
    public function getReturnUrl()
    {
        return $this->parameters['return_url'];
    }
    
}
