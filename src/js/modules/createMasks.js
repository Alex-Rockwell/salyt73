function createMasks(selector, params) {
    Array.from(document.querySelectorAll(selector)).forEach(item => {
        new IMask(item, params);
    });
}

export default createMasks;