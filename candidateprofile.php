<?php include 'inc/header.php' ?>

<!-- candidate dashboard Start -->
<section class="section_canddashboard pt-5">
    <div class="container">
        <div class="row py-2">
            <div class="col-md-12 ">
                <div class="dash_box-right_profile px-5 py-4">
                    <div class="row center_profile ">
                        <div class="col-md-2 pr-3 pr-lg-0">
                           <div class="dash_pic">
                                <a href="javascript:void(0);"><img src="asset/images/dashboardpic.png" class="img-fluid  canddashboard-userpic"></a>
                           </div>
                        </div>
                        <div class="col-md-10 pt-3 pt-md-0 pl-lg-0">
                            <div class="d-sm-inline">
                                <h2 class="text-dark dash_box-texthead mb-2">John Smith<span><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Verified"><img class="mb-3 img-fluid pl-2" src="asset/images/greentick.png"></a></span></h2>
                                <!-- <img class="pt-3 green_tick pt-lg-0 d-none d-sm-block" src="asset/images/greentick.png"> -->
                                <!-- <img class=" d-block d-sm-none pt-3 greenticksm pt-lg-0" src="asset/images/greenticksm.png"> -->
                            </div>
                            <div class="d-sm-inline"><a href="mailto:someone@example.com"  class="text-dark  pr-sm-3 "><i class="fa fa-envelope-o pr-2 text-dark" aria-hidden="true"></i>abc@gmail.com</a></div>
                            <div class="d-sm-inline"><a href="tel:+4733378901" class="text-dark  pr-sm-3"><i class="fa fa-phone text-dark pr-2" aria-hidden="true"></i>phone Number</a></div>
                            <div class="d-sm-inline"><a class="text-dark"><i class="fa fa-map-marker text-dark pr-2" aria-hidden="true"></i>Bangalore</a></div>
                            <div class="d-md-inline"><span class="text-dark mb-0 pt-1  "><i class="fa fa-briefcase text-dark pr-2 ml-lg-3" aria-hidden="true"></i>6y 0m</span></div>

                            <!-- <div class="d-sm-inline text-white">Highest Education :</div> -->
                           <div class="text-dark py-1"> <span class="text-dark font-weight-bold">Highest Education : </span>It is a long established fact reader </div>
                           <div class="text-dark"><span class="text-dark notice_dash">Notice Period : </span> 1 Month </div>
                        </div>
                        <!-- <div class="dash_edit">
                             <a href="javascript:void(0)"><i class="fa fa-pencil px-0 text-white" aria-hidden="true"></i></a>
                        </div> -->
                    </div>
                    <div class="row pt-4 center_profile">
                        <div class="col-lg-12">
                            <label class="text-dark">Profile Completeness</label>
                            <div class="progress">
                                <div class="progress-bar color_bar_profile" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col text-right">
            <button type="submit" class="py-2 signin_button rounded px-3 mr-3" > Download Resume</button>
               <button type="submit" class="py-2 signin_button rounded px-3 mr-3" data-toggle="modal" data-target="#emailmodal">Send Email</button>
               <button type="submit" class="py-2 signup_button rounded px-3" > <a class="" href="javascript:void(0);"><i class="fa fa-heart text-danger" aria-hidden="true"></i></a> Favorite</button>
            </div>
          
                           
                     
        </div>
        <div class="row pb-5 pt-4">
            <div class="col-md-4 col-lg-3  col-12">
                <div class="sticky_profile">
                    <div class="myScrollspys mb-3 box py-3 text-center rounded profile_myprof">
                        <h1 class="myprofile_font mb-0">My Profile</h1>
                    </div>  
                    <div class="">
                        <nav class="myScrollspys box py-3 px-lg-1 px-xl-3 rounded profile_nav pro_box-stick stick_top" id="myScrollspy">
                            <ul class="nav-pills mb-0 ul-candiatate scroll_profile">
                                <li class="nav-item sticky_font ">
                                    <a class="nav-link active" href="#account_info">Account Information</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#keyskills">Key Skills</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#Noticeperiod_profile">Notice Period Status</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#Interview">Interview Availability</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#competing_offers">Offers In Hand</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#compensation">Compensation</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#profile_summary">Professional Summary</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#it_skills">IT Skills</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#it_projects">IT Projects</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#Education">Education</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#Technical_Certifications">Other Certifications</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#gaps">Employment Gaps</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#employment">Employment Preferences</a>
                                </li>
                                <li class="nav-item sticky_font">
                                    <a class="nav-link" href="#basic_info">Personal Details</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-9 col-12">

                


                <div class="row">
                    <div id="account_info" class="col-md-12 col-12 pt-3 pt-sm-0 profile_head rounded">
                        <div  class="myprofile_font pb-3">Account Information</div>
                    </div>
                    <!-- <div class="col-md-6 col-6 d-flex py-3  pr-3 justify-content-end px-0 ">
                        <button type="submit" class="py-2 px-2 mr-3 save_pro rounded signin_button">Save changes</button>
                        <button type="submit" title="Save" class="py-2 px-3 mr-3 rounded signup_button  d-sm-none"><i class="fa fa-floppy-o pro_smicon d-block d-sm-none" aria-hidden="true"></i></button>
                        <button type="submit" class="py-2 px-2 rounded signup_button save_pro ">Edit<i class="fa fa-pencil pl-2 pro_smicon" aria-hidden="true"></i></button>
                        <button type="submit" title="Edit" class="py-2 px-3 rounded signup_button d-sm-none "><i class="fa fa-pencil  pro_smicon d-sm-none " aria-hidden="true"></i></button>
                    </div> -->
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="mb-2  sign_fontsize">Email : <span>johnsmith@gmail.com</span></label>
                                    <img class="" style="width:25px" src="asset/images/verified.png" data-toggle="tooltip" title="Verified">
                                </input>
                            </div>
                            <div class="col-lg-6">
                                <label class="mb-2 pt-3 pt-lg-0 sign_fontsize">Phone Number : <span>+91 9978908767</span></label>
                                    <img class=""  style="width:25px" src="asset/images/verified.png" data-toggle="tooltip" title="Verified">
                                </input>
                            </div>
                        </div>
                    </form>
                </div>
                

                         <!-- skills sticky  -->
                         <div  id="keyskills" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Key Skills</div>
                </div>    
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded">
                    <div class="">
                        <ul class="list-inline my-0">
                            <li class="list-inline-item terms mb-1">front end</li>
                            <li class="list-inline-item terms mb-1">back end</li>
                            <li class="list-inline-item terms mb-1">flutter</li>
                            <li class="list-inline-item terms mb-1 space">full stack developer</li>
                            <li class="list-inline-item terms mb-1 space">full stack developer</li>
                        </ul>
                    </div>
                </div>

                      


                                <div  id="Noticeperiod_profile" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Notice Period Status<a href="javascript:void(0)" ><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <form>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize">Notice Period Verification Status : <span> Verified</span><span class="text-danger px-1"> </span></label>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Notice Period Status : <span> Servcing Notice Period</span><span class="text-danger px-1"> </span></label>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Notice Period : <span>7- 15 Days </span><span class="text-danger px-1"> </span></label>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label  class="mb-2 pt-3 sign_fontsize">Late Working Date : <span> 2021-11-22</span><span class="text-danger px-1"> </span></label>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-lg-12">
                                <label  class="mb-2 pt-3 sign_fontsize">Notice Period is Buyable : <span>Praesent sapien massa</span><span class="text-danger px-1"> </span></label>
                            </div>
                        </div>
                    </form>
                </div>
                                    <!-- Interview Availability -->
                <div  id="Interview" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Interview Availability</div>
                </div>
                <div  class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <div class="row">
                        <div class="col-lg-6">
                            <label  class="mb-2  sign_fontsize">Availability of Video Interview Date : <span> 2021-11-22</span><span class="text-danger px-1"> </span></label>
                        </div>
                        <div class="col-lg-6">
                            <label  class="mb-2 pt-3 pt-lg-0 sign_fontsize">Availability of Video Interview Time : <span>22:53 </span><span class="text-danger px-1"> </span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label  class="mb-2 pt-3 sign_fontsize">Availability of Interview Date : <span>2021-11-25 </span><span class="text-danger px-1"> </span></label>
                        </div>
                        <div class="col-lg-6">
                            <label  class="mb-2 pt-3 sign_fontsize">Availability of Interview Time : <span>10:00 </span><span class="text-danger px-1"> </span></label>
                        </div>
                    </div>
                      
                </div>
                <div  id="competing_offers" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Offers In Hand<a href="javascript:void(0)" ><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <form>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize">Are you holding employment offers? : <span>Yes </span><span class="text-danger px-1"> </span></label>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Please mention the total offers you are holding : <span>2 </span><span class="text-danger px-1"> </span></label>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Highest CTC Offered : <span>3.4 LPA </span><span class="text-danger px-1"> </span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Reason for exploring opportunities despite having offer/s<span class="text-danger px-1"> </span></label>
                                <p class=" py-1">Pellentesque in ipsum id orci porta dapibus Curabitur arcu erat accumsan id imperdiet id orci porta dapibus Curabitur arcu erat accumsan.</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div  id="compensation" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Compensation</div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <form>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize">Current Total CTC (Fixed + Variable + Bonus + Incentives +Any Other Benefits) : <span>4 Lacs </span><span class="text-danger px-1"> </span></label>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Fixed CTC : <span>5 Lacs </span><span class="text-danger px-1"> </span></label>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Variable CTC (Incentives/Bonus) : <span>5 Lacs </span><span class="text-danger px-1"> </span></label>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Expected CTC : <span>6 Lacs </span><span class="text-danger px-1"> </span></label>
                                
                            </div>
                        </div>
                    </form>
                </div>

                <!-- city and  job -->


                <!-- <div  id="cityjob_profile" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">City & Job</div>
                </div> -->
                <!-- <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">         
                    <form>
                    <div class="row ">
                            <div class="col-lg-6">
                                <label  class="mb-2  sign_fontsize">Preffered City<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 pt-lg-0 sign_fontsize">Preffered Location in City<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current CTC<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Excepted CTC<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current Company<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                               
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current Industry<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current Desigination<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current Reason<span class="text-danger px-1"> </span></label>
                                <input type="text"  class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current Responsibilites<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current Salary Revision<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Previous Company<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Previous Industry<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Previous Desigination<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Previous Reason<span class="text-danger px-1"> </span></label>
                                <input type="text"  class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Previous Responsibilites<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Previous Salary Revision<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Other Offers ?<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize click_show signup_input rounded">
                                    <option >Please select</option>
                                    <option  value="yes">Yes</option>
                                    <option  value="no">No</option>
                                </select>
                            </div>
                            <div class="col-lg-6 want">
                                <label  class="mb-2 pt-3 sign_fontsize">No Offers<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  want ">
                                <label  class="mb-2 pt-3 sign_fontsize">CTC Offer 1<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6 want">
                                <label  class="mb-2 pt-3 sign_fontsize">Date Of Join 1<span class="text-danger px-1"> </span></label>
                                <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  want">
                                <label  class="mb-2 pt-3 sign_fontsize">Job Location 1<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6  want">
                                <label  class="mb-2 pt-3 sign_fontsize">CTC Offer 2<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  want">
                                <label  class="mb-2 pt-3 sign_fontsize">Date Of Join 2<span class="text-danger px-1"> </span></label>
                                <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                            <div class="col-lg-6  want">
                                <label  class="mb-2 pt-3 sign_fontsize">Job Location 2<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  want">
                                <label  class="mb-2 pt-3 sign_fontsize">CTC Offer 3<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6  want">
                            <label  class="mb-2 pt-3 sign_fontsize">Date Of Join 3<span class="text-danger px-1"> </span></label>
                                <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-lg-6  want">
                                <label  class="mb-2 pt-3 sign_fontsize">Job Location 3<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                    </form>
                </div> -->

                 <!-- carrer Profile -->


                <!-- <div  id="carrer_profile" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Carrer Profile</div>
                </div>     -->
                <!-- <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">         
                    <form>
                        <div class="row ">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 pt-lg-0 sign_fontsize">Shifts<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Willing to work in shifts</option>
                                    <option>Indian shift</option>
                                    <option>Rotational shift</option>
                                    <option>US shift</option>
                                    <option>UK shift</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 pt-lg-0 sign_fontsize">Work Type<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Contract</option>
                                    <option>Freelance</option>
                                    <option>Permanent</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Has Candidate worked On Contract<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                               
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Case of Contract<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Duration of Contract<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Company Contact<span class="text-danger px-1"> </span></label>
                                <input type="text" placeholder="Enter Company name" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                            <label  class="mb-2 pt-3 sign_fontsize">Pay Contact<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Can the candidate WFH ?<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select One</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Telephonic Interview Date From<span class="text-danger px-1"> </span></label>
                                <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Telephonic Interview Date To<span class="text-danger px-1"> </span></label>
                                <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Telephonic Interview Time From<span class="text-danger px-1"> </span></label>
                                <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Telephonic Interview Time To<span class="text-danger px-1"> </span></label>
                                <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Video Interview Time From<span class="text-danger px-1"> </span></label>
                                <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Video Interview Time To<span class="text-danger px-1"> </span></label>
                                <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label  class="mb-2 pt-3 sign_fontsize">Night Interview ?<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select One</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Night Telephonic Interview Date From<span class="text-danger px-1"> </span></label>
                                <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Night Telephonic Interview Date To<span class="text-danger px-1"> </span></label>
                                <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Night Telephonic Interview Time From<span class="text-danger px-1"> </span></label>
                                <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Night Telephonic Interview Time To<span class="text-danger px-1"> </span></label>
                                <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Night Video Interview Time From<span class="text-danger px-1"> </span></label>
                                <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Night Video Interview Time To<span class="text-danger px-1"> </span></label>
                                <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Name 1<span class="text-danger px-1">* </span></label>
                                <input type="text" placeholder="Enter your email" requried class="w-100 signup_input px-3 py-2 rounded">
                            </div>
                            <div class="col-lg-6">
                                <label class="mb-2 pt-3 sign_fontsize">Phone number 1<span class="text-danger px-1">* </span></label>
                                <input type="tel" placeholder="Enter your number" requried class="w-100 signup_input px-3 py-2 rounded" maxlength="15" minlength="7">
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Email 1<span class="text-danger px-1">* </span></label>
                                <input type="email" placeholder="Enter your email" requried class="w-100 signup_input px-3 py-2 rounded">
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Name 2<span class="text-danger px-1"> </span></label>
                                <input type="email" placeholder="Enter your email"  class="w-100 signup_input px-3 py-2 rounded">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Phone Number 2<span class="text-danger px-1"> </span></label>
                                <input type="text" placeholder="Enter your email"  class="w-100 signup_input px-3 py-2 rounded">
                            </div>
                            <div class="col-lg-6">
                                <label class="mb-2 pt-3 sign_fontsize">Email 2<span class="text-danger px-1"></span></label>
                                <input type="tel" placeholder="Enter your number" d class="w-100 signup_input px-3 py-2 rounded" maxlength="15" minlength="7">
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Pricing Type<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Weekly</option>
                                    <option>Monthly</option>
                                    <option>Yearly</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Pricing Details<span class="text-danger px-1"> </span></label>
                                <input type="text" placeholder="Enter your email" class="w-100 signup_input px-3 py-2 rounded">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Visa Country<span class="text-danger px-1"> </span></label>
                                <input type="text" placeholder="Enter your email" class="w-100 signup_input px-3 py-2 rounded">
                            </div>
                            <div class="col-lg-6">
                                <label class="mb-2 pt-3 sign_fontsize">Visa Validity<span class="text-danger px-1"></span></label>
                                <input type="date" placeholder="Enter your number" class="w-100 signup_input px-3 py-2 rounded  sign_fontsize" maxlength="15" minlength="7">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Willing to WFO<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>YES</option>
                                    <option>NO</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div> -->




                                     <!-- profile summary starts -->
                <div  id="profile_summary" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Professional Summary</div>
                </div>    
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <form>
                    <div class="row">
                            <div class="col-12">
                            <label  class="mb-2 pt-2 sign_fontsize">Profile Summary<span class="text-danger px-1"> </span></label>
                                <p type="text" class="w-100  px-3 py-2" >Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-2 sign_fontsize">Total Experience : <span>2 Years </span><span class="text-danger px-1"> </span></label>
                                
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-lg-3"> 3 months<span class="text-danger px-1 my-0"></span></label>
                                
                            </div>
                        </div>
                    </form>
                    <div class="pt-3">
                        <h6 class="sign_head">Nexevo</h6>
                        <p class="my-0 sign_fontsize"><span></span>Front End developer</p>
                        <p class="my-0 sign_fontsize"><span>Type : </span>Full time</p>
                        <p class="my-0 sign_fontsize"><span>Responsibilites : </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout </p>
                        <p class="my-0 sign_fontsize"><span>Project Details : </span>Long established fact that a reader will be distracted by the readable</p>
                        <p class="my-0 sign_fontsize"><span>Reason : </span>To Learn more things and explore more </p>
                        <p class="my-0 sign_fontsize"><span>CTC When Joined : </span>4.3 LPA</p>
                        <p class="my-0 sign_fontsize"><span>CTC When Left : </span>5.6 LPA</p>


                    </div>
                    <div class="pt-3">
                        <h6 class="sign_head">Tek Systems</h6>
                        <p class="my-0 sign_fontsize"><span></span>Front End developer</p>
                        <p class="my-0 sign_fontsize"><span>Type : </span> Full time</p>
                        <p class="my-0 sign_fontsize"><span>Responsibilites : </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                        <p class="my-0 sign_fontsize"><span>Projects Handled : </span> 03 </p>
                        <p class="my-0 sign_fontsize"><span>Reason : </span>To Learn more things and explore more </p>
                        <p class="my-0 sign_fontsize"><span>CTC When Joined : </span>2.5 LPA</p>
                        <p class="my-0 sign_fontsize"><span>CTC When Left : </span>3.3 LPA</p>

                    </div>
                    
                   
                </div>   

                   



                <!-- IT Skills -->


                <div  id="it_skills" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">IT Skills</div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 pt-sm-5 pb-sm-4 rounded"> 
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th class="pt-0">Skills</th>
                                <th class="pt-0">Version</th>
                                <th class="experience_skill_1 pt-0">Last used</th>
                                <th class="experience_skill pt-0">No.of Years of Experience</th>
                                
                            </thead>
                            <tr>
                                <td class="pb-0">Bootstrap</td>
                                <td class="pb-0">v-4.0</td>
                                <td class="pb-0">2021</td>
                                <td class="pb-0">3 years</td>
                            </tr>
                        </table>
                    </div>
                 
                </div>
                  





                    
                       <!-- project sticky -->
                
                <div  id="it_projects" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">IT Projects </div>
                </div>    
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded">
                    <div class="">
                        <h6 class="sign_head">job portal website</h6>
                        <p class="my-0 sign_fontsize">Front End developer</p>
                        <p class="my-0 sign_fontsize">2 Months</p>
                        <p class="my-0 sign_fontsize">HTML5, CSS, BootStrap4, JQuery</p>

                    </div>
                </div>
                   

                        <!-- Education -->

                <div  id="Education" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Education</div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded"> 
                    <div class="">
                        <h6 class="sign_head">Graduation - Software Engineering</h6>
                        <p class="my-0 sign_fontsize">SRM University</p>
                        <p class="my-0 sign_fontsize">2020 (Full Time)</p>
                    </div>
                </div>
                
                   
                    <!-- certificates -->

                <div  id="Technical_Certifications" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Other Certifications</div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded"> 
                    <div class="row ">
                        <div class="col-6">
                            <!-- <h5 class="sign_head">Certifications</h5> -->
                            <div class="">
                                <h6 class="sign_head">Front end developer</h6>
                                <p class="my-0 sign_fontsize">Google</p>
                                <p class="my-0 sign_fontsize">2020 jan</p>
                            </div>
                            <div class="">
                                <h6 class="sign_head">Android developer</h6>
                                <p class="my-0 sign_fontsize">Tech Systems</p>
                                <p class="my-0 sign_fontsize">2019 jan</p>
                            </div>
                        </div>
                        <!-- <div class="col-6 text-right"> -->
                  
                        <!-- </div> -->
                    </div> 

                </div>
                  

                     <!-- gaps -->
                <div  id="gaps" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Employment Gaps</div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded">
                    <div class="col-">
                            <div class="">
                                <p class="my-0 sign_head">Jan 2019 - Jun 2020</p>
                                <p class="my-0 sign_fontsize">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text Ipsum as their default model text </p>
                            </div>
                        </div>
                    
                </div>



                




                    <!-- employment sticky -->

                <div  id="employment" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Employment Preferences</div>
                </div>    
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                        <form>
                            <div class="row ">
                                <div class="col-lg-6">
                                    <label  class="mb-2 pt-3 pt-lg-0 sign_fontsize">Work Type : <span>Contract </span><span class="text-danger px-1"> </span></label>
                                    
                                </div>
                                <div class="col-lg-6">
                                    <label  class="mb-2 pt-3 pt-lg-0 sign_fontsize">Shifts : <span>US shift </span><span class="text-danger px-1"> </span></label>
                                    
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Have You Worked on Contract ? : <span>NO </span><span class="text-danger px-1"></span></label>
                                    
                                </div>
                                <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Rate/Month in Case of Contract opportunities : <span> January</span><span class="text-danger px-1"></span></label>
                                    <!-- <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                        <option>Select One</option>
                                        <option>YES</option>
                                        <option>NO</option>
                                    </select> -->
                                </div>
                            </div>
                    </form>
                    

                    <!-- <div class="">
                        <h6 class="sign_head">Front end developer<a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></h6>
                        <p class="my-0 sign_fontsize">Nexevo Technologies</p>
                        <p class="my-0 sign_fontsize">March 2019 to june 2020 (1 year 3 months)</p>
                        <p class="my-0 sign_fontsize"> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'</p>
                    </div> -->
                </div>
                      


                <!-- personal details -->
                <div  id="basic_info" class="col-lg-6 px-0  pb-3 pt-4 mt-0 mt-md-3 profile_head  rounded">
                    <div class="myprofile_font">Personal Details</div>
                    
                </div>
                <div  class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <form>
                        <div class="row ">
                            <div class="col-lg-4 ">
                                <label  class="mb-2 pt-lg-0   sign_fontsize">First Name : <span>John</span><span class="text-danger px-1">* </span></label>
                            </div>
                            <div class="col-lg-4">
                                <label  class="mb-2  pt-3 pt-lg-0 sign_fontsize">Middle name : <span>Smith</span><span class="text-danger px-1">* </span></label>
                            </div>
                            <div class="col-lg-4">
                                <label  class="mb-2  pt-3 pt-lg-0  sign_fontsize">Last name : <span>John</span><span class="text-danger px-1">* </span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Industry : <span>IT</span><span class="text-danger px-1">* </span></label>
                               
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Gender : <span>Male</span><span class="text-danger px-1">* </span></label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Date Of Birth : <span>1994-04-09</span><span class="text-danger px-1">*</span></label>
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Marital Status : <span>Single</span><span class="text-danger px-1">*</span></label>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current City : <span>India</span><span class="text-danger px-1">* </span></label>
                                <!-- <input type="text" placeholder="Enter your city" requried class="w-100 signup_input rounded px-3 py-2"> -->
                                
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current Location in city : <span>Bangalore</span><span class="text-danger px-1">* </span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Physically Challenged : <span>YES</span><span class="text-danger px-1"></span></label>
                                
                            </div>
                             <!-- <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Upload Resume : <span></span><span class="text-danger px-1">* </span></label><br>
                                <form action="/action_page.php">
                                    <input type="file" id="myFile" name="filename">
                                </form>
                            </div> -->
                        </div> 
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <label  class="mb-2 pt-3 sign_fontsize">Linked In Profile Link<span class="text-danger px-1"></span></label>
                                <input type="url"  requried class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-4">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item">Languages</li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item">Read</li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item ">Write</li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item">Speak</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="mt-2  mb-0">
                        <div class="row">
                            <div class="col-4">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item">English</li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item pl-1"><img src="asset/images/languagetick.png" ></li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item pl-1"><img src="asset/images/languagetick.png"></li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item pl-1"><img src="asset/images/languagetick.png"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            
                            <!-- <div class="col-lg-12 pt-4 text-center">
                                <input class="signin_button rounded px-3 py-1" type="submit">
                             </div> -->
                        </div>

                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- modal -->
<div class="container">
            <!-- modal -->
    <div class="modal" id="emailmodal">
        <div class="modal-dialog">
            <div class="modal-content mx-auto py-2">
                <!-- header -->
                <div class="modal-header">
                    <textarea class="form-control w-75" placeholder="Subject" aria-label="With textarea" row="4"></textarea>
                    <p type="button" class="info" data-dismiss="modal"><img class="float-right modal_close-icon" src="asset/images/cancel.png"></p>
                </div>
                <!-- body -->
                <div class="modal-body">
                    <textarea class="form-control" placeholder="Message" aria-label="With textarea" row="10"></textarea>
                </div>
                <div class="modal-footer justify-content-end px-3">
                        <button type="button" class="btn btn-secondary py-2 mr-3"  data-dismiss="modal">Cancel</button>
                        <button type="button" class="signin_button px-4 py-2 rounded">Send</button>
                </div>
                        
            </div>
        </div>
    </div>  
</div>
<!-- modal end -->


<?php include 'inc/footer.php' ?>