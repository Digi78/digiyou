<?php include 'include/header.php'; ?>
       <style type="text/css">
        
.wpo-about-area-3 .wpo-about-text, .wpo-about-area-5 .wpo-about-text {
       padding-top: 50px;
}
.wpo-protfolio-single {
       border-radius:30px;
       box-shadow: 0px 15px 22px 0px rgba(50, 50, 50, 0.1);
}

       </style>
       

<div class="section-padding dasboard">
          <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="left_side">

             <ul class="ul_set sider_barr">

                <li><a href="profile.php"><i class="la la-user"></i> Profile</a></li>

                <li><a href="change-password.php"><i class="la la-unlock"></i> Change Password</a></li>

                
                <li><a href="index.php"><i class="la la-sign-out"></i> Logout</a></li>

             </ul>

          </div>
                </div>
                <div class="col-sm-8">
                    <div class="right_box">
              <h4 class="hedding_right">Change Password</h4>
              <div class="card_bodym">
                  <div class="form-group">
                      <label>Current Password</label>
                      <input type="password" name="password" placeholder="Old Password" class="form-control" required="">
                   </div>
                   <div class="form-group">
                      <label>New Password</label>
                      <input type="password" name="new_password" placeholder="New Password" class="form-control" required="">
                   </div>
                   <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control" required="">
                   </div>
                  <div class="form-group">
                    <button class="btn btn_theme btn-lg">Submit</button>
                 </div>

              </div>
          </div>
                </div>
            </div>
            </div>
        </div>

<?php include 'include/footer.php'; ?>