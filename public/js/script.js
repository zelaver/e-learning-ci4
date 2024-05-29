let currentWindow = window.location.pathname;
let navLink = document.querySelectorAll('ul li a.nav-link');

navLink.forEach((link) =>{
    if(link.href.includes(`${currentWindow}`)){
        link.classList.add('nav-selected');
        // console.log(`${currentWindow}`)
    }
})