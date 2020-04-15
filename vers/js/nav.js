const navElement = document.querySelector("nav");
let navLinks = document.querySelectorAll('.change-on-scroll')
console.log(navLinks)

let myScrollFunc = () => {
    let y = window.scrollY;
    if (y >= 800) {
        console.log(navElement)
        navElement.style.background = 'rgba(233, 218, 0, 1)'
        navLinks.forEach(element => {
            element.style.color = '#000'
        });
    } else {
        navElement.style.background = 'rgba(50, 50, 50, 0)'
        navLinks.forEach(element => {
            element.style.color = '#fff'
        });
    }
};

window.addEventListener("scroll", myScrollFunc);