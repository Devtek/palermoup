<?php
if (function_exists("curl_init")){
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL, 'http://www.palermotoday.it/rss');
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    //curl_setopt($ch,CURLOPT_HEADER,0);
$data=curl_exec($ch);


curl_close($ch);


$doc=new SimpleXmlElement($data,LIBXML_NOCDATA);

function getImage($xml){
    $encls=$xml->xPath('/rss/channel/item/enclosure'); 
        foreach($encls as $encl) { 
            echo('<img src='.$encl->attributes()->url.'/>');
            echo('<br>');
            }

}//end function getImage
if (isset($doc->channel)) getImage($doc);
} ?>

http://www.palermotoday.it/rss

