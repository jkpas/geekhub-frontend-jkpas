 <footer class="footer">
        <div class="footer-top">
          <ul class="center-block text-center">
            <li>
              <a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa  fa-envelope-o fa-stack-1x"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-address-nav">
          <address>©<?php echo date('Y'); ?> Rylander Design *** E-mail:<?php bloginfo("admin_email"); ?></address>
          <!-- <nav class="footer-nav">
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Work</a>
              </li>
              <li>
                <a href="#">Clients</a>
              </li>
              <li>
                <a href="#">Blog</a>
              </li>
              <li>
                <a href="#">Connect</a>
              </li>
            </ul>
          </nav> -->
          <?php wp_nav_menu( array(
            "theme_location" => "main_menu",
            'menu_class'     => 'footer-nav',
            "container"      => false,
          ) ); ?>

        </div>
      </footer>
    </div>    
  <!--  <?php wp_footer(); ?>  -->
  </body>
</html>