<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CRUD - PHP</title>
	</head>
	<body>
		<form role="form" method="post" action="view/listar_pesquisa.php" accept-charset="UTF-8">
            <div class="row">
                <select id="criterio_pesquisa" name="criterio_pesquisa">
                    <option disabled selected>Critério</option>
                    <option>Nome</option>
                    <option>CPF</option>
                </select>
                <input id="" name="" type="text" placeholder="Digite o nome" required="true">
                <input id="" name="" type="hidden" value="1" required="true">
            </div>
            <div>
                <button type="submit" id="submit" name="submit">Buscar</button>
                <a href="view/listar_todos.php">Listar Todos</a>
                <a href="view/cadastrar.php">Cadastrar</a>
            </div>
        </form>
	</body>
</html>