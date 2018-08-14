      <!-- Footer -->
      <footer>
       <div class="container">
         <div class="row">
           <div class="col-lg-8 col-md-10 mx-auto">
              <?php if ( is_active_sidebar( 'widget_footer' ) ) {
                dynamic_sidebar( 'widget_footer' );
              }; ?>
             <p class="copyright text-muted">&copy; DMark SPA 2018</p>
           </div>
         </div>
       </div>

      </footer>
    <?php wp_footer() ?>
  </body>
</html>
