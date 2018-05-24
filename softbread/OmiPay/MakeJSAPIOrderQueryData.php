<?php

namespace Softbread\OmiPay;


class MakeJSAPIOrderQueryData extends MakeOrderQueryData
{
    /**
     * Set if the transaction is direct pay
     * 设置是否直接支付
     *
     * @param string $value
     **/
    public function setDirectPay($value)
    {
        $this->parameters['direct_pay'] = $value;
    }
    
    /**
     * Get if the transaction is direct pay
     * 获取是否直接支付
     *
     * @return 值
     **/
    public function getDirectPay()
    {
        return $this->parameters['direct_pay'];
    }
    
    /**
     * Set if the payment is through PC
     * 设置是否PC支付
     *
     * @param string $value
     **/
    public function setPcPay($value)
    {
        $this->parameters['show_pc_pay_url'] = $value;
    }
    
    /**
     * Get if the payment is through PC
     * 获取是否PC支付
     *
     * @return 值
     **/
    public function getPcPay()
    {
        return $this->parameters['show_pc_pay_url'];
    }
    
}
