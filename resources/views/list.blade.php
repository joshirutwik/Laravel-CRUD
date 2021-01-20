
@include('header');

<h1 style="text-align: center">Users</h1>

<table class="table mx-auto w-100 table-hover">
    <tr>
        <td scope="col">ID</td>
        <td scope="col">Name</td>
        <td scope="col">Number</td>
        <td scope="col">Delete</td>
        <td scope="col">Update</td>
    </tr>
    @foreach ($posts as $post)
        <tr>
            <td>{{$post['id']}}</td>
            <td>{{$post['name']}}</td>
            <td>{{$post['number']}}</td>
            <td><a href={{"delete/".$post['id']}}><button class="btn btn-danger" >Delete</button></a></td>
            <td><a href={{"edit/".$post['id']}}><button class="btn btn-success" >Update</button></a></td>
        </tr>
    @endforeach
</table>