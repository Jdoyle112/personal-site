$(document).ready(function() {
    
    $('.typing').typed({
        strings: ["Board Games.", "Hiking.", "Movies.", "My Wife.", "Narcos.", "Technology.", "Comfort Food.", "Ice Cream.", "Rock Climbing.", "Video Games.", "Bon Fires.", "Camping.", "Motorcycles.", "Vroom vroom.", "Biking.", "Football.", "Fantasy Football.", "Sports.", "Travel.", "Family.", "Star Wars.", "Mythology."],
        typeSpeed: 0,
        startDelay: 300,
        backSpeed: 50,
        showCursor: true,
        cursorChar: "|"
    });

    $('.projects .content').hoverGrid();

    var init = 0;
    /*$('.skill ul > li').css('display','none');*/

        $('.skills-section').mouseenter(function(){
            if(init > 0){
                return;
            }


            $('.skill ul li').each(function(i, element) {

                /*$(element).delay(i * 500).fadeIn();
                $(element).css('visibility','visible').hide().fadeIn();*/
                $(element).delay(i*200).animate({opacity:1}, 1000);

            });

            init++;
        });
});




