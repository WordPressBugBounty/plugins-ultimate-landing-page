<?php 

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function lpp_f_main_front_html($single_template) {
     global $post;
     $lpp_template_select = 'lpp_template_2.php';

     if (empty($lpp_template_select)) {
         $lpp_template_select = 'lpp_template_2.php';
     }

    $lpp_template = dirname( __FILE__ ).'/'.'lpp_template_2.php';
  
     if ($post->post_type == 'landingpage_f') {
          $single_template = $lpp_template;
     }
     return $single_template;
}
add_filter( 'single_template', 'lpp_f_main_front_html' );



///////////////////////////////////////////////////

function lpp_f_landing_page_template_select($post){

    global $post;

$lpp_template_select = 'lpp_template_2.php';



wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

$pbPP_imgFolderURL = LPP_PLUGIN_URL.'/images/templates/thumbs/';

?>



<style type="text/css">
#lpp_wrapper{
    display: inline-block;
    width: 100%;
    min-width: 650px;
}

#lpp_left{
    width: 20%;
    display: inline-block;
    float: left;
    margin-right: 100px;

}
#lpp_right{
    width: 20%;
    display: inline-block;
    float: left;
    
}

#lpp_row_3{
    width: 20%;
    display: inline-block;
    float: left;
    margin-left: 80px;
}


.formLayout_s_l
    {

        
        padding: 10px;
        width: 450px;
        margin: 10px;
        font-size: 18px;
        font-weight:100;
        font-family: verdana;
    }
    
    .formLayout_s_l label 
    {
        display: block;
        margin-bottom: 30px;
        margin-top: 30px;
    }
    .formLayout_s_l input{
        display: block;
        float: left;
        margin-right: 15px;
        margin-left: 10px;


    }
 
    .formLayout_s_l label
    {
        text-align: left;
        display: block;
        font-size: 20px;
        font-family: sans-serif;
        font-weight: 100;
    }
 
    br
    {
        clear: left;
    }

    #submit{
    width: 200px;
    height: 40px;
    margin-top: 8px;
    margin-right: 50px;
    font-size: 19px;

  }
  .not-avail{
    color: red;
    font-size: 11px;
  }

    #column-1{
      display: inline-block;
    }
     #column-1 > #card{
      max-width: 18.5%;
      display: inline-block;
      margin-left: 1%;
      padding:15px 15px 10px 15px;
      background-color: #f0f0f0;
      border-radius: 3px;
     }

     #card{ max-width: 400px; margin: 10px;}
    .card-img{ width:100%; }
    .card label {
      color: #333;
      font-size: 18px;
      cursor: pointer;
     }
     .card label b{
        color: #F44336 !important;
     }
     .tempPrev{
      display: none;
      position: absolute;
      background: rgba(100, 110, 115, 0.63);
      cursor: pointer;
     }
     .tempPrev p{
      text-align: center;
      padding:5px;
      background: transparent;
      border:2px solid #fff;
      border-radius: 5px;
      color: #fff;
      font-size: 18px;
     }
     .pb_temp_prev_img{
      max-width: 80%;
      margin:3% 1% 3% 1%;
     }

     .temp-cats-displayed {
      display: none !important;
      padding: 2px 4px;
      background: #2aa2f4;
      color: #fff;
      border-radius: 2px;
      margin-right: 2px;
      font-size: 10px;
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
      z-index: 9991;
      display: none;
      overflow: scroll;
    }

</style>
<div id='lpp_wrapper' class='formLayout_s_l'>
    <h2>Select a Template and click Update</h2>
    <div style='width:100%;text-align:center; background:#e3e3e3;height:60px;border-left:5px solid #a7d142;'>
     <?php submit_button('Update');?>
     <a href="https://pluginops.com/page-builder/?ref=ulp" id='pr_msg_link' style='float:left; font-size:19px; margin:20px 0 0 10px;'><i>Unlock All Templates and get more amazing features Click Here</i></a>
    </div>
    <br>

    <div id="landingpages" >
            <div id="column-1" class="col">
              <div id="card" class="temp-prev-0 card tempPaca">
                  <label for='lpp_select_template1' > <img src="<?php echo plugins_url('/imgs/landingpage_template_1.png',__FILE__); ?>"  class='card-img'>
                  <p class="card-desc"></p> </label>
                  <input  type="radio" id='lpp_select_template1' name='lpp_template_select' value='lpp_template_1.php'
                    <?php checked( "lpp_template_1.php", $lpp_template_select); ?>
                    >
                  <label for='lpp_select_template1' > Select </label>
              </div>
              <div id="card" class="temp-prev-0 card tempPaca">
                  <label for='lpp_select_template2' > <img src="<?php echo plugins_url('/imgs/landingpage_template_2.png',__FILE__); ?>"  class='card-img'>
                  <p class="card-desc"></p> </label>
                  <input  type="radio" id='lpp_select_template2' name='lpp_template_select' value='lpp_template_2.php'
                    <?php checked( "lpp_template_2.php", $lpp_template_select); ?>
                    >
                  <label for='lpp_select_template2' > Select </label>
              </div>


              <div id="card" class="temp-prev-53 card tempPaca">
                <div id="temp-prev-53" class="tempPrev tempPaca"> <p id="temp-prev-53"><b>Preview</b></p></div>
                <label for="temp-53"> <img src="<?php echo $pbPP_imgFolderURL.'template-53.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-53.png" class='card-img temp-prev-53'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-53' name="template_select" value='temp53'>
                <label for="temp-53"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-54 card tempPaca">
                <div id="temp-prev-54" class="tempPrev tempPaca"> <p id="temp-prev-54"><b>Preview</b></p></div>
                <label for="temp-54"> <img src="<?php echo $pbPP_imgFolderURL.'template-54.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-54.png" class='card-img temp-prev-54'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-54' name="template_select" value='temp54'>
                <label for="temp-54"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-50 card tempPaca">
                <div id="temp-prev-50" class="tempPrev tempPaca"> <p id="temp-prev-50"><b>Preview</b></p></div>
                <label for="temp-50"> <img src="<?php echo $pbPP_imgFolderURL.'template-50.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-50.png" class='card-img temp-prev-50'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-50' name="template_select" value='temp50'>
                <label for="temp-50"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-49 card tempPaca">
                <div id="temp-prev-49" class="tempPrev tempPaca"> <p id="temp-prev-49"><b>Preview</b></p></div>
                <label for="temp-49"> <img src="<?php echo $pbPP_imgFolderURL.'template-49.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-49.png" class='card-img temp-prev-49'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-49' name="template_select" value='temp49'>
                <label for="temp-49"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-48 card tempPaca">
                <div id="temp-prev-48" class="tempPrev tempPaca"> <p id="temp-prev-48"><b>Preview</b></p></div>
                <label for="temp-48"> <img src="<?php echo $pbPP_imgFolderURL.'template-48.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-48.png" class='card-img temp-prev-48'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-48' name="template_select" value='temp48'>
                <label for="temp-48"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-45 card tempPaca">
                <div id="temp-prev-45" class="tempPrev tempPaca"> <p id="temp-prev-45"><b>Preview</b></p></div>
                <label for="temp-45"> <img src="<?php echo $pbPP_imgFolderURL.'template-45.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-45.png" class='card-img temp-prev-45'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-45' name="template_select" value='temp45'>
                <label for="temp-45"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-42 card tempPaca">
                <div id="temp-prev-42" class="tempPrev tempPaca"> <p id="temp-prev-42"><b>Preview</b></p></div>
                <label for="temp-42"> <img src="<?php echo $pbPP_imgFolderURL.'template-42.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-42.png" class='card-img temp-prev-42'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-42' name="template_select" value='temp42'>
                <label for="temp-42"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-41 card tempPaca">
                <div id="temp-prev-41" class="tempPrev tempPaca"> <p id="temp-prev-41"><b>Preview</b></p></div>
                <label for="temp-41"> <img src="<?php echo $pbPP_imgFolderURL.'template-41.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-41.png" class='card-img temp-prev-41'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-41' name="template_select" value='temp41'>
                <label for="temp-41"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-40 card tempPaca">
                <div id="temp-prev-40" class="tempPrev tempPaca"> <p id="temp-prev-40"><b>Preview</b></p></div>
                <label for="temp-40"> <img src="<?php echo $pbPP_imgFolderURL.'template-40.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-40.png" class='card-img temp-prev-40'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-40' name="template_select" value='temp40'>
                <label for="temp-40"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-39 card tempPaca">
                <div id="temp-prev-39" class="tempPrev tempPaca"> <p id="temp-prev-39"><b>Preview</b></p></div>
                <label for="temp-39"> <img src="<?php echo $pbPP_imgFolderURL.'template-39.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-39.png" class='card-img temp-prev-39'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-39' name="template_select" value='temp39'>
                <label for="temp-39"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-38 card tempPaca">
                <div id="temp-prev-38" class="tempPrev tempPaca"> <p id="temp-prev-38"><b>Preview</b></p></div>
                <label for="temp-38"> <img src="<?php echo $pbPP_imgFolderURL.'template-38.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-38.png" class='card-img temp-prev-38'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-38' name="template_select" value='temp38'>
                <label for="temp-38"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-55 card tempPaca">
                <div id="temp-prev-55" class="tempPrev tempPaca"> <p id="temp-prev-55"><b>Preview</b></p></div>
                <label for="temp-55"> <img src="<?php echo $pbPP_imgFolderURL.'template-55.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-55.png" class='card-img temp-prev-55'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-55' name="template_select" value='temp55'>
                <label for="temp-55"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-52 card tempPaca">
                <div id="temp-prev-52" class="tempPrev tempPaca"> <p id="temp-prev-52"><b>Preview</b></p></div>
                <label for="temp-52"> <img src="<?php echo $pbPP_imgFolderURL.'template-52.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-52.png" class='card-img temp-prev-52'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-52' name="template_select" value='temp52'>
                <label for="temp-52"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-51 card tempPaca">
                <div id="temp-prev-51" class="tempPrev tempPaca"> <p id="temp-prev-51"><b>Preview</b></p></div>
                <label for="temp-51"> <img src="<?php echo $pbPP_imgFolderURL.'template-51.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-51.png" class='card-img temp-prev-51'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-51' name="template_select" value='temp51'>
                <label for="temp-51"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-37 card tempPaca">
                <div id="temp-prev-37" class="tempPrev tempPaca"> <p id="temp-prev-37"><b>Preview</b></p></div>
                <label for="temp-37"> <img src="<?php echo $pbPP_imgFolderURL.'template-37.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-37.png" class='card-img temp-prev-37'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-37' name="template_select" value='temp37'>
                <label for="temp-37"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-36 card tempPaca">
                <div id="temp-prev-36" class="tempPrev tempPaca"> <p id="temp-prev-36"><b>Preview</b></p></div>
                <label for="temp-36"> <img src="<?php echo $pbPP_imgFolderURL.'template-36.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-36.png" class='card-img temp-prev-36'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-36' name="template_select" value='temp36'>
                <label for="temp-36"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-35 card tempPaca">
                <div id="temp-prev-35" class="tempPrev tempPaca"> <p id="temp-prev-35"><b>Preview</b></p></div>
                <label for="temp-35"> <img src="<?php echo $pbPP_imgFolderURL.'template-35.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-35.png" class='card-img temp-prev-35'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-35' name="template_select" value='temp35'>
                <label for="temp-35"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-32 card tempPaca">
                <div id="temp-prev-32" class="tempPrev tempPaca"> <p id="temp-prev-32"><b>Preview</b></p></div>
                <label for="temp-32"> <img src="<?php echo $pbPP_imgFolderURL.'template-32.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-32.png" class='card-img temp-prev-32'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-32' name="template_select" value='temp32'>
                <label for="temp-32"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-31 card tempPaca">
                <div id="temp-prev-31" class="tempPrev tempPaca"> <p id="temp-prev-31"><b>Preview</b></p></div>
                <label for="temp-31"> <img src="<?php echo $pbPP_imgFolderURL.'template-31.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-31.png" class='card-img temp-prev-31'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-31' name="template_select" value='temp31'>
                <label for="temp-31"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-109 card tempPaca">
                <div id="temp-prev-109" class="tempPrev tempPaca"> <p id="temp-prev-109"><b>Preview</b></p></div>
                  <label for="temp-109"> <img src="<?php echo $pbPP_imgFolderURL.'template-109.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-109.png" class='card-img temp-prev-109'>
                  <p class="card-desc"></p> </label>
                  <input type="radio" disabled="disabled" class="template_select" id='temp-109' name="template_select" value='temp109'>
                  <label for="temp-109"><strike> Select </strike> <b>Pro Only</b> </label>
                  <span class="temp-cats-displayed">Lead Generation</span>
                  <span class="temp-cats-displayed">Sales</span>
              </div>
              <div id="card" class="temp-prev-108 card tempPaca">
                <div id="temp-prev-108" class="tempPrev tempPaca"> <p id="temp-prev-108"><b>Preview</b></p></div>
                  <label for="temp-108"> <img src="<?php echo $pbPP_imgFolderURL.'template-108.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-108.png" class='card-img temp-prev-108'>
                  <p class="card-desc"></p> </label>
                  <input type="radio" disabled="disabled" class="template_select" id='temp-108' name="template_select" value='temp108'>
                  <label for="temp-108"><strike> Select </strike> <b>Pro Only</b> </label>
                  <span class="temp-cats-displayed">Lead Generation</span>
              </div>
              <div id="card" class="temp-prev-107 card tempPaca">
                <div id="temp-prev-107" class="tempPrev tempPaca"> <p id="temp-prev-107"><b>Preview</b></p></div>
                  <label for="temp-107"> <img src="<?php echo $pbPP_imgFolderURL.'template-107.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-107.png" class='card-img temp-prev-107'>
                  <p class="card-desc"></p> </label>
                  <input type="radio" disabled="disabled" class="template_select" id='temp-107' name="template_select" value='temp107'>
                  <label for="temp-107"><strike> Select </strike> <b>Pro Only</b> </label>
              </div>
              <div id="card" class="temp-prev-105 card tempPaca">
                <div id="temp-prev-105" class="tempPrev tempPaca"> <p id="temp-prev-105"><b>Preview</b></p></div>
                  <label for="temp-105"> <img src="<?php echo $pbPP_imgFolderURL.'template-105.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-105.png" class='card-img temp-prev-105'>
                  <p class="card-desc"></p> </label>
                  <input type="radio" disabled="disabled" class="template_select" id='temp-105' name="template_select" value='temp105'>
                  <label for="temp-105"><strike> Select </strike> <b>Pro Only</b> </label>
                  <span class="temp-cats-displayed">Sales</span>
                  <span class="temp-cats-displayed">Coming Soon</span>
              </div>
              <div id="card" class="temp-prev-30 card tempPaca">
                <div id="temp-prev-30" class="tempPrev tempPaca"> <p id="temp-prev-30"><b>Preview</b></p></div>
                <label for="temp-30"> <img src="<?php echo $pbPP_imgFolderURL.'template-30.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-30.png" class='card-img temp-prev-30'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-30' name="template_select" value='temp30'>
                <label for="temp-30"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-47 card tempPaca">
                <div id="temp-prev-47" class="tempPrev tempPaca"> <p id="temp-prev-47"><b>Preview</b></p></div>
                <label for="temp-47"> <img src="<?php echo $pbPP_imgFolderURL.'template-47.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-47.png" class='card-img temp-prev-47'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-47' name="template_select" value='temp47'>
                <label for="temp-47"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-46 card tempPaca">
                <div id="temp-prev-46" class="tempPrev tempPaca"> <p id="temp-prev-46"><b>Preview</b></p></div>
                <label for="temp-46"> <img src="<?php echo $pbPP_imgFolderURL.'template-46.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-46.png" class='card-img temp-prev-46'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-46' name="template_select" value='temp46'>
                <label for="temp-46"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-29 card tempPaca">
                <div id="temp-prev-29" class="tempPrev tempPaca"> <p id="temp-prev-29"><b>Preview</b></p></div>
                <label for="temp-29"> <img src="<?php echo $pbPP_imgFolderURL.'template-29.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-29.png" class='card-img temp-prev-29'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-29' name="template_select" value='temp29'>
                <label for="temp-29"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-34 card tempPaca">
                <div id="temp-prev-34" class="tempPrev tempPaca"> <p id="temp-prev-34"><b>Preview</b></p></div>
                <label for="temp-34"> <img src="<?php echo $pbPP_imgFolderURL.'template-34.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-34.png" class='card-img temp-prev-34'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-34' name="template_select" value='temp34'>
                <label for="temp-34"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-33 card tempPaca">
                <div id="temp-prev-33" class="tempPrev tempPaca"> <p id="temp-prev-33"><b>Preview</b></p></div>
                <label for="temp-33"> <img src="<?php echo $pbPP_imgFolderURL.'template-33.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-33.png" class='card-img temp-prev-33'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-33' name="template_select" value='temp33'>
                <label for="temp-33"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-28 card tempPaca">
                <div id="temp-prev-28" class="tempPrev tempPaca"> <p id="temp-prev-28"><b>Preview</b></p></div>
                <label for="temp-28"> <img src="<?php echo $pbPP_imgFolderURL.'template-28.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-28.png" class='card-img temp-prev-28'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-28' name="template_select" value='temp28'>
                <label for="temp-28"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-44 card tempPaca">
                <div id="temp-prev-44" class="tempPrev tempPaca"> <p id="temp-prev-44"><b>Preview</b></p></div>
                <label for="temp-44"> <img src="<?php echo $pbPP_imgFolderURL.'template-44.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-44.png" class='card-img temp-prev-44'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-44' name="template_select" value='temp44'>
                <label for="temp-44"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-27 card tempPaca">
                <div id="temp-prev-27" class="tempPrev tempPaca"> <p id="temp-prev-27"><b>Preview</b></p></div>
                <label for="temp-27"> <img src="<?php echo $pbPP_imgFolderURL.'template-27.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-27.png" class='card-img temp-prev-27'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-27' name="template_select" value='temp27'>
                <label for="temp-27"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-24 card tempPaca">
                <div id="temp-prev-24" class="tempPrev tempPaca"> <p id="temp-prev-24"><b>Preview</b></p></div>
                <label for="temp-24"> <img src="<?php echo $pbPP_imgFolderURL.'template-24.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-24.png" class='card-img temp-prev-24'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-24' name="template_select" value='temp24'>
                <label for="temp-24"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-25 card tempPaca">
              <div id="temp-prev-25" class="tempPrev tempPaca"> <p id="temp-prev-25"><b>Preview</b></p></div>
                <label for="temp-25"> <img src="<?php echo $pbPP_imgFolderURL.'template-25.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-25.png" class='card-img temp-prev-25'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-25' name="template_select" value='temp25'>
                <label for="temp-25"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-26 card tempPaca">
              <div id="temp-prev-26" class="tempPrev tempPaca"> <p id="temp-prev-26"><b>Preview</b></p></div>
                <label for="temp-26"> <img src="<?php echo $pbPP_imgFolderURL.'template-26.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-26.png" class='card-img temp-prev-26'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-26' name="template_select" value='temp26'>
                <label for="temp-26"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-10 card tempPaca">
              <div id="temp-prev-10" class="tempPrev tempPaca"> <p id="temp-prev-10"><b>Preview</b></p></div>
                <label for="temp-10"> <img src="<?php echo $pbPP_imgFolderURL.'template-11.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-11.png" class='card-img temp-prev-10'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-10' name="template_select" value='temp10'>
                <label for="temp-10"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-11 card tempPaca">
              <div id="temp-prev-11" class="tempPrev tempPaca"> <p id="temp-prev-11"><b>Preview</b></p></div>
                <label for="temp-11"> <img src="<?php echo $pbPP_imgFolderURL.'template-12.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-12.png" class='card-img temp-prev-11'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-11' name="template_select" value='temp11'>
                <label for="temp-11"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-13 card tempPaca">
              <div id="temp-prev-13" class="tempPrev tempPaca"> <p id="temp-prev-13"><b>Preview</b></p></div>
                <label for="temp-13"> <img src="<?php echo $pbPP_imgFolderURL.'template-14.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-14.png" class='card-img temp-prev-13'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-13' name="template_select" value='temp13'>
                <label for="temp-13"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-16 card tempPaca">
                <div id="temp-prev-16" class="tempPrev tempPaca"> <p id="temp-prev-16"><b>Preview</b></p></div>
                <label for="temp-16"> <img src="<?php echo $pbPP_imgFolderURL.'template-17.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-17.png" class='card-img temp-prev-16'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-16' name="template_select" value='temp16'>
                <label for="temp-16"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-18 card tempPaca">
              <div id="temp-prev-18" class="tempPrev tempPaca"> <p id="temp-prev-18"><b>Preview</b></p></div>
                <label for="temp-18"> <img src="<?php echo $pbPP_imgFolderURL.'template-18.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-18.png" class='card-img temp-prev-18'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-18' name="template_select" value='temp18'>
                <label for="temp-18"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-19 card tempPaca">
              <div id="temp-prev-19" class="tempPrev tempPaca"> <p id="temp-prev-19"><b>Preview</b></p></div>
                <label for="temp-19"> <img src="<?php echo $pbPP_imgFolderURL.'template-19.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-19.png" class='card-img temp-prev-19'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-19' name="template_select" value='temp19'>
                <label for="temp-19"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-43 card tempPaca">
                <div id="temp-prev-43" class="tempPrev tempPaca"> <p id="temp-prev-43"><b>Preview</b></p></div>
                <label for="temp-43"> <img src="<?php echo $pbPP_imgFolderURL.'template-43.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-43.png" class='card-img temp-prev-43'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-43' name="template_select" value='temp43'>
                <label for="temp-43"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-20 card tempPaca">
                <div id="temp-prev-20" class="tempPrev tempPaca"> <p id="temp-prev-20"><b>Preview</b></p></div>
                <label for="temp-20"> <img src="<?php echo $pbPP_imgFolderURL.'template-20.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-20.png" class='card-img temp-prev-20'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-20' name="template_select" value='temp20'>
                <label for="temp-20"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-22 card tempPaca">
                <div id="temp-prev-22" class="tempPrev tempPaca"> <p id="temp-prev-22"><b>Preview</b></p></div>
                <label for="temp-22"> <img src="<?php echo $pbPP_imgFolderURL.'template-22.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-22.png" class='card-img temp-prev-22'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-22' name="template_select" value='temp22'>
                <label for="temp-22"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-23 card tempPaca">
                <div id="temp-prev-23" class="tempPrev tempPaca"> <p id="temp-prev-23"><b>Preview</b></p></div>
                <label for="temp-23"> <img src="<?php echo $pbPP_imgFolderURL.'template-23.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-23.png" class='card-img temp-prev-23'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-23' name="template_select" value='temp23'>
                <label for="temp-23"><strike> Select </strike> <b>Pro Only</b></label>
              </div>


              <div id="card" class="temp-prev-1 card tempPaca">
                <div id="temp-prev-1" class="tempPrev tempPaca"> <p id="temp-prev-1"><b>Preview</b></p></div>
                <label for="temp-1"> <img src="<?php echo $pbPP_imgFolderURL.'template-5.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-5.png" class='card-img temp-prev-1'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-1' name="template_select" value='temp1'>
                <label for="temp-1"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-5 card tempPaca">
                <div id="temp-prev-5" class="tempPrev tempPaca"> <p id="temp-prev-5"><b>Preview</b></p></div>
                <label for="temp-5"> <img src="<?php echo $pbPP_imgFolderURL.'template-3.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-3.png" class='card-img temp-prev-5'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-5' name="template_select" value='temp5'>
                <label for="temp-5"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-6 card tempPaca">
                <div id="temp-prev-6" class="tempPrev tempPaca"> <p id="temp-prev-6"><b>Preview</b></p></div>
                <label for="temp-6"> <img src="<?php echo $pbPP_imgFolderURL.'template-10.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-10.png" class='card-img temp-prev-6'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-6' name="template_select" value='temp6'>
                <label for="temp-6"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-7 card tempPaca">
                <div id="temp-prev-7" class="tempPrev tempPaca"> <p id="temp-prev-7"><b>Preview</b></p></div>
                <label for="temp-7"> <img src="<?php echo $pbPP_imgFolderURL.'template-6.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-6.png" class='card-img temp-prev-7'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-7' name="template_select" value='temp7'>
                <label for="temp-7"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-8 card tempPaca">
                <div id="temp-prev-8" class="tempPrev tempPaca"> <p id="temp-prev-8"><b>Preview</b></p></div>
                <label for="temp-8"> <img src="<?php echo $pbPP_imgFolderURL.'template-8.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-8.png" class='card-img temp-prev-8'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-8' name="template_select" value='temp8'>
                <label for="temp-8"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-12 card tempPaca">
                <div id="temp-prev-12" class="tempPrev tempPaca"> <p id="temp-prev-12"><b>Preview</b></p></div>
                <label for="temp-12"> <img src="<?php echo $pbPP_imgFolderURL.'template-13.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-13.png" class='card-img temp-prev-12'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-12' name="template_select" value='temp12'>
                <label for="temp-12"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-14 card tempPaca">
                <div id="temp-prev-14" class="tempPrev tempPaca"> <p id="temp-prev-14"><b>Preview</b></p></div>
                <label for="temp-14"> <img src="<?php echo $pbPP_imgFolderURL.'template-15.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-15.png" class='card-img temp-prev-14'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-14' name="template_select" value='temp14'>
                <label for="temp-14"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-15 card tempPaca">
                <div id="temp-prev-15" class="tempPrev tempPaca"> <p id="temp-prev-15"><b>Preview</b></p></div>
                <label for="temp-15"> <img src="<?php echo $pbPP_imgFolderURL.'template-16.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-16.png" class='card-img temp-prev-15'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-15' name="template_select" value='temp15'>
                <label for="temp-15"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-21 card tempPaca">
                <div id="temp-prev-21" class="tempPrev tempPaca"> <p id="temp-prev-21"><b>Preview</b></p></div>
                <label for="temp-21"> <img src="<?php echo $pbPP_imgFolderURL.'template-21.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-21.png" class='card-img temp-prev-21'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-21' name="template_select" value='temp21'>
                <label for="temp-21"><strike> Select </strike> <b>Pro Only</b></label>
              </div>
              <div id="card" class="temp-prev-106 card tempPaca">
                <div id="temp-prev-106" class="tempPrev tempPaca"> <p id="temp-prev-106"><b>Preview</b></p></div>
                  <label for="temp-106"> <img src="<?php echo $pbPP_imgFolderURL.'template-106.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-106.png" class='card-img temp-prev-106'>
                  <p class="card-desc"></p> </label>
                  <input type="radio" disabled="disabled" class="template_select" id='temp-106' name="template_select" value='temp106'>
                  <label for="temp-106"><strike> Select </strike> <b>Pro Only</b> </label>
              </div>
              <div id="card" class="temp-prev-3 card">
                <div id="temp-prev-3" class="tempPrev"> <p id="temp-prev-3"><b>Preview</b></p></div>
                  <label for="temp-3"> <img src="<?php echo $pbPP_imgFolderURL.'template-2.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-2.png" class='card-img temp-prev-3'>
                  <p class="card-desc"></p> </label>
                  <input type="radio" disabled="disabled" class="template_select" id='temp-3' name="template_select" value='temp3'>
                  <label for="temp-3"> <strike> Select </strike> <b>Pro Only</b> </label>
              </div>
              <div id="card" class="temp-prev-2 card">
                <div id="temp-prev-2" class="tempPrev"> <p id="temp-prev-2"><b>Preview</b></p></div>
                <label for="temp-2"> <img src="<?php echo $pbPP_imgFolderURL.'template-1.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-1.png" class='card-img temp-prev-2'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-2' name="template_select" value='temp2'>
                <label for="temp-2"> <strike> Select </strike> <b>Pro Only</b> </label>
              </div>
              <div id="card" class="temp-prev-4 card">
                <div id="temp-prev-4" class="tempPrev"> <p id="temp-prev-4"><b>Preview</b></p></div>
                <label for="temp-4"> <img src="<?php echo $pbPP_imgFolderURL.'template-4.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-4.png" class='card-img temp-prev-4'>
                <p class="card-desc"></p> </label>
                <input type="radio"  disabled="disabled" class="template_select" id='temp-4' name="template_select" value='temp4'>
                <label for="temp-4"><strike> Select </strike> <b>Pro Only</b> </label>
              </div>
              <div id="card" class="temp-prev-9 card">
                <div id="temp-prev-9" class="tempPrev"> <p id="temp-prev-9"><b>Preview</b></p></div>
                <label for="temp-9"> <img src="<?php echo $pbPP_imgFolderURL.'template-7.png'; ?>" data-img_src="https://ps.w.org/page-builder-add/assets/screenshot-7.png" class='card-img temp-prev-9'>
                <p class="card-desc"></p> </label>
                <input type="radio" disabled="disabled" class="template_select" id='temp-9' name="template_select" value='temp9'>
                <label for="temp-9"><strike> Select </strike> <b>Pro Only</b> </label>
              </div>
            </div> 

            <br>
              <div id="updateTemplate" class="btn-green aligncenter large-btn">Update Template</div>
    </div>

</div>

<div class="lpp_modal pb_preview_container" style="">
  <div class="pb_temp_prev" style="text-align: center; overflow: visible; position: absolute;" ></div>
</div>


<script type="text/javascript">
    ( function( $ ) {
        $('.card-img').mouseover(function(ev) {
          //console.log($(ev.target).children());
          var tempprevbtn = $(ev.target).attr('class').split(' ')[1];
          //console.log(tempprevbtn);
          $('#'+tempprevbtn).width($(ev.target).width());
          $('#'+tempprevbtn).height($(ev.target).height());
          var tempPhieght = $(ev.target).height();
          $('.tempPrev p').css('margin-top',tempPhieght/2);
          $('#'+tempprevbtn).slideDown(100);
        });
        $('.card').mouseleave(function(ev){
          $('.tempPrev').slideUp('100');
        });

        $('.tempPrev').click(function(ev) {
          var ths_tempprev = $(ev.target).attr('id');
          if (typeof(ths_tempprev) == 'undefined') { var ths_tempprev = $(ev.target).parent().attr('id'); }
          $('.pb_preview_container').attr('style','display:block;overflow:auto;');
          $('.pb_temp_prev').append('<img src='+$('img.'+ths_tempprev).attr('data-img_src')+' class="pb_temp_prev_img" >');
        });

        $('.pb_preview_container').click(function(){
          $('.pb_preview_container').attr('style','display:none;');
          $('.pb_temp_prev').html(' ');
        });

    })(jQuery);
</script>

<div style='width:100%;text-align:center; background:#e3e3e3;height:70px;border-left:5px solid #a7d142;'>
 <?php submit_button('Update');?>
 <a href="https://pluginops.com/page-builder/?ref=ulp" id='pr_msg_link' style='float:left; font-size:19px; margin:20px 0 0 10px;'><i>Unlock All Templates and get more amazing features Click Here</i></a>
</div>


<?php


}


?>