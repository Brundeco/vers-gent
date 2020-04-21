let replaceColor = '#1C3B2E'
const navElement = document.querySelector("nav");
const scrollAnimation = document.querySelector('.scroll-down')
console.log(scrollAnimation)
let navLinks = document.querySelectorAll('.change-on-scroll')

let myScrollFunc = () => {
    let y = window.scrollY;
    // console.log(y)
    y >= 50 ? scrollAnimation.style.display = 'none' : scrollAnimation.style.display = 'flex'
    if (y >= 700) {
        navElement.style.background = replaceColor
        navElement.style.height = '12vh'
        // navLinks.forEach(element => {
        //     element.style.color = '#000'
        // });
    } else {
        navElement.style.background = 'rgba(50, 50, 50, 0)'
        navElement.style.height = '15vh'
        // navLinks.forEach(element => {
        //     element.style.color = '#fff'
        // });
    }
};

window.addEventListener("scroll", myScrollFunc);

const toggleMenuIn = document.querySelector('.toggle-menu-in')
const toggleMenuInText = document.querySelector('.toggle-menu-in-el')
const toggleMenuOut = document.querySelector('.toggle-menu-out')
const menuParent = document.querySelector('.menu-parent')
const menuChild = document.querySelector('.menu-child')
const bodyEl = document.querySelector('body')
let opacityLinks = document.querySelectorAll('.opacity-link')
console.log(opacityLinks)

let fadeInMenu = () => {
    menuParent.style.background = 'rgba(143, 185, 168, 0.3)'
    menuParent.style.pointerEvents = 'all'
    menuChild.style.width = '30vw'
    toggleMenuInText.style.opacity = '0'
    toggleMenuOut.style.display = 'block'
    toggleMenuOut.style.color = 'rgba(0,0,0,1)'
    bodyEl.style.overflow = 'hidden'

    opacityLinks.forEach(element => {
        element.style.display = 'block'
    });
    console.log(opacityLinks)
}

let fadeOutMenu = () => {
    menuParent.style.background = 'rgba(143, 185, 168, 0)'
    menuParent.style.pointerEvents = 'none'
    menuChild.style.width = '0vw'
    toggleMenuInText.style.opacity = '1'
    toggleMenuOut.style.color = 'rgba(0,0,0,0)'
    toggleMenuOut.style.display = 'none'
    bodyEl.style.overflow = 'auto'

    opacityLinks.forEach(element => {
        element.style.display = 'none'
    });
}

toggleMenuIn.addEventListener('click', fadeInMenu)
toggleMenuOut.addEventListener('click', fadeOutMenu)


const hiddenFieldVal = document.querySelector('#pageMeta')

hiddenFieldVal.value === 'hide' ? navElement.style.opacity = '0' : navElement.style.opacity = '1'