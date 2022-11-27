(() => {
    "use strict";
    const e = function ({headerSelector: e, headerActiveClass: t, openBtnSelector: c, closeBtnSelector: a, menuSelector: r, menuActiveClass: o}) {
            const s = document.querySelector(e), l = document.querySelector(c), n = document.querySelector(a),
                i = document.querySelector(r);
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
        t = function ({formSelector: e, formInactiveClass: t, inputSelector: c, spinnerSelector: a, spinnerActiveClass: r, formTitleSelector: o, formTitleInactiveClass: s, messageSuccessSelector: l, messageErrorSelector: n, messageActiveClass: i, url: m}) {
            const d = document.querySelector(e), u = d.querySelectorAll(c), _ = document.querySelector(o),
                f = document.querySelector(a), v = document.querySelector(l), S = document.querySelector(n),
                p = d.querySelector(".form-token");
            d.addEventListener("submit", (function (e) {
                e.preventDefault(), p.value = "NOSPAM", s && _.classList.add(s), t && d.classList.add(t), f.classList.add(r);
                const c = new FormData(d);
                (async (e, t) => {
                    const c = await fetch(e, {method: "POST", body: t}), a = await c.json();
                    if (!a.status) throw new Error;
                    return a
                })(m, c).then((() => {
                    v.classList.add(i)
                })).catch((() => {
                    S.classList.add(i)
                })).finally((() => {
                    f.classList.remove(r), u.forEach((e => {
                        e.value = ""
                    }))
                }))
            }))
        };
    document.addEventListener("DOMContentLoaded", (() => {
        var c, a, r;
        (function () {
            function e() {
                let e = .01 * window.innerHeight;
                document.documentElement.style.setProperty("--vh", `${e}px`)
            }

            e(), window.addEventListener("resize", e)
        })(), ymaps.ready((function () {
            const e = new ymaps.Map("contacts__map", {center: [54.323945, 48.50883], zoom: 11}),
                t = new ymaps.Placemark([54.383945, 48.59883], {}, {
                    iconLayout: "default#image",
                    iconImageHref: "../../../dist/img/blocks/contacts/firework.svg",
                    iconImageSize: [33.75, 42]
                }), c = new ymaps.Placemark([54.282797, 48.307776], {}, {
                    iconLayout: "default#image",
                    iconImageHref: "../../../dist/img/blocks/contacts/firework.svg",
                    iconImageSize: [33.75, 42]
                }), a = new ymaps.Placemark([54.370179, 48.573587], {}, {
                    iconLayout: "default#image",
                    iconImageHref: "../../../dist/img/blocks/contacts/firework.svg",
                    iconImageSize: [33.75, 42]
                }), r = new ymaps.Placemark([54.355338, 48.85405], {}, {
                    iconLayout: "default#image",
                    iconImageHref: "../../../dist/img/blocks/contacts/firework.svg",
                    iconImageSize: [33.75, 42]
                });
            e.geoObjects.add(t).add(c).add(a).add(r)
        })), document.documentElement.offsetWidth >= 992 ? (e({
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
        })), r = "[data-animate-fill]", document.querySelectorAll(r).forEach((e => {
            e.addEventListener("mousemove", (t => {
                const c = t.target.getBoundingClientRect(), a = t.clientX - c.left, r = t.clientY - c.top;
                e.style.setProperty("--x", a + "px"), e.style.setProperty("--y", r + "px")
            }))
        })), c = "[data-phone]", a = {mask: "+{7} (000) 000-00-00"}, Array.from(document.querySelectorAll(c)).forEach((e => {
            new IMask(e, a)
        }))
    }))
})();