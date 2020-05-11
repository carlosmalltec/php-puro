UpdateCliente = {
    dataResponse: $('#response').html(''),
    sendSubmit: false,
    init: function () {
        $('body').on('click', '.btnUpdate', function (event) {
            event.preventDefault();
            event.stopImmediatePropagation();
            var array = $(this);
            UpdateCliente.update(array);
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
    explodeData: function(data){
        var array = new Array();
        array = data.split('/');
        var newDate = (array[2] + "-" + array[1] + "-" + array[0]);
        return newDate;
    },
    update: function (data) {
        UpdateCliente.dataResponse.html('');
        var array = $(data).data('array');
        var dnasc = UpdateCliente.explodeData($(data).data('dnasc'));
        var dvenc = UpdateCliente.explodeData($(data).data('dvenc'));

        var dataModal = $('#cadastroDevedores').modal('show');
        dataModal.modal('show');
        var form = dataModal.find('form#cadastroCliente');
        var title = dataModal.find('#modalCadastro');
        title.html('');
        form[0].reset();

        title.html(array.deve_nome);
        form.find('.btnSalve').text('Atualizar');
        form.find('input[name=acao]').val('editar');
        form.find('input[name=deve_codi]').val(array.deve_codi);
        form.find('input[name=deve_nome]').val(array.deve_nome);
        form.find('input[name=deve_mail]').val(array.deve_mail);
        form.find('input[name=deve_fone]').val(array.deve_fone);
        form.find('input[name=deve_cpf]').val(array.deve_cpf);
        form.find('input[name=deve_cnpj]').val(array.deve_cnpj);
        form.find('input[name=deve_nasc]').val(dnasc);
        form.find('input[name=deve_ende]').val(array.deve_ende);
        form.find('input[name=deve_venc]').val(dvenc);
        form.find('input[name=deve_valo]').val(Helper.numberFormat(array.deve_valo, 2, ',', '.'));
        form.find('#observacoes').text(array.deve_desc);
    }
};
$(document).ready(function () {
    UpdateCliente.init();
});