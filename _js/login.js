var btnlogin = document.getElementById('btnlogin');
var inputemail = document.getElementById('email');
var inputsenha = document.getElementById('senha');

var btnAuthGoogle = document.getElementById('btnAuthGoogle');


//manda para o fireBase
function create(email, senha){
    var data = {
        email: email,
        senha: senha
    };

    return firebase.database().ref().child('users').push(data);
}

btnlogin.addEventListener('click', function (){
    create(email.value, senha.value);
});

btnAuthGoogle.addEventListener('click', function(){
    var provider = new firebase.auth.GoogleAuthProvider();
    singIn(provider);
});

function singIn(provider){
    firebase.auth
        .signInWithRedirect(provider)
        .then(function(result){
            console.log(result);

        }).catch(function(error){
            console.log(error);
            alert('Falaha na autenticação!');
        })
}


