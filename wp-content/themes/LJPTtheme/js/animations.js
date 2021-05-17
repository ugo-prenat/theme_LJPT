// Read more button animations
const readMoreBtnContainers = document.querySelectorAll('.article-btns .article-btn .read-more-btn .animation-container .animation')
const readMoreBtns = document.querySelectorAll('.article-btns .article-btn .read-more-btn')

for (let i = 0; i < readMoreBtnContainers.length; i++) {
    const container = readMoreBtnContainers[i];

    const animation = lottie.loadAnimation({
        container: container,
        path: './wp-content/themes/LJPTtheme/animations/arrow-animation.json',
        renderer: 'svg',
        loop: false,
        autoplay: false,
    })

    readMoreBtns[i].addEventListener('mouseenter', () => {
        animation.goToAndPlay(0, true)
    })
}

// Share button animations
const shareBtnContainers = document.querySelectorAll('.article-btns .share-btn .animation-container .animation')
const shareBtns = document.querySelectorAll('.article-btns .share-btn')

for (let i = 0; i < shareBtnContainers.length; i++) {
    const container = shareBtnContainers[i];

    const animation = lottie.loadAnimation({
        container: container,
        path: './wp-content/themes/LJPTtheme/animations/share-animation.json',
        renderer: 'svg',
        loop: false,
        autoplay: false,
    })

    animation.goToAndStop(50, true)

    shareBtns[i].addEventListener('mouseenter', () => {
        animation.goToAndStop(50, true)
        animation.playSegments([50, 70], true)
    })
    shareBtns[i].addEventListener('mouseleave', () => {
        animation.setDirection(-1)
        animation.playSegments([70, 50], true)
    })
}