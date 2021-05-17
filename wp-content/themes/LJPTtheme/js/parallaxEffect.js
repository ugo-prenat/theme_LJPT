const mainContainer = document.querySelector('.main-container')
const parallaxSpeed = 0.3

window.addEventListener('scroll', () => {
    let scrollTop = mainContainer.getBoundingClientRect().top

    let newBackgroundPosition = (scrollTop * parallaxSpeed) * -1
    mainContainer.style.backgroundPositionY = `${newBackgroundPosition}px`
})