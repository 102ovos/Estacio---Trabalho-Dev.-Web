document.querySelector('.button').onclick = function(){
    var senha = document.querySelector('.senha').value,
        confirma = document.querySelector('.confirma').value,
        nome = document.querySelector('.nome').value,
        email = document.querySelector('.email').value;


        if(senha == ""){
            alert("O campo 'Senha' não pode estar vazio.")
            return false
        }

        else if(nome == ""){
            alert("O campo 'Nome' não pode estar vazio.")
            return false
        }

        else if(email == ""){
            alert("O campo 'Email' não pode estar vazio.")
            return false
        }

        else if(senha != confirma){
            alert("As senhas não conferem.")
            return false
        }

        else if(senha == confirma){
            alert("Conta criada com sucesso!")
        }
        return true
}