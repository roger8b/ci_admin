window.confirma = function (status) {
    if (status == 1) {
        //alert("Usuário registrado com sucesso!!!");
        $.alert({
            title: 'Bem-vindo',
            content: 'Seu cadastro foi realizado com sucesso!!! <br> Click em ok para voltar para pagina de Login ',
            buttons: {
                OK: function () {
                    window.location = "/ci_admin"
                }
            },
            animationBounce: 1.5,
        });

        return true;
    }
};