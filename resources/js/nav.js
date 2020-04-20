let baseYellow = '#F8DC28'
const navElement = document.querySelector("nav");
let navLinks = document.querySelectorAll('.change-on-scroll')

let myScrollFunc = () => {
    let y = window.scrollY;
    // console.log(y)
    if (y >= 700) {
        navElement.style.background = baseYellow
        navElement.style.height = '8vh'
        navLinks.forEach(element => {
            element.style.color = '#000'
        });
    } else {
        navElement.style.background = 'rgba(50, 50, 50, 0)'
        navElement.style.height = '15vh'
        navLinks.forEach(element => {
            element.style.color = '#fff'
        });
    }
};

window.addEventListener("scroll", myScrollFunc);

const toggleMenuIn = document.querySelector('.toggle-menu-in')
const toggleMenuInText = document.querySelector('.toggle-menu-in-el')
const toggleMenuOut = document.querySelector('.toggle-menu-out')
const menuParent = document.querySelector('.menu-parent')
const menuChild = document.querySelector('.menu-child')

let fadeInMenu = () => {
    menuParent.style.background = 'rgba(0, 0, 0, 0.4)'
    menuParent.style.pointerEvents = 'all'
    menuChild.style.width = '30vw'
    toggleMenuInText.style.opacity = '0'
    toggleMenuOut.style.display = 'block'
    toggleMenuOut.style.color = 'rgba(0,0,0,1)'
    console.log('fade in menu please')
}

let fadeOutMenu = () => {
    menuParent.style.background = 'rgba(0, 0, 0, 0)'
    menuParent.style.pointerEvents = 'none'
    menuChild.style.width = '0vw'
    toggleMenuInText.style.opacity = '1'
    toggleMenuOut.style.color = 'rgba(0,0,0,0)'
    toggleMenuOut.style.display = 'none'
    console.log('time to fade out !')
}

toggleMenuIn.addEventListener('click', fadeInMenu)
toggleMenuOut.addEventListener('click', fadeOutMenu)