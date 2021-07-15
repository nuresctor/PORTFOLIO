let metaSoftTheme;
! function(e, t) {
    "use strict";
    (metaSoftTheme ={
        eventID: "metaSoftTheme",
        $document: e(document),
        $window: e(window),
        $body: e("body"),
        classes: {
            isOverlay: "overlay-enabled",
            collapsed: "collapsed",
            mainHeaderMenuActive: "header-menu-active",
            searchPopUpActive: "header-search-active"
        },
        init: function() {
            this.$document.on("ready", this.documentIsReady.bind(this)),
            this.$document.on("ready", this.mobileMainMenuClone.bind(this)),
            this.$document.on("ready", this.autoHeightSetOnHeader.bind(this)),
            this.$document.on("ready", this.autoHeightBreadcrumbMenu.bind(this)),
            this.$window.on("ready", this.documentIsReady.bind(this))
        },
        documentIsReady: function() {
            this.$document
                .on("click." + this.eventID, ".menu-collapsed", this.mainMenuCollapse.bind(this))
                .on("click." + this.eventID, ".header-close-menu", this.mainMenuCollapse.bind(this))
                .on("click." + this.eventID, this.mainMenuHideMobilePopup.bind(this))
                .on("click." + this.eventID, ".mobile-collapsed", this.mobileSubMenuCollapse.bind(this))
                .on("click." + this.eventID, ".header-close-menu", this.resetMobileMenuCollapse.bind(this))
                .on("mainMenuHideMobilePopup." + this.eventID, this.resetMobileMenuCollapse.bind(this))
                .on("resize." + this.eventID, this.autoHeightSetOnHeader.bind(this))
                .on("resize." + this.eventID, this.autoHeightBreadcrumbMenu.bind(this))
                .on("click." + this.eventID, ".header-search-toggle", this.searchPopUpToggle.bind(this))
                .on("click." + this.eventID, ".header-search-close", this.searchPopUpToggle.bind(this))
                .on("click." + this.eventID, ".scrollingUp", this.scrollingAnimate.bind(this)),

            this.$window
                .on("load." + this.eventID, this.preloader.bind(this))
                .on("scroll." + this.eventID, this.scrollToSticky.bind(this))
                .on("scroll." + this.eventID, this.scrollingUp.bind(this))
                .on("load." + this.eventID, this.mobileMainMenuRightClone.bind(this))
                .on("load." + this.eventID, this.MainMenuFocusAccessibility.bind(this))
                .on("load." + this.eventID, this.headerAboveBarMobile.bind(this))
                .on("load." + this.eventID, this.breadcrumbMenuMobile.bind(this))
                .on("resize." + this.eventID, this.autoHeightSetOnHeader.bind(this))
                .on("resize." + this.eventID, this.autoHeightBreadcrumbMenu.bind(this))
        },
        preloader: function(t) {
            e(".preloader-wrapper").fadeOut("1000", function() {
                e(this).remove()
            })
        },
        scrollingAnimate: function(t) {
            return e("html, body").animate({
                scrollTop: 0
            }, 600), !1
        },
        scrollingUp: function(t) {
            var i = e(".scrollingUp");
            this.$window.scrollTop() > 150 ? i.addClass("is-active") : i.removeClass("is-active")
        },
        scrollToSticky: function(t) {
            var i = e(".is-sticky-on");
            this.$window.scrollTop() >= 220 ? i.addClass("is-sticky-menu") : i.removeClass("is-sticky-menu")
        },
        autoHeightSetOnHeader: function(t) {
            var i = e(".navigation-wrapper"),
                s = e(".navigation-wrapper > .main-mobile-nav"),
                n = e(".navigation-wrapper > .main-navigation-area *:not(.logo):not(.header-btn):not(.cart-wrapper *):not(.menu-item-has-children *):not(.search-button *)"),
                a = 0;
            e("body").find("div").hasClass("is-sticky-on") && ("block" == e("div.main-mobile-nav").css("display") ? (s.each(function() {
                var t = e(this).outerHeight(!0);
                t > a && (a = t)
            }), i.css("min-height", a), e(".breadcrumb-nav").hasClass("breadcrumb-sticky-on") && e(".main-navigation").hasClass("is-sticky-on") && e(".main-mobile-nav").hasClass("is-sticky-on") && e(".breadcrumb-sticky-on").css("top", a - 1)) : (n.each(function() {
                var t = e(this).outerHeight(!0);
                t > a && (a = t)
            }), i.css("min-height", a), e(".breadcrumb-nav").hasClass("breadcrumb-sticky-on") && e(".main-navigation").hasClass("is-sticky-on") && e(".main-mobile-nav").hasClass("is-sticky-on") && e(".breadcrumb-sticky-on").css("top", a - 1)))
        },
        autoHeightBreadcrumbMenu: function(t) {
            var i = e(".breadcrumb-navbar"),
                s = e(".breadcrumb-navbar .breadcrumb-navbar-mobile"),
                n = e(".breadcrumb-navbar .breadcrumb-menu"),
                a = 0;
            e("body").find("div").hasClass("breadcrumb-sticky-on") && ("block" == e("div.breadcrumb-navbar-mobile").css("display") ? (s.each(function() {
                var t = e(this).outerHeight(!0);
                t > a && (a = t)
            }), i.css("min-height", a)) : (n.each(function() {
                var t = e(this).outerHeight(!0);
                t > a && (a = t)
            }), i.css("min-height", a)))
        },
        mobileMainMenuRightClone: function(t) {
            e(".header-wrap-right").clone().appendTo(".mobile-menu-right")
        },
        mobileMainMenuClone: function(t) {
            e(".main-navbar:not(.breadcrumb-menu) .main-menu").clone().appendTo(".main-mobile-build")
        },
        MainMenuFocusAccessibility: function(t) {
            e(".main-navbar, .widget_nav_menu").find("a").on("focus blur", function() {
                e(this).parents("ul, li").toggleClass("focus")
            })
        },
        mainMenuCollapse: function(t) {
            var i = e(".menu-collapsed");
            this.$body.toggleClass(this.classes.mainHeaderMenuActive), this.$body.toggleClass(this.classes.isOverlay), i.toggleClass(this.classes.collapsed), this.$body.hasClass(this.classes.mainHeaderMenuActive) ? e(".header-close-menu").focus() : i.focus(), this.mainMenuAccessibility()
        },
        mainMenuAccessibility: function() {
            var e, t, i, s = document.querySelector(".main-mobile-build");
            let n = document.querySelector(".header-close-menu"),
                a = s.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'),
                o = a[a.length - 1];
            if (!s) return !1;
            for (t = 0, i = (e = s.getElementsByTagName("a")).length; t < i; t++) e[t].addEventListener("focus", c, !0), e[t].addEventListener("blur", c, !0);

            function c() {
                for (var e = this; - 1 === e.className.indexOf("main-mobile-build");) "li" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace(" focus", "") : e.className += " focus"), e = e.parentElement
            }
            document.addEventListener("keydown", function(e) {
                ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === n && (o.focus(), e.preventDefault()) : document.activeElement === o && (n.focus(), e.preventDefault()))
            })
        },
        mainMenuHideMobilePopup: function(t) {
            var i = e(".menu-collapsed"),
                s = e(".main-mobile-build");
            e(t.target).closest(i).length || e(t.target).closest(s).length || this.$body.hasClass(this.classes.mainHeaderMenuActive) && (this.$body.removeClass(this.classes.mainHeaderMenuActive), this.$body.removeClass(this.classes.isOverlay), i.removeClass(this.classes.collapsed), this.$document.trigger("mainMenuHideMobilePopup." + this.eventID), t.stopPropagation())
        },
        mobileSubMenuCollapse: function(t) {
            t.preventDefault();
            var i = e(t.currentTarget),
                s = (i.closest(".main-mobile-build .main-menu"), i.parents(".dropdown-menu").length);
            this.isRTL;
            setTimeout(function() {
                i.parent().toggleClass("current"), i.next().slideToggle()
            }, 250)
        },
        resetMobileMenuCollapse: function(t) {
            e(".main-mobile-build .main-menu");
            var i = e(".main-mobile-build  .menu-item"),
                s = e(".main-mobile-build .dropdown-menu");
            setTimeout(function() {
                i.removeClass("current"), s.hide()
            }, 250)
        },
        searchPopUpToggle: function(t) {
            var i = e(".header-search-toggle"),
                s = e(".header-search-field");
            this.$body.toggleClass(this.classes.searchPopUpActive), this.$body.hasClass(this.classes.searchPopUpActive) ? s.focus() : i.focus(), this.searchPopupAccessibility()
        },
        searchPopupAccessibility: function() {
            var e, t, i, s = document.querySelector(".header-search-popup");
            let n = document.querySelector(".header-search-field"),
                a = s.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'),
                o = a[a.length - 1];
            if (!s) return !1;
            for (t = 0, i = (e = s.getElementsByTagName("button")).length; t < i; t++) e[t].addEventListener("focus", c, !0), e[t].addEventListener("blur", c, !0);

            function c() {
                for (var e = this; - 1 === e.className.indexOf("header-search-popup");) "input" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace("focus", "") : e.className += " focus"), e = e.parentElement
            }
            document.addEventListener("keydown", function(e) {
                ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === n && (o.focus(), e.preventDefault()) : document.activeElement === o && (n.focus(), e.preventDefault()))
            })
        },
        headerAboveAccessibility: function() {
            if (e(".above-header").length > 0) {
                var t, i, s, n = document.querySelector(".header-above-bar");
                let e = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])',
                    o = document.querySelector(".header-above-collapse"),
                    c = n.querySelectorAll(e),
                    l = c[c.length - 1];
                if (!n) return !1;
                for (i = 0, s = (t = n.getElementsByTagName("a")).length; i < s; i++) t[i].addEventListener("focus", a, !0), t[i].addEventListener("blur", a, !0);

                function a() {
                    for (var e = this; - 1 === e.className.indexOf("header-above-bar");) "li" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace(" focus", "") : e.className += " focus"), e = e.parentElement
                }
                document.addEventListener("keydown", function(e) {
                    ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === o && (l.focus(), e.preventDefault()) : document.activeElement === l && (o.focus(), e.preventDefault()))
                })
            }
        },
        headerAboveBarMobile: function() {
            if (e(".above-header").length > 0) {
                var t = e(".header-above-wrapper"),
                    i = e(".header-widget"),
                    s = e(".header-above-btn"),
                    n = e(".header-above-collapse");
                !i.children().length > 0 ? (i.hide(), s.hide()) : (s.show(), i.clone().appendTo(".header-above-bar"), n.on("click", function(e) {
                    t.toggleClass("is-active"), n.toggleClass("is-active"), e.preventDefault()
                })), this.headerAboveAccessibility()
            }
        },
        breadcrumbMenuAccessibility: function() {
            if (e(".breadcrumb-mobile-menu").length > 0) {
                var t, i, s, n = document.querySelector(".breadcrumb-mobile-menu");
                let e = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])',
                    o = document.querySelector(".breadcrumb-collapsed"),
                    c = n.querySelectorAll(e),
                    l = c[c.length - 1];
                if (!n) return !1;
                for (i = 0, s = (t = n.getElementsByTagName("a")).length; i < s; i++) t[i].addEventListener("focus", a, !0), t[i].addEventListener("blur", a, !0);

                function a() {
                    for (var e = this; - 1 === e.className.indexOf("breadcrumb-mobile-menu");) "li" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace(" focus", "") : e.className += " focus"), e = e.parentElement
                }
                document.addEventListener("keydown", function(e) {
                    ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === o && (l.focus(), e.preventDefault()) : document.activeElement === l && (o.focus(), e.preventDefault()))
                })
            }
        },
        breadcrumbMenuMobile: function() {
            if (e(".breadcrumb-mobile-menu").length > 0) {
                var t = e(".breadcrumb-mobile-menu"),
                    i = e(".breadcrumb-menu .main-menu"),
                    s = e(".breadcrumb-button"),
                    n = e(".breadcrumb-collapsed");
                !i.children().length > 0 ? (i.hide(), s.hide()) : (s.show(), i.clone().appendTo(".breadcrumb-mobile-menu"), n.on("click", function(e) {
                    t.slideToggle(), n.toggleClass("is-active"), e.preventDefault()
                })), this.breadcrumbMenuAccessibility()
            }
        }
    }).init()
}(jQuery, window.metasoftCustomize);