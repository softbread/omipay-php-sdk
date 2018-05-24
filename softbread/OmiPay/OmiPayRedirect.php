<?php

namespace Softbread\OmiPay;

/**
 * QRcode scan redirect
 * QRCode支付跳转对象
 *
 * @author Leijid
 */
class OmiPayRedirect extends OmiData
{
    /**
     * Check if the redirect URL set
     * 判断支付成功后跳转页面是否存在
     *
     * @return true 或 false
     **/
    public function isRedirectSet()
    {
        return array_key_exists('redirect', $this->queryValues);
    }
}
