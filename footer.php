<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 */
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78760760-1', 'auto');
  ga('send', 'pageview');

</script>



        </div> <!--#innerwrap-->
            </div> <!--#outerwrap-->
            <footer id="footer">
                <div class="container">
                    <?php get_template_part( 'sidebar-subsidiary' ); ?>
                    <p class="copyright credits">Photography &copy; Sascha-Darius Knießner <?php echo date ( 'Y' ); ?></p>
                     <?php get_template_part( 'menus/menu-subsidiary' ); ?>
                </div>
            </footer>   
   
        <?php wp_footer(); ?> 
    </body>
</html>