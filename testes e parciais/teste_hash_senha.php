<?php

$senha = ('123');
$hashsenha = trim(ltrim(password_hash($senha, PASSWORD_DEFAULT)));
$hashsenha1 = trim(ltrim(password_hash($senha, PASSWORD_DEFAULT)));

//$hashsenha = trim(password_hash($_POST['senha'], PASSWORD_DEFAULT));


//$hashsenha1 = password_hash('Gu01020@', algo:PASSWORD_DEFAULT);    
//$hashsenha2 = password_hash('Gu01020@', algo:PASSWORD_DEFAULT);    

//$senhatarde = ('Gu010203@12');
//$senhatardehash = ('$2y$10$Ec.JaQ5RK7ENUpxBODKPz.u6aRqh4nrNLto0p62MJhxcR0M9zXH3q');

//echo password_verify($senhatarde, $senhatardehash);


//echo "$senha<br><br>";
//echo "$hashsenha<br>";
//echo "$hashsenha1<br><br>";

if (password_verify($hashsenha,$hashsenha1)) {
    echo "$senha<br>";
    echo "Senha correta<br>";
    echo "O Hash da senha é " . $hashsenha;
  }
  else {
    echo "$senha<br>";
    echo "$hashsenha<br>";
    echo "$hashsenha1<br>";
    echo "Senha incorreta!";
  }

//echo "$hashsenha1<br>";
//echo "$hashsenha2<br><br><br>";

//echo password_verify($senha, $hashsenha);
//echo password_verify($senha, $hashsenha1);
//echo password_verify($senha, $hashsenha2);

/*
8 caracteres 
letras maiúsculas e minúsculas
números
caracteres especiais
não conter sequências.



echo "Criando hash de senha com salt e testando:<br>";
$hashSenha = password_hash('123', PASSWORD_DEFAULT);
if (password_verify('123', $hashSenha)) {
  echo "Senha correta<br>";
  echo "O Hash da senha é " . $hashSenha;
}
else {
  echo "Senha incorreta!";
}
*/
?>