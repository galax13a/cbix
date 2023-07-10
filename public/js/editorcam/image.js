/**
 * Skipped minification because the original files appears to be already minified.
 * Original file: /npm/@editorjs/image@2.8.1/dist/bundle.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
/*!
 * Image tool
 * 
 * @version 2.8.1
 * 
 * @package https://github.com/editor-js/image
 * @licence MIT
 * @author CodeX <https://codex.so>
 */
!function(e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.ImageTool = t() : e.ImageTool = t()
}(window, (function() {
    return function(e) {
        var t = {};
        function n(r) {
            if (t[r])
                return t[r].exports;
            var o = t[r] = {
                i: r,
                l: !1,
                exports: {}
            };
            return e[r].call(o.exports, o, o.exports, n),
            o.l = !0,
            o.exports
        }
        return n.m = e,
        n.c = t,
        n.d = function(e, t, r) {
            n.o(e, t) || Object.defineProperty(e, t, {
                enumerable: !0,
                get: r
            })
        }
        ,
        n.r = function(e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                value: "Module"
            }),
            Object.defineProperty(e, "__esModule", {
                value: !0
            })
        }
        ,
        n.t = function(e, t) {
            if (1 & t && (e = n(e)),
            8 & t)
                return e;
            if (4 & t && "object" == typeof e && e && e.__esModule)
                return e;
            var r = Object.create(null);
            if (n.r(r),
            Object.defineProperty(r, "default", {
                enumerable: !0,
                value: e
            }),
            2 & t && "string" != typeof e)
                for (var o in e)
                    n.d(r, o, function(t) {
                        return e[t]
                    }
                    .bind(null, o));
            return r
        }
        ,
        n.n = function(e) {
            var t = e && e.__esModule ? function() {
                return e.default
            }
            : function() {
                return e
            }
            ;
            return n.d(t, "a", t),
            t
        }
        ,
        n.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }
        ,
        n.p = "/",
        n(n.s = 9)
    }([function(e, t) {
        function n(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value"in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        e.exports = function(e, t, r) {
            return t && n(e.prototype, t),
            r && n(e, r),
            e
        }
    }
    , function(e, t, n) {
        window,
        e.exports = function(e) {
            var t = {};
            function n(r) {
                if (t[r])
                    return t[r].exports;
                var o = t[r] = {
                    i: r,
                    l: !1,
                    exports: {}
                };
                return e[r].call(o.exports, o, o.exports, n),
                o.l = !0,
                o.exports
            }
            return n.m = e,
            n.c = t,
            n.d = function(e, t, r) {
                n.o(e, t) || Object.defineProperty(e, t, {
                    enumerable: !0,
                    get: r
                })
            }
            ,
            n.r = function(e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }),
                Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }
            ,
            n.t = function(e, t) {
                if (1 & t && (e = n(e)),
                8 & t)
                    return e;
                if (4 & t && "object" == typeof e && e && e.__esModule)
                    return e;
                var r = Object.create(null);
                if (n.r(r),
                Object.defineProperty(r, "default", {
                    enumerable: !0,
                    value: e
                }),
                2 & t && "string" != typeof e)
                    for (var o in e)
                        n.d(r, o, function(t) {
                            return e[t]
                        }
                        .bind(null, o));
                return r
            }
            ,
            n.n = function(e) {
                var t = e && e.__esModule ? function() {
                    return e.default
                }
                : function() {
                    return e
                }
                ;
                return n.d(t, "a", t),
                t
            }
            ,
            n.o = function(e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }
            ,
            n.p = "",
            n(n.s = 3)
        }([function(e, t) {
            var n;
            n = function() {
                return this
            }();
            try {
                n = n || new Function("return this")()
            } catch (e) {
                "object" == typeof window && (n = window)
            }
            e.exports = n
        }
        , function(e, t, n) {
            "use strict";
            (function(e) {
                var r = n(2)
                  , o = setTimeout;
                function i() {}
                function a(e) {
                    if (!(this instanceof a))
                        throw new TypeError("Promises must be constructed via new");
                    if ("function" != typeof e)
                        throw new TypeError("not a function");
                    this._state = 0,
                    this._handled = !1,
                    this._value = void 0,
                    this._deferreds = [],
                    f(e, this)
                }
                function u(e, t) {
                    for (; 3 === e._state; )
                        e = e._value;
                    0 !== e._state ? (e._handled = !0,
                    a._immediateFn((function() {
                        var n = 1 === e._state ? t.onFulfilled : t.onRejected;
                        if (null !== n) {
                            var r;
                            try {
                                r = n(e._value)
                            } catch (e) {
                                return void s(t.promise, e)
                            }
                            c(t.promise, r)
                        } else
                            (1 === e._state ? c : s)(t.promise, e._value)
                    }
                    ))) : e._deferreds.push(t)
                }
                function c(e, t) {
                    try {
                        if (t === e)
                            throw new TypeError("A promise cannot be resolved with itself.");
                        if (t && ("object" == typeof t || "function" == typeof t)) {
                            var n = t.then;
                            if (t instanceof a)
                                return e._state = 3,
                                e._value = t,
                                void l(e);
                            if ("function" == typeof n)
                                return void f((r = n,
                                o = t,
                                function() {
                                    r.apply(o, arguments)
                                }
                                ), e)
                        }
                        e._state = 1,
                        e._value = t,
                        l(e)
                    } catch (t) {
                        s(e, t)
                    }
                    var r, o
                }
                function s(e, t) {
                    e._state = 2,
                    e._value = t,
                    l(e)
                }
                function l(e) {
                    2 === e._state && 0 === e._deferreds.length && a._immediateFn((function() {
                        e._handled || a._unhandledRejectionFn(e._value)
                    }
                    ));
                    for (var t = 0, n = e._deferreds.length; t < n; t++)
                        u(e, e._deferreds[t]);
                    e._deferreds = null
                }
                function d(e, t, n) {
                    this.onFulfilled = "function" == typeof e ? e : null,
                    this.onRejected = "function" == typeof t ? t : null,
                    this.promise = n
                }
                function f(e, t) {
                    var n = !1;
                    try {
                        e((function(e) {
                            n || (n = !0,
                            c(t, e))
                        }
                        ), (function(e) {
                            n || (n = !0,
                            s(t, e))
                        }
                        ))
                    } catch (e) {
                        if (n)
                            return;
                        n = !0,
                        s(t, e)
                    }
                }
                a.prototype.catch = function(e) {
                    return this.then(null, e)
                }
                ,
                a.prototype.then = function(e, t) {
                    var n = new this.constructor(i);
                    return u(this, new d(e,t,n)),
                    n
                }
                ,
                a.prototype.finally = r.a,
                a.all = function(e) {
                    return new a((function(t, n) {
                        if (!e || void 0 === e.length)
                            throw new TypeError("Promise.all accepts an array");
                        var r = Array.prototype.slice.call(e);
                        if (0 === r.length)
                            return t([]);
                        var o = r.length;
                        function i(e, a) {
                            try {
                                if (a && ("object" == typeof a || "function" == typeof a)) {
                                    var u = a.then;
                                    if ("function" == typeof u)
                                        return void u.call(a, (function(t) {
                                            i(e, t)
                                        }
                                        ), n)
                                }
                                r[e] = a,
                                0 == --o && t(r)
                            } catch (e) {
                                n(e)
                            }
                        }
                        for (var a = 0; a < r.length; a++)
                            i(a, r[a])
                    }
                    ))
                }
                ,
                a.resolve = function(e) {
                    return e && "object" == typeof e && e.constructor === a ? e : new a((function(t) {
                        t(e)
                    }
                    ))
                }
                ,
                a.reject = function(e) {
                    return new a((function(t, n) {
                        n(e)
                    }
                    ))
                }
                ,
                a.race = function(e) {
                    return new a((function(t, n) {
                        for (var r = 0, o = e.length; r < o; r++)
                            e[r].then(t, n)
                    }
                    ))
                }
                ,
                a._immediateFn = "function" == typeof e && function(t) {
                    e(t)
                }
                || function(e) {
                    o(e, 0)
                }
                ,
                a._unhandledRejectionFn = function(e) {
                    "undefined" != typeof console && console && console.warn("Possible Unhandled Promise Rejection:", e)
                }
                ,
                t.a = a
            }
            ).call(this, n(5).setImmediate)
        }
        , function(e, t, n) {
            "use strict";
            t.a = function(e) {
                var t = this.constructor;
                return this.then((function(n) {
                    return t.resolve(e()).then((function() {
                        return n
                    }
                    ))
                }
                ), (function(n) {
                    return t.resolve(e()).then((function() {
                        return t.reject(n)
                    }
                    ))
                }
                ))
            }
        }
        , function(e, t, n) {
            "use strict";
            function r(e) {
                return (r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                    return typeof e
                }
                : function(e) {
                    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                }
                )(e)
            }
            n(4);
            var o, i, a, u, c, s, l, d = n(8), f = (i = function(e) {
                return new Promise((function(t, n) {
                    e = u(e),
                    (e = c(e)).beforeSend && e.beforeSend();
                    var r = window.XMLHttpRequest ? new window.XMLHttpRequest : new window.ActiveXObject("Microsoft.XMLHTTP");
                    r.open(e.method, e.url),
                    r.setRequestHeader("X-Requested-With", "XMLHttpRequest"),
                    Object.keys(e.headers).forEach((function(t) {
                        var n = e.headers[t];
                        r.setRequestHeader(t, n)
                    }
                    ));
                    var o = e.ratio;
                    r.upload.addEventListener("progress", (function(t) {
                        var n = Math.round(t.loaded / t.total * 100)
                          , r = Math.ceil(n * o / 100);
                        e.progress(Math.min(r, 100))
                    }
                    ), !1),
                    r.addEventListener("progress", (function(t) {
                        var n = Math.round(t.loaded / t.total * 100)
                          , r = Math.ceil(n * (100 - o) / 100) + o;
                        e.progress(Math.min(r, 100))
                    }
                    ), !1),
                    r.onreadystatechange = function() {
                        if (4 === r.readyState) {
                            var e = r.response;
                            try {
                                e = JSON.parse(e)
                            } catch (e) {}
                            var o = d.parseHeaders(r.getAllResponseHeaders())
                              , i = {
                                body: e,
                                code: r.status,
                                headers: o
                            };
                            l(r.status) ? t(i) : n(i)
                        }
                    }
                    ,
                    r.send(e.data)
                }
                ))
            }
            ,
            a = function(e) {
                return e.method = "POST",
                i(e)
            }
            ,
            u = function() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                if (e.url && "string" != typeof e.url)
                    throw new Error("Url must be a string");
                if (e.url = e.url || "",
                e.method && "string" != typeof e.method)
                    throw new Error("`method` must be a string or null");
                if (e.method = e.method ? e.method.toUpperCase() : "GET",
                e.headers && "object" !== r(e.headers))
                    throw new Error("`headers` must be an object or null");
                if (e.headers = e.headers || {},
                e.type && ("string" != typeof e.type || !Object.values(o).includes(e.type)))
                    throw new Error("`type` must be taken from module's «contentType» library");
                if (e.progress && "function" != typeof e.progress)
                    throw new Error("`progress` must be a function or null");
                if (e.progress = e.progress || function(e) {}
                ,
                e.beforeSend = e.beforeSend || function(e) {}
                ,
                e.ratio && "number" != typeof e.ratio)
                    throw new Error("`ratio` must be a number");
                if (e.ratio < 0 || e.ratio > 100)
                    throw new Error("`ratio` must be in a 0-100 interval");
                if (e.ratio = e.ratio || 90,
                e.accept && "string" != typeof e.accept)
                    throw new Error("`accept` must be a string with a list of allowed mime-types");
                if (e.accept = e.accept || "*/*",
                e.multiple && "boolean" != typeof e.multiple)
                    throw new Error("`multiple` must be a true or false");
                if (e.multiple = e.multiple || !1,
                e.fieldName && "string" != typeof e.fieldName)
                    throw new Error("`fieldName` must be a string");
                return e.fieldName = e.fieldName || "files",
                e
            }
            ,
            c = function(e) {
                switch (e.method) {
                case "GET":
                    var t = s(e.data, o.URLENCODED);
                    delete e.data,
                    e.url = /\?/.test(e.url) ? e.url + "&" + t : e.url + "?" + t;
                    break;
                case "POST":
                case "PUT":
                case "DELETE":
                case "UPDATE":
                    var n = function() {
                        return (arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}).type || o.JSON
                    }(e);
                    (d.isFormData(e.data) || d.isFormElement(e.data)) && (n = o.FORM),
                    e.data = s(e.data, n),
                    n !== f.contentType.FORM && (e.headers["content-type"] = n)
                }
                return e
            }
            ,
            s = function() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                switch (arguments.length > 1 ? arguments[1] : void 0) {
                case o.URLENCODED:
                    return d.urlEncode(e);
                case o.JSON:
                    return d.jsonEncode(e);
                case o.FORM:
                    return d.formEncode(e);
                default:
                    return e
                }
            }
            ,
            l = function(e) {
                return e >= 200 && e < 300
            }
            ,
            {
                contentType: o = {
                    URLENCODED: "application/x-www-form-urlencoded; charset=utf-8",
                    FORM: "multipart/form-data",
                    JSON: "application/json; charset=utf-8"
                },
                request: i,
                get: function(e) {
                    return e.method = "GET",
                    i(e)
                },
                post: a,
                transport: function(e) {
                    return e = u(e),
                    d.selectFiles(e).then((function(t) {
                        for (var n = new FormData, r = 0; r < t.length; r++)
                            n.append(e.fieldName, t[r], t[r].name);
                        d.isObject(e.data) && Object.keys(e.data).forEach((function(t) {
                            var r = e.data[t];
                            n.append(t, r)
                        }
                        ));
                        var o = e.beforeSend;
                        return e.beforeSend = function() {
                            return o(t)
                        }
                        ,
                        e.data = n,
                        a(e)
                    }
                    ))
                },
                selectFiles: function(e) {
                    return delete (e = u(e)).beforeSend,
                    d.selectFiles(e)
                }
            });
            e.exports = f
        }
        , function(e, t, n) {
            "use strict";
            n.r(t);
            var r = n(1);
            window.Promise = window.Promise || r.a
        }
        , function(e, t, n) {
            (function(e) {
                var r = void 0 !== e && e || "undefined" != typeof self && self || window
                  , o = Function.prototype.apply;
                function i(e, t) {
                    this._id = e,
                    this._clearFn = t
                }
                t.setTimeout = function() {
                    return new i(o.call(setTimeout, r, arguments),clearTimeout)
                }
                ,
                t.setInterval = function() {
                    return new i(o.call(setInterval, r, arguments),clearInterval)
                }
                ,
                t.clearTimeout = t.clearInterval = function(e) {
                    e && e.close()
                }
                ,
                i.prototype.unref = i.prototype.ref = function() {}
                ,
                i.prototype.close = function() {
                    this._clearFn.call(r, this._id)
                }
                ,
                t.enroll = function(e, t) {
                    clearTimeout(e._idleTimeoutId),
                    e._idleTimeout = t
                }
                ,
                t.unenroll = function(e) {
                    clearTimeout(e._idleTimeoutId),
                    e._idleTimeout = -1
                }
                ,
                t._unrefActive = t.active = function(e) {
                    clearTimeout(e._idleTimeoutId);
                    var t = e._idleTimeout;
                    t >= 0 && (e._idleTimeoutId = setTimeout((function() {
                        e._onTimeout && e._onTimeout()
                    }
                    ), t))
                }
                ,
                n(6),
                t.setImmediate = "undefined" != typeof self && self.setImmediate || void 0 !== e && e.setImmediate || this && this.setImmediate,
                t.clearImmediate = "undefined" != typeof self && self.clearImmediate || void 0 !== e && e.clearImmediate || this && this.clearImmediate
            }
            ).call(this, n(0))
        }
        , function(e, t, n) {
            (function(e, t) {
                !function(e, n) {
                    "use strict";
                    if (!e.setImmediate) {
                        var r, o, i, a, u, c = 1, s = {}, l = !1, d = e.document, f = Object.getPrototypeOf && Object.getPrototypeOf(e);
                        f = f && f.setTimeout ? f : e,
                        "[object process]" === {}.toString.call(e.process) ? r = function(e) {
                            t.nextTick((function() {
                                h(e)
                            }
                            ))
                        }
                        : function() {
                            if (e.postMessage && !e.importScripts) {
                                var t = !0
                                  , n = e.onmessage;
                                return e.onmessage = function() {
                                    t = !1
                                }
                                ,
                                e.postMessage("", "*"),
                                e.onmessage = n,
                                t
                            }
                        }() ? (a = "setImmediate$" + Math.random() + "$",
                        u = function(t) {
                            t.source === e && "string" == typeof t.data && 0 === t.data.indexOf(a) && h(+t.data.slice(a.length))
                        }
                        ,
                        e.addEventListener ? e.addEventListener("message", u, !1) : e.attachEvent("onmessage", u),
                        r = function(t) {
                            e.postMessage(a + t, "*")
                        }
                        ) : e.MessageChannel ? ((i = new MessageChannel).port1.onmessage = function(e) {
                            h(e.data)
                        }
                        ,
                        r = function(e) {
                            i.port2.postMessage(e)
                        }
                        ) : d && "onreadystatechange"in d.createElement("script") ? (o = d.documentElement,
                        r = function(e) {
                            var t = d.createElement("script");
                            t.onreadystatechange = function() {
                                h(e),
                                t.onreadystatechange = null,
                                o.removeChild(t),
                                t = null
                            }
                            ,
                            o.appendChild(t)
                        }
                        ) : r = function(e) {
                            setTimeout(h, 0, e)
                        }
                        ,
                        f.setImmediate = function(e) {
                            "function" != typeof e && (e = new Function("" + e));
                            for (var t = new Array(arguments.length - 1), n = 0; n < t.length; n++)
                                t[n] = arguments[n + 1];
                            var o = {
                                callback: e,
                                args: t
                            };
                            return s[c] = o,
                            r(c),
                            c++
                        }
                        ,
                        f.clearImmediate = p
                    }
                    function p(e) {
                        delete s[e]
                    }
                    function h(e) {
                        if (l)
                            setTimeout(h, 0, e);
                        else {
                            var t = s[e];
                            if (t) {
                                l = !0;
                                try {
                                    !function(e) {
                                        var t = e.callback
                                          , n = e.args;
                                        switch (n.length) {
                                        case 0:
                                            t();
                                            break;
                                        case 1:
                                            t(n[0]);
                                            break;
                                        case 2:
                                            t(n[0], n[1]);
                                            break;
                                        case 3:
                                            t(n[0], n[1], n[2]);
                                            break;
                                        default:
                                            t.apply(void 0, n)
                                        }
                                    }(t)
                                } finally {
                                    p(e),
                                    l = !1
                                }
                            }
                        }
                    }
                }("undefined" == typeof self ? void 0 === e ? this : e : self)
            }
            ).call(this, n(0), n(7))
        }
        , function(e, t) {
            var n, r, o = e.exports = {};
            function i() {
                throw new Error("setTimeout has not been defined")
            }
            function a() {
                throw new Error("clearTimeout has not been defined")
            }
            function u(e) {
                if (n === setTimeout)
                    return setTimeout(e, 0);
                if ((n === i || !n) && setTimeout)
                    return n = setTimeout,
                    setTimeout(e, 0);
                try {
                    return n(e, 0)
                } catch (t) {
                    try {
                        return n.call(null, e, 0)
                    } catch (t) {
                        return n.call(this, e, 0)
                    }
                }
            }
            !function() {
                try {
                    n = "function" == typeof setTimeout ? setTimeout : i
                } catch (e) {
                    n = i
                }
                try {
                    r = "function" == typeof clearTimeout ? clearTimeout : a
                } catch (e) {
                    r = a
                }
            }();
            var c, s = [], l = !1, d = -1;
            function f() {
                l && c && (l = !1,
                c.length ? s = c.concat(s) : d = -1,
                s.length && p())
            }
            function p() {
                if (!l) {
                    var e = u(f);
                    l = !0;
                    for (var t = s.length; t; ) {
                        for (c = s,
                        s = []; ++d < t; )
                            c && c[d].run();
                        d = -1,
                        t = s.length
                    }
                    c = null,
                    l = !1,
                    function(e) {
                        if (r === clearTimeout)
                            return clearTimeout(e);
                        if ((r === a || !r) && clearTimeout)
                            return r = clearTimeout,
                            clearTimeout(e);
                        try {
                            r(e)
                        } catch (t) {
                            try {
                                return r.call(null, e)
                            } catch (t) {
                                return r.call(this, e)
                            }
                        }
                    }(e)
                }
            }
            function h(e, t) {
                this.fun = e,
                this.array = t
            }
            function m() {}
            o.nextTick = function(e) {
                var t = new Array(arguments.length - 1);
                if (arguments.length > 1)
                    for (var n = 1; n < arguments.length; n++)
                        t[n - 1] = arguments[n];
                s.push(new h(e,t)),
                1 !== s.length || l || u(p)
            }
            ,
            h.prototype.run = function() {
                this.fun.apply(null, this.array)
            }
            ,
            o.title = "browser",
            o.browser = !0,
            o.env = {},
            o.argv = [],
            o.version = "",
            o.versions = {},
            o.on = m,
            o.addListener = m,
            o.once = m,
            o.off = m,
            o.removeListener = m,
            o.removeAllListeners = m,
            o.emit = m,
            o.prependListener = m,
            o.prependOnceListener = m,
            o.listeners = function(e) {
                return []
            }
            ,
            o.binding = function(e) {
                throw new Error("process.binding is not supported")
            }
            ,
            o.cwd = function() {
                return "/"
            }
            ,
            o.chdir = function(e) {
                throw new Error("process.chdir is not supported")
            }
            ,
            o.umask = function() {
                return 0
            }
        }
        , function(e, t, n) {
            function r(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1,
                    r.configurable = !0,
                    "value"in r && (r.writable = !0),
                    Object.defineProperty(e, r.key, r)
                }
            }
            var o = n(9);
            e.exports = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t, n;
                return t = e,
                (n = [{
                    key: "urlEncode",
                    value: function(e) {
                        return o(e)
                    }
                }, {
                    key: "jsonEncode",
                    value: function(e) {
                        return JSON.stringify(e)
                    }
                }, {
                    key: "formEncode",
                    value: function(e) {
                        if (this.isFormData(e))
                            return e;
                        if (this.isFormElement(e))
                            return new FormData(e);
                        if (this.isObject(e)) {
                            var t = new FormData;
                            return Object.keys(e).forEach((function(n) {
                                var r = e[n];
                                t.append(n, r)
                            }
                            )),
                            t
                        }
                        throw new Error("`data` must be an instance of Object, FormData or <FORM> HTMLElement")
                    }
                }, {
                    key: "isObject",
                    value: function(e) {
                        return "[object Object]" === Object.prototype.toString.call(e)
                    }
                }, {
                    key: "isFormData",
                    value: function(e) {
                        return e instanceof FormData
                    }
                }, {
                    key: "isFormElement",
                    value: function(e) {
                        return e instanceof HTMLFormElement
                    }
                }, {
                    key: "selectFiles",
                    value: function() {
                        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                        return new Promise((function(t, n) {
                            var r = document.createElement("INPUT");
                            r.type = "file",
                            e.multiple && r.setAttribute("multiple", "multiple"),
                            e.accept && r.setAttribute("accept", e.accept),
                            r.style.display = "none",
                            document.body.appendChild(r),
                            r.addEventListener("change", (function(e) {
                                var n = e.target.files;
                                t(n),
                                document.body.removeChild(r)
                            }
                            ), !1),
                            r.click()
                        }
                        ))
                    }
                }, {
                    key: "parseHeaders",
                    value: function(e) {
                        var t = e.trim().split(/[\r\n]+/)
                          , n = {};
                        return t.forEach((function(e) {
                            var t = e.split(": ")
                              , r = t.shift()
                              , o = t.join(": ");
                            r && (n[r] = o)
                        }
                        )),
                        n
                    }
                }]) && r(t, n),
                e
            }()
        }
        , function(e, t) {
            var n = function(e) {
                return encodeURIComponent(e).replace(/[!'()*]/g, escape).replace(/%20/g, "+")
            }
              , r = function(e, t, o, i) {
                return t = t || null,
                o = o || "&",
                i = i || null,
                e ? function(e) {
                    for (var t = new Array, n = 0; n < e.length; n++)
                        e[n] && t.push(e[n]);
                    return t
                }(Object.keys(e).map((function(a) {
                    var u, c, s = a;
                    if (i && (s = i + "[" + s + "]"),
                    "object" == typeof e[a] && null !== e[a])
                        u = r(e[a], null, o, s);
                    else {
                        t && (c = s,
                        s = !isNaN(parseFloat(c)) && isFinite(c) ? t + Number(s) : s);
                        var l = e[a];
                        l = (l = 0 === (l = !1 === (l = !0 === l ? "1" : l) ? "0" : l) ? "0" : l) || "",
                        u = n(s) + "=" + n(l)
                    }
                    return u
                }
                ))).join(o).replace(/[!'()*]/g, "") : ""
            };
            e.exports = r
        }
        ])
    }
    , function(e, t) {
        e.exports = function(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function")
        }
    }
    , function(e, t, n) {
        e.exports = n(10)
    }
    , function(e, t) {
        e.exports = function(e, t) {
            (null == t || t > e.length) && (t = e.length);
            for (var n = 0, r = new Array(t); n < t; n++)
                r[n] = e[n];
            return r
        }
    }
    , function(e, t, n) {
        var r = n(4);
        e.exports = function(e, t) {
            if (e) {
                if ("string" == typeof e)
                    return r(e, t);
                var n = Object.prototype.toString.call(e).slice(8, -1);
                return "Object" === n && e.constructor && (n = e.constructor.name),
                "Map" === n || "Set" === n ? Array.from(n) : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n) ? r(e, t) : void 0
            }
        }
    }
    , function(e, t) {
        function n(e, t, n, r, o, i, a) {
            try {
                var u = e[i](a)
                  , c = u.value
            } catch (e) {
                return void n(e)
            }
            u.done ? t(c) : Promise.resolve(c).then(r, o)
        }
        e.exports = function(e) {
            return function() {
                var t = this
                  , r = arguments;
                return new Promise((function(o, i) {
                    var a = e.apply(t, r);
                    function u(e) {
                        n(a, o, i, u, c, "next", e)
                    }
                    function c(e) {
                        n(a, o, i, u, c, "throw", e)
                    }
                    u(void 0)
                }
                ))
            }
        }
    }
    , function(e, t, n) {
        var r = n(15)
          , o = n(16)
          , i = n(5)
          , a = n(17);
        e.exports = function(e) {
            return r(e) || o(e) || i(e) || a()
        }
    }
    , function(e, t, n) {
        var r = n(18)
          , o = n(19)
          , i = n(5)
          , a = n(20);
        e.exports = function(e, t) {
            return r(e) || o(e, t) || i(e, t) || a()
        }
    }
    , function(e, t, n) {
        e.exports = n(21)
    }
    , function(e, t, n) {
        var r = function(e) {
            "use strict";
            var t = Object.prototype
              , n = t.hasOwnProperty
              , r = "function" == typeof Symbol ? Symbol : {}
              , o = r.iterator || "@@iterator"
              , i = r.asyncIterator || "@@asyncIterator"
              , a = r.toStringTag || "@@toStringTag";
            function u(e, t, n, r) {
                var o = t && t.prototype instanceof l ? t : l
                  , i = Object.create(o.prototype)
                  , a = new _(r || []);
                return i._invoke = function(e, t, n) {
                    var r = "suspendedStart";
                    return function(o, i) {
                        if ("executing" === r)
                            throw new Error("Generator is already running");
                        if ("completed" === r) {
                            if ("throw" === o)
                                throw i;
                            return E()
                        }
                        for (n.method = o,
                        n.arg = i; ; ) {
                            var a = n.delegate;
                            if (a) {
                                var u = b(a, n);
                                if (u) {
                                    if (u === s)
                                        continue;
                                    return u
                                }
                            }
                            if ("next" === n.method)
                                n.sent = n._sent = n.arg;
                            else if ("throw" === n.method) {
                                if ("suspendedStart" === r)
                                    throw r = "completed",
                                    n.arg;
                                n.dispatchException(n.arg)
                            } else
                                "return" === n.method && n.abrupt("return", n.arg);
                            r = "executing";
                            var l = c(e, t, n);
                            if ("normal" === l.type) {
                                if (r = n.done ? "completed" : "suspendedYield",
                                l.arg === s)
                                    continue;
                                return {
                                    value: l.arg,
                                    done: n.done
                                }
                            }
                            "throw" === l.type && (r = "completed",
                            n.method = "throw",
                            n.arg = l.arg)
                        }
                    }
                }(e, n, a),
                i
            }
            function c(e, t, n) {
                try {
                    return {
                        type: "normal",
                        arg: e.call(t, n)
                    }
                } catch (e) {
                    return {
                        type: "throw",
                        arg: e
                    }
                }
            }
            e.wrap = u;
            var s = {};
            function l() {}
            function d() {}
            function f() {}
            var p = {};
            p[o] = function() {
                return this
            }
            ;
            var h = Object.getPrototypeOf
              , m = h && h(h(x([])));
            m && m !== t && n.call(m, o) && (p = m);
            var g = f.prototype = l.prototype = Object.create(p);
            function y(e) {
                ["next", "throw", "return"].forEach((function(t) {
                    e[t] = function(e) {
                        return this._invoke(t, e)
                    }
                }
                ))
            }
            function v(e, t) {
                var r;
                this._invoke = function(o, i) {
                    function a() {
                        return new t((function(r, a) {
                            !function r(o, i, a, u) {
                                var s = c(e[o], e, i);
                                if ("throw" !== s.type) {
                                    var l = s.arg
                                      , d = l.value;
                                    return d && "object" == typeof d && n.call(d, "__await") ? t.resolve(d.__await).then((function(e) {
                                        r("next", e, a, u)
                                    }
                                    ), (function(e) {
                                        r("throw", e, a, u)
                                    }
                                    )) : t.resolve(d).then((function(e) {
                                        l.value = e,
                                        a(l)
                                    }
                                    ), (function(e) {
                                        return r("throw", e, a, u)
                                    }
                                    ))
                                }
                                u(s.arg)
                            }(o, i, r, a)
                        }
                        ))
                    }
                    return r = r ? r.then(a, a) : a()
                }
            }
            function b(e, t) {
                var n = e.iterator[t.method];
                if (void 0 === n) {
                    if (t.delegate = null,
                    "throw" === t.method) {
                        if (e.iterator.return && (t.method = "return",
                        t.arg = void 0,
                        b(e, t),
                        "throw" === t.method))
                            return s;
                        t.method = "throw",
                        t.arg = new TypeError("The iterator does not provide a 'throw' method")
                    }
                    return s
                }
                var r = c(n, e.iterator, t.arg);
                if ("throw" === r.type)
                    return t.method = "throw",
                    t.arg = r.arg,
                    t.delegate = null,
                    s;
                var o = r.arg;
                return o ? o.done ? (t[e.resultName] = o.value,
                t.next = e.nextLoc,
                "return" !== t.method && (t.method = "next",
                t.arg = void 0),
                t.delegate = null,
                s) : o : (t.method = "throw",
                t.arg = new TypeError("iterator result is not an object"),
                t.delegate = null,
                s)
            }
            function w(e) {
                var t = {
                    tryLoc: e[0]
                };
                1 in e && (t.catchLoc = e[1]),
                2 in e && (t.finallyLoc = e[2],
                t.afterLoc = e[3]),
                this.tryEntries.push(t)
            }
            function k(e) {
                var t = e.completion || {};
                t.type = "normal",
                delete t.arg,
                e.completion = t
            }
            function _(e) {
                this.tryEntries = [{
                    tryLoc: "root"
                }],
                e.forEach(w, this),
                this.reset(!0)
            }
            function x(e) {
                if (e) {
                    var t = e[o];
                    if (t)
                        return t.call(e);
                    if ("function" == typeof e.next)
                        return e;
                    if (!isNaN(e.length)) {
                        var r = -1
                          , i = function t() {
                            for (; ++r < e.length; )
                                if (n.call(e, r))
                                    return t.value = e[r],
                                    t.done = !1,
                                    t;
                            return t.value = void 0,
                            t.done = !0,
                            t
                        };
                        return i.next = i
                    }
                }
                return {
                    next: E
                }
            }
            function E() {
                return {
                    value: void 0,
                    done: !0
                }
            }
            return d.prototype = g.constructor = f,
            f.constructor = d,
            f[a] = d.displayName = "GeneratorFunction",
            e.isGeneratorFunction = function(e) {
                var t = "function" == typeof e && e.constructor;
                return !!t && (t === d || "GeneratorFunction" === (t.displayName || t.name))
            }
            ,
            e.mark = function(e) {
                return Object.setPrototypeOf ? Object.setPrototypeOf(e, f) : (e.__proto__ = f,
                a in e || (e[a] = "GeneratorFunction")),
                e.prototype = Object.create(g),
                e
            }
            ,
            e.awrap = function(e) {
                return {
                    __await: e
                }
            }
            ,
            y(v.prototype),
            v.prototype[i] = function() {
                return this
            }
            ,
            e.AsyncIterator = v,
            e.async = function(t, n, r, o, i) {
                void 0 === i && (i = Promise);
                var a = new v(u(t, n, r, o),i);
                return e.isGeneratorFunction(n) ? a : a.next().then((function(e) {
                    return e.done ? e.value : a.next()
                }
                ))
            }
            ,
            y(g),
            g[a] = "Generator",
            g[o] = function() {
                return this
            }
            ,
            g.toString = function() {
                return "[object Generator]"
            }
            ,
            e.keys = function(e) {
                var t = [];
                for (var n in e)
                    t.push(n);
                return t.reverse(),
                function n() {
                    for (; t.length; ) {
                        var r = t.pop();
                        if (r in e)
                            return n.value = r,
                            n.done = !1,
                            n
                    }
                    return n.done = !0,
                    n
                }
            }
            ,
            e.values = x,
            _.prototype = {
                constructor: _,
                reset: function(e) {
                    if (this.prev = 0,
                    this.next = 0,
                    this.sent = this._sent = void 0,
                    this.done = !1,
                    this.delegate = null,
                    this.method = "next",
                    this.arg = void 0,
                    this.tryEntries.forEach(k),
                    !e)
                        for (var t in this)
                            "t" === t.charAt(0) && n.call(this, t) && !isNaN(+t.slice(1)) && (this[t] = void 0)
                },
                stop: function() {
                    this.done = !0;
                    var e = this.tryEntries[0].completion;
                    if ("throw" === e.type)
                        throw e.arg;
                    return this.rval
                },
                dispatchException: function(e) {
                    if (this.done)
                        throw e;
                    var t = this;
                    function r(n, r) {
                        return a.type = "throw",
                        a.arg = e,
                        t.next = n,
                        r && (t.method = "next",
                        t.arg = void 0),
                        !!r
                    }
                    for (var o = this.tryEntries.length - 1; o >= 0; --o) {
                        var i = this.tryEntries[o]
                          , a = i.completion;
                        if ("root" === i.tryLoc)
                            return r("end");
                        if (i.tryLoc <= this.prev) {
                            var u = n.call(i, "catchLoc")
                              , c = n.call(i, "finallyLoc");
                            if (u && c) {
                                if (this.prev < i.catchLoc)
                                    return r(i.catchLoc, !0);
                                if (this.prev < i.finallyLoc)
                                    return r(i.finallyLoc)
                            } else if (u) {
                                if (this.prev < i.catchLoc)
                                    return r(i.catchLoc, !0)
                            } else {
                                if (!c)
                                    throw new Error("try statement without catch or finally");
                                if (this.prev < i.finallyLoc)
                                    return r(i.finallyLoc)
                            }
                        }
                    }
                },
                abrupt: function(e, t) {
                    for (var r = this.tryEntries.length - 1; r >= 0; --r) {
                        var o = this.tryEntries[r];
                        if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this.prev < o.finallyLoc) {
                            var i = o;
                            break
                        }
                    }
                    i && ("break" === e || "continue" === e) && i.tryLoc <= t && t <= i.finallyLoc && (i = null);
                    var a = i ? i.completion : {};
                    return a.type = e,
                    a.arg = t,
                    i ? (this.method = "next",
                    this.next = i.finallyLoc,
                    s) : this.complete(a)
                },
                complete: function(e, t) {
                    if ("throw" === e.type)
                        throw e.arg;
                    return "break" === e.type || "continue" === e.type ? this.next = e.arg : "return" === e.type ? (this.rval = this.arg = e.arg,
                    this.method = "return",
                    this.next = "end") : "normal" === e.type && t && (this.next = t),
                    s
                },
                finish: function(e) {
                    for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                        var n = this.tryEntries[t];
                        if (n.finallyLoc === e)
                            return this.complete(n.completion, n.afterLoc),
                            k(n),
                            s
                    }
                },
                catch: function(e) {
                    for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                        var n = this.tryEntries[t];
                        if (n.tryLoc === e) {
                            var r = n.completion;
                            if ("throw" === r.type) {
                                var o = r.arg;
                                k(n)
                            }
                            return o
                        }
                    }
                    throw new Error("illegal catch attempt")
                },
                delegateYield: function(e, t, n) {
                    return this.delegate = {
                        iterator: x(e),
                        resultName: t,
                        nextLoc: n
                    },
                    "next" === this.method && (this.arg = void 0),
                    s
                }
            },
            e
        }(e.exports);
        try {
            regeneratorRuntime = r
        } catch (e) {
            Function("r", "regeneratorRuntime = r")(r)
        }
    }
    , function(e, t, n) {
        var r = n(12)
          , o = n(13);
        "string" == typeof (o = o.__esModule ? o.default : o) && (o = [[e.i, o, ""]]);
        var i = {
            insert: "head",
            singleton: !1
        }
          , a = (r(o, i),
        o.locals ? o.locals : {});
        e.exports = a
    }
    , function(e, t, n) {
        "use strict";
        var r, o = function() {
            return void 0 === r && (r = Boolean(window && document && document.all && !window.atob)),
            r
        }, i = function() {
            var e = {};
            return function(t) {
                if (void 0 === e[t]) {
                    var n = document.querySelector(t);
                    if (window.HTMLIFrameElement && n instanceof window.HTMLIFrameElement)
                        try {
                            n = n.contentDocument.head
                        } catch (e) {
                            n = null
                        }
                    e[t] = n
                }
                return e[t]
            }
        }(), a = [];
        function u(e) {
            for (var t = -1, n = 0; n < a.length; n++)
                if (a[n].identifier === e) {
                    t = n;
                    break
                }
            return t
        }
        function c(e, t) {
            for (var n = {}, r = [], o = 0; o < e.length; o++) {
                var i = e[o]
                  , c = t.base ? i[0] + t.base : i[0]
                  , s = n[c] || 0
                  , l = "".concat(c, " ").concat(s);
                n[c] = s + 1;
                var d = u(l)
                  , f = {
                    css: i[1],
                    media: i[2],
                    sourceMap: i[3]
                };
                -1 !== d ? (a[d].references++,
                a[d].updater(f)) : a.push({
                    identifier: l,
                    updater: g(f, t),
                    references: 1
                }),
                r.push(l)
            }
            return r
        }
        function s(e) {
            var t = document.createElement("style")
              , r = e.attributes || {};
            if (void 0 === r.nonce) {
                var o = n.nc;
                o && (r.nonce = o)
            }
            if (Object.keys(r).forEach((function(e) {
                t.setAttribute(e, r[e])
            }
            )),
            "function" == typeof e.insert)
                e.insert(t);
            else {
                var a = i(e.insert || "head");
                if (!a)
                    throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                a.appendChild(t)
            }
            return t
        }
        var l, d = (l = [],
        function(e, t) {
            return l[e] = t,
            l.filter(Boolean).join("\n")
        }
        );
        function f(e, t, n, r) {
            var o = n ? "" : r.media ? "@media ".concat(r.media, " {").concat(r.css, "}") : r.css;
            if (e.styleSheet)
                e.styleSheet.cssText = d(t, o);
            else {
                var i = document.createTextNode(o)
                  , a = e.childNodes;
                a[t] && e.removeChild(a[t]),
                a.length ? e.insertBefore(i, a[t]) : e.appendChild(i)
            }
        }
        function p(e, t, n) {
            var r = n.css
              , o = n.media
              , i = n.sourceMap;
            if (o ? e.setAttribute("media", o) : e.removeAttribute("media"),
            i && btoa && (r += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(i)))), " */")),
            e.styleSheet)
                e.styleSheet.cssText = r;
            else {
                for (; e.firstChild; )
                    e.removeChild(e.firstChild);
                e.appendChild(document.createTextNode(r))
            }
        }
        var h = null
          , m = 0;
        function g(e, t) {
            var n, r, o;
            if (t.singleton) {
                var i = m++;
                n = h || (h = s(t)),
                r = f.bind(null, n, i, !1),
                o = f.bind(null, n, i, !0)
            } else
                n = s(t),
                r = p.bind(null, n, t),
                o = function() {
                    !function(e) {
                        if (null === e.parentNode)
                            return !1;
                        e.parentNode.removeChild(e)
                    }(n)
                }
                ;
            return r(e),
            function(t) {
                if (t) {
                    if (t.css === e.css && t.media === e.media && t.sourceMap === e.sourceMap)
                        return;
                    r(e = t)
                } else
                    o()
            }
        }
        e.exports = function(e, t) {
            (t = t || {}).singleton || "boolean" == typeof t.singleton || (t.singleton = o());
            var n = c(e = e || [], t);
            return function(e) {
                if (e = e || [],
                "[object Array]" === Object.prototype.toString.call(e)) {
                    for (var r = 0; r < n.length; r++) {
                        var o = u(n[r]);
                        a[o].references--
                    }
                    for (var i = c(e, t), s = 0; s < n.length; s++) {
                        var l = u(n[s]);
                        0 === a[l].references && (a[l].updater(),
                        a.splice(l, 1))
                    }
                    n = i
                }
            }
        }
    }
    , function(e, t, n) {
        (t = n(14)(!1)).push([e.i, '.image-tool {\n  --bg-color: #cdd1e0;\n  --front-color: #388ae5;\n  --border-color: #e8e8eb;\n\n}\n\n  .image-tool__image {\n    border-radius: 3px;\n    overflow: hidden;\n    margin-bottom: 10px;\n  }\n\n  .image-tool__image-picture {\n      max-width: 100%;\n      vertical-align: bottom;\n      display: block;\n    }\n\n  .image-tool__image-preloader {\n      width: 50px;\n      height: 50px;\n      border-radius: 50%;\n      background-size: cover;\n      margin: auto;\n      position: relative;\n      background-color: var(--bg-color);\n      background-position: center center;\n    }\n\n  .image-tool__image-preloader::after {\n        content: "";\n        position: absolute;\n        z-index: 3;\n        width: 60px;\n        height: 60px;\n        border-radius: 50%;\n        border: 2px solid var(--bg-color);\n        border-top-color: var(--front-color);\n        left: 50%;\n        top: 50%;\n        margin-top: -30px;\n        margin-left: -30px;\n        animation: image-preloader-spin 2s infinite linear;\n        box-sizing: border-box;\n      }\n\n  .image-tool__caption[contentEditable="true"][data-placeholder]::before {\n      position: absolute !important;\n      content: attr(data-placeholder);\n      color: #707684;\n      font-weight: normal;\n      display: none;\n    }\n\n  .image-tool__caption[contentEditable="true"][data-placeholder]:empty::before {\n        display: block;\n      }\n\n  .image-tool__caption[contentEditable="true"][data-placeholder]:empty:focus::before {\n        display: none;\n      }\n\n  .image-tool--empty .image-tool__image {\n      display: none;\n    }\n\n  .image-tool--empty .image-tool__caption, .image-tool--loading .image-tool__caption {\n      display: none;\n    }\n\n  .image-tool .cdx-button {\n    display: flex;\n    align-items: center;\n    justify-content: center;\n  }\n\n  .image-tool .cdx-button svg {\n      height: auto;\n      margin: 0 6px 0 0;\n    }\n\n  .image-tool--filled .cdx-button {\n      display: none;\n    }\n\n  .image-tool--filled .image-tool__image-preloader {\n        display: none;\n      }\n\n  .image-tool--loading .image-tool__image {\n      min-height: 200px;\n      display: flex;\n      border: 1px solid var(--border-color);\n      background-color: #fff;\n    }\n\n  .image-tool--loading .image-tool__image-picture {\n        display: none;\n      }\n\n  .image-tool--loading .cdx-button {\n      display: none;\n    }\n\n  /**\n   * Tunes\n   * ----------------\n   */\n\n  .image-tool--withBorder .image-tool__image {\n      border: 1px solid var(--border-color);\n    }\n\n  .image-tool--withBackground .image-tool__image {\n      padding: 15px;\n      background: var(--bg-color);\n    }\n\n  .image-tool--withBackground .image-tool__image-picture {\n        max-width: 60%;\n        margin: 0 auto;\n      }\n\n  .image-tool--stretched .image-tool__image-picture {\n        width: 100%;\n      }\n\n@keyframes image-preloader-spin {\n  0% {\n    transform: rotate(0deg);\n  }\n  100% {\n    transform: rotate(360deg);\n  }\n}\n', ""]),
        e.exports = t
    }
    , function(e, t, n) {
        "use strict";
        e.exports = function(e) {
            var t = [];
            return t.toString = function() {
                return this.map((function(t) {
                    var n = function(e, t) {
                        var n = e[1] || ""
                          , r = e[3];
                        if (!r)
                            return n;
                        if (t && "function" == typeof btoa) {
                            var o = (a = r,
                            u = btoa(unescape(encodeURIComponent(JSON.stringify(a)))),
                            c = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(u),
                            "/*# ".concat(c, " */"))
                              , i = r.sources.map((function(e) {
                                return "/*# sourceURL=".concat(r.sourceRoot || "").concat(e, " */")
                            }
                            ));
                            return [n].concat(i).concat([o]).join("\n")
                        }
                        var a, u, c;
                        return [n].join("\n")
                    }(t, e);
                    return t[2] ? "@media ".concat(t[2], " {").concat(n, "}") : n
                }
                )).join("")
            }
            ,
            t.i = function(e, n, r) {
                "string" == typeof e && (e = [[null, e, ""]]);
                var o = {};
                if (r)
                    for (var i = 0; i < this.length; i++) {
                        var a = this[i][0];
                        null != a && (o[a] = !0)
                    }
                for (var u = 0; u < e.length; u++) {
                    var c = [].concat(e[u]);
                    r && o[c[0]] || (n && (c[2] ? c[2] = "".concat(n, " and ").concat(c[2]) : c[2] = n),
                    t.push(c))
                }
            }
            ,
            t
        }
    }
    , function(e, t, n) {
        var r = n(4);
        e.exports = function(e) {
            if (Array.isArray(e))
                return r(e)
        }
    }
    , function(e, t) {
        e.exports = function(e) {
            if ("undefined" != typeof Symbol && Symbol.iterator in Object(e))
                return Array.from(e)
        }
    }
    , function(e, t) {
        e.exports = function() {
            throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
        }
    }
    , function(e, t) {
        e.exports = function(e) {
            if (Array.isArray(e))
                return e
        }
    }
    , function(e, t) {
        e.exports = function(e, t) {
            if ("undefined" != typeof Symbol && Symbol.iterator in Object(e)) {
                var n = []
                  , r = !0
                  , o = !1
                  , i = void 0;
                try {
                    for (var a, u = e[Symbol.iterator](); !(r = (a = u.next()).done) && (n.push(a.value),
                    !t || n.length !== t); r = !0)
                        ;
                } catch (e) {
                    o = !0,
                    i = e
                } finally {
                    try {
                        r || null == u.return || u.return()
                    } finally {
                        if (o)
                            throw i
                    }
                }
                return n
            }
        }
    }
    , function(e, t) {
        e.exports = function() {
            throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
        }
    }
    , function(e, t, n) {
        "use strict";
        n.r(t),
        n.d(t, "default", (function() {
            return _
        }
        ));
        var r = n(3)
          , o = n.n(r)
          , i = n(6)
          , a = n.n(i)
          , u = n(2)
          , c = n.n(u)
          , s = n(0)
          , l = n.n(s);
        n(11);
        const d = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><rect width="14" height="14" x="5" y="5" stroke="currentColor" stroke-width="2" rx="4"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.13968 15.32L8.69058 11.5661C9.02934 11.2036 9.48873 11 9.96774 11C10.4467 11 10.9061 11.2036 11.2449 11.5661L15.3871 16M13.5806 14.0664L15.0132 12.533C15.3519 12.1705 15.8113 11.9668 16.2903 11.9668C16.7693 11.9668 17.2287 12.1705 17.5675 12.533L18.841 13.9634"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.7778 9.33331H13.7867"/></svg>';
        var f = n(7)
          , p = n.n(f);
        function h(e) {
            var t, n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null, r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}, o = document.createElement(e);
            Array.isArray(n) ? (t = o.classList).add.apply(t, p()(n)) : n && o.classList.add(n);
            for (var i in r)
                o[i] = r[i];
            return o
        }
        var m = function() {
            function e(t) {
                var n = t.api
                  , r = t.config
                  , o = t.onSelectFile
                  , i = t.readOnly;
                c()(this, e),
                this.api = n,
                this.config = r,
                this.onSelectFile = o,
                this.readOnly = i,
                this.nodes = {
                    wrapper: h("div", [this.CSS.baseClass, this.CSS.wrapper]),
                    imageContainer: h("div", [this.CSS.imageContainer]),
                    fileButton: this.createFileButton(),
                    imageEl: void 0,
                    imagePreloader: h("div", this.CSS.imagePreloader),
                    caption: h("div", [this.CSS.input, this.CSS.caption], {
                        contentEditable: !this.readOnly
                    })
                },
                this.nodes.caption.dataset.placeholder = this.config.captionPlaceholder,
                this.nodes.imageContainer.appendChild(this.nodes.imagePreloader),
                this.nodes.wrapper.appendChild(this.nodes.imageContainer),
                this.nodes.wrapper.appendChild(this.nodes.caption),
                this.nodes.wrapper.appendChild(this.nodes.fileButton)
            }
            return l()(e, [{
                key: "render",
                value: function(t) {
                    return t.file && 0 !== Object.keys(t.file).length ? this.toggleStatus(e.status.UPLOADING) : this.toggleStatus(e.status.EMPTY),
                    this.nodes.wrapper
                }
            }, {
                key: "createFileButton",
                value: function() {
                    var e = this
                      , t = h("div", [this.CSS.button]);
                    return t.innerHTML = this.config.buttonContent || "".concat(d, " ").concat(this.api.i18n.t("Select an Image")),
                    t.addEventListener("click", (function() {
                        e.onSelectFile()
                    }
                    )),
                    t
                }
            }, {
                key: "showPreloader",
                value: function(t) {
                    this.nodes.imagePreloader.style.backgroundImage = "url(".concat(t, ")"),
                    this.toggleStatus(e.status.UPLOADING)
                }
            }, {
                key: "hidePreloader",
                value: function() {
                    this.nodes.imagePreloader.style.backgroundImage = "",
                    this.toggleStatus(e.status.EMPTY)
                }
            }, {
                key: "fillImage",
                value: function(t) {
                    var n = this
                      , r = /\.mp4$/.test(t) ? "VIDEO" : "IMG"
                      , o = {
                        src: t
                    }
                      , i = "load";
                    "VIDEO" === r && (o.autoplay = !0,
                    o.loop = !0,
                    o.muted = !0,
                    o.playsinline = !0,
                    i = "loadeddata"),
                    this.nodes.imageEl = h(r, this.CSS.imageEl, o),
                    this.nodes.imageEl.addEventListener(i, (function() {
                        n.toggleStatus(e.status.FILLED),
                        n.nodes.imagePreloader && (n.nodes.imagePreloader.style.backgroundImage = "")
                    }
                    )),
                    this.nodes.imageContainer.appendChild(this.nodes.imageEl)
                }
            }, {
                key: "fillCaption",
                value: function(e) {
                    this.nodes.caption && (this.nodes.caption.innerHTML = e)
                }
            }, {
                key: "toggleStatus",
                value: function(t) {
                    for (var n in e.status)
                        Object.prototype.hasOwnProperty.call(e.status, n) && this.nodes.wrapper.classList.toggle("".concat(this.CSS.wrapper, "--").concat(e.status[n]), t === e.status[n])
                }
            }, {
                key: "applyTune",
                value: function(e, t) {
                    this.nodes.wrapper.classList.toggle("".concat(this.CSS.wrapper, "--").concat(e), t)
                }
            }, {
                key: "CSS",
                get: function() {
                    return {
                        baseClass: this.api.styles.block,
                        loading: this.api.styles.loader,
                        input: this.api.styles.input,
                        button: this.api.styles.button,
                        wrapper: "image-tool",
                        imageContainer: "image-tool__image",
                        imagePreloader: "image-tool__image-preloader",
                        imageEl: "image-tool__image-picture",
                        caption: "image-tool__caption"
                    }
                }
            }], [{
                key: "status",
                get: function() {
                    return {
                        EMPTY: "empty",
                        UPLOADING: "loading",
                        FILLED: "filled"
                    }
                }
            }]),
            e
        }()
          , g = n(8)
          , y = n.n(g)
          , v = n(1)
          , b = n.n(v);
        function w(e) {
            return e && "function" == typeof e.then
        }
        var k = function() {
            function e(t) {
                var n = t.config
                  , r = t.onUpload
                  , o = t.onError;
                c()(this, e),
                this.config = n,
                this.onUpload = r,
                this.onError = o
            }
            return l()(e, [{
                key: "uploadSelectedFile",
                value: function(e) {
                    var t = this
                      , n = e.onPreview
                      , r = function(e) {
                        var t = new FileReader;
                        t.readAsDataURL(e),
                        t.onload = function(e) {
                            n(e.target.result)
                        }
                    };
                    (this.config.uploader && "function" == typeof this.config.uploader.uploadByFile ? b.a.selectFiles({
                        accept: this.config.types
                    }).then((function(e) {
                        r(e[0]);
                        var n = t.config.uploader.uploadByFile(e[0]);
                        return w(n) || console.warn("Custom uploader method uploadByFile should return a Promise"),
                        n
                    }
                    )) : b.a.transport({
                        url: this.config.endpoints.byFile,
                        data: this.config.additionalRequestData,
                        accept: this.config.types,
                        headers: this.config.additionalRequestHeaders,
                        beforeSend: function(e) {
                            r(e[0])
                        },
                        fieldName: this.config.field
                    }).then((function(e) {
                        return e.body
                    }
                    ))).then((function(e) {
                        t.onUpload(e)
                    }
                    )).catch((function(e) {
                        t.onError(e)
                    }
                    ))
                }
            }, {
                key: "uploadByUrl",
                value: function(e) {
                    var t, n = this;
                    this.config.uploader && "function" == typeof this.config.uploader.uploadByUrl ? w(t = this.config.uploader.uploadByUrl(e)) || console.warn("Custom uploader method uploadByUrl should return a Promise") : t = b.a.post({
                        url: this.config.endpoints.byUrl,
                        data: Object.assign({
                            url: e
                        }, this.config.additionalRequestData),
                        type: b.a.contentType.JSON,
                        headers: this.config.additionalRequestHeaders
                    }).then((function(e) {
                        return e.body
                    }
                    )),
                    t.then((function(e) {
                        n.onUpload(e)
                    }
                    )).catch((function(e) {
                        n.onError(e)
                    }
                    ))
                }
            }, {
                key: "uploadByFile",
                value: function(e, t) {
                    var n, r = this, o = t.onPreview, i = new FileReader;
                    if (i.readAsDataURL(e),
                    i.onload = function(e) {
                        o(e.target.result)
                    }
                    ,
                    this.config.uploader && "function" == typeof this.config.uploader.uploadByFile)
                        w(n = this.config.uploader.uploadByFile(e)) || console.warn("Custom uploader method uploadByFile should return a Promise");
                    else {
                        var a = new FormData;
                        a.append(this.config.field, e),
                        this.config.additionalRequestData && Object.keys(this.config.additionalRequestData).length && Object.entries(this.config.additionalRequestData).forEach((function(e) {
                            var t = y()(e, 2)
                              , n = t[0]
                              , r = t[1];
                            a.append(n, r)
                        }
                        )),
                        n = b.a.post({
                            url: this.config.endpoints.byFile,
                            data: a,
                            type: b.a.contentType.JSON,
                            headers: this.config.additionalRequestHeaders
                        }).then((function(e) {
                            return e.body
                        }
                        ))
                    }
                    n.then((function(e) {
                        r.onUpload(e)
                    }
                    )).catch((function(e) {
                        r.onError(e)
                    }
                    ))
                }
            }]),
            e
        }()
          , _ = function() {
            function e(t) {
                var n = this
                  , r = t.data
                  , o = t.config
                  , i = t.api
                  , a = t.readOnly;
                c()(this, e),
                this.api = i,
                this.readOnly = a,
                this.config = {
                    endpoints: o.endpoints || "",
                    additionalRequestData: o.additionalRequestData || {},
                    additionalRequestHeaders: o.additionalRequestHeaders || {},
                    field: o.field || "image",
                    types: o.types || "image/*",
                    captionPlaceholder: this.api.i18n.t(o.captionPlaceholder || "Caption"),
                    buttonContent: o.buttonContent || "",
                    uploader: o.uploader || void 0,
                    actions: o.actions || []
                },
                this.uploader = new k({
                    config: this.config,
                    onUpload: function(e) {
                        return n.onUpload(e)
                    },
                    onError: function(e) {
                        return n.uploadingFailed(e)
                    }
                }),
                this.ui = new m({
                    api: i,
                    config: this.config,
                    onSelectFile: function() {
                        n.uploader.uploadSelectedFile({
                            onPreview: function(e) {
                                n.ui.showPreloader(e)
                            }
                        })
                    },
                    readOnly: a
                }),
                this._data = {},
                this.data = r
            }
            var t;
            return l()(e, null, [{
                key: "isReadOnlySupported",
                get: function() {
                    return !0
                }
            }, {
                key: "toolbox",
                get: function() {
                    return {
                        icon: d,
                        title: "Image"
                    }
                }
            }, {
                key: "tunes",
                get: function() {
                    return [{
                        name: "withBorder",
                        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.9919 9.5H19.0015"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.5 5H14.5096"/><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M14.625 5H15C17.2091 5 19 6.79086 19 9V9.375"/><path stroke="currentColor" stroke-width="2" d="M9.375 5L9 5C6.79086 5 5 6.79086 5 9V9.375"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.3725 5H9.38207"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 9.5H5.00957"/><path stroke="currentColor" stroke-width="2" d="M9.375 19H9C6.79086 19 5 17.2091 5 15V14.625"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.3725 19H9.38207"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 14.55H5.00957"/><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 13V16M16 19V16M19 16H16M16 16H13"/></svg>',
                        title: "With border",
                        toggle: !0
                    }, {
                        name: "stretched",
                        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9L20 12L17 15"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 12H20"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 9L4 12L7 15"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12H10"/></svg>',
                        title: "Stretch image",
                        toggle: !0
                    }, {
                        name: "withBackground",
                        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19V19C9.13623 19 8.20435 19 7.46927 18.6955C6.48915 18.2895 5.71046 17.5108 5.30448 16.5307C5 15.7956 5 14.8638 5 13V12C5 9.19108 5 7.78661 5.67412 6.77772C5.96596 6.34096 6.34096 5.96596 6.77772 5.67412C7.78661 5 9.19108 5 12 5H13.5C14.8956 5 15.5933 5 16.1611 5.17224C17.4395 5.56004 18.44 6.56046 18.8278 7.83886C19 8.40666 19 9.10444 19 10.5V10.5"/><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 13V16M16 19V16M19 16H16M16 16H13"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.5 17.5L17.5 6.5"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.9919 10.5H19.0015"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.9919 19H11.0015"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13L13 5"/></svg>',
                        title: "With background",
                        toggle: !0
                    },  {
                        name: "BorderImagen26",
                        icon: '<svg width="24px" height="24px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 18V9C6 7.34315 7.34315 6 9 6H39C40.6569 6 42 7.34315 42 9V18" stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M32 24V31" stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 15V31" stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 19V31" stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 30V39C6 40.6569 7.34315 42 9 42H39C40.6569 42 42 40.6569 42 39V30" stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>             ',                        
                        title: "Border Imagen",
                        toggle: !0,
                        className: "BorderImagen26",                                           
                            onClick: (e) => {
                              // Lógica para abrir el cuadro de diálogo o realizar alguna acción cuando se hace clic en el ícono
                              console.log("Link Imagen clicked");
                            }
                          
                        
                    }]
                }
            }]),
            l()(e, [{
                key: "render",
                value: function() {
                    return this.ui.render(this.data)
                }
            }, {
                key: "validate",
                value: function(e) {
                    return e.file && e.file.url
                }
            }, {
                key: "save",
                value: function() {
                    var e = this.ui.nodes.caption;
                    return this._data.caption = e.innerHTML,
                    this.data
                }
            }, {
                key: "renderSettings",
                value: function() {
                    var t = this;
                    return e.tunes.concat(this.config.actions).map((function(e) {
                        return {
                            icon: e.icon,
                            label: t.api.i18n.t(e.title),
                            name: e.name,
                            toggle: e.toggle,
                            isActive: t.data[e.name],
                            onActivate: function() {
                                "function" != typeof e.action ? t.tuneToggled(e.name) : e.action(e.name)
                            }
                        }
                    }
                    ))
                }
            }, {
                key: "appendCallback",
                value: function() {
                    this.ui.nodes.fileButton.click()
                }
            }, {
                key: "onPaste",
                value: (t = a()(o.a.mark((function e(t) {
                    var n, r, i, a, u;
                    return o.a.wrap((function(e) {
                        for (; ; )
                            switch (e.prev = e.next) {
                            case 0:
                                e.t0 = t.type,
                                e.next = "tag" === e.t0 ? 3 : "pattern" === e.t0 ? 15 : "file" === e.t0 ? 18 : 21;
                                break;
                            case 3:
                                if (n = t.detail.data,
                                !/^blob:/.test(n.src)) {
                                    e.next = 13;
                                    break
                                }
                                return e.next = 7,
                                fetch(n.src);
                            case 7:
                                return r = e.sent,
                                e.next = 10,
                                r.blob();
                            case 10:
                                return i = e.sent,
                                this.uploadFile(i),
                                e.abrupt("break", 21);
                            case 13:
                                return this.uploadUrl(n.src),
                                e.abrupt("break", 21);
                            case 15:
                                return a = t.detail.data,
                                this.uploadUrl(a),
                                e.abrupt("break", 21);
                            case 18:
                                return u = t.detail.file,
                                this.uploadFile(u),
                                e.abrupt("break", 21);
                            case 21:
                            case "end":
                                return e.stop()
                            }
                    }
                    ), e, this)
                }
                ))),
                function(e) {
                    return t.apply(this, arguments)
                }
                )
            }, {
                key: "onUpload",
                value: function(e) {
                    e.success && e.file ? this.image = e.file : this.uploadingFailed("incorrect response: " + JSON.stringify(e))
                }
            }, {
                key: "uploadingFailed",
                value: function(e) {
                    console.log("Image Tool: uploading failed because of", e),
                    this.api.notifier.show({
                        message: this.api.i18n.t(`Couldn’t upload image. Please try another. Error > ${e.body.error}`),
                        style: "error"
                    }),
                    this.ui.hidePreloader()
                }
            }, {
                key: "tuneToggled",
                value: function(e) {
                    this.setTune(e, !this._data[e])
                }
            }, {
                key: "setTune",
                value: function(e, t) {
                    var n = this;
                    this._data[e] = t,
                    this.ui.applyTune(e, t),
                    "stretched" === e && Promise.resolve().then((function() {
                        var e = n.api.blocks.getCurrentBlockIndex();
                        n.api.blocks.stretchBlock(e, t)
                    }
                    )).catch((function(e) {
                        console.error(e)
                    }
                    ))
                }
            }, {
                key: "uploadFile",
                value: function(e) {
                    var t = this;
                    this.uploader.uploadByFile(e, {
                        onPreview: function(e) {
                            t.ui.showPreloader(e)
                        }
                    })
                }
            }, {
                key: "uploadUrl",
                value: function(e) {
                    this.ui.showPreloader(e),
                    this.uploader.uploadByUrl(e)
                }
            }, {
                key: "data",
                set: function(t) {
                    var n = this;
                    this.image = t.file,
                    this._data.caption = t.caption || "",
                    this.ui.fillCaption(this._data.caption),
                    e.tunes.forEach((function(e) {
                        var r = e.name
                          , o = void 0 !== t[r] && (!0 === t[r] || "true" === t[r]);
                        n.setTune(r, o)
                    }
                    ))
                },
                get: function() {
                    return this._data
                }
            }, {
                key: "image",
                set: function(e) {
                    this._data.file = e || {},
                    e && e.url && this.ui.fillImage(e.url)
                }
            }], [{
                key: "pasteConfig",
                get: function() {
                    return {
                        tags: [{
                            img: {
                                src: !0
                            }
                        }],
                        patterns: {
                            image: /https?:\/\/\S+\.(gif|jpe?g|tiff|png|svg|webp)(\?[a-z0-9=]*)?$/i
                        },
                        files: {
                            mimeTypes: ["image/*"]
                        }
                    }
                }
            }]),
            e
        }();
        /**
 * Image Tool for the Editor.js
 *
 * @author CodeX <team@codex.so>
 * @license MIT
 * @see {@link https://github.com/editor-js/image}
 
 */
    }
    ]).default
}
));
