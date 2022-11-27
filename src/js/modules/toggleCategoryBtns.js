import toggleCategoryBtn from "./toggleCategoryBtn";

function toggleCategoryBtns() {
    toggleCategoryBtn('.back__favourite', 'back__favourite_active');
    toggleCategoryBtn('.short-list__buttons-button_favourite', 'short-list__buttons-button_favourite_active');
    toggleCategoryBtn('.short-list__buttons-button_cart', 'short-list__buttons-button_cart_active');
}

export default toggleCategoryBtns;