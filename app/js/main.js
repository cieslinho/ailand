const menu = document.querySelector('.nav__navbar')
const navBottom = document.querySelector('.nav__bottom')
const navTop = document.querySelector('.nav__top-visible')
const btnOpen = document.querySelector('.nav__open')
const closeBtn = document.querySelector('.nav__close')
const subItem = document.querySelector('#menu-item-29')
const subMenu = document.querySelector('.sub-menu')
const tabs = document.querySelectorAll('.tab')
const tabsBtn = document.querySelectorAll('.tabs-btn')

// window.onscroll = function () {
// 	// pageYOffset or scrollY
// 	if (window.pageYOffset > 0) {
// 		navBottom.classList.add('hidden')
// 	} else {
// 		navBottom.classList.remove('hidden')
// 	}
// }

let prevScrollPos = window.pageYOffset

window.addEventListener('scroll', function () {
	// current scroll position
	const currentScrollPos = window.pageYOffset

	if (prevScrollPos > currentScrollPos) {
		// user has scrolled up
		navBottom.classList.remove('hidden')
	} else {
		// user has scrolled down
		navBottom.classList.add('hidden')
	}

	// update previous scroll position
	prevScrollPos = currentScrollPos
})
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
