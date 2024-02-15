// the page looks so boring
// maybe I can add animations!

let strongElement = document.getElementsByTagName("strong")[0];

let initialFontSize = parseFloat(window.getComputedStyle(strongElement).fontSize);
let enlargedFontSize = initialFontSize * 1.5;

function enlargeText() {
    strongElement.style.fontSize = enlargedFontSize + 'px';
}

function resetText() {
    strongElement.style.fontSize = initialFontSize + 'px';
}

strongElement.addEventListener('mouseenter', enlargeText);
strongElement.addEventListener('mouseleave', resetText);

// the animation is not smooth
// perhaps I should've written it in the CSS file

// 3/3 d0!}