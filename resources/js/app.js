import './bootstrap';
import './nav.js';
import './loader.js';
import './faq.js';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";
import {ScrollSmoother} from "gsap/ScrollSmoother";


gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

ScrollSmoother.create({
    smooth: 2,
    effects: true,
    smoothTouch: 0.1,
});

const footer = document.querySelector('footer')
if (window.innerWidth > 1024) {
    ScrollTrigger.create({
        trigger: footer,
        pin: true,
        start: "bottom bottom",
        end: "+=100%"
    });
}

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
