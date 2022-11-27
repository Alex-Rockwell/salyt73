(() => {
    "use strict";
    const e = function (e, t) {
            document.querySelectorAll(e).forEach((e => {
                e.textContent = function (e, t) {
                    return e.length > t ? `${e.substring(0, t)}...` : e
                }(e.textContent, t)
            }))
        },
        t = function ({headerSelector: e, headerActiveClass: t, openBtnSelector: c, closeBtnSelector: o, menuSelector: l, menuActiveClass: s}) {
            const a = document.querySelector(e), r = document.querySelector(c), n = document.querySelector(o),
                i = document.querySelector(l);
            r.addEventListener("click", (() => {
                function e() {
                    a.classList.remove(t), i.classList.remove(s), document.body.style.overflow = ""
                }

                a.classList.add(t), i.classList.add(s), document.body.style.overflow = "hidden", document.addEventListener("keydown", (t => {
                    "Escape" === t.code && i.classList.contains(s) && e()
                })), n.addEventListener("click", (() => {
                    e()
                })), document.addEventListener("click", (t => {
                    t.target && !t.target.closest(".header .menu") && e()
                }), !0)
            }))
        }, c = function (e, t) {
            document.querySelectorAll(e).forEach((e => {
                e.addEventListener("click", (() => {
                    e.classList.toggle(t)
                }))
            }))
        };
    const o = function ({modalSelector: e, modalActiveClass: t, modalBtnSelector: c, closeOnClickOnBg: o, overflow: l, hasScroll: s, automatically: a}) {
            document.querySelectorAll(c).forEach((c => {
                c.addEventListener("click", (() => {
                    (function ({modalSelector: e, modalActiveClass: t, overflow: c = "hidden", hasScroll: o = !0}) {
                        const l = document.querySelector(e);
                        let s;
                        o && (s = function () {
                            let e = document.createElement("div");
                            e.style.width = "50px", e.style.height = "50px", e.style.overflowY = "scroll", e.style.visibility = "hidden", document.body.appendChild(e);
                            let t = e.offsetWidth - e.clientWidth;
                            return e.remove(), t
                        }()), l.classList.add(t), document.body.style.overflow = c, document.body.style.marginRight = `${s}px`
                    })({
                        modalSelector: e,
                        modalActiveClass: t,
                        overflow: l,
                        hasScroll: s
                    }), function ({modalSelector: e, modalActiveClass: t, closeOnClickOnBg: c = !0, automatically: o = !1}) {
                        const l = document.querySelector(e);

                        function s() {
                            l.classList.remove(t), document.body.style.overflow = "", document.body.style.marginRight = 0
                        }

                        document.addEventListener("keydown", (e => {
                            "Escape" === e.code && l.classList.contains(t) && s()
                        })), l.addEventListener("click", (e => {
                            e.target.classList.contains("modal__close") && s()
                        })), c && document.addEventListener("click", (e => {
                            e.target === l && s()
                        })), o && s()
                    }({modalSelector: e, modalActiveClass: t, closeOnClickOnBg: o, automatically: a})
                }))
            }))
        },
        l = function ({formSelector: e, formInactiveClass: t, inputSelector: c, spinnerSelector: o, spinnerActiveClass: l, formTitleSelector: s, formTitleInactiveClass: a, messageSuccessSelector: r, messageErrorSelector: n, messageActiveClass: i, url: d}) {
            const m = document.querySelector(e), u = m.querySelectorAll(c), _ = document.querySelector(s),
                v = document.querySelector(o), S = document.querySelector(r), f = document.querySelector(n),
                h = m.querySelector(".form-token");
            m.addEventListener("submit", (function (e) {
                e.preventDefault(), h.value = "NOSPAM", a && _.classList.add(a), t && m.classList.add(t), v.classList.add(l);
                const c = new FormData(m);
                (async (e, t) => {
                    const c = await fetch(e, {method: "POST", body: t}), o = await c.json();
                    if (!o.status) throw new Error;
                    return o
                })(d, c).then((() => {
                    S.classList.add(i)
                })).catch((() => {
                    f.classList.add(i)
                })).finally((() => {
                    v.classList.remove(l), u.forEach((e => {
                        e.value = ""
                    }))
                }))
            }))
        };
    document.addEventListener("DOMContentLoaded", (() => {
        var s, a, r;
        (function () {
            function e() {
                let e = .01 * window.innerHeight;
                document.documentElement.style.setProperty("--vh", `${e}px`)
            }

            e(), window.addEventListener("resize", e)
        })(), function () {
            const e = document.querySelector(".select__current"), t = document.querySelector(".section-title"),
                c = document.querySelector(".breadcrumbs__current"), o = document.querySelectorAll(".category__item"),
                l = "category__item_active", s = localStorage.getItem("category");
            document.title = `Салют73 — Каталог — ${s}`, e.textContent = s, t.textContent = s, c.textContent = s, o.forEach((e => {
                e.dataset.category === s ? e.classList.add(l) : e.classList.remove(l)
            }))
        }(), e(".back__title", 30), document.documentElement.offsetWidth >= 992 ? (e(".short-list__title", 30), c(".back__favourite", "back__favourite_active"), c(".short-list__buttons-button_favourite", "short-list__buttons-button_favourite_active"), c(".short-list__buttons-button_cart", "short-list__buttons-button_cart_active"), t({
            headerSelector: ".header_1920",
            headerActiveClass: "header_active",
            openBtnSelector: ".header_1920 .header__open",
            closeBtnSelector: ".header_1920 .menu__close",
            menuSelector: ".header_1920 .menu",
            menuActiveClass: "menu_active"
        }), l({
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
        }), function () {
            const e = document.querySelectorAll(".main-list__item");
            document.addEventListener("mousemove", (() => {
                e.forEach((t => {
                    t.addEventListener("mouseenter", (() => {
                        e.forEach((e => {
                            e.classList.remove("main-list__item_active")
                        })), t.classList.add("main-list__item_active"), document.addEventListener("click", (e => {
                            e.target.closest(".main-list__item") || e.target.closest(".fslightbox-container") || t.classList.remove("main-list__item_active")
                        }))
                    }))
                }))
            }))
        }()) : (t({
            headerSelector: ".header_991",
            headerActiveClass: "header_active",
            openBtnSelector: ".header_991 .header__open",
            closeBtnSelector: ".header_991 .menu__close",
            menuSelector: ".header_991 .menu",
            menuActiveClass: "menu_active"
        }), l({
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
        })), function () {
            const e = document.querySelectorAll(".main-list"), t = "main-list_active",
                c = document.querySelectorAll(".short-list"), o = "short-list_active";
            window.addEventListener("resize", (() => {
                document.documentElement.offsetWidth <= 991 && (e.forEach((e => {
                    e.classList.contains(t) || e.classList.add(t)
                })), c.forEach((e => {
                    e.classList.contains(o) && e.classList.remove(o)
                })))
            }))
        }(), r = "[data-animate-fill]", document.querySelectorAll(r).forEach((e => {
            e.addEventListener("mousemove", (t => {
                const c = t.target.getBoundingClientRect(), o = t.clientX - c.left, l = t.clientY - c.top;
                e.style.setProperty("--x", o + "px"), e.style.setProperty("--y", l + "px")
            }))
        })), function ({selectSelector: e, selectActiveClass: t, selectHeaderSelector: c, selectHeaderActiveClass: o, selectCurrentSelector: l, selectItemSelector: s}) {
            const a = document.querySelector(e), r = document.querySelector(c), n = document.querySelector(l),
                i = document.querySelectorAll(s), d = document.querySelector(".section-title"),
                m = document.querySelector(".breadcrumbs__current");

            function u() {
                a.classList.remove(t), r.classList.remove(o)
            }

            n.addEventListener("click", (() => {
                a.classList.toggle(t), r.classList.toggle(o), document.addEventListener("click", (t => {
                    t.target.closest(e) || u()
                }))
            })), i.forEach((e => {
                e.addEventListener("click", (() => {
                    const t = e.textContent;
                    localStorage.setItem("category", t), document.title = `Салют73 — Каталог — ${t}`, n.textContent = t, d.textContent = t, m.textContent = t, u()
                }))
            }))
        }({
            selectSelector: ".category .select",
            selectActiveClass: "select_active",
            selectHeaderSelector: ".category .select__header",
            selectHeaderActiveClass: "select__header_active",
            selectCurrentSelector: ".category .select__current",
            selectItemSelector: ".category .select__item-button"
        }), function () {
            const e = document.querySelectorAll(".main-list"), t = "main-list_active",
                c = document.querySelectorAll(".short-list"), o = "short-list_active",
                l = document.querySelectorAll(".view__item-button"), s = "view__item-button_active";
            l.forEach((a => {
                a.addEventListener("click", (() => {
                    l.forEach((e => e.classList.remove(s))), a.classList.add(s), a.classList.contains("view__item-button_main") && (e.forEach((e => e.classList.add(t))), c.forEach((e => e.classList.remove(o)))), a.classList.contains("view__item-button_short") && (c.forEach((e => e.classList.add(o))), e.forEach((e => e.classList.remove(t))))
                }))
            }))
        }(), function ({tabParentSelector: e, tabHeaderSelector: t, tabHeaderActiveClass: c, tabItemSelector: o, tabItemActiveClass: l, event: s, scrollToTop: a}) {
            const r = document.querySelector(e), n = document.querySelectorAll(t), i = document.querySelectorAll(o);
            r.addEventListener(s, (e => {
                e.target && e.target.closest(t) && n.forEach(((o, s) => {
                    e.target !== o && e.target.closest(t) !== o || (c && (n.forEach((e => {
                        e.classList.remove(c)
                    })), n[s].classList.add(c)), i && i.length > 0 && (i.forEach((e => {
                        e.classList.remove(l)
                    })), i[s].classList.add(l)), a && window.scrollTo({top: 0, left: 0, behavior: "instant"}))
                }))
            }))
        }({
            tabParentSelector: ".select",
            tabHeaderSelector: ".select__item-button",
            tabItemSelector: ".category__item",
            tabItemActiveClass: "category__item_active",
            event: "click"
        }), o({
            modalSelector: ".more__modal",
            modalActiveClass: "modal_active",
            modalBtnSelector: ".back__more"
        }), s = "[data-phone]", a = {mask: "+{7} (000) 000-00-00"}, Array.from(document.querySelectorAll(s)).forEach((e => {
            new IMask(e, a)
        }))
    }))
})();