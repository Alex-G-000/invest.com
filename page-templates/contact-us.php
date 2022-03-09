<?php
//*template name: Contact Us*//

 get_header(); 
 
 ?>

<div id="primary" class="content-area" >
	<main id="main" class="site-main" > 		
		
	<header class="contact-header page-header block mb-0 pb-3 pb-md-4">
		<div class="container">
			<?php if (get_field('header-settings_show-header')) { ?>
			<div class="section-header pb-0">
				<h1 class="section-header__header text-center text-md-left">
					<?php 
					if (get_field('header-settings_page-title')) { 
						the_field('header-settings_page-title');
					} else {
						the_title(); 
					}						
					?>
				</h1>				
			</div>
			<?php } ?>
		</div>
	</header>
	
	<section class="contact-us-icons block pt-0 mb-0">
		<div class="container"> 
			<h4 class="block__title mb-5 mb-lg-3">
				One-click trading most popular markets.
			</h4> 
			<p class="block__subtitle text-gray mb-3">
				Invest offers you multi-channel support 24/7, assistance in opening your account and performing various actions. 
			</p>
			<div class="bg-dark rounded border py-5 px-4 mb-3">
				<div class="row">
					
					<div class="col-12 col-lg-4 contact-icon__col mb-5 mb-lg-0">
						<a class="contact-icon d-flex flex-column justify-content-center align-items-center" href="<?php echo get_field('help-banner-support_button-link', 'options'); ?>">
							<div class="contact-icon__icon mb-3">
								<svg width="57" height="45" viewBox="0 0 57 45" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.14683 0C3.67093 0 0 3.67379 0 8.17235V20.4524C0 24.9509 3.6709 28.6403 8.14683 28.6403V34.7864C8.15012 35.1892 8.27157 35.5817 8.49599 35.9154C8.72041 36.2491 9.0378 36.5089 9.4084 36.6621C9.77901 36.8152 10.1863 36.8548 10.5794 36.7763C10.9724 36.6978 11.3337 36.5047 11.6179 36.2208L19.1604 28.6403H32.5794C37.0553 28.6403 40.7103 24.9509 40.7103 20.4524V8.17235C40.7103 3.67379 37.0553 0 32.5794 0H8.14683ZM8.14683 4.09632H32.5794C34.8702 4.09632 36.6548 5.86987 36.6548 8.17235V20.4524C36.6548 22.7547 34.8702 24.5444 32.5794 24.5444H18.3214C17.7838 24.5476 17.2692 24.7645 16.8901 25.1476L12.2183 29.8467V26.598C12.2203 26.0554 12.0078 25.5342 11.6276 25.149C11.2473 24.7639 10.7304 24.5461 10.1905 24.544H8.14683C5.85606 24.544 4.0754 22.7542 4.0754 20.4519V8.17188C4.0754 5.8694 5.85603 4.09632 8.14683 4.09632ZM42.754 8.17235V12.264H48.8571C51.1479 12.264 52.9286 14.0579 52.9286 16.3603V28.6403C52.9286 30.9426 51.1479 32.7324 48.8571 32.7324H46.8254C46.5567 32.7313 46.2905 32.7838 46.0421 32.8867C45.7937 32.9896 45.568 33.1408 45.378 33.3318C45.188 33.5227 45.0375 33.7495 44.9352 33.9992C44.8329 34.2488 44.7807 34.5164 44.7817 34.7864V38.019L40.1258 33.3356C39.9367 33.1444 39.7118 32.993 39.4641 32.8895C39.2164 32.786 38.9508 32.7324 38.6825 32.7324H24.4365C22.9009 32.7324 21.6085 31.9185 20.9138 30.6943H20.0033L17.6256 33.084C19.0835 35.3256 21.591 36.8244 24.4365 36.8244H37.8396L45.3861 44.4049C45.671 44.6895 46.0334 44.8833 46.4275 44.9614C46.8217 45.0395 47.23 44.9985 47.6011 44.8439C47.9722 44.6892 48.2894 44.4275 48.5129 44.092C48.7364 43.7565 48.8562 43.3621 48.8571 42.9583V36.8244C53.3331 36.8244 57 33.1388 57 28.6403V16.3603C57 11.8617 53.333 8.17235 48.8571 8.17235H42.754Z" fill="white"/>
								</svg>
							</div>
							<h4 class="contact-icon__title text-white mb-3">
								Live chat
							</h4>    
							<p class="contact-icon__text text-gray text-center mb-0">
								Click on the chat icon to start an immediate conversation and ask a question in any topic 
							</p>
						</a>
					</div>

					<div class="col-12 col-lg-4 contact-icon__col mb-5 mb-lg-0">
						<a class="contact-icon d-flex flex-column justify-content-center align-items-center" href="mailto:<?php the_field('company-info_contact-email', 'options'); ?>">
							<div class="contact-icon__icon mb-3">
								<svg width="54" height="38" viewBox="0 0 54 38" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M49.2539 0H4.74609C2.13448 0 0 2.12684 0 4.75V33.25C0 35.8741 2.13585 38 4.74609 38H49.2539C51.8655 38 54 35.8732 54 33.25V4.75C54 2.12621 51.8645 0 49.2539 0ZM48.5251 3.16667C46.9907 4.70746 28.9665 22.8053 28.226 23.5488C27.6075 24.1697 26.3928 24.1701 25.774 23.5488L5.47488 3.16667H48.5251ZM3.16406 32.6679V5.33214L16.7764 19L3.16406 32.6679ZM5.47488 34.8333L19.0101 21.2428L23.5331 25.7844C25.3866 27.6454 28.6141 27.6447 30.467 25.7844L34.99 21.243L48.5251 34.8333H5.47488ZM50.8359 32.6679L37.2236 19L50.8359 5.33214V32.6679Z" fill="white"/>
								</svg>
							</div>
							<h4 class="contact-icon__title text-white mb-3">
								Email
							</h4>    
							<p class="contact-icon__text text-gray text-center mb-0">
								Write us and describe the issue you are facing and get an in depth explanation as of how to continue
							</p>
						</a>
					</div>

					<div class="col-12 col-lg-4 contact-icon__col">
						<a class="contact-icon d-flex flex-column justify-content-center align-items-center" href="tel:<?php the_field('company-info_phone-number', 'options'); ?>">
							<div class="contact-icon__icon mb-3">
								<svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M39.6812 29.5118C39.6087 29.4517 31.4238 23.5941 29.2029 23.9782C28.1356 24.1668 27.5247 24.8938 26.3015 26.3521C26.1047 26.5871 25.6305 27.1488 25.2642 27.5493C24.4911 27.2974 23.7371 26.9905 23.0078 26.6309C19.2434 24.7982 16.2018 21.7566 14.3691 17.9922C14.0095 17.2629 13.7026 16.5089 13.4507 15.7358C13.8525 15.3682 14.4156 14.8939 14.6561 14.6917C16.1062 13.4753 16.8332 12.8644 17.0218 11.7957C17.4086 9.58307 11.5483 1.39127 11.4882 1.31747C11.2213 0.938977 10.8737 0.624463 10.4705 0.39663C10.0673 0.168796 9.61858 0.0333263 9.15667 0C6.7814 0 0 8.79587 0 10.2787C0 10.3648 0.124367 19.1169 10.9169 30.0954C21.8831 40.8756 30.6352 41 30.7213 41C32.2041 41 41 34.2186 41 31.8433C40.9667 31.3813 40.8311 30.9324 40.603 30.5291C40.3749 30.1259 40.06 29.7784 39.6812 29.5118ZM30.571 38.2585C29.3765 38.1601 22.032 37.1911 12.8494 28.1697C3.78157 18.9379 2.8372 11.5729 2.7429 10.4318C4.5343 7.62005 6.69775 5.06353 9.17443 2.83173C9.2291 2.8864 9.30153 2.9684 9.39447 3.075C11.2939 5.66788 12.9301 8.44363 14.2789 11.3611C13.8403 11.8024 13.3767 12.2181 12.8904 12.6061C12.1363 13.1807 11.4438 13.832 10.824 14.5495L10.4919 15.0142L10.5903 15.5759C10.8795 16.8288 11.3225 18.0411 11.9091 19.1853C14.0109 23.5012 17.4985 26.9883 21.8147 29.0895C22.9587 29.677 24.1711 30.1204 25.4241 30.4097L25.9858 30.5081L26.4505 30.176C27.1707 29.5535 27.8247 28.8583 28.4021 28.1014C28.8298 27.5903 29.4025 26.9083 29.6184 26.7156C32.5442 28.0631 35.327 29.7013 37.925 31.6055C38.0384 31.7012 38.1177 31.775 38.171 31.8228C35.9396 34.3003 33.383 36.4642 30.571 38.2557V38.2585Z" fill="white"/>
								</svg>	
							</div>
							<h4 class="contact-icon__title text-white mb-3">
								Phone support
							</h4>    
							<p class="contact-icon__text text-gray text-center mb-0">
								Discuss with your account manager how to use the platform
							</p>
						</a>
					</div>

				</div>  
			</div>   
			<p class="block__text text-gray">
				Don’t forget to check our <a href="../faq" target="_blank">FAQs</a> page for more information frequently asked questions 
			</p>   
				
		</div>
	</section>


	<section class="pt-0">
		<div class="container">
			<div class="row">

				<div class="col-12 col-md-7 mb-5">
					<div class="pr-md-3">
						<form class="bg-dark rounded border py-5 pl-4 pr-5">
							<div class="form-group">								
								<input type="text" class="form-control" name="your-name" id="your-name" placeholder="Your Name:">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="your-email" id="your-email" placeholder="Email Adress:">
							</div>
							<div class="form-group">								
								<input type="phone" class="form-control" name="your-phone" id="your-phone" placeholder="Phone Number:">
							</div>
							<div class="form-group">								
								<input type="text" class="form-control" name="your-subject" id="your-subject" placeholder="Subject:">
							</div>
							<div class="form-group">								
								<textarea class="form-control" id="your-message" rows="5"></textarea>
							</div>
							<div class="w-100 text-center py-4">
								<button type="submit" class="btn btn-secondary">Send</button>
							</div>						
						</form>
					</div>
				</div>

				<div class="col-12 col-md-5 mb-5 mb-md-0">
					<div class="text-center text-md-left">
						<h3 class="">Office Address</h3>
						<p class="text-blog--dark mb-5">							
							<!-- 9 Kafkasou Street,<br> Treppides Tower floor 5,<br> 2112 Nicosia, Cyprus -->
							6th Floor, Tower 1,<br> Nexteracom Building, Ebene, <br>Republic of Mauritius
						</p>
						
						<h3 class="">Email</h3>
						<p class="text-blog--dark mb-5">
							<a href="mailto:<?php the_field('company-info_contact-email', 'options'); ?>" class="company-info__link"><?php the_field('company-info_contact-email', 'options'); ?></a>
						</p>
						<h3 class="">Social Media</h3>
						<ul class="list-unstyled text-blog--dark">
							<?php if ( get_field('social-links_instagram', 'options') ){ ?>			
								<li class="mb-1"><a href="<?php the_field('social-links_instagram', 'options'); ?>" class="company-info__link mb-2"><i class="icon-instagram text-white--dark"></i> Instagram</a><br></li>
							<?php } ?>
							<?php if ( get_field('social-links_facebook', 'options') ){ ?>	
								<li class="mb-1"><a href="<?php the_field('social-links_facebook', 'options'); ?>" class="company-info__link mb-2"><i class="icon-facebook text-white--dark"></i> Facebook</a><br></li>
							<?php } ?>
							<?php if ( get_field('social-links_twitter', 'options') ){ ?>
								<li class="mb-1"><a href="<?php the_field('social-links_twitter', 'options'); ?>" class="company-info__link mb-2"><i class="icon-twitter text-white--dark"></i> Twitter</a><br></li>
							<?php } ?>
							<?php if ( get_field('social-links_linkedin', 'options') ){ ?>
								<li class="mb-1"><a href="<?php the_field('social-links_linkedin', 'options'); ?>" class="company-info__link"><i class="icon-linkedin text-white--dark"></i> LinkedIn</a></li>							
							<?php } ?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>
				
	</main>
</div><!-- .content-area -->



<?php
get_footer();