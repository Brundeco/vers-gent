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