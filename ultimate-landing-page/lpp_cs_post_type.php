<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


//////////// CUSTOM POST TYPE STARTS HERE!!!!! //////////////

function lpp_f_custom_post_type(){
    
   

  $labels = array(
    'name' => __('Landing Page','ultimate-landing-page'),
    'singular_name' => __('Landing Page','ultimate-landing-page'),
    'add_new' => __('Add New','Landing Page','ultimate-landing-page'),
    'add_new_item' => __('Add new Landing Page','ultimate-landing-page'),
    'edit_item' => __('Edit Landing Page','ultimate-landing-page'),
    'new_item' => __('New Landing Page','ultimate-landing-page'),
    'all_items' => __('All Landing Pages','ultimate-landing-page'),
    'view_itme' => __('View Landing Page','ultimate-landing-page'),
    'search_items' => __('Search Landing Page','ultimate-landing-page'),
    'not_found' => __('No Landing Page found','ultimate-landing-page'),
    'not_found_in_trash' => __('No Landing Page found in trash','ultimate-landing-page'),
    'parent_item_colon' => "",
    'menu_name' => __('Landing Page','ultimate-landing-page')
    );

  $args = array(
    'labels' => $labels,
    'description' => __('Create Landing Page','ultimate-landing-page'),
    'public' => true,
    'exclude_from_search' => false,
    'menu_position' => 15,
    'supports' => array('title','custom_fields'),
    'has_archive' => true,
    'capability_type' => 'page',
    'query_var' => 'landingpage',
    'menu_icon' => 'dashicons-welcome-add-page',
    'show_in_menu' => true

    );


  register_post_type('landingpage_f',$args);
}

add_action('init','lpp_f_custom_post_type');

 
function lpp_ulp_deactivate_f() {
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'lpp_ulp_deactivate_f' );

//////////// CUSTOM POST TYPE ENDS HERE!!!!! ////////////// /
                                                        // //   / 
                                                            //  //  /
                                                            //  //  //
                // WONDERFULL ART HERE                      //  //  //////////////////////////////
                                                            //  //  ///        //////////////////
                                                            //  //  ////////////////////////////
                                                            //  //  ///
                                                            //  //
                                                            //  //
                                                            //  /
                                                            //

/////////////////////////// Removing post name from perma link ///////////////////////////



    function add_lpp_tabs_to_dropdown_f( $pages ){
    $args = array(
        'post_type' => 'landingpage_f'
    );
    $items = get_posts($args);
    $pages = array_merge($pages, $items);

    return $pages;
}
add_filter( 'get_pages', 'add_lpp_tabs_to_dropdown_f' );


function lpp_column_visitors($defaults) {
    $date = $defaults['date'];
    unset($defaults['date']);
    $defaults['lpp_visitors']  = 'Visitor Count';
    $defaults['lpp_front_page']  = 'Front Page';
    $defaults['date'] = $date;

    return $defaults;
}
function lpp_column_visitors_data($column_name, $post_ID) {
    if ($column_name == 'lpp_visitors') {
        $current_count = get_post_meta($post_ID,'lpp_page_hit_counter',true);
        if (empty($current_count)) {
            $current_count = 0;
        }
        echo "<div style='padding: 7px 10px 8px 31px;background: #fff;border: 1px solid #D2D2D2;border-radius: 3px;width: 20%; min-width:200px;font-weight: bold;' >$current_count - Visits</div>";
    }
}

add_filter('manage_landingpage_f_posts_columns', 'lpp_column_visitors');
add_action('manage_landingpage_f_posts_custom_column','lpp_column_visitors_data',10, 2);

function lpp_front_page_column($column_name, $post_ID) {
    if ($column_name == 'lpp_front_page') {
        $lpp_is_front_page = get_post_meta($post_ID,'lpp_is_front_page',true);
        if ($lpp_is_front_page === 'true') {
            $is_landing_page = 'background:#8bc34a;';
        }else{
            $is_landing_page = 'background:#f44336;';
        }
        echo "<div style='width:30px; height:30px; border-radius:100px; $is_landing_page'></div>";
    }
}

add_action('manage_landingpage_f_posts_custom_column','lpp_front_page_column',10, 2);


add_filter( 'template_redirect', 'lpp_front_page');

function lpp_front_page() {

$args = array(
    'offset'           => 0,
    'orderby'          => 'date',
    'order'            => 'ASC',
    'post_type'        => 'landingpage_f',
    'post_status'      => 'publish',
    );
    
    $lpp_pages = get_posts( $args );

    if (!empty($lpp_pages)) {
        foreach ($lpp_pages as $post) {
            $currentID = $post->ID;
            $lpp_is_front_page = get_post_meta( $currentID, 'lpp_is_front_page', true );

            if ($lpp_is_front_page === 'true') {
            $lpp_template_select = 'lpp_template_2.php';
            $lpp_template = dirname( __FILE__ ).'/'.'lpp_template_2.php';
            
            if (is_home() || is_front_page() ) {

                    include($lpp_template);
                    exit();

            }
    }

    }

    
    }

}



    




?>