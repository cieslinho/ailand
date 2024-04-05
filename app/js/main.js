const menu = document.querySelector('.nav__navbar')
const navBottom = document.querySelector('.nav__bottom')
const btnOpen = document.querySelector('.nav__open')
const closeBtn = document.querySelector('.nav__close')
const subItem = document.querySelector('#menu-item-29')
const subMenu = document.querySelector('.sub-menu')

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
	breakpoints: {
		992: {
			slidesPerView: 11,
			spaceBetween: 50,
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
