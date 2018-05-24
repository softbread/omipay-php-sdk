<?php

namespace Softbread\OmiPay;

class GetUserInfoQueryData extends OmiData
{
    /**
     * Set redirect URL after login
     * 设置跳转地址
     *
     * @param string $value
     **/
    public function setRedirectUrl($value)
    {
        $this->parameters['redirect_url'] = $value;
    }
    
    /**
     * Set redirect URL after login
     * 获取跳转地址
     *
     * @return string
     **/
    public function getRedirectUrl()
    {
        return $this->parameters['redirect_url'];
    }
}
