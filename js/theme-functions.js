
'use strict';


/* check if elemeni is in viewport*/
$.fn.isOnScreen = function(){
    var win = $(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};


//get parameters from Url
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

// create Cookie 
function setCookie(cName, cValue, expDays) {
	let date = new Date()
	date.setTime(date.getTime() + expDays * 24 * 60 * 60 * 1000)
	const expires = 'expires=' + date.toUTCString()
	document.cookie = cName + '=' + cValue + '; path=/'
}

// get Cookie 
function getCookie(cName) {
	const name = cName + '='
	const cDecoded = decodeURIComponent(document.cookie) //to be careful
	const cArr = cDecoded.split('; ')
	let res
	cArr.forEach((val) => {
		if (val.indexOf(name) === 0) res = val.substring(name.length)
	})
	return res
}

// reload TradingView widget's iFrame
function reloadIframe(from, to) {
	let widgets = document.querySelectorAll('.tradingview-widget-container iframe')

	for (let i = 0; i < widgets.length; i++) {
		
		let tmp = widgets[i].src
		widgets[i].removeAttribute('src')
		setTimeout(() => {
			if (tmp.indexOf(`colorTheme%22%3A%22${from}`) > -1) {
				widgets[i].setAttribute('src', tmp.split(`colorTheme%22%3A%22${from}`).join(`colorTheme%22%3A%22${to}`))
			} else if (tmp.indexOf(`colorTheme=${from}`) > -1) {
				widgets[i].setAttribute('src', tmp.split(`colorTheme=${from}`).join(`colorTheme=${to}`))
			}
		}, 50)
		
	}
}


//footer message
let footerPadingTimeOut;
function footerPading(){
	let footerMsgHeight = $(".footer-messege").innerHeight();
	$( "footer.footer" ).css("paddingBottom", footerMsgHeight);
}
function footerPadingFix(){
	footerPadingTimeOut = setTimeout(footerPading, 50);
}

// check if mobile browser
function isMobile(){
	var hasTouchScreen = false;
	if ("maxTouchPoints" in navigator) {
		hasTouchScreen = navigator.maxTouchPoints > 0;
	} else if ("msMaxTouchPoints" in navigator) {
		hasTouchScreen = navigator.msMaxTouchPoints > 0;
	} else {
		var mQ = window.matchMedia && matchMedia("(pointer:coarse)");
		if (mQ && mQ.media === "(pointer:coarse)") {
			hasTouchScreen = !!mQ.matches;
		} else if ('orientation' in window) {
			hasTouchScreen = true; // deprecated, but good fallback
		} else {
			// Only as a last resort, fall back to user agent sniffing
			var UA = navigator.userAgent;
			hasTouchScreen = (
				/\b(BlackBerry|webOS|iPhone|IEMobile)\b/i.test(UA) ||
				/\b(Android|Windows Phone|iPad|iPod)\b/i.test(UA)
			);
		}
	}
	if (hasTouchScreen) {
		return true;
	 } else {
		return false;
	 }
		
}


//add theme and mobile params to url
function addLinkParams( url ){	
	const theme = getCookie('theme').replace('theme-', '');	
	let mobile = 0;
	if (isMobile() ) {
		mobile = 1;
	} 
	const urlWithParams = url + `?theme=${theme}&mobile=${mobile}`;

	return urlWithParams;
}


//all-instrumetns-widget iframe
function loadInstrumentsIframe(resultSymbols, category, largeChartUrl, toShow, offset=0){	
	let counter = 0;
	let colorTheme;
	if (getCookie('theme') === undefined) {
		if (body.classList.contains('theme-light')) {			
			colorTheme = 'light';
		} else {			
			colorTheme = 'dark';
		}		
	} else {
		colorTheme = getCookie('theme').replace('theme-','');		
	}
	
  let min = offset*toShow;
  let max = ( (offset+1) * toShow );
	let urlSymbols = "";
	for (let i = 0; i < resultSymbols.length; i++) {
		if ( i >= min && i < max ) {
			urlSymbols+= `{"name":"${resultSymbols[i]}"},`;	
			counter+=1;
		}				
	}
	urlSymbols = urlSymbols.slice(0, -1);	

	let urlStart  = `https://s.tradingview.com/embed-widget/market-quotes/?locale=en#{"width":"100%","height":"100%","symbolsGroups":[{"name":"${category}","originalName":"${category}","symbols":[`;
	let urlEnd = `]}],"showSymbolLogo":true,"colorTheme":"${colorTheme}","isTransparent":true,"largeChartUrl":"${largeChartUrl}","utm_source":"localhost","utm_medium":"widget","utm_campaign":"market-quotes"}`;
	let finalUrl = encodeURI(urlStart) + encodeURIComponent(urlSymbols) + encodeURIComponent(urlEnd);

	const instrumentsIframe = document.getElementById("instruments-frame");
	instrumentsIframe.removeAttribute('src');
	setTimeout(() => {
		instrumentsIframe.setAttribute('src',finalUrl);
	}, 50);
	let frameMinHeight = (Math.min(toShow, resultSymbols.length, counter) * 35) + 100;	
	instrumentsIframe.style.minHeight = frameMinHeight + "px";

}



//all-instrumetns-widget pagination
function loadInstrumentsPagination(resultSymbols, category, toShow, offset=0){			
	let total = resultSymbols.length;
	let pages = Math.ceil( total/toShow );
	const pagination = document.querySelector(".pagination");

	if (pages > 1 ) {
		let linksHtml = "";
		let linksArr = [];
		let current = "";

		//collect all pagination page links
		for (let p = 0; p < pages; p++) {				
			if (p === offset) {
				current = " current";
			} else {
				current = "";
			}
			linksArr.push(`<a class="page-numbers ${current}" href="#${p}" onclick="get_instruments_symbols('${category}', ${p})">${p+1}</a>`);
		}

		//with devider
		if (linksArr.length > 4) {
			let start, end;
			const devider = `<a class="page-numbers devider"> ... </a>`;
			const firstLink = `<a class="page-numbers" href="#0" onclick="get_instruments_symbols('${category}', 0)">1</a>`;
			const lastLink = `<a class="page-numbers" href="#${linksArr.length-1}" onclick="get_instruments_symbols('${category}', ${linksArr.length-1})">${linksArr.length}</a>`;

			//pages to show in paggination
			if ( offset === 0 ) {
				start = offset;
				end = offset+2;				
			} else if ( offset === linksArr.length-1) {
				start = offset-2;
				end = offset;
			} else {
				start = offset-1;
				end = offset+1;
			}
						

			//pagination in the beggining
			if (offset+3 < linksArr.length ) {
				for (let i = start; i < end+1; i++) {
					linksHtml+= linksArr[i];
				} 
				linksHtml+= devider;
				linksHtml+= lastLink;
			}
			//pagination in the end
			else {
				linksHtml+= firstLink;
				linksHtml+= devider;
				for (let i = start; i < end+1; i++) {
					linksHtml+= linksArr[i];
				}
			}

		} 
		else {			
			for (let i = 0; i < linksArr.length; i++) {							
				if (i === offset) {	current = " current"; } else {	current = ""; }
				linksHtml+= `<a class="page-numbers ${current}" href="#${i}" onclick="get_instruments_symbols('${category}', ${i})">${i+1}</a>`
			}
		}	

		pagination.innerHTML = "";
		pagination.innerHTML = linksHtml;
		
	} else {
		pagination.innerHTML = "";
	}
}


//homepage instrumetns widget iframe
function loadHomepageInstrumentsIframe(resultSymbols, category, largeChartUrl) {
	let colorTheme;
	if (getCookie('theme') === undefined) {
		if (body.classList.contains('theme-light')) {			
			colorTheme = 'light';
		} else {			
			colorTheme = 'dark';
		}		
	} else {
		colorTheme = getCookie('theme').replace('theme-','');		
	}

	let urlStart  = `https://s.tradingview.com/embed-widget/market-quotes/?locale=en#{"width":"100%","height":"100%","symbolsGroups":[{"name":"${category}","originalName":"${category}","symbols":[`;
	let urlEnd = `]}],"showSymbolLogo":true,"colorTheme":"${colorTheme}","isTransparent":true,"largeChartUrl":"${largeChartUrl}","utm_source":"localhost","utm_medium":"widget","utm_campaign":"market-quotes"}`;
	let finalUrl = encodeURI(urlStart) + encodeURIComponent(resultSymbols) + encodeURIComponent(urlEnd);
	
	const instrumentsIframe = document.getElementById("homepage-instruments-deferred-frame");
	instrumentsIframe.removeAttribute('src');
	setTimeout(() => {
		instrumentsIframe.setAttribute('src',finalUrl);
	}, 50);
}




//homepage tape-ticker widget iframe
function loadHomepageTapeIframe(resultSymbols, largeChartUrl, showSymbolLogo) {

	let colorTheme;
	if (getCookie('theme') === undefined) {
		if (body.classList.contains('theme-light')) {			
			colorTheme = 'light';
		} else {			
			colorTheme = 'dark';
		}		
	} else {
		colorTheme = getCookie('theme').replace('theme-','');		
	}

	let urlStart  = `https://s.tradingview.com/embed-widget/ticker-tape/?locale=en#{"symbols":[`;
	let urlEnd = `],"showSymbolLogo":${showSymbolLogo},"colorTheme":"${colorTheme}","isTransparent":true,"displayMode":"regular","largeChartUrl":"${largeChartUrl}","width":"100%","height":44,"utm_source":"localhost","utm_medium":"widget","utm_campaign":"ticker-tape"}`;
	let finalUrl = encodeURI(urlStart) + encodeURIComponent(resultSymbols) + encodeURIComponent(urlEnd);

	const tapeIframe = document.getElementById("homepage-tape-deferred-frame");
	tapeIframe.removeAttribute('src');
	setTimeout(() => {
		tapeIframe.setAttribute('src',finalUrl);
	}, 50);
}