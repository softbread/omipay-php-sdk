<?php

namespace Softbread\OmiPay;


class OmiPayJsApiRedirect extends MakeJSAPIOrderQueryData
{
    
    /**
     * Check if Direct Pay flag is set
     * 判断直接支付是否存在
     *
     * @return bool
     **/
    public function isDirectPaySet()
    {
        return array_key_exists('direct_pay', $this->parameters);
    }
}
