<?php

namespace Softbread\OmiPay;


class MakeOrderQueryData extends OmiData
{
    /**
     * Set order name
     * 设置订单名称
     *
     * @param string $value
     **/
    public function setOrderName($value)
    {
        $this->parameters['order_name'] = $value;
    }
    
    /**
     * Get order Name
     * 获取订单名称
     **/
    public function getOrderName()
    {
        return $this->parameters['order_name'];
    }
    
    /**
     * Set external Order Number (Merchant reference)
     * 设置外部订单号
     *
     * @param string $value
     **/
    public function setOutOrderNo($value)
    {
        $this->parameters['out_order_no'] = $value;
    }
    
    /**
     * Get external Order Number (Merchant reference)
     * 获取外部订单号
     **/
    public function getOutOrderNo()
    {
        return $this->parameters['out_order_no'];
    }
    
    /**
     * 设置货币类型
     * 允许值: AUD, CNY
     *
     * @param string $value
     **/
    public function setCurrency($value)
    {
        $this->parameters['currency'] = $value;
    }
    
    /**
     * Get order currency type
     * 获取货币类型
     **/
    public function getCurrency()
    {
        return $this->parameters['currency'];
    }
    
    /**
     * Set order amount
     * 设置订单金额，单位为当前货币最小单位
     *
     * @param string $value
     **/
    public function setAmount($value)
    {
        $this->parameters['amount'] = $value;
    }
    
    /**
     * Get order amount
     * 获取订单金额
     *
     * @return int
     **/
    public function getAmount()
    {
        return $this->parameters['amount'];
    }
    
    /**
     * 设置支付通知url,该URL需要为安全域名下。
     *
     * @param string $value
     **/
    public function setNotifyUrl($value)
    {
        $this->parameters['notify_url'] = $value;
    }
    
    /**
     * Get payment notify URL
     * 获取支付通知url
     *
     * @return string
     **/
    public function getNotifyUrl()
    {
        return $this->parameters['notify_url'];
    }
    
    /**
     * Set if Allow Redirect URL after payment succeed
     *
     * @param string $value
     **/
    public function setRedirect($value)
    {
        $this->parameters['redirect'] = $value;
    }
    
    /**
     * Set Redirect URL after payment succeed
     *
     * @param string $value
     **/
    public function setRedirectUrl($value)
    {
        $this->parameters['redirect_url'] = $value;
    }
    
    /**
     * Get Redirect URL after payment succeed
     *
     * @return 值
     **/
    public function getRedirectUrl()
    {
        return $this->parameters['redirect_url'];
    }
    
}
