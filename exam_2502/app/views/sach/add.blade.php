@if(isset($_SESSION['error']) && isset($_GET['msg']))
<ul>
    @foreach($_SESSION['error'] as $s)
<li style="color: red">{{$s}}</li>
    @endforeach
</ul>
@endif
<h2>ADD</h2>
<form action="add" method="post">
    <label>Name</label>
    <input type="text" name="name">
    <label>Title</label>
    <input type="text" name="title">
    <label>Create_at</label>
    <input type="text" name="create_at">
    <input type="submit" value="ADD" name="add">
</form>
<a href="listSach">LIST</a>