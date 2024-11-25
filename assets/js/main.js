const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
    header.classList.toggle ("sticky", this.window.scrollY > 0);
})


const navmenu = document.querySelector('.navmenu');
const openMenu = document.querySelector('#open-menu-icon');
const closeMenu = document.querySelector('#close-menu-icon');
// opens nav menu
const openNavMenu = () => {
    navmenu.style.display = 'flex';
    openMenu.style.display = 'none';
    closeMenu.style.display = 'flex';
    
}
// close nav menu
const closeNavMenu = () => {
    navmenu.style.display = 'none';
    openMenu.style.display = 'flex';
    closeMenu.style.display = 'none';
    
}
// calling the function
openMenu.addEventListener('click', openNavMenu);
closeMenu.addEventListener('click', closeNavMenu);