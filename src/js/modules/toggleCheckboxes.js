function toggleCheckboxes() {
    const parent = document.querySelector('.modal__list');
    const inputs = Array.from(document.querySelectorAll('.modal__checkbox-real'));
    const labels = [];
    inputs.forEach(input => labels.push(input.closest('.modal__item')));

    parent.addEventListener('click', (e) => {
        const activeLabel = e.target.closest('.modal__item');
        const activeCheckbox = inputs[labels.indexOf(activeLabel)];

        if (e.target && activeLabel) {
            activeCheckbox.checked = !activeCheckbox.checked;
        }
    });
}

export default toggleCheckboxes;