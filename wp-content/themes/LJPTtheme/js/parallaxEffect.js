const mainContainer = document.querySelector('.main-container')
const parallaxSpeed = 0.2

window.addEventListener('scroll', () => {
    let scrollTop = mainContainer.getBoundingClientRect().top

    let newBackgroundPosition = Math.round((scrollTop * parallaxSpeed) * -1)
    mainContainer.style.backgroundPositionY = `${newBackgroundPosition}px`
})