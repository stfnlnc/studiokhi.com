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

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
