const dropdownLink = document.getElementById('dropdown-link')
const dropdown = document.getElementById('dropdown')

dropdownLink.addEventListener("click", () => {
    dropdown.classList.toggle('-translate-y-full')
});

const dropdownLinkMobile = document.getElementById('dropdown-menu-mobile')
const dropdownMobile = document.getElementById('dropdown-mobile')
const lineMobile = document.getElementById('mobile-menu-line')

dropdownLinkMobile.addEventListener("click", () => {
    dropdownMobile.classList.toggle('-translate-y-full')
    lineMobile.classList.toggle('rotate-90')
});
