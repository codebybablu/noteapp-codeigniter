<h1>Welcome to Codeigniter</h1>

<a href="notes/create">Create Note</a>


<table>
    <thead>
        <tr>
            <th>Sr No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php $i=1; ?>
        <?php foreach($notes as $d): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= esc($d['title']) ?></td>
            <td><?= esc($d['description']) ?></td>
            <td>
            <a href="/notes/edit/<?= $d['id'] ?>">Edit</a> |
            <a href="/notes/delete/<?= $d['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach;?>
    </tbody>
</table>