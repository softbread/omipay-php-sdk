<?php

namespace Softbread\OmiPay;

/**
 * Class MakeScanOrderQueryData
 *
 * @package Softbread\OmiPay
 */
class MakeScanOrderQueryData extends MakeOrderQueryData
{
    /**
     * Set QR code for payment
     * 设置付款码
     *
     * @param string $value
     **/
    public function setQRCode($value)
    {
        $this->parameters['qrcode'] = $value;
    }
    
    /**
     * Get QR code for payment
     * 获取付款码
     *
     * @return string
     **/
    public function getQRCode()
    {
        return $this->parameters['qrcode'];
    }
    
    /**
     * Set POS machine number
     * 设置POS机编号
     *
     * @param string $value
     **/
    public function setPOSNo($value)
    {
        $this->parameters['pos_no'] = $value;
    }
    
    /**
     * Get POS machine number
     * 获取POS机编号
     *
     * @return string
     **/
    public function getPOSNo()
    {
        return $this->parameters['pos_no'];
    }
}
