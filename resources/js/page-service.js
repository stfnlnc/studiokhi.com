import {gsap} from "gsap"
import {ScrollTrigger} from "gsap/ScrollTrigger"

gsap.registerPlugin(ScrollTrigger)

if (window.innerWidth > 768) {
    const hero = document.getElementById("hero")

    gsap.to(hero, {
        filter: "blur(5px)",
        duration: 1,
        scrollTrigger: {
            trigger: hero,
            start: "bottom 75%",
            scrub: 1,
        }
    })

    ScrollTrigger.create({
        trigger: hero,
        pin: true,
        pinSpacing: false,
        start: "bottom bottom"
    })
}

const pinTitle = document.getElementById("pin-title")

ScrollTrigger.create({
    trigger: pinTitle,
    pin: true,
    pinSpacing: false,
    start: "top 15%",
    end: "bottom 25%"
})

