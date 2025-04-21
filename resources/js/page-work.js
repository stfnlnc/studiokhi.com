import {gsap} from "gsap"
import {ScrollTrigger} from "gsap/ScrollTrigger"

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
