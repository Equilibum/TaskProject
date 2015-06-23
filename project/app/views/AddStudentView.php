<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Пол</th>
            <th>Возраст</th>
            <th>Группа</th>
            <th>Факультет</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($withparams as $val): ?>
            <tr>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['surname']; ?></td>
                <td><?php echo $val['sex']; ?></td>
                <td><?php echo $val['age']; ?></td>
                <td><?php echo $val['groups']; ?></td>
                <td><?php echo $val['faculty']; ?></td>
                <td>
                    <a class="btn btn-warning" href="<?php echo '/'. $public. '/'.$uri; ?>/changeStudent/<?php echo $val['id']; ?>">Редактировать</a>
                    <a class="btn btn-danger" href="<?php echo '/'. $public. '/'.$uri; ?>/deleteStudent/<?php echo $val['id']; ?>">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <form method="post">
                <td class="col-md-2">
                    <input class="form-control col-md-1" type="text" name="name" placeholder="Имя">
                </td>
                <td class="col-md-2">
                    <input class="form-control col-md-1" type="text" name="surname" placeholder="Фамилия">
                </td>
                <td class="col-md-1">
                    <select class="form-control col-md-1" name="sex">
                        <option>М</option>
                        <option>Ж</option>
                    </select>
                </td>
                <td class="col-md-1">
                    <input class="form-control col-md-1" type="text" name="age" placeholder="Возраст">
                </td>
                <td class="col-md-1">
                    <input class="form-control col-md-1" type="text" name="group" placeholder="Группа">
                </td>
                <td class="col-md-2">
                    <input class="form-control col-md-1" type="text" name="faculty" placeholder="Факультет">
                </td>
                <td>
                    <button class="btn btn-block btn-success">Добавить студента</button>
                </td>
            </form>
        </tr>
        </tbody>
    </table>
</div>