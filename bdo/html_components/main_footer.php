<?php if($main_footer['display'] == true) { ?>
<div id="footerDiv">
    <?php if($main_footer['style'] == 'img'){ ?> 
    <img src="styles/main_footer.png" alt="footer" style="width: 100%; height: 120px; image-rendering: pixelated;">
    <?php }elseif($main_footer['style'] == 'txt'){ ?> 
    <div class="horizontalRule"></div>
    <div id="footerCopyright">BDO Unibank, Inc. © 2015. All Rights Reserved</div>
    <div id="footerLinksDiv">
    <a href="javascript:void(0);" >About BDO</a>
    <a href="javascript:void(0);" >Corporate Governance</a>
    <a href="javascript:void(0);" >Investor Relations</a>
    <a href="javascript:void(0);" >Careers</a>
    <a href="javascript:void(0);" >Press Room</a>
    <a href="javascript:void(0);" >Hongkong</a>
    <a href="javascript:void(0);" >Site Map</a>
    <a href="javascript:void(0);" >Privacy Policy</a>
    </div>
    <?php } ?>
</div>
<?php } ?>