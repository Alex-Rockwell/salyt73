function toggleHeaderMenu({
    headerSelector, 
    headerActiveClass, 
    openBtnSelector, 
    closeBtnSelector, 
    menuSelector, 
    menuActiveClass
}) {
    const header = document.querySelector(headerSelector);
    const openBtn = document.querySelector(openBtnSelector);
    const closeBtn = document.querySelector(closeBtnSelector);
    const menu = document.querySelector(menuSelector);

    openBtn.addEventListener('click', () => {
        header.classList.add(headerActiveClass);
        menu.classList.add(menuActiveClass);
        document.body.style.overflow = 'hidden';

        function close() {
            header.classList.remove(headerActiveClass);
            menu.classList.remove(menuActiveClass);
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', (e) => {
            if (e.code === "Escape" && menu.classList.contains(menuActiveClass)) {
                close();
            }
        });
    
        closeBtn.addEventListener('click', () => {
            close();
        });
    
        document.addEventListener('click', (e) => {
            if (e.target && !e.target.closest('.header .menu')) {
                close();
            }
        }, true);
    });
}

export default toggleHeaderMenu;