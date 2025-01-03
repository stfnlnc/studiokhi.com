const items = document.querySelectorAll('.show-item');
const filters = document.querySelectorAll('.filter');

const handleFilter = (name) => {
    const filterShow = document.querySelectorAll('.' + name + '-show');
    const filterBtn = document.getElementById(name);

    filterBtn.addEventListener('click', () => {
        items.forEach((item) => {
            item.classList.add('hidden');
            item.classList.remove('flex');
        })
        filters.forEach((item) => {
            item.classList.remove('bg-sk-dark');
            item.classList.remove('text-sk-light');
            item.classList.add('text-sk-dark');
            item.classList.add('bg-sk-transparent');
        })
        filterBtn.classList.remove('text-sk-dark');
        filterBtn.classList.remove('bg-sk-transparent');
        filterBtn.classList.add('bg-sk-dark');
        filterBtn.classList.add('text-sk-light');
        filterShow.forEach((item) => {
            item.classList.remove('hidden');
            item.classList.add('flex');
        })
    })
}

filters.forEach(filter => {
    handleFilter(filter.id)
})
