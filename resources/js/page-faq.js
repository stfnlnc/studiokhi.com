const faq = document.querySelectorAll('.faq-block');
const handleFilter = (name) => {
    const filter = document.getElementById(name);
    const filterBtn = document.getElementById(name + '-show');

    filterBtn.addEventListener('click', () => {
        faq.forEach((item) => {
            item.classList.add('hidden');
        })
        filter.classList.remove('hidden');
        filter.classList.add('flex');
    })
}

handleFilter('general')
handleFilter('branding')
handleFilter('webdesign')
handleFilter('website')
