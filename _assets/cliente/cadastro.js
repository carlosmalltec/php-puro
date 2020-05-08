DataCliente = {
    dataResponse: $('#response').html(''),
    btn: $('.btnSalve'),
    sendSubmit: false,
    init: function () {
        $('body').on('submit', '#cadastroCliente', function (event) {
            event.preventDefault();
            event.stopImmediatePropagation();
            var formData = $(this);
            DataCliente.formulario(formData);
            return false;
        });
    },
    alertAviso: function(icon,title,text){
        Swal.fire({
            icon: icon,
            title: title,
            html: text,
          })
    },
    formulario: function (form) {
        if (!DataCliente.sendSubmit) {
            DataCliente.dataResponse.html('');
            DataCliente.sendSubmit = true;
            var formData = new FormData($(form)[0]);
            $.ajax({
                url: form.attr('action'),
                dataType: "JSON",
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (r) {
                    if (r.acao == 'success') {
                        DataCliente.dataResponse.html(r.msg);
                        DataCliente.alertAviso('success','Ooba...',r.msg);
                        $("#cadastroCliente")[0].reset();
                    } else {
                        DataCliente.dataResponse.html(r.msg);
                        DataCliente.alertAviso('warning','Oops...',r.msg);
                    }
                },
                beforeSend: function () {
                    DataCliente.dataResponse.show();
                    DataCliente.dataResponse.html("<div class='spinner-border text-primary' role='status'><span class='sr-only'>Loading...</span></div>");
                    DataCliente.btn.addClass('disabled');
                },
                complete: function () {
                    DataCliente.sendSubmit = false;
                    DataCliente.btn.removeClass('disabled');
                },
                error: function (er) {
                    DataCliente.alertAviso('error','Oops...','Problema com a conexão, fale com nossa equipe de suporte.');
                    DataCliente.dataResponse.show();
                    DataCliente.btn.removeClass('disabled');
                    DataCliente.dataResponse.html("<div class='col-xs-12'><p class='alert alert-warning'>Problema com a conexão, fale com nossa equipe de suporte.</p></div>");
                }
            });
        }
    },
};
$(document).ready(function () {
    DataCliente.init();
});