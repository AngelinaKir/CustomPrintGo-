<?php //to use wp udpate plugin
wp_enqueue_script( 'updates' ); ?>

<div class="theme-offer">
  <?php 
  if(isset($_GET['import-demo'])){
    $home_id=''; $blog_id=''; $page_id=''; $about_id='';


    // Function to check if a page with a specific title exists
    function page_exists_by_title($title) {
      $page_query = new WP_Query(array(
          'post_type'   => 'page',
          'title'       => $title,
          'post_status' => 'publish',
          'numberposts' => 1
      ));
      
      if ($page_query->have_posts()) {
          // Return the ID of the first matching page
          $page = $page_query->posts[0];
          return $page->ID;
      }
    
      return false; // Return false if no page found
    }

    //Homepage
    $home_title = 'Home';
    if (!page_exists_by_title($home_title)) {
      $home_content = '';
      $home = array(
        'post_type'    => 'page',
        'post_title'   => $home_title,
        'post_content' => $home_content,
        'post_status'  => 'publish',
        'post_author'  => 1,
        'post_name'    => 'home'
      );

      $home_id = wp_insert_post($home);
      
      // Set the home page template
      add_post_meta($home_id, '_wp_page_template', 'page-template/custom-home-page.php');
      
      // Set the static front page
      update_option('page_on_front', $home_id);
      update_option('show_on_front', 'page');

    }else {
      // Get the ID of the existing page
      $home_id = page_exists_by_title($home_title);

      // Set the home page template
      add_post_meta($home_id, '_wp_page_template', 'page-template/custom-home-page.php');
      
      // Set the static front page
      update_option('page_on_front', $home_id);
      update_option('show_on_front', 'page');
    }
    


    // Create a Page if it doesn't exist
    if ( !page_exists_by_title('Page') ) {
      $page_title = 'Page';
      $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel';

      $ot_page = array(
        'post_type'     => 'page',
        'post_title'    => $page_title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'page'
      );
      $page_id = wp_insert_post($ot_page);
    }else {
      // Get the ID of the existing page
      $ot_page = page_exists_by_title('Page');
    }

    if ( !page_exists_by_title('Page Left Sidebar') ) {
      $page_title = 'Page Left Sidebar';
      $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

      $ot_page = array(
        'post_type'     => 'page',
        'post_title'    => $page_title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'page-left'
      );
      $page_id = wp_insert_post($ot_page);

      // Set the page template
      add_post_meta($page_id, '_wp_page_template', 'page-template/left-sidebar.php');
    }else {
      // Get the ID of the existing page
      $ot_page = page_exists_by_title('Page Left Sidebar');
    }

    if ( !page_exists_by_title('Page Right Sidebar') ) {
      $page_title = 'Page Right Sidebar';
      $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

      $ot_page = array(
        'post_type'     => 'page',
        'post_title'    => $page_title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'page-right'
      );
      $page_id = wp_insert_post($ot_page);

      // Set the page template
      add_post_meta($page_id, '_wp_page_template', 'page-template/right-sidebar.php');
    }else {
      // Get the ID of the existing page
      $ot_page = page_exists_by_title('Page Right Sidebar');
    }

    // ------- Create Left Menu --------
    $menuname =  'Main Menu';
    $bpmenulocation = 'primary';
    $menu_exists = wp_get_nav_menu_object( $menuname );

    if (!$menu_exists) {
      // Create the menu
      $menu_id = wp_create_nav_menu($menuname);

      // Add the HOME item
      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Home', 'clothing-store'),
          'menu-item-classes' => 'home',
          'menu-item-url'     => home_url('/index.php/home/'),
          'menu-item-status'  => 'publish'
      ));

      // Add the PAGE item
      $parent_page_item_id = wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Pages', 'clothing-store'),
          'menu-item-classes' => 'page',
          'menu-item-url'     => home_url('/index.php/page/'),
          'menu-item-status'  => 'publish'
      ));

      // Add the Page Left Sidebar item as a child of PAGE
      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'   => __('Page Left Sidebar', 'clothing-store'),
          'menu-item-classes' => 'page-left',
          'menu-item-url'     => home_url('/index.php/page-left/'),
          'menu-item-status'  => 'publish',
          'menu-item-parent-id' => $parent_page_item_id
      ));

      // Add the Page Right Sidebar item as a child of PAGE
      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'   => __('Page Right Sidebar', 'clothing-store'),
          'menu-item-classes' => 'page-right',
          'menu-item-url'     => home_url('/index.php/page-right/'),
          'menu-item-status'  => 'publish',
          'menu-item-parent-id' => $parent_page_item_id
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Shop', 'clothing-store'),
          'menu-item-classes' => 'shop',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Categories', 'clothing-store'),
          'menu-item-classes' => 'categories',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));

      wp_update_nav_menu_item($menu_id, 0, array(
          'menu-item-title'  => __('Contact Us', 'clothing-store'),
          'menu-item-classes' => 'contact us',
          'menu-item-url'     => '#',
          'menu-item-status'  => 'publish'
      ));
      
      // Assign the menu to the desired location if not already assigned
      if (!has_nav_menu($bpmenulocation)) {
          $locations = get_theme_mod('nav_menu_locations');
          $locations[$bpmenulocation] = $menu_id;
          set_theme_mod('nav_menu_locations', $locations);
      }
    }
       
    // --------Header------------------------

    set_theme_mod( 'clothing_store_top_phone', '911802012130' ); 

    set_theme_mod( 'clothing_store_top_phone_icon', 'fas fa-phone-volume' ); 

    set_theme_mod( 'clothing_store_top_text', 'SUMMER SALE DISCOUNT OFF 50%!' ); 

    // --------Social icons------------------------

    set_theme_mod( 'clothing_store_facebook', 'https://www.facebook.com/' ); 

    set_theme_mod( 'clothing_store_twitter', 'https://x.com/' ); 

    set_theme_mod( 'clothing_store_linkedin', 'https://www.linkedin.com/' ); 

    set_theme_mod( 'clothing_store_pinterest', 'https://www.pinterest.com/' ); 

    //-------------- Slider-----------------------

    set_theme_mod('clothing_store_slider_count','4');

    set_theme_mod('clothing_store_slide_heading','NEW ARRIVAL COLLECTION');

    for($i=1;$i<=4;$i++){

      $title = 'The latest trends in fashion';
      $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

      // Create post object
      $clothing_store_my_post = array(
       'post_title'    => wp_strip_all_tags( $title ),
       'post_content'  => $content,
       'post_status'   => 'publish',
       'post_type'     => 'post',
      );

      $clothing_store_slider_post_id = wp_insert_post($clothing_store_my_post);

      $clothing_store_post_image_url = get_template_directory_uri().'/assets/images/slider.jpg';

      $clothing_store_image_name = 'slider.jpg';
      $clothing_store_upload_dir       = wp_upload_dir(); 
      // Set upload folder
      $clothing_store_image_data       = file_get_contents($clothing_store_post_image_url); 
       
      // Get image data
      $clothing_store_unique_file_name = wp_unique_filename( $clothing_store_upload_dir['path'], $clothing_store_image_name ); 
      // Generate unique name
      $filename= basename( $clothing_store_unique_file_name ); 
      // Create image file name
      // Check folder permission and define file location
      if( wp_mkdir_p( $clothing_store_upload_dir['path'] ) ) {
          $file = $clothing_store_upload_dir['path'] . '/' . $filename;
      } else {
          $file = $clothing_store_upload_dir['basedir'] . '/' . $filename;
      }
      file_put_contents( $file, $clothing_store_image_data );
      $wp_filetype = wp_check_filetype( $filename, null );
      $clothing_store_attachment = array(
          'post_mime_type' => $wp_filetype['type'],
          'post_title'     => sanitize_file_name( $filename ),
          'post_content'   => '',
          'post_type'     => 'post',
          'post_status'    => 'inherit'
      );
      $attach_id = wp_insert_attachment( $clothing_store_attachment, $file, $clothing_store_slider_post_id );
      require_once(ABSPATH . 'wp-admin/includes/image.php');
      $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          wp_update_attachment_metadata( $attach_id, $attach_data );
          set_post_thumbnail( $clothing_store_slider_post_id, $attach_id );

      // Set theme mod for each post created
      set_theme_mod('clothing_store_post_setting' . $i, $clothing_store_slider_post_id);

    }

    set_theme_mod('clothing_store_product_discount_text','Get Up To');

    set_theme_mod('clothing_store_product_discount_number','50');

    //-------------- product----------------------

    set_theme_mod( 'clothing_store_millions_of_hours_heading', 'Millions of hours' ); 

    set_theme_mod( 'clothing_store_millions_of_hours_sub_heading', 'Upto 60% off on Handloom clothing & furnishings' ); 

    set_theme_mod('clothing_store_millions_of_hours_countdown_timer','20 March 2025');

   set_theme_mod( 'clothing_store_millions_of_hours_number', '4' );

    wp_insert_term(
      'Popular_Products', // the term
      'product_cat', // the taxonomy
      array(
      'description'=> '',
      'slug' => 'Popular_Products',
      'term_id'=>12,
      'term_taxonomy_id'=>34,
    ));


    if ( class_exists( 'WooCommerce' ) ) {
      for($i=1;$i<=4;$i++) {
        $title = 'Dinterdum pretium and dem condimentus';
        $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

        // Create post object
        $clothing_store_my_post = array(
          'post_title'    => wp_strip_all_tags( $title ),
          'post_content'  => $content,
          'post_status'   => 'publish',
          'post_type'     => 'product',
          'order' => 'ASC'
        );

        // Insert the post into the database
        $clothing_store_product_id = wp_insert_post( $clothing_store_my_post );
        // Gets term object from Tree in the database.
        $term = get_term_by('name', 'Popular_Products', 'product_cat');
        wp_set_object_terms($clothing_store_product_id, $term->term_id, 'product_cat');

        update_post_meta( $clothing_store_product_id, '_price', '$5,122' );
        update_post_meta( $clothing_store_product_id, '_regular_price', '$5,122' );
        update_post_meta( $clothing_store_product_id, '_sale_price', '$4,900' );

        $clothing_store_product_image_url = get_template_directory_uri().'/assets/images/product'.$i.'.png';

      $clothing_store_product_image_name = 'product'.$i.'.png';
      $clothing_store_product_upload_dir       = wp_upload_dir(); 
      // Set upload folder
      $clothing_store_product_image_data       = file_get_contents($clothing_store_product_image_url); 
       
      // Get image data
      $clothing_store_product_unique_file_name = wp_unique_filename( $clothing_store_product_upload_dir['path'], $clothing_store_product_image_name ); 
      // Generate unique name
      $filename= basename( $clothing_store_product_unique_file_name ); 
      // Create image file name
      // Check folder permission and define file location
      if( wp_mkdir_p( $clothing_store_product_upload_dir['path'] ) ) {
          $file = $clothing_store_product_upload_dir['path'] . '/' . $filename;
      } else {
          $file = $clothing_store_product_upload_dir['basedir'] . '/' . $filename;
      }
      file_put_contents( $file, $clothing_store_product_image_data );
      $wp_filetype = wp_check_filetype( $filename, null );
      $clothing_store_product_attachment = array(
          'post_mime_type' => $wp_filetype['type'],
          'post_title'     => sanitize_file_name( $filename ),
          'post_content'   => '',
          'post_type'     => 'product',
          'post_status'    => 'inherit'
      );
      $attach_id = wp_insert_attachment( $clothing_store_product_attachment, $file, $clothing_store_product_id );
      require_once(ABSPATH . 'wp-admin/includes/image.php');
      $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          wp_update_attachment_metadata( $attach_id, $attach_data );
          set_post_thumbnail( $clothing_store_product_id, $attach_id );
      
      }
    }
    set_theme_mod( 'clothing_store_millions_of_hours_category', 'Popular_Products' ); 

    

  } ?>
  
  <p class="plugin-text"><?php echo esc_html_e('Before Demo Import first install given plugin, ','clothing-store'); ?><span><?php echo esc_html_e('WooCommerce','clothing-store'); ?></span></p>
  <p class="note"><?php esc_html_e("If your website is already live and containing data, please make a backup.This importer will override the Clothing Store's new customizable values.",'clothing-store'); ?></p>
  <form id="mep-demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=clothing-store-guide-page" method="POST">
    <input type="submit" name="submit" value="<?php echo esc_attr( __('Begin With Demo Import', 'clothing-store') ); ?>" class="button button-primary button-large">
    <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" class="button button-primary button-large"><?php esc_html_e('View Site','clothing-store'); ?></a>
  </form>
  <div class="mep-spinner-div"><p class="spinner"></p></div>
  <div class="success">
    <?php if (isset($_GET['import-demo'])) {
       echo esc_html(__('Demo Import Successful', 'clothing-store'));
    } ?>
  </div>
  <?php $admin_url = admin_url( 'admin-ajax.php' ); ?>

  <script type="text/javascript">
    function validate() {
      document.forms[0].submit();
    }
    jQuery(document).ready(function($) {
      var pathUrl = new URL(window.location.href)
      var searchParams = pathUrl.searchParams.get("import-demo")
      if(searchParams) {
        history.replaceState({}, '', 'themes.php?page=clothing-store-guide-page')
      }
      $( "#mep-demo-importer-form" ).submit(function( event ) {
        event.preventDefault();
        if(confirm("Are you sure, you want to import demo content?")){
          $('.spinner').addClass('is-active');
          location.href = location.href + '&import-demo=true';
        } else {
          return false;
        }
      });
    });
  </script>
</div>