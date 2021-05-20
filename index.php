<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CRUD - PHP</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="assets/js/js.js" type="text/javascript"></script>
	</head>
	<body>
		<form role="form" method="post" action="view/listar_pesquisa.php" accept-charset="UTF-8">
            <div class="row">
                <select id="criterio_pesquisa" name="criterio_pesquisa" onchange="criterioPesquisa()">
                    <option disabled selected>Critério</option>
                    <option value="1">Nome</option>
                    <option value="2">CPF</option>
                </select>
                <input id="criterio_pesquisa_texto" name="criterio_pesquisa_texto" type="text" placeholder="Digite o nome" required="true">
                <input id="id_pesquisa" name="id_pesquisa" type="hidden" value="1" required="true">
            </div>
            <div>
                <button type="submit" id="submit" name="submit">Buscar</button>
                <a href="view/listar_todos.php">Listar Todos</a>
                <a href="view/cadastrar.php">Cadastrar</a>
            </div>
        </form>
	</body>
</html>