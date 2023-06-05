const menuElements = document.querySelectorAll('.event__menu')

$(document).on("click", function(e) {
    const target = e.target

    if (!$(target).hasClass('event__menu') && !$(target).hasClass('event__menu-button') || $(target) === $(".event__menu:not(.d-none)").previousElementSibling){
        menuElements.forEach(elem => {
            $(elem).addClass('d-none')
        })
    }
    if ($(target).hasClass('event__menu-button')){
        target.closest('.event__card').querySelector('.event__menu').classList.remove('d-none')
    }
})
