const currentScript = document.currentScript.getAttribute('sectionId')
const buttonRight = document.getElementById(`slideRight-${currentScript}`)
const buttonLeft = document.getElementById(`slideLeft-${currentScript}`)
const container = document.getElementById(`productHomeContainer-${currentScript}`)

document.getElementById(`slideRight-${document.currentScript.getAttribute('sectionId')}`).onclick = function () {
    smoothScroll(document.getElementById(`productHomeContainer-${document.currentScript.getAttribute('sectionId')}`), 'right', 15, 300, 20)
}
document.getElementById(`slideLeft-${document.currentScript.getAttribute('sectionId')}`).onclick = function () {
    smoothScroll(document.getElementById(`productHomeContainer-${document.currentScript.getAttribute('sectionId')}`), 'left', 15, 300, 20)
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