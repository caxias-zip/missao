<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    // Montando o corpo do e-mail
    $assunto = 'Novo contato do site Minha Missão';
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Enviando o e-mail
    $destinatario = 'lcsilva@missionary.org'; // Substitua pelo seu endereço de e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviando o e-mail
    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo '<p>Obrigado por entrar em contato conosco. Sua mensagem foi enviada com sucesso!</p>';
    } else {
        echo '<p>Desculpe, ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.</p>';
    }
} else {
    // Se o método HTTP não for POST, redirecionar de volta para o formulário
    header('Location: index.html');
}
?>
