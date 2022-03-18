</div><!-- .content -->

</div><!-- .page -->


<?php
 $disclaimer_text = get_field( 'notice', 'options' ); 
?>


<footer class="footer">
	<div class="w-100  py-3">
		<div class="container">
			<div class="footer__copyright w-100">			
				<?php echo $disclaimer_text; ?>
			</div>
		</div>
	</div>
</footer>


<?php get_template_part( 'template-parts/modal/country-restrictions', null, array() ); ?>


<?php wp_footer(); ?>
<?php inv_custom_footer_scripts(); ?>

</body>

</html>