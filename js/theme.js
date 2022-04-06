'use strict'

$(document).ready(function () {

	// theme color cookies and switcher
	const body = document.querySelector('body')
	const toggler = document.getElementById('theme-toggler-checkbox')
	const navbar = document.querySelector('nav.navbar')


	function themeSwitch() {
		// console.log(`getCookie = ${getCookie('theme')}`);
		if (getCookie('theme') == 'theme-dark') {
			body.classList.remove('theme-dark')
			body.classList.add('theme-light')
			toggler.classList.remove('btn-toggle-dark')
			toggler.classList.add('btn-toggle-light')
			navbar.classList.remove('navbar-dark')
			navbar.classList.add('navbar-light')
			reloadIframe('dark', 'light')
			setCookie('theme', 'theme-light', 1)
		} else if (getCookie('theme') == 'theme-light') {
			body.classList.remove('theme-light')
			body.classList.add('theme-dark')
			toggler.classList.remove('btn-toggle-light')
			toggler.classList.add('btn-toggle-dark')
			navbar.classList.remove('navbar-light')
			navbar.classList.add('navbar-dark')
			reloadIframe('light', 'dark')
			setCookie('theme', 'theme-dark', 1)
		}
	}


	const urlParams = new URLSearchParams(window.location.search);
	

	if ( urlParams.has('theme') ) {
		let paramTheme = `theme-${urlParams.get('theme')}`;
		let cookieTheme = getCookie('theme');
		if ( cookieTheme !== paramTheme && (cookieTheme == 'theme-dark' || cookieTheme == 'theme-light') ) {			
			themeSwitch();
		} else if (cookieTheme !== paramTheme) {
			setCookie('theme', paramTheme, 1)
		}	
	} else if (getCookie('theme') === undefined) {
		if (body.classList.contains('theme-light')) {			
			setCookie('theme', 'theme-light', 1)			
		} else if (body.classList.contains('theme-dark')) {			
			setCookie('theme', 'theme-dark', 1)
		}
	}



	$('#theme-toggler-checkbox').click(function () {
		themeSwitch();
	})


	//footer message
	footerPadingFix();
	$( ".footer-messege__closed" ).click(function() {
		$(".footer-messege__cookie").fadeOut(1000, function(){
			footerPadingFix();
		});	
  		setCookie("footerMsg", "closed", 1);
	});
	$( ".footer-messege__closed-btn" ).click(function() {
		$(".footer-messege__cookie").fadeOut(1000, function(){
			footerPadingFix();
		});		
  		setCookie("footerMsg", "closed", 1);
	});

	$( ".footer-messege__expand-btn" ).click(function(e) {
		e.preventDefault();
		$(".footer-messege__text").toggleClass('expanded');
		footerPadingFix();
	});
	/*
	$(window).on('scroll', function(){
		if ($('footer.footer').isOnScreen()){
			$(".footer-messege").removeClass("sticky");
		} else {
			$(".footer-messege").addClass("sticky");
		}
	})
	*/

	
	//navbar search
	$( ".nav-search__open" ).click(function() {

		const searchWrap = $(".nav-search-wrapper");
		const searchInput = $(".nav-search__input");
		let elementsWidth = $(".navbar-brand").width() + $(".navbar-utility-menu").width() + searchWrap.width();
		let inputWidth = $(".navbar .container").width() - elementsWidth - 30;

		searchWrap.toggleClass("open");

		if (searchWrap.hasClass("open")){
			searchInput.focus();
			$(".nav-search").css('width', inputWidth);
		} else {
			$(".nav-search").css('width', 0);
		}
	});	


	
	
	// init AOS 
	window.setTimeout(function () {
		AOS.init({
			duration: 1000,
		})
	}, 50)

	
	// Country Restriction
	//==================================
	// const restrictedCountries = ['United States', 'Canada', 'United Kingdom', 'Austria', 'Belgium', 'Bulgaria', 'Croatia', 'Republic of Cyprus', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Germany', 'Greece', 'Hungary', 'Ireland', 'Italy', 'Latvia', 'Lithuania', 'Luxembourg', 'Malta', 'Netherlands', 'Poland', 'Portugal', 'Romania', 'Slovakia', 'Slovenia', 'Spain', 'Sweden']
	// const muCountries = ['Chile'];
	// const cyCountries = ['Austria','Bulgaria','Croatia','Cyprus','Czech Republic', 'Czechia','Denmark','Estonia','Finland','Germany','Greece','Hungary','Ireland','Italy','Latvia','Lithuania','Luxembourg','Netherlands','Poland','Portugal','Romania','Slovakia','Slovenia','Spain','Sweden','Switzerland','Norway'];

	async function getLocation() {
		const url = `https://get.geojs.io/v1/ip/country.json`
		try {
			const res = await fetch(url)
			return await res.json()
		} catch (error) {
			console.log(error)
		}
	}

	async function checkCountry(){
		const currentCountry = await getLocation()
		console.log(currentCountry.name)
		restrictedCountries.forEach(country => {			
			if(country === currentCountry.name){				
				$('#country-rest-modal').modal('show');

				$('#country-rest-modal').on('hidden.bs.modal', function (e) {
					setCookie('countryRestModalShown', 'shown', 10)
				})	
			}
		})

	}

	async function checkBroker(url){
		let newUrl = url;
		const currentCountry = await getLocation();	
		cyCountries.forEach(country => {
			if(country === currentCountry.name){
				newUrl = newUrl.replace('\/mu\/', '\/cy\/');				
			} 
		});

		return newUrl;		
	}
	


	if (getCookie('countryRestModalShown') !== 'shown' && getCookie('country') !== 'mu' && getCookie('country') !== 'cy') {
		checkCountry();
	}

	// temprorary
	if (getUrlParameter('notice') === 'restricted') {
		$('#country-rest-modal').modal('show');
	}
	//==================================	



	$( ".param_link").click(function(event) {
		event.preventDefault();		
		let url = $(this).attr('href');
		url = addLinkParams(url);	
		if ( $(this).hasClass('footer__link') ) {
			let urlPromise = checkBroker(url);	
			urlPromise.then(function(resultUrl){
				window.location.href = resultUrl;
			})
		} else {
			window.location.href = url;
		}		
	});
})

