(() => {
    "use strict";
    const e = function ({headerSelector: e, headerActiveClass: t, openBtnSelector: c, closeBtnSelector: l, menuSelector: o, menuActiveClass: a}) {
        const r = document.querySelector(e), s = document.querySelector(c), n = document.querySelector(l),
            i = document.querySelector(o);
        s.addEventListener("click", (() => {
            function e() {
                r.classList.remove(t), i.classList.remove(a), document.body.style.overflow = ""
            }

            r.classList.add(t), i.classList.add(a), document.body.style.overflow = "hidden", document.addEventListener("keydown", (t => {
                "Escape" === t.code && i.classList.contains(a) && e()
            })), n.addEventListener("click", (() => {
                e()
            })), document.addEventListener("click", (t => {
                t.target && !t.target.closest(".header .menu") && e()
            }), !0)
        }))
    };
    const t = function ({modalSelector: e, modalActiveClass: t, modalBtnSelector: c, closeOnClickOnBg: l, overflow: o, hasScroll: a, automatically: r}) {
            document.querySelectorAll(c).forEach((c => {
                c.addEventListener("click", (() => {
                    (function ({modalSelector: e, modalActiveClass: t, overflow: c = "hidden", hasScroll: l = !0}) {
                        const o = document.querySelector(e);
                        let a;
                        l && (a = function () {
                            let e = document.createElement("div");
                            e.style.width = "50px", e.style.height = "50px", e.style.overflowY = "scroll", e.style.visibility = "hidden", document.body.appendChild(e);
                            let t = e.offsetWidth - e.clientWidth;
                            return e.remove(), t
                        }()), o.classList.add(t), document.body.style.overflow = c, document.body.style.marginRight = `${a}px`
                    })({
                        modalSelector: e,
                        modalActiveClass: t,
                        overflow: o,
                        hasScroll: a
                    }), function ({modalSelector: e, modalActiveClass: t, closeOnClickOnBg: c = !0, automatically: l = !1}) {
                        const o = document.querySelector(e);

                        function a() {
                            o.classList.remove(t), document.body.style.overflow = "", document.body.style.marginRight = 0
                        }

                        document.addEventListener("keydown", (e => {
                            "Escape" === e.code && o.classList.contains(t) && a()
                        })), o.addEventListener("click", (e => {
                            e.target.classList.contains("modal__close") && a()
                        })), c && document.addEventListener("click", (e => {
                            e.target === o && a()
                        })), l && a()
                    }({modalSelector: e, modalActiveClass: t, closeOnClickOnBg: l, automatically: r})
                }))
            }))
        },
        c = function ({formSelector: e, formInactiveClass: t, inputSelector: c, spinnerSelector: l, spinnerActiveClass: o, formTitleSelector: a, formTitleInactiveClass: r, messageSuccessSelector: s, messageErrorSelector: n, messageActiveClass: i, url: d}) {
            const m = document.querySelector(e), u = m.querySelectorAll(c), _ = document.querySelector(a),
                v = document.querySelector(l), S = document.querySelector(s), f = document.querySelector(n),
                p = m.querySelector(".form-token");
            m.addEventListener("submit", (function (e) {
                e.preventDefault(), p.value = "NOSPAM", r && _.classList.add(r), t && m.classList.add(t), v.classList.add(o);
                const c = new FormData(m);
                (async (e, t) => {
                    const c = await fetch(e, {method: "POST", body: t}), l = await c.json();
                    if (!l.status) throw new Error;
                    return l
                })(d, c).then((() => {
                    S.classList.add(i)
                })).catch((() => {
                    f.classList.add(i)
                })).finally((() => {
                    v.classList.remove(o), u.forEach((e => {
                        e.value = ""
                    }))
                }))
            }))
        };
    document.addEventListener("DOMContentLoaded", (() => {
        var l, o, a;
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
        }), c({
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
        }), c({
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
        })), a = "[data-animate-fill]", document.querySelectorAll(a).forEach((e => {
            e.addEventListener("mousemove", (t => {
                const c = t.target.getBoundingClientRect(), l = t.clientX - c.left, o = t.clientY - c.top;
                e.style.setProperty("--x", l + "px"), e.style.setProperty("--y", o + "px")
            }))
        })), t({
            modalSelector: ".review__modal",
            modalActiveClass: "modal_active",
            modalBtnSelector: ".reviews__button"
        }), c({
            formSelector: ".modal__form",
            formInactiveClass: "modal__form_inactive",
            inputSelector: ".modal__form-input",
            spinnerSelector: ".review__modal .spinner-wrapper",
            spinnerActiveClass: "spinner-wrapper_active",
            formTitleSelector: ".modal__text",
            formTitleInactiveClass: "modal__text_inactive",
            messageSuccessSelector: ".modal__message_success",
            messageErrorSelector: ".modal__message_error",
            messageActiveClass: "modal__message_active",
            url: "mailer/review.php"
        }), l = "[data-phone]", o = {mask: "+{7} (000) 000-00-00"}, Array.from(document.querySelectorAll(l)).forEach((e => {
            new IMask(e, o)
        }))
    }))
})();