<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">My Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" onclick="loadhome()">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadresume()">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadcontacts()">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadquotes()">Quotes</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="button" onclick="call_login();">Login</button>
          </form>
          <script type="text/javascript">
            function call_login(){
              window.location = "login.php";
            }
          </script>
        </div>
      </div>
    </nav>
  </header>
   