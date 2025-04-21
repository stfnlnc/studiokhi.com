import {gsap} from "gsap";

const itemsGlobal = document.querySelectorAll('.show-item');
const filtersGlobal = document.querySelectorAll('.filter');

const handleFilter = (name) => {
    const filterShow = document.querySelector('.' + name + '-show');
    const filterBtn = document.getElementById(name);

    filterBtn.addEventListener('click', () => {
        itemsGlobal.forEach((item) => {
            gsap.to(item, {
                duration: 0.6,
                ease: 'power4.inOut',
                clipPath: 'inset(0% 0% 100% 0%)'
            })
        })
        filtersGlobal.forEach((item) => {
            item.classList.remove('bg-sk-dark');
            item.classList.remove('text-sk-light');
            item.classList.add('text-sk-dark');
            item.classList.add('bg-sk-transparent');
        })
        filterBtn.classList.remove('text-sk-dark');
        filterBtn.classList.remove('bg-sk-transparent');
        filterBtn.classList.add('bg-sk-dark');
        filterBtn.classList.add('text-sk-light');
        gsap.fromTo(filterShow, {
            clipPath: 'inset(0% 0% 100% 0%)'
        }, {
            delay: 0.6,
            duration: 0.8,
            ease: 'power4.inOut',
            clipPath: 'inset(0% 0% 0% 0%)'
        })
    })
}

filtersGlobal.forEach(filterGlobal => {
    handleFilter(filterGlobal.id)
})


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


