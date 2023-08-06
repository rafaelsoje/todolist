<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>Todo List</title>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <img src="./assets/images/logo.png" />
    </div>
    <div class="content">
        <nav>
            <a href="#" class="btn btn-primary">
                Criar Tarefa
            </a>
        </nav>
        <main>
            <section class="graph">
                <div class="graph-header">
                    <h2>Progresso do dia.</h2>
                    <hr class="linhaHeader"/>
                    Data
                </div>
                <div class="graph-Header-subtitle">Tarefas: <b>3/6</b></div>
                <div class="graph-placeholder"></div>
                <p class="graph-heade-tasks-left">Restam 3 tarefa para serem realizadas</p>
            </section>
            <section class="list">
                <div class="list-Header">
                    <select class="list-Header-select">
                        <option value="1">Todas as tarefas</option>
                    </select>
                </div>
                <div class="task-list">
                    <div class="task">
                        <div class="title">
                            <input type="checkbox" />
                            <div class="task-title">Titulo da tartefa</div>
                        </div>
                        <div class="priority">
                            <div class="sphere"></div>
                            <div>Titulo da tartefa</div>
                        </div>
                        <div class="actions">
                            <a href="">
                                <img src="./assets/images/icon-edit.png" />
                            </a>
                            <a href="">
                                <img src="./assets/images/icon-delete.png" />
                            </a>                                
                        </div>
                    </div>
                    <div class="task">
                        <div class="title">
                            <input type="checkbox" />
                            <div class="task-title">Titulo da tartefa</div>
                        </div>
                        <div class="priority">
                            <div class="sphere"></div>
                            <div>Titulo da tartefa</div>
                        </div>
                        <div class="actions">
                            Editar - Excluir
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

</body>
</html>
