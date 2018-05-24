<?php

namespace Softbread\OmiPay;

/**
 * Refund Request Query Data
 * 退款申请对象
 */
class RefundQueryData extends OmiData
{
    /**
     * Set Omipay Order number
     * 设置Omipay订单编号
     *
     * @param string $value
     **/
    public function setOrderNo($value)
    {
        $this->parameters['order_no'] = $value;
    }
    
    /**
     * Get Omipay Order number
     * 获取Omipay订单编号
     *
     * @return string
     **/
    public function getOrderNo()
    {
        return $this->parameters['order_no'];
    }
    
    /**
     * Set external refund number (merchant ref)
     * 设置外部退款单号
     *
     * @param string $value
     **/
    public function setOutRefundNo($value)
    {
        $this->parameters['out_refund_no'] = $value;
    }
    
    /**
     * Get external refund number (merchant ref)
     * 获取外部退款单号
     *
     * @return string
     **/
    public function getOutRefundNo()
    {
        return $this->parameters['out_refund_no'];
    }
    
    /**
     * Set refund amount, currency type is the same as the original order.
     * 设置退款金额，货币类型为订单货币类型。单位是货币最小单位
     *
     * @param string $value
     **/
    public function setAmount($value)
    {
        $this->parameters['amount'] = $value;
    }
    
    /**
     * Set refund amount
     * 获取退款金额
     *
     * @return string
     **/
    public function getAmount()
    {
        return $this->parameters['amount'];
    }
}
