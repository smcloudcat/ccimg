<?php
/**
 * @author 小云猫
 * QQ3522934828
 */
function xiaocurl($url, $paras = [])
{   
   $ch = curl_init();
    $ip1 = rand(1,100);
    $ip2 = rand(1,100);
    $ip3 = rand(1,100);
    $ip4 = rand(1,100);
    $host=array('X-FORWARDED-FOR:'.$ip1.'.'.$ip2.'.'.$ip3.'.'.$ip4.'','CLIENT-IP:'.$ip1.'.'.$ip2.'.'.$ip3.'.'.$ip4.'');
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    if ($paras['Header']) {
        $Header = $paras['Header'];
    } else {
        $Header[] = "Accept:*/*";
        $Header[] = "Accept-Encoding:gzip,deflate,sdch";
        $Header[] = "Accept-Language:zh-CN,zh;q=0.8";
        $Header[] = "Connection:close";
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, $Header);
    if ($paras['ctime']) { // 连接超时
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $paras['ctime']);
    } else {
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    }
    if ($paras['rtime']) { // 读取超时
        curl_setopt($ch, CURLOPT_TIMEOUT, $paras['rtime']);
    }
    if ($paras['post']) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $paras['post']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $host);//指定host
    }
    if ($paras['header']) {
        curl_setopt($ch, CURLOPT_HEADER, true);
    }
    if ($paras['cookie']) {
        curl_setopt($ch, CURLOPT_COOKIE, $paras['cookie']);
    }
    if ($paras['refer']) {
        if ($paras['refer'] == 1) {
            curl_setopt($ch, CURLOPT_REFERER, 'http://m.qzone.com/infocenter?g_f=');
        } else {
            curl_setopt($ch, CURLOPT_REFERER, $paras['refer']);
        }
    }
    if ($paras['ua']) {
        curl_setopt($ch, CURLOPT_USERAGENT, $paras['ua']);
    } else {
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36");
    }
    if ($paras['nobody']) {
        curl_setopt($ch, CURLOPT_NOBODY, 1);
    }
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if ($paras['GetCookie']) {
        curl_setopt($ch, CURLOPT_HEADER, 1);
        $result = curl_exec($ch);
        preg_match_all("/Set-Cookie: (.*?);/m", $result, $matches);
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $ret = [
            "Cookie" => $matches,
        ];
        curl_close($ch);
        return $ret;
    }
    $ret = curl_exec($ch);
    if ($paras['loadurl']) {
        $Headers = curl_getinfo($ch);
        if (isset($Headers['redirect_url'])) {
            $ret = $Headers['redirect_url'];
        } else {
            $ret = false;
        }
    }
    curl_close($ch);
    return $ret;
}