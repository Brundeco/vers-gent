var isInViewport = function (elem) {
    var bounding = elem.getBoundingClientRect();
    return (
        bounding.top <= 600
        // &&
        // bounding.left >= 0 &&
        // bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        // bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

var child = document.querySelectorAll('.child-box');
let posArray = ['width', 'height']

child.forEach(element => {
    window.addEventListener('scroll', function (event) {
        if (isInViewport(element)) {
            // console.log(posArray[randInt])
            // console.log(div)
            let randInt = Math.round(Math.random())
            element.style.width = '0';
        }
    }, false);
});

var parent = document.querySelectorAll('.box');
parent.forEach(element => {
    window.addEventListener('scroll', function (event) {
        if (isInViewport(element)) {
            element.style.marginTop = '5vh';
        }
    }, false);
});

const fixedBgImage = document.querySelector('.fixed-bg-image')

window.onload = () => {
    fixedBgImage.style.top = '0'
};