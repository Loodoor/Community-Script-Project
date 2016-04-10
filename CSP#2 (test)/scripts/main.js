$('#home a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})

$('#profile a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})

$('#messages a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

function extractUrlParams() {
    var t = location.search.substring(1).split('&'),
        f = [];
    for (var i = 0; i < t.length; i++) {
        var x = t[i].split('=');
        f[x[0]] = x[1];
    }
    return f;
}