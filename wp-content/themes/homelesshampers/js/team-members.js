(function(){
    $('.team-member__full-bio').hide();
    $('.team-member__short-bio, .team-member__read-more-button').show();

    $('.team-member__read-more-button').on('click', function()
    {
       $(this).fadeOut(200);
       $(this).siblings('.team-member__short-bio').fadeOut(200, function()
       {
           $(this).siblings('.team-member__full-bio').fadeIn(200);
       });
       return false;
    });
})();