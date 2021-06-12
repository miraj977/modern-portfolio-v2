const navToggle = document.querySelector( '.nav-toggle' );
const navLinks = document.querySelectorAll( '.nav__link' )

navToggle.addEventListener( 'click', () =>
{
    document.body.classList.toggle( 'nav-open' );
} );

navLinks.forEach( link =>
{
    link.addEventListener( 'click', () =>
    {
        document.body.classList.remove( 'nav-open' );
    } )
} )

//   Slide show
function openModal ()
{
    document.getElementById( "myModal" ).style.display = "block";
}

function closeModal ()
{
    document.getElementById( "myModal" ).style.display = "none";
}

function openModals ()
{
    document.getElementById( "myModals" ).style.display = "block";
}

function closeModals ()
{
    document.getElementById( "myModals" ).style.display = "none";
}

var slideIndex = 1;
showSlides( slideIndex );

function plusSlides ( n )
{
    showSlides( slideIndex += n );
}

function currentSlide ( n )
{
    showSlides( slideIndex = n );
}

function showSlides ( n )
{
    var i;
    var slides = document.getElementsByClassName( "mySlides" );

    if ( n > slides.length )
    {
        slideIndex = 1
    }
    if ( n < 1 )
    {
        slideIndex = slides.length;
    }
    for ( i = 0; i < slides.length; i++ )
    {
        slides[ i ].style.display = "none";
    }

    slides[ slideIndex - 1 ].style.display = "block";

}


var slideIndexs = 1;
showSlide( slideIndexs );

function plusSlide ( n )
{
    showSlide( slideIndexs += n );
}

function currentSlides ( n )
{
    showSlide( slideIndexs = n );
}

function showSlide ( n )
{
    var i;
    var slide = document.getElementsByClassName( "mySlide" );

    if ( n > slide.length )
    {
        slideIndexs = 1
    }
    if ( n < 1 )
    {
        slideIndexs = slide.length;
    }
    for ( i = 0; i < slide.length; i++ )
    {
        slide[ i ].style.display = "none";
    }

    slide[ slideIndexs - 1 ].style.display = "block";

}


document.onkeydown = function ( e )
{
    e = e || window.event;
    if ( e.keyCode == '37' )
    {
        plusSlides( -1 );
        plusSlide( -1 );//left <- show Prev image
    } else if ( e.keyCode == '39' )
    {
        // right -> show next image
        plusSlides( 1 );
        plusSlide( 1 );
    }
}

//    End of Slide show

$( window ).scroll( function ()
{
    $( this ).scrollTop() >= 100 ? $( "header" ).addClass( "scroll" ) : $( "header" ).removeClass( "scroll" );
    $( this ).scrollTop() >= 100 ? $( ".scroll-p" ).addClass( "scroll" ) : $( ".scroll-p" ).removeClass( "scroll" );
} );

//Get the button:
mybutton = document.getElementById( "myBtn" );

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction ()
{
    if ( document.body.scrollTop > 800 || document.documentElement.scrollTop > 800 )
    {
        mybutton.style.display = "grid";
    } else
    {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction ()
{
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    mybutton.style.background = "#ffcb00";
    mybutton.style.color = "#303030";
}


var child = $( '.portfolio__item' ).length;
if ( child % 2 != 0 )
{
    $( '.portfolio__item:last-child' ).addClass( 'last' );
}