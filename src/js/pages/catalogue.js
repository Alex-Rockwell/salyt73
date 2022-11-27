(() => {
    "use strict";
    const e = function ({headerSelector: e, headerActiveClass: t, openBtnSelector: s, closeBtnSelector: a, menuSelector: r, menuActiveClass: c}) {
            const o = document.querySelector(e), l = document.querySelector(s), n = document.querySelector(a),
                i = document.querySelector(r);
            l.addEventListener("click", (() => {
                function e() {
                    o.classList.remove(t), i.classList.remove(c), document.body.style.overflow = ""
                }

                o.classList.add(t), i.classList.add(c), document.body.style.overflow = "hidden", document.addEventListener("keydown", (t => {
                    "Escape" === t.code && i.classList.contains(c) && e()
                })), n.addEventListener("click", (() => {
                    e()
                })), document.addEventListener("click", (t => {
                    t.target && !t.target.closest(".header .menu") && e()
                }), !0)
            }))
        }, t = function (e, t) {
            document.querySelectorAll(e).forEach((e => {
                e.addEventListener("click", (() => {
                    e.classList.toggle(t)
                }))
            }))
        },
        s = function ({formSelector: e, formInactiveClass: t, inputSelector: s, spinnerSelector: a, spinnerActiveClass: r, formTitleSelector: c, formTitleInactiveClass: o, messageSuccessSelector: l, messageErrorSelector: n, messageActiveClass: i, url: d}) {
            const _ = document.querySelector(e), u = _.querySelectorAll(s), m = document.querySelector(c),
                p = document.querySelector(a), v = document.querySelector(l), w = document.querySelector(n),
                S = _.querySelector(".form-token");
            _.addEventListener("submit", (function (e) {
                e.preventDefault(), S.value = "NOSPAM", o && m.classList.add(o), t && _.classList.add(t), p.classList.add(r);
                const s = new FormData(_);
                (async (e, t) => {
                    const s = await fetch(e, {method: "POST", body: t}), a = await s.json();
                    if (!a.status) throw new Error;
                    return a
                })(d, s).then((() => {
                    v.classList.add(i)
                })).catch((() => {
                    w.classList.add(i)
                })).finally((() => {
                    p.classList.remove(r), u.forEach((e => {
                        e.value = ""
                    }))
                }))
            }))
        };
    document.addEventListener("DOMContentLoaded", (() => {
        var a, r, c;
        (function () {
            function e() {
                let e = .01 * window.innerHeight;
                document.documentElement.style.setProperty("--vh", `${e}px`)
            }

            e(), window.addEventListener("resize", e)
        })(), document.documentElement.offsetWidth >= 992 ? (e({
            headerSelector: ".header_1920",
            headerActiveClass: "header_active",
            openBtnSelector: ".header_1920 .header__open",
            closeBtnSelector: ".header_1920 .menu__close",
            menuSelector: ".header_1920 .menu",
            menuActiveClass: "menu_active"
        }), s({
            formSelector: ".callback__form",
            formInactiveClass: "callback__form_inactive",
            inputSelector: ".callback__form-input",
            spinnerSelector: ".callback .spinner-wrapper",
            spinnerActiveClass: "spinner-wrapper_active",
            formTitleSelector: ".callback__title",
            formTitleInactiveClass: "callback__title_inactive",
            messageSuccessSelector: ".callback__message_success",
            messageErrorSelector: ".callback__message_error",
            messageActiveClass: "callback__message_active",
            url: "mailer/callback.php"
        })) : (e({
            headerSelector: ".header_991",
            headerActiveClass: "header_active",
            openBtnSelector: ".header_991 .header__open",
            closeBtnSelector: ".header_991 .menu__close",
            menuSelector: ".header_991 .menu",
            menuActiveClass: "menu_active"
        }), s({
            formSelector: ".footer .callback__form",
            formInactiveClass: "callback__form_inactive",
            inputSelector: ".footer .callback__form-input",
            spinnerSelector: ".footer .callback .spinner-wrapper",
            spinnerActiveClass: "spinner-wrapper_active",
            formTitleSelector: ".footer .callback__title",
            formTitleInactiveClass: "callback__title_inactive",
            messageSuccessSelector: ".footer .callback__message_success",
            messageErrorSelector: ".footer .callback__message_error",
            messageActiveClass: "callback__message_active",
            url: "mailer/callback.php"
        })), new Swiper(".novelties__swiper", {
            breakpoints: {
                320: {slidesPerView: 1.2, spaceBetween: 10},
                576: {slidesPerView: 1.5, spaceBetween: 15},
                768: {slidesPerView: 2.3, spaceBetween: 20},
                992: {slidesPerView: 2, spaceBetween: 20},
                1200: {slidesPerView: 2, spaceBetween: 40},
                1920: {slidesPerView: 4}
            },
            loop: !0,
            navigation: {nextEl: ".tabs__swiper-arrow_next-novelties", prevEl: ".tabs__swiper-arrow_prev-novelties"},
            speed: 800
        }), new Swiper(".hit__swiper", {
            breakpoints: {
                320: {slidesPerView: 1.2, spaceBetween: 10},
                576: {slidesPerView: 1.5, spaceBetween: 15},
                768: {slidesPerView: 2.3, spaceBetween: 20},
                992: {slidesPerView: 2, spaceBetween: 20},
                1200: {slidesPerView: 2, spaceBetween: 40},
                1920: {slidesPerView: 4}
            },
            loop: !0,
            navigation: {nextEl: ".tabs__swiper-arrow_next-hit", prevEl: ".tabs__swiper-arrow_prev-hit"},
            speed: 800
        }), new Swiper(".sale__swiper", {
            breakpoints: {
                320: {slidesPerView: 1.2, spaceBetween: 10},
                576: {slidesPerView: 1.5, spaceBetween: 15},
                768: {slidesPerView: 2.3, spaceBetween: 20},
                992: {slidesPerView: 2, spaceBetween: 20},
                1200: {slidesPerView: 2, spaceBetween: 40},
                1920: {slidesPerView: 4}
            },
            loop: !0,
            navigation: {nextEl: ".tabs__swiper-arrow_next-sale", prevEl: ".tabs__swiper-arrow_prev-sale"},
            speed: 800
        }), t(".short-list__buttons-button_favourite", "short-list__buttons-button_favourite_active"), t(".short-list__buttons-button_cart", "short-list__buttons-button_cart_active"), c = "[data-animate-fill]", document.querySelectorAll(c).forEach((e => {
            e.addEventListener("mousemove", (t => {
                const s = t.target.getBoundingClientRect(), a = t.clientX - s.left, r = t.clientY - s.top;
                e.style.setProperty("--x", a + "px"), e.style.setProperty("--y", r + "px")
            }))
        })), function ({tabParentSelector: e, tabHeaderSelector: t, tabHeaderActiveClass: s, tabItemSelector: a, tabItemActiveClass: r, event: c, scrollToTop: o}) {
            const l = document.querySelector(e), n = document.querySelectorAll(t), i = document.querySelectorAll(a);
            l.addEventListener(c, (e => {
                e.target && e.target.closest(t) && n.forEach(((a, c) => {
                    e.target !== a && e.target.closest(t) !== a || (s && (n.forEach((e => {
                        e.classList.remove(s)
                    })), n[c].classList.add(s)), i && i.length > 0 && (i.forEach((e => {
                        e.classList.remove(r)
                    })), i[c].classList.add(r)), o && window.scrollTo({top: 0, left: 0, behavior: "instant"}))
                }))
            }))
        }({
            tabParentSelector: ".tabs .tabheader__list",
            tabHeaderSelector: ".tabs .tabheader__button",
            tabHeaderActiveClass: "tabheader__button_active",
            tabItemSelector: ".tabs .tabcontent__item",
            tabItemActiveClass: "tabcontent__item_active",
            event: "click"
        }), function () {
            const e = document.querySelector(".catalogue__list");
            e && e.addEventListener("click", (e => {
                const t = e.target.closest(".catalogue__link");
                e.target && t && localStorage.setItem("category", e.target.textContent)
            }));
            const t = document.querySelector(".assortment");
            t && t.addEventListener("click", (e => {
                const t = e.target.closest(".assortment__info-link");
                if (e.target && t) {
                    const e = t.dataset.category;
                    localStorage.setItem("category", e)
                }
            }))
        }(), a = "[data-phone]", r = {mask: "+{7} (000) 000-00-00"}, Array.from(document.querySelectorAll(a)).forEach((e => {
            new IMask(e, r)
        }))
    }))
})();