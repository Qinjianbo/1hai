function reloadCaptcha(obj) {
    obj.src = "/captcha?v=" + Math.random();
};
function checkTrueName(obj) {
    var n = obj,
        t = trim(n.value),
        i = !/^[a-zA-Z\u3400-\u9FFF]+$/.test(t);
    return t.length === 0 ? (vercError(n, "请输入您的真实姓名"), !1) : t.length < 2 ? (vercError(n, "请输入2-20个字符"), !1) : t.length > 0 && i ? (vercError(n, "限汉字、英文字母2-20个字符"), !1) : (vercTrue(n), !0)
}
function checkMobile(obj) {
    var n = obj,
        t = trim(n.value),
        i = !/^\d{7,15}$/.test(t);
    return t.length === 0 ? (vercError(n, "手机号码为空"), !1) : t.length < 7 || t.length > 15 ? (vercError(n, "请输入7到15位手机号码"), !1) : t.length > 0 && i ? (vercError(n, "手机号码格式错误"), !1) : (vercTrue(n), !0)
}
function checkCaptcha(obj) {
    var n = obj,
        i = trim(n.value);
    return i.length === 0 ? (vercError(n, "验证码为空"), !1) : (vercTrue(n), !0)
}
function checkPassword(obj) {
    var i = obj;
    var n = trim(i.value);
    var r = !/^[A-Za-z0-9]+$/.test(n);
    return n.length === 0 ? (vercError(i, "请设置密码"), !1) : n.length < 6 || n.length > 18 ? (vercError(i,"请输入6-18个字符"), !1) : n.length > 0 && r ? (vercError(i,"限数字、英文字母6-18个字符"), !1) : (vercError(i,""), !0)
}
function vercError(n, t) {
    var err = document.getElementById(n.id + "-error-msg");
    err.className = "error-msg";
    err.innerHTML = t;
}
function vercTrue(n) {
    var err = document.getElementById(n.id + "-error-msg");
    err.className = "";
    err.innerHTML = "";
}
function trim(str){ //删除左右两端的空格
    return str.replace(/(^\s*)|(\s*$)/g, "");
}