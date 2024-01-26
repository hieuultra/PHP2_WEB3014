<h2>EDIT POST</h2>
<?php if ($post) { ?>
    <form action="editPost&id=<?= $post['id'] ?>" method="post">
        <label>Title</label>
        <input type="text" name="title" value="<?= $post['title'] ?>">
        <label>Content</label>
        <input type="text" name="content" value="<?= $post['content'] ?>">
        <label>Create_at</label>
        <input type="text" name="create_at" value="<?= $post['create_at'] ?>">
        <label>Update_at</label>
        <input type="text" name="update_at" value="<?= $post['update_at'] ?>">
        <input type="submit" value="EDIT" name="edit">
    </form>
<?php } ?>
<div><a href="list">LIST</a></div>