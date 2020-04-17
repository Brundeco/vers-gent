// $(document).ready(function () {
//     var RDC = 5; // Random Div Count
//     var minWidth = 200;
//     var minHeight = 200;
//     for (var i = 0; i < RDC; i++) {
//         thisWidth = Math.floor(Math.random() * (minWidth)) + 1; //+1 to avoid 0px width
//         thisHeight = Math.floor(Math.random() * (minHeight)) + 1; //+1 to avoid 0px height
//         thisTop = Math.floor(Math.random() * (1000 - thisHeight)) // 1000 - thisHeight to avoid div going outside container
//         thisLeft = Math.floor(Math.random() * (1000 - thisWidth))
//         $('<div></div>').appendTo('#container').css({
//             "background": "#ccc",
//             "width": thisWidth,
//             "height": thisHeight,
//             "position": "absolute",
//             "top": thisTop,
//             "left": thisLeft,
//             "border": "1px solid black"
//         });
//     }
// })

let divCount = 5
let mWidth = 900
let mHeight = 1000

const gridParent = document.querySelector('#container')
const bgColors = ['yellow', 'green', 'blue', 'purple', 'grey', 'white', 'pink', 'orange']

if (gridParent != 'undefined' && gridParent != null) {

    for (i = 0; i <= divCount; i++) {

        let randColorIndex = (Math.random() * (6 - 0 + 1)) << 0
        let newWidth = Math.floor(Math.random() * (mWidth)) + 1
        let newHeight = Math.floor(Math.random() * (mHeight)) + 1
        let newTop = Math.floor(Math.random() * (1000 - newHeight))
        let newleft = Math.floor(Math.random() * (1000 - newWidth))
        let gridChild = document.createElement('div')
        gridChild.className = 'gridchild'
        gridParent.appendChild(gridChild)
        gridParent.style.position = 'relative'
        gridChild.style.width = newWidth + 'px'
        gridChild.style.height = newHeight + 'px'
        gridChild.style.top = newTop + 'px'
        gridChild.style.left = newleft + 'px'
        gridChild.style.background = bgColors[randColorIndex]
        gridChild.style.border = '8px solid red'

    }
}