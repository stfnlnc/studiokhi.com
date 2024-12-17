const faqs = document.querySelectorAll('.faq')
const faqPlus = document.querySelectorAll('.faq-plus')
const faqAnswer = document.querySelectorAll('.faq-answer')

faqs.forEach((faq, key) => {
    faq.addEventListener('click', () => {
        faqPlus[key].classList.toggle('rotate-45')
        faqAnswer[key].classList.toggle('hidden')
    })
})
