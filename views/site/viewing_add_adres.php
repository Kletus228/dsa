<h1>Информация о адресе</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>city</th>
        <th>street</th>
        <th>entance</th>
        <th>room</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($adres as $key=>$value): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $value->city ?></td>
            <td><?= $value->street ?></td>
            <td><?= $value->entance ?></td>
            <td><?= $value->room ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>

</table>

