function toggleTabs({
    tabParentSelector, 
    tabHeaderSelector, 
    tabHeaderActiveClass, 
    tabItemSelector, 
    tabItemActiveClass, 
    event,
    scrollToTop}) {
    const tabParent = document.querySelector(tabParentSelector);
    const tabHeaders = document.querySelectorAll(tabHeaderSelector);
    const tabItems = document.querySelectorAll(tabItemSelector);

    tabParent.addEventListener(event, (e) => {
        if (e.target && e.target.closest(tabHeaderSelector)) {
            tabHeaders.forEach((tabHeader, i) => {
                if (e.target === tabHeader || e.target.closest(tabHeaderSelector) === tabHeader) {
                    if (tabHeaderActiveClass) {
                        tabHeaders.forEach(tabItem => {
                            tabItem.classList.remove(tabHeaderActiveClass);
                        })
                        tabHeaders[i].classList.add(tabHeaderActiveClass);
                    }

                    if (tabItems && tabItems.length > 0) {
                        tabItems.forEach(tabItem => {
                            tabItem.classList.remove(tabItemActiveClass);
                        });
                        tabItems[i].classList.add(tabItemActiveClass);
                    }

                    if (scrollToTop) {
                        window.scrollTo({
                            top: 0,
                            left: 0,
                            behavior: 'instant',
                        });
                    }
                }
            });
        }
    });
};

export default toggleTabs;