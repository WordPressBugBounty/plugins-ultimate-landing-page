<?php if ( ! defined( 'ABSPATH' ) ) exit;

$ssm = 'mailchimp-subscribe-sm';
  $ssm_install_link =  esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $ssm . '&TB_iframe=true&width=950&height=800' ) );

$cfb = 'contact-form-add';
  $cfb_install_link =  esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $cfb . '&TB_iframe=true&width=950&height=800' ) );

$tss = 'testimonial-add';
  $tss_install_link =  esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $tss . '&TB_iframe=true&width=950&height=800' ) );

$lss = 'slider-slideshow';
  $lss_install_link =  esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $lss . '&TB_iframe=true&width=950&height=800' ) );

?>
<div class="lpp_modal" id="pba_link">
  <div class="lpp_modal_wrapper">
  <p class="cls-link"><span class="dashicons dashicons-no-alt" style="color: #fff; font-size: 28px;" ></span></p>
  </div>
</div>



<div id="ulpb_dash_container">
	<h2 style="font-size:20px; font-weight: normal;"><?php _e('Landing Page Dashboard','ultimate-landing-page')  ?> </h2>

	<div class="tabs">
		<ul class="tab-links">
		    <li class="active"><a href="#tab1" class="tab_link"><?php _e('Welcome','ultimate-landing-page')  ?></a></li>
		    <li><a href="#tab2" class="tab_link"><?php _e('More Free Plugins','ultimate-landing-page')  ?></a></li>
        <li><a href="#tabUpdates" class="tab_link"><?php _e('Update Log','ultimate-landing-page')  ?></a></li>
	  </ul>

		<div class="tab-content">
			<div id="tab1" class="tab active">
				<h3><?php _e('Getting Started - Create Your First Landing Page','ultimate-landing-page')  ?></h3>
        <br>
        <a href="<?php echo admin_url('post-new.php?post_type=landingpage_f'); ?>" target="_blank" style="font-size:14px; font-weight: bold;"><?php _e('Landing Page - Add New Landing Page','ultimate-landing-page')  ?></a>
        <p><?php _e('Ready to start creating Landing Pages ? Jump into the Landing Page by clicking the Add new button under the Landing Pages menu.','ultimate-landing-page')  ?></p>
        <br>
        <br>
        <br>
        <br>
        <div style="float: left; width: 100%;">
          <hr>
          <br>
          <h3><?php _e('Page not found error - Fix','ultimate-landing-page')  ?> </h3>
          <a href="http://web-settler.com/ultimate-landing-page-fix-404-page-not-found-error/" target="_blank"><?php _e('How to fix page not found error.','ultimate-landing-page')  ?> </a>
			  </div>
      </div>
      <div id="tab2" class="tab">
        <div class="video-card">
          <iframe width="350" height="300" src="https://www.youtube.com/embed/CLzTCIKn85M" frameborder="0" allowfullscreen></iframe>
          <h3>Form Builder Plugin</h3>
          <a href="<?php  echo $cfb_install_link;?>" target='_blank'><button class="install-btn" id="cfb_link"><?php _e('Install Free','ultimate-landing-page')  ?> </button></a>
          <br>
        </div>
        <div class="video-card">
          <img src="https://ps.w.org/mailchimp-subscribe-sm/assets/screenshot-6.png" width="350" height="300">
          <h3>Subscribe Form Plugin</h3>
          <a href="<?php  echo $ssm_install_link;?>" target='_blank'> <button class="install-btn" id="pba_link"><?php _e('Install Free','ultimate-landing-page')  ?></button>
          <br>
        </div>
        <div class="video-card">
          <img src="https://ps.w.org/testimonial-add/assets/icon-250x250.png" width="350" height="300">
          <h3>Testimonials Plugin</h3>
          <a href="<?php  echo $tss_install_link;?>" target='_blank'> <button class="install-btn" id="tss_link"><?php _e('Install Free','ultimate-landing-page')  ?></button> </a>
          <br>
        </div>
        <div class="video-card">
          <img src="https://ps.w.org/slider-slideshow/assets/icon-250x250.png" width="350" height="300">
          <h3>Layer Slider Plugin</h3>
          <a href="<?php  echo $lss_install_link;?>" target='_blank'> <button class="install-btn" id="lss_link"><?php _e('Install Free','ultimate-landing-page')  ?></button></a>
          <br>
        </div>

      </div>
      <div id="tabUpdates" class="tab">
        <h3> 3.0.5 </h3>
        <li> Added Option for homepage. </li>
        <li> Improved UI. </li>
        <li> Bug Fixes</li>
        <br>
        <br>
        <hr>
        <h3> 3.0.3 </h3> 
        <li> Bug Fixes. </li>
        <br>
        <br>
        <hr>
        <h3> 3.0.2 </h3> 
        <li> Landing Page analytics added. </li>
        <li> Bug Fixes. </li>
        <br>
        <br>
        <hr>
        <h3> 3.0.1 </h3> 
        <li> Now you can load wp_head & wp_footer for landing pages. </li>
        <br>
        <br>
        <hr>
        <h3> 3.0 </h3> 
        <li> Now you can create Custom templates for landing pages. </li>
        <li> Custom templates support Shortcodes. </li>
        <br>
        <br>
        <hr>
      </div>
		</div>
	</div>
</div>

<style type="text/css">
	.tab_link{
  text-decoration:none;
}
.lpp_modal{
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.73);
  margin: 0 auto;
  z-index: 9999;
  display: none;
}
.lpp_modal_wrapper{
  margin:7% 20%; 
  width: 65%;
  min-height: 700px;
  background: rgba(0, 0, 0, 0.73);
  display: inline-block;
}

.cls-link{
    color: #e4e4e4;
    cursor: pointer;
    padding: 30px 40px;
    margin: -71px;
    float: right;
}
.tabs {
  width:auto;
  display:inline-block;
}
 
   
.tab-links:after {
  display:block;
  clear:both;
  content:'';
}

.video-card{
  display: inline-block;
  float: left;
  max-width:460px;
  background: #fff;
  border:1px solid #d3d3d3;
  text-align: center;
  margin-right: 15px;
  margin-bottom: 40px;
}

.install-btn{
    background: #2196F3;
    border: none;
    color: #fff;
    padding: 9px 20px;
    margin-bottom: 15px;
    cursor: pointer;
    font-size: 16px;
}

.tab-links li {
  float:left;
  list-style:none;
}

.tab-links a {
  padding:12px 25px;
  display:inline-block;
  background:#FF5722;
  font-size:16px;
  font-weight:600;
  color:#fff;
  transition:all linear 0.15s;
}
 
.tab-links a:hover {
background:#2fa8f9;
text-decoration:none;
}
 
li.active a, li.active a:hover {
  background:#fff;
  color:#2fa8f9;
}
 

.tab-content {
  border-radius:3px;
  box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
  background:#fff;
}
 
.tab {
	padding: 20px 40px;
  display:none;
  min-width: 60%;
  min-height: 600px
}
 
.tab.active {
  display:block;
}

body{
  background: #F3F6F8 !important;
}


</style>

<script type="text/javascript">
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });

/*
    jQuery('.install-btn').on('click', function(e){
      var currentClickedID = jQuery(this).attr('id');
      console.log(currentClickedID);
      jQuery('#'+currentClickedID).slideDown(500);
    });

    jQuery('.cls-link').on('click', function(){
      jQuery('.lpp_modal').slideUp(200);
    }); */
</script>