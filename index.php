<?php
/*
    $db = mysqli_connect('localhost','root','rootroot','dbHealth', 8889)
    or die('Error connecting to MySQL server.');
  */  
?>
<?php
    require('constants.php');
    require('addUser.php');
?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.10, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/health-scout-logo-header.png" type="image/x-icon">
  <meta name="description" content="">
  <title>THE HEALTH SCOUT</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/style/css/style.css">
  
</head>
<body>

    <div class="header">
        <span class="navbar-logo">
            <a href="#">
                <img src="assets/images/health-scout-logo-header.png" alt="Health-Scout">
            </a>
        </span>
        <a class="header-right" href="#">
            <div class="link-agent-phone">SPEAK TO A LICENSED AGENT NOW</div>
            <button class="button button-phone">888-123-4567</button>
        </a>
    </div>

    <div class="red-bar"></div>
    
    <div class="hero-text">
        <div class="img-background"></div>
        <div class="dialog-back">
            <div class="dialog-header">
                Let us find the<br/>
                Afforable Health Plan<br/>
                that's right for you!<br/>
            </div>
            <form method="POST" action="index.php" id="form1">
                <div id="page-1">
                    <div class="dialog-checks">
                        <div class="text-checks"><i class="fa fa-check"></i>Lower rates</div>
                        <div class="text-checks"><i class="fa fa-check"></i>More plan options</div>
                        <div class="text-checks"><i class="fa fa-check"></i>Help if you need it</div>
                    </div>
                    <div class="dialog-content">
                        <div class="form-group">
                            <div class="label-dialog-content">ENTER YOUR ZIP TO START</div>
                            <input class="text-dialog-content" type="number" min="0" max="100000" name="zip" id="zip" required/>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">I'M LOOKING FOR...</div>

                            <div class="select" style="width: 60%;">
                                <select name="looking-for" id="looking-for">
                                    <option value="HEALTH INSURANCE">HEALTH INSUARNCE</option>
                                    <option value="OBAMACARE">OBAMACARE</option>
                                    <option value="MEDICAL SUPPLEMENT">MEDICAL SUPPLEMENT</option>
                                </select>
                                <div class="select_arrow right_20">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-get-started" id="btn-page-1">GET STARTED</button>
                        </div>
                    </div>
                </div>
                <div id="page-2">
                    <div class="dialog-checks">
                        <div class="text-step">Step 1 of 3</div>
                    </div>
                    <div class="dialog-content">
                        <div class="form-group">
                            <div class="label-dialog-content">GENDER</div>
                            <div class="control-group">
                                <label class="control control-radio">
                                    Male
                                        <input type="radio" name="radio-gender" value="male" id="radio-male" checked="checked" />
                                    <div class="control_indicator"></div>
                                </label>
                                <label class="control control-radio">
                                    Female
                                        <input type="radio" name="radio-gender" value="female" id="radio-female" />
                                    <div class="control_indicator"></div>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">DATE OF BIRTH</div>
                            <div class="select" style="width: 30%;">
                                <select name="birthdate-month" id="birthdate-month" required>
                                    <option value="" disabled selected>MONTH</option>
                                    <?php
                                    for ($i = 1; $i <= 12; $i++)
                                        echo '<option>'.$i.'</option>';
                                    ?>
                                </select>
                                <div class="select_arrow right_20">
                                </div>
                            </div>
                            <div class="select" style="width: 20%;">
                                <select name="birthdate-day" id="birthdate-day" required>
                                    <option value="" disabled selected>DAY</option>
                                    <?php
                                    for ($i = 0; $i <= 31; $i++)
                                        echo '<option>'.$i.'</option>';
                                    ?>
                                </select>
                                <div class="select_arrow right_20">
                                </div>
                            </div>
                            <div class="select" style="width: 30%;">
                                <select name="birthdate-year" id="birthdate-year" required>
                                    <option value="" disabled selected>YEAR</option>
                                    <?php
                                    for ($i = 2020; $i >= 1960; $i--)
                                        echo '<option>'.$i.'</option>';
                                    ?>
                                </select>
                                <div class="select_arrow right_20">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-get-started" id="btn-page-2">CONTINUE</button>
                        </div>
                    </div>
                </div>
                <div id="page-3">
                    <div class="dialog-checks">
                        <div class="text-step">Step 2 of 3</div>
                    </div>
                    <div class="dialog-content">
                        <div class="form-group">
                            <div class="label-dialog-content">Height</div>
                            <div class="select" style="width: 30%; margin: 0px 20px;">
                                <select name="height-feet" id="height-feet" required>
                                    <option value="" disabled selected>FEET</option>
                                    <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>
                                    <option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
                                </select>
                                <div class="select_arrow right_20">
                                </div>
                            </div>
                            <div class="select" style="width: 30%;">
                                <select name="height-inches" id="height-inches" required>
                                    <option value="" disabled selected>INCHES</option>
                                    <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>
                                    <option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
                                </select>
                                <div class="select_arrow right_20">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">Weight</div>

                            <div class="select" style="width: 60%;">
                                <select name="weight" id="weight" required>
                                    <option value="" disabled selected>LBS</option>
                                    <option>40</option>
                                    <option>50</option>
                                    <option>60</option>
                                    <option>70</option>
                                    <option>80</option>
                                </select>
                                <div class="select_arrow right_5">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">How many people in your household?</div>

                            <div class="select" style="width: 60%;">
                                <select name="numberPeople" id="numberPeople" required>
                                    <option value="" disabled selected>NUMBER OF PEOPLE</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>6</option>
                                    <option>10</option>
                                </select>
                                <div class="select_arrow right_5">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">Expected Annual income</div>

                            <div class="select" style="width: 60%;">
                                <select name="income" id="income" required>
                                    <option value="" disabled selected>YEAR INCOME</option>
                                    <option>1000</option>
                                    <option>2000</option>
                                    <option>3000</option>
                                </select>
                                <div class="select_arrow right_5">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-get-started" id="btn-page-3">CONTINUE</button>
                        </div>
                    </div>
                </div>
                <div id="page-4">
                    <div class="dialog-checks">
                        <div class="text-step">Step 3 of 3</div>
                    </div>
                    <div class="dialog-content">
                        <div class="form-group">
                            <div class="label-dialog-content">First Name</div>
                            <input class="text-dialog-content" type="text" name="firstname" id="firstname" required/>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">Last Name</div>
                            <input class="text-dialog-content" type="text" name="lastname" id="lastname" required/>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">Email</div>
                            <input class="text-dialog-content" type="email" name="email" id="email" required/>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">Address</div>
                            <input class="text-dialog-content" type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">City</div>
                            <input class="text-dialog-content" type="text" name="city" id="city" required/>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">State</div>

                            <div class="select" style="width: 60%;">
                                <select name="state" id="state" required>
                                    <option value="" disabled selected>USA</option>
                                    <?php
                                        for( $i = 0; $i < count($array_states); $i++)
                                            echo '<option>'.$array_states[$i].'</option>';
                                    ?>
                                </select>
                                <div class="select_arrow right_5">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label-dialog-content">Phone</div>
                            <input class="text-dialog-content" type="text" name="phone" id="phone" required/>
                        </div>
                        
                        <div class="container-question">
                            <p class="text-question">
                                By clicking the "Get Quotes Now" button, I represent that I am 18+ years of age. By clicking the "Get Quotes Now" button, I give express consent by my electronic signature to receive marketing communications regarding insurance products and services from <span style="color: #0d89c9;">HealthScout.com</span>, Partner 1 LLC and their <span style="color: #0d89c9;">marketing partners</span> via automated telephone dialing system and/or pre-recorded recurring calls, text messages/picture text messages, and/or emails at the phone number and/or email provided above, including wireless numbers, if applicable, even if previously registered on the Do Not Call Registry. I understand that my telephone company may impose charges on me for these contacts. I understand that my consent is not required to buy any of these business's products or services and it can be revoked at any time. For SMS message campaigns: Text STOP to (888) 123-4567 stop and HELP for help. <span style="font-weight: bold;">Msg &amp; data or carrier rates may apply.</span> Terms & Conditions/privacy policy apply.
                                <br>
                                I understand that consent is not a condition to receive quotes and/or purchase. To receive quotes without providing consent, please call <span style="color: #0d89c9;">HealthScout.com</span> at <span style="color: #0d89c9;">888-123-4567</span> . Carrier data rates may apply.
                            </p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-get-question" id="btn-page-4">GET QUOTES NOW</button>
                        </div>
                        <div class="text-call-us-at">
                            <span>or call us at</span>
                            <span style="font-weight: bold; color: #0a87c8;">
                                888-123-4567
                            </span>
                        </div>
                        <div style="margin: 10px;">
                            <img src="assets/images/signs/aarp-small.png"/>
                            <label class="control control-checkbox" style="margin-left: 10px;">
                                <span class="text-co-reg">
                                    this is the co-reg offer: brief explanatory text will follow
                                </span>
                                <input type="checkbox" checked="checked" />
                                <div class="control_indicator"></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div id="page-5">
                    <div class="dialog-checks">
                        <div class="text-step">Here is some more text explaining next steps...</div>
                    </div>
                    <div class="dialog-content">
                        <div class="form-group">
                            <div class="label-dialog-content">Here are few offers we thought you might be interested in</div>
                        </div>
                        <div class="banner"><span>728 * 90 BANNER</span></div>
                        <div class="banner"><span>728 * 90 BANNER</span></div>
                        <div class="banner"><span>728 * 90 BANNER</span></div>
                        <div class="banner"><span>728 * 90 BANNER</span></div>
                        <div class="banner"><span>728 * 90 BANNER</span></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container-signs">
        <img src="assets/images/signs/Anthem.png"/>
        <img src="assets/images/signs/aarp.png" />
        <img src="assets/images/signs/aetna.png" />
        <img src="assets/images/signs/cigna.png" />
        <img src="assets/images/signs/humana.png" />
        <img src="assets/images/signs/usaa.png" />
        <!--<img class="img-sign" src="assets/images/signs/Anthem.png"  id="id-sign-anthem" alt="Anthem"/>
        <img class="img-sign" src="assets/images/signs/aetna.png"   id="id-sign-aetna" alt="aetna"/>
        <img class="img-sign" src="assets/images/signs/aarp.png"    id="id-sign-aarp" alt="aarp"/>
        <img class="img-sign" src="assets/images/signs/cigna.png"   id="id-sign-cigna" alt="cigna"/>
        <img class="img-sign" src="assets/images/signs/humana.png"  id="id-sign-humana" alt="humana"/>
        <img class="img-sign" src="assets/images/signs/usaa.png"    id="id-sign-usaa" alt="usaa"/>-->
    </div>

    <div class="container-gradient"></div>

    <div id="div-caption">
        <div class="text-title">
            EDUCATE YOURSELF: HEALTH INSURANCE RESOURCES
        </div>
        <div class="underline-title"></div>
        <div class="row row-thumbnails">
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="assets/images/healthcare-explanation-676x450.jpg" target="_blank">
                <img src="assets/images/healthcare-explanation-676x450.jpg" alt="Lights">
                <div class="caption-thumbnail">
                    <a class="text-thumbnail text-thumbnails-title">Obamacare</a>
                    <p class="text-thumbnail text-thumbnails-content">
                        This is where text about your subject matter will appear. The words should look good together, but most importantly they should say something that the site’s visitors will want to read - ideally it might even help them.
                    </p>
                    <a class="text-thumbnail text-thumbnails-readmore">Read more...</a>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="assets/images/health-pills-676x449.jpg" target="_blank">
                <img src="assets/images/health-pills-676x449.jpg" alt="Nature">
                <div class="caption-thumbnail">
                    <a class="text-thumbnail text-thumbnails-title">Health Insurance</a>
                    <p class="text-thumbnail text-thumbnails-content">
                            This is where text about your subject matter will appear. The words should look good together, but most importantly they should say something that the site’s visitors will want to read - ideally it might even help them. 
                    </p>
                    <a class="text-thumbnail text-thumbnails-readmore">Read more...</a>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
                <a href="assets/images/blood-pressure-676x400.jpg" target="_blank">
                <img src="assets/images/blood-pressure-676x400.jpg" alt="Fjords">
                <div class="caption-thumbnail">
                    <a class="text-thumbnail text-thumbnails-title">Medical Supplement</a>
                    <p class="text-thumbnail text-thumbnails-content">
                            This is where text about your subject matter will appear. The words should look good together, but most importantly they should say something that the site’s visitors will want to read - ideally it might even help them.
                    </p>
                    <a class="text-thumbnail text-thumbnails-readmore">Read more...</a>
                </div>
              </a>
            </div>
          </div>
        </div>
    </div>
    <div class="container-description">
        <p class="text-description">
            New healthcare laws are coming. TrumpCare is seen as the replacement of Obamacare – and along with replacing it, it will also expand access to affordable, quality healthcare. Another name for TrumpCare is AHCA, which stands for the American Health Care Act of 2017.
            <br></br>
            Not sure what TrumpCare or the AHCA is? Here's a summary from the Statement of Administration Policy* on H.R. 1628, which is the bill that introduced the American Health Care Act of 2017 (AHCA).
            <br></br>
            "The AHCA offers patient-centered healthcare solutions that will promote innovation, reduce health insurance premiums, and empower doctors and patients to make healthcare choices. The AHCA makes significant and important changes as part of a three step process to repeal and replace the ACA."
            <br></br>
            "The AHCA would provide tax credits for Americans to promote affordability; improve Medicaid's sustainability and target resources to those most in need; and return healthcare choices to patients by expanding the use of health savings accounts. The AHCA also would provide for a stable transition from the onerous requirements of the ACA, while providing peace of mind to Americans with pre-existing conditions."
        </p>
    </div>
    <div class="footer">
        <p class="text-footer footer-right">Terms & Conditions | Contact Us | Privacy Policy | Unsubscribe</p>
        <p class="text-footer footer-left">Copyright © 2018 HealthScout. All rights reserved</p>
    </div>

    <script src="assets/script/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>