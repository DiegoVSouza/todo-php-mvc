
<h2>Editar Tarefa</h2>
<form class="form-task" method="POST">
    <div class="form-content">
    <label class="form-label">Titulo</label>
    <input type="text" name="title" class="form-control" value="<?= $task['title'] ?>" required>
        <label class="form-label">Descrição</label>
        <input type="text" name="description" class="form-control" value="<?= $task['description'] ?>" required>
        <label class="form-label">Status</label>
        <select name="status" class="form-control form-control-select">
            <option value="pending" <?= $task['status'] == 'pending' ? 'selected' : '' ?>>Pendente</option>
            <option value="completed" <?= $task['status'] == 'completed' ? 'selected' : '' ?>>Completo</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-right">Salvar</button>
</form>

