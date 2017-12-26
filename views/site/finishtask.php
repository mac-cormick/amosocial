<?php include ROOT.'\views\layouts\header.php' ?>


<div class="container">
    <div class="row">

        <div class="col-md-4 col-md-offset-4">
            <h2>Добавление примечания</h2>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li class="text-danger"> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?php if (isset($answer) && is_string($answer)): ?>
                <p class="text-success"><?php echo $answer; ?></p>
            <?php endif; ?>

            <form action="/finishtask" method="post">
                <div class="form-group">
                    <label for="task-id">ID задачи</label>
                    <p><input class="form-control" type="text" name="task-id" id="task-id"></p>
                    <label for="date">Дата изменения</label>
                    <p><input class="form-control" type="datetime-local" name="date" id="date"></p>
                    <label for="task-text">Текст примечания</label>
                    <p><input class="form-control" type="text" name="task-text" id="task-text"></p>
                    <p><input class="btn btn-primary" type="submit" value="Завершить задачу"></p>
                </div>
            </form>
        </div>

    </div>
</div>

<?php include ROOT.'\views\layouts\footer.php' ?>;