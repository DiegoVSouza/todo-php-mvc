<section class="container">
    <div>
        <h2>Lista de Tarefas</h2>
        <a href="add" class="btn btn-primary mb-3"> Adicionar Tarefa</a>
    </div>


    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= htmlspecialchars($task['id']) ?></td>
                    <td><?= htmlspecialchars($task['title']) ?></td>
                    <td><?= htmlspecialchars($task['description']) ?></td>
                    <td><?= $task['status'] == 'pending' ? '⏳ Pendente' : '✅ Completo' ?></td>
                    <td>

                    <?php if ($task['status'] == 'pending'): ?>
                        <form action="complete" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $task["id"]?>" >
                            <button type="submit" class="btn btn-success">✅</button>
                        </form>
                    <?php endif; ?>

                        <a href="edit?id=<?= $task['id'] ?>" class="btn btn-warning">Editar</a>

                        <form action="delete" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $task['id'] ?>">
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Tem certeza que deseja excluir esta tarefa?');">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>