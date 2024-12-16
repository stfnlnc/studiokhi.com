import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger)

const hero = document.getElementById("hero")

gsap.to(hero, {
    filter: "blur(5px)",
    duration: 1,
    scrollTrigger: {
        trigger: hero,
        start: "top top",
        scrub: 1,
    }
})

ScrollTrigger.create({
    trigger: hero,
    pin: true,
    pinSpacing: false,
    start: "top top"
})
