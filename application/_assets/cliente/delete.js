DeleteCliente = {
    sendSubmit: false,
    init: function () {
        $('body').on('click', '.btnDelete', function (event) {
            event.preventDefault();
            event.stopImmediatePropagation();
            var form = $(this);
            DeleteCliente.alertDelete(form);
            return false;
        });
    },
    alertAviso: function (icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            html: text,
        })
    },
    alertDelete: function (form) {
        Swal.fire({
            title: 'Você tem certeza?',
            text: "Você não poderá reverter isso!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Deletar'
        }).then((result) => {
            if (result.value) {
                DeleteCliente.delete(form);
            }
        })
    },
    delete: function (form) {
        if (!DeleteCliente.sendSubmit) {
            DeleteCliente.sendSubmit = true;
            var formdata = new FormData();
            formdata.append("acao", "deletar");
            formdata.append("id", $(form).data('id'));
            $.ajax({
                url: $(form).data('action'),
                dataType: "JSON",
                type: 'POST',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                success: function (r) {
                    console.log(r);
                    if (r.acao == 'success') {
                        DeleteCliente.alertAviso('success', 'Excluído', r.msg);
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else {
                        DeleteCliente.alertAviso('warning', 'Oops...', r.msg);
                    }
                },
                beforeSend: function () {
                },
                complete: function () {
                    DeleteCliente.sendSubmit = false;
                },
                error: function (er) {
                    console.log(er);
                    DeleteCliente.alertAviso('error', 'Oops...', 'Problema com a conexão, fale com nossa equipe de suporte.');
                }
            });
        }
    }
};
$(document).ready(function () {
    DeleteCliente.init();
});