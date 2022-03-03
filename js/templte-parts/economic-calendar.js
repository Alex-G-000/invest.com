function getCookie(name) {
	const value = `; ${document.cookie}`;
	const parts = value.split(`; ${name}=`);
	if (parts.length === 2) return parts.pop().split(';').shift();
}

async function getAllEventDates(apiDate, apiParams = '') {
	const url = new URL(`https://calendar-api.fxstreet.com/en/api/v1/eventDates/${apiDate[0][1]}T00%3A00%3A00.000Z/${apiDate[1][1]}T23%3A59%3A00.000Z`)

	let params = '?'
	params = params + apiParams.join('&') + '&'
	params = params + 'volatilies=LOW&volatilies=MEDIUM&volatilies=HIGH'

	url.search = new URLSearchParams(params).toString()

	const token = getCookie('calendarToken')

	let myHeaders = new Headers()
	myHeaders.append('Authorization', `Bearer ${token}`)

	const reqOpt = {
		method: 'GET',
		headers: myHeaders,
	}    

	const req = new Request(url, reqOpt)
	const res = await fetch(req)
	return await res.json()
}

const urlSearchParams = new URLSearchParams(window.location.search);

if(urlSearchParams.get('dateTo')){
	document.getElementById('date-to').value = urlSearchParams.get('dateTo')
}else{
	document.getElementById('date-to').value = new Date().toISOString().split('T')[0]	
	urlSearchParams.set('dateTo', document.getElementById('date-to').value)
}

if(urlSearchParams.get('dateFrom')){
	document.getElementById('date-from').value = urlSearchParams.get('dateFrom')
}else{
	document.getElementById('date-from').value = new Date().toISOString().split('T')[0]
	urlSearchParams.set('dateFrom', document.getElementById('date-from').value)
}

const apiParams = []
const apiDate = []

for (const param of urlSearchParams) {
	if(param[0] == 'countries'){
		const countryCbs = document.querySelectorAll(".countries input[type='checkbox']");
		for(const country of countryCbs){
			if(country.getAttribute('rel') == param[1]){
				country.checked = true
			}
		}
	}

	if(param[0] == 'categories'){
		const categoryCbs = document.querySelectorAll(".categories input[type='checkbox']");
		for(const category of categoryCbs){
			if(category.getAttribute('rel') == param[1]){
				category.checked = true
			}
		}
	}
}

for (const param of urlSearchParams) {
	if(param[0] !== 'dateTo' && param[0] !== 'dateFrom'){
		apiParams.push(param.join('='))
	}else{
		apiDate.push(param)
	}	
}

async function useData() {	
    const allEventDates = await getAllEventDates(apiDate, apiParams)

	const tableBody = document.querySelector('#table-body')
	tableBody.innerHTML = ''
	console.log(allEventDates)
	if(!allEventDates.countries){
		for(const el of allEventDates){
			renderTable(el)		
		}
	}else{
		renderTable({}, true)
	}
}

useData()

let isDayChanged = false
let day

function renderTable(data, notFound = false) {
	const tableBody = document.querySelector('#table-body')
	if(document.querySelector('.loaderTr')){
		document.querySelector('.loaderTr').remove()
	}

	if(notFound){
		let tr = document.createElement('tr')
		let td = document.createElement('td')
		td.innerHTML = 'No current events for the filters or the choosen date'
		td.classList.add('text-center', 'calendar__day-title')
		td.setAttribute('colspan',6)
		td.style.color = '#764DFF'
		tr.appendChild(td)
		tableBody.appendChild(tr)
	}

	if(!notFound){

		if(!isDayChanged || day != data.dateUtc.split('T')[0]){
			day = data.dateUtc.split('T')[0]
			let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }
			let date = new Date(day)

			let tr = document.createElement('tr')
			let td = document.createElement('td')
			td.innerHTML = date.toLocaleDateString("en-US", options)
			td.classList.add('text-center', 'calendar__day-title')
			td.setAttribute('colspan',6)
			td.style.color = '#764DFF'
			tr.appendChild(td)
			tableBody.appendChild(tr)

			isDayChanged = true
		}

		let tr = document.createElement('tr')

		let tdTime = document.createElement('td')
		let tdCountry = document.createElement('td')
		let tdEvent = document.createElement('td')
		let tdActual = document.createElement('td')
		let tdForecast = document.createElement('td')
		let tdPrevious = document.createElement('td')

		
		let date = data.dateUtc.substring(0, data.dateUtc.length - 4)
		tdTime.innerHTML = date.split('T')[1]
		tdTime.setAttribute('data-th','Time')
		tr.appendChild(tdTime)

		let tdCountryImg = document.createElement('div')
		tdCountryImg.classList.add('calendar__flag')
		tdCountryImg.setAttribute('style', `background-image: url(https://flagcdn.com/w40/${data.countryCode.toLowerCase()}.png)`)
		tdCountry.appendChild(tdCountryImg)
		tdCountry.setAttribute('data-th','Country')
		tr.appendChild(tdCountry)

		tdEvent.innerHTML = data.name
		tdEvent.setAttribute('data-th','Event')
		tr.appendChild(tdEvent)

		tdActual.innerHTML = data.actual
		tdActual.setAttribute('data-th','Actual')
		tr.appendChild(tdActual)

		tdForecast.innerHTML = data.consensus
		tdForecast.setAttribute('data-th','Forecast')
		tr.appendChild(tdForecast)

		tdPrevious.innerHTML = data.previous
		tdPrevious.setAttribute('data-th','Previous')
		tr.appendChild(tdPrevious)

		tableBody.appendChild(tr)
		
	}
}

const selectFilter = () => {	
	const countryCbs = document.querySelectorAll(".countries input[type='checkbox']");
	const categoriesCbs = document.querySelectorAll(".categories input[type='checkbox']");
	const filters = {
		countries: getClassOfCheckedCheckboxes(countryCbs),
		categories: getClassOfCheckedCheckboxes(categoriesCbs)
	};
	return filters
}

function getClassOfCheckedCheckboxes(checkboxes) {
	const classes = [];
  
	if (checkboxes && checkboxes.length > 0) {
		for (let i = 0; i < checkboxes.length; i++) {
			let cb = checkboxes[i];
	
			if (cb.checked) {
			classes.push(cb.getAttribute("rel"));
			}
		}
	}
  
	return classes;
}

const updateTable = async () => {
	const filter = selectFilter()

	let url = new URL(window.location.href)

	const dateTo = document.getElementById('date-to').value
	const dateFrom = document.getElementById('date-from').value

	url.searchParams.delete('countries')
	url.searchParams.delete('categories')
	url.searchParams.delete('dateTo')
	url.searchParams.delete('dateFrom')
	
	url.searchParams.set('dateFrom', dateFrom)
	url.searchParams.set('dateTo', dateTo)

	filter.countries.forEach(el => {
		url.searchParams.append('countries', el)
	})

	filter.categories.forEach(el => {
		url.searchParams.append('categories', el)
	})

	window.location.replace(url)
}
let datePickerOpened = false
const openDatePicker = () => {
	if(!datePickerOpened){
		document.querySelector('.datepicker').style.display = 'flex'
		datePickerOpened = true
	}else{
		document.querySelector('.datepicker').style.display = 'none'
		datePickerOpened = false
	}
	
}