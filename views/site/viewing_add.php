<h1>Общая информация о сотруднике</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Family</th>
        <th>Patronymic</th>
        <th>floor</th>
        <th>Date</th>
        <th>Position</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($employ as $key=>$value): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $value->name ?></td>
            <td><?= $value->family ?></td>
            <td><?= $value->male ?></td>
            <td><?= $value->date ?></td>
            <td><?= $value->position ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>

</table>
