//Acabvei não utilizando, e fui para a função do bootstrap.

function validar() {
  let nome = document.getElementById("inputnome");
  let email = document.getElementById("inputemail");
  let mensagem = document.getElementById("mensagem");
  
  // verificar se o nome está vazio
  
  if (nome.value == "") {
    nome = ("Campo nome obrigatório.");
    alert("Campo nome obrigatório.");
    // Deixa o input com o focus
    nome.focus();
    // retorna a função e não olha as outras linhas
    return;
  }
  if (email.value == "") {
    email = ("Campo e-mail obrigatório.");
    alert("Campo e-mail obrigatório.");
    //email.focus();
    return;
  }
  if (mensagem.value == "") {
    mansagem=("Campo mensagem obrigatório.");
    alert("Campo mensagem obrigatório.");
    //mensagem.focus();
    return;
  }  
  alert("Formulário enviado!");
  // envia o formulário
  //formulario.submit();
}