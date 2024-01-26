<h2>LIST POST</h2>
<a href="addPost">ADD</a>
<table border="1" style="border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>CONTENT</th>
        <th>CREATE_AT</th>
        <th>UPDATE_AT</th>
        <th colspan="2">Action</th>
    </tr>
    <?php foreach ($post as $p) { ?>
        <tr>
            <td><?php echo $p['id'] ?></td>
            <td><?php echo $p['title'] ?></td>
            <td><?php echo $p['content'] ?></td>
            <td><?php echo $p['create_at'] ?></td>
            <td><?php echo $p['update_at'] ?></td>
            <td><a href="viewUpdate&id=<?= $p['id'] ?>" class="btn btn-warning">EDIT</a></td>
            <td><a onclick="return confirm('you want delete sure?')" href="delete&id=<?= $p['id'] ?>" class="btn btn-danger">Remove</a></td>
        </tr>
    <?php } ?>
</table>