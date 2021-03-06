var msBeautify = msBeautify || {};
! function($) {
    function dd(q, t) {
        var t = $.extend(!0, {
                byJson: {
                    data: null,
                    selectedIndex: 0,
                    name: null,
                    size: 0,
                    multiple: !1,
                    width: 192
                },
                mainCSS: "wm-ui-dropdown-generic",
                height: 120,
                visibleRows: 7,
                rowHeight: 0,
                showIcon: !0,
                zIndex: 9999,
                useSprite: !1,
                animStyle: "slideDown",
                event: "click",
                openDirection: "auto",
                jsonTitle: !0,
                style: "",
                disabledOpacity: .7,
                disabledOptionEvents: !0,
                childWidth: 0,
                enableCheckbox: !1,
                checkboxNameSuffix: "_wmcheck",
                append: "",
                prepend: "",
                reverseMode: !0,
                roundedCorner: !0,
                enableAutoFilter: !0,
                on: {
                    create: null,
                    open: null,
                    close: null,
                    add: null,
                    remove: null,
                    change: null,
                    blur: null,
                    click: null,
                    dblclick: null,
                    mousemove: null,
                    mouseover: null,
                    mouseout: null,
                    focus: null,
                    mousedown: null,
                    mouseup: null
                }
            }, t),
            u = this,
            x = {
                postElementHolder: "_msddHolder",
                postID: "_msdd",
                postTitleID: "_title",
                postTitleTextID: "_titleText",
                postChildID: "_child"
            },
            y = {
                dd: t.mainCSS,
                ddTitle: "wm-ui-dropdown-title",
                arrow: "arrow",
                ddChild: "wm-ui-dropdown-child",
                ddTitleText: "ddTitleText",
                disabled: "disabled",
                enabled: "enabled",
                ddOutOfVision: "ddOutOfVision",
                borderTop: "borderTop",
                noBorderTop: "noBorderTop",
                selected: "selected",
                divider: "divider",
                optgroup: "optgroup",
                optgroupTitle: "optgroupTitle",
                description: "description",
                label: "textTitle",
                hover: "hover",
                disabledAll: "disabledAll"
            },
            z = {
                li: "_msddli_",
                borderRadiusTp: "borderRadiusTp",
                ddChildMore: "border shadow",
                fnone: "fnone"
            },
            A = !1,
            isMultiple = !1,
            isDisabled = !1,
            cacheElement = {},
            q, orginial = {},
            isOpen = !1,
            B = 40,
            UP_ARROW = 38,
            LEFT_ARROW = 37,
            RIGHT_ARROW = 39,
            ESCAPE = 27,
            ENTER = 13,
            ALPHABETS_START = 47,
            SHIFT = 16,
            CONTROL = 17,
            BACKSPACE = 8,
            DELETE = 46,
            C = !1,
            controlHolded = !1,
            lastTarget = null,
            forcedTrigger = !1,
            oldSelected, isCreated = !1,
            D = document,
            ua = window.navigator.userAgent,
            isIE = ua.match(/msie/i);
        t.reverseMode = t.reverseMode.toString(), t.roundedCorner = t.roundedCorner.toString();
        var E = function(e) {
                return "[object Array]" == Object.prototype.toString.call(e) ? !0 : !1
            },
            F = function() {
                var e = ua.indexOf("MSIE");
                return e > 0 ? parseInt(ua.substring(e + 5, ua.indexOf(".", e))) : 0
            },
            G = function() {
                t.mainCSS = $("#" + q).data("maincss") || t.mainCSS, t.visibleRows = $("#" + q).data("visiblerows") || t.visibleRows, 0 == $("#" + q).data("showicon") && (t.showIcon = $("#" + q).data("showicon")), t.useSprite = $("#" + q).data("usesprite") || t.useSprite, t.animStyle = $("#" + q).data("animstyle") || t.animStyle, t.event = $("#" + q).data("event") || t.event, t.openDirection = $("#" + q).data("opendirection") || t.openDirection, t.jsonTitle = $("#" + q).data("jsontitle") || t.jsonTitle, t.disabledOpacity = $("#" + q).data("disabledopacity") || t.disabledOpacity, t.childWidth = $("#" + q).data("childwidth") || t.childWidth, t.enableCheckbox = $("#" + q).data("enablecheckbox") || t.enableCheckbox, t.checkboxNameSuffix = $("#" + q).data("checkboxnamesuffix") || t.checkboxNameSuffix, t.append = $("#" + q).data("append") || t.append, t.prepend = $("#" + q).data("prepend") || t.prepend, t.reverseMode = $("#" + q).data("reversemode") || t.reverseMode, t.roundedCorner = $("#" + q).data("roundedcorner") || t.roundedCorner, t.enableAutoFilter = $("#" + q).data("enableautofilter") || t.enableAutoFilter, t.reverseMode = t.reverseMode.toString(), t.roundedCorner = t.roundedCorner.toString(), t.enableAutoFilter = t.enableAutoFilter.toString()
            },
            H = function(e) {
                return void 0 === cacheElement[e] && (cacheElement[e] = D.getElementById(e)), cacheElement[e]
            },
            I = function(e) {
                var t = L("postChildID");
                return $("#" + t + " li." + z.li).index(e)
            },
            J = function() {
                if (t.byJson.data) {
                    var a = ["description", "image", "title"];
                    try {
                        q.id || (q.id = "dropdown" + msBeautify.counter), t.byJson.data = eval(t.byJson.data);
                        var b = "msdropdown" + msBeautify.counter++,
                            c = {};
                        c.id = b, c.name = t.byJson.name || q.id, t.byJson.size > 0 && (c.size = t.byJson.size), c.multiple = t.byJson.multiple;
                        for (var d = O("select", c), i = 0; i < t.byJson.data.length; i++) {
                            var f = t.byJson.data[i],
                                g = new Option(f.text, f.value);
                            for (var p in f)
                                if ("text" != p.toLowerCase()) {
                                    var h = -1 != $.inArray(p.toLowerCase(), a) ? "data-" : "";
                                    g.setAttribute(h + p, f[p])
                                } d.options[i] = g
                        }
                        H(q.id).appendChild(d), d.selectedIndex = t.byJson.selectedIndex, $(d).css({
                            width: t.byJson.width + "px"
                        }), q = d
                    } catch (e) {
                        throw "There is an error in json data."
                    }
                }
            },
            K = function() {
                J(), q.id || (q.id = "msdrpdd" + msBeautify.counter++), q = q.id, u.element = q, G(), isDisabled = H(q).disabled;
                var e = t.enableCheckbox;
                "true" === e.toString() && (H(q).multiple = !0, t.enableCheckbox = !0), A = H(q).size > 1 || 1 == H(q).multiple ? !0 : !1, A && (isMultiple = H(q).multiple), cu(), bS(), cy("uiData", cw()), cy("selectedOptions", $("#" + q + " option:selected"));
                var i = L("postChildID");
                oldSelected = $("#" + i + " li." + y.selected), "true" === t.reverseMode && $("#" + q).on("change", function() {
                    bW(this.selectedIndex)
                }), H(q).refresh = function() {
                    $("#" + q).msDropdown().data("dd").refresh()
                }
            },
            L = function(e) {
                return q + x[e]
            },
            M = function(e) {
                var t = void 0 === e.style ? "" : e.style.cssText;
                return t
            },
            N = function(a) {
                var b = "",
                    title = "",
                    description = "",
                    value = -1,
                    text = "",
                    className = "",
                    imagecss = "",
                    index;
                if (void 0 !== a) {
                    var c = a.title || "";
                    if ("" != c) {
                        var d = /^\{.*\}$/,
                            e = d.test(c);
                        if (e && t.jsonTitle) var f = eval("[" + c + "]");
                        title = e && t.jsonTitle ? f[0].title : title, description = e && t.jsonTitle ? f[0].description : description, b = e && t.jsonTitle ? f[0].image : c, imagecss = e && t.jsonTitle ? f[0].imagecss : imagecss, index = a.index
                    }
                    text = a.text || "", value = a.value || "", className = a.className || "", title = $(a).prop("data-title") || $(a).data("title") || title || "", description = $(a).prop("data-description") || $(a).data("description") || description || "", b = $(a).prop("data-image") || $(a).data("image") || b || "", imagecss = $(a).prop("data-imagecss") || $(a).data("imagecss") || imagecss || "", index = $(a).index()
                }
                var o = {
                    image: b,
                    title: title,
                    description: description,
                    value: value,
                    text: text,
                    className: className,
                    imagecss: imagecss,
                    index: index
                };
                return o
            },
            O = function(e, t, i) {
                var n = D.createElement(e);
                if (t)
                    for (var o in t) switch (o) {
                        case "style":
                            n.style.cssText = t[o];
                            break;
                        default:
                            n[o] = t[o]
                    }
                return i && (n.innerHTML = i), n
            },
            P = function() {
                var e = L("postElementHolder");
                if (0 == $("#" + e).length) {
                    var t = {
                        style: "height: 0px;overflow: hidden;position: absolute;",
                        className: y.ddOutOfVision
                    };
                    t.id = e;
                    var i = O("div", t);
                    $("#" + q).after(i), $("#" + q).appendTo($("#" + e))
                } else $("#" + e).css({
                    height: 0,
                    overflow: "hidden",
                    position: "absolute"
                });
                H(q).tabIndex = -1
            },
            Q = function() {
                var e = "true" == t.roundedCorner ? " borderRadius" : "",
                    i = {
                        className: y.dd + " ddcommon" + e
                    },
                    n = M(H(q)),
                    o = $("#" + q).outerWidth();
                i.style = "width: " + o + "px;", n.length > 0 && (i.style = i.style + "" + n), i.id = L("postID"), i.tabIndex = H(q).tabIndex;
                var s = O("div", i);
                return s
            },
            R = function() {
                var e;
                e = H(q).selectedIndex >= 0 ? H(q).options[H(q).selectedIndex] : {
                    value: "",
                    text: ""
                };
                var i = "",
                    n = "",
                    o = $("#" + q).data("usesprite");
                o && (t.useSprite = o), 0 != t.useSprite && (i = " " + t.useSprite, n = " " + e.className);
                var s = "true" == t.roundedCorner ? " " + z.borderRadiusTp : "",
                    a = O("div", {
                        className: y.ddTitle + i + s
                    }),
                    l = O("span", {
                        className: y.divider
                    }),
                    d = O("span", {
                        className: y.arrow
                    }),
                    r = L("postTitleID"),
                    c = O("span", {
                        className: y.ddTitleText + n,
                        id: r
                    }),
                    u = N(e),
                    p = u.image,
                    f = u.text || "";
                if ("" != p && t.showIcon) {
                    var h = O("img");
                    h.src = p, "" != u.imagecss && (h.className = u.imagecss + " ")
                }
                var b = O("span", {
                    className: y.label
                }, f);
                a.appendChild(l), a.appendChild(d), h && c.appendChild(h), c.appendChild(b), a.appendChild(c);
                var v = O("span", {
                    className: y.description
                }, u.description);
                return c.appendChild(v), a
            },
            S = function() {
                var e = L("postTitleTextID"),
                    i = "true" == t.roundedCorner ? "borderRadius" : "",
                    n = O("input", {
                        id: e,
                        type: "text",
                        value: "",
                        autocomplete: "off",
                        className: "text shadow " + i,
                        style: "display: none"
                    });
                return n
            },
            T = function(e) {
                var i = {},
                    n = M(e);
                n.length > 0 && (i.style = n);
                var o = e.disabled ? y.disabled : y.enabled;
                o = e.selected ? o + " " + y.selected : o, o = o + " " + z.li, i.className = o, 0 != t.useSprite && (i.className = o + " " + e.className);
                var s = O("li", i),
                    a = N(e);
                "" != a.title && (s.title = a.title);
                var l = a.image;
                if ("" != l && t.showIcon) {
                    var d = O("img");
                    d.src = l, "" != a.imagecss && (d.className = a.imagecss + " ")
                }
                if ("" != a.description) var r = O("span", {
                    className: y.description
                }, a.description);
                var c = e.text || "",
                    u = O("span", {
                        className: y.label
                    }, c);
                if (t.enableCheckbox === !0) {
                    var p = O("input", {
                            type: "checkbox",
                            id: e.value + t.checkboxNameSuffix,
                            name: t.checkboxNameSuffix + "[]",
                            value: e.value || "",
                            className: "wm-ui-checkbox-generic"
                        }),
                        f = D.createElement("label");
                    f.setAttribute("for", e.value + t.checkboxNameSuffix), s.appendChild(p), s.appendChild(f), t.enableCheckbox === !0 && (p.checked = e.selected ? !0 : !1)
                }
                d && s.appendChild(d), s.appendChild(u), r ? s.appendChild(r) : d && (d.className = d.className + z.fnone);
                var h = O("div", {
                    className: "clear"
                });
                return s.appendChild(h), s
            },
            U = function() {
                var e = L("postChildID"),
                    i = {
                        className: y.ddChild + " ddchild_ " + z.ddChildMore,
                        id: e
                    };
                i.style = 0 == A ? "z-index: " + t.zIndex : "z-index:1";
                var n = $("#" + q).data("childwidth") || t.childWidth;
                n && (i.style = (i.style || "") + ";width:" + n);
                var o = O("div", i),
                    s = O("ul");
                0 != t.useSprite && (s.className = t.useSprite);
                for (var a = H(q).children, l = 0; l < a.length; l++) {
                    var d, r = a[l];
                    if ("optgroup" == r.nodeName.toLowerCase()) {
                        d = O("li", {
                            className: y.optgroup
                        });
                        var c = O("span", {
                            className: y.optgroupTitle
                        }, r.label);
                        d.appendChild(c);
                        for (var u = r.children, p = O("ul"), f = 0; f < u.length; f++) {
                            var h = T(u[f]);
                            p.appendChild(h)
                        }
                        d.appendChild(p)
                    } else d = T(r);
                    s.appendChild(d)
                }
                return o.appendChild(s), o
            },
            V = function(e) {
                var i = L("postChildID");
                if (e) return -1 == e ? $("#" + i).css({
                    height: "auto",
                    overflow: "auto"
                }) : $("#" + i).css("height", e + "px"), !1;
                var n, o = H(q).options.length;
                if (o > t.visibleRows || t.visibleRows) {
                    var s = $("#" + i + " li:first"),
                        a = parseInt(s.css("padding-bottom")) + parseInt(s.css("padding-top"));
                    0 === t.rowHeight && ($("#" + i).css({
                        visibility: "hidden",
                        display: "block"
                    }), t.rowHeight = Math.ceil(s.height()), $("#" + i).css({
                        visibility: "visible"
                    }), A && t.enableCheckbox !== !0 || $("#" + i).css({
                        display: "none"
                    })), n = (t.rowHeight + a) * Math.min(t.visibleRows, o) + 3
                } else A && (n = $("#" + q).height());
                return n
            },
            W = function() {
                var e = L("postChildID");
                $("#" + e).on("click", function(e) {
                    return isDisabled === !0 ? !1 : (e.preventDefault(), e.stopPropagation(), void(A && bY()))
                }), $("#" + e + " li." + y.enabled).on("click", function(e) {
                    "input" !== e.target.nodeName.toLowerCase() && "label" !== e.target.nodeName.toLowerCase() && ct(this)
                }), $("#" + e + " li." + y.enabled).on("mousedown", function(i) {
                    if (isDisabled === !0) return !1;
                    if (oldSelected = $("#" + e + " li." + y.selected), lastTarget = this, i.preventDefault(), i.stopPropagation(), t.enableCheckbox === !0 && ("input" === i.target.nodeName.toLowerCase() || "label" === i.target.nodeName.toLowerCase()) && (controlHolded = !0), A === !0)
                        if (isMultiple)
                            if (C === !0) {
                                $(this).addClass(y.selected);
                                var n = $("#" + e + " li." + y.selected),
                                    o = I(this);
                                if (n.length > 1) {
                                    var s = $("#" + e + " li." + z.li),
                                        a = I(n[0]),
                                        l = I(n[1]);
                                    o > l && (a = o, l += 1);
                                    for (var d = Math.min(a, l); d <= Math.max(a, l); d++) {
                                        var r = s[d];
                                        $(r).hasClass(y.enabled) && $(r).addClass(y.selected)
                                    }
                                }
                            } else if (controlHolded === !0) {
                        if ($(this).toggleClass(y.selected), t.enableCheckbox === !0) {
                            var c = this.childNodes[0];
                            c.checked = !c.checked
                        }
                    } else $("#" + e + " li." + y.selected).removeClass(y.selected), $("#" + e + " input:checkbox").prop("checked", !1), $(this).addClass(y.selected), t.enableCheckbox === !0 && (this.childNodes[0].checked = !0);
                    else $("#" + e + " li." + y.selected).removeClass(y.selected), $(this).addClass(y.selected);
                    else $("#" + e + " li." + y.selected).removeClass(y.selected), $(this).addClass(y.selected)
                }), $("#" + e + " li." + y.enabled).on("mouseenter", function(e) {
                    return isDisabled === !0 ? !1 : (e.preventDefault(), e.stopPropagation(), void(null != lastTarget && isMultiple && ($(this).addClass(y.selected), t.enableCheckbox === !0 && (this.childNodes[0].checked = !0))))
                }), $("#" + e + " li." + y.enabled).on("mouseover", function() {
                    return isDisabled === !0 ? !1 : void $(this).addClass(y.hover)
                }), $("#" + e + " li." + y.enabled).on("mouseout", function() {
                    return isDisabled === !0 ? !1 : void $("#" + e + " li." + y.hover).removeClass(y.hover)
                }), $("#" + e + " li." + y.enabled).on("mouseup", function(i) {
                    if (isDisabled === !0) return !1;
                    i.preventDefault(), i.stopPropagation(), t.enableCheckbox === !0 && (controlHolded = !1);
                    var n = $("#" + e + " li." + y.selected).length;
                    forcedTrigger = oldSelected.length != n || 0 == n ? !0 : !1, bV(), bZ(), bY(), lastTarget = null
                }), 0 == t.disabledOptionEvents && ($("#" + e + " li." + z.li).on("click", function() {
                    return isDisabled === !0 ? !1 : void cm(this, "click")
                }), $("#" + e + " li." + z.li).on("mouseenter", function() {
                    return isDisabled === !0 ? !1 : void cm(this, "mouseenter")
                }), $("#" + e + " li." + z.li).on("mouseover", function() {
                    return isDisabled === !0 ? !1 : void cm(this, "mouseover")
                }), $("#" + e + " li." + z.li).on("mouseout", function() {
                    return isDisabled === !0 ? !1 : void cm(this, "mouseout")
                }), $("#" + e + " li." + z.li).on("mousedown", function() {
                    return isDisabled === !0 ? !1 : void cm(this, "mousedown")
                }), $("#" + e + " li." + z.li).on("mouseup", function() {
                    return isDisabled === !0 ? !1 : void cm(this, "mouseup")
                }))
            },
            X = function() {
                var e = L("postChildID");
                $("#" + e).off("click"), $("#" + e + " li." + y.enabled).off("mouseenter"), $("#" + e + " li." + y.enabled).off("click"), $("#" + e + " li." + y.enabled).off("mouseover"), $("#" + e + " li." + y.enabled).off("mouseout"), $("#" + e + " li." + y.enabled).off("mousedown"), $("#" + e + " li." + y.enabled).off("mouseup")
            },
            Y = function(e, t, i) {
                $("#" + e).off(t, i), $("#" + e).trigger(t), $("#" + e).on(t, i)
            },
            Z = function() {
                {
                    var e = L("postID"),
                        i = L("postTitleTextID");
                    L("postChildID")
                }
                $("#" + e).on(t.event, function(e) {
                    return isDisabled === !0 ? !1 : (cn(t.event), e.preventDefault(), e.stopPropagation(), void cs(e))
                }), $("#" + e).on("keydown", function(e) {
                    var t = e.which;
                    !isOpen && (t == ENTER || t == UP_ARROW || t == B || t == LEFT_ARROW || t == RIGHT_ARROW || t >= ALPHABETS_START && !A) && (cs(e), t >= ALPHABETS_START ? cb() : (e.preventDefault(), e.stopImmediatePropagation()))
                }), $("#" + e).on("focus", bN), $("#" + e).on("blur", bO), $("#" + i).on("blur", function() {
                    Y(e, "focus", bN)
                }), W(), $("#" + e).on("dblclick", cf), $("#" + e).on("mousemove", cg), $("#" + e).on("mouseenter", ch), $("#" + e).on("mouseleave", ci), $("#" + e).on("mousedown", cj), $("#" + e).on("mouseup", ck)
            },
            bN = function() {
                cn("focus")
            },
            bO = function() {
                cn("blur")
            },
            bP = function() {
                var e = L("postID"),
                    i = L("postChildID");
                if (A === !0 && t.enableCheckbox === !1) $("#" + e + " ." + y.ddTitle).hide(), $("#" + i).css({
                    display: "block",
                    position: "relative"
                });
                else {
                    t.enableCheckbox === !1 && (isMultiple = !1), $("#" + e + " ." + y.ddTitle).show(), $("#" + i).css({
                        display: "none",
                        position: "absolute"
                    });
                    var n = $("#" + i + " li." + y.selected)[0];
                    $("#" + i + " li." + y.selected).removeClass(y.selected);
                    var o = I($(n).addClass(y.selected));
                    bW(o)
                }
                V(V())
            },
            bQ = function() {
                {
                    var e = L("postID");
                    1 == isDisabled ? t.disabledOpacity : 1
                }
                isDisabled === !0 ? $("#" + e).addClass(y.disabledAll) : $("#" + e).removeClass(y.disabledAll)
            },
            bR = function() {
                var e = L("postTitleTextID");
                "true" == t.enableAutoFilter && $("#" + e).on("keyup", ca), bP(), bQ()
            },
            bS = function() {
                var e = Q(),
                    i = R();
                e.appendChild(i);
                var n = S();
                e.appendChild(n);
                var o = U();
                e.appendChild(o), $("#" + q).after(e), P(), bR(), Z();
                var s = L("postChildID");
                "" != t.append && $("#" + s).append(t.append), "" != t.prepend && $("#" + s).prepend(t.prepend), "function" == typeof t.on.create && t.on.create.apply(u, arguments)
            },
            bT = function(e) {
                function i(e) {
                    $($("#" + n + " li." + z.li)[e]).addClass(y.selected), t.enableCheckbox === !0 && $($("#" + n + " li." + z.li)[e]).find("input.checkbox").prop("checked", "checked")
                }
                var n = L("postChildID");
                if ($("#" + n + " li." + z.li).removeClass(y.selected), t.enableCheckbox === !0 && $("#" + n + " li." + z.li + " input.checkbox").prop("checked", !1), E(e) === !0)
                    for (var o = 0; o < e.length; o++) i(e[o]);
                else i(e)
            },
            bU = function(e, t) {
                for (var i = L("postChildID"), n = e || $("#" + i + " li." + y.selected), o = 0; o < n.length; o++) {
                    var s = t === !0 ? n[o] : I(n[o]);
                    H(q).options[s].selected = "selected"
                }
                bW(n)
            },
            bV = function() {
                var e = L("postChildID"),
                    i = $("#" + e + " li." + y.selected);
                (isMultiple && (C || controlHolded) || forcedTrigger) && (H(q).selectedIndex = -1);
                var n;
                if (0 == i.length ? n = -1 : i.length > 1 ? bU(i) : n = I($("#" + e + " li." + y.selected)), (H(q).selectedIndex != n || forcedTrigger) && i.length <= 1) {
                    forcedTrigger = !1; {
                        bX("change")
                    }
                    if (H(q).selectedIndex = n, bW(n), "function" == typeof t.on.change) {
                        var o = cw();
                        t.on.change(o.data, o.ui)
                    }
                    $("#" + q).trigger("change")
                }
            },
            bW = function(e, t) {
                if (void 0 !== e) {
                    var i, n, o;
                    if (-1 == e) i = -1, n = "", o = "", cx(-1);
                    else if ("object" != typeof e) {
                        var s = H(q).options[e];
                        H(q).selectedIndex = e, i = e, n = N(s), o = e >= 0 ? H(q).options[e].text : "", cx(void 0, n), n = n.value
                    } else i = t && t.index || H(q).selectedIndex, n = t && t.value || H(q).value, o = t && t.text || H(q).options[H(q).selectedIndex].text || "", cx(i);
                    cy("selectedIndex", i), cy("value", n), cy("selectedText", o), cy("children", H(q).children), cy("uiData", cw()), cy("selectedOptions", $("#" + q + " option:selected"))
                }
            },
            bX = function(e) {
                var t = {
                        byElement: !1,
                        byJQuery: !1,
                        hasEvent: !1
                    },
                    i = $("#" + q);
                try {
                    null !== i.prop("on" + e) && (t.hasEvent = !0, t.byElement = !0)
                } catch (n) {}
                var o;
                return o = "function" == typeof $._data ? $._data(i[0], "events") : i.data("events"), o && o[e] && (t.hasEvent = !0, t.byJQuery = !0), t
            },
            bY = function() {
                bZ(), $("body").on("click", ct), $(document).on("keydown", cd), $(document).on("keyup", ce)
            },
            bZ = function() {
                $("body").off("click", ct), $(document).off("keydown", cd), $(document).off("keyup", ce)
            },
            ca = function(e) {
                if (e.keyCode < ALPHABETS_START && e.keyCode != BACKSPACE && e.keyCode != DELETE) return !1;
                var i = L("postChildID"),
                    n = L("postTitleTextID"),
                    o = H(n).value;
                if (0 == o.length) $("#" + i + " li:hidden").show(), V(V());
                else {
                    $("#" + i + " li").hide();
                    var s = $("#" + i + " li:Contains('" + o + "')").show();
                    $("#" + i + " li:visible").length <= t.visibleRows && V(-1), (s.length > 0 && !A || !isMultiple) && ($("#" + i + " ." + y.selected).removeClass(y.selected), $(s[0]).addClass(y.selected))
                }
                A || cr()
            },
            cb = function() {
                if ("true" == t.enableAutoFilter) {
                    var e = L("postID"),
                        i = L("postTitleTextID");
                    $("#" + i + ":hidden").length > 0 && 0 == controlHolded && ($("#" + i + ":hidden").show().val(""), Y(e, "blur", bO), H(i).focus())
                }
            },
            cc = function() {
                var e = L("postTitleTextID");
                $("#" + e + ":visible").length > 0 && ($("#" + e + ":visible").hide(), H(e).blur())
            },
            cd = function(e) {
                var t = (L("postTitleTextID"), L("postChildID"));
                switch (e.keyCode) {
                    case B:
                    case RIGHT_ARROW:
                        e.preventDefault(), e.stopPropagation(), cp();
                        break;
                    case UP_ARROW:
                    case LEFT_ARROW:
                        e.preventDefault(), e.stopPropagation(), cq();
                        break;
                    case ESCAPE:
                    case ENTER:
                        e.preventDefault(), e.stopPropagation(), ct();
                        var i = $("#" + t + " li." + y.selected).length;
                        forcedTrigger = oldSelected.length != i || 0 == i ? !0 : !1, bV(), bZ(), lastTarget = null;
                        break;
                    case SHIFT:
                        C = !0;
                        break;
                    case CONTROL:
                        controlHolded = !0;
                        break;
                    default:
                        e.keyCode >= ALPHABETS_START && A === !1 && cb()
                }
                return isDisabled === !0 ? !1 : void cn("keydown")
            },
            ce = function(e) {
                switch (e.keyCode) {
                    case SHIFT:
                        C = !1;
                        break;
                    case CONTROL:
                        controlHolded = !1
                }
                return isDisabled === !0 ? !1 : void cn("keyup")
            },
            cf = function() {
                return isDisabled === !0 ? !1 : void cn("dblclick")
            },
            cg = function() {
                return isDisabled === !0 ? !1 : void cn("mousemove")
            },
            ch = function(e) {
                return isDisabled === !0 ? !1 : (e.preventDefault(), void cn("mouseover"))
            },
            ci = function(e) {
                return isDisabled === !0 ? !1 : (e.preventDefault(), void cn("mouseout"))
            },
            cj = function() {
                return isDisabled === !0 ? !1 : void cn("mousedown")
            },
            ck = function() {
                return isDisabled === !0 ? !1 : void cn("mouseup")
            },
            cl = function(e, t) {
                var i = {
                    byElement: !1,
                    byJQuery: !1,
                    hasEvent: !1
                };
                void 0 != $(e).prop("on" + t) && (i.hasEvent = !0, i.byElement = !0);
                var n = $(e).data("events");
                return n && n[t] && (i.hasEvent = !0, i.byJQuery = !0), i
            },
            cm = function(e, i) {
                if (0 == t.disabledOptionEvents) {
                    var n = H(q).options[I(e)];
                    if (cl(n, i).hasEvent === !0) {
                        if (cl(n, i).byElement === !0 && n["on" + i](), cl(n, i).byJQuery === !0) switch (i) {
                            case "keydown":
                            case "keyup":
                                break;
                            default:
                                $(n).trigger(i)
                        }
                        return !1
                    }
                }
            },
            cn = function(e) {
                if ("function" == typeof t.on[e] && t.on[e].apply(this, arguments), bX(e).hasEvent === !0) {
                    if (bX(e).byElement === !0) H(q)["on" + e]();
                    else if (bX(e).byJQuery === !0) switch (e) {
                        case "keydown":
                        case "keyup":
                            break;
                        default:
                            $("#" + q).triggerHandler(e)
                    }
                    return !1
                }
            },
            co = function(e) {
                var t = L("postChildID");
                if (e = void 0 !== e ? e : $("#" + t + " li." + y.selected), e.length > 0) {
                    var i = parseInt($(e).position().top),
                        n = parseInt($("#" + t).height());
                    if (i > n) {
                        var o = i + $("#" + t).scrollTop() - n / 2;
                        $("#" + t).animate({
                            scrollTop: o
                        }, 500)
                    }
                }
            },
            cp = function() {
                function e(t) {
                    return t += 1, t > i.length ? t : $(i[t]).hasClass(y.enabled) === !0 ? t : t = e(t)
                }
                var t = L("postChildID"),
                    i = $("#" + t + " li:visible." + z.li),
                    n = $("#" + t + " li:visible." + y.selected);
                n = 0 == n.length ? i[0] : n;
                var o = $("#" + t + " li:visible." + z.li).index(n);
                o < i.length - 1 && (o = e(o), o < i.length && (C && A && isMultiple || $("#" + t + " ." + y.selected).removeClass(y.selected), $(i[o]).addClass(y.selected), cx(o), 1 == A && bV(), co($(i[o]))), A || cr())
            },
            cq = function() {
                function e(t) {
                    return t -= 1, 0 > t ? t : $(n[t]).hasClass(y.enabled) === !0 ? t : t = e(t)
                }
                var t = L("postChildID"),
                    i = $("#" + t + " li:visible." + y.selected),
                    n = $("#" + t + " li:visible." + z.li),
                    o = $("#" + t + " li:visible." + z.li).index(i[0]);
                if (o >= 0) {
                    if (o = e(o), o >= 0 && (C && A && isMultiple || $("#" + t + " ." + y.selected).removeClass(y.selected), $(n[o]).addClass(y.selected), cx(o), 1 == A && bV(), parseInt($(n[o]).position().top + $(n[o]).height()) <= 0)) {
                        var s = $("#" + t).scrollTop() - $("#" + t).height() - $(n[o]).height();
                        $("#" + t).animate({
                            scrollTop: s
                        }, 500)
                    }
                    A || cr()
                }
            },
            cr = function() {
                var e = L("postID"),
                    i = L("postChildID"),
                    n = $("#" + e).offset(),
                    o = $("#" + e).height(),
                    s = $(window).height(),
                    a = $(window).scrollTop(),
                    l = $("#" + i).height(),
                    d = $("#" + e).height(),
                    r = t.openDirection.toLowerCase();
                if ((s + a < Math.floor(l + o + n.top) || "alwaysup" == r) && "alwaysdown" != r) {
                    d = l, $("#" + i).css({
                        top: "-" + d + "px",
                        display: "block",
                        zIndex: t.zIndex
                    }), "true" == t.roundedCorner && $("#" + e).removeClass("borderRadius borderRadiusTp").addClass("borderRadiusBtm");
                    var d = $("#" + i).offset().top; - 10 > d && ($("#" + i).css({
                        top: parseInt($("#" + i).css("top")) - d + 20 + a + "px",
                        zIndex: t.zIndex
                    }), "true" == t.roundedCorner && $("#" + e).removeClass("borderRadiusBtm borderRadiusTp").addClass("borderRadius"))
                } else $("#" + i).css({
                    top: d + "px",
                    zIndex: t.zIndex
                }), "true" == t.roundedCorner && $("#" + e).removeClass("borderRadius borderRadiusBtm").addClass("borderRadiusTp");
                isIE && F() <= 7 && ($("div.ddcommon").css("zIndex", t.zIndex - 10), $("#" + e).css("zIndex", t.zIndex + 5))
            },
            cs = function() {
                if (isDisabled === !0) return !1;
                var e = (L("postID"), L("postChildID"));
                if (isOpen) "mouseover" !== t.event && ct();
                else {
                    isOpen = !0, "" != msBeautify.oldDiv && $("#" + msBeautify.oldDiv).css({
                        display: "none"
                    }), msBeautify.oldDiv = e, $("#" + e + " li:hidden").show(), cr();
                    var i = t.animStyle;
                    if ("" == i || "none" == i) {
                        if ($("#" + e).css({
                                display: "block"
                            }), co(), "function" == typeof t.on.open) {
                            var n = cw();
                            t.on.open(n.data, n.ui)
                        }
                    } else $("#" + e)[i]("fast", function() {
                        if (co(), "function" == typeof t.on.open) {
                            var e = cw();
                            t.on.open(e.data, e.ui)
                        }
                    });
                    bY()
                }
            },
            ct = function() {
                isOpen = !1;
                var e = L("postID"),
                    i = L("postChildID");
                if ((A === !1 || t.enableCheckbox === !0) && ($("#" + i).css({
                        display: "none"
                    }), "true" == t.roundedCorner && $("#" + e).removeClass("borderRadiusTp borderRadiusBtm").addClass("borderRadius")), bZ(), "function" == typeof t.on.close) {
                    var n = cw();
                    t.on.close(n.data, n.ui)
                }
                cc(), V(V()), $("#" + i).css({
                    zIndex: 1
                }), cx(H(q).selectedIndex)
            },
            cu = function() {
                try {
                    orginial = $.extend(!0, {}, H(q));
                    for (var e in orginial) "function" != typeof orginial[e] && (u[e] = orginial[e])
                } catch (t) {}
                u.selectedText = H(q).selectedIndex >= 0 ? H(q).options[H(q).selectedIndex].text : ""
            },
            cv = function(e) {
                if (null != e && "undefined" != typeof e) {
                    var t = L("postChildID"),
                        i = N(e),
                        n = $("#" + t + " li." + z.li + ":eq(" + e.index + ")");
                    return {
                        data: i,
                        ui: n,
                        option: e,
                        index: e.index
                    }
                }
                return null
            },
            cw = function() {
                var e, t, i, n, o = L("postChildID"),
                    s = H(q);
                if (-1 == s.selectedIndex) e = null, t = null, i = null, n = -1;
                else if (t = $("#" + o + " li." + y.selected), t.length > 1) {
                    for (var a = [], l = [], d = 0; d < t.length; d++) {
                        var r = I(t[d]);
                        a.push(r), l.push(s.options[r])
                    }
                    e = a, i = l, n = a
                } else i = s.options[s.selectedIndex], e = N(i), n = s.selectedIndex;
                return {
                    data: e,
                    ui: t,
                    index: n,
                    option: i
                }
            },
            cx = function(e, i) {
                var n = L("postTitleID"),
                    o = {};
                if (-1 == e) o.text = "&nbsp;", o.className = "", o.description = "", o.image = "";
                else if ("undefined" != typeof e) {
                    var s = H(q).options[e];
                    o = N(s)
                } else o = i;
                $("#" + n).find("." + y.label).html(o.text), H(n).className = y.ddTitleText + " " + o.className, "" != o.description ? $("#" + n).find("." + y.description).html(o.description).show() : $("#" + n).find("." + y.description).html("").hide();
                var a = $("#" + n).find("img");
                a.length > 0 && $(a).remove(), "" != o.image && t.showIcon && (a = O("img", {
                    src: o.image
                }), $("#" + n).prepend(a), "" != o.imagecss && (a.className = o.imagecss + " "), "" == o.description && (a.className = a.className + z.fnone))
            },
            cy = function(e, t) {
                u[e] = t
            },
            cz = function(e, i, n) {
                var o = L("postChildID"),
                    s = !1;
                switch (e) {
                    case "add":
                        var a, l = T(i || H(q).options[n]);
                        if (a = 3 == arguments.length ? n : $("#" + o + " li." + z.li).length - 1, 0 > a || !a) $("#" + o + " ul").append(l);
                        else {
                            var d = $("#" + o + " li." + z.li)[a];
                            $(d).before(l)
                        }
                        X(), W(), null != t.on.add && t.on.add.apply(this, arguments);
                        break;
                    case "remove":
                        s = $($("#" + o + " li." + z.li)[n]).hasClass(y.selected), $("#" + o + " li." + z.li + ":eq(" + n + ")").remove();
                        var r = $("#" + o + " li." + y.enabled);
                        if (1 == s && r.length > 0) {
                            $(r[0]).addClass(y.selected);
                            var c = $("#" + o + " li." + z.li).index(r[0]);
                            bW(c)
                        }
                        0 == r.length && bW(-1), $("#" + o + " li." + z.li).length < t.visibleRows && !A && V(-1), null != t.on.remove && t.on.remove.apply(this, arguments)
                }
            };
        this.act = function() {
            var e = arguments[0];
            switch (Array.prototype.shift.call(arguments), e) {
                case "add":
                    u.add.apply(this, arguments);
                    break;
                case "remove":
                    u.remove.apply(this, arguments);
                    break;
                default:
                    try {
                        H(q)[e].apply(H(q), arguments)
                    } catch (t) {}
            }
        }, this.add = function() {
            var e, t, i, n, o, s = arguments[0];
            "string" == typeof s ? (e = s, t = e, opt = new Option(e, t)) : (e = s.text || "", t = s.value || e, i = s.title || "", n = s.image || "", o = s.description || "", opt = new Option(e, t), $(opt).data("description", o), $(opt).data("image", n), $(opt).data("title", i)), arguments[0] = opt, H(q).add.apply(H(q), arguments), cy("children", H(q).children), cy("length", H(q).length), cz("add", opt, arguments[1])
        }, this.remove = function(e) {
            H(q).remove(e), cy("children", H(q).children), cy("length", H(q).length), cz("remove", void 0, e)
        }, this.set = function(e, t) {
            if ("undefined" == typeof e || "undefined" == typeof t) return !1;
            e = e.toString();
            try {
                cy(e, t)
            } catch (i) {}
            switch (e) {
                case "size":
                    H(q)[e] = t, 0 == t && (H(q).multiple = !1), A = H(q).size > 1 || 1 == H(q).multiple ? !0 : !1, bP();
                    break;
                case "multiple":
                    H(q)[e] = t, A = H(q).size > 1 || 1 == H(q).multiple ? !0 : !1, isMultiple = H(q).multiple, bP(), cy(e, t);
                    break;
                case "disabled":
                    H(q)[e] = t, isDisabled = t, bQ();
                    break;
                case "selectedIndex":
                case "value":
                    "selectedIndex" == e && E(t) === !0 ? ($("#" + q + " option").prop("selected", !1), bU(t, !0), bT(t)) : (H(q)[e] = t, bT(H(q).selectedIndex), bW(H(q).selectedIndex));
                    break;
                case "length":
                    var n = L("postChildID");
                    t < H(q).length && (H(q)[e] = t, 0 == t ? ($("#" + n + " li." + z.li).remove(), bW(-1)) : ($("#" + n + " li." + z.li + ":gt(" + (t - 1) + ")").remove(), 0 == $("#" + n + " li." + y.selected).length && $("#" + n + " li." + y.enabled + ":eq(0)").addClass(y.selected)), cy(e, t), cy("children", H(q).children));
                    break;
                case "id":
                    break;
                default:
                    try {
                        H(q)[e] = t, cy(e, t)
                    } catch (i) {}
            }
        }, this.get = function(e) {
            return u[e] || H(q)[e]
        }, this.visible = function(e) {
            var t = L("postID");
            if (e === !0) $("#" + t).show();
            else {
                if (e !== !1) return "none" == $("#" + t).css("display") ? !1 : !0;
                $("#" + t).hide()
            }
        }, this.debug = function(e) {
            msBeautify.debug(e)
        }, this.close = function() {
            ct()
        }, this.open = function() {
            cs()
        }, this.showRows = function(e) {
            return "undefined" == typeof e || 0 == e ? !1 : (t.visibleRows = e, void V(V()))
        }, this.visibleRows = this.showRows, this.on = function(e, t) {
            $("#" + q).on(e, t)
        }, this.off = function(e, t) {
            $("#" + q).off(e, t)
        }, this.addMyEvent = this.on, this.getData = function() {
            return cw()
        }, this.namedItem = function() {
            var e = H(q).namedItem.apply(H(q), arguments);
            return cv(e)
        }, this.item = function() {
            var e = H(q).item.apply(H(q), arguments);
            return cv(e)
        }, this.setIndexByValue = function(e) {
            this.set("value", e)
        }, this.destroy = function() {
            var e = (L("postElementHolder"), L("postID"));
            $("#" + e + ", #" + e + " *").off(), H(q).tabIndex = H(e).tabIndex, $("#" + e).remove(), $("#" + q).parent().replaceWith($("#" + q)), $("#" + q).data("dd", null)
        }, this.refresh = function() {
            bW(H(q).selectedIndex)
        }, K()
    }
    msBeautify = {
        counter: 20,
        debug: function(e) {
            $(".ddOutOfVision").css(e !== !1 ? {
                height: "auto",
                position: "relative"
            } : {
                height: "0px",
                position: "absolute"
            })
        },
        oldDiv: "",
        create: function(e, t, i) {
            i = i || "dropdown";
            var n;
            switch (i.toLowerCase()) {
                case "dropdown":
                case "select":
                    n = $(e).msDropdown(t).data("dd")
            }
            return n
        }
    }, $.msDropDown = {}, $.msDropdown = {}, $.extend(!0, $.msDropDown, msBeautify), $.extend(!0, $.msDropdown, msBeautify), void 0 === $.fn.prop && ($.fn.prop = $.fn.attr), void 0 === $.fn.on && ($.fn.on = $.fn.bind, $.fn.off = $.fn.unbind), $.expr[":"].Contains = "function" == typeof $.expr.createPseudo ? $.expr.createPseudo(function(e) {
        return function(t) {
            return $(t).text().toUpperCase().indexOf(e.toUpperCase()) >= 0
        }
    }) : function(e, t, i) {
        return $(e).text().toUpperCase().indexOf(i[3].toUpperCase()) >= 0
    }, $.fn.extend({
        msDropDown: function(e) {
            return this.each(function() {
                if (!$(this).data("dd")) {
                    var t = new dd(this, e);
                    $(this).data("dd", t)
                }
            })
        }
    }), $.fn.msDropdown = $.fn.msDropDown
}(jQuery);