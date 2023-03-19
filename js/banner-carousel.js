import connectRotatingCarousel, { RotatingCarouselEvent } from "./rotating-carousel.js";
(function () {
    /// Configuration
    const TIMEOUT = 5000;
    /// Code
    const container = document.querySelector('.podcast-carousel');
    if (!container) {
        console.warn("no podcast container found.");
        return;
    }
    const carousel = container.querySelector(".podcast-container");
    const nav = container.querySelectorAll(".navigation .nav-item");
    const slides = container.querySelectorAll(".podcast-item");
    // Setup the rotating carousel part with the > and < buttons.
    const res = connectRotatingCarousel(container, carousel);
    // Set the first item as active!
    if (slides.length > 0) {
        slides.item(0).classList.add('active');
    }
    // Cleanup is a function to cleanup old event listeners.
    let cleanup;
    res.addEventListener(RotatingCarouselEvent.NewConnection, function (s) {
        // Do cleanup
        cleanup && cleanup();
        // Register handlers + cleanup function for NAV items.
        const navCleanup = [];
        nav === null || nav === void 0 ? void 0 : nav.forEach(function (n, idx) {
            function goto() {
                s.goTo(s.index(idx));
            }
            n.addEventListener('click', goto);
            navCleanup.push(() => n.removeEventListener('click', goto));
        });
        cleanup = function () {
            navCleanup.forEach(v => v());
        };
        // Setup active state on nav
        s.addListener(function (curr) {
            const curNav = nav.item(curr.index);
            if (curNav.classList.contains('active'))
                return;
            container.querySelectorAll(".navigation .nav-item.active").forEach(v => {
                v.classList.remove("active");
            });
            curNav.classList.add('active');
        });
        // Setup active state on slides
        // Note that there is a timeout on the active. This is to be able to wait for the scroll to end.
        let activeTimeout;
        s.addListener(function (curr) {
            clearTimeout(activeTimeout);
            activeTimeout = setTimeout(function () {
                const currSlide = slides.item(curr.index);
                if (currSlide.classList.contains('active'))
                    return;
                container.querySelectorAll(".podcast-item.active").forEach(v => {
                    v.classList.remove("active");
                });
                currSlide.classList.add("active");
            }, 100);
        });
        // Setup auto scroller
        let autoNextTm;
        function toNext(curr) {
            clearTimeout(autoNextTm);
            const next = s.isLastItem(curr) ? s.first() : s.next();
            autoNextTm = setTimeout(function () {
                s.goTo(next);
            }, TIMEOUT);
        }
        s.addListener(function (curr) {
            toNext(curr);
        });
        toNext(s.current());
    });
    // Start animation
    res.start();
})();
