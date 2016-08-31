<?php

function bitlyShorten($bitlyUrl) {

 $bitly_token = '';
 $ch_b = curl_init();
                  curl_setopt($ch_b, CURLOPT_URL, 'https://api-ssl.bitly.com/v3/shorten?access_token='.$bitly_token'='.$bitlyUrl);
                  curl_setopt($ch_b, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/547.38 (KHTML, like Gecko) Chrome/43.0.2272.118 Safari/537.36');
                  curl_setopt($ch_b, CURLOPT_HEADER, 0);
                  curl_setopt($ch_b, CURLOPT_RETURNTRANSFER, '1');
                  curl_setopt($ch_b, CURLOPT_HTTPHEADER, array('Accept-Language: en'));
                  curl_setopt($ch_b, CURLOPT_SSL_VERIFYPEER, FALSE);    
                  curl_setopt($ch_b, CURLOPT_SSL_VERIFYHOST, FALSE);

                  $bitlyGet = curl_exec($ch_b);

                  curl_close($ch_b);
                  
                  $bitlyResponse = json_decode($bitlyGet);

                  $shortUri = $bitlyResponse->data->url;
                  return $shortUri;
                  
}
?>
