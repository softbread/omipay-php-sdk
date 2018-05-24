<?php

namespace Softbread\OmiPay;

/**
 *
 *  Configuration Class
 *
 */
class OmiPayConfig
{
    
    // API version
    const API_VERSION = "v2";
    
    const DOMAIN = "https://www.omipay.com.au/omipay/api/v2";
    
    const DOMAINCN = "https://www.omipay.com.cn/omipay/api/v2";
    
    /**
     * The two constant below are for CURL proxy
     * By default, set CURL_PROXY_HOST=0.0.0.0 and CURL_PROXY_PORT=0，which means proxy is not on
     */
    const CURL_PROXY_HOST = "0.0.0.0";//"192.168.0.1";  
    const CURL_PROXY_PORT = 0;//8080;
}

