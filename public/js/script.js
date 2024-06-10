let currentWindow = window.location.pathname;
let firstPath = currentWindow.split('/')[1];
let navLink = document.querySelectorAll('ul li a.nav-link');

navLink.forEach((link) =>{
    if(link.href.includes(`${firstPath}`)){
        link.classList.add('nav-selected');
        console.log(link.href)
        console.log(`${firstPath}`)
        console.log(`masuk wak`)
    }
})