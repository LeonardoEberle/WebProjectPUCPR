<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastre-se já</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: yellowgreen;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .seta {
        position: absolute;
        margin-top: -70px;
    }
    
    .seta a {
        text-decoration: none;
        color: yellow;
    }
        h2{
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            cursor: pointer;
            border-radius: 4px;
        }
        h3{
    margin-top: 20px;
    margin-bottom: 20px;
    color: black;
    text-align: center;
}
a{
    text-decoration: none;
    font-size: 14px;
    color:yellow;
    margin-top: 20px;
    font-weight: bold;

}
    </style>
</head>
<body>

    <?php
    include_once("../conn.php");
    $sql1 = "select * from estados";
    $sql2 = "select * from cargo";
    $res1 = $con->query($sql1);
    $res2 = $con->query($sql2);
    ?>

    <form action="../Controller/cadastroController.php" method="post">
        <h2>Cadastre-se na Kalltto Agrosolutions</h2>
        <div class="seta">
            <a href="../index.php" onclick="voltarPagina()">Voltar</a>
        </div>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>

        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" id="nascimento" name="nascimento" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>

        <label for="senha">Senha: (A senha deve conter pelo menos uma letra maiúscula, uma letra minúscula, um número, um caractere especial e ter no mínimo 8 caracteres.)</label>
        <input type="password" id="senha" name="senha" required>

        <label for="cargo">Cargo:</label>
        <select id="cargo" name="cargo" required>
        <?php foreach($res2 as $row): ?>
                <option value="<?= $row['car_id']; ?>"><?= $row['car_nome']; ?></option>
        <?php endforeach; ?>
        </select>

        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
        <?php foreach($res1 as $row): ?>
                <option value="<?= $row['est_id']; ?>"><?= $row['est_nome']; ?></option>
        <?php endforeach; ?>
        </select>

        <input type="submit" value="Enviar">
    </form>

    <h3>Já possui um cadastro?</h3>
    <a href="login.php"><input type="submit" value="CLIQUE AQUI"></a>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');

            form.addEventListener('submit', function (event) {
                const nomeRegex = /^[a-zA-Z\s]{3,}$/;
                const nomeInput = form.querySelector('#nome');
                if (!nomeRegex.test(nomeInput.value)) {
                    alert('Por favor, insira um nome válido.');
                    event.preventDefault();
                    return;
                }

                const nascimentoRegex = /^\d{4}-\d{2}-\d{2}$/;
                const nascimentoInput = form.querySelector('#nascimento');
                if (!nascimentoRegex.test(nascimentoInput.value)) {
                    alert('Por favor, insira uma data de nascimento válida.');
                    event.preventDefault();
                    return;
                }

                const telefoneRegex = /^\d{10,15}$/;
                const telefoneInput = form.querySelector('#telefone');
                if (!telefoneRegex.test(telefoneInput.value)) {
                    alert('Por favor, insira um número de telefone válido.');
                    event.preventDefault();
                    return;
                }

                const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                const emailInput = form.querySelector('#email');
                if (!emailRegex.test(emailInput.value)) {
                    alert('Por favor, insira um endereço de email válido.');
                    event.preventDefault();
                    return;
                }

                const loginRegex = /^[a-zA-Z0-9._-]{3,}$/;
                const loginInput = form.querySelector('#login');
                if (!loginRegex.test(loginInput.value)) {
                    alert('Por favor, insira um login válido.');
                    event.preventDefault();
                    return;
                }

                const senhaRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
                const senhaInput = form.querySelector('#senha');
                if (!senhaRegex.test(senhaInput.value)) {
                    alert('A senha deve conter pelo menos uma letra maiúscula, uma letra minúscula, um número, um caractere especial e ter no mínimo 8 caracteres.');
                    event.preventDefault();
                    return;
                }

                const cargoInput = form.querySelector('#cargo');
                const estadoInput = form.querySelector('#estado');
                if (cargoInput.value === '' || estadoInput.value === '') {
                    alert('Por favor, selecione uma opção para Cargo e Estado.');
                    event.preventDefault();
                    return;
                }
            });
        });
    </script>

</body>
</html>