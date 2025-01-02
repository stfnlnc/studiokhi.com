import {gsap} from "gsap"
import {ScrollTrigger} from "gsap/ScrollTrigger"
import {Draggable} from "gsap/Draggable";
import InertiaPlugin from "gsap/InertiaPlugin";

gsap.registerPlugin(ScrollTrigger)

if (window.innerWidth > 768) {
    const hero = document.getElementById("hero")

    gsap.to(hero, {
        filter: "blur(2px)",
        duration: 1,
        scrollTrigger: {
            trigger: hero,
            start: "top top",
            scrub: 1,
            pin: true,
            pinSpacing: false,
        }
    })


    const services = document.querySelectorAll('.service')


    services.forEach(service => {
        gsap.to(service, {
            filter: "blur(2px)",
            duration: 1,
            scrollTrigger: {
                trigger: service,
                start: "bottom bottom",
                scrub: 1,
                pin: true,
                pinSpacing: false,
            }
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
        bounds: container,
        inertia: true,
        dragResistance: 0.2
    });
} else {
    container.style.justifyContent = "center"
}

