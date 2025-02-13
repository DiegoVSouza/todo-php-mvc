<?php define('BASE_URL', '/todo-php-mvc/public'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
</head>
<body>
    <header>
        <h1>Todo List</h1>
        <nav>
            <ul>
                <li><a href="home">Início</a></li>
                <li><a href="add">Adicionar Tarefa</a></li>
            </ul>
        </nav>
    </header>
    <main>