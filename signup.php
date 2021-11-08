<?php include 'inc/header.php' ?>

<!--signup form-->
<section class="section_signup">
    <div class="container">
        <div class="col-md-12 col-lg-8 m-auto py-5">
            <div class="box py-4 rounded">
                 <h5 class="sign_head text-center pt-3">Sign Up as<span class=" sign_color"> Candidate</span></h5>
                 <form class="px-3 px-md-5 py-3">
                     <div class="row">
                         <div class="col-12 col-md-6">
                             <label class="sign_fontsize">First name<span class="text-danger px-1">* </span></label>
                             <input type="text" class="w-100 px-3 py-2 rounded signup_input" placeholder="Enter your First Name" maxlength="100" required>
                         </div>
                         <div class="col-12 col-md-6">
                             <label class="sign_fontsize">Last name<span class="text-danger px-1">* </span></label>
                             <input type="text" class="w-100 px-3 py-2 rounded signup_input" placeholder="Enter your Last Name" maxlength="100" requried>
                         </div>
                         <div class="col-12 col-md-6">
                            <p class="mb-2 pt-3 sign_fontsize">Email ID<span class="text-danger px-1">* </span></p>
                            <input type="email" class="w-100 py-2 px-3 rounded signup_input" placeholder="Enter your Email" maxlength="100" requried>
                         </div>
                         <div class="col-12 col-md-6">
                            <p class="mb-2 pt-3 sign_fontsize">Phone number<span class="text-danger px-1">* </span></p>
                            <input type="tel" class="w-100 py-2 px-3 rounded signup_input" placeholder="Enter your Phone number" minlength="7" maxlength="15" requried>
                         </div>
                     </div>
                    <p class="mb-2 pt-3 sign_fontsize"> Notice Period<span class="text-danger px-1">* </span></p>   
                    <select class="form_control-arrow  form_action rounded pl-3 pr-5" style="height:45px !important";>
                        <option Selected Disabled>Choose Notice Period</option>
                        <option>Notice Period Completed</option>
                        <option>Serving Notice Period</option>
                        <option>Buyable Notice Period</option>
                        <option>Not Under Notice Period</option>
                    </select>
                     <p class="mb-2 pt-3 sign_fontsize">Set Your Password<span class="text-danger px-1">* </span></p>
                     <input type="password" class="w-100 py-2 px-3 rounded signup_input" placeholder="Enter your password" maxlength="100" required>
                     <p class="mb-2 pt-3 sign_fontsize"> Confirm Your Password<span class="text-danger px-1">* </span></p>
                     <input type="password" class="w-100 py-2 px-3 rounded signup_input" placeholder="Confirm your password" maxlength="100" required>
                     <div class="form-group mt-3 mb-0">
                        <label class="sign_fontsize" for="exampleFormControlFile1">Attach Resume<span class="text-danger px-1">* </span></label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                     <div class="row py-4 ">
                         <div class="col-12 d-flex align-items-sm-center">
                             <input type="checkbox" id="agree" class="checkbox_size" maxlength="100" required><label for="agree" class="align-text-bottom mb-0 sign_fontsize">I read and agree <a href="#">Terms & Conditions</a></label>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-12 text-center">
                             <button type="submit" class="py-2 w-100 rounded signup_button">Create your account</button>
                         </div>
                     </div>
                     <div class="col-12">
                        <div class="text-center pt-4 sign_fontsize">Already have an account ?<a href="signin.php">  Sign in</a></div>
                     </div>
                 </form>
            </div>
        </div>
    </div>
</section>


<?php include 'inc/footer.php' ?>