ViewCliente = {
    sendSubmit: false,
    init: function () {
        $('body').on('click', '.btnView', function (event) {
            event.preventDefault();
            event.stopImmediatePropagation();
            var array = $(this);
            ViewCliente.view(array);
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
    view: function (data) {
        var array = $(data).data('array');
        var dnasc = $(data).data('dnasc');
        var dvenc = $(data).data('dvenc');

        $('#viewDevedor').modal('show');
        var body = $('#viewDevedor').find('.toogle-view');
        var title = $('#viewDevedor').find('#modalDevedor');
        title.html('');
        body.html('');
        title.html("<strong>Cliente:</strong> " + array.deve_nome);
        body.append("<p><strong>ID:</strong> "+array.deve_codi+"</p>");
        body.append("<p><strong>Nome:</strong> "+array.deve_nome+"</p>");
        body.append("<p><strong>E-mail:</strong> "+array.deve_mail+"</p>");
        body.append("<p><strong>Telefone:</strong> "+array.deve_fone+"</p>");
        body.append("<p><strong>CPF:</strong> "+array.deve_cpf+"</p>");
        body.append("<p><strong>CNPJ:</strong> "+array.deve_cnpj+"</p>");
        // body.append("<p><strong>Data de nascimento:</strong> "+array.deve_nasc.split("-").join("/")+"</p>");
        body.append("<p><strong>Data de nascimento:</strong> "+dnasc+"</p>");
        body.append("<p><strong>Endereço:</strong> "+array.deve_ende+"</p>");
        body.append("<p><strong>Data de vencimento:</strong> "+dvenc+"</p>");
        // body.append("<p><strong>Data de vencimento:</strong> "+array.deve_venc.split("-").join("/")+"</p>");
        body.append("<p><strong>Valor R$:</strong> "+Helper.numberFormat(array.deve_valo, 2, ',', '.')+"</p>");
        body.append("<p><strong>Observações:</strong> "+array.deve_desc+"</p>");
    }
};
$(document).ready(function () {
    ViewCliente.init();
});