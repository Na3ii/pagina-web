import createCarouselState from "./carousel-state.js";
import { connectNextButton, connectPreviousButton } from "./prev-next.js";
import dragToScrollX, { DragScrollEvents } from "./drag-to-scroll.js";
import onScrollEnd from "./no-scroll-end.js";
import scrollToX from "./smooth-scroll-to.js";
export var RotatingCarouselEvent;
(function (RotatingCarouselEvent) {
    RotatingCarouselEvent["NewConnection"] = "onNewConnection";
})(RotatingCarouselEvent || (RotatingCarouselEvent = {}));
export default function connectRotatingCarousel(container, carousel) {
    if (!carousel) {
        carousel = container.querySelector('.slider');
    }
    const nextButton = container.querySelector(".next-button");
    const prevButton = container.querySelector(".prev-button");
    // This is the object that is returned by the function.
    const hooks = {
        listeners: {},
        addEventListener(event, fn) {
            if (!(event in hooks.listeners)) {
                hooks.listeners[event] = [];
            }
            hooks.listeners[event].push(fn);
        },
        invoke(event, s) {
            var _a;
            (_a = hooks.listeners[event]) === null || _a === void 0 ? void 0 : _a.forEach(v => v(s));
        },
        start: function () {
            // Logic to handle resizing.
            let tm, disconnect;
            window.addEventListener('resize', function () {
                clearTimeout(tm);
                tm = window.setTimeout(function () {
                    disconnect && disconnect();
                    disconnect = connect();
                }, 100);
            });
            // Start the carousel.
            disconnect = connect();
        }
    };
    // Return the hooks object.
    return hooks;
    /// Main Logic
    function connect() {
        // All the items in the carousel defined by their left/right and index
        const allItems = Array.from(carousel.children).map(function (child, index) {
            const left = child.offsetLeft;
            const right = child.offsetLeft + child.offsetWidth;
            return {
                left, right, index
            };
        });
        // Calculates the number of visible items by getting the index of the first invisible item. If no invisible items,
        // it will return the entire length.
        const numVisible = (function () {
            const idx = allItems.findIndex(item => carousel.offsetWidth <= item.left);
            return idx == -1 ? allItems.length : idx;
        })();
        // The state of the carousel needs to be until all items can be seen only.
        const state = createCarouselState(allItems.slice(0, allItems.length - numVisible + 1));
        hooks.invoke(RotatingCarouselEvent.NewConnection, state);
        // Connect the next/prev buttons with cleanup
        const disconnectNext = connectNextButton(nextButton, state);
        const disconnectPrev = connectPreviousButton(prevButton, state);
        // Drag to Scroll (mouse)
        const { addEventListener, cleanup } = dragToScrollX(carousel);
        addEventListener(DragScrollEvents.DragEnd, function (e) {
            state.goTo(snapPosition());
        });
        // This is to handle mobile, but it will fire on drag as well.
        const disconnectScroll = onScrollEnd(carousel, function () {
            state.goTo(snapPosition());
        });
        // Snap!
        state.addListener(function (item) {
            scrollToX(carousel, item.left, 500);
        });
        // Do the *scroll to x* now!
        scrollToX(carousel, snapPosition().left, 500);
        // Calculate who to snap to
        function snapPosition() {
            const closestIdx = allItems.findIndex((item) => carousel.scrollLeft < item.left);
            if (closestIdx === 0) {
                return allItems[0];
            }
            if (closestIdx === -1) {
                return allItems[allItems.length - 1];
            }
            const next = allItems[closestIdx];
            const prev = allItems[closestIdx - 1];
            const nextDiff = next.left - carousel.scrollLeft;
            const prevDiff = carousel.scrollLeft - prev.left;
            if (nextDiff < prevDiff) {
                return next;
            }
            return prev;
        }
        // Cleanup
        return function () {
            disconnectNext();
            disconnectPrev();
            disconnectScroll();
            cleanup();
            state.dispose();
        };
    }
}