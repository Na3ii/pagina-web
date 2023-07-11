export default function onScrollEnd(el, fn) {
    let tm;
    function handler(e) {
        clearTimeout(tm);
        tm = window.setTimeout(function () {
            fn(e);
        }, 200);
    }
    el.addEventListener('scroll', handler);
    return function () {
        el.removeEventListener('scroll', handler);
    };
}