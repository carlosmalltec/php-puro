Helper = {
    init: function () {
        // alert(number_format(1500.90, 2, ',', '.'));
        // console.log(number_format(10.22));
        // console.log(number_format(100));
        // console.log(number_format(1000, 2, ',', '.'));
        Helper.numberFormat(number, decimals, dec_point, thousands_point);

        // $('body').on('click', '.btnView', function (event) {
        //     event.preventDefault();
        //     event.stopImmediatePropagation();
        //     var array = $(this).data('array');
        //     ViewCliente.view(array);
        //     return false;
        // });
    },
    numberFormat: function (number, decimals, dec_point, thousands_point) {
        if (number == null || !isFinite(number)) {
            throw new TypeError("number is not valid");
        }

        if (!decimals) {
            var len = number.toString().split('.').length;
            decimals = len > 1 ? len : 0;
        }

        if (!dec_point) {
            dec_point = '.';
        }

        if (!thousands_point) {
            thousands_point = ',';
        }

        number = parseFloat(number).toFixed(decimals);

        number = number.replace(".", dec_point);

        var splitNum = number.split(dec_point);
        splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
        number = splitNum.join(dec_point);

        return number;
    }
}

// alert(number_format(1500.90, 2, ',', '.'));
// console.log(number_format(10.22));
// console.log(number_format(100));
// console.log(number_format(1000, 2, ',', '.'));

$(document).ready(function () {
    ViewCliente.init();
});