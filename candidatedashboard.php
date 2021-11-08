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
                            <div class="d-sm-inline"><a class="text-dark"><i class="fa fa-map-marker text-dark pr-2" aria-hidden="true"></i>Location</a></div>
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
        <div class="row py-5">
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
                                <label class="mb-2  sign_fontsize">Email</label>
                                <input type="email" placeholder="Enter your email" class="w-100 signup_input pl-3 pr-5 py-2 rounded">
                                    <a href="email.php" class="email_verify">verify</a>
                                    <!-- <img class="verify_icon" src="asset/images/verified.png"> -->
                                </input>
                            </div>
                            <div class="col-lg-6">
                                <label class="mb-2 pt-3 pt-lg-0 sign_fontsize">Phone Number</label>
                                <input type="tel" placeholder="Enter your phonenumber" class="w-100 signup_input px-3 py-2 rounded" maxlength="15" minlength="7">
                                    <a href="mobile.php" class="email_verify pt-3 pt-lg-0">verify</a>
                                    <!-- <img class="verify_icon pt-3 pt-lg-0" src="asset/images/verified.png"> -->
                                </input>
                            </div>
                        </div>
                    </form>
                </div>
                

                         <!-- skills sticky  -->
                         <div  id="keyskills" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Key Skills<a href="javascript:void(0)" ><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></div>
                </div>    
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded">
                    <a href="#" title="Add Skills" class="project_add" data-toggle="modal" data-target="#keyskils_add">ADD</a>
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

                        <!-- skils modal START -->

                        <div class="container">
                            <!-- modal -->
                    <div class="modal" id="keyskils_add">
                        <div class="modal-dialog">
                            <div class="modal-content  mx-auto py-2">
                                    <!-- header -->
                                <div class="modal-header pb-0">
                                    <h4 class="modal-title sign_head">Add Skills</h4> 
                                    <p type="button" class="info " data-dismiss="modal"><img class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                                </div>
                                <!-- body -->
                                <div class="modal-body">
                                    <form>
                                        <input type="text" id="inputTag" class="form_action" value="" placeholder="Choose by skils" data-role="tagsinput">
                                    </form>
                                </div>
                                <!-- footer -->
                                <div class="modal-footer">
                                <div class="col-12 text-right pr-0">
                                            <button type="button" class="btn btn btn-secondary py-1 mr-0 mr-sm-2" data-dismiss="modal">cancel</button>
                                            <button type="button" class="signin_button  px-3 py-1 rounded" data-toggle="modal" data-target="#create" >Save</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                                <!-- skills modals ENDS -->
               


                                <div  id="Noticeperiod_profile" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Notice Period Status<a href="javascript:void(0)" ><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <form>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize">Notice Period Verification Status<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select Option</option>
                                    <option>Verified</option>
                                    <option>Pending Verification</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Notice Period Status<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select Option</option>
                                    <option>Completed Notice Period</option>
                                    <option>Servcing Notice Period</option>
                                    <option>Buyable Notice Period</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Notice Period<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select Option</option>
                                    <option>0- 7 Days</option>
                                    <option>7- 15 Days</option>
                                    <option>Servcing Notice Period</option>
                                    <option>Buyable Notice Period</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label  class="mb-2 pt-3 sign_fontsize">Late Working Date<span class="text-danger px-1"> </span></label>
                                <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-lg-12">
                                <label  class="mb-2 pt-3 sign_fontsize">Notice Period is Buyable<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                    </form>
                </div>
                                    <!-- Interview Availability -->
                <div  id="Interview" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Interview Availability<a href="javascript:void(0)" ><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></div>
                </div>
                <div  class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <div class="row">
                        <div class="col-lg-6">
                            <label  class="mb-2  sign_fontsize">Availability of Video Interview Date<span class="text-danger px-1"> </span></label>
                            <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                        </div>
                        <div class="col-lg-6">
                            <label  class="mb-2 pt-3 pt-lg-0 sign_fontsize">Availability of Video Interview Time<span class="text-danger px-1"> </span></label>
                            <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label  class="mb-2 pt-3 sign_fontsize">Availability of Interview Date<span class="text-danger px-1"> </span></label>
                            <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                        </div>
                        <div class="col-lg-6">
                            <label  class="mb-2 pt-3 sign_fontsize">Availability of Interview Time<span class="text-danger px-1"> </span></label>
                            <input type="time" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
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
                                <label  class="mb-2 sign_fontsize">Are you holding employment offers?<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select Option</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Please mention the total offers you are holding<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select Option</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Highest CTC Offered<span class="text-danger px-1"> </span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Reason for exploring opportunities despite having offer/s<span class="text-danger px-1"> </span></label>
                                <textarea class="w-100 signup_input rounded px-3 py-2"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div  id="compensation" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Compensation<a href="javascript:void(0)" ><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <form>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize">Current Total CTC (Fixed + Variable + Bonus + Incentives +Any Other Benefits)<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>0 Lac</option>
                                    <option>1 Lac</option>
                                    <option>2 Lacs</option>
                                    <option>3 Lacs</option>
                                    <option>4 Lacs</option>
                                    <option>5 Lacs</option>
                                    <option>6 Lacs</option>
                                    <option>7 Lacs</option>
                                    <option>8 Lacs</option>
                                    <option>9 Lacs</option>
                                    <option>10 Lacs</option>
                                    <option>11 Lacs</option>
                                    <option>12 Lacs</option>
                                    <option>13 Lacs</option>
                                    <option>14 Lacs</option>
                                    <option>15 Lacs</option>
                                    <option>16 Lacs</option>
                                    <option>17 Lacs</option>
                                    <option>18 Lacs</option>
                                    <option>19 Lacs</option>
                                    <option>20 Lacs</option>
                                    <option>21 Lacs</option>
                                    <option>22 Lacs</option>
                                    <option>23 Lacs</option>
                                    <option>24 Lacs</option>
                                    <option>25 Lacs</option>
                                    <option>26 Lacs</option>
                                    <option>27 Lacs</option>
                                    <option>28 Lacs</option>
                                    <option>29 Lacs</option>
                                    <option>30+ Lacs</option>
                                    <option>40+ Lacs</option>
                                    <option>50+ Lacs</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Fixed CTC<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>0 Lac</option>
                                    <option>1 Lac</option>
                                    <option>2 Lacs</option>
                                    <option>3 Lacs</option>
                                    <option>4 Lacs</option>
                                    <option>5 Lacs</option>
                                    <option>6 Lacs</option>
                                    <option>7 Lacs</option>
                                    <option>8 Lacs</option>
                                    <option>9 Lacs</option>
                                    <option>10 Lacs</option>
                                    <option>11 Lacs</option>
                                    <option>12 Lacs</option>
                                    <option>13 Lacs</option>
                                    <option>14 Lacs</option>
                                    <option>15 Lacs</option>
                                    <option>16 Lacs</option>
                                    <option>17 Lacs</option>
                                    <option>18 Lacs</option>
                                    <option>19 Lacs</option>
                                    <option>20 Lacs</option>
                                    <option>21 Lacs</option>
                                    <option>22 Lacs</option>
                                    <option>23 Lacs</option>
                                    <option>24 Lacs</option>
                                    <option>25 Lacs</option>
                                    <option>26 Lacs</option>
                                    <option>27 Lacs</option>
                                    <option>28 Lacs</option>
                                    <option>29 Lacs</option>
                                    <option>30+ Lacs</option>
                                    <option>40+ Lacs</option>
                                    <option>50+ Lacs</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Variable CTC (Incentives/Bonus)<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>0 Lac</option>
                                    <option>1 Lac</option>
                                    <option>2 Lacs</option>
                                    <option>3 Lacs</option>
                                    <option>4 Lacs</option>
                                    <option>5 Lacs</option>
                                    <option>6 Lacs</option>
                                    <option>7 Lacs</option>
                                    <option>8 Lacs</option>
                                    <option>9 Lacs</option>
                                    <option>10 Lacs</option>
                                    <option>11 Lacs</option>
                                    <option>12 Lacs</option>
                                    <option>13 Lacs</option>
                                    <option>14 Lacs</option>
                                    <option>15 Lacs</option>
                                    <option>16 Lacs</option>
                                    <option>17 Lacs</option>
                                    <option>18 Lacs</option>
                                    <option>19 Lacs</option>
                                    <option>20 Lacs</option>
                                    <option>21 Lacs</option>
                                    <option>22 Lacs</option>
                                    <option>23 Lacs</option>
                                    <option>24 Lacs</option>
                                    <option>25 Lacs</option>
                                    <option>26 Lacs</option>
                                    <option>27 Lacs</option>
                                    <option>28 Lacs</option>
                                    <option>29 Lacs</option>
                                    <option>30+ Lacs</option>
                                    <option>40+ Lacs</option>
                                    <option>50+ Lacs</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg position_lit">
                                <label  class="mb-2 sign_fontsize pt-3">Expected CTC<span class="text-danger px-1"> </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>0 Lac</option>
                                    <option>1 Lac</option>
                                    <option>2 Lacs</option>
                                    <option>3 Lacs</option>
                                    <option>4 Lacs</option>
                                    <option>5 Lacs</option>
                                    <option>6 Lacs</option>
                                    <option>7 Lacs</option>
                                    <option>8 Lacs</option>
                                    <option>9 Lacs</option>
                                    <option>10 Lacs</option>
                                    <option>11 Lacs</option>
                                    <option>12 Lacs</option>
                                    <option>13 Lacs</option>
                                    <option>14 Lacs</option>
                                    <option>15 Lacs</option>
                                    <option>16 Lacs</option>
                                    <option>17 Lacs</option>
                                    <option>18 Lacs</option>
                                    <option>19 Lacs</option>
                                    <option>20 Lacs</option>
                                    <option>21 Lacs</option>
                                    <option>22 Lacs</option>
                                    <option>23 Lacs</option>
                                    <option>24 Lacs</option>
                                    <option>25 Lacs</option>
                                    <option>26 Lacs</option>
                                    <option>27 Lacs</option>
                                    <option>28 Lacs</option>
                                    <option>29 Lacs</option>
                                    <option>30+ Lacs</option>
                                    <option>40+ Lacs</option>
                                    <option>50+ Lacs</option>
                                </select>
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
                            <label  class="mb-2 pt-2 sign_fontsize">Profile Summary<span class="text-danger px-1"> *</span></label>
                                <textarea type="text" class="w-100 signup_input rounded px-3 py-2"  placeholder="Describe Your Self" maxlenght="1000"  ></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-2 sign_fontsize">Total Experience<span class="text-danger px-1"> *</span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select Year</option>
                                    <option>0 Year</option>
                                    <option>1 Year</option>
                                    <option>2 Years</option>
                                    <option>3 Years</option>
                                    <option>4 Years</option>
                                    <option>5 Years</option>
                                    <option>6 Years</option>
                                    <option>7 Years</option>
                                    <option>8 Years</option>
                                    <option>9 Years</option>
                                    <option>10+ Years</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-lg-3 sign_fontsize"><span class="text-danger px-1 my-0"></span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded modal_emplo" placeholder="month">
                                    <option>Months</option>
                                    <option>1 month</option>
                                    <option>2 months</option>
                                    <option>3 months</option>
                                    <option>4 months</option>
                                    <option>5 months</option>
                                    <option>6 months</option>
                                    <option>7 months</option>
                                    <option>8 months</option>
                                    <option>9 months</option>
                                    <option>11 Months</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="pt-3">
                        <h6 class="sign_head">Nexevo<a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></h6>
                        <p class="my-0 sign_fontsize"><span></span>Front End developer</p>
                        <p class="my-0 sign_fontsize"><span>Type : </span>Full time</p>
                        <p class="my-0 sign_fontsize"><span>Responsibilites : </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout </p>
                        <p class="my-0 sign_fontsize"><span>Project Details : </span>Long established fact that a reader will be distracted by the readable</p>
                        <p class="my-0 sign_fontsize"><span>Reason : </span>To Learn more things and explore more </p>
                        <p class="my-0 sign_fontsize"><span>CTC When Joined : </span>4.3 LPA</p>
                        <p class="my-0 sign_fontsize"><span>CTC When Left : </span>5.6 LPA</p>


                    </div>
                    <div class="pt-3">
                        <h6 class="sign_head">Tek Systems<a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></h6>
                        <p class="my-0 sign_fontsize"><span></span>Front End developer</p>
                        <p class="my-0 sign_fontsize"><span>Type : </span> Full time</p>
                        <p class="my-0 sign_fontsize"><span>Responsibilites : </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                        <p class="my-0 sign_fontsize"><span>Projects Handled : </span> 03 </p>
                        <p class="my-0 sign_fontsize"><span>Reason : </span>To Learn more things and explore more </p>
                        <p class="my-0 sign_fontsize"><span>CTC When Joined : </span>2.5 LPA</p>
                        <p class="my-0 sign_fontsize"><span>CTC When Left : </span>3.3 LPA</p>

                    </div>
                    
                    <div class="col-lg-12 pt-3 px-0">
                        <a href="#"  title="Add Current Company" data-toggle="modal" data-target="#profile_sum">Add Current Company</a>
                    </div>
                    <div class="col-lg-12 pt-2 px-0">
                        <a href="#"  title="Add Previous Company" data-toggle="modal" data-target="#previous_sum">Add Previous Company</a>
                    </div>
                </div>   

                     <!-- profile summary  modal starts -->
                <div class="container">
                                <!-- modal -->
                        <div class="modal" id="profile_sum">
                            <div class="modal-dialog">
                                <div class="modal-content px-3  mx-auto py-3">
                                        <!-- header -->
                                        <div class="modal-header pb-0">
                                            <h4 class="modal-title sign_head">Add Current Company</h4> 
                                            <p type="button" class="info modal_crossarrow" data-dismiss="modal"><img class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                                        </div>
                                        <!-- body -->
                                        <div class="modal-body">
                                            <form>
                                                
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Current Company<span class="text-danger px-1"></span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Current Designation<span class="text-danger px-1"></span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Type of Employment<span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Select Type of Employment</option>
                                                            <option>Contract</option>
                                                            <option>Freelance</option>
                                                            <option>Permanent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="mb-2 pt-3 sign_fontsize">Responsibilites</label>
                                                        <textarea class="w-100 signup_input rounded px-3 py-2" placeholder="Enter your Responsibilites"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="mb-2 pt-3 sign_fontsize">Project Details</label>
                                                        <textarea class="w-100 signup_input rounded px-3 py-2"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Reason for Changing job<span class="text-danger px-1"></span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">CTC When You Started With the Organization<span class="text-danger px-1"> </span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">CTC When You Left the Organization<span class="text-danger px-1"> </span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2">
                                                    </div>
                                                </div>
                                               
                                               
                                            </form>
                                        </div>
                                        <!-- footer -->
                                        <div class="modal-footer">
                                        <div class="col-12 text-right pr-0">
                                                <button type="button" class="btn btn btn-secondary py-1 mr-0 mr-sm-2" data-dismiss="modal">cancel</button>
                                                <button type="button" class="signin_button  px-3 py-1 rounded" data-toggle="modal" data-target="#create" >Save</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                                        <!-- profile summary  modal Ends -->





                                         <!-- previous company modal starts -->
                <div class="container">
                                <!-- modal -->
                        <div class="modal" id="previous_sum">
                            <div class="modal-dialog">
                                <div class="modal-content px-3  mx-auto py-3">
                                        <!-- header -->
                                        <div class="modal-header pb-0">
                                            <h4 class="modal-title sign_head">Previous Company</h4> 
                                            <p type="button" class="info modal_crossarrow" data-dismiss="modal"><img class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                                        </div>
                                        <!-- body -->
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Previous Company<span class="text-danger px-1"></span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Current Designation<span class="text-danger px-1"></span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Type of Employment<span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Select Type of Employment</option>
                                                            <option>Contract</option>
                                                            <option>Freelance</option>
                                                            <option>Permanent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="mb-2 pt-3 sign_fontsize">Responsibilites</label>
                                                        <textarea class="w-100 signup_input rounded px-3 py-2" placeholder="Enter your Responsibilites"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="mb-2 pt-3 sign_fontsize">No.of Projects handled in Case of IT Experience</label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Reason for Changing job<span class="text-danger px-1"></span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2 sign_fontsize">
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">CTC When You Started With the Organization<span class="text-danger px-1"> </span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">CTC When You Left the Organization<span class="text-danger px-1"> </span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2">
                                                    </div>
                                                </div>
                                                
                                               
                                            </form>
                                        </div>
                                        <!-- footer -->
                                        <div class="modal-footer">
                                        <div class="col-12 text-right pr-0">
                                                <button type="button" class="btn btn btn-secondary py-1 mr-0 mr-sm-2" data-dismiss="modal">cancel</button>
                                                <button type="button" class="signin_button  px-3 py-1 rounded" data-toggle="modal" data-target="#create" >Save</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                                        <!-- previous company modal Ends -->





                <!-- IT Skills -->


                <div  id="it_skills" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">IT Skills</div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 pt-sm-5 pb-sm-4 rounded"> 
                    <a href="#" title="Add IT Skills"  class="project_add" data-toggle="modal" data-target="#IT_Skill">ADD</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th class="pt-0">Skills</th>
                                <th class="pt-0">Version</th>
                                <th class="experience_skill_1 pt-0">Last used</th>
                                <th class="experience_skill pt-0">No.of Years of Experience</th>
                                <th class="pt-0">Actions</th>
                            </thead>
                            <tr>
                                <td class="pb-0">Bootstrap</td>
                                <td class="pb-0">v-4.0</td>
                                <td class="pb-0">2021</td>
                                <td class="pb-0">3 years</td>
                                <td class="pb-0"><a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></td>
                            </tr>
                        </table>
                    </div>
                 
                </div>
                    <!-- <div class="row">
                            <div class="col-3 px-0 px-sm-3">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item">Skills</li>
                                </ul>
                            </div>
                            <div class="col-2 pl-0">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item">Version</li>
                                </ul>
                            </div>
                            <div class="col-2 pr-0">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item ">Last Used</li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item">No.of Years of Experience</li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item">Actions</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="mt-2  mb-0">
                        <div class="row">
                            <div class="col-3 px-0 px-sm-3">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item">Bootstrap</li>
                                </ul>
                            </div>
                            <div class="col-2 px-0">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item pl-1">V-4.0</li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item pl-1">2021</li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item pl-1">3 Years</li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <ul class="list-inline pt-3  my-0">
                                    <li class="list-inline-item pl-1"><a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                </div> -->




                 <!-- IT Skills modal STARTS -->

                 <div class="container">
                                <!-- modal -->
                        <div class="modal" id="IT_Skill">
                            <div class="modal-dialog">
                                <div class="modal-content  mx-auto py-2 px-3">
                                        <!-- header -->
                                        <div class="modal-header pb-0">
                                            <h4 class="modal-title sign_head">Add IT Skills</h4> 
                                            <p type="button" class="info" data-dismiss="modal"><img class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                                        </div>
                                        <!-- body -->
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 sign_fontsize">Add Skill<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2" requried placeholder="Enter your Project Title">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Version<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2" requried placeholder="Enter Version">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                     <label  class="mb-2 pt-3 sign_fontsize">Last Used<span class="text-danger px-1"></span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Year</option>
                                                            <option>2021</option>
                                                            <option>2020</option>
                                                            <option>2019</option>
                                                            <option>2018</option>
                                                            <option>2017</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                            <option>2006</option>
                                                            <option>2005</option>
                                                            <option>2004</option>
                                                            <option>2003</option>
                                                            <option>2002</option>
                                                            <option>2001</option>
                                                            <option>2000</option>
                                                            <option>1999</option>
                                                            <option>1998</option>
                                                            <option>1997</option>
                                                            <option>1996</option>
                                                            <option>1995</option>
                                                            <option>1994</option>
                                                            <option>1993</option>
                                                            <option>1992</option>
                                                            <option>1991</option>
                                                            <option>1990</option>
                                                            <option>1989</option>
                                                            <option>1988</option>
                                                            <option>1987</option>
                                                            <option>1986</option>
                                                            <option>1985</option>
                                                            <option>1983</option>
                                                            <option>1982</option>
                                                            <option>1981</option>
                                                            <option>1980</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">No.Of Years Of Experience<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>Select</option>
                                                            <option>6 Months</option>
                                                            <option>1 Year</option>
                                                            <option>2 Years</option>
                                                            <option>3 Years</option>
                                                            <option>4 Years</option>
                                                            <option>5 Years</option>
                                                            <option>6 Years</option>
                                                            <option>7 Years</option>
                                                            <option>8 Years</option>
                                                            <option>9 Years</option>
                                                            <option>10+ Years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- footer -->
                                        <div class="modal-footer">
                                            <div class="col-12 text-right pr-0">
                                                <button type="button" class="btn btn btn-secondary py-1 mr-0 mr-sm-2" data-dismiss="modal">cancel</button>
                                                <button type="button" class="signin_button  px-3 py-1 rounded" data-toggle="modal" data-target="#create" >Save</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- IT Skills modal End -->





                    
                       <!-- project sticky -->
                
                <div  id="it_projects" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">IT Projects </div>
                </div>    
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded">
                    <a href="#" title="Add Project" class="project_add"  data-toggle="modal" data-target="#project_modal">ADD</a>
                    <div class="">
                        <h6 class="sign_head">job portal website<a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></h6>
                        <p class="my-0 sign_fontsize">Front End developer</p>
                        <p class="my-0 sign_fontsize">2 Months</p>
                        <p class="my-0 sign_fontsize">HTML5, CSS, BootStrap4, JQuery</p>

                    </div>
                </div>
                     <!-- project modal STARTS -->

                    <div class="container">
                                <!-- modal -->
                        <div class="modal" id="project_modal">
                            <div class="modal-dialog">
                                <div class="modal-content  mx-auto py-2 px-3">
                                        <!-- header -->
                                        <div class="modal-header pb-0">
                                            <h4 class="modal-title sign_head">Add Project</h4> 
                                            <p type="button" class="info" data-dismiss="modal"><img class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                                        </div>
                                        <!-- body -->
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 sign_fontsize">IT Project<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2" requried placeholder="Enter your Project Name">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Role in the project<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2" requried placeholder=" Enter your Role in the Project">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Duration of the Project<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>Select duration</option>
                                                            <option>1 Month</option>
                                                            <option>2 Months</option>
                                                            <option>3 Months</option>
                                                            <option>6 Months</option>
                                                            <option>1 Year</option>
                                                            <option>2 Years</option>
                                                            <option>3 Years</option>
                                                            <option>4+ Years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Technologies Used in the Project<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2" requried placeholder=" Enter technologies used in the project">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- footer -->
                                        <div class="modal-footer">
                                            <div class="col-12 text-right pr-0">
                                                <button type="button" class="btn btn btn-secondary py-1 mr-0 mr-sm-2" data-dismiss="modal">cancel</button>
                                                <button type="button" class="signin_button  px-3 py-1 rounded" data-toggle="modal" data-target="#create" >Save</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- project modal End -->



                        <!-- Education -->

                <div  id="Education" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Education</div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded"> 
                    <a href="#" title="Add Education"  class="project_add" data-toggle="modal" data-target="#education_add">ADD</a>
                    <div class="">
                        <h6 class="sign_head">Graduation - Software Engineering<a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></h6>
                        <p class="my-0 sign_fontsize">SRM University</p>
                        <p class="my-0 sign_fontsize">2020 (Full Time)</p>
                    </div>
                </div>
                
                    <!-- Education modal Starts -->

                    <div class="container">
                                <!-- modal -->
                        <div class="modal" id="education_add">
                            <div class="modal-dialog">
                                <div class="modal-content  mx-auto py-4 px-4">
                                        <!-- header -->
                                        <div class="modal-header pb-0">
                                            <h4 class="modal-title sign_head">Add Education</h4> 
                                            <p type="button" class="info" data-dismiss="modal"><img class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                                        </div>
                                        <!-- body -->
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                     <label  class="mb-2 pt-2 sign_fontsize">Education<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Select Education</option>
                                                            <option>Masters/Post-Graduation </option>
                                                            <option>Graudation/Diploma</option>
                                                            <option>12th</option>
                                                            <option>10th</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <!-- 10th,12th form Start -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Board<span class="text-danger px-1 my-0">*</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded modal_emplo" placeholder="month">
                                                            <option>Select Board</option>
                                                            <option>------All India------</option>
                                                            <option>CBSE</option>
                                                            <option>CISCE(ICSE/ISC)</option>
                                                            <option>Diploma</option>
                                                            <option>Nation Open School</option>
                                                            <option>IB(International Baccalaureate)</option>
                                                            <option >-----State Boards-----</option>
                                                            <option>Andhra pradesh</option>
                                                            <option>Assam</option>
                                                            <option>Bihar</option>
                                                            <option>Goa</option>
                                                            <option>Gujarat</option>
                                                            <option>Haryana</option>
                                                            <option>Himachal Pradesh</option>
                                                            <option>J & K</option>
                                                            <option>Bihar</option>
                                                            <option>Karanataka</option>
                                                            <option>Kerela</option>
                                                            <option>Maharashtra</option>
                                                            <option>Madhya Pradesh</option>
                                                            <option>Manipur</option>
                                                            <option>Meghalaya</option>
                                                            <option>MIzoram</option>
                                                            <option>Nagaland</option>
                                                            <option>Orissa</option>
                                                            <option>Punjab</option>
                                                            <option>Rajasthan</option>
                                                            <option>Tamil Nadu</option>
                                                            <option>Tripura</option>
                                                            <option>Uttar Pradesh</option>
                                                            <option>West Bengal</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                                
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <label  class="mb-2 pt-3 sign_fontsize">Medium<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Select Medium</option>
                                                            <option>Assamese/Asomiya</option>
                                                            <option>Bengali/Bangala</option>
                                                            <option>English</option>
                                                            <option>Hindi</option>
                                                            <option>Gujarati</option>
                                                            <option>Kannada</option>
                                                            <option>Kashmiri</option>
                                                            <option>Konakani</option>
                                                            <option>Malayalam</option>
                                                            <option>Manipuri</option>
                                                            <option>Marathi</option>
                                                            <option>Oriya</option>
                                                            <option>Punjabi</option>
                                                            <option>Sanskrit</option>
                                                            <option>Tamil</option>
                                                            <option>Telugu</option>
                                                            <option>Urdu</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                               <!-- 10th,12th form End -->
                                                               <!-- Graduation/diploma Starts -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Course<span class="text-danger px-1 my-0">*</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded modal_emplo" placeholder="month">
                                                            <option>Select Course</option>
                                                            <option>B A</option>
                                                            <option>B.Arch</option>
                                                            <option>BCA</option>
                                                            <option>B.B.A/B.M.S</option>
                                                            <option>B.Com</option>
                                                            <option>B.Ed</option>
                                                            <option>BDS</option>
                                                            <option>BHM</option>
                                                            <option>B.Pharma</option>
                                                            <option>B.Sc</option>
                                                            <option>B.Tech/B.E</option>
                                                            <option>LLB</option>
                                                            <option>MBBS</option>
                                                            <option>Diploma</option>
                                                            <option>BVSC</option>
                                                            <option>BAMS</option>
                                                            <option>BHMS</option>
                                                            <option>B.EI.ED</option>
                                                            <option>B.P.ED</option>
                                                            <option>BHMCT</option>
                                                            <option>MeghalayaB.Des.</option>
                                                            <option>BFA</option>
                                                            <option>B.U.MS</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                </div>        
                                                                      <!-- Graduation/diploma ends -->
                                                                      <!-- Masters/Post-Graduation STARTS -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Course<span class="text-danger px-1 my-0">*</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded modal_emplo" placeholder="month">
                                                            <option>Select Course</option>
                                                            <option>C A</option>
                                                            <option>C S</option>
                                                            <option>ICWA(CMA)</option>
                                                            <option>intergrated PG</option>
                                                            <option>LLM</option>
                                                            <option>M.A</option>
                                                            <option>M.Arch</option>
                                                            <option>M.Com</option>
                                                            <option>M.Ed</option>
                                                            <option>M.Pharam</option>
                                                            <option>MS/M.Sc(Science)</option>
                                                            <option>M.Tech</option>
                                                            <option>MBA/PGDM</option>
                                                            <option>PG-Diploma</option>
                                                            <option>MVSC</option>
                                                            <option>MCM</option>
                                                            <option>MFA</option>
                                                            <option>M.Des.</option>
                                                            <option>DM</option>
                                                            <option>M.Ch</option>
                                                            <option>Other Post Graduation</option>
                                                        </select>
                                                    </div>
                                                </div>     
                                                                 <!-- Masters/Post-Graduation END -->  
                                                                 <!-- Doctorate/Ph.D STARTS -->
                                                <!-- <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Course<span class="text-danger px-1 my-0">*</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded modal_emplo" placeholder="month">
                                                            <option>Select Course</option>
                                                            <option>Ph.D/Doctorate</option>
                                                            <option>MPHIL</option>
                                                            <option>Other Doctorate</option>
                                                        </select>
                                                    </div>
                                                </div>   -->
                                                             <!-- Doctorate/Ph.D Ends -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Specilation<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2 sign_fontsize" requried placeholder="Specilation">
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">University/Institute<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2 sign_fontsize" requried placeholder="Specilation">
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                     <p  class="mb-2 pt-3 sign_fontsize">Course Type<span class="text-danger px-1"></span></p>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input type="radio" class="radio_point" id="small" name="exampleRadios"><span for="small" class="sign_fontsize pl-2">Full Time</span> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                    <input type="radio" class="radio_point" name="exampleRadios"  id="small"><span for="small" class="sign_fontsize pl-2">Part Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-left">
                                                    <div class="form-check">
                                                        <input type="radio" class="radio_point" id="small" name="exampleRadios"><span for="small" class="sign_fontsize pl-2">Correspondance/Distance learning</span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Year Of Passing<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Select Year Of Passing</option>
                                                            <option>2021</option>
                                                            <option>2020</option>
                                                            <option>2019</option>
                                                            <option>2018</option>
                                                            <option>2017</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                            <option>2006</option>
                                                            <option>2005</option>
                                                            <option>2004</option>
                                                            <option>2003</option>
                                                            <option>2002</option>
                                                            <option>2001</option>
                                                            <option>2000</option>
                                                            <option>1999</option>
                                                            <option>1998</option>
                                                            <option>1997</option>
                                                            <option>1996</option>
                                                            <option>1995</option>
                                                            <option>1994</option>
                                                            <option>1993</option>
                                                            <option>1992</option>
                                                            <option>1991</option>
                                                            <option>1990</option>
                                                            <option>1989</option>
                                                            <option>1988</option>
                                                            <option>1987</option>
                                                            <option>1986</option>
                                                            <option>1985</option>
                                                            <option>1983</option>
                                                            <option>1982</option>
                                                            <option>1981</option>
                                                            <option>1980</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Grade<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Select Grade</option>
                                                        </select>
                                                    </div>
                                                </div>   
                                            </form>
                                        </div>
                                        <!-- footer -->
                                        <div class="modal-footer">
                                            <div class="col-12 text-right pr-0">
                                                <button type="button" class="btn btn btn-secondary py-1 mr-0 mr-sm-2" data-dismiss="modal">cancel</button>
                                                <button type="button" class="signin_button  px-3 py-1 rounded" data-toggle="modal" data-target="#create" >Save</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    
                    <!-- Education modal ENDS -->

                    <!-- certificates -->

                <div  id="Technical_Certifications" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Other Certifications</div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded"> 
                    <div class="row ">
                        <div class="col-6">
                            <!-- <h5 class="sign_head">Certifications</h5> -->
                            <div class="">
                                <h6 class="sign_head">Front end developer<a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></h6>
                                <p class="my-0 sign_fontsize">Google</p>
                                <p class="my-0 sign_fontsize">2020 jan</p>
                            </div>
                        </div>
                        <!-- <div class="col-6 text-right"> -->
                  
                        <!-- </div> -->
                    </div> 
                    <a href="#" title="Add Certifications" class="project_add" data-toggle="modal" data-target="#certificate_add">ADD</a>

                </div>
                    <!-- certification modal -->

                    <div class="container">
                                <!-- modal -->
                        <div class="modal" id="certificate_add">
                            <div class="modal-dialog">
                                <div class="modal-content  mx-auto py-2 px-4">
                                        <!-- header -->
                                        <div class="modal-header pb-0">
                                            <h4 class="modal-title sign_head">Certifications</h4> 
                                            <p type="button" class="info " data-dismiss="modal"><img class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                                        </div>
                                        <!-- body -->
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Certification Name<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2" requried placeholder="Please Enter Your Certification Name">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Certification Agency/School<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2 sign_fontsize" requried placeholder="Please Mention Your Certification Agency/School">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                     <label  class="mb-2 pt-3 sign_fontsize">Year of Certification<span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Year</option>
                                                            <option>2021</option>
                                                            <option>2020</option>
                                                            <option>2019</option>
                                                            <option>2018</option>
                                                            <option>2017</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                            <option>2006</option>
                                                            <option>2005</option>
                                                            <option>2004</option>
                                                            <option>2003</option>
                                                            <option>2002</option>
                                                            <option>2001</option>
                                                            <option>2000</option>
                                                            <option>1999</option>
                                                            <option>1998</option>
                                                            <option>1997</option>
                                                            <option>1996</option>
                                                            <option>1995</option>
                                                            <option>1994</option>
                                                            <option>1993</option>
                                                            <option>1992</option>
                                                            <option>1991</option>
                                                            <option>1990</option>
                                                            <option>1989</option>
                                                            <option>1988</option>
                                                            <option>1987</option>
                                                            <option>1986</option>
                                                            <option>1985</option>
                                                            <option>1983</option>
                                                            <option>1982</option>
                                                            <option>1981</option>
                                                            <option>1980</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-lg-3 sign_fontsize"><span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>Select Month</option>
                                                            <option>Jan</option>
                                                            <option>Feb</option>
                                                            <option>Mar</option>
                                                            <option>Apr</option>
                                                            <option>May</option>
                                                            <option>Jun</option>
                                                            <option>Jul</option>
                                                            <option>Aug</option>
                                                            <option>Sep</option>
                                                            <option>Oct</option>
                                                            <option>Nov</option>
                                                            <option>Dec</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-lg-6">
                                                     <label  class="mb-2 pt-3 sign_fontsize">Duration<span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>Select Duration</option>
                                                            <option>1 Month</option>
                                                            <option>2 Months</option>
                                                            <option>3 Months</option>
                                                            <option>6 Months</option>
                                                            <option>1 Year</option>
                                                            <option>2 Years</option>
                                                            <option>3 Years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- footer -->
                                        <div class="modal-footer">
                                        <div class="col-12 text-right pr-0">
                                                <button type="button" class="btn btn btn-secondary py-1 mr-0 mr-sm-2" data-dismiss="modal">cancel</button>
                                                <button type="button" class="signin_button  px-3 py-1 rounded" data-toggle="modal" data-target="#create" >Save</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                     <!-- certification modal end -->

                     <!-- gaps -->
                <div  id="gaps" class="col-lg-6 pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Employment Gaps</div>
                </div>
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-4 rounded">
                    <a href="#" title="Add Employment Gaps" class="project_add" data-toggle="modal" data-target="#employment_modal">ADD</a>
                    <div class="col-">
                            <div class="">
                                <p class="my-0 sign_head">Jan 2019 - Jun 2020<a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></p>
                                <p class="my-0 sign_fontsize">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text Ipsum as their default model text </p>
                            </div>
                        </div>
                    
                </div>



                  <!-- employment modals START -->

                  <div class="container">
                                <!-- modal -->
                        <div class="modal" id="employment_modal">
                            <div class="modal-dialog">
                                <div class="modal-content  mx-auto py-4 px-4">
                                        <!-- header -->
                                        <div class="modal-header pb-0">
                                            <h4 class="modal-title sign_head">Employment Gaps</h4> 
                                            <p type="button" class="info" data-dismiss="modal"><img class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                                        </div>
                                        <!-- body -->
                                        <div class="modal-body">
                                            <!--<form>
                                                 <div class="row">
                                                    <div class="col-lg-6">
                                                     <label  class="mb-2 pt-2 sign_fontsize">Total Experience<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Select Year</option>
                                                            <option>0 Year</option>
                                                            <option>1 Year</option>
                                                            <option>2 Years</option>
                                                            <option>3 Years</option>
                                                            <option>4 Years</option>
                                                            <option>5 Years</option>
                                                            <option>6 Years</option>
                                                            <option>7 Years</option>
                                                            <option>8 Years</option>
                                                            <option>9 Years</option>
                                                            <option>10+ Years</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-lg-3 sign_fontsize"><span class="text-danger px-1 my-0"></span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded modal_emplo" placeholder="month">
                                                            <option>Months</option>
                                                            <option>1 month</option>
                                                            <option>2 months</option>
                                                            <option>3 months</option>
                                                            <option>4 months</option>
                                                            <option>5 months</option>
                                                            <option>6 months</option>
                                                            <option>7 months</option>
                                                            <option>8 months</option>
                                                            <option>9 months</option>
                                                            <option>11 Months</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Your Designation<span class="text-danger px-1">*</span></label>
                                                        <input type="text" class="w-100 signup_input rounded px-3 py-2" requried placeholder="Type your Designation">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Your Organisation<span class="text-danger px-1">*</span></label>
                                                        <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize" requried placeholder="Type your Organisation">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 py-2">
                                                        <div class="mb-2 pt-3 sign_fontsize">Is this your current company ?<span class="text-danger px-1">*</span></div>
                                                        <input type="radio" class="radio_point" id="circle" name="exampleRadios"><span for="circle" class="sign_fontsize pl-1 mr-2">Yes</span></input>
                                                        <input type="radio" class="radio_point" id="circle" name="exampleRadios"><span for="circle" class="sign_fontsize pl-1 mr-2">No</span></input>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                     <label  class="mb-2 pt-3 sign_fontsize">Started Working From<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Year</option>
                                                            <option>2021</option>
                                                            <option>2020</option>
                                                            <option>2019</option>
                                                            <option>2018</option>
                                                            <option>2017</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                            <option>2006</option>
                                                            <option>2005</option>
                                                            <option>2004</option>
                                                            <option>2003</option>
                                                            <option>2002</option>
                                                            <option>2001</option>
                                                            <option>2000</option>
                                                            <option>1999</option>
                                                            <option>1998</option>
                                                            <option>1997</option>
                                                            <option>1996</option>
                                                            <option>1995</option>
                                                            <option>1994</option>
                                                            <option>1993</option>
                                                            <option>1992</option>
                                                            <option>1991</option>
                                                            <option>1990</option>
                                                            <option>1989</option>
                                                            <option>1988</option>
                                                            <option>1987</option>
                                                            <option>1986</option>
                                                            <option>1985</option>
                                                            <option>1983</option>
                                                            <option>1982</option>
                                                            <option>1981</option>
                                                            <option>1980</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-lg-3 sign_fontsize"><span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>Select Month</option>
                                                            <option>Jan</option>
                                                            <option>Feb</option>
                                                            <option>Mar</option>
                                                            <option>Apr</option>
                                                            <option>May</option>
                                                            <option>Jun</option>
                                                            <option>Jul</option>
                                                            <option>Aug</option>
                                                            <option>Sep</option>
                                                            <option>Oct</option>
                                                            <option>Nov</option>
                                                            <option>Dec</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                     <label  class="mb-2 pt-3 sign_fontsize">Worked Till<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Year</option>
                                                            <option>2021</option>
                                                            <option>2020</option>
                                                            <option>2019</option>
                                                            <option>2018</option>
                                                            <option>2017</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                            <option>2006</option>
                                                            <option>2005</option>
                                                            <option>2004</option>
                                                            <option>2003</option>
                                                            <option>2002</option>
                                                            <option>2001</option>
                                                            <option>2000</option>
                                                            <option>1999</option>
                                                            <option>1998</option>
                                                            <option>1997</option>
                                                            <option>1996</option>
                                                            <option>1995</option>
                                                            <option>1994</option>
                                                            <option>1993</option>
                                                            <option>1992</option>
                                                            <option>1991</option>
                                                            <option>1990</option>
                                                            <option>1989</option>
                                                            <option>1988</option>
                                                            <option>1987</option>
                                                            <option>1986</option>
                                                            <option>1985</option>
                                                            <option>1983</option>
                                                            <option>1982</option>
                                                            <option>1981</option>
                                                            <option>1980</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-lg-3 sign_fontsize"><span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>Select Month</option>
                                                            <option>Jan</option>
                                                            <option>Feb</option>
                                                            <option>Mar</option>
                                                            <option>Apr</option>
                                                            <option>May</option>
                                                            <option>Jun</option>
                                                            <option>Jul</option>
                                                            <option>Aug</option>
                                                            <option>Sep</option>
                                                            <option>Oct</option>
                                                            <option>Nov</option>
                                                            <option>Dec</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                     <label  class="mb-2 pt-3 sign_fontsize">Current Salary<span class="text-danger px-1"> *</span></label>
                                                     <div  class="mb-2 sign_fontsize">
                                                     <input type="radio" class="radio_point" name="radio" id="circle"><span class="pl-1" for="circle" >Indian Rupees</span></input></div>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>0 Lac</option>
                                                            <option>1 Lac</option>
                                                            <option>2 Lacs</option>
                                                            <option>3 Lacs</option>
                                                            <option>4 Lacs</option>
                                                            <option>5 Lacs</option>
                                                            <option>6 Lacs</option>
                                                            <option>7 Lacs</option>
                                                            <option>8 Lacs</option>
                                                            <option>9 Lacs</option>
                                                            <option>10 Lacs</option>
                                                            <option>11 Lacs</option>
                                                            <option>12 Lacs</option>
                                                            <option>13 Lacs</option>
                                                            <option>14 Lacs</option>
                                                            <option>15 Lacs</option>
                                                            <option>16 Lacs</option>
                                                            <option>17 Lacs</option>
                                                            <option>18 Lacs</option>
                                                            <option>19 Lacs</option>
                                                            <option>20 Lacs</option>
                                                            <option>21 Lacs</option>
                                                            <option>22 Lacs</option>
                                                            <option>23 Lacs</option>
                                                            <option>24 Lacs</option>
                                                            <option>25 Lacs</option>
                                                            <option>26 Lacs</option>
                                                            <option>27 Lacs</option>
                                                            <option>28 Lacs</option>
                                                            <option>29 Lacs</option>
                                                            <option>30+ Lacs</option>
                                                            <option>40+ Lacs</option>
                                                            <option>50+ Lacs</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-lg-3 sign_fontsize"><span class="text-danger px-1"> </span></label>
                                                        <div  class="mb-2 sign_fontsize">
                                                        <input type="radio" class="radio_point" id="circle" name="radio"><span for="circle" class="pl-1" >US Dollars</span></input></div>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>0 Thousand</option>
                                                            <option>5 Thousands</option>
                                                            <option>10 Thousands</option>
                                                            <option>15 Thousands</option>
                                                            <option>20 Thousands</option>
                                                            <option>25 Thousands</option>
                                                            <option>30 Thousands</option>
                                                            <option>35 Thousands</option>
                                                            <option>40 Thousands</option>
                                                            <option>50 Thousands</option>
                                                            <option>55 Thousands</option>
                                                            <option>60 Thousands</option>
                                                            <option>65 Thousands</option>
                                                            <option>70 Thousands</option>
                                                            <option>75 Thousands</option>
                                                            <option>80 Thousands</option>
                                                            <option>85 Thousands</option>
                                                            <option>90 Thousands</option>
                                                            <option>95 Thousands</option>
                                                            <option>100+ Thousands</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Describe your Job Profile<span class="text-danger px-1"></span></label>
                                                        <textarea type="text" class="w-100 signup_input rounded px-3 py-2"  placeholder="Type Here..........." maxlenght="1000"  ></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Notice Period<span class="text-danger px-1"> *</span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>Select Notice Period</option>
                                                            <option>15 Days or Less</option>
                                                            <option>1 Month</option>
                                                            <option>2 Months</option>
                                                            <option>3 Months</option>
                                                            <option>4 Months</option>
                                                            <option>5 Months</option>
                                                            <option>6 Months</option>
                                                            <option>More Than 6 Months</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form> -->
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Employment Gaps From<span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Year</option>
                                                            <option>2021</option>
                                                            <option>2020</option>
                                                            <option>2019</option>
                                                            <option>2018</option>
                                                            <option>2017</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                            <option>2006</option>
                                                            <option>2005</option>
                                                            <option>2004</option>
                                                            <option>2003</option>
                                                            <option>2002</option>
                                                            <option>2001</option>
                                                            <option>2000</option>
                                                            <option>1999</option>
                                                            <option>1998</option>
                                                            <option>1997</option>
                                                            <option>1996</option>
                                                            <option>1995</option>
                                                            <option>1994</option>
                                                            <option>1993</option>
                                                            <option>1992</option>
                                                            <option>1991</option>
                                                            <option>1990</option>
                                                            <option>1989</option>
                                                            <option>1988</option>
                                                            <option>1987</option>
                                                            <option>1986</option>
                                                            <option>1985</option>
                                                            <option>1983</option>
                                                            <option>1982</option>
                                                            <option>1981</option>
                                                            <option>1980</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-lg-3 sign_fontsize"><span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>Select Month</option>
                                                            <option>Jan</option>
                                                            <option>Feb</option>
                                                            <option>Mar</option>
                                                            <option>Apr</option>
                                                            <option>May</option>
                                                            <option>Jun</option>
                                                            <option>Jul</option>
                                                            <option>Aug</option>
                                                            <option>Sep</option>
                                                            <option>Oct</option>
                                                            <option>Nov</option>
                                                            <option>Dec</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Employment Gaps To<span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                                            <option>Year</option>
                                                            <option>2021</option>
                                                            <option>2020</option>
                                                            <option>2019</option>
                                                            <option>2018</option>
                                                            <option>2017</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                            <option>2006</option>
                                                            <option>2005</option>
                                                            <option>2004</option>
                                                            <option>2003</option>
                                                            <option>2002</option>
                                                            <option>2001</option>
                                                            <option>2000</option>
                                                            <option>1999</option>
                                                            <option>1998</option>
                                                            <option>1997</option>
                                                            <option>1996</option>
                                                            <option>1995</option>
                                                            <option>1994</option>
                                                            <option>1993</option>
                                                            <option>1992</option>
                                                            <option>1991</option>
                                                            <option>1990</option>
                                                            <option>1989</option>
                                                            <option>1988</option>
                                                            <option>1987</option>
                                                            <option>1986</option>
                                                            <option>1985</option>
                                                            <option>1983</option>
                                                            <option>1982</option>
                                                            <option>1981</option>
                                                            <option>1980</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label  class="mb-2 pt-lg-3 sign_fontsize"><span class="text-danger px-1"> </span></label>
                                                        <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded" placeholder="month">
                                                            <option>Select Month</option>
                                                            <option>Jan</option>
                                                            <option>Feb</option>
                                                            <option>Mar</option>
                                                            <option>Apr</option>
                                                            <option>May</option>
                                                            <option>Jun</option>
                                                            <option>Jul</option>
                                                            <option>Aug</option>
                                                            <option>Sep</option>
                                                            <option>Oct</option>
                                                            <option>Nov</option>
                                                            <option>Dec</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="mb-2 pt-3 sign_fontsize">Reason</label>
                                                        <textarea class="w-100 signup_input rounded px-3 py-2"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- footer -->
                                        <div class="modal-footer">
                                        <div class="col-12 text-right pr-0">
                                                <button type="button" class="btn btn btn-secondary py-1 mr-0 mr-sm-2" data-dismiss="modal">cancel</button>
                                                <button type="button" class="signin_button  px-3 py-1 rounded" data-toggle="modal" data-target="#create" >Save</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>  
                     </div>
                       <!-- employment modal ENDS -->






                    <!-- employment sticky -->

                <div  id="employment" class="col-lg-6  pb-3 px-0 pt-4 mt-0 mt-md-3 profile_head rounded">
                     <div class="myprofile_font">Employment Preferences<a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a> </div>
                </div>    
                <div class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                        <form>
                            <div class="row ">
                                <div class="col-lg-6">
                                    <label  class="mb-2 pt-3 pt-lg-0 sign_fontsize">Work Type<span class="text-danger px-1"> </span></label>
                                    <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                        <option>Select Work Type</option>
                                        <option>Contract</option>
                                        <option>Freelance</option>
                                        <option>Permanent</option>
                                        <option>Any</option>
                                    </select>
                                </div>
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
                            </div>
                            <div class="row ">
                                <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Have You Worked on Contract ?<span class="text-danger px-1"></span></label>
                                    <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                        <option>Select One</option>
                                        <option>YES</option>
                                        <option>NO</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Rate/Month in Case of Contract opportunities<span class="text-danger px-1"></span></label>
                                <input type="text" class="w-100 signup_input rounded px-3 py-2">
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
                    <div class="myprofile_font">Personal Details<a href="javascript:void(0)"><i class="fa fa-pencil pl-2" aria-hidden="true"></i></a></div>
                    
                </div>
                <div  class="box_profile px-4 px-sm-5 py-4 py-sm-5 rounded">
                    <form>
                        <div class="row ">
                            <div class="col-lg-4 ">
                                <label  class="mb-2 pt-lg-0   sign_fontsize">First Name<span class="text-danger px-1">* </span></label>
                                <input type="text" placeholder="Enter your name" requried class="w-100 signup_input px-3 py-2 rounded">
                            </div>
                            <div class="col-lg-4">
                                <label  class="mb-2  pt-3 pt-lg-0 sign_fontsize">Middle name<span class="text-danger px-1">* </span></label>
                                <input type="text" placeholder="Enter your name" requried class="w-100  signup_input px-3 py-2 rounded">
                            </div>
                            <div class="col-lg-4">
                                <label  class="mb-2  pt-3 pt-lg-0  sign_fontsize">Last name<span class="text-danger px-1">* </span></label>
                                <input type="text" placeholder="Enter your name" requried class="w-100  signup_input px-3 py-2 rounded">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Industry<span class="text-danger px-1">* </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select Industry</option>
                                    <option>IT</option>
                                    <option>NON-IT</option>
                                    <!-- <option>Other</option> -->
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Gender<span class="text-danger px-1">* </span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option> Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Date Of Birth<span class="text-danger px-1">*</span></label>
                                <input type="date" class="w-100 signup_input rounded px-3 py-2 sign_fontsize" requried>
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Marital Status<span class="text-danger px-1">*</span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Marital Status</option>
                                    <option>Married</option>
                                    <option>Single</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current City<span class="text-danger px-1">* </span></label>
                                <!-- <input type="text" placeholder="Enter your city" requried class="w-100 signup_input rounded px-3 py-2"> -->
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Select City</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Current Location in city<span class="text-danger px-1">* </span></label>
                                <input type="text" placeholder="Enter Current Location in city" requried class="w-100 signup_input rounded px-3 py-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Physically Challenged<span class="text-danger px-1"></span></label>
                                <select class="w-100 pl-3 pr-4 py-2 form_control-arrow sign_fontsize  signup_input rounded">
                                    <option>Physically Challenged</option>
                                    <option>YES</option>
                                    <option>NO</option>
                                </select>
                            </div>
                             <div class="col-lg-6">
                                <label  class="mb-2 pt-3 sign_fontsize">Upload Resume<span class="text-danger px-1">* </span></label><br>
                                <form action="/action_page.php">
                                    <input type="file" id="myFile" name="filename">
                                </form>
                            </div>
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
                            <div class="col-lg-12 pt-3">
                                <p  class="mb-2 pt-3 sign_fontsize">Languages<span class="text-danger px-1">*</span></p>
                                <a href="#"  data-toggle="modal" data-target="#languages_add">Add Languages</a>
                            </div>
                            <div class="col-lg-12 pt-4 text-center">
                                <input class="signin_button rounded px-3 py-1" type="submit">
                             </div>
                        </div>

                            <!-- language modal starts -->
                        <div class="container">
                            <!-- modal -->
                            <div class="modal" id="languages_add">
                                <div class="modal-dialog">
                                    <div class="modal-content mx-auto py-2 px-3">
                                            <!-- header -->
                                            <div class="modal-header pb-0">
                                                <h4 class="modal-title sign_head">Add Language</h4> 
                                                <p type="button" class="info " data-dismiss="modal"><img class="float-right modal_close-icon modal_crossarrow" src="asset/images/cancel.png"></p>
                                            </div>
                                            <!-- body -->
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2  sign_fontsize">Language<span class="text-danger px-1">* </span></label>
                                                        <input type="text" placeholder="Language" value="English" requried class="w-100 signup_input px-3 py-2 mb-2 rounded"></input>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters pt-2">
                                                    <div class="col-4 col-sm-2">
                                                        <input class="lang_checkbox" type="checkbox"  id="flexCheckChecked" checked ><span class="pl-2 sign_fontsize">Read</span>
                                                    </div>
                                                    <div class="col-4 col-sm-2">
                                                        <input class="lang_checkbox" type="checkbox"  id="flexCheckChecked" checked ><span class="pl-2 sign_fontsize">Write</span>
                                                    </div>
                                                    <div class="col-4 col-sm-2">
                                                        <input class="lang_checkbox" type="checkbox"  id="flexCheckChecked" checked ><span class="pl-2 sign_fontsize">Speak</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right pt-3 pt-sm-0">
                                                        <a href="javascript:void(0)">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label  class="mb-2 pt-3 sign_fontsize">Language<span class="text-danger px-1">* </span></label>
                                                        <input type="text" placeholder="Language" requried class="w-100 signup_input px-3 py-2 mb-2 rounded">
                                                    </div>
                                                </div>
                                                <div class="row pt-2 no-gutters">
                                                    <div class="col-4 col-sm-2">
                                                        <input class="lang_checkbox" type="checkbox"><span class="pl-2 sign_fontsize">Read</span>
                                                    </div>
                                                    <div class="col-4 col-sm-2">
                                                        <input class="lang_checkbox" type="checkbox"><span class="pl-2 sign_fontsize">Write</span>
                                                    </div>
                                                    <div class="col-4 col-sm-2">
                                                        <input class="lang_checkbox" type="checkbox"><span class="pl-2 sign_fontsize">Speak</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- footer -->
                                            <div class="modal-footer">
                                                <div class="col-12 text-right pr-0">
                                                    <button type="button" class="btn btn btn-secondary py-1 mr-0 mr-sm-2" data-dismiss="modal">cancel</button>
                                                    <button type="button" class="signin_button  px-3 py-1 rounded" data-toggle="modal" data-target="#create" >Save</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                            <!-- language modal ends -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php' ?>