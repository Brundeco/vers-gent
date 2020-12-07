
const productImage = document.querySelector(".product-image-detail");
const productColorShape = document.querySelector('.product-color-shape')
const productTitle = document.querySelector('.product-slug-detail')
const productBody = document.querySelector('.product-body-detail')

// console.log(productImage, productColorShape, productTitle, productBody)

let animatePageElements = () => {
    // productImage.classList.add = 'bounce-in-top'
    // productImage.style.animation = 'fade-in-top 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both'
    productImage.style.animation = 'fade-in-top 2s cubic-bezier(1,0,0,1) both'

    setTimeout(() => {
        productColorShape.style.animation = 'fade-in-top 4s cubic-bezier(1,0,0,1) both'
        productColorShape.style.opacity = '1'
    }, 300);

    setTimeout(() => {
        productBody.style.animation = 'fade-in-left 1s cubic-bezier(1,0,0,1) both'
        productBody.style.opacity = '1'
    }, 500);

    setTimeout(() => {
        productTitle.style.opacity = '1'
    }, 700);

};

const currentUrl = window.location.href

if (currentUrl.indexOf('products') > -1 && currentUrl.indexOf('show') > -1) {
    window.onload = animatePageElements()
}