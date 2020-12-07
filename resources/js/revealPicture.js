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
var childExcept = document.querySelectorAll('.child-box-except');
let posArray = ['0', '100']

if (child != 'undefined' && child != null) {
    child.forEach(element => {
        window.addEventListener('scroll', function (event) {
            if (isInViewport(element)) {
                let randInt = Math.round(Math.random())
                let propName = posArray[randInt]
                // console.log(propName)
                element.style.height = '0';
            }
        }, false);
    });

    childExcept.forEach(element => {
        window.addEventListener('scroll', function (event) {
            if (isInViewport(element)) {
                let randInt = Math.round(Math.random())
                let propName = posArray[randInt]
                // console.log(propName)
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
}

const fixedBgImage = document.querySelector('.fixed-bg-image')

if (fixedBgImage != 'undefined' && fixedBgImage != null) {
    window.onload = () => {
        fixedBgImage.style.top = '0'
    };
}

