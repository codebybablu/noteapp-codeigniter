<h1>Edit Notes</h1>

<form action="<?= site_url('notes/update/' . $note['id']) ?>" method="post">
    <?= csrf_field() ?>

    <label>Title</label>
    <input type="text" name="title"
           value="<?= esc($note['title']) ?>"
           placeholder="Enter Title">
    <br><br>

    <label>Description</label>
    <textarea name="description"
              placeholder="Description"><?= esc($note['description']) ?></textarea>
    <br><br>

    <button type="submit">Update</button>
</form>
