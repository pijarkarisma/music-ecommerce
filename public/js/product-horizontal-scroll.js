const buttonRight = document.getElementById('slideRight')
const buttonLeft = document.getElementById('slideLeft')
const container = document.getElementById('productHomeContainer')

buttonRight.onclick = function () {
    smoothScroll(container, 'right', 15, 300, 20)
    // document.getElementById('productHomeContainer').scrollLeft += 240
}
buttonLeft.onclick = function () {
    smoothScroll(container, 'left', 15, 300, 20)
    // document.getElementById('productHomeContainer').scrollLeft -= 240
}

function smoothScroll(element, direction, speed, distance, step) {
    let scrollAmount = 0;
    var slideTimer = setInterval(function () {
        if (direction == 'left') {
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if (scrollAmount >= distance) {
            window.clearInterval(slideTimer);
        }
    }, speed);
}