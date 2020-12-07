const pageTransitionLinks = document.querySelectorAll(".page-transition");
const animateOnPageTransition = document.querySelector('#animateOnPageTransitionChild')
console.log(animateOnPageTransition)

let pageTransition = () => {
    animateOnPageTransition.style.animation = 'animate 1.6s cubic-bezier(1, 0, 0, 1)'
    console.log('body was clicked!')
};

document.body.addEventListener('click', pageTransition)