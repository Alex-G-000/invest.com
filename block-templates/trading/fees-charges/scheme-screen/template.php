<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'inner'           => $inner,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>


<section class="fees-charges block">
	<div class="container">
		<h2 class="block__title text-center">
			<span class="text-gradient--dark text-gradient--light"><?php echo $title; ?></span>
			<span class="text-gradient--dark text-gradient--light"><?php echo $subtitle; ?></span>
		</h2>
		<div class="scheme-trading">
			<div class="row">

				<div class="col-12 col-md-6 col-lg-6 text-center order-last order-lg-first d-none d-md-block">
					<?php echo $inner; ?>
				</div>

				<div class="col-12 col-md-6 col-lg-6">


					<div class="scheme-trading__list">

						<div class="scheme-trading__item" data-aos="flip-up" data-aos-delay="500">
							<span>Opening / Closing trades</span>
							<span class="icon">
								<svg width="36" height="36" viewBox="0 0 38 38" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M36.1828 13.0096L34.746 1.19995L25.5672 8.38953L29.3367 10.0301L25.1979 20.1944L19.5208 13.4072L13.5938 25.0535L7.64611 19.1078L0.859375 35.0307L3.8821 36.4055L8.75575 24.9661L14.4626 30.6742L20.1904 19.4228L26.1769 26.5821L32.3804 11.3539L36.1828 13.0096Z"
										fill="url(#paint0_linear_2707_52481)" />
									<defs>
										<linearGradient id="paint0_linear_2707_52481" x1="10.7115" y1="7.55177"
											x2="36.1381" y2="15.8399" gradientUnits="userSpaceOnUse">
											<stop stop-color="#637CFF" />
											<stop offset="1" stop-color="#7D56FF" />
										</linearGradient>
									</defs>
								</svg>

							</span>
						</div>

						<div class="scheme-trading__item" data-aos="flip-up" data-aos-delay="400">
							<span>Real time price quotes</span>
								<span class="icon">
									<svg width="36" height="36" viewBox="0 0 42 42" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_2707_52479)">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M20.8347 41.6694C9.32743 41.6694 0 32.342 0 20.8347C0 9.32743 9.32743 0 20.8347 0C32.342 0 41.6694 9.32743 41.6694 20.8347C41.6694 32.342 32.342 41.6694 20.8347 41.6694ZM29.2988 24.9417C29.2988 21.6564 27.2466 19.8008 22.4455 18.6444V12.8628C23.9299 13.1675 25.3506 13.8069 26.74 14.8109L28.5097 11.9513C26.7666 10.6746 24.7192 9.87718 22.5718 9.63865V7.81301H19.8242V9.57745C15.876 9.88216 13.1923 12.1336 13.1923 15.419C13.1923 18.8567 15.3395 20.53 19.9505 21.6863V27.6502C17.897 27.3455 16.1925 26.4327 14.3916 25.0329L12.3706 27.8013C14.5339 29.4666 17.1114 30.5086 19.8242 30.8145V33.8564H22.5718V30.8445C26.5825 30.5098 29.2988 28.2883 29.2988 24.9417ZM19.9492 18.0051C17.5181 17.3058 16.9191 16.4842 16.9191 15.2054C16.9191 13.8681 17.9608 12.8029 19.9505 12.6506L19.9492 18.0051ZM25.572 25.154C25.572 26.615 24.4352 27.619 22.4455 27.7713V22.2645C24.9092 22.965 25.572 23.7854 25.572 25.1553V25.154Z"
												fill="url(#paint0_linear_2707_52479)" />
										</g>
										<defs>
											<linearGradient id="paint0_linear_2707_52479" x1="11.6221" y1="7.51804"
												x2="41.6358" y2="17.2688" gradientUnits="userSpaceOnUse">
												<stop stop-color="#637CFF" />
												<stop offset="1" stop-color="#7D56FF" />
											</linearGradient>
											<clipPath id="clip0_2707_52479">
												<rect width="41.6694" height="41.6694" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</span>
						</div>

						<div class="scheme-trading__item" data-aos="flip-up">
							<span>Withdrawals and Deposits</span>
							<span class="icon">
								<svg width="36" height="36" viewBox="0 0 38 38" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_2743_55942)">
										<path
											d="M0.517989 19.0492C0.109504 19.1996 -0.101047 19.6524 0.047756 20.0624L0.54493 21.4304L4.33047 17.6448L0.517989 19.0492Z"
											fill="url(#paint0_linear_2743_55942)" />
										<path
											d="M4.10156 31.2082L6.38148 37.4779C6.45273 37.6759 6.60153 37.8374 6.79153 37.9244C6.89758 37.9735 7.01158 37.9989 7.12557 37.9989C7.21901 37.9989 7.31082 37.9831 7.39951 37.9498L9.91536 37.022L4.10156 31.2082Z"
											fill="url(#paint1_linear_2743_55942)" />
										<path
											d="M37.9527 25.8552L35.3435 18.6814L29.0816 24.9432L32.1848 23.8001C32.5918 23.6449 33.0509 23.8571 33.2013 24.2688C33.3533 24.6788 33.1427 25.1348 32.7326 25.2852L28.7903 26.7387C28.7 26.7719 28.6082 26.7877 28.5163 26.7877C28.1949 26.7877 27.8909 26.5898 27.7738 26.27C27.7722 26.2652 27.7738 26.2605 27.7722 26.2558L21.1367 32.8913L37.4825 26.8685C37.8925 26.7181 38.1031 26.2652 37.9527 25.8552Z"
											fill="url(#paint2_linear_2743_55942)" />
										<path
											d="M37.7664 12.8983L25.1001 0.232012C24.7914 -0.076727 24.2895 -0.076727 23.9807 0.232012L0.231554 23.9812C-0.0771848 24.2899 -0.0771848 24.7918 0.231554 25.1006L12.8978 37.7668C13.0514 37.922 13.254 37.9996 13.4567 37.9996C13.6594 37.9996 13.862 37.922 14.0172 37.7684L37.7664 14.0192C38.0751 13.7089 38.0751 13.2086 37.7664 12.8983ZM9.26737 21.9356L6.10079 25.1021C5.94561 25.2557 5.743 25.3333 5.54031 25.3333C5.33763 25.3333 5.13502 25.2558 4.97983 25.1021C4.67109 24.7934 4.67109 24.2915 4.97983 23.9827L8.14641 20.8162C8.45515 20.5074 8.95708 20.5074 9.26581 20.8162C9.57455 21.125 9.57611 21.6253 9.26737 21.9356ZM22.939 22.941C22.3785 23.5014 21.6169 23.7706 20.7698 23.7706C19.3702 23.7706 17.7347 23.0376 16.3667 21.668C15.3661 20.6674 14.6631 19.4704 14.3893 18.2988C14.0853 16.9926 14.3354 15.8558 15.0938 15.0959C15.8522 14.3359 16.989 14.0857 18.2967 14.3913C19.4684 14.6653 20.6653 15.3666 21.6659 16.3688C23.8652 18.5664 24.4257 21.4543 22.939 22.941ZM33.0165 14.0192L29.85 17.1858C29.6948 17.3394 29.4922 17.417 29.2895 17.417C29.0868 17.417 28.8842 17.3394 28.729 17.1858C28.4203 16.8771 28.4203 16.3751 28.729 16.0664L31.8956 12.8998C32.2043 12.5911 32.7063 12.5911 33.015 12.8998C33.3237 13.2086 33.3253 13.7089 33.0165 14.0192Z"
											fill="url(#paint3_linear_2743_55942)" />
									</g>
									<defs>
										<linearGradient id="paint0_linear_2743_55942" x1="1.20782" y1="18.3278"
											x2="4.23772" y2="19.4538" gradientUnits="userSpaceOnUse">
											<stop stop-color="#637CFF" />
											<stop offset="1" stop-color="#7D56FF" />
										</linearGradient>
										<linearGradient id="paint1_linear_2743_55942" x1="5.72309" y1="32.4333"
											x2="10.0202" y2="33.6285" gradientUnits="userSpaceOnUse">
											<stop stop-color="#637CFF" />
											<stop offset="1" stop-color="#7D56FF" />
										</linearGradient>
										<linearGradient id="paint2_linear_2743_55942" x1="25.8404" y1="21.2452"
											x2="37.5317" y2="25.7529" gradientUnits="userSpaceOnUse">
											<stop stop-color="#637CFF" />
											<stop offset="1" stop-color="#7D56FF" />
										</linearGradient>
										<linearGradient id="paint3_linear_2743_55942" x1="10.598" y1="6.8563"
											x2="37.9674" y2="15.7477" gradientUnits="userSpaceOnUse">
											<stop stop-color="#637CFF" />
											<stop offset="1" stop-color="#7D56FF" />
										</linearGradient>
										<clipPath id="clip0_2743_55942">
											<rect width="38" height="38" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</span>
						</div>

						<div class="scheme-trading__item" data-aos="flip-up" data-aos-delay="200">
							<span>No Inactivity Fees</span>
							<span class="icon">
								<svg width="36" height="36" viewBox="0 0 42 42" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_2707_52473)">
										<path
											d="M36.8854 27.3161C36.8854 25.9803 38.916 25.9803 38.916 27.3161V36.4796C38.916 37.0407 38.4613 37.4949 37.9007 37.4949H35.6801V40.1068C35.6801 40.6674 35.2253 41.1222 34.6647 41.1222H7.00129C6.44072 41.1222 5.98596 40.6674 5.98596 40.1068V37.4949H3.76533C3.20476 37.4949 2.75 37.0407 2.75 36.4796V27.3161C2.75 25.9803 4.78066 25.9803 4.78066 27.3161V32.0703H7.93837V24.5516C7.93837 23.991 8.39313 23.5362 8.9537 23.5362H12.0568C12.6174 23.5362 13.0721 23.991 13.0721 24.5516V32.0703H14.8232V19.8002C14.8232 19.2392 15.278 18.7849 15.8386 18.7849H18.9421C19.5027 18.7849 19.9575 19.2392 19.9575 19.8002V32.0703H21.7086V24.5516C21.7086 23.991 22.1633 23.5362 22.7239 23.5362H25.827C26.3876 23.5362 26.8423 23.991 26.8423 24.5516V32.0703H28.5939V14.9515C28.5939 14.3909 29.0487 13.9361 29.6092 13.9361H32.7123C33.2729 13.9361 33.7277 14.3909 33.7277 14.9515V32.0703H36.8854V27.3161V27.3161ZM33.6494 37.4949H8.01662V39.091H33.6494V37.4949ZM8.02007 20.4214C6.68434 20.4214 6.68434 18.3902 8.02007 18.3902H10.4415L11.4957 14.4549C11.6173 14.0016 12.0273 13.7024 12.4756 13.7024L20.8168 13.7014C21.2976 13.7014 21.7002 14.036 21.8055 14.4844L23.0596 18.3902H24.1084L24.698 10.3015C24.7359 9.76703 25.1813 9.35854 25.7094 9.35903L32.6725 9.35755C34.0082 9.35755 34.0082 11.3882 32.6725 11.3882H26.6523L26.0662 19.4267C26.0549 19.9779 25.6045 20.4214 25.0508 20.4214L22.3223 20.4184C21.8941 20.4184 21.496 20.1448 21.3582 19.7151L20.0795 15.732H13.2532L12.2128 19.6152C12.1163 20.0754 11.7078 20.4214 11.2191 20.4214H8.02007V20.4214ZM7.65439 1.5494C7.65439 0.213676 9.68505 0.213676 9.68505 1.5494V1.9136H11.4534C12.7886 1.9136 12.7886 3.94426 11.4534 3.94426H9.68505V6.10092H10.0734C11.7856 6.10092 13.1824 7.49767 13.1824 9.20941C13.1824 10.9192 11.7822 12.3184 10.0734 12.3184H9.68505V12.6831C9.68505 14.0183 7.65439 14.0183 7.65439 12.6831V12.3184H5.88655C4.55082 12.3184 4.55082 10.2877 5.88655 10.2877H7.65439V8.13158H7.26608C5.55729 8.13158 4.15709 6.73187 4.15709 5.02259C4.15709 3.3138 5.5568 1.9136 7.26608 1.9136H7.65439V1.5494V1.5494ZM9.68505 8.13158V10.2877H10.0734C10.6679 10.2877 11.1517 9.80345 11.1517 9.20941C11.1517 8.61882 10.6645 8.13158 10.0734 8.13158H9.68505ZM7.65439 6.10092V3.94426H7.26608C6.67253 3.94426 6.18824 4.43003 6.18824 5.02259C6.18824 5.61614 6.67204 6.10092 7.26608 6.10092H7.65439ZM30.6246 32.0703H31.697V15.9668H30.6246V32.0703ZM23.7392 32.0703H24.8117V25.5674H23.7392V32.0703ZM16.8544 32.0703H17.9268V20.8156H16.8544V32.0703ZM9.96903 32.0703H11.0415V25.5674H9.96903V32.0703ZM4.78066 34.101V35.4643C15.4822 35.4643 26.1838 35.4643 36.8854 35.4643V34.101C26.1838 34.101 15.4822 34.101 4.78066 34.101V34.101Z"
											fill="url(#paint0_linear_2707_52473)" />
									</g>
									<defs>
										<linearGradient id="paint0_linear_2707_52473" x1="12.8371" y1="7.86812"
											x2="39.4081" y2="15.5625" gradientUnits="userSpaceOnUse">
											<stop stop-color="#637CFF" />
											<stop offset="1" stop-color="#7D56FF" />
										</linearGradient>
										<clipPath id="clip0_2707_52473">
											<rect width="41.6694" height="41.6694" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</span>
						</div>				
						
						<div class="scheme-trading__item" data-aos="flip-up" data-aos-delay="600">
							<span>No Markup</span>
							<span class="icon">
								<svg width="36" height="36" viewBox="0 0 38 38" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M19 0C8.50682 0 0 8.50682 0 19C0 29.4932 8.50682 38 19 38C29.4932 38 38 29.4932 38 19C38 8.50682 29.4932 0 19 0ZM27.2356 15.7873C27.3873 15.6139 27.5027 15.412 27.5752 15.1934C27.6477 14.9748 27.6757 14.7439 27.6576 14.5142C27.6395 14.2846 27.5756 14.061 27.4698 13.8564C27.364 13.6518 27.2183 13.4705 27.0414 13.323C26.8645 13.1756 26.6598 13.065 26.4395 12.9978C26.2192 12.9306 25.9877 12.9082 25.7586 12.9318C25.5295 12.9554 25.3074 13.0246 25.1055 13.1353C24.9035 13.246 24.7257 13.3959 24.5825 13.5764L17.1553 22.4874L13.3121 18.6425C12.9863 18.3278 12.55 18.1537 12.0971 18.1577C11.6442 18.1616 11.211 18.3432 10.8908 18.6635C10.5705 18.9837 10.3889 19.417 10.3849 19.8699C10.381 20.3227 10.5551 20.7591 10.8697 21.0848L16.0515 26.2666C16.2213 26.4363 16.4245 26.5686 16.6482 26.6554C16.8719 26.7421 17.1112 26.7813 17.3509 26.7704C17.5906 26.7595 17.8254 26.6988 18.0403 26.5921C18.2553 26.4855 18.4456 26.3352 18.5993 26.1509L27.2356 15.7873Z"
										fill="url(#paint0_linear_2707_52508)" />
									<defs>
										<linearGradient id="paint0_linear_2707_52508" x1="10.5986" y1="6.856"
											x2="37.9693" y2="15.7481" gradientUnits="userSpaceOnUse">
											<stop stop-color="#637CFF" />
											<stop offset="1" stop-color="#7D56FF" />
										</linearGradient>
									</defs>
								</svg>
							</span>
						</div>

						<!-- <span class="icon">
								<svg width="36" height="36" viewBox="0 0 42 42" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M22.1174 22.1174H41.6694C41.6694 32.9235 32.9235 41.6694 22.1174 41.6694V22.1174ZM0 19.552C0 8.74591 8.74591 0 19.552 0C30.358 0 39.1039 8.74591 39.1039 19.552H19.552V39.1039C8.78478 39.1039 0 30.358 0 19.552Z"
										fill="url(#paint0_linear_2707_52477)" />
									<defs>
										<linearGradient id="paint0_linear_2707_52477" x1="11.6221" y1="7.51804"
											x2="41.6358" y2="17.2688" gradientUnits="userSpaceOnUse">
											<stop stop-color="#637CFF" />
											<stop offset="1" stop-color="#7D56FF" />
										</linearGradient>
									</defs>
								</svg>
							</span> -->

					</div>


				</div>

			</div>
		</div>

	</div>
</section>