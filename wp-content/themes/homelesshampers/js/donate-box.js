(function(){
    $('.donate-box__form__amount-button').on('click', function() {
        var amountDonated = $(this).data('amount');
       $('.donate-box__form__amount-button').removeClass('is-active');
       $('.donate-box__amount-donated').val(amountDonated);
       $(this).addClass('is-active');
       return false;
    });
})();