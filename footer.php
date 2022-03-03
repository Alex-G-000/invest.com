</div><!-- .content -->

</div><!-- .page -->

<?php

 $notice_type = getUrlParamValue( 'notice' );
 if ( isset($notice_type) && ( $notice_type == 'mu' || $notice_type == 'cy' ||  $notice_type == 'restricted' ) ) {	
	$notice = $notice_type . '-notice';	
 } else {
	$notice = 'cy-notice';
 }
 
 $disclaimer_text = get_field( $notice, 'options' ); 
?>

<div class="footer-messege sticky">
	<div class="container">
		<div class="footer-messege__box">
			<div class="footer-messege__text">
				<p class="disclaimer">
					<?php echo $disclaimer_text; ?>
				</p>
			</div>
		<?php 
			if(!isset($_COOKIE['footerMsg'])) {
		?>
			<div class="footer-messege__cookie justify-content-between">
				<div class="d-flex align-items-md-center flex-md-row flex-column">
					<p class="footer-messege__consent mr-0 mr-md-2">We need your consent</p>
					<a href="#" class="footer__link hero__link mb-0 mt-1 mt-md-0">Privacy and policy</a>
				</div>
				<div class="d-flex align-items-center">
					<div class="footer-messege__closed-btn btn btn-outline-secondary mr-0 mr-md-2">I agree</div>
					<p class="footer-messege__closed">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M1 13L13 1" stroke="white" stroke-width="2" />
							<path d="M1 13L13 1" stroke="white" stroke-width="2" />
							<path d="M13 13L1 1" stroke="white" stroke-width="2" />
							<path d="M13 13L1 1" stroke="white" stroke-width="2" />
						</svg>
					</p>
				</div>
			</div>
		<?php } ?>			
		</div>
	</div>
</div>

<footer class="footer">
	<div class="container">

		<div class="row footer__menu-row pl-sm-0 pr-sm-0">
			<div class="col-12 col-lg-3 pl-sm-0 mb-4 mb-lg-0">				
				<div class="footer__logo">
					<svg width="132" height="27" viewBox="0 0 142 27" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M0 25.5388V7.10134H4.98495V25.5388H0Z" fill="white" />
						<path
							d="M20.2858 6.65748C22.3799 6.65748 24.0302 7.36311 25.2366 8.77437C26.4657 10.1629 27.0803 12.0294 27.0803 14.3739V25.5388H22.0954V15.1592C22.0954 12.405 21.0255 11.0278 18.8859 11.0278C18.0437 11.0278 17.3039 11.2213 16.6666 11.6083C16.052 11.9952 15.574 12.5529 15.2325 13.2813C14.9139 14.0097 14.7545 14.8633 14.7545 15.8421V25.5388H9.76957V7.10134H13.1839L14.1741 9.38895C14.5155 8.95647 14.9025 8.58089 15.335 8.26222C15.7902 7.92078 16.2796 7.63626 16.8031 7.40863C17.3267 7.15825 17.873 6.97615 18.442 6.86234C19.0338 6.72576 19.6484 6.65748 20.2858 6.65748Z"
							fill="white" />
						<path
							d="M43.196 7.10134H48.3858L41.045 25.5388H36.4356L28.9582 7.10134H34.2504L38.7915 19.4613L43.196 7.10134Z"
							fill="white" />
						<path
							d="M68.2728 16.2518C68.2728 16.7298 68.2387 17.2192 68.1704 17.72H54.2398C54.4447 18.9719 54.9341 19.9393 55.708 20.6222C56.5047 21.2823 57.5176 21.6123 58.7468 21.6123C59.589 21.6123 60.3515 21.4302 61.0344 21.066C61.7173 20.6791 62.2522 20.1555 62.6391 19.4954H67.8972C67.2144 21.4985 66.0535 23.0919 64.4146 24.2755C62.7757 25.4592 60.8864 26.051 58.7468 26.051C56.0153 26.051 53.7391 25.1177 51.9181 23.2512C50.0971 21.3847 49.1866 19.0743 49.1866 16.3201C49.1866 15.2275 49.3346 14.1804 49.6305 13.1789C49.9492 12.1773 50.393 11.2782 50.9621 10.4815C51.5539 9.68486 52.2368 9.00199 53.0107 8.43294C53.7846 7.84112 54.6609 7.38587 55.6397 7.0672C56.6185 6.74853 57.6542 6.58919 58.7468 6.58919C60.5905 6.58919 62.2408 7.02167 63.6976 7.88664C65.1771 8.75161 66.3039 9.92387 67.0778 11.4034C67.8745 12.883 68.2728 14.4991 68.2728 16.2518ZM58.7468 10.823C57.6314 10.823 56.6868 11.1303 55.9129 11.7449C55.1617 12.3594 54.6496 13.213 54.3764 14.3056H63.2879C63.0602 13.5545 62.7302 12.9285 62.2977 12.4277C61.8652 11.9042 61.3417 11.5058 60.7271 11.2327C60.1353 10.9596 59.4752 10.823 58.7468 10.823Z"
							fill="white" />
						<path
							d="M98.5898 21.1002H100.843V25.5388H97.2924C95.2665 25.5388 93.6732 24.9584 92.5123 23.7975C91.3514 22.6139 90.771 20.9977 90.771 18.9491V11.0961H87.4249V10.0377L94.6975 2.28711H95.6535V7.10134H100.741V11.0961H95.7559V18.3004C95.7559 19.1881 95.9949 19.8824 96.4729 20.3832C96.9737 20.8612 97.6793 21.1002 98.5898 21.1002ZM79.2646 14.169C79.8792 14.2829 80.3231 14.3739 80.5962 14.4422C80.8921 14.4877 81.3246 14.5901 81.8937 14.7495C82.4855 14.9088 82.9293 15.0682 83.2253 15.2275C83.5439 15.3868 83.9081 15.6144 84.3179 15.9104C84.7503 16.2063 85.069 16.5249 85.2739 16.8664C85.5015 17.2078 85.695 17.6403 85.8543 18.1638C86.0136 18.6646 86.0933 19.2223 86.0933 19.8369C86.0933 21.7261 85.3877 23.2398 83.9764 24.3779C82.5652 25.4933 80.6986 26.051 78.3769 26.051C76.0551 26.051 74.1886 25.4478 72.7774 24.2414C71.3661 23.035 70.6491 21.4416 70.6263 19.4613H75.4747C75.4974 20.258 75.782 20.8725 76.3283 21.305C76.8973 21.7147 77.6371 21.9196 78.5476 21.9196C79.2988 21.9196 79.9247 21.7603 80.4255 21.4416C80.9263 21.1229 81.1766 20.6677 81.1766 20.0759C81.1766 19.78 81.0856 19.5182 80.9035 19.2906C80.7442 19.0629 80.4824 18.8808 80.1182 18.7443C79.754 18.5849 79.3898 18.4597 79.0256 18.3687C78.6614 18.2776 78.1948 18.1866 77.6257 18.0955C76.8746 17.9817 76.2486 17.8679 75.7478 17.7541C75.2698 17.6403 74.6894 17.4468 74.0065 17.1737C73.3464 16.8778 72.8115 16.5477 72.4018 16.1835C72.0148 15.8193 71.6734 15.3185 71.3775 14.6812C71.0816 14.0438 70.9336 13.3041 70.9336 12.4619C70.9336 10.7319 71.6165 9.32067 72.9822 8.22808C74.348 7.13548 76.1348 6.58919 78.3427 6.58919C80.5734 6.58919 82.3603 7.15825 83.7033 8.29636C85.069 9.41172 85.7519 10.8913 85.7519 12.735H81.0059C81.0059 11.2782 80.0841 10.5498 78.2403 10.5498C77.4664 10.5498 76.8632 10.7092 76.4307 11.0278C75.9982 11.3465 75.782 11.779 75.782 12.3253C75.782 12.5529 75.8389 12.7692 75.9527 12.974C76.0893 13.1561 76.2372 13.3041 76.3966 13.4179C76.5787 13.5317 76.8518 13.6455 77.216 13.7593C77.5802 13.8504 77.8875 13.9187 78.1379 13.9642C78.3883 14.0097 78.7638 14.078 79.2646 14.169Z"
							fill="white" />
						<path d="M4.98495 0H4.64351C2.07897 0 0 2.07897 0 4.64351H4.98495V0Z" fill="black" />
						<path d="M4.98495 0H4.64351C2.07897 0 0 2.07897 0 4.64351H4.98495V0Z"
							fill="url(#paint0_linear_3302_62373)" />
						<path d="M4.98495 0H4.64351C2.07897 0 0 2.07897 0 4.64351H4.98495V0Z"
							fill="url(#paint1_linear_3302_62373)" />
						<path
							d="M111.814 25.5394C110.935 25.5394 110.133 25.3346 109.408 24.9249C108.695 24.5042 108.129 23.9284 107.712 23.1977C107.305 22.4669 107.102 21.6586 107.102 20.7729C107.102 19.4331 107.552 18.3149 108.453 17.418C109.354 16.5212 110.479 16.0728 111.83 16.0728C112.983 16.0728 113.972 16.4105 114.796 17.0859C115.619 17.7502 116.141 18.6359 116.361 19.7432H113.972C113.774 19.3113 113.483 18.9736 113.099 18.7301C112.725 18.4754 112.297 18.3481 111.814 18.3481C111.166 18.3481 110.622 18.5806 110.183 19.0456C109.754 19.5106 109.54 20.0919 109.54 20.7895C109.54 21.487 109.76 22.0738 110.199 22.5499C110.639 23.026 111.177 23.2641 111.814 23.2641C112.297 23.2641 112.725 23.1368 113.099 22.8821C113.472 22.6164 113.763 22.2399 113.972 21.7528H116.394C116.174 22.8932 115.647 23.8122 114.812 24.5097C113.977 25.1962 112.978 25.5394 111.814 25.5394Z"
							fill="white" />
						<path
							d="M122.209 25.5394C121.298 25.5394 120.474 25.3346 119.738 24.9249C119.002 24.5152 118.426 23.9506 118.008 23.2309C117.602 22.5001 117.399 21.6919 117.399 20.8061C117.399 19.4442 117.854 18.3149 118.766 17.418C119.678 16.5212 120.825 16.0728 122.209 16.0728C123.582 16.0728 124.724 16.5212 125.636 17.418C126.547 18.3149 127.003 19.4442 127.003 20.8061C127.003 22.1569 126.542 23.2862 125.619 24.1942C124.708 25.091 123.571 25.5394 122.209 25.5394ZM122.209 23.2641C122.901 23.2641 123.467 23.0371 123.906 22.5832C124.345 22.1181 124.565 21.5258 124.565 20.8061C124.565 20.0864 124.345 19.4996 123.906 19.0456C123.467 18.5806 122.896 18.3481 122.193 18.3481C121.501 18.3481 120.935 18.5806 120.496 19.0456C120.056 19.4996 119.837 20.0864 119.837 20.8061C119.837 21.1604 119.892 21.4926 120.002 21.8026C120.122 22.1126 120.287 22.3728 120.496 22.5832C120.704 22.7935 120.952 22.9596 121.237 23.0814C121.534 23.2032 121.858 23.2641 122.209 23.2641Z"
							fill="white" />
						<path
							d="M138.854 16.106C139.776 16.106 140.529 16.4381 141.111 17.1025C141.704 17.7668 142 18.6193 142 19.6601V25.2903H139.595V20.0587C139.595 18.8408 139.145 18.2318 138.244 18.2318C137.893 18.2318 137.585 18.3204 137.322 18.4975C137.069 18.6636 136.877 18.9128 136.745 19.2449C136.613 19.5771 136.547 19.9757 136.547 20.4407V25.2903H134.191V20.0587C134.191 18.8408 133.758 18.2318 132.89 18.2318C132.341 18.2318 131.912 18.4256 131.605 18.8131C131.297 19.2006 131.144 19.7432 131.144 20.4407V25.2903H128.738V16.3219H130.419L130.864 17.4346C131.193 17.025 131.588 16.7039 132.05 16.4713C132.522 16.2278 133.016 16.106 133.532 16.106C134.093 16.106 134.598 16.2333 135.048 16.488C135.498 16.7426 135.85 17.0969 136.102 17.5509C136.212 17.3959 136.328 17.2575 136.448 17.1357C136.569 17.0028 136.701 16.8866 136.844 16.7869C136.987 16.6762 137.135 16.5821 137.289 16.5046C137.442 16.416 137.602 16.344 137.766 16.2887C137.942 16.2333 138.118 16.189 138.294 16.1558C138.48 16.1226 138.667 16.106 138.854 16.106Z"
							fill="white" />
						<path
							d="M105.46 25.6184H103.405V25.4095C103.405 24.2748 104.325 23.355 105.46 23.355V23.355V25.6184Z"
							fill="white" />
						<defs>
							<linearGradient id="paint0_linear_3302_62373" x1="-0.910256" y1="-0.546153" x2="7.51314"
								y2="0.373388" gradientUnits="userSpaceOnUse">
								<stop stop-color="#4200FF" />
								<stop offset="1" stop-color="#60C6FF" />
							</linearGradient>
							<linearGradient id="paint1_linear_3302_62373" x1="-0.910256" y1="-0.546153" x2="7.51314"
								y2="0.373388" gradientUnits="userSpaceOnUse">
								<stop stop-color="#4200FF" />
								<stop offset="1" stop-color="#9360FF" />
							</linearGradient>
						</defs>
					</svg>
				</div>
				
				<div class="footer__social">
					<a href="<?php the_field('social-links_facebook', 'options'); ?>" class="footer__social-link">
						<i class="icon-facebook"></i>
					</a>
					<a href="<?php the_field('social-links_twitter', 'options'); ?>" class="footer__social-link">
						<i class="icon-twitter"></i>
					</a>
					<a href="<?php the_field('social-links_instagram', 'options'); ?>" class="footer__social-link">
						<i class="icon-instagram"></i>
					</a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-2 pl-sm-0">
				<h5 class="footer__menu-title">Instruments</h5>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-footer-1',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'footer__menu',
						'container_id'      => '',
						'menu_class'        => 'nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
			</div>
			<div class="col-12 col-sm-6 col-lg-2 pl-sm-0">
				<h5 class="footer__menu-title">Company</h5>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-footer-3',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'footer__menu',
						'container_id'      => '',
						'menu_class'        => 'nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
			</div>
			<div class="col-12 col-sm-6 col-lg-2 pl-sm-0">
				<h5 class="footer__menu-title">Trading</h5>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-footer-2',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'footer__menu',
						'container_id'      => '',
						'menu_class'        => 'nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 pl-sm-0 text-lg-right">
				<h5 class="footer__menu-title">Office Address</h5>
				<p class="nav-link">
				9 Kafkasou Street,<br> Treppides Tower floor 5,<br> 2112 Nicosia, Cyprus
				</p>
			</div>		

		</div>

		<div class="row footer__info-row pl-2 pl-sm-0">
			<div class="col-12 col-lg-auto footer__app-links app-links justify-content-center justify-content-lg-start mb-3 mb-lg-0">				
					<a href="<?php the_field('app-links_apple-download-link', 'options'); ?>"
						class="app-links__button btn-app -store"></a>
					<a href="<?php the_field('app-links_google-download-link', 'options'); ?>"
						class="app-links__button btn-app -google"></a>				
			</div>
			<div class="col footer__links-col text-center text-lg-right">
				
				<!-- <div class="footer__links">
					<a href="<?php echo get_home_url() . '/documents/mu/risk-disclosure-statement' ?>" class="footer__link hero__link param_link">Risk Disclosure Statement</a>
					<a href="<?php echo get_home_url() . '/documents/mu/regulations' ?>" class="footer__link hero__link param_link">Regulations</a>
					<a href="<?php echo get_home_url() . '/documents/mu/compliance' ?>" class="footer__link hero__link param_link">Compliance</a>
					<a href="<?php echo get_home_url() . '/documents/mu/terms-and-conditions' ?>" class="footer__link hero__link param_link">Terms & Conditions</a>
				</div> -->

				<div class="footer__links">
					<a href="#" class="footer__link hero__link">Risk Disclosure Statement</a>
					<a href="#" class="footer__link hero__link">Regulations</a>
					<a href="#" class="footer__link hero__link">Compliance</a>
					<a href="#" class="footer__link hero__link">Terms & Conditions</a>
				</div>
			</div>
			
		</div>


	</div>

	<div class="footer__warning-wrap w-100 py-3">
		<div class="container">
			<p class="footer__warning text-justify text-lg-left mb-0 disclaimer">
				<?php echo $disclaimer_text; ?>
			</p>
		</div>				
	</div>

	<div class="w-100  py-3">
		<div class="container">
			<div class="footer__copyright text-center w-100">©2022 Invest.com Ltd., All Rights reserved</div>
		</div>
	</div>
</footer>

<?php get_template_part( 'template-parts/modal/country-restrictions', null, array() ); ?>

<?php wp_footer(); ?>
<?php inv_custom_footer_scripts(); ?>

</body>

</html>