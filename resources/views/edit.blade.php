@include('header');
<h1 style="text-align: center;">Edit <h1>
    

        <form action="edit"  style="width:50%;" class="mx-auto" method="POST">
            @csrf
            <input  class="form-control" type="hidden" name="id" value={{$posts['id']}} />
            <input class="form-control" type="text" name="name"  value={{$posts['name']}} /><br><br>
            <input  class="form-control" type="number" name="number" value={{$posts['number']}} /><br><br>
            <center><input type="submit" value="update" class=" w-50 btn btn-outline-success" style="text-align: center;"/></center>
        </form>
   