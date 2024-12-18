const links = document.querySelectorAll('.link-loader')
const loader = document.getElementById('loader')
const preloader = document.getElementById('preloader')
const logoUp = document.getElementById('logo-preloader-up')
const logoDown = document.getElementById('logo-preloader-down')
const dropdown = document.getElementById('dropdown')


links.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault()
        dropdown.classList.add('-translate-y-full')
        let href = link.getAttribute('href')
        loader.classList.remove('translate-y-full')
        setTimeout(() => {
            window.location.href = href
        }, 500)
    })
})
window.onload = () => {
    logoUp.classList.remove('translate-x-4')
    logoUp.classList.remove('-translate-y-4')
    logoUp.classList.remove('opacity-0')
    logoDown.classList.remove('translate-y-4')
    logoDown.classList.remove('opacity-0')
    preloader.classList.add('-translate-y-full')
}

