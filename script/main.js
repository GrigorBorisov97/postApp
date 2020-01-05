
const links = document.querySelectorAll('.imageAndText');
const articleMenu = document.querySelector('#articleMenu');
const closeArticle = document.querySelector('#backButton');
const phoneScreen = document.querySelector('#phoneScreen');

const settings = document.querySelectorAll('.settingHolder');
const settingsWindows = document.querySelector('#settings');

let touchHide;
let touchDiff;
let articlePosition;
let startingPosition;
let diffForClose;

for(i = 0; i < links.length; i++){
    links[i].addEventListener('click', function(){
        OpenWindow(articleMenu, $(this).find('input').val());
    })
}

document.querySelector("#settingsButton").addEventListener('click', function(){
    OpenWindow(settingsWindows);
})




function OpenWindow(x, id){
    x.classList.add('active');
    phoneScreen.style.overflowY = 'hidden';
    
    phoneScreen.scrollTop = 0;

    if(id != undefined){
        fetch('https://borisov-webmake.com/laravel/api/?id='+id)
            .then(
                function(response) {
                if (response.status !== 200) {
                    console.log('Looks like there was a problem. Status Code: ' +
                    response.status);
                    return;
                }

                // Examine the text in the response
                response.json().then(function(data) {
                    changeArticle(data);
                });
                }
            )
            .catch(function(err) {
                console.log('Fetch Error :-S', err);
            });
    }
}

// Change article

function changeArticle(data){
    $('#articleHeader').text(data.header);
    $('#articleImage').attr('src', 'images/picture ('+ data.Id +').jpg');
    document.querySelector('#forMobileView').style.background = 'url("images/picture ('+ data.Id +').jpg")';
    $('#articleBody').text(data.body);
}

closeArticle.addEventListener('click', function(){
    articleMenu.classList.remove('active');
    phoneScreen.style.overflowY = 'scroll';

});

document.querySelector('#closeSettings').addEventListener('click', function(){
    settingsWindows.classList.remove('active');
    phoneScreen.style.overflowY = 'scroll';
})

articleMenu.addEventListener('touchstart', function(e){
    touchStart(articleMenu, e)
})

settingsWindows.addEventListener('touchstart', function(e){
    touchStart(settingsWindows, e)
})

// Touch start function

function touchStart(x, e){
    articlePosition = 0;
    startingPosition = e.targetTouches[0].clientX;
    touchDiff = 0;
    touchHide = e.targetTouches[0].clientX;
    x.style.transition = 'none';
}



articleMenu.addEventListener('touchmove', function(e){
    touchMove(articleMenu, e);
});

settingsWindows.addEventListener('touchmove', function(e){
    touchMove(settingsWindows, e);
});
// Touch move function

function touchMove(x, e){
    if(touchHide > startingPosition -1){

        touchDiff += e.targetTouches[0].clientX - touchHide;
        touchHide = e.targetTouches[0].clientX;
        
        x.style.transform = 'translateX(' + touchDiff + 'px)';

    }
}

articleMenu.addEventListener('touchend', function(e){
    touchEnd(articleMenu, e)
})

settingsWindows.addEventListener('touchend', function(e){
    touchEnd(settingsWindows, e)
})

// Touch end functions

function touchEnd(x, e){
    x.style.transition = '0.2s ease-out';
    $(x).removeAttr('style');
    
    // if(touchDiff > 70)
    // {

        if(touchDiff > 100){
            phoneScreen.style.overflowY = 'scroll';
            x.classList.remove('active');
        }
        else{
            x.classList.add('active');
        }
    // }

}


// Open settings

settings[0].addEventListener('click', function(){
    $('#accountSettings').slideToggle();

    $(this).find('.toggler').toggleClass('active');
})

settings[1].addEventListener('click', function(){
    $('#photoSettings').slideToggle();

    $(this).find('.toggler').toggleClass('active');
})

// Open side menu

$('#menu2').click(function(){
    $(this).toggleClass('active');
    
    if(
        !$("#hiddenMenu").hasClass("active")
    ){
        fadeIn();
    }
    
    else{
        fadeOut();
    }


})

function fadeIn(x = 0){
    if(!$("#hiddenMenu").hasClass("active")){

        $('#hiddenMenu').addClass('active');
    
    }

    setTimeout(
        function(){
            document.querySelectorAll('.item')[x].classList.remove('fadeOutLeft');

            document.querySelectorAll('.item')[x].classList.add('fadeInLeft');
            if(x < 2){
                fadeIn(x+1);
            }
        },
        400
    )
}

function fadeOut(x = 2){
    setTimeout(
        function(){
            document.querySelectorAll('.item')[x].classList.remove('fadeInLeft');

            document.querySelectorAll('.item')[x].classList.add('fadeOutLeft');

            if(x > 0){
                fadeOut(x-1);
            }
        },
        400
    )

    setTimeout(
        function(){
            $('#hiddenMenu').removeClass('active')

        },
        1800
    )
}

