export var DragScrollEvents;
(function (DragScrollEvents) {
    DragScrollEvents["DragStart"] = "dragstart";
    DragScrollEvents["DragMove"] = "dragmove";
    DragScrollEvents["DragEnd"] = "dragend";
})(DragScrollEvents || (DragScrollEvents = {}));
export default function dragToScrollX(element) {
    const state = {
        mousedown: false,
        initialMouse: 0,
        initialScroll: 0,
        moved: false,
        events: {
            [DragScrollEvents.DragStart]: [],
            [DragScrollEvents.DragMove]: [],
            [DragScrollEvents.DragEnd]: [],
        }
    };
    function invoke(event, e) {
        state.events[event].forEach(function (cb) {
            cb(e);
        });
    }
    function mouseDownHandler(e) {
        e.preventDefault();
        state.mousedown = true;
        state.initialScroll = element.scrollLeft;
        state.initialMouse = e.clientX;
        state.moved = false;
        invoke(DragScrollEvents.DragStart, e);
    }
    function mouseUpHandler(e) {
        state.mousedown = false;
        if (!state.moved)
            return;
        invoke(DragScrollEvents.DragEnd, e);
    }
    function clickHandler(e) {
        if (!state.moved)
            return;
        e.preventDefault();
        state.moved = false;
    }
    function mouseMoveHandler(e) {
        if (!state.mousedown)
            return;
        const diff = e.clientX - state.initialMouse;
        if (Math.abs(diff) < 20)
            return;
        element.scrollLeft = state.initialScroll - diff;
        state.moved = true;
        invoke(DragScrollEvents.DragMove, e);
    }
    element.addEventListener('mousedown', mouseDownHandler);
    window.addEventListener('mouseup', mouseUpHandler);
    window.addEventListener('click', clickHandler);
    window.addEventListener('mousemove', mouseMoveHandler);
    return {
        addEventListener(event, fn) {
            state.events[event].push(fn);
        },
        cleanup() {
            element.removeEventListener('mousedown', mouseDownHandler);
            window.removeEventListener('mouseup', mouseUpHandler);
            window.removeEventListener('click', clickHandler);
            window.removeEventListener('mousemove', mouseMoveHandler);
        }
    };
}