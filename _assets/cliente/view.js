ViewCliente = {
    sendSubmit: false,
    init: function () {
        $('body').on('click', '.btnView', function (event) {
            console.log(event);
            
            // event.preventDefault();
            // event.stopImmediatePropagation();
            // ViewCliente.view();
            // return false;
        });
    },
    alertAviso: function (icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            html: text,
        })
    },
    view: function () {
    }
};
$(document).ready(function () {
    $('#viewDevedor').modal();
});