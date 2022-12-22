<!DOCTYPE html>
<html lang="en">
<?php include 'layouts/head.php'?>

<body>
<?php include 'layouts/profile.header.php'?>
  
    <nav class="navbar navbar-expand-lg nav-heder">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logo-nova.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div ">
            <ul class="navbar-nav justify-content-end  mb-lg-0">
              <li class="nav-item">
                <a  class="nav-link" href="#" style="color: #432773;">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #432773;" > Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #432773;"  >Chanllenges</a>
              </li>
                </ul>
          </div>
        </div>
        <div class="profile">
            <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/profile.png" alt="">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"> <i class="fa-thin fa-user"></i> Profile</a></li>
                  <li><a class="dropdown-item" href="#"> <i class="fa-thin fa-user"></i> logout</a></li>
                </ul>
              </div>
         
        </div>
      </nav>
  

    <div class="card mb-3 PracticeIntreview">
        <div  class="card-top Practicee">
            <img src="img/user2.png" alt="">
            <div>
            <h1>James Ronald</h1>
            <button type="button" class="btn btn-primary">Start a Practice Intreview</button>
        </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">About me</h5>
          <p class="card-text">Hello. My name is James working as UI/UX designer. The user interactive UI design will help you and your website or app to convert the visitor to real customers and that will help you to make great revenue for your business...</p>
        </div>
      </div>
    
      <section class="cominginterview">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">coming interview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">setting</a>
            </li>
           
          </ul>
          <img src="img/Stuck at Home Happy Place.png" alt="">
          <p>No coming interview yet</p>
        </section>
  
        <?php include 'layouts/footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    
</body>
</html>