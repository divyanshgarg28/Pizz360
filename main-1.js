//Select element function
const selectElement = function(element)
{
    return document.querySelector(element);

};

let menuToggler = selectElement('.navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light');
let body = selectElement('body');

menuToggler.addEventListener('click',function()
{
    body.classList.toggle('open');
});

//Scroll reveal
window.sr= ScrollReveal();
sr.reveal('.animate-left-1',
{
    origin:'left',
    duration:1000,
    distance:'25rem',
    delay:300
});
sr.reveal('.animate-right-1',
{
    origin:'right',
    duration:1000,
    distance:'25rem',
    delay:600
});
sr.reveal('.animate-top-1',
{
    origin:'top',
    duration:1000,
    distance:'25rem',
    delay:600
});
sr.reveal('.animate-bottom-1',
{
    origin:'bottom',
    duration:1000,
    distance:'25rem',
    delay:600
});
