<!DOCTYPE html>
<html lang="en">



 <?php  include 'layouts/head.php'?>

 
 
<body>
  
<?php  include 'layouts/profile.header.php'?>
 
<!-- /* login */ -->
<form>
  <img src="img/logo-nova.png" alt="">

  <div class="row mb-3 ">
    <label for="inputEmail1" class="col-sm-2 col-form-label text-end">Email :</label>
    <div class="col-sm-10 Signupform">
      <input type="email" class="form-control" id="inputEmail1">
    </div>
  </div>
  <div class="row mb-3 ">
    <label for="inputPassword2" class="col-sm-2 col-form-label text-end">Password :</label>
    <div class="col-sm-10 Signupform">
      <input type="password" class="form-control" id="inputPassword2">
    </div>
  </div>

  <button type="submit" class="btn LoginButton">Sign in</button>
  <p class="Already">Don't have an account?  <a href="landing.html/exampleModal">Sign up</a> <p>

</form>
<!-- /*login*/ -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<!-- <div dir="rtl" class="job">
      <button class="btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">  <i class="fa-solid fa-plus"></i>  أضف عمل جديد  </button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="
        
        background: #FFFFFF;
        box-shadow: 8px 8px 4px rgba(0, 0, 0, 0.25);">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">إضافة عمل جديد</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">إسم العمل</label>
                  <input type="text" style="width: 50%;" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">أضف وصفاً</label>
                  <textarea class="form-control" style="width: 50%;" id="message-text"></textarea>
                </div>
                <div class="mb-3">
                  <input class="form-control" style="width: 254px;
                  height: 204.9px;
                  float:left ;" type="file" id="formFile">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" style="margin: auto;" class="btn btn-primary">إضافة </button>
            </div>
          </div>
        </div>
      </div>
    </div>
 
<div class="Welcome">
  <img src="img/welcome.png" alt="">
<p>Welcome, You Can Update Your Information from setting section </p>
</div>
<button class="btn btn-light">Cancal</button>
<button class="LoginButton">go to setting</button> -->


</body>
</html>