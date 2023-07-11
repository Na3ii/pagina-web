export function connectPreviousButton(prev, state) {
    if (!prev) {
        return function () { };
    }
    function setClasses(item) {
        if (state.isFirstItem(item)) {
            prev.classList.add('disabled');
        }
        else {
            prev.classList.remove('disabled');
        }
    }
    // Initial State
    setClasses(state.current());
    state.addListener(setClasses);
    function clickHandler() {
        if (prev.classList.contains('disabled'))
            return;
        state.goTo(state.prev());
    }
    prev.addEventListener('click', clickHandler);
    // Cleanup
    return function () {
        // TODO: removeListener on state
        prev.removeEventListener('click', clickHandler);
    };
}
export function connectNextButton(next, state) {
    if (!next) {
        return function () { };
    }
    function setNextClasses(item) {
        if (state.isLastItem(item)) {
            next.classList.add('disabled');
        }
        else {
            next.classList.remove('disabled');
        }
    }
    // Initial State
    setNextClasses(state.current());
    state.addListener(setNextClasses);
    function clickHandler() {
        if (next.classList.contains('disabled'))
            return;
        state.goTo(state.next());
    }
    next.addEventListener('click', clickHandler);
    return function () {
        // TODO: removeListener on state
        next.removeEventListener('click', clickHandler);
    };
}