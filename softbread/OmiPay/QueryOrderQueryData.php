<?php

namespace Softbread\OmiPay;

/**
 * Query Order Data
 * 查询订单对象
 */
class QueryOrderQueryData extends OmiData
{
    /**
     * Set Omipay order number
     * 设置Omipay订单编号
     * @param string $value
     **/
    public function setOrderNo($value)
    {
        $this->parameters['order_no'] = $value;
    }
    
    /**
     * Get Omipay order number
     * @return string
     **/
    public function getOrderNo()
    {
        return $this->parameters['order_no'];
    }
}
