<?php
foreach ($withparams as $val) {
    $name = $val['name'];
    $surname = $val['surname'];
    $sex = $val['sex'];
    $age = $val['age'];
    $group = $val['groups'];
    $faculty = $val['faculty'];
}
?>
<div class="container">
    <table class="table">
        <tbody>
        <tr>
            <form method="post">
                <td class="col-md-2">
                    <input class="form-control col-md-1" type="text" name="name" value="<?php echo $name; ?>">
                </td>
                <td class="col-md-2">
                    <input class="form-control col-md-1" type="text" name="surname" value="<?php echo $surname; ?>">
                </td>
                <td class="col-md-1">
                    <select class="form-control col-md-1" name="sex">
                        <option <?php echo ($sex == 'М')? ' selected' : ''; ?>>М</option>
                        <option <?php echo ($sex == 'Ж')? ' selected' : ''; ?>>Ж</option>
                    </select>
                </td>
                <td class="col-md-1">
                    <input class="form-control col-md-1" type="text" name="age" value="<?php echo $age; ?>">
                </td>
                <td class="col-md-1">
                    <input class="form-control col-md-1" type="text" name="group" value="<?php echo $group; ?>">
                </td>
                <td class="col-md-2">
                    <input class="form-control col-md-1" type="text" name="faculty" value="<?php echo $faculty; ?>">
                </td>
                <td>
                    <button class="btn btn-block btn-warning">Сохранить изменения</button>
                </td>
            </form>
        </tr>
        </tbody>
    </table>
</div>