const dropdownLink = document.getElementById('dropdown-link')
const dropdown = document.getElementById('dropdown')

dropdownLink.addEventListener("click", (event) => {
    dropdown.classList.toggle('-translate-y-full')
});

