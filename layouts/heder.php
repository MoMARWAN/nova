<?php include 'layouts/head.php'?>

<body>
<header>
    <nav class="navbar navbar-expand-lg nav-heder">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logo-nova.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user.php">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Chanllenges</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
          
            <div class="form-group has-search search">
              <span class="fa fa-search form-control-feedback"></span>
              <input  type="text" class="form-control "  placeholder="Search Hare...">
            </div>

          </div>
        </div>

       <div> <button type="button"  class="btn LoginButton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@login">Log in</button></div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="height: 31.063rem;">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="">
                <img style="   
                 display: block;
                margin-left: auto;
                margin-right: auto;" src="img/logo-nova.png" alt="">
               <article class="InForm">
                <div class="udform row g-3 align-items-center">
                  <div class="col-auto ">
                    <label  class="col-form-label">Full Name</label>
                  </div>
                  <div class="col-auto">
                    <input type="text"  class="form-control  <?php echo ($error_full_name != '') ? 'is-invalid' : ''; ?>" aria-describedby="passwordHelpInline">
                  </div>
                  </div>
              
                <div class="udform row g-3 align-items-center">
                  <div class="col-auto">
                    <label  class="col-form-label">Email</label>
                  </div>
                  <div class="col-auto">
                    <input type="email"  class="form-control <?php echo ($error_email != '') ? 'is-invalid' : ''; ?>" aria-describedby="passwordHelpInline">
                  </div>
                  </div>
              
                <div class="udform row g-3 align-items-center">
                  <div class="col-auto">
                    <label  class="col-form-label ">Password</label>
                  </div>
                  <div class="col-auto">
                    <input type="password"  class="form-control" aria-describedby="passwordHelpInline">
                  </div>
                  </div>
              
                <div class="udform row g-3 align-items-center">
                  <div class="col-auto">
                    <label  class="col-form-label">Confirm Password</label>
                  </div>
                  <div class="col-auto">
                    <input type="password"  class="form-control" aria-describedby="passwordHelpInline">
                  </div>
                  </div>
              
              </article>
             
                <button type="submit" class="btn SiupButton" >Sign up</button>
                <p class="Already">Already an Interviewbit user? <a href="sign up.html">Log in</a> <p>
            
              </form>
            </div>
          </div>
        </div>
      </nav>
      <hr>
      <div class="text">
       
        <div class="community">
            <button type="button" class="but Nova-community">Nova community</button>
            <h1>Improve your Interview Experience!</h1>
            <p>More than 2 billion people in over countries use Nova to practice with professional interviewer.</p>
            <button type="button" class="btn LoginButton">Start Practicing</button>
            <button type="button" class="btn btn-outline AboutButton">About our Team</button>
        </div>
        <div><img src="img/Iamge.png" alt=""></div>
      </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
</html>