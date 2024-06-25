<?php


$lang = \Illuminate\Support\Facades\App::getLocale();

$contact = \App\Models\Contact::latest()->take(1)->get();


?>


<!doctype html>
<html lang="ru-RU">

<head>
    <meta name="facebook-domain-verification" content="ej24yir593lm4eh1fgwz4jhw4lmspm">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#000000">
    <script data-cfasync="false" data-no-defer="1">var ewww_webp_supported = !1;

        function check_webp_feature(A, e) {
            var w;
            e = void 0 !== e ? e : function () {
            }, ewww_webp_supported ? e(ewww_webp_supported) : ((w = new Image).onload = function () {
                ewww_webp_supported = 0 < w.width && 0 < w.height, e && e(ewww_webp_supported)
            }, w.onerror = function () {
                e && e(!1)
            }, w.src = "data:image/webp;base64," + {alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA=="}[A])
        }

        check_webp_feature("alpha");</script>
    <script data-cfasync="false" data-no-defer="1">var Arrive = function (c, w) {
            "use strict";
            if (c.MutationObserver && "undefined" != typeof HTMLElement) {
                var r, a = 0,
                    u = (r = HTMLElement.prototype.matches || HTMLElement.prototype.webkitMatchesSelector || HTMLElement.prototype.mozMatchesSelector || HTMLElement.prototype.msMatchesSelector, {
                        matchesSelector: function (e, t) {
                            return e instanceof HTMLElement && r.call(e, t)
                        }, addMethod: function (e, t, r) {
                            var a = e[t];
                            e[t] = function () {
                                return r.length == arguments.length ? r.apply(this, arguments) : "function" == typeof a ? a.apply(this, arguments) : void 0
                            }
                        }, callCallbacks: function (e, t) {
                            t && t.options.onceOnly && 1 == t.firedElems.length && (e = [e[0]]);
                            for (var r, a = 0; r = e[a]; a++) r && r.callback && r.callback.call(r.elem, r.elem);
                            t && t.options.onceOnly && 1 == t.firedElems.length && t.me.unbindEventWithSelectorAndCallback.call(t.target, t.selector, t.callback)
                        }, checkChildNodesRecursively: function (e, t, r, a) {
                            for (var i, n = 0; i = e[n]; n++) r(i, t, a) && a.push({
                                callback: t.callback,
                                elem: i
                            }), 0 < i.childNodes.length && u.checkChildNodesRecursively(i.childNodes, t, r, a)
                        }, mergeArrays: function (e, t) {
                            var r, a = {};
                            for (r in e) e.hasOwnProperty(r) && (a[r] = e[r]);
                            for (r in t) t.hasOwnProperty(r) && (a[r] = t[r]);
                            return a
                        }, toElementsArray: function (e) {
                            return e = void 0 !== e && ("number" != typeof e.length || e === c) ? [e] : e
                        }
                    }), e = (l.prototype.addEvent = function (e, t, r, a) {
                        a = {target: e, selector: t, options: r, callback: a, firedElems: []};
                        return this._beforeAdding && this._beforeAdding(a), this._eventsBucket.push(a), a
                    }, l.prototype.removeEvent = function (e) {
                        for (var t, r = this._eventsBucket.length - 1; t = this._eventsBucket[r]; r--) e(t) && (this._beforeRemoving && this._beforeRemoving(t), (t = this._eventsBucket.splice(r, 1)) && t.length && (t[0].callback = null))
                    }, l.prototype.beforeAdding = function (e) {
                        this._beforeAdding = e
                    }, l.prototype.beforeRemoving = function (e) {
                        this._beforeRemoving = e
                    }, l), t = function (i, n) {
                        var o = new e, l = this, s = {fireOnAttributesModification: !1};
                        return o.beforeAdding(function (t) {
                            var e = t.target;
                            e !== c.document && e !== c || (e = document.getElementsByTagName("html")[0]);
                            var r = new MutationObserver(function (e) {
                                n.call(this, e, t)
                            }), a = i(t.options);
                            r.observe(e, a), t.observer = r, t.me = l
                        }), o.beforeRemoving(function (e) {
                            e.observer.disconnect()
                        }), this.bindEvent = function (e, t, r) {
                            t = u.mergeArrays(s, t);
                            for (var a = u.toElementsArray(this), i = 0; i < a.length; i++) o.addEvent(a[i], e, t, r)
                        }, this.unbindEvent = function () {
                            var r = u.toElementsArray(this);
                            o.removeEvent(function (e) {
                                for (var t = 0; t < r.length; t++) if (this === w || e.target === r[t]) return !0;
                                return !1
                            })
                        }, this.unbindEventWithSelectorOrCallback = function (r) {
                            var a = u.toElementsArray(this), i = r, e = "function" == typeof r ? function (e) {
                                for (var t = 0; t < a.length; t++) if ((this === w || e.target === a[t]) && e.callback === i) return !0;
                                return !1
                            } : function (e) {
                                for (var t = 0; t < a.length; t++) if ((this === w || e.target === a[t]) && e.selector === r) return !0;
                                return !1
                            };
                            o.removeEvent(e)
                        }, this.unbindEventWithSelectorAndCallback = function (r, a) {
                            var i = u.toElementsArray(this);
                            o.removeEvent(function (e) {
                                for (var t = 0; t < i.length; t++) if ((this === w || e.target === i[t]) && e.selector === r && e.callback === a) return !0;
                                return !1
                            })
                        }, this
                    }, i = new function () {
                        var s = {fireOnAttributesModification: !1, onceOnly: !1, existing: !1};

                        function n(e, t, r) {
                            return !(!u.matchesSelector(e, t.selector) || (e._id === w && (e._id = a++), -1 != t.firedElems.indexOf(e._id))) && (t.firedElems.push(e._id), !0)
                        }

                        var c = (i = new t(function (e) {
                            var t = {attributes: !1, childList: !0, subtree: !0};
                            return e.fireOnAttributesModification && (t.attributes = !0), t
                        }, function (e, i) {
                            e.forEach(function (e) {
                                var t = e.addedNodes, r = e.target, a = [];
                                null !== t && 0 < t.length ? u.checkChildNodesRecursively(t, i, n, a) : "attributes" === e.type && n(r, i) && a.push({
                                    callback: i.callback,
                                    elem: r
                                }), u.callCallbacks(a, i)
                            })
                        })).bindEvent;
                        return i.bindEvent = function (e, t, r) {
                            t = void 0 === r ? (r = t, s) : u.mergeArrays(s, t);
                            var a = u.toElementsArray(this);
                            if (t.existing) {
                                for (var i = [], n = 0; n < a.length; n++) for (var o = a[n].querySelectorAll(e), l = 0; l < o.length; l++) i.push({
                                    callback: r,
                                    elem: o[l]
                                });
                                if (t.onceOnly && i.length) return r.call(i[0].elem, i[0].elem);
                                setTimeout(u.callCallbacks, 1, i)
                            }
                            c.call(this, e, t, r)
                        }, i
                    }, o = new function () {
                        var a = {};

                        function i(e, t) {
                            return u.matchesSelector(e, t.selector)
                        }

                        var n = (o = new t(function () {
                            return {childList: !0, subtree: !0}
                        }, function (e, r) {
                            e.forEach(function (e) {
                                var t = e.removedNodes, e = [];
                                null !== t && 0 < t.length && u.checkChildNodesRecursively(t, r, i, e), u.callCallbacks(e, r)
                            })
                        })).bindEvent;
                        return o.bindEvent = function (e, t, r) {
                            t = void 0 === r ? (r = t, a) : u.mergeArrays(a, t), n.call(this, e, t, r)
                        }, o
                    };
                d(HTMLElement.prototype), d(NodeList.prototype), d(HTMLCollection.prototype), d(HTMLDocument.prototype), d(Window.prototype);
                var n = {};
                return s(i, n, "unbindAllArrive"), s(o, n, "unbindAllLeave"), n
            }

            function l() {
                this._eventsBucket = [], this._beforeAdding = null, this._beforeRemoving = null
            }

            function s(e, t, r) {
                u.addMethod(t, r, e.unbindEvent), u.addMethod(t, r, e.unbindEventWithSelectorOrCallback), u.addMethod(t, r, e.unbindEventWithSelectorAndCallback)
            }

            function d(e) {
                e.arrive = i.bindEvent, s(i, e, "unbindArrive"), e.leave = o.bindEvent, s(o, e, "unbindLeave")
            }
        }(window, void 0), ewww_webp_supported = !1;

        function check_webp_feature(e, t) {
            var r;
            ewww_webp_supported ? t(ewww_webp_supported) : ((r = new Image).onload = function () {
                ewww_webp_supported = 0 < r.width && 0 < r.height, t(ewww_webp_supported)
            }, r.onerror = function () {
                t(!1)
            }, r.src = "data:image/webp;base64," + {
                alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",
                animation: "UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
            }[e])
        }

        function ewwwLoadImages(e) {
            if (e) {
                for (var t = document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"), r = 0, a = t.length; r < a; r++) ewwwAttr(t[r], "data-src", t[r].getAttribute("data-webp")), ewwwAttr(t[r], "data-thumbnail", t[r].getAttribute("data-webp-thumbnail"));
                for (var i = document.querySelectorAll(".rev_slider ul li"), r = 0, a = i.length; r < a; r++) {
                    ewwwAttr(i[r], "data-thumb", i[r].getAttribute("data-webp-thumb"));
                    for (var n = 1; n < 11;) ewwwAttr(i[r], "data-param" + n, i[r].getAttribute("data-webp-param" + n)), n++
                }
                for (r = 0, a = (i = document.querySelectorAll(".rev_slider img")).length; r < a; r++) ewwwAttr(i[r], "data-lazyload", i[r].getAttribute("data-webp-lazyload"));
                for (var o = document.querySelectorAll("div.woocommerce-product-gallery__image"), r = 0, a = o.length; r < a; r++) ewwwAttr(o[r], "data-thumb", o[r].getAttribute("data-webp-thumb"))
            }
            for (var l = document.querySelectorAll("video"), r = 0, a = l.length; r < a; r++) ewwwAttr(l[r], "poster", e ? l[r].getAttribute("data-poster-webp") : l[r].getAttribute("data-poster-image"));
            for (var s, c = document.querySelectorAll("img.ewww_webp_lazy_load"), r = 0, a = c.length; r < a; r++) e && (ewwwAttr(c[r], "data-lazy-srcset", c[r].getAttribute("data-lazy-srcset-webp")), ewwwAttr(c[r], "data-srcset", c[r].getAttribute("data-srcset-webp")), ewwwAttr(c[r], "data-lazy-src", c[r].getAttribute("data-lazy-src-webp")), ewwwAttr(c[r], "data-src", c[r].getAttribute("data-src-webp")), ewwwAttr(c[r], "data-orig-file", c[r].getAttribute("data-webp-orig-file")), ewwwAttr(c[r], "data-medium-file", c[r].getAttribute("data-webp-medium-file")), ewwwAttr(c[r], "data-large-file", c[r].getAttribute("data-webp-large-file")), null != (s = c[r].getAttribute("srcset")) && !1 !== s && s.includes("R0lGOD") && ewwwAttr(c[r], "src", c[r].getAttribute("data-lazy-src-webp"))), c[r].className = c[r].className.replace(/\bewww_webp_lazy_load\b/, "");
            for (var w = document.querySelectorAll(".ewww_webp"), r = 0, a = w.length; r < a; r++) e ? (ewwwAttr(w[r], "srcset", w[r].getAttribute("data-srcset-webp")), ewwwAttr(w[r], "src", w[r].getAttribute("data-src-webp")), ewwwAttr(w[r], "data-orig-file", w[r].getAttribute("data-webp-orig-file")), ewwwAttr(w[r], "data-medium-file", w[r].getAttribute("data-webp-medium-file")), ewwwAttr(w[r], "data-large-file", w[r].getAttribute("data-webp-large-file")), ewwwAttr(w[r], "data-large_image", w[r].getAttribute("data-webp-large_image")), ewwwAttr(w[r], "data-src", w[r].getAttribute("data-webp-src"))) : (ewwwAttr(w[r], "srcset", w[r].getAttribute("data-srcset-img")), ewwwAttr(w[r], "src", w[r].getAttribute("data-src-img"))), w[r].className = w[r].className.replace(/\bewww_webp\b/, "ewww_webp_loaded");
            window.jQuery && jQuery.fn.isotope && jQuery.fn.imagesLoaded && (jQuery(".fusion-posts-container-infinite").imagesLoaded(function () {
                jQuery(".fusion-posts-container-infinite").hasClass("isotope") && jQuery(".fusion-posts-container-infinite").isotope()
            }), jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function () {
                jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()
            }))
        }

        function ewwwWebPInit(e) {
            ewwwLoadImages(e), ewwwNggLoadGalleries(e), document.arrive(".ewww_webp", function () {
                ewwwLoadImages(e)
            }), document.arrive(".ewww_webp_lazy_load", function () {
                ewwwLoadImages(e)
            }), document.arrive("videos", function () {
                ewwwLoadImages(e)
            }), "loading" == document.readyState ? document.addEventListener("DOMContentLoaded", ewwwJSONParserInit) : ("undefined" != typeof galleries && ewwwNggParseGalleries(e), ewwwWooParseVariations(e))
        }

        function ewwwAttr(e, t, r) {
            null != r && !1 !== r && e.setAttribute(t, r)
        }

        function ewwwJSONParserInit() {
            "undefined" != typeof galleries && check_webp_feature("alpha", ewwwNggParseGalleries), check_webp_feature("alpha", ewwwWooParseVariations)
        }

        function ewwwWooParseVariations(e) {
            if (e) for (var t = document.querySelectorAll("form.variations_form"), r = 0, a = t.length; r < a; r++) {
                var i = t[r].getAttribute("data-product_variations"), n = !1;
                try {
                    for (var o in i = JSON.parse(i)) void 0 !== i[o] && void 0 !== i[o].image && (void 0 !== i[o].image.src_webp && (i[o].image.src = i[o].image.src_webp, n = !0), void 0 !== i[o].image.srcset_webp && (i[o].image.srcset = i[o].image.srcset_webp, n = !0), void 0 !== i[o].image.full_src_webp && (i[o].image.full_src = i[o].image.full_src_webp, n = !0), void 0 !== i[o].image.gallery_thumbnail_src_webp && (i[o].image.gallery_thumbnail_src = i[o].image.gallery_thumbnail_src_webp, n = !0), void 0 !== i[o].image.thumb_src_webp && (i[o].image.thumb_src = i[o].image.thumb_src_webp, n = !0));
                    n && ewwwAttr(t[r], "data-product_variations", JSON.stringify(i))
                } catch (e) {
                }
            }
        }

        function ewwwNggParseGalleries(e) {
            if (e) for (var t in galleries) {
                var r = galleries[t];
                galleries[t].images_list = ewwwNggParseImageList(r.images_list)
            }
        }

        function ewwwNggLoadGalleries(e) {
            e && document.addEventListener("ngg.galleria.themeadded", function (e, t) {
                window.ngg_galleria._create_backup = window.ngg_galleria.create, window.ngg_galleria.create = function (e, t) {
                    var r = $(e).data("id");
                    return galleries["gallery_" + r].images_list = ewwwNggParseImageList(galleries["gallery_" + r].images_list), window.ngg_galleria._create_backup(e, t)
                }
            })
        }

        function ewwwNggParseImageList(e) {
            for (var t in e) {
                var r = e[t];
                if (void 0 !== r["image-webp"] && (e[t].image = r["image-webp"], delete e[t]["image-webp"]), void 0 !== r["thumb-webp"] && (e[t].thumb = r["thumb-webp"], delete e[t]["thumb-webp"]), void 0 !== r.full_image_webp && (e[t].full_image = r.full_image_webp, delete e[t].full_image_webp), void 0 !== r.srcsets) for (var a in r.srcsets) nggSrcset = r.srcsets[a], void 0 !== r.srcsets[a + "-webp"] && (e[t].srcsets[a] = r.srcsets[a + "-webp"], delete e[t].srcsets[a + "-webp"]);
                if (void 0 !== r.full_srcsets) for (var i in r.full_srcsets) nggFSrcset = r.full_srcsets[i], void 0 !== r.full_srcsets[i + "-webp"] && (e[t].full_srcsets[i] = r.full_srcsets[i + "-webp"], delete e[t].full_srcsets[i + "-webp"])
            }
            return e
        }

        check_webp_feature("alpha", ewwwWebPInit);</script>
    <title>Imkon Plast &#8212; Производство ПВХ профилей, не имеющих аналогов в Узбекистане</title>
    <meta name='robots' content='max-image-preview:large'>
    <link rel="alternate" hreflang="ru" href="index.htm">
    <link rel="alternate" hreflang="uz" href="uz/index.htm">
    <link rel="alternate" hreflang="x-default" href="index.htm">
    <link rel='dns-prefetch' href='//code.jquery.com'>
    <link rel='dns-prefetch' href='//cdn.jsdelivr.net'>
    <link rel='dns-prefetch' href='//pro.fontawesome.com'>
    <link rel="alternate" type="application/rss+xml" title="Imkon Plast &raquo; Лента" href="/front/feed/index.htm">
    <link rel="alternate" type="application/rss+xml" title="Imkon Plast &raquo; Лента комментариев"
          href="/front/comments/feed/index.htm">
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/imkon-plast.uz\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.3"}
        };
        /*! This file is auto-generated */
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='/front/wp-includes/css/dist/block-library/style.min.css?ver=6.1.3'
          media='all'>
    <link rel='stylesheet' id='classic-theme-styles-css' href='/front/wp-includes/css/classic-themes.min.css?ver=1'
          media='all'>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex > * {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='wpml-legacy-horizontal-list-0-css'
          href='/front/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/style.min.css?ver=1'
          media='all'>
    <link rel='stylesheet' id='Bootstrap 4.6-css' href='/front/npm/bootstrap%404.6.2/dist/css/bootstrap.min.css?ver=6.1.3'
          media='all'>
    <link rel='stylesheet' id='FontAwesome-css' href='/front/releases/v5.14.0/css/all.css?ver=6.1.3' media='all'>
    <link rel='stylesheet' id='SlickCss-css' href='/front/npm/slick-carousel%401.8.1/slick/slick.css?ver=6.1.3' media='all'>
    <link rel='stylesheet' id='jq_UI-css' href='/front/ui/1.13.2/themes/base/jquery-ui.css?ver=6.1.3' media='all'>
    <link rel='stylesheet' id='nur-font-css' href='/front/wp-content/themes/imkon-plast/assets/font/stylesheet.css?ver=6.1.3'
          media='all'>
    <link rel='stylesheet' id='nur-style-css'
          href='https://imkon-plast.uz/wp-content/themes/imkon-plast/assets/style/main.css?ver=6.1.3' media='all'>
    <link rel='stylesheet' id='main-style-css' href='/front/wp-content/themes/imkon-plast/assets/css/main-1.css?ver=1718869729'
          media='all'>
    <link rel='stylesheet' id='call-now-button-modern-style-css'
          href='/front/wp-content/plugins/call-now-button/resources/style/modern.css?ver=1.3.7' media='all'>
    <script src='/front/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' id='jquery-core-js'></script>
    <script src='/front/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script id='wpml-cookie-js-extra'>
        var wpml_cookies = {"wp-wpml_current_language": {"value": "ru", "expires": 1, "path": "\/"}};
        var wpml_cookies = {"wp-wpml_current_language": {"value": "ru", "expires": 1, "path": "\/"}};
    </script>
    <script src='/front/wp-content/plugins/sitepress-multilingual-cms/res/js/cookies/language-cookie.js?ver=4.5.14'
            id='wpml-cookie-js'></script>
    <link rel="https://api.w.org/" href="/front/wp-json/index.htm">
    <link rel="alternate" type="application/json" href="/front/wp-json/wp/v2/pages/8">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://imkon-plast.uz/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/front/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 6.1.3">
    <link rel="canonical" href="index.htm">
    <link rel='shortlink' href='index.htm'>
    <link rel="alternate" type="application/json+oembed"
          href="/front/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fimkon-plast.uz%2F">
    <link rel="alternate" type="text/xml+oembed"
          href="/front/wp-json/oembed/1.0/embed-1?url=https%3A%2F%2Fimkon-plast.uz%2F&#038;format=xml">
    <meta name="generator" content="WPML ver:4.5.14 stt:45,56;">

    <!-- Meta Pixel Code -->
    <script type='text/javascript'>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js?v=next');
    </script>
    <!-- End Meta Pixel Code -->

    <script type='text/javascript'>
        var url = window.location.href + '?ob=open-bridge';
        fbq('set', 'openbridge', '1186405412032795', url);
    </script>
    <script type='text/javascript'>fbq('init', '1186405412032795', {}, {
            "agent": "wordpress-6.1.3-3.0.12"
        })</script>
    <script type='text/javascript'>
        fbq('track', 'PageView', []);
    </script>
    <!-- Meta Pixel Code -->
    <noscript>
        <img height="1" width="1" style="display:none" alt="fbpx" src="tr?id=1186405412032795&ev=PageView&noscript=1">
    </noscript>
    <!-- End Meta Pixel Code -->
    <noscript>
        <style>.lazyload[data-src] {
                display: none !important;
            }</style>
    </noscript>
    <style>.lazyload {
            background-image: none !important;
        }

        .lazyload:before {
            background-image: none !important;
        }</style>
</head>
<body class="home page-template-default page page-id-8">
<script data-cfasync="false" data-no-defer="1">if (typeof ewww_webp_supported === "undefined") {
        var ewww_webp_supported = !1
    }
    if (ewww_webp_supported) {
        document.body.classList.add("webp-support")
    }</script>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
                <fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 1"></fefuncg>
                <fefuncb type="table" tablevalues="0 1"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
                <fefuncg type="table" tablevalues="0 1"></fefuncg>
                <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
                <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 0"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
                <fefuncb type="table" tablevalues="0 1"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
                <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
                <fefuncg type="table" tablevalues="0 1"></fefuncg>
                <fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
                <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<header>
    <div class="top_header">
        @foreach($contact as $con)
        <a href="tel:+998951111111" class="phone">
            <i class="fas fa-phone-volume"></i>
            <p class="small_text">{{ $con->phone }}</p>
        </a>
        <div class="links_language">
            <div class="links">
                <a target="_blank" href="{{ $con->instagram }}"><i
                            class="fab fa-instagram"></i></a>
                <a target="_blank" href="{{ $con->facebook }}"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="{{ $con->telegram }}"><i class="fab fa-telegram-plane"></i></a>
            </div>
            <div class="language">

                <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-list-horizontal">
                    <ul>
                        <li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-ru wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-list-horizontal">
                            <a href="/ru" class="wpml-ls-link">
                                <span class="wpml-ls-native">RU</span></a>
                        </li>
                        <li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-uz wpml-ls-last-item wpml-ls-item-legacy-list-horizontal">
                            <a href="/uz" class="wpml-ls-link">
                                <span class="wpml-ls-native">UZ</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach 
    <div class="bottom_header">
        <nav class="navbar navbar-expand-lg ip_nav">
            <a class="navbar-brand" href="/">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH8AAABJAQAAAAA85cQOAAAAAnRSTlMAAHaTzTgAAAARSURBVBgZYxgFo2AUjILhBgAE2QABSRvB3QAAAABJRU5ErkJggg=="
                     alt="imkon-plast" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/logo.png"
                     decoding="async" class="lazyload ewww_webp_lazy_load" width="127" height="73"
                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/logo.png.webp">
                <noscript><img src="wp-content/uploads/2023/02/logo.png" alt="imkon-plast" data-eio="l"></noscript>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="menu-header-nav" class="navbar-nav ml-auto" itemscope=""
                    itemtype="http://www.schema.org/SiteNavigationElement">
                    <li id="menu-item-47"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47 nav-item"><a
                                itemprop="url" href="/catolog" class="nav-link"><span
                                    itemprop="name">{{ __('app.home') }}</span></a></li>
                    <li id="menu-item-31"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31 nav-item"><a
                                itemprop="url" href="/about" class="nav-link"><span
                                    itemprop="name">{{ __('app.about') }}</span></a></li>
                    <li id="menu-item-32"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32 nav-item"><a
                                itemprop="url" href="/customers" class="nav-link"><span
                                    itemprop="name">{{ __('app.service') }}</span></a></li>
                    <li id="menu-item-33"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33 nav-item"><a
                                itemprop="url" href="/cooperation" class="nav-link"><span itemprop="name">{{ __('app.portfolio') }}</span></a>
                    </li>
                    <li id="menu-item-461"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461 nav-item"><a
                                itemprop="url" href="/news" class="nav-link"><span
                                    itemprop="name">{{ __('app.blog') }}</span></a></li>
                    <li id="menu-item-29"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29 nav-item"><a
                                itemprop="url" href="/contacts" class="nav-link"><span
                                    itemprop="name">{{ __('app.contact') }}</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

{{ $slot }}

<footer>
    <div class="top_footer">
        <nav class="navbar navbar-expand-lg ip-footer">
            <a class="navbar-brand" href="index.htm">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH8AAABJAQAAAAA85cQOAAAAAnRSTlMAAHaTzTgAAAARSURBVBgZYxgFo2AUjILhBgAE2QABSRvB3QAAAABJRU5ErkJggg=="
                     alt="imkon-plast" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/logo.png"
                     decoding="async" class="lazyload ewww_webp_lazy_load" width="127" height="73"
                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/logo.png.webp">
                <noscript><img src="wp-content/uploads/2023/02/logo.png" alt="imkon-plast" data-eio="l"></noscript>
            </a>


            <ul id="menu-header-nav-1" class="navbar-nav" itemscope=""
                itemtype="http://www.schema.org/SiteNavigationElement">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47 nav-item"><a
                            itemprop="url" href="catalog/index.htm" class="nav-link"><span
                                itemprop="name">Каталог</span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31 nav-item"><a
                            itemprop="url" href="about/index.htm" class="nav-link"><span
                                itemprop="name">О компании</span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32 nav-item"><a
                            itemprop="url" href="customers/index.htm" class="nav-link"><span
                                itemprop="name">Почему мы?</span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33 nav-item"><a
                            itemprop="url" href="cooperation/index.htm" class="nav-link"><span itemprop="name">Сотрудничество</span></a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461 nav-item"><a
                            itemprop="url" href="news/index.htm" class="nav-link"><span
                                itemprop="name">Новости</span></a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29 nav-item"><a
                            itemprop="url" href="contacts/index.htm" class="nav-link"><span
                                itemprop="name">Контакты</span></a>
                </li>
            </ul>
            @foreach($contact as $con)
            <div class="links">
                <a target="_blank" href="{{ $con->instagram }}"><i
                            class="fab fa-instagram"></i></a>
                <a target="_blank" href="{{ $con->facebook }}"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="{{ $con->telegram }}"><i class="fab fa-telegram-plane"></i></a>
            </div>
            @endforeach
        </nav>
    </div>
    <div class="bottom_footer">
        <div class="oferta">
        </div>
        <a href="https://perfectmedia.uz/" class="made-in">
            <p>Разработано в</p>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIEAAAAoAQAAAADxyKTbAAAAAnRSTlMAAHaTzTgAAAAOSURBVBgZYxgFo2AYAQAC0AABhqkPKAAAAABJRU5ErkJggg=="
                 alt=""
                 data-src="https://imkon-plast.uz/wp-content/themes/imkon-plast/assets/img/header/perfect_logo.png"
                 decoding="async" class="lazyload ewww_webp_lazy_load" width="129" height="40"
                 data-src-webp="https://imkon-plast.uz/wp-content/themes/imkon-plast/assets/img/header/perfect_logo.png.webp">
            <noscript><img src="wp-content/themes/imkon-plast/assets/img/header/perfect_logo.png" alt="" data-eio="l">
            </noscript>
        </a>
    </div>
</footer>

<div class="modal form-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оставьте заявку и наши менеджеры <br> свяжуться с вами
                    для уточнения заказа</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/telegram.php" method="POST">
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Имя</label>
                                <input name="user_name" required="" type="text" class="form-control"
                                       id="formGroupExampleInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Телефон</label>
                                <input name="user_phone" required="" type="text" class="form-control"
                                       data-plugin="phone-mask" id="formGroupExampleInput2"
                                       placeholder="+998 (__) ___-__-__">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn w-100">отправить</button>


                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade video_modal" id="vid_modal" tabindex="-1" aria-labelledby="vid_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <iframe width="100%" id="yt_vid" height="100%" src="" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>


<!-- Meta Pixel Event Code -->
<script type='text/javascript'>
    document.addEventListener('wpcf7mailsent', function (event) {
        if ("fb_pxl_code" in event.detail.apiResponse) {
            eval(event.detail.apiResponse.fb_pxl_code);
        }
    }, false);
</script>
<!-- End Meta Pixel Event Code -->
<div id='fb-pxl-ajax-code'></div><!-- Call Now Button 1.3.7 (https://callnowbutton.com) [renderer:modern]-->
<a aria-label="Call Now Button" href="tel:+998 95 111 11 11" id="callnowbutton"
   class="call-now-button  cnb-zoom-100  cnb-zindex-10  cnb-single cnb-right cnb-displaymode cnb-displaymode-mobile-only lazyload"
   style="background-color:#00bb00;"
   data-back="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiI+PHBhdGggZD0iTTI3LjAxMzU1LDIzLjQ4ODU5bC0xLjc1MywxLjc1MzA1YTUuMDAxLDUuMDAxLDAsMCwxLTUuMTk5MjgsMS4xODI0M2MtMS45NzE5My0uNjkzNzItNC44NzMzNS0yLjM2NDM4LTguNDM4NDgtNS45Mjk1UzYuMzg3LDE0LjAyOCw1LjY5MzMsMTIuMDU2MTVBNS4wMDA3OCw1LjAwMDc4LDAsMCwxLDYuODc1NzMsNi44NTY4N0w4LjYyODc4LDUuMTAzNzZhMSwxLDAsMCwxLDEuNDE0MzEuMDAwMTJsMi44MjgsMi44Mjg4QTEsMSwwLDAsMSwxMi44NzEsOS4zNDY4TDExLjA2NDcsMTEuMTUzYTEuMDAzOCwxLjAwMzgsMCwwLDAtLjA4MjEsMS4zMjE3MSw0MC43NDI3OCw0MC43NDI3OCwwLDAsMCw0LjA3NjI0LDQuNTgzNzQsNDAuNzQxNDMsNDAuNzQxNDMsMCwwLDAsNC41ODM3NCw0LjA3NjIzLDEuMDAzNzksMS4wMDM3OSwwLDAsMCwxLjMyMTcxLS4wODIwOWwxLjgwNjIyLTEuODA2MjdhMSwxLDAsMCwxLDEuNDE0MTItLjAwMDEybDIuODI4OCwyLjgyOEExLjAwMDA3LDEuMDAwMDcsMCwwLDEsMjcuMDEzNTUsMjMuNDg4NTlaIiBmaWxsPSIjZmZmZmZmIi8+PC9zdmc+"><span>Call Now Button</span></a>
<script id='eio-lazy-load-js-before'>
    var eio_lazy_vars = {"exactdn_domain": "", "skip_autoscale": 0, "threshold": 0};
</script>
<script src='/front/wp-content/plugins/ewww-image-optimizer/includes/lazysizes.min.js?ver=693' id='eio-lazy-load-js'></script>
<script src='/front/jquery-3.6.1.min.js?ver=1.0.0' id='MyJqu-js'></script>
<script src='/front/ui/1.13.2/jquery-ui.min.js?ver=1.0.0' id='MyJqu_UI-js'></script>
<script src='/front/npm/jquery%403.5.1/dist/jquery.slim.min.js?ver=1.0.0' id='Bootsrap-js'></script>
<script src='/front/npm/bootstrap%404.6.2/dist/js/bootstrap.bundle.min.js?ver=1.0.0' id='BootstrapJs-js'></script>
<script src='/front/npm/slick-carousel%401.8.1/slick/slick.min.js?ver=1.0.0' id='Slick-js'></script>
<script src='/front/wp-content/themes/imkon-plast/assets/js/jquery.inputmask.js?ver=1.0.0' id='jquery-input-js'></script>
<script src='/front/wp-content/themes/imkon-plast/assets/js/app.js?ver=1.0.0' id='imkon-plast-js-js'></script>

</body>

</html>