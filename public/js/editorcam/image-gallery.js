/**
 * Skipped minification because the original files appears to be already minified.
 * Original file: /npm/@rodrigoodhin/editorjs-image-gallery@0.1.0/dist/bundle.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
!(function (e, t) {
    "object" == typeof exports && "object" == typeof module
      ? (module.exports = t())
      : "function" == typeof define && define.amd
      ? define([], t)
      : "object" == typeof exports
      ? (exports.ImageGallery = t())
      : (e.ImageGallery = t());
  })(window, function () {
    return (function (e) {
      var t = {};
      function n(a) {
        if (t[a]) return t[a].exports;
        var r = (t[a] = { i: a, l: !1, exports: {} });
        return e[a].call(r.exports, r, r.exports, n), (r.l = !0), r.exports;
      }
      return (
        (n.m = e),
        (n.c = t),
        (n.d = function (e, t, a) {
          n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: a });
        }),
        (n.r = function (e) {
          "undefined" != typeof Symbol &&
            Symbol.toStringTag &&
            Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
            Object.defineProperty(e, "__esModule", { value: !0 });
        }),
        (n.t = function (e, t) {
          if ((1 & t && (e = n(e)), 8 & t)) return e;
          if (4 & t && "object" == typeof e && e && e.__esModule) return e;
          var a = Object.create(null);
          if (
            (n.r(a),
            Object.defineProperty(a, "default", { enumerable: !0, value: e }),
            2 & t && "string" != typeof e)
          )
            for (var r in e)
              n.d(
                a,
                r,
                function (t) {
                  return e[t];
                }.bind(null, r)
              );
          return a;
        }),
        (n.n = function (e) {
          var t =
            e && e.__esModule
              ? function () {
                  return e.default;
                }
              : function () {
                  return e;
                };
          return n.d(t, "a", t), t;
        }),
        (n.o = function (e, t) {
          return Object.prototype.hasOwnProperty.call(e, t);
        }),
        (n.p = "/"),
        n((n.s = 2))
      );
    })([
      function (e, t) {
        e.exports = function (e) {
          var t = [];
          return (
            (t.toString = function () {
              return this.map(function (t) {
                var n = (function (e, t) {
                  var n = e[1] || "",
                    a = e[3];
                  if (!a) return n;
                  if (t && "function" == typeof btoa) {
                    var r =
                        ((o = a),
                        "/*# sourceMappingURL=data:application/json;charset=utf-8;base64," +
                          btoa(unescape(encodeURIComponent(JSON.stringify(o)))) +
                          " */"),
                      i = a.sources.map(function (e) {
                        return "/*# sourceURL=" + a.sourceRoot + e + " */";
                      });
                    return [n].concat(i).concat([r]).join("\n");
                  }
                  var o;
                  return [n].join("\n");
                })(t, e);
                return t[2] ? "@media " + t[2] + "{" + n + "}" : n;
              }).join("");
            }),
            (t.i = function (e, n) {
              "string" == typeof e && (e = [[null, e, ""]]);
              for (var a = {}, r = 0; r < this.length; r++) {
                var i = this[r][0];
                "number" == typeof i && (a[i] = !0);
              }
              for (r = 0; r < e.length; r++) {
                var o = e[r];
                ("number" == typeof o[0] && a[o[0]]) ||
                  (n && !o[2]
                    ? (o[2] = n)
                    : n && (o[2] = "(" + o[2] + ") and (" + n + ")"),
                  t.push(o));
              }
            }),
            t
          );
        };
      },
      function (e, t, n) {
        var a,
          r,
          i = {},
          o =
            ((a = function () {
              return window && document && document.all && !window.atob;
            }),
            function () {
              return void 0 === r && (r = a.apply(this, arguments)), r;
            }),
          l = function (e) {
            return document.querySelector(e);
          },
          s = (function (e) {
            var t = {};
            return function (e) {
              if ("function" == typeof e) return e();
              if (void 0 === t[e]) {
                var n = l.call(this, e);
                if (
                  window.HTMLIFrameElement &&
                  n instanceof window.HTMLIFrameElement
                )
                  try {
                    n = n.contentDocument.head;
                  } catch (e) {
                    n = null;
                  }
                t[e] = n;
              }
              return t[e];
            };
          })(),
          u = null,
          c = 0,
          d = [],
          h = n(5);
        function g(e, t) {
          for (var n = 0; n < e.length; n++) {
            var a = e[n],
              r = i[a.id];
            if (r) {
              r.refs++;
              for (var o = 0; o < r.parts.length; o++) r.parts[o](a.parts[o]);
              for (; o < a.parts.length; o++) r.parts.push(b(a.parts[o], t));
            } else {
              var l = [];
              for (o = 0; o < a.parts.length; o++) l.push(b(a.parts[o], t));
              i[a.id] = { id: a.id, refs: 1, parts: l };
            }
          }
        }
        function p(e, t) {
          for (var n = [], a = {}, r = 0; r < e.length; r++) {
            var i = e[r],
              o = t.base ? i[0] + t.base : i[0],
              l = { css: i[1], media: i[2], sourceMap: i[3] };
            a[o] ? a[o].parts.push(l) : n.push((a[o] = { id: o, parts: [l] }));
          }
          return n;
        }
        function f(e, t) {
          var n = s(e.insertInto);
          if (!n)
            throw new Error(
              "Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid."
            );
          var a = d[d.length - 1];
          if ("top" === e.insertAt)
            a
              ? a.nextSibling
                ? n.insertBefore(t, a.nextSibling)
                : n.appendChild(t)
              : n.insertBefore(t, n.firstChild),
              d.push(t);
          else if ("bottom" === e.insertAt) n.appendChild(t);
          else {
            if ("object" != typeof e.insertAt || !e.insertAt.before)
              throw new Error(
                "[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n"
              );
            var r = s(e.insertInto + " " + e.insertAt.before);
            n.insertBefore(t, r);
          }
        }
        function v(e) {
          if (null === e.parentNode) return !1;
          e.parentNode.removeChild(e);
          var t = d.indexOf(e);
          t >= 0 && d.splice(t, 1);
        }
        function m(e) {
          var t = document.createElement("style");
          return (
            void 0 === e.attrs.type && (e.attrs.type = "text/css"),
            y(t, e.attrs),
            f(e, t),
            t
          );
        }
        function y(e, t) {
          Object.keys(t).forEach(function (n) {
            e.setAttribute(n, t[n]);
          });
        }
        function b(e, t) {
          var n, a, r, i;
          if (t.transform && e.css) {
            if (!(i = t.transform(e.css))) return function () {};
            e.css = i;
          }
          if (t.singleton) {
            var o = c++;
            (n = u || (u = m(t))),
              (a = z.bind(null, n, o, !1)),
              (r = z.bind(null, n, o, !0));
          } else
            e.sourceMap &&
            "function" == typeof URL &&
            "function" == typeof URL.createObjectURL &&
            "function" == typeof URL.revokeObjectURL &&
            "function" == typeof Blob &&
            "function" == typeof btoa
              ? ((n = (function (e) {
                  var t = document.createElement("link");
                  return (
                    void 0 === e.attrs.type && (e.attrs.type = "text/css"),
                    (e.attrs.rel = "stylesheet"),
                    y(t, e.attrs),
                    f(e, t),
                    t
                  );
                })(t)),
                (a = S.bind(null, n, t)),
                (r = function () {
                  v(n), n.href && URL.revokeObjectURL(n.href);
                }))
              : ((n = m(t)),
                (a = k.bind(null, n)),
                (r = function () {
                  v(n);
                }));
          return (
            a(e),
            function (t) {
              if (t) {
                if (
                  t.css === e.css &&
                  t.media === e.media &&
                  t.sourceMap === e.sourceMap
                )
                  return;
                a((e = t));
              } else r();
            }
          );
        }
        e.exports = function (e, t) {
          if ("undefined" != typeof DEBUG && DEBUG && "object" != typeof document)
            throw new Error(
              "The style-loader cannot be used in a non-browser environment"
            );
          ((t = t || {}).attrs = "object" == typeof t.attrs ? t.attrs : {}),
            t.singleton || "boolean" == typeof t.singleton || (t.singleton = o()),
            t.insertInto || (t.insertInto = "head"),
            t.insertAt || (t.insertAt = "bottom");
          var n = p(e, t);
          return (
            g(n, t),
            function (e) {
              for (var a = [], r = 0; r < n.length; r++) {
                var o = n[r];
                (l = i[o.id]).refs--, a.push(l);
              }
              e && g(p(e, t), t);
              for (r = 0; r < a.length; r++) {
                var l;
                if (0 === (l = a[r]).refs) {
                  for (var s = 0; s < l.parts.length; s++) l.parts[s]();
                  delete i[l.id];
                }
              }
            }
          );
        };
        var x,
          w =
            ((x = []),
            function (e, t) {
              return (x[e] = t), x.filter(Boolean).join("\n");
            });
        function z(e, t, n, a) {
          var r = n ? "" : a.css;
          if (e.styleSheet) e.styleSheet.cssText = w(t, r);
          else {
            var i = document.createTextNode(r),
              o = e.childNodes;
            o[t] && e.removeChild(o[t]),
              o.length ? e.insertBefore(i, o[t]) : e.appendChild(i);
          }
        }
        function k(e, t) {
          var n = t.css,
            a = t.media;
          if ((a && e.setAttribute("media", a), e.styleSheet))
            e.styleSheet.cssText = n;
          else {
            for (; e.firstChild; ) e.removeChild(e.firstChild);
            e.appendChild(document.createTextNode(n));
          }
        }
        function S(e, t, n) {
          var a = n.css,
            r = n.sourceMap,
            i = void 0 === t.convertToAbsoluteUrls && r;
          (t.convertToAbsoluteUrls || i) && (a = h(a)),
            r &&
              (a +=
                "\n/*# sourceMappingURL=data:application/json;base64," +
                btoa(unescape(encodeURIComponent(JSON.stringify(r)))) +
                " */");
          var o = new Blob([a], { type: "text/css" }),
            l = e.href;
          (e.href = URL.createObjectURL(o)), l && URL.revokeObjectURL(l);
        }
      },
      function (e, t, n) {
        function a(e, t) {
          for (var n = 0; n < t.length; n++) {
            var a = t[n];
            (a.enumerable = a.enumerable || !1),
              (a.configurable = !0),
              "value" in a && (a.writable = !0),
              Object.defineProperty(e, a.key, a);
          }
        }
        n(3).toString(), n(6).toString();
        var r = n(8),
          i = (function () {
            function e(t) {
              var n = t.data,
                a = t.api;
              !(function (e, t) {
                if (!(e instanceof t))
                  throw new TypeError("Cannot call a class as a function");
              })(this, e),
                (this.nodes = {
                  wrapper: null,
                  urls: null,
                  editImages: null,
                  bkgMode: null,
                  layoutDefault: null,
                  layoutHorizontal: null,
                  layoutSquare: null,
                  layoutWithGap: null,
                  layoutWithFixedSize: null,
                }),
                (this.data = {
                  urls: n.urls || "",
                  editImages: void 0 === n.editImages || n.editImages,
                  bkgMode: void 0 !== n.bkgMode && n.bkgMode,
                  layoutDefault: void 0 === n.layoutDefault || n.layoutDefault,
                  layoutHorizontal:
                    void 0 !== n.layoutHorizontal && n.layoutHorizontal,
                  layoutSquare: void 0 !== n.layoutSquare && n.layoutSquare,
                  layoutWithGap: void 0 !== n.layoutWithGap && n.layoutWithGap,
                  layoutWithFixedSize:
                    void 0 !== n.layoutWithFixedSize && n.layoutWithFixedSize,
                }),
                (this.api = a),
                (this.wrapper = void 0),
                (this.settings = [
                  {
                    name: "editImages",
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg>',
                    title: "Edit Images",
                  },
                  {
                    name: "bkgMode",
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16"><path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"/><path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z"/></svg>',
                    title: "Background Mode",
                  },
                  {
                    name: "layoutDefault",
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns" viewBox="0 0 16 16"><path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V2zm8.5 0v8H15V2H8.5zm0 9v3H15v-3H8.5zm-1-9H1v3h6.5V2zM1 14h6.5V6H1v8z"/></svg>',
                    title: "Default Layout",
                  },
                  {
                    name: "layoutHorizontal",
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x2-gap" viewBox="0 0 16 16"><path d="M4 4v2H2V4h2zm1 7V9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 5V9a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 4v2H7V4h2zm5 0h-2v2h2V4zM4 9v2H2V9h2zm5 0v2H7V9h2zm5 0v2h-2V9h2zm-3-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-2z"/></svg>',
                    title: "Horizontal Layout",
                  },
                  {
                    name: "layoutSquare",
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/></svg>',
                    title: "Square Layout",
                  },
                  {
                    name: "layoutWithGap",
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16"><path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/></svg>',
                    title: "Layout With Gap",
                  },
                  {
                    name: "layoutWithFixedSize",
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x3" viewBox="0 0 16 16"><path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13zM1.5 1a.5.5 0 0 0-.5.5V5h4V1H1.5zM5 6H1v4h4V6zm1 4h4V6H6v4zm-1 1H1v3.5a.5.5 0 0 0 .5.5H5v-4zm1 0v4h4v-4H6zm5 0v4h3.5a.5.5 0 0 0 .5-.5V11h-4zm0-1h4V6h-4v4zm0-5h4V1.5a.5.5 0 0 0-.5-.5H11v4zm-1 0V1H6v4h4z"/></svg>',
                    title: "Layout With Fixed Size",
                  },
                ]),
                (this.blockIndex = this.api.blocks.getCurrentBlockIndex());
            }
            var t, n, i;
            return (
              (t = e),
              (i = [
                {
                  key: "toolbox",
                  get: function () {
                    return {
                      title: "Image Gallery",
                      icon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16"><path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/> <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/></svg>',
                    };
                  },
                },
                {
                  key: "sanitize",
                  get: function () {
                    return {
                      urls: {},
                      editImages: {},
                      bkgMode: {},
                      layoutDefault: {},
                      layoutHorizontal: {},
                      layoutSquare: {},
                      layoutWithGap: {},
                      layoutWithFixedSize: {},
                    };
                  },
                },
              ]),
              (n = [
                {
                  key: "render",
                  value: function () {
                    var e,
                      t = this;
                    if (
                      ((this.wrapper = document.createElement("div")),
                      this.wrapper.classList.add("image-gallery"),
                      this.data && this.data.urls)
                    )
                      return this._imageGallery(this.data.urls), this.wrapper;
                    var n = document.createElement("textarea");
                    return (
                      (n.className = "image-gallery-" + this.blockIndex),
                      (n.placeholder = "Paste your photos URL ..."),
                      ["paste", "change", "keyup"].forEach(function (a) {
                        return n.addEventListener(
                          a,
                          function (r) {
                            (e =
                              "paste" === a
                                ? r.clipboardData.getData("text").split("\n")
                                : n.value.split("\n")),
                              t._imageGallery(e);
                          },
                          !1
                        );
                      }),
                      (n.value =
                        this.data && this.data.urls ? this.data.urls : ""),
                      this.wrapper.appendChild(n),
                      (this.nodes.wrapper = this.wrapper),
                      (this.nodes.urls = e),
                      this.wrapper
                    );
                  },
                },
                {
                  key: "save",
                  value: function (e) {
                    var t = e.querySelectorAll("img"),
                      n = [];
                    return (
                      t.forEach(function (e, t) {
                        n[t] = e.src;
                      }),
                      Object.assign(this.data, { urls: n })
                    );
                  },
                },
                {
                  key: "validate",
                  value: function (e) {
                    var t = this,
                      n = [],
                      a = 0;
                    return (
                      e.urls.forEach(function (e) {
                        "" !== e.trim() && t._isImgUrl(e) && ((n[a] = e), a++);
                      }),
                      (e.urls = n),
                      !0
                    );
                  },
                },
                {
                  key: "data",
                  get: function () {
                    return this._data;
                  },
                  set: function (e) {
                    (this._data = Object.assign({}, this.data, e)),
                      this.nodes.urls && (this.nodes.urls = this.data.urls);
                  },
                },
                {
                  key: "renderSettings",
                  value: function () {
                    var e = this,
                      t = document.createElement("div");
                    return (
                      this.settings.forEach(function (n) {
                        var a = document.createElement("div");
                        a.classList.add("cdx-settings-button"),
                          (a.innerHTML = n.icon),
                          (a.title = n.title),
                          t.appendChild(a),
                          a.addEventListener("click", function () {
                            e._toggleTune(n.name),
                              a.classList.toggle("cdx-settings-button--active");
                          });
                      }),
                      t
                    );
                  },
                },
                {
                  key: "_toggleTune",
                  value: function (e) {
                    var t = this;
                    "bkgMode" === e || "editImages" === e
                      ? (this.data[e] = !this.data[e])
                      : this.settings.forEach(function (n) {
                          "bkgMode" !== n.name &&
                            "editImages" !== n.name &&
                            (n.name === e
                              ? (t.data[n.name] = !0)
                              : (t.data[n.name] = !1));
                        }),
                      this._acceptTuneView();
                  },
                },
                {
                  key: "_acceptTuneView",
                  value: function () {
                    var e = this,
                      t = document.querySelector(
                        "div#image-gallery-" + this.blockIndex + " > div.gg-box"
                      ),
                      n = document.querySelector(
                        "textarea.image-gallery-" + this.blockIndex
                      );
                    null !== t &&
                      (t.getAttributeNames().forEach(function (e) {
                        t.removeAttribute(e);
                      }),
                      (t.className = ""),
                      t.classList.add("gg-box"),
                      (t.id = ""),
                      this.settings.forEach(function (a) {
                        switch (a.name) {
                          case "editImages":
                            e.data.editImages &&
                            n.classList.contains("textarea-hide")
                              ? n.classList.remove("textarea-hide")
                              : e.data.editImages ||
                                n.classList.contains("textarea-hide") ||
                                n.classList.add("textarea-hide");
                            break;
                          case "bkgMode":
                            e.data.bkgMode &&
                              (t.classList.add("dark"),
                              r.galleryOptions({
                                selector: ".dark",
                                darkMode: !0,
                              }));
                            break;
                          case "layoutDefault":
                            break;
                          case "layoutHorizontal":
                            e.data.layoutHorizontal &&
                              ((t.id = "horizontal"),
                              r.galleryOptions({
                                selector: "#horizontal",
                                layout: "horizontal",
                              }));
                            break;
                          case "layoutSquare":
                            e.data.layoutSquare &&
                              ((t.id = "square"),
                              r.galleryOptions({
                                selector: "#square",
                                layout: "square",
                              }));
                            break;
                          case "layoutWithGap":
                            e.data.layoutWithGap &&
                              ((t.id = "gap"),
                              r.galleryOptions({
                                selector: "#gap",
                                gapLength: 10,
                              }));
                            break;
                          case "layoutWithFixedSize":
                            e.data.layoutWithFixedSize &&
                              ((t.id = "heightWidth"),
                              r.galleryOptions({
                                selector: "#heightWidth",
                                rowHeight: 180,
                                columnWidth: 280,
                              }));
                        }
                      }));
                  },
                },
                {
                  key: "_imageGallery",
                  value: function (e) {
                    var t = this,
                      n = 0;
                    document
                      .querySelectorAll("#image-gallery-" + this.blockIndex)
                      .forEach(function (e) {
                        null !== e && e.remove();
                      });
                    var a = document.createElement("div");
                    (a.className = "gg-box"),
                      e.forEach(function (e, r) {
                        if (null != t._isImgUrl(e)) {
                          n += 1;
                          var i = document.createElement("img");
                          (i.id = "gg-img-" + r),
                            (i.src = e.toString().trim()),
                            a.appendChild(i);
                        }
                      });
                    var i = document.createElement("div");
                    (i.className = "gg-container"),
                      (i.id = "image-gallery-" + this.blockIndex),
                      i.appendChild(a),
                      n > 0 && this.wrapper.appendChild(i),
                      r.loadGallery(),
                      this._acceptTuneView();
                  },
                },
                {
                  key: "_isImgUrl",
                  value: function (e) {
                    return e.match(/https?:\/\/\S+\.(gif|jpe?g|tiff|png|webp)$/i);
                  },
                },
              ]) && a(t.prototype, n),
              i && a(t, i),
              e
            );
          })();
        e.exports = i;
      },
      function (e, t, n) {
        var a = n(4);
        "string" == typeof a && (a = [[e.i, a, ""]]);
        var r = { hmr: !0, transform: void 0, insertInto: void 0 };
        n(1)(a, r);
        a.locals && (e.exports = a.locals);
      },
      function (e, t, n) {
        (e.exports = n(0)(!1)).push([
          e.i,
          ".image-gallery {\n    padding: 20px 0;\n}\n\n.image-gallery textarea {\n    width: 100%;\n    padding: 10px;\n    border: 1px solid #e4e4e4;\n    border-radius: 3px;\n    outline: none;\n    font-size: 14px;\n    height: 100px;\n    resize: none;\n    display: flex;\n}\n\n.textarea-hide {\n    display: none !important;\n}",
          "",
        ]);
      },
      function (e, t) {
        e.exports = function (e) {
          var t = "undefined" != typeof window && window.location;
          if (!t) throw new Error("fixUrls requires window.location");
          if (!e || "string" != typeof e) return e;
          var n = t.protocol + "//" + t.host,
            a = n + t.pathname.replace(/\/[^\/]*$/, "/");
          return e.replace(
            /url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi,
            function (e, t) {
              var r,
                i = t
                  .trim()
                  .replace(/^"(.*)"$/, function (e, t) {
                    return t;
                  })
                  .replace(/^'(.*)'$/, function (e, t) {
                    return t;
                  });
              return /^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(i)
                ? e
                : ((r =
                    0 === i.indexOf("//")
                      ? i
                      : 0 === i.indexOf("/")
                      ? n + i
                      : a + i.replace(/^\.\//, "")),
                  "url(" + JSON.stringify(r) + ")");
            }
          );
        };
      },
      function (e, t, n) {
        var a = n(7);
        "string" == typeof a && (a = [[e.i, a, ""]]);
        var r = { hmr: !0, transform: void 0, insertInto: void 0 };
        n(1)(a, r);
        a.locals && (e.exports = a.locals);
      },
      function (e, t, n) {
        (e.exports = n(0)(!1)).push([
          e.i,
          '.gg-container {\n    --main-color: #000;\n    --secondary-color: #111;\n    --txt-color: #fff;\n    --img-bg-color: rgba(240, 240, 240, 0.9);\n    --backdrop-color: rgba(240, 240, 240, 0.9);\n    --gap-length: 2px;\n    --row-height: 200px;\n    --column-width: 220px;\n}\n\n.gg-container *[data-theme="dark"] {\n    --main-color: #ddd;\n    --secondary-color: #eee;\n    --txt-color: #111;\n    --img-bg-color: rgba(20, 20, 20, 0.9);\n    --backdrop-color: rgba(30, 30, 30, 0.9);\n}\n\n.gg-box {\n    display: grid;\n    grid-template-columns: repeat(auto-fit, minmax(var(--column-width), 1fr));\n    grid-auto-rows: var(--row-height);\n    grid-gap: var(--gap-length);\n    margin: 20px 0;\n}\n\n.gg-box img {\n    object-fit: cover;\n    cursor: pointer;\n    width: 100%;\n    height: 100%;\n    background: var(--img-bg-color);\n}\n\n.gg-box img:hover {\n    opacity: 0.98;\n}\n\n#gg-screen {\n    position: fixed;\n    width: 100%;\n    height: 100%;\n    top: 0;\n    left: 0;\n    background: var(--backdrop-color);\n    z-index: 9999;\n    text-align: center;\n}\n\n#gg-screen .gg-image {\n    height: 100%;\n    display: inline-flex;\n    justify-content: center;\n    align-items: center;\n}\n\n#gg-screen .gg-image img {\n    max-width: 96%;\n    max-height: 96%;\n    margin: 0 auto;\n}\n\n.gg-btn {\n    width: 35px;\n    height: 35px;\n    background: var(--main-color);\n    color: var(--txt-color);\n    text-align: center;\n    line-height: 35px;\n    cursor: pointer;\n    -moz-transition: all 0.4s ease;\n    -o-transition: all 0.4s ease;\n    -webkit-transition: all 0.4s ease;\n    transition: all 0.4s ease;\n    font-size: 20px;\n    box-sizing: border-box;\n    padding-left: 2px;\n    position: fixed;\n    bottom: 10px;\n}\n\n.gg-btn:hover {\n    background: var(--secondary-color);\n}\n\n.gg-close {\n    top: 10px;\n}\n\n.gg-close,\n.gg-next {\n    right: 10px;\n}\n\n.gg-prev {\n    right: 50px;\n}\n\n.gg-prev,\n.gg-next {\n    bottom: 10px;\n}\n\n@media (min-width: 478px) {\n    .gg-box img:nth-child(2n):not(:last-of-type) {\n        grid-row-end: span 2;\n    }\n\n    [data-layout="horizontal"] img:nth-child(2n):not(:last-of-type) {\n        grid-column-end: span 2;\n        grid-row-end: span 1;\n    }\n\n    [data-layout="square"] img:nth-child(2n):not(:last-of-type) {\n        grid-row-end: span 1;\n        grid-column-end: span 1;\n    }\n}\n\n@media (max-width: 768px) {\n    .gg-box {\n        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));\n        grid-auto-rows: calc(var(--row-height) - 15vh);\n        margin: 10px 0;\n    }\n}\n\n@media (max-width: 450px) {\n    .gg-box {\n        grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));\n    }\n}',
          "",
        ]);
      },
      function (e, t, n) {
        function a(e, t) {
          for (var n = 0; n < t.length; n++) {
            var a = t[n];
            (a.enumerable = a.enumerable || !1),
              (a.configurable = !0),
              "value" in a && (a.writable = !0),
              Object.defineProperty(e, a.key, a);
          }
        }
        var r = (function () {
          function e() {
            !(function (e, t) {
              if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
            })(this, e);
          }
          var t, n, r;
          return (
            (t = e),
            (n = [
              {
                key: "loadGallery",
                value: function () {
                  var e = document.querySelector("body, html"),
                    t = document.querySelector(".gg-container"),
                    n = document.querySelectorAll(".gg-box > img"),
                    a = n.length;
                  n.forEach(function (r) {
                    r.addEventListener("click", function (r) {
                      var i,
                        o,
                        l = this,
                        s = l.parentElement,
                        u = document.createElement("div");
                      (u.id = "gg-screen"),
                        t.prepend(u),
                        s.hasAttribute("data-theme") &&
                          u.setAttribute("data-theme", "dark");
                      var c = l.id;
                      (e.style.overflow = "hidden"),
                        (u.innerHTML =
                          '<div class="gg-image"></div><div class="gg-close gg-btn">&times</div><div class="gg-next gg-btn">&rarr;</div><div class="gg-prev gg-btn">&larr;</div>');
                      var d = n[0].id,
                        h = n[a - 1].id,
                        g = document.querySelector(".gg-image"),
                        p = document.querySelector(".gg-prev"),
                        f = document.querySelector(".gg-next"),
                        v = document.querySelector(".gg-close");
                      (g.innerHTML =
                        '<img src="' + l.src + '" id="' + l.id + '" />'),
                        a > 1
                          ? c === d
                            ? ((p.hidden = !0), (o = !1), l.nextElementSibling)
                            : c === h
                            ? ((f.hidden = !0),
                              (i = !1),
                              l.previousElementSibling)
                            : (l.previousElementSibling, l.nextElementSibling)
                          : ((p.hidden = !0), (f.hidden = !0)),
                        u.addEventListener("click", function (e) {
                          (e.target !== this && e.target !== v) || b();
                        }),
                        e.addEventListener("keydown", function (e) {
                          (37 !== e.keyCode && 38 !== e.keyCode) || m(),
                            (39 !== e.keyCode && 40 !== e.keyCode) || y(),
                            27 === e.keyCode && b();
                        });
                      var m = function () {
                          (o = l.previousElementSibling),
                            (g.innerHTML =
                              '<img src="' + o.src + '" id="' + o.id + '" />'),
                            (l = l.previousElementSibling),
                            (f.hidden = !1),
                            (p.hidden = x() === d);
                        },
                        y = function () {
                          (i = l.nextElementSibling),
                            (g.innerHTML =
                              '<img src="' + i.src + '" id="' + i.id + '" />'),
                            (l = l.nextElementSibling),
                            (p.hidden = !1),
                            (f.hidden = x() === h);
                        },
                        b = function () {
                          (e.style.overflow = "auto"), u.remove();
                        };
                      p.addEventListener("click", m),
                        f.addEventListener("click", y);
                      var x = function () {
                        return document.querySelector(".gg-image > img").id;
                      };
                    });
                  });
                },
              },
              {
                key: "galleryOptions",
                value: function (e) {
                  e.selector &&
                    (this.selector = document.querySelector(e.selector)),
                    e.darkMode &&
                      this.selector.setAttribute("data-theme", "dark"),
                    ("horizontal" !== e.layout && "square" !== e.layout) ||
                      this.selector.setAttribute("data-layout", e.layout),
                    e.gapLength &&
                      this.selector.style.setProperty(
                        "--gap-length",
                        e.gapLength + "px"
                      ),
                    e.rowHeight &&
                      this.selector.style.setProperty(
                        "--row-height",
                        e.rowHeight + "px"
                      ),
                    e.columnWidth &&
                      this.selector.style.setProperty(
                        "--column-width",
                        e.columnWidth + "px"
                      );
                },
              },
            ]) && a(t.prototype, n),
            r && a(t, r),
            e
          );
        })();
        e.exports = new r();
      },
    ]);
  });
  