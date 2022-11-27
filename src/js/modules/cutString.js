function cut(text, number) {
    return text.length > number 
        ? `${text.substring(0, number)}...`
        : text;
}

function cutString(selector, number) {
    document.querySelectorAll(selector).forEach(item => {
        item.textContent = cut(item.textContent, number);
    });
}

export default cutString;