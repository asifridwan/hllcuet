const navSlide = () => {
    const hamburg = document.querySelector('.hamburg');
    const nav = document.querySelector('.navbar-links');
    const navLink = document.querySelectorAll('.navbar-links li');

    hamburg.addEventListener('click', ()=>{
        // Toggle
        nav.classList.toggle('navbar-active');

        // Animate
        navLink.forEach((link, index) => {
            if(link.style.animation){
                link.style.animation = '';
            }
            else{
                link.style.animation = `navbarLinkFade 0.5s ease forwards ${index / 8 + 1}s`;
            }
        });

        // Hamburger
        hamburg.classList.toggle('toggle');
    });
}

navSlide();