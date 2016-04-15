function extractUrlParams() {
    var t = location.search.substring(1).split('&'),
        f = [];
    for (var i = 0; i < t.length; i++) {
        var x = t[i].split('=');
        f[x[0]] = x[1];
    }
    return f;
}