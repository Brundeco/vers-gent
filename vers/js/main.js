var isInViewport = function (elem) {
    var bounding = elem.getBoundingClientRect();
    return (
        bounding.top >= 0 &&
        bounding.left >= 0 &&
        bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

var div = document.querySelectorAll('.child-box');
let posArray = ['width', 'height']

div.forEach(element => {
    window.addEventListener('scroll', function (event) {
        if (isInViewport(element)) {
            // console.log(posArray[randInt])
            // console.log(div)
            let randInt = Math.round(Math.random())
            element.style.width = randInt;
        }
    }, false);
});