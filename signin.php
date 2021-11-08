<?php include 'inc/header.php' ?>
<!-- signin form -->
<section class="section_signin">
    <div class="container">
        <div class="col-md-8 col-xl-5 col-lg-6 px-0 py-5 m-auto">
            <div class="box py-4 rounded">
                <h5 class="sign_head text-center my-0 pt-3" >Sign In to<span class=" sign_color"> Job Portal</span></h5>
                <form class="px-5 py-3">
                    <p class="sign_fontsize mb-2" >Email ID<span class="text-danger px-1">* </span></p>
                    <input type="email" class="w-100 py-2 px-3 signin_input rounded" placeholder="Enter Email" maxlength="100" required >
                    <p class=" sign_fontsize mb-2 pt-4">Password<span class="text-danger px-1">* </span></p>
                    <input type="password" class="w-100 py-2 px-3 signin_input rounded" placeholder="Enter your password" maxlength="100" required>
                    <div class="py-4  row">
                        <div class="col-md-6 pl-2">
                            <input type="checkbox" id="remember" class="checkbox_size mt-0" maxlength="100" requried>
                            <label for="remember" class="mb-0 align-top sign_fontsize" >Remember me</label>
                            </input>
                        </div>
                        <div class="col-md-6 signin_forgot sign_fontsize pt-2 pt-md-0">
                            <a href="javascript:void(0)">Forgot password ?</a>
                        </div>
                    </div>
                    <button type="submit" class="w-100 py-2 signin_button rounded" >Sign in</button>
                    <div class="text-center pt-4 sign_fontsize">Don't have an account?<a class="px-2" href="signup.php">Signup</a>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php' ?>