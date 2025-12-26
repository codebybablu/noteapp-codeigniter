<h1>Create Notes</h1>
<form action="<?= site_url('notes/store') ?>" method="post">
  <?= csrf_field() ?>
  <label>Title</label>
  <input type="text" name="title" placeholder=" Enter Title"><br><br>

  <label>Description</label>
  <textarea name="description" placeholder="Description"></textarea><br><br>

  <button type="submit">Save</button>
</form>