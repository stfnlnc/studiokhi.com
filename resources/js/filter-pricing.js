import {gsap} from "gsap";

const items = document.querySelectorAll('.pricing-web');
const filters = document.querySelectorAll('.pricing-web-filter');

filters.forEach((filter, key) => {
    filter.addEventListener('click', () => {
        filters.forEach(filter => {
            filter.classList.add('text-sk-light-grey')
            filter.classList.remove('text-sk-dark')
        })
        filter.classList.remove('text-sk-light-grey')
        filter.classList.add('text-sk-dark')
        items.forEach(item => {
            gsap.to(item, {
                duration: 0.6,
                ease: 'power4.inOut',
                clipPath: 'inset(0% 0% 100% 0%)'
            })
        })
        gsap.fromTo(items[key], {
            clipPath: 'inset(0% 0% 100% 0%)'
        }, {
            delay: 0.6,
            duration: 0.8,
            ease: 'power4.inOut',
            clipPath: 'inset(0% 0% 0% 0%)'
        })
    })
})


