<h2>EDIT</h2>
<form action="{{route('update/'.$post['id'])}}" method="post">
    <input type="hidden" name="id" value="{{$post['id']}}">
    <label>Name</label>
    <input type="text" name="name" value="{{$post['name']}}">
    <label>Title</label>
    <input type="text" name="title" value="{{$post['title']}}">
    <label>Create_at</label>
    <input type="text" name="create_at" value="{{$post['create_at']}}">
    <input type="submit" value="edit" name="edit">
</form>
<a href="listSach">LIST</a>