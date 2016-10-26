
function ContactController($scope) {
    $scope.items = [
        {nome: 'Thiago', telefone: 23314945, email: 'thiago.aguiar86@gmail.com'}
    ];

    $scope.addContact = function () {
        $scope.items.push (
            {
                nome:       $scope.item.nome,
                telefone:   $scope.item.telefone,
                email:      $scope.item.email
            }
        );
    };
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function isAlfa(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
        return false;
    }
    return true;
}

function clearForm() {
    var name = document.getElementById("name");
    var tel = document.getElementById("tel");
    var email = document.getElementById("email");

    if (name.value != "" || tel.value != "" || email.value != "") {
        name.value = "";
        tel.value = "";
        email.value = "";
    }
}

$('#tel').mask('(00) 0000-0000');
