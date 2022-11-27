(() => {
    "use strict";
    const e = function ({headerSelector: e, headerActiveClass: t, openBtnSelector: c, closeBtnSelector: r, menuSelector: a, menuActiveClass: o}) {
            const s = document.querySelector(e), l = document.querySelector(c), n = document.querySelector(r),
                i = document.querySelector(a);
            l.addEventListener("click", (() => {
                function e() {
                    s.classList.remove(t), i.classList.remove(o), document.body.style.overflow = ""
                }

                s.classList.add(t), i.classList.add(o), document.body.style.overflow = "hidden", document.addEventListener("keydown", (t => {
                    "Escape" === t.code && i.classList.contains(o) && e()
                })), n.addEventListener("click", (() => {
                    e()
                })), document.addEventListener("click", (t => {
                    t.target && !t.target.closest(".header .menu") && e()
                }), !0)
            }))
        },
        t = function ({formSelector: e, formInactiveClass: t, inputSelector: c, spinnerSelector: r, spinnerActiveClass: a, formTitleSelector: o, formTitleInactiveClass: s, messageSuccessSelector: l, messageErrorSelector: n, messageActiveClass: i, url: d}) {
            const m = document.querySelector(e), u = m.querySelectorAll(c), _ = document.querySelector(o),
                f = document.querySelector(r), v = document.querySelector(l), S = document.querySelector(n),
                p = m.querySelector(".form-token");
            m.addEventListener("submit", (function (e) {
                e.preventDefault(), p.value = "NOSPAM", s && _.classList.add(s), t && m.classList.add(t), f.classList.add(a);
                const c = new FormData(m);
                (async (e, t) => {
                    const c = await fetch(e, {method: "POST", body: t}), r = await c.json();
                    if (!r.status) throw new Error;
                    return r
                })(d, c).then((() => {
                    v.classList.add(i)
                })).catch((() => {
                    S.classList.add(i)
                })).finally((() => {
                    f.classList.remove(a), u.forEach((e => {
                        e.value = ""
                    }))
                }))
            }))
        };
    document.addEventListener("DOMContentLoaded", (() => {
        var c, r, a;
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
        }), t({
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
        }), t({
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
            const e = Array.from(document.querySelectorAll(".portfolio__item")), t = "portfolio__item_active",
                c = document.querySelector(".portfolio__more");
            for (let c = 0; c < 20; c++) e[c].classList.add(t);
            c.addEventListener("click", (() => {
                e.forEach((e => {
                    e.classList.contains(t) || e.classList.add(t)
                })), c.classList.add("portfolio__more_inactive")
            }))
        }(), a = "[data-animate-fill]", document.querySelectorAll(a).forEach((e => {
            e.addEventListener("mousemove", (t => {
                const c = t.target.getBoundingClientRect(), r = t.clientX - c.left, a = t.clientY - c.top;
                e.style.setProperty("--x", r + "px"), e.style.setProperty("--y", a + "px")
            }))
        })), c = "[data-phone]", r = {mask: "+{7} (000) 000-00-00"}, Array.from(document.querySelectorAll(c)).forEach((e => {
            new IMask(e, r)
        }))
    }))
})();