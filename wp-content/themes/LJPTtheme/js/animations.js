const PATH = template.uri

// Read more button animations
const readMoreBtnContainers = document.querySelectorAll('.article-btns .article-btn .read-more-btn .animation-container .animation')
const readMoreBtns = document.querySelectorAll('.article-btns .article-btn .read-more-btn')

for (let i = 0; i < readMoreBtnContainers.length; i++) {
    const container = readMoreBtnContainers[i];

    const animation = lottie.loadAnimation({
        container: container,
        path: `${PATH}/animations/arrow-animation.json`,
        renderer: 'svg',
        loop: false,
        autoplay: false,
    })

    readMoreBtns[i].addEventListener('mouseenter', () => {
        animation.goToAndPlay(0, true)
    })
}

// Share button animations
const shareBtnSocialNetwork = document.querySelectorAll('.article-btns .share-btn .share-btn-social-network')
const shareBtnContainers = document.querySelectorAll('.article-btns .share-btn .animation-container .animation')
const shareBtnsTitleP = document.querySelectorAll('.article-btns .share-btn .share-btn-title p')
const shareBtnsTitle = document.querySelectorAll('.article-btns .share-btn .share-btn-title')
const shareBtns = document.querySelectorAll('.article-btns .share-btn')

for (let i = 0; i < shareBtnContainers.length; i++) {
    const container = shareBtnContainers[i];

    const animation = lottie.loadAnimation({
        container: container,
        path: `${PATH}/animations/share-animation.json`,
        renderer: 'svg',
        loop: false,
        autoplay: false,
    })

    animation.goToAndStop(50, true)

    shareBtns[i].addEventListener('mouseenter', () => {
        animation.goToAndStop(50, true)
        animation.playSegments([50, 70], true)

        shareBtnsTitleP[i].style.transform = 'scale(0)'

        setTimeout(() => {
            shareBtnsTitle[i].style.display = 'none'

            const socialNetworks = shareBtnSocialNetwork[i].querySelectorAll('a')
            shareBtnSocialNetwork[i].style.display = 'flex'
            setTimeout(() => {
                for (let i = 0; i < socialNetworks.length; i++) {
                    socialNetworks[i].style.transform = 'scale(1)'
                }
            }, 100)
        }, 500)
    })
    shareBtns[i].addEventListener('mouseleave', () => {
        setTimeout(() => {
            const socialNetworks = shareBtnSocialNetwork[i].querySelectorAll('a')

            for (let i = 0; i < socialNetworks.length; i++) {
                socialNetworks[i].style.transform = 'scale(0)'
            }

            setTimeout(() => {
                shareBtnSocialNetwork[i].style.display = 'none'
                shareBtnsTitle[i].style.display = 'flex'

                animation.setDirection(-1)
                animation.playSegments([70, 50], true)

                setTimeout(() => shareBtnsTitleP[i].style.transform = 'scale(1)', 1)
            }, 600)
        }, 100)
    })
}

// Hamburger menu animation
const hambMenuContainer = document.querySelector('.hamb-menu-container')

const HambMenuAnim = lottie.loadAnimation({
    container: hambMenuContainer,
    path: `${PATH}/animations/hamb-menu-animation.json`,
    renderer: 'svg',
    loop: false,
    autoplay: false,
})

hambMenuContainer.addEventListener('click', () => {
    const menuContainer = document.querySelector('.menu-container')
    
    if(menuContainer.classList.contains('active-menu-container')) {
        menuContainer.classList.remove('active-menu-container')
        HambMenuAnim.setDirection(-1)
        HambMenuAnim.playSegments([65, 96], true)
    } else {
        menuContainer.classList.add('active-menu-container')
        HambMenuAnim.playSegments([0, 65], true)
    }
})