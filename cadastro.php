<!DOCTYPE html>
<html>
<head>
    <title>Cadastre seu Veículo</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="pripag.css">
</head>
<header>
        <div>
            <img src="./img/green.png" alt="Logo">
        </div>
    </header>
<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="sobre.php">Sobre Nós</a></li>
        </ul>
    </nav>
<body>
    <h1>Cadastre seu Veículo</h1>
    <form action="registrar.php" method="POST">
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="Sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" required><br>

        <label for="CPF">CPF(apenas numeros):</label>
        <input type="text" name="cpf" required><br>

        <label for="Cep">CEP:</label>
        <input type="text" name="cep" required><br>

        <label for="Endereco">Endereço:</label>
        <input type="text" name="endereco" required><br>

        <label for="Cidade">Cidade:</label>
        <input type="text" name="cidade" required><br>
        
        <label for="Estado">Estado:</label>
        <select id="estado" name="estado">
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
        <option value="EX">Estrangeiro</option>
    </select><br>

        <label for="Modelo">Modelo do Veículo Ofertado:</label>
        <input type="text" name="modelo" required><br>

        <label for="Fabricante">Fabricante:</label>
        <select id="fabricante" name="fabricante">
            <option value="FIAT">FIAT</option>
            <option value="VOLKSWAGEN">VOLKSWAGEN</option>
            <option value="CHEVROLET">CHEVROLET</option>
            <option value="PEUGEOT">PEUGEOT</option>
        </select> 

        <label for="Ano">Ano de Fabricação:</label>
        <input type="text" name="ano" required><br>

        <label for="Placa">Placa:</label>
        <input type="text" name="placa" required><br>

        <label for="Renavan">Renavan:</label>
        <input type="text" name="renavan" required><br>

        <label for="Foto">Foto do seu Veículo:</label>
        <input type="file" name="foto" required><br>

        <label for="Carro">Veículo Elétrico de Interesse:</label>
        <select id="carro" name="carro">
            <option value="BYD DOLPHIN MINI">BYD DOLPHIN MINI</option>
            <option value="BMW IX3">BMW IX3</option>
            <option value="Renault Kwid E-Tech">Renault Kwid E-Tech</option>
            <option value="Audi Q8 E-TRON">Audi Q8 E-TRON</option>
        </select> 

        <label for="Anocarro">Ano de Fabricação:</label>
        <input type="text" name="anocarro" required><br>

        <input type="submit" value="Enviar">
    </form>
    <footer>
        <p>&copy; 2024 Green Drive. Todos os direitos reservados.</p>
    </footer>
</body>
</html>