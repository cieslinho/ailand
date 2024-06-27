const menu = document.querySelector('.nav__navbar')
const navBottom = document.querySelector('.nav__bottom')
const navTop = document.querySelector('.nav__top-visible')
const btnOpen = document.querySelector('.nav__open')
const closeBtn = document.querySelector('.nav__close')
const subItem = document.querySelector('#menu-item-29')
const subMenu = document.querySelector('.sub-menu')
const tabs = document.querySelectorAll('.tab')
const tabsBtn = document.querySelectorAll('.tabs-btn')
const subTabs = document.querySelectorAll('.sub-tab')

// window.onscroll = function () {
// 	// pageYOffset or scrollY
// 	if (window.pageYOffset > 0) {
// 		navBottom.classList.add('hidden')
// 	} else {
// 		navBottom.classList.remove('hidden')
// 	}
// }

// let prevScrollPos = window.pageYOffset

// window.addEventListener('scroll', function () {
// 	// current scroll position
// 	const currentScrollPos = window.pageYOffset

// 	if (prevScrollPos > currentScrollPos) {
// 		// user has scrolled up
// 		navBottom.classList.remove('hidden')
// 	} else {
// 		// user has scrolled down
// 		navBottom.classList.add('hidden')
// 	}

// 	// update previous scroll position
// 	prevScrollPos = currentScrollPos
// })
let prevScrollUp = window.pageYOffset

window.addEventListener('scroll', function () {
	// current scroll position
	const currentScrollUp = window.pageYOffset

	if (prevScrollUp > currentScrollUp) {
		// user has scrolled up
		navTop.classList.remove('active')
	} else {
		// user has scrolled down
		navTop.classList.add('active')
	}

	// update previous scroll position
	prevScrollUp = currentScrollUp
})

const openNav = () => {
	menu.classList.add('active')
	navBottom.classList.add('hidden')
}

const closeNav = () => {
	menu.classList.remove('active')
	navBottom.classList.remove('hidden')
}

btnOpen.addEventListener('click', openNav)
closeBtn.addEventListener('click', closeNav)
subItem.firstChild.addEventListener('click', () => {
	event.preventDefault()
	subMenu.classList.toggle('active')
})

const swiper = new Swiper('.mySwiper', {
	slidesPerView: 3,
	spaceBetween: 50,
	centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 2500,
		// disableOnInteraction: true,
	},
	navigation: {
		nextEl: '.partners__next',
		prevEl: '.partners__prev',
	},
	breakpoints: {
		992: {
			slidesPerView: 7,
			spaceBetween: 50,
		},
	},
})
var prosSwiper = new Swiper('.pros__swiper', {
	pagination: {
		el: '.pros__pagination',
	},
	slidesPerView: 1,
	spaceBetween: 20,
	// centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 2500,
		// disableOnInteraction: true,
	},
	breakpoints: {
		568: {
			slidesPerView: 2,
			spaceBetween: 20,
			loop: true,
			// centeredSlides: true,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20,
			loop: true,
			// centeredSlides: true,
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 20,
			loop: false,
			centeredSlides: false,
		},
	},
})
var supportSwiper = new Swiper('.support__swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	// centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 2500,
		// disableOnInteraction: true,
	},
	breakpoints: {
		568: {
			slidesPerView: 2,
			spaceBetween: 20,
			loop: true,
			// centeredSlides: true,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20,
			loop: true,
			// centeredSlides: true,
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 20,
			loop: false,
			centeredSlides: false,
		},
	},
})
var supportSwiper = new Swiper('.solutions__swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	// centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 2500,
		// disableOnInteraction: true,
	},
	breakpoints: {
		568: {
			slidesPerView: 2,
			spaceBetween: 20,
			loop: true,
			// centeredSlides: true,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20,
			loop: true,
			// centeredSlides: true,
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 20,
			loop: false,
			centeredSlides: false,
		},
	},
})

var supportSwiper = new Swiper('.example__swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	// centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 2500,
		// disableOnInteraction: true,
	},
	breakpoints: {
		568: {
			slidesPerView: 2,
			spaceBetween: 20,
			loop: true,
			// centeredSlides: true,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20,
			loop: true,
			// centeredSlides: true,
		},
		992: {
			slidesPerView: 3,
			spaceBetween: 20,
			loop: false,
			centeredSlides: false,
		},
	},
})

const reviewsSwiper = new Swiper('.reviews__swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	// centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 2500,
		// disableOnInteraction: true,
	},
	breakpoints: {
		568: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 4,
			spaceBetween: 20,
		},
	},
})

var materialsSwiper = new Swiper('.materials__swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	// centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 2500,
		// disableOnInteraction: true,
	},
	navigation: {
		nextEl: '.partners__next',
		prevEl: '.partners__prev',
	},
	breakpoints: {
		568: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
	},
})
var featuredSwiper = new Swiper('.featured__swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	// centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 2500,
		// disableOnInteraction: true,
	},
	breakpoints: {
		568: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
	},
})
var pcvSwiper = new Swiper('.pcv__swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	// centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 2500,
		// disableOnInteraction: true,
	},
	breakpoints: {
		568: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
	},
})

tabsBtn.forEach(btn => {
	btn.addEventListener('click', () => {
		btn.nextElementSibling.classList.toggle('active')
		btn.classList.toggle('active')
	})
})

subTabs.forEach(btn => {
	btn.addEventListener('click', () => {
		btn.nextElementSibling.classList.toggle('active')
		btn.classList.toggle('active')

		if (btn.classList.contains('active')) {
			btn.firstElementChild.innerHTML = `
				<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.86047 16C1.34884 16 0.910853 15.8042 0.546512 15.4125C0.182171 15.0208 0 14.55 0 14V2C0 1.45 0.182171 0.979167 0.546512 0.5875C0.910853 0.195833 1.34884 0 1.86047 0H7.44186L9.30233 2H16.7442C17.2558 2 17.6938 2.19583 18.0581 2.5875C18.4225 2.97917 18.6047 3.45 18.6047 4H1.86047V14L4.09302 6H20L17.6047 14.575C17.4806 15.0083 17.2519 15.3542 16.9186 15.6125C16.5853 15.8708 16.2171 16 15.814 16H1.86047Z" fill="black"/>
				</svg>
			`
		} else {
			btn.firstElementChild.innerHTML = `
				<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H8L10 2H18C18.55 2 19.0208 2.19583 19.4125 2.5875C19.8042 2.97917 20 3.45 20 4V14C20 14.55 19.8042 15.0208 19.4125 15.4125C19.0208 15.8042 18.55 16 18 16H2Z" fill="black"/>
</svg>

			`
		}
	})
})
