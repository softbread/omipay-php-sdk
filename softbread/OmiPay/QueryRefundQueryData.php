<?php


namespace Softbread\OmiPay;

class QueryRefundQueryData extends OmiData
{
    /**
     * Set Omipay Refund Number
     * 设置Omipay退款单号
     *
     * @param string $value
     **/
    public function setRefundNo($value)
    {
        $this->parameters['refund_no'] = $value;
    }
    
    /**
     * Get Omipay Refund Number
     * 获取Omipay退款单号
     *
     * @return string
     **/
    public function getRefundNo()
    {
        return $this->parameters['refund_no'];
    }
}
