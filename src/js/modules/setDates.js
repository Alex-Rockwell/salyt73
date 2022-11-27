function setDates() {
    const inputs = document.querySelectorAll('[data-date]');

    function transformMonth(str) {
        return +str < 9
            ? `0${str + 1}`
            : str + 1 === 12
            ? `01`
            : str + 1;
    }

    function transformDate(str) {
        return +str < 9
            ? `0${str}`
            : str;
    }

    inputs.forEach(input => {
        input.value = `${new Date().getFullYear()}-${transformMonth(new Date().getMonth())}-${transformDate(new Date().getDate())}`;
    });
};


export default setDates;