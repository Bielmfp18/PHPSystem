<?php 
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos estão no POST
    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['telefone'], $_POST['data_nascimento'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];

        try {
            // SQL para inserir os dados
            $sql = "INSERT INTO usuarios (nome, email, senha, telefone, data_nascimento) 
                    VALUES (:nome, :email, md5(:senha), :telefone, :data_nascimento)";
            $stmt = $conn->prepare($sql);

            // Vincula as variáveis aos parâmetros
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':data_nascimento', $data_nascimento);

            // Executa a consulta
            if ($stmt->execute()) {
                echo "Usuário cadastrado com sucesso".'<br><a href="GreenIT.php">Ir à página inicial</a>';
            } else {
                echo "Erro ao cadastrar usuário" .'<br><a href="Cadastro.php">Voltar à página de Cadastro</a>';
            }
        } catch (PDOException $e) {
            echo "Erro ao inserir o usuário: " . $e->getMessage().'<br><a href="Cadastro.php">Voltar à página de Cadastro</a>';
        }
    } else {
        echo "Erro: Campos do formulário não preenchidos corretamente.".'<br><a href="Cadastro.php">Voltar à página de Cadastro</a>';;
    }
} else {
    echo "Método de requisição inválido.".'<br><a href="Cadastro.php">Voltar à página de Cadastro</a>';;
}?>