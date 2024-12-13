const links = document.querySelectorAll('.link-loader')
const loader = document.getElementById('loader')
const preloader = document.getElementById('preloader')

links.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault()
        let href = link.getAttribute('href')
        loader.classList.remove('translate-y-full')
        setTimeout(() => {
            window.location.href = href
        }, 1000)
    })
})

window.onload = () => {
    preloader.classList.add('-translate-y-full')
}
