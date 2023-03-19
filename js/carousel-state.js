export default function createCarouselState(items) {
    // Ensure index is set properly
    items = items.map(function (item, index) {
        return Object.assign(Object.assign({}, item), { index });
    });
    const state = {
        currIndex: 0,
        stateChangeCallbacks: []
    };
    function current() {
        return items[state.currIndex];
    }
    function next() {
        return items[Math.min(state.currIndex + 1, items.length - 1)];
    }
    function prev() {
        return items[Math.max(0, state.currIndex - 1)];
    }
    function goTo(item) {
        state.currIndex = item.index;
        invoke();
    }
    function invoke() {
        state.stateChangeCallbacks.forEach(function (cb) {
            cb(current());
        });
    }
    function addListener(f) {
        state.stateChangeCallbacks.push(f);
    }
    function isLastItem(item) {
        return item.index == items.length - 1;
    }
    function isFirstItem(item) {
        return item.index == 0;
    }
    function dispose() {
        state.stateChangeCallbacks = [];
    }
    function first() {
        if (items.length > 0)
            return items[0];
        return null;
    }
    function last() {
        if (items.length > 0)
            return items[items.length - 1];
        return null;
    }
    function index(i) {
        if (i >= items.length || i < 0)
            return null;
        return items[i];
    }
    return {
        first,
        last,
        index,
        current,
        next,
        prev,
        goTo,
        addListener,
        isLastItem,
        isFirstItem,
        dispose,
    };
}
