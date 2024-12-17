import {gsap} from "gsap"
import {ScrollTrigger} from "gsap/ScrollTrigger"
import {Draggable} from "gsap/Draggable";
import InertiaPlugin from "gsap/InertiaPlugin";

gsap.registerPlugin(ScrollTrigger)

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

const services = document.querySelectorAll('.service')

if (window.innerWidth > 768) {
    services.forEach(service => {
        gsap.to(service, {
            filter: "blur(5px)",
            duration: 1,
            scrollTrigger: {
                trigger: service,
                start: "bottom 75%",
                scrub: 1,
            }
        })

        ScrollTrigger.create({
            trigger: service,
            pin: true,
            pinSpacing: false,
            start: "bottom bottom"
        })
    })
}

const pinTitle = document.getElementById("pin-title")

ScrollTrigger.create({
    trigger: pinTitle,
    pin: true,
    pinSpacing: false,
    start: "top 15%",
    end: "bottom 30%"
})

gsap.registerPlugin(Draggable, InertiaPlugin);

const container = document.getElementById('container')
const wrapper = document.getElementById('wrapper')

if (wrapper.clientWidth > window.innerWidth) {
    Draggable.create(wrapper, {
        type: "x",
        bounds: container
    });
} else {
    container.style.justifyContent = "center"
}

