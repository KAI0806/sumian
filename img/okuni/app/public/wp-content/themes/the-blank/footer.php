<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-blank
 */

?>
	</div><!-- .wrap -->
	</div><!-- #content -->

	<footer>
        <div class="footer_img"></div>
        <div class="wrap">
            <h1 class="mintyo"><a href="/">一般社団法人日本全国お国自慢の会</a></h1>

            <p>
                〒000-0000　東京都〇〇
                <br/>TEL 03-6336-8717  FAX 000-0000-0000
            </p>

            <div>
                <a href=""><img src="/wp-content/uploads/2022/04/facebook.svg" alt="facebook"></a>
                <a href=""><img src="/wp-content/uploads/2022/04/instagram.svg" alt="instagram"></a>
                <a href=""><img src="/wp-content/uploads/2022/04/line.svg" alt="LINE"></a>
            </div>

            <p class="copyright">&copy; copyright <script type="text/javascript">document.write(new Date().getFullYear());</script> okuni-jiman.</p>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    function hamburger(){
    document.getElementById('line1').classList.toggle('line_1');
    document.getElementById('line2').classList.toggle('line_2');
    document.getElementById('line3').classList.toggle('line_3');
    document.getElementById('nav').classList.toggle('in');
  };
  document.getElementById('hamburger').addEventListener('click',function(){
    hamburger();
  });
  document.getElementById('nav').addEventListener('click',function(){
    hamburger();
  });
</script>

</body>
