<?php 
  require_once "conectar.php";

  $sql = "SELECT * FROM alunos WHERE cpf != '0'";
  $res = mysqli_query($mysqli, $sql); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Pagamento</title>

    <style>
        html, body {
          margin: 0;
          padding: 0;
          height: 100%;
        }

        .fundoTab {
          display: flex;
          flex-direction: column;
        }

        nav {
          background-color: #333;
          color: white;   
          padding: 15px 20px;
          text-align: center;
          width: 100%;
          box-sizing: border-box;
        }

        nav h2 {
          margin: 0;
          font-size: 24px;
          font-weight: normal;
          letter-spacing: 1px;
        }

        table {
          width: 100%;
          flex-grow: 1;
          border-collapse: collapse;
        }

        th, td {
          text-align: center;
          vertical-align: middle;
          padding: 10px;
        }

        div {
          display: flex;
          flex-direction: column;
          align-items: flex-end; 
          padding: 20px;            
          box-sizing: border-box;
        }

        #bnt {
          background: black;
          color: white;
          border-radius: 20px;
          width: 30%;
          border: none;
          outline: none;
          padding: 8px 0px 8px 0px;
          font-size: 15px;
          margin-top: 20px;   
          cursor: pointer;
        }
    </style>

</head>
<body class="fundoTab">
    <form action="atualizar.php" method="POST">

        <nav>
            <h2> Relatório de Pagamento </h2>        
        </nav>

        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Status de Pagamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($registro = mysqli_fetch_assoc($res)) {
                        $id = $registro['id_aluno']; 
                        $nome = $registro['nome'];
                        $cpf = $registro['cpf'];
                        $pagamento = $registro['pagamento'];
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $cpf ?></td>
                    <td>
                        <input type="radio" id="sim_<?php echo $id ?>" name="pagamento[<?php echo $id ?>]" value="sim" <?php echo ($pagamento == 'sim') ? 'checked' : ''; ?>>
                        <label for="sim_<?php echo $id ?>">Sim</label>

                        <input type="radio" id="nao_<?php echo $id ?>" name="pagamento[<?php echo $id ?>]" value="nao" <?php echo ($pagamento == 'nao') ? 'checked' : ''; ?>>
                        <label for="nao_<?php echo $id ?>">Não</label>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <div>
            <button type="submit" id="bnt">Salvar</button>
        </div>
    </form>
</body>
</html>

<?php mysqli_close($mysqli); ?>