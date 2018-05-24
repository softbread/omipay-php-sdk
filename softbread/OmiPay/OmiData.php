<?php

namespace Softbread\OmiPay;

/**
 *
 *  Omipay Data Class
 *  数据类
 *
 */
class OmiData
{
    protected $parameters = [];
    
    protected $serectKey = [];
    
    protected $receivedData = [];
    
    protected $bodyValues = [];
    
    /**
     * 设置的getNonceStr参数值
     */
    public static function getNonceStrPublic($length = 30)
    {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }
    
    /**
     * 设置的getMillisecond参数值
     */
    public static function getMillisecondPublic()
    {
        //timestamp in miniseconds
        $time = explode(" ", microtime());
        $time1 = explode(".", $time[0] * 1000);//  $time[0] * 1000;
        if ($time1[0] < 10) {
            $time2 = $time[1] . "00" . $time1[0];
        } else {
            if ($time1[0] < 100) {
                $time2 = $time[1] . "0" . $time1[0];
                
            } else {
                $time2 = $time[1] . $time1[0];
            }
        }
        return $time2;
    }
    
    /**
     * 设置商户号
     *
     * @param string $value
     * @return string
     **/
    public function setMerchantNo($value)
    {
        $this->parameters['m_number'] = $value;
        return $this->parameters['m_number'];
    }
    
    /**
     * 设置商户密钥
     *
     * @param string $value
     * @return string
     **/
    public function setSercretKey($value)
    {
        $this->serectKey['SECRET_KEY'] = $value;
        return $this->serectKey['SECRET_KEY'];
    }
    
    /**
     * 用于生成签名的随机字符串
     *
     * @param string $value
     **/
    public function setNonceStr($value)
    {
        $this->parameters['nonce_str'] = $value;
    }
    
    /**
     * 设置时间戳
     *
     * @param long $value
     **/
    public function setTime($value)
    {
        $this->parameters['timestamp'] = $value;
    }
    
    /**
     * Set signature
     * 设置签名
     *
     * @return string
     **/
    public function setSign()
    {
        $sign = $this->makeSign();
        $this->parameters['sign'] = $sign;
        return $sign;
    }
    
    /**
     * 生成签名
     *
     * @return 签名字符串
     */
    public function makeSign()
    {
        $originString = $this->getMerchantNo() . '&' . $this->getTime() . '&' . $this->getNonceStr() . "&" . $this->getSercretKey();
        $sign = strtoupper(md5($originString));
        return $sign;
    }
    
    /**
     * 获取商户号
     *
     * @return string
     **/
    public function getMerchantNo()
    {
        $val = !empty($this->parameters['m_number']) ? $this->parameters['m_number'] : null;
        return $val;
    }
    
    /**
     * 获取时间戳
     *
     * @return int
     **/
    public function getTime()
    {
        return $this->parameters['timestamp'];
    }
    
    /**
     * 用于生成签名的随机字符串
     *
     * @return string nonce_str
     **/
    public function getNonceStr()
    {
        return $this->parameters['nonce_str'];
    }
    
    /**
     * 获取商户密钥
     *
     * @return string
     **/
    public function getSercretKey()
    {
        // return $this->parameters['SECRET_KEY'];
        $val = !empty($this->serectKey['SECRET_KEY']) ? $this->serectKey['SECRET_KEY'] : null;
        return $val;
    }
    
    /**
     * 获取签名
     *
     * @return string
     **/
    public function getSign()
    {
        return $this->parameters['sign'];
    }
    
    /**
     * 格式化参数格式化成url参数
     */
    public function toQueryParameters()
    {
        $queryString = "";
        
        foreach ($this->parameters as $key => $value) {
            if ($value != "" && !is_array($value)) {
                $queryString .= $key . '=' . $value . '&';
            }
        }
        $queryString = (trim($queryString, "&"));
        return $queryString;
    }
    
    /**
     * Json serialize all the params
     * 格式化参数格式化成json参数
     */
    public function toBodyParams()
    {
        return json_encode($this->bodyValues);
    }
    
    /**
     *商户号
     **/
    public function setMerchant_no($value)
    {
        $this->parameters['m_number'] = $value;
    }
    
    public function getMerchant_no()
    {
        return $this->parameters['m_number'];
        
    }
    
    /**
     * 获取设置的query参数值
     */
    public function getParameters()
    {
        return $this->parameters;
    }
    
    public function getReceivedData()
    {
        return $this->receivedData;
    }
    
    /**
     * Set platform value, WECHATPAY | ALIPAY
     * 设置的platform参数值
     *
     * @param string
     */
    public function setPlatform($plat = "WECHATPAY")
    {
        $value = $plat;
        // echo $value."<br>";
        //Check if it is in wechat browser
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
            $value = 'WECHATPAY';
        } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'AlipayClient') !== false) {
            $value = 'ALIPAY';
        }
        $this->parameters['platform'] = $value;
    }
    
    public function getPlatform()
    {
        return $this->parameters['platform'];
    }
    
}
