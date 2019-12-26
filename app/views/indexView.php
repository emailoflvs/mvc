<table>
    <tr><td>Имя</td><td>Возраст</td></tr>
    <?php
    foreach($data as $row)
    {
        echo '<tr><td>'.$row['name'].'</td><td>'.$row['age'].'</td></tr>';
    }
    ?>
</table>

<form method='post' action='' name="add_user">
    <input type="hidden" name="add">
    <div class="form-group">
        <label for="title">Имя:</label>
        <br>
        <input type="text" class="form-control" id="user" placeholder="" name="user" value ="">
    </div>

    <div class="form-group">
        <label for="description">Возраст:</label>
        <br>
        <input type="text" class="form-control" id="age" placeholder="" name="age" value ="" size="1">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>


</form>