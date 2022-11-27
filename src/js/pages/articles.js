(() => {
    "use strict";
    const e = function ({headerSelector: e, headerActiveClass: t, openBtnSelector: c, closeBtnSelector: a, menuSelector: r, menuActiveClass: l}) {
            const s = document.querySelector(e), o = document.querySelector(c), i = document.querySelector(a),
                n = document.querySelector(r);
            o.addEventListener("click", (() => {
                function e() {
                    s.classList.remove(t), n.classList.remove(l), document.body.style.overflow = ""
                }

                s.classList.add(t), n.classList.add(l), document.body.style.overflow = "hidden", document.addEventListener("keydown", (t => {
                    "Escape" === t.code && n.classList.contains(l) && e()
                })), i.addEventListener("click", (() => {
                    e()
                })), document.addEventListener("click", (t => {
                    t.target && !t.target.closest(".header .menu") && e()
                }), !0)
            }))
        },
        t = function ({tabParentSelector: e, tabHeaderSelector: t, tabHeaderActiveClass: c, tabItemSelector: a, tabItemActiveClass: r, event: l, scrollToTop: s}) {
            const o = document.querySelector(e), i = document.querySelectorAll(t), n = document.querySelectorAll(a);
            o.addEventListener(l, (e => {
                e.target && e.target.closest(t) && i.forEach(((a, l) => {
                    e.target !== a && e.target.closest(t) !== a || (c && (i.forEach((e => {
                        e.classList.remove(c)
                    })), i[l].classList.add(c)), n && n.length > 0 && (n.forEach((e => {
                        e.classList.remove(r)
                    })), n[l].classList.add(r)), s && window.scrollTo({top: 0, left: 0, behavior: "instant"}))
                }))
            }))
        }, c = ["url('imgwebp/pages/main/assortment/", "url('imgwebp/pages/articles/bg/"],
        a = [[`${c[0]}festivalnie-shari.webp')`, `${c[0]}saluti.webp')`, `${c[0]}prof-saluti.webp')`, `${c[0]}fontani.webp')`, `${c[0]}raketi.webp')`, `${c[0]}petardi.webp')`, `${c[0]}rimskie-svetchi.webp')`, `${c[0]}bengalskie-ogni-i-hlopushki.webp')`], [`${c[1]}kto-takoi-pirotechnik.webp')`, `${c[1]}a-mi-smozhem.webp')`, `${c[1]}s-feerwerkami-na-ti.webp')`, `${c[1]}esli-zapretili.webp')`, `${c[1]}chto-nuzhno-znat-zaranee.webp')`, `${c[1]}plusi-i-minusi-tsvetnogo-dima.webp')`]],
        r = function ({formSelector: e, formInactiveClass: t, inputSelector: c, spinnerSelector: a, spinnerActiveClass: r, formTitleSelector: l, formTitleInactiveClass: s, messageSuccessSelector: o, messageErrorSelector: i, messageActiveClass: n, url: d}) {
            const m = document.querySelector(e), u = m.querySelectorAll(c), _ = document.querySelector(l),
                v = document.querySelector(a), b = document.querySelector(o), f = document.querySelector(i),
                S = m.querySelector(".form-token");
            m.addEventListener("submit", (function (e) {
                e.preventDefault(), S.value = "NOSPAM", s && _.classList.add(s), t && m.classList.add(t), v.classList.add(r);
                const c = new FormData(m);
                (async (e, t) => {
                    const c = await fetch(e, {method: "POST", body: t}), a = await c.json();
                    if (!a.status) throw new Error;
                    return a
                })(d, c).then((() => {
                    b.classList.add(n)
                })).catch((() => {
                    f.classList.add(n)
                })).finally((() => {
                    v.classList.remove(r), u.forEach((e => {
                        e.value = ""
                    }))
                }))
            }))
        };
    document.addEventListener("DOMContentLoaded", (() => {
        var c, l, s;
        (function () {
            function e() {
                let e = .01 * window.innerHeight;
                document.documentElement.style.setProperty("--vh", `${e}px`)
            }

            e(), window.addEventListener("resize", e)
        })(), document.documentElement.offsetWidth >= 992 ? (function () {
            const e = document.querySelector(".header__minimize"), t = document.querySelectorAll("[data-maximize]"),
                c = document.querySelector(".header__container"), a = "header__container_min",
                r = document.querySelectorAll(".header__min"), l = document.querySelectorAll(".header__max"),
                s = "header__active-elem", o = document.querySelectorAll("[data-modify]"), i = "header__small";
            e.addEventListener("click", (() => {
                c.classList.add(a), l.forEach((e => e.classList.remove(s))), r.forEach((e => e.classList.add(s))), o.forEach((e => e.classList.add(i)))
            })), t.forEach((e => {
                e.addEventListener("click", (() => {
                    c.classList.remove(a), r.forEach((e => e.classList.remove(s))), l.forEach((e => e.classList.add(s))), o.forEach((e => e.classList.remove(i)))
                }))
            }))
        }(), s = "[data-animate-fill]", document.querySelectorAll(s).forEach((e => {
            e.addEventListener("mousemove", (t => {
                const c = t.target.getBoundingClientRect(), a = t.clientX - c.left, r = t.clientY - c.top;
                e.style.setProperty("--x", a + "px"), e.style.setProperty("--y", r + "px")
            }))
        })), e({
            headerSelector: ".header_1920",
            headerActiveClass: "header_active",
            openBtnSelector: ".header_1920 .header__open",
            closeBtnSelector: ".header_1920 .menu__close",
            menuSelector: ".header_1920 .menu",
            menuActiveClass: "menu_active"
        }), t({
            tabParentSelector: ".articles__list",
            tabHeaderSelector: ".articles__item-btn ",
            tabHeaderActiveClass: "articles__item-btn_active",
            event: "click"
        }), t({
            tabParentSelector: ".articles__list",
            tabHeaderSelector: ".articles__item-btn",
            tabItemSelector: ".articles__tabs-item ",
            tabItemActiveClass: "articles__tabs-item_active",
            event: "click",
            scrollToTop: !0
        }), function (e, t, c, a, r) {
            const l = document.querySelector(t), s = document.querySelectorAll(c);
            l.addEventListener(r, (() => {
                s.forEach(((t, c) => {
                    t.classList.contains(a) && (l.style.backgroundImage = e[c])
                }))
            }))
        }(a[1], ".articles__container", ".articles__item-btn", "articles__item-btn_active", "click"), function () {
            const e = document.querySelectorAll(".article__buttons-button_prev"),
                t = document.querySelectorAll(".article__buttons-button_next"), c = "article__buttons-button_inactive";
            e[0].setAttribute("disabled", "disabled"), e[0].classList.add(c), t[t.length - 1].setAttribute("disabled", "disabled"), t[t.length - 1].classList.add(c);
            const r = document.querySelectorAll(".articles__item-btn"), l = "articles__item-btn_active",
                s = document.querySelectorAll(".articles__tabs-item"), o = "articles__tabs-item_active",
                i = document.querySelector(".articles__container");

            function n(e) {
                let t = document.querySelector(".articles__item-btn_active");
                t.classList.remove(l), r[e].classList.add(l), t = r[e];
                let c = document.querySelector(".articles__tabs-item_active");
                c.classList.remove(o), s[e].classList.add(o), c = s[e], i.style.backgroundImage = a[1][e], window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: "instant"
                })
            }

            t.forEach(((e, t) => {
                e.addEventListener("click", (() => {
                    n(t + 1)
                }))
            })), e.forEach(((e, t) => {
                e.addEventListener("click", (() => {
                    n(t - 1)
                }))
            }))
        }(), r({
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
        }), function () {
            const e = document.querySelectorAll(".articles__item-btn"), t = "articles__item-btn_active",
                c = document.querySelectorAll(".article_991"), a = "article_active",
                r = document.querySelectorAll(".article__close");
            e.forEach(((e, r) => {
                e.addEventListener("click", (() => {
                    e.classList.toggle(t), c[r].classList.toggle(a)
                }))
            })), r.forEach(((r, l) => {
                r.addEventListener("click", (() => {
                    e.forEach((e => e.classList.remove(t))), c[l].classList.remove(a)
                }))
            }))
        }(), r({
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
            const e = document.querySelectorAll(".article__nav-link"),
                t = document.querySelectorAll(".article__subtitle");
            e.forEach(((e, c) => {
                e.addEventListener("click", (() => {
                    window.scroll({
                        left: 0,
                        top: t[c].offsetTop - document.querySelector(".header_991").offsetHeight,
                        behavior: "smooth"
                    })
                }))
            }))
        }(), c = "[data-phone]", l = {mask: "+{7} (000) 000-00-00"}, Array.from(document.querySelectorAll(c)).forEach((e => {
            new IMask(e, l)
        }))
    }))
})();