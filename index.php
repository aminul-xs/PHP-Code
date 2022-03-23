//elementor scrollTop js code

add_action( 'wp_footer', function() {
   if ( ! defined( 'ELEMENTOR_VERSION' ) ) {
       return;
   }
   ?>
   <script>
       jQuery( function( $ ) {
           // Add space for Elementor Menu Anchor link
            $( window ).on( 'elementor/frontend/init', function() {
               elementorFrontend.hooks.addFilter( 'frontend/handlers/menu_anchor/scroll_top_distance', function( scrollTop ) {
                   return scrollTop - 121; // Height of header on mobile
               } );
           } );
       } );
   </script>
   <?php
} );
