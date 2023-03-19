const isSmoothScrollSupported = 'scrollBehavior' in document.documentElement.style;
export default function scrollToX(element, to, duration = 300) {
    if (element.scrollLeft == to)
        return;
    if (isSmoothScrollSupported) {
        element.classList.add('scroll-smooth');
        element.scrollLeft = to;
        window.setTimeout(function () {
            element.classList.remove('scroll-smooth');
        }, 200);
        return;
    }
    let start, scrollStart = element.scrollLeft;
    function step(timestamp) {
        if (!start) {
            start = timestamp;
            window.requestAnimationFrame(step);
            return;
        }
        const elapsed = Math.min(timestamp - start, duration);
        element.scrollLeft = scrollStart + (to - scrollStart) * elapsed / duration;
        if (elapsed < duration)
            window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
}