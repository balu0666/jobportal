<!-- hear section -->

<?php include 'inc/header.php' ?>

<!-- unlock profile banner -->

<section class="contact_bg-color">
    <div class="container contact_bg-color">
        <div class="row">
            <div class="col-lg-12 text-center py-5">
                <div class="contact_head-color py-1">
                    Unlocked Profile
                </div>
            </div>
        </div>
    </div>
</section>

<!-- candidate profile -->


<section class="section_search-box d-none d-lg-block">
    <div class="container">
        <div class="row px-2 mt-5">
            <form class="col-lg form-inline serach-icon px-2">
                <input class="form_control-1 rounded pl-3 pr-5" type="text" placeholder="Search" aria-label="Search">
                <button class="filter_search-button" type="button"><img class="search_icon-input pr-0"
                        src="asset/images/loupe.png"></button>
            </form>
            <div class="col-lg position_lit px-2">
                <select name="skills" multiple class="select_skills form_control pl-3 pr-5">
                    <option value="">Choose by Skills</option>
                    <option value="1">Change Methodology</option>
                    <option value="2">Cognitive Computing & AI</option>
                    <option value="3">Connectivity & Collaboration</option>
                    <option value="4">Culture in Action</option>
                    <option value="5">Future of Work</option>
                    <option value="6">HR Transformation</option>
                    <option value="7">Human-centered Design</option>
                    <option value="8">Machine Learning & AI</option>
                    <option value="9">Operational Effectiveness</option>
                    <option value="10">Operational Excellence</option>
                    <option value="11">Organizational Change</option>
                </select>
            </div>
            <div class="col-lg position_lit px-2">
                <select class="form_control form_action rounded pl-3 pr-5">
                    <option>Choose by Location</option>
                    <option>Bangalore</option>
                    <option>Chennai</option>
                    <option>Coimbatore</option>
                    <option>Tirchy</option>
                </select>
            </div>
            <div class="col-lg position_lit px-2">
                <select class="form_control form_action rounded pl-3 pr-5">
                    <option>Choose by Notice Period</option>
                    <option>0-7 Days</option>
                    <option>7-15 Days</option>
                    <option>2-3 Weeks</option>
                    <option>1 Month</option>
                </select>
            </div>
            <div class="col-lg-1 box px-2">
                <button type="submit" class="btn btn_submit w-100 text-light">Apply</button>
            </div>
        </div>
    </div>
</section>

<!-- second section -->

<section class="section_candidate-list py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 scrollbar candidate_filter-sub">
                <div class="candidate_filter-inner">
                    <div class="row d-block d-lg-none">
                        <div class="col-lg candidate_filter-header">
                            <div class="candidate_filter-body candidate_filter-hide py-3 px-2">
                                All Filters
                                <a id="filter_hide-button" class="close_icon-algin" href="javascript:void(0);">
                                    <img class="close_img-icon" src="asset/images/cancel.png">
                                </a>
                            </div>
                        </div>
                        <form class="col-lg form-inline serach-icon mb-3 pt-4 px-3">
                            <input class="form_control-1 rounded pl-3 pr-5" type="text" placeholder="Search"
                                aria-label="Search">
                            <button class="filter_search-button" type="button"><img class="search_icon-input pr-2"
                                    src="asset/images/loupe.png"></button>
                        </form>
                        <div class="col-lg position_lit align-center pl-3 mb-3 px-3">
                            <select name="skills" multiple class="select_skills form_control pl-3 pr-5">
                                <option value="">Choose by Skills</option>
                                <option value="1">Change Methodology</option>
                                <option value="2">Cognitive Computing & AI</option>
                                <option value="3">Connectivity & Collaboration</option>
                                <option value="4">Culture in Action</option>
                                <option value="5">Future of Work</option>
                                <option value="6">HR Transformation</option>
                                <option value="7">Human-centered Design</option>
                                <option value="8">Machine Learning & AI</option>
                                <option value="9">Operational Effectiveness</option>
                                <option value="10">Operational Excellence</option>
                                <option value="11">Organizational Change</option>
                            </select>
                        </div>
                        <div class="col-lg position_lit align-center px-3 mb-3">
                            <select class="form_control form_action rounded pl-3 pr-5">
                                <option>Choose by Location</option>
                                <option>Bangalore</option>
                                <option>Chennai</option>
                                <option>Coimbatore</option>
                                <option>Tirchy</option>
                            </select>
                        </div>
                        <div class="col-lg position_lit">
                            <select class="form_control form_action rounded pl-3 pr-5">
                                <option>Choose by Notice Period</option>
                                <option>0-7 Days</option>
                                <option>7-15 Days</option>
                                <option>2-3 Weeks</option>
                                <option>1 Month</option>
                            </select>
                        </div>
                    </div>
                    <div class="candidate_list-filter mb-4 mb-md-0 px-0">
                        <div class="accordion" id="accordionExample">
                            <div class="candidate_list mt-2 pt-3">
                                <div class="candidate_head mb-1 px-lg-1" id="headingOne">
                                    <button class="btn_candidate-box btn_candidate-arrow px-3 py-4" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Sub Filters
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="candidate_body px-lg-3 py-2">
                                        <div class="form-check pb-2 pl-0 w-100">
                                        <label  class="mb-1 pt-0 sign_fontsize">Total Experience<span class="text-danger px-1"> </span></label>
                                            <div class="row py-1">
                                                <div class="col">
                                                    <input type="number" placeholder="Min" min="0" class="w-100 signup_input rounded pl-2 py-1">
                                                </div>
                                                <div class="col-1 text-center px-0 pt-1">-</div>
                                                <div class="col">
                                                    <input type="number" placeholder="Max" min="0" class="w-100 signup_input rounded pl-2 py-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check pb-3 pl-0 w-100">
                                        <label  class="mb-1 pt-0 sign_fontsize">Annual Salary<span class="text-danger px-1"> </span></label>
                                            <div class="row py-1">
                                                <div class="col">
                                                    <input type="number" placeholder="Min" min="0" class="w-100 signup_input rounded pl-2 py-1">
                                                </div>
                                                <div class="col-1 text-center px-0 pt-1">-</div>
                                                <div class="col text-center">
                                                    <input type="number" placeholder="Max" min="0" class="w-100 signup_input rounded pl-2 py-1">
                                                </div>
                                            </div>
                                        </div>
                                        <select class="form_control form_action rounded pl-3 pr-5 mb-3"
                                            style="height: 35px!important;">
                                            <option Selected Disabled>Multiple offers</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select> <select class="form_control form_action rounded pl-3 pr-5 mb-3"
                                            style="height: 35px!important;">
                                            <option Selected Disabled>Interview Availability</option>
                                            <option>Today</option>
                                            <option>Tomorrow</option>
                                        </select> <select class="form_control form_action rounded pl-3 pr-5 mb-3"
                                            style="height: 35px!important;">
                                            <option Selected Disabled>Education</option>
                                            <option>10th</option>
                                            <option>12th</option>
                                            <option>Graudation</option>
                                            <option>PG</option>
                                            <option>Doctorate</option>
                                        </select> <select class="form_control form_action rounded pl-3 pr-5 mb-3"
                                            style="height: 35px!important;">
                                            <option Selected Disabled>Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select> <select class="form_control form_action rounded pl-3 pr-5 mb-3"
                                            style="height: 35px!important;">
                                            <option Selected Disabled>Job Type</option>
                                            <option>FullTime</option>
                                            <option>Contract</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 box d-block px-0 px-lg-3 mb-1">
                            <button type="submit" class="btn btn_submit w-100 text-light">Apply</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- candidate listing left part -->

            <div class="col-lg-9">
                <div class="candidates_job-dashboard pt-3 px-0">
                    <span class="candidate_title-head">Showing 46 <span class="candidate_text">Candidates</span></span>
                    <a id="filter_show-button" class="filter_icon-algin d-block d-lg-none" href="javascript:void(0);">
                        <img class="filter_img-icon" src="asset/images/Group-1.png">
                    </a>
                </div>
                <div class="job_offers pt-5">
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0">
                    <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 pt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                                <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                                <li class="list-inline-item pr-3">Exp: 3 Years</li>
                                <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                            </ul>
                            <div class="section_2 pb-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                    <li class="list-inline-item terms mb-1">CSS</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-xl-2 align-self-center">
                            <a class="btn btn_style mx-auto mb-3 mb-lg-0" href="javascript:void(0);">View candidate</a>
                        </div> -->
                    </div>
                </div>
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0">
                        <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 pt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                                <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                                <li class="list-inline-item pr-3">Exp: 3 Years</li>
                                <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                            </ul>
                            <div class="section_2 pb-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                    <li class="list-inline-item terms mb-1">CSS</li>
                                    <li class="list-inline-item terms mb-1 space">Bootstrap</li>
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                    <li class="list-inline-item terms mb-1">
                                        <a class="candidate_view-more" href="javascript:void(0);">More +</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-xl-2 align-self-center">
                            <a class="btn btn_style mx-auto mb-3 mb-lg-0" href="javascript:void(0);">View candidate</a>
                        </div> -->
                    </div>
                </div>
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0">
                        <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 mx-0 my-0 pt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                                <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                                <li class="list-inline-item pr-3">Exp: 3 Years</li>
                                <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                            </ul>
                            <div class="section_2 pb-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                    <li class="list-inline-item terms mb-1">CSS</li>
                                    <li class="list-inline-item terms mb-1 space">Bootstrap</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-xl-2 align-self-center">
                            <a class="btn btn_style mx-auto mb-3 mb-lg-0" href="javascript:void(0);">View candidate</a>
                        </div> -->
                    </div>
                </div>
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0">
                        <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 pt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                                <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                                <li class="list-inline-item pr-3">Exp: 3 Years</li>
                                <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                            </ul>
                            <div class="section_2 pb-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-xl-2 align-self-center">
                            <a class="btn btn_style mx-auto mb-3 mb-lg-0" href="javascript:void(0);">View candidate</a>
                        </div> -->
                    </div>
                </div>
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0">
                    <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 pt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                                <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                                <li class="list-inline-item pr-3">Exp: 3 Years</li>
                                <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                            </ul>
                            <div class="section_2 pb-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                    <li class="list-inline-item terms mb-1">CSS</li>
                                    <li class="list-inline-item terms mb-1 space">Bootstrap</li>
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-xl-2 align-self-center">
                            <a class="btn btn_style mx-auto mb-3 mb-lg-0" href="javascript:void(0);">View candidate</a>
                        </div> -->
                    </div>
                </div>
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0">
                    <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 pt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                                <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                                <li class="list-inline-item pr-3">Exp: 3 Years</li>
                                <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                            </ul>
                            <div class="section_2 pb-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                    <li class="list-inline-item terms mb-1">CSS</li>
                                    <li class="list-inline-item terms mb-1 space">Bootstrap</li>
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-xl-2 align-self-center">
                            <a class="btn btn_style mx-auto mb-3 mb-lg-0" href="javascript:void(0);">View candidate</a>
                        </div> -->
                    </div>
                </div>
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0 ">
                    <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 pt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                                <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                                <li class="list-inline-item pr-3">Exp: 3 Years</li>
                                <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                            </ul>
                            <div class="section_2 pb-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                    <li class="list-inline-item terms mb-1">CSS</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-xl-2 align-self-center">
                            <a class="btn btn_style mx-auto mb-3 mb-lg-0" href="javascript:void(0);">View candidate</a>
                        </div> -->
                    </div>
                </div>
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0 ">
                    <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 pt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                                <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                                <li class="list-inline-item pr-3">Exp: 3 Years</li>
                                <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                                <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                            </ul>
                            <div class="section_2 pb-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                    <li class="list-inline-item terms mb-1">CSS</li>
                                    <li class="list-inline-item terms mb-1">Bootstrap</li>
                                    <li class="list-inline-item terms mb-1">PHP</li>
                                    <li class="list-inline-item terms mb-1">HTML</li>
                                    <li class="list-inline-item terms mb-1">
                                        <a class="candidate_view-more" href="javascript:void(0);">More +</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-xl-2 align-self-center">
                            <a class="btn btn_style mx-auto mb-3 mb-lg-0" href="javascript:void(0);">View candidate</a>
                        </div> -->
                    </div>
                </div>
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0">
                        <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                    <div class="col-lg-12 pt-3">
                        <ul class="list-inline">
                            <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                            <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                            <li class="list-inline-item pr-3">Exp: 3 Years</li>
                            <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                            <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                            <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                        </ul>
                        <div class="section_2 pb-0">
                            <ul class="list-inline">
                                <li class="list-inline-item terms mb-1">PHP</li>
                                <li class="list-inline-item terms mb-1">HTML</li>
                                <li class="list-inline-item terms mb-1">CSS</li>
                                <li class="list-inline-item terms mb-1 space">Bootstrap</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-xl-2 align-self-center">
                        <a class="btn btn_style mx-auto mb-3 mb-lg-0" href="javascript:void(0);">View candidate</a>
                    </div> -->
                    </div>
                </div>
                <div class="boxing rounded px-4">
                    <ul class="list-inline pt-3 my-0">
                        <li class="list-inline-item pr-3 font_color">
                            <a href="candidatedetail.php" class="sign_head"><h4>John smith</h4></a>
                        </li>
                    </ul>
                    <ul class="list-inline my-0">
                    <li class="list-inline-item pr-3">
                            <a href="mailto:someone@example.com" class="contact_mail">
                                <i class="fa fa-envelope-o pr-2 text-primary" aria-hidden="true"></i>info@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="tel: +91 987654329" class="contact_phone">
                                <i class="fa fa-phone text-primary pr-2" aria-hidden="true"></i> +91 9876543210
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <img class="pb-1" src="asset/images/location.svg"/>
                            &nbsp Bangalore
                        </li>
                    </ul>
                    <div class="row">
                    <div class="col-lg-12 pt-3">
                        <ul class="list-inline">
                            <li class="list-inline-item pr-3 font_color">PHP Developer</li>
                            <li class="list-inline-item pr-3">Latest Company: Job Portal</li>
                            <li class="list-inline-item pr-3">Exp: 3 Years</li>
                            <li class="list-inline-item pr-3">CTC: 1.20 LPA</li>
                            <li class="list-inline-item pr-3">ECTC: 1.20 LPA</li>
                            <li class="list-inline-item pr-5">Notice Period: 7 Days</li>
                        </ul>
                        <div class="section_2 pb-0">
                            <ul class="list-inline">
                                <li class="list-inline-item terms mb-1">PHP</li>
                                <li class="list-inline-item terms mb-1">HTML</li>
                                <li class="list-inline-item terms mb-1">CSS</li>
                                <li class="list-inline-item terms mb-1 space">Bootstrap</li>
                                <li class="list-inline-item terms mb-1">PHP</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- <div class="text-center align-self-center py-4 py-sm-5">
                    <a class="btn btn_style_1 mx-auto" href="javascript:void(0);">VIEW ALL CANDIDATES</a>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Footer section -->

<?php include 'inc/footer.php' ?>