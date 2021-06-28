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

$( '.started-top' ).hide();

$( window ).scroll( function ()
{
    $( this ).scrollTop() >= 50 ? $( "header, body" ).addClass( "scroll" ) : $( "header, body" ).removeClass( "scroll" );
    $( this ).scrollTop() >= 40 ? $( ".scroll-p" ).addClass( "scroll" ) : $( ".scroll-p" ).removeClass( "scroll" );
    if ( $( 'body' ).hasClass( "scroll" ) && window.innerWidth < 600 )
    {
        $( '.section__subtitle--intro' ).hide();
        $( '.started-top' ).show();
    } else
    {
        $( '.section__subtitle--intro' ).show();
        $( '.started-top' ).hide();
    }

    $( this ).scrollTop() >= 600 ? $( '#home' ).css( 'opacity', 0 ) : $( '#home' ).css( 'opacity', 1 );
} );

//Get the button:
mybutton = document.getElementById( "myBtn" );

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction ()
{
    if ( document.body.scrollTop > 500 || document.documentElement.scrollTop > 500 )
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

//Add styling to last odd project to stay in center of screen
var child = $( '.portfolio__item' ).length;
if ( child % 2 != 0 )
{
    $( '.portfolio__item:last-child' ).addClass( 'last' );
}

// Theme and hobbies image scroller
$( ".toggle-switch" ).hide();

document.addEventListener( 'DOMContentLoaded', function ()
{
    $( ".toggle-switch" ).show();
    $( ".loader" ).css( {
        'display': 'none',
        'z-index': '-999'
    } );

    new Splide( '.splide', {
        type: 'loop',
        focus: 'start',
        perPage: 4,
        rewind: true,
        perMove: 1,
        pagination: false,
        pauseOnHover: false
    } ).mount();

    new Splide( '.splide2', {
        type: 'loop',
        focus: 'start',
        perPage: 4,
        rewind: true,
        perMove: 1,
        pagination: false,
        pauseOnHover: false
    } ).mount();
} );


// Theme toggler

const themeSwitcher = document.getElementById( "theme-switch" );
const tooltip = $( '.theme-tooltip' );
themeSwitcher.checked = false;
function clickHandler ()
{
    if ( this.checked )
    {
        document.body.classList.remove( "light" );
        document.body.classList.add( "dark" );
        tooltip.show();
        tooltip.text( 'Dark' );
        setTimeout( function () { tooltip.fadeOut(); }, 2000 );
        localStorage.setItem( "theme", "dark" );
    } else
    {
        tooltip.show();
        tooltip.text( 'Light' );
        setTimeout( function () { tooltip.fadeOut(); }, 2000 );
        document.body.classList.add( "light" );
        document.body.classList.remove( "dark" );
        localStorage.setItem( "theme", "light" );
    }
}
themeSwitcher.addEventListener( "click", clickHandler );

window.onload = checkTheme();

function checkTheme ()
{
    const localStorageTheme = localStorage.getItem( "theme" );

    if ( localStorageTheme !== null && localStorageTheme === "dark" )
    {
        // set the theme of body
        document.body.className = localStorageTheme;

        // adjust the slider position
        const themeSwitch = document.getElementById( "theme-switch" );
        themeSwitch.checked = true;
    }
}


// Hiding extra projects

toggleProject = () => $( '.portfolio__item' ).each( function ( i )
{
    ( i > 9 ) ? $( this ).toggle( 'slow' ) : '';
} );

toggleProject();

$( '#toggleBtn' ).click( function ( e )
{
    e.preventDefault();
    toggleProject();
    $( this ).text( function ( i, text )
    {
        return text === "View more" ? "Show less" : "View more";
    } );
    $( '.arrow' ).toggleClass( 'arrowUp' );
    $( '.portfolio__item' )[ 8 ].scrollIntoView( { behavior: 'smooth', block: 'start' } );
} );

// Set Intro section to position sticky for parallax effect

var home = $( '#home' );
home.css( 'position', 'sticky' );

//Hide tooltip after 5s of DOM loading

setTimeout( function () { tooltip.hide( 'slow' ); }, 4000 );