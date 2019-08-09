//--Button cộng trừ số lượng sản phẩm trong trang chi tiết sản phẩm
$(".btn-plus").click(function () {
    var amount = document.getElementById("amount").value;
    amount = parseInt(amount);
    if (amount != 10)
        document.getElementById("amount").value = amount + 1;
});
$(".btn-minus").click(function () {
    var amount = document.getElementById("amount").value;
    amount = parseInt(amount);
    if (amount != 1)
        document.getElementById("amount").value = amount - 1;
});
//--Button cộng trừ số lượng sản phẩm trong trang chi tiết sản phẩm--//


//--Number_format giá tiền như php trong javascript
function number_format(number, decimals, decPoint, thousandsSep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
    var n = !isFinite(+number) ? 0 : +number
    var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
    var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
    var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
    var s = ''

    var toFixedFix = function (n, prec) {
        if (('' + n).indexOf('e') === -1) {
            return +(Math.round(n + 'e+' + prec) + 'e-' + prec)
        } else {
            var arr = ('' + n).split('e')
            var sig = ''
            if (+arr[1] + prec > 0) {
                sig = '+'
            }
            return (+(Math.round(+arr[0] + 'e' + sig + (+arr[1] + prec)) + 'e-' + prec)).toFixed(prec)
        }
    }

    // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec).toString() : '' + Math.round(n)).split('.')
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || ''
        s[1] += new Array(prec - s[1].length + 1).join('0')
    }

    return s.join(dec)
}

//--Number_format giá tiền như php trong javascript--//