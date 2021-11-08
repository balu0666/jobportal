<!-- hear section -->

<?php include 'inc/header.php' ?>

<!-- pricing_page -->

<section class="contact_bg-color">
    <div class="container contact_bg-color">
        <div class="row">
            <div class="col-lg-12 text-center py-5">
                <div class="contact_head-color py-1">
                    Pricing
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing reference -->

<section class="contact_para">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center px-md-2 py-2">
                <div class="py-5">
                    <p class="contact_para-align mb-0 px-4 px-md-0"> Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry.Lorem Ipsum
                        has been the industry's standrad dummy text ever since the 1500s</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- pricing main section -->

<section class="pricing_main-part">
    <div class="container">

        <div class="col-md-10 m-auto pb-4 pb-sm-5">
            <div class="row">
                <div class="pricing_parent col-md-6 pb-3 pb-sm-4 col-lg-4">
                    <div class="pricing_content">
                        <h2 class="text-center pricing_background-head">Start Up</h2>
                        <h2 class="text-center pricing_body-head py-3">$10</h2>
                        <p class="text-center pb-2 pb-sm-4 px-4">Access 20-50 average candidate profile and resume</p>
                        <div class="pb-5">
                            <button type="button" class="btn btn_style mx-auto" data-toggle="modal"
                                data-target="#planform">Select Plan</button>
                        </div>
                    </div>
                </div>
                <div class="pricing_parent col-md-6 pb-3 pb-sm-4 col-lg-4">
                    <div class="pricing_content">
                        <h2 class="text-center pricing_background-head">Applicant Pro</h2>
                        <h2 class="text-center pricing_body-head py-3">$18</h2>
                        <p class="text-center pb-2 pb-sm-4 px-4">Access 100-150 average candidate profile and resume</p>
                        <div class="pb-5">
                            <button type="button" class="btn btn_style mx-auto" data-toggle="modal"
                                data-target="#planform">Select Plan</button>
                        </div>
                    </div>
                </div>
                <div class="pricing_parent col-md-6 pb-3 pb-sm-4 col-lg-4">
                    <div class="pricing_content">
                        <h2 class="text-center pricing_background-head">Company Pro</h2>
                        <h2 class="text-center pricing_body-head py-3">$26</h2>
                        <p class="text-center pb-2 pb-sm-4 px-4">Access 150-200 average candidate profile and resume</p>
                        <div class="pb-5">
                            <button type="button" class="btn btn_style mx-auto" data-toggle="modal"
                                data-target="#planform">Select Plan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- modal -->

<div class="container">
    <!-- modal -->
    <div class="modal" id="planform">
        <div class="modal-dialog px-0">
            <div class="modal-content w-md-50 mx-auto px-0 py-3">
                <!-- header -->
                <p type="button" class="info pr-2" data-dismiss="modal"><img
                        class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                <h5 class="text-center sign_head my-0">Request Signup To<span class=" sign_color"> Job Portal</span>
                </h5>
                <!-- body -->
                <div class="col-12 modal-body px-0">
                    <form class="px-3 px-sm-5">
                        <p class="sign_fontsize mb-2 pt-3">Company Name<span class="text-danger px-1">*</span></p>
                        <input type="text" class="w-100 py-2 px-3 signin_input rounded" placeholder="Company Name"
                            maxlength="100" required>
                        <p class="sign_fontsize mb-2 pt-3">Offical Email<span class="text-danger px-1">*</span></p>
                        <input type="email" class="w-100 py-2 px-3 signin_input rounded" placeholder="Offical Email"
                            maxlength="100" required>
                        <p class="sign_fontsize mb-2 pt-3">Mobile/Landline<span class="text-danger px-1">*</span></p>
                        <input type="tel" class="w-100 py-2 px-3 signin_input rounded" placeholder="Mobile/Landline"
                            maxlength="100" required>
                        <p class=" sign_fontsize mb-2 pt-3">Contact Person Name<span class="text-danger px-1">*</span>
                        </p>
                        <input type="text" class="w-100 py-2 px-3 signin_input rounded"
                            placeholder="Contact Person Name" maxlength="100" required>
                        <p class=" sign_fontsize mb-2 pt-3">GSTIN(optional)</p>
                        <input type="text" class="w-100 py-2 px-3 signin_input rounded" placeholder="GSTIN(optional)"
                            maxlength="100" required>
                        <div class="row px-0 pt-3 py-0">
                            <div class="col-6 form__radio-group m-0 py-0">
                                <input type="radio" name="size" id="small" class="form__radio-input">
                                <label class="form__label-radio" for="small" class="form__radio-label">
                                    <span class="form__radio-button">Company</span>
                                </label>
                            </div>
                            <div class="col-6 form__radio-group m-0 py-0">
                                <input type="radio" name="size" id="large" class="form__radio-input">
                                <label class="form__label-radio" for="large" class="form__radio-label">
                                    <span class="form__radio-button">Consultant</span>
                                </label>
                            </div>
                        </div>
                        <p class="sign_fontsize mb-2">Pin Code<span class="text-danger px-1">*</span></p>
                        <input type="text" class="w-100 py-2 px-3 signin_input rounded mb-2" placeholder="Pin code"
                            maxlength="100" required>

                        <div class="col-12 px-0 mb-2">
                            <input type="checkbox" class="checkbox_size align-middle" maxlength="100" requried>
                            <span class="sign_fontsize">I agree to receive Promotional Communication from ZNP</span>
                            </input>
                        </div>
                        <div class="col-12 px-0 mb-3">
                            <input type="checkbox" class="checkbox_size  align-middle" maxlength="100" required>
                            <span class="sign_fontsize">I read and agree
                                <a href="#">Terms & Conditions</a>
                            </span>
                        </div>
                        <button type="submit" class="w-100 py-2 signin_button rounded">Send Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal end -->

<!-- Footer section -->

<?php include 'inc/footer.php' ?>