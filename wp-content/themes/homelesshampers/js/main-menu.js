(function () {
    $('.site__header__nav__mobile-menu-toggle').on('click', function () {
        $(this).toggleClass('is-active');
        $('.site__header__nav__main-menu-container').fadeToggle(300);
    })
})();