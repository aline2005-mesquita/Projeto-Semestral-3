<?php
require_once "conectar.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pagamento'])) {
    
    foreach ($_POST['pagamento'] as $id_aluno => $opcao) {
        
        $id_limpo = mysqli_real_escape_string($mysqli, $id_aluno);
        $opcao_limpa = mysqli_real_escape_string($mysqli, $opcao);

        $sql = "UPDATE alunos SET pagamento = '$opcao_limpa' WHERE id_aluno = '$id_limpo'";
        mysqli_query($mysqli, $sql);
    }

    echo "<script>
            alert('Todos os pagamentos foram atualizados!');
            window.location.href = 'relatorio.php';
          </script>";

} else {
    header('Location: relatorio.php');
}

mysqli_close($mysqli);
?>