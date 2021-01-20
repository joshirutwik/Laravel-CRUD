@include('header');
<h1 style="text-align: center"> Add Member</h1>
<form action="" style="width:50%;" class="mx-auto" method="POST">
    @csrf 
    <input class="form-control" type="text" name="name" placeholder="Enter your name"/><br><br>
    <input type="number" class="form-control" name="number" placeholder="Enter your number" /><br><br>
    <center><input type="submit" value="send" class="btn btn-primary w-50" style="text-align: center"></center>

</form>