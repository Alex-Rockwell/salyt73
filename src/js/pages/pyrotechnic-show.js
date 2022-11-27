(() => {
    "use strict"    
    const e = function () {
            const e = document.querySelector(".overlay");
            new Swiper(".promo__swiper", {
                autoplay: {delay: 1e3}, direction: "vertical", loop: !0, on: {
                    afterInit() {
                        e.classList.add("overlay_inactive")
                    }
                }, speed: 0
            })
        },
        t = function ({headerSelector: e, headerActiveClass: t, openBtnSelector: o, closeBtnSelector: a, menuSelector: r, menuActiveClass: c}) {
            const l = document.querySelector(e), s = document.querySelector(o), n = document.querySelector(a),
                i = document.querySelector(r);
            if(s) {
                s.addEventListener("click", (() => {
                    function e() {
                        l.classList.remove(t), i.classList.remove(c), document.body.style.overflow = ""
                    }

                    l.classList.add(t), i.classList.add(c), document.body.style.overflow = "hidden", document.addEventListener("keydown", (t => {
                        "Escape" === t.code && i.classList.contains(c) && e()
                    })), n.addEventListener("click", (() => {
                        e()
                    })), document.addEventListener("click", (t => {
                        t.target && !t.target.closest(".header .menu") && e()
                    }), !0)
                }))
            }
        },
        o = function ({tabParentSelector: e, tabHeaderSelector: t, tabHeaderActiveClass: o, tabItemSelector: a, tabItemActiveClass: r, event: c, scrollToTop: l}) {
            const s = document.querySelector(e), n = document.querySelectorAll(t), i = document.querySelectorAll(a);
            if(s) {
                s.addEventListener(c, (e => {
                    e.target && e.target.closest(t) && n.forEach(((a, c) => {
                        e.target !== a && e.target.closest(t) !== a || (o && (n.forEach((e => {
                            e.classList.remove(o)
                        })), n[c].classList.add(o)), i && i.length > 0 && (i.forEach((e => {
                            e.classList.remove(r)
                        })), i[c].classList.add(r)), l && window.scrollTo({top: 0, left: 0, behavior: "instant"}))
                    }))
                }))
            }
        };
    const a = function ({modalSelector: e, modalActiveClass: t, modalBtnSelector: o, closeOnClickOnBg: a, overflow: r, hasScroll: c, automatically: l}) {
            document.querySelectorAll(o).forEach((o => {
                o.addEventListener("click", (() => {
                    (function ({modalSelector: e, modalActiveClass: t, overflow: o = "hidden", hasScroll: a = !0}) {
                        const r = document.querySelector(e);
                        let c;
                        a && (c = function () {
                            let e = document.createElement("div");
                            e.style.width = "50px", e.style.height = "50px", e.style.overflowY = "scroll", e.style.visibility = "hidden", document.body.appendChild(e);
                            let t = e.offsetWidth - e.clientWidth;
                            return e.remove(), t
                        }()), r.classList.add(t), document.body.style.overflow = o, document.body.style.marginRight = `${c}px`
                    })({
                        modalSelector: e,
                        modalActiveClass: t,
                        overflow: r,
                        hasScroll: c
                    }), function ({modalSelector: e, modalActiveClass: t, closeOnClickOnBg: o = !0, automatically: a = !1}) {
                        const r = document.querySelector(e);

                        function c() {
                            r.classList.remove(t), document.body.style.overflow = "", document.body.style.marginRight = 0
                        }

                        document.addEventListener("keydown", (e => {
                            "Escape" === e.code && r.classList.contains(t) && c()
                        })), r.addEventListener("click", (e => {
                            e.target.classList.contains("modal__close") && c()
                        })), o && document.addEventListener("click", (e => {
                            e.target === r && c()
                        })), a && c()
                    }({modalSelector: e, modalActiveClass: t, closeOnClickOnBg: a, automatically: l})
                }))
            }))
        },
        r = function ({formSelector: e, formInactiveClass: t, inputSelector: o, spinnerSelector: a, spinnerActiveClass: r, formTitleSelector: c, formTitleInactiveClass: l, messageSuccessSelector: s, messageErrorSelector: n, messageActiveClass: i, url: d}) {
            const m = document.querySelector(e), u = m.querySelectorAll(o), _ = document.querySelector(c),
                v = document.querySelector(a), p = document.querySelector(s), S = document.querySelector(n),
                f = m.querySelector(".form-token");
            m.addEventListener("submit", (function (e) {
                e.preventDefault(), f.value = "NOSPAM", l && _.classList.add(l), t && m.classList.add(t), v.classList.add(r);
                const o = new FormData(m);
                (async (e, t) => {
                    const o = await fetch(e, {method: "POST", body: t}), a = await o.json();
                    if (!a.status) throw new Error;
                    return a
                })(d, o).then((() => {
                    p.classList.add(i)
                })).catch((() => {
                    S.classList.add(i)
                })).finally((() => {
                    v.classList.remove(r), u.forEach((e => {
                        e.value = ""
                    }))
                }))
            }))
        };
    document.addEventListener("DOMContentLoaded", (() => {
        var c;
        !function () {
            function e() {
                let e = .01 * window.innerHeight;
                document.documentElement.style.setProperty("--vh", `${e}px`)
            }

            e(), window.addEventListener("resize", e)
        }(), IMask(document.getElementById("phone-mask"), {mask: "+{7}(000)000-00-00"}), document.documentElement.offsetWidth >= 992 ? (e(), t({
            headerSelector: ".header_1920",
            headerActiveClass: "header_active",
            openBtnSelector: ".header_1920 .header__open",
            closeBtnSelector: ".header_1920 .menu__close",
            menuSelector: ".header_1920 .menu",
            menuActiveClass: "menu_active"
        }), new Swiper(".wedding__swiper", {
            breakpoints: {
                320: {slidesPerView: 1},
                1200: {slidesPerView: 1.5},
                1440: {slidesPerView: 1.4}
            },
            navigation: {nextEl: ".wedding .swiper-button-next", prevEl: ".wedding .swiper-button-prev"},
            nested: !0,
            spaceBetween: 50,
            speed: 800
        }), new Swiper(".assortment__swiper", {
            breakpoints: {
                992: {slidesPerView: 2.2, spaceBetween: 20},
                1440: {slidesPerView: 1.2, spaceBetween: 20}
            },
            navigation: {
                nextEl: ".assortment__swiper .swiper-button-next",
                prevEl: ".assortment__swiper .swiper-button-prev"
            },
            speed: 800
        }), o({
            tabParentSelector: ".assortment__list",
            tabHeaderSelector: ".assortment__item-btn ",
            tabHeaderActiveClass: "assortment__item-btn_active",
            event: "mouseover"
        }), o({
            tabParentSelector: ".assortment__list",
            tabHeaderSelector: ".assortment__item-btn",
            tabItemSelector: ".assortment__tabs-item ",
            tabItemActiveClass: "assortment__tabs-item_active",
            event: "click"
        }), function (e, t, o) {
            const a = document.querySelectorAll(e), r = document.querySelectorAll(o);
            a.forEach(((e, o) => {
                e.addEventListener("click", (() => {
                    e.classList.add(t), r[o].setAttribute("controls", "controls")
                }))
            }))
        }(".assortment__video-wrapper", "assortment__video-wrapper_active", "[data-video]"), r({
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
        })) : (e(), t({
            headerSelector: ".header_991",
            headerActiveClass: "header_active",
            openBtnSelector: ".header_991 .header__open",
            closeBtnSelector: ".header_991 .menu__close",
            menuSelector: ".header_991 .menu",
            menuActiveClass: "menu_active"
        }), r({
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
        })), c = "[data-animate-fill]", document.querySelectorAll(c).forEach((e => {
            e.addEventListener("mousemove", (t => {
                const o = t.target.getBoundingClientRect(), a = t.clientX - o.left, r = t.clientY - o.top;
                e.style.setProperty("--x", a + "px"), e.style.setProperty("--y", r + "px")
            }))
        }));
        const l = new Swiper(".form__swiper", {
            navigation: {nextEl: ".form__swiper .swiper-button-next"},
            spaceBetween: 30,
            speed: 800
        });
        var s, n;
        document.querySelectorAll("[data-date]").forEach((e => {
            var t;
            e.value = `${(new Date).getFullYear()}-${t = (new Date).getMonth(),+t<9?`
        0$
            {
                t + 1
            }
            `:t+1===12?"01":t+1}-${function (e) {
                return +e < 9 ? `0${e}` : e
            }((new Date).getDate())}`
        })), 
        function () {
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
        }(), function () {
            const e = document.querySelector(".modal__list"),
                t = Array.from(document.querySelectorAll(".modal__checkbox-real")), o = [];
            t.forEach((e => o.push(e.closest(".modal__item")))), e.addEventListener("click", (e => {
                const a = e.target.closest(".modal__item"), r = t[o.indexOf(a)];
                e.target && a && (r.checked = !r.checked)
            }))
        }(), function (e) {
            document.querySelectorAll(".swiper-button-back").forEach((t => {
                t.addEventListener("click", (t => {
                    t.preventDefault(), e.slidePrev()
                }))
            }))
        }(l), function () {
            const e = document.querySelector(".modal__form"), t = e.querySelector(".swiper-button-next_1"),
                o = e.querySelector(".swiper-button-next_2"), a = e.querySelector(".modal__submit"),
                r = "swiper-button-next_enabled", c = e.querySelector(".modal__date"),
                l = e.querySelectorAll(".modal__item"), s = e.querySelector(".modal__user-name"),
                n = e.querySelector(".modal__user-phone");

            function i(e) {
                e.addEventListener("input", (() => {
                    "" !== s.value && 18 === n.value.length && a.classList.add(r)
                }))
            }

            c.addEventListener("change", (() => {
                t.classList.add(r)
            })), l.forEach((e => {
                e.addEventListener("click", (() => {
                    o.classList.add(r)
                }))
            })), i(s), i(n)
        }(), r({
            formSelector: ".modal__form",
            formInactiveClass: "modal__form_inactive",
            inputSelector: ".form__modal .modal__form-input",
            spinnerSelector: ".form__modal .spinner-wrapper",
            spinnerActiveClass: "spinner-wrapper_active",
            messageSuccessSelector: ".form__modal .modal__message_success",
            messageErrorSelector: ".form__modal .modal__message_error",
            messageActiveClass: "modal__message_active",
            url: "mailer/3stepform.php"
        }), a({
            modalSelector: ".form__modal",
            modalActiveClass: "modal_active",
            modalBtnSelector: ".wedding__button",
            hasScroll: !1
        }), a({
            modalSelector: ".form__modal",
            modalActiveClass: "modal_active",
            modalBtnSelector: ".final__button",
            hasScroll: !1
        }), s = "[data-phone]", n = {mask: "+{7} (000) 000-00-00"}, Array.from(document.querySelectorAll(s)).forEach((e => {
            new IMask(e, n)
        }))
    }))
})();
