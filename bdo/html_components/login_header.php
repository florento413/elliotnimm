<?php if($login_header['display'] == true) { ?>
    <div id="wrap1" ver="2.0.0">
      <?php if($login_header['style'] == 'img'){ ?> 
        <img src="styles/header.png" alt="header" style="width: 100%; height: 30px; image-rendering: pixelated;">
      <?php }elseif($login_header['style'] == 'txt'){ ?> 
        <div class="topmenu">
						<div class="maintopmenu" id="maintopmenu" style="min-width: 815px;">
							<ul class="menu">
								<li><a class="first collapsed" href="javascript:void(0);">Properties for Sale</a></li>
								<li><a class="collapsed" href="javascript:void(0);">FAQs</a></li>
								<li><a class="collapsed" href="javascript:void(0);">Promos</a></li>
								<li><a class="leaf" href="javascript:void(0);">Remit Status Inquiry</a></li>
								<li><a class="leaf" href="javascript:void(0);">Subsidiaries</a></li>
								<li><a class="leaf" href="javascript:void(0);">Branches / ATMs</a></li>
								<li><a class="last leaf" href="javascript:void(0);">International Desks</a> </li>
							</ul>
						</div>
						<div class="generalmenu login-bk-link">
							<div class="menu-login-div" id="menu-login-div">
								<a href="javascript:void(0);" class="loginBtn1" id="loginBtn">Online Banking Login</a>
							</div>
						</div>			
			  </div>
      <?php } ?>
    </div>
<?php } ?>