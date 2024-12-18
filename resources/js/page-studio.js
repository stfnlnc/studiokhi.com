import {gsap} from "gsap"
import {ScrollTrigger} from "gsap/ScrollTrigger"
import {Draggable} from "gsap/Draggable";
import InertiaPlugin from "gsap/InertiaPlugin";

gsap.registerPlugin(ScrollTrigger)

if (window.innerWidth > 768) {
    const pinImage = document.getElementById('pin-image')

    gsap.to(pinImage, {
        scale: 0.7,
        scrollTrigger: {
            trigger: pinImage,
            start: 'top top',
            pin: true,
            scrub: 1,
        }
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
