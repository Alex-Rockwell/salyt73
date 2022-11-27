function submitForm({
    formSelector, 
    formInactiveClass,
    inputSelector,
    spinnerSelector,
    spinnerActiveClass,
    formTitleSelector,
    formTitleInactiveClass,
    messageSuccessSelector, 
    messageErrorSelector, 
    messageActiveClass,
    url
}) {
    const form = document.querySelector(formSelector);
    const inputs = form.querySelectorAll(inputSelector);
    const formTitle = document.querySelector(formTitleSelector);
    const spinner = document.querySelector(spinnerSelector);
    const messageSuccess = document.querySelector(messageSuccessSelector);
    const messageError = document.querySelector(messageErrorSelector);
    const inputHidden = form.querySelector('.form-token');

    function initAntiSpam() {
        inputHidden.value = 'NOSPAM';
    }
    
    const postData = async (url, data) => {
        const response = await fetch(url, {
            method: "POST",
            body: data
        });

        const result = await response.json();

        if (!result.status) {
            throw new Error();
        } 

        return result;
    };

    const clearInputs = () => {
        inputs.forEach(input => {
            input.value = '';
        });
    };

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        initAntiSpam();

        if (formTitleInactiveClass) {
            formTitle.classList.add(formTitleInactiveClass);
        }
        
        if (formInactiveClass) {
            form.classList.add(formInactiveClass);
        }
        
        spinner.classList.add(spinnerActiveClass);
        
        const formData = new FormData(form);
        postData(url, formData)
            .then(() => {
                messageSuccess.classList.add(messageActiveClass);
            })
            .catch(() => {
                messageError.classList.add(messageActiveClass);
            })
            .finally(() => {
                spinner.classList.remove(spinnerActiveClass);
                clearInputs();
            });
    });
}

export default submitForm;

