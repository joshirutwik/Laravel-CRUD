<script src="{{asset('js/app.js')}}"></script>
<link href="{{asset('css/app.css')}}" rel="stylesheet"/>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Laravel CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Read">Show Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add">Add User</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>