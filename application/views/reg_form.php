<script type="text/javascript" src="<?=base_url("assets/js/jquery-birthday-picker.min.js")?>"></script>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Registration</h3>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form name="registration" id="registration" method="POST" action="register" role="form" novalidate="">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                        <h5><b>Name</b></h5>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="First Name" name="firstName" required="" data-validation-required-message="Please enter your first name.">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Middle Name" name="midName">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Last Name" name="lastName" required data-validation-required-message="Please enter your last name.">
                        </div>
                    </div><br>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="username" name="username" required data-validation-required-message="Please enter a username">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="password" name="password" required="" data-validation-required-message="Please enter a password">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Re-enter password" name="confirm_pass" required="" data-validation-required-message="Please enter a matching password">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Date of Birth</label>
                            <div id="DOB" class="form-group col-xs-12 floating-label-form-group controls" style="padding-left: 0px;"></div><script>$("#DOB").birthdayPicker({"monthFormat":"long", "sizeClass": "span3","minAge": "10", "altField" : "#actualDate", "altFormat": "yyyy-mm-dd"});</script>
                         </div>
                    </div>
                    <div class="row control-group" style="margin-top: 5px;">
                        <div class="form-group has-feedback">
                            <label class="col-lg-3 control-label">Gender</label>
                            <div class="col-lg-5">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="M" data-bv-field="gender"> Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="F" data-bv-field="gender"> Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="O" data-bv-field="gender"> Other
                                    </label>
                                </div><i class="form-control-feedback" data-bv-icon-for="gender" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="gender" data-bv-result="NOT_VALIDATED" style="display: none;">The gender is required</small></div>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Institution</label>
                            <input type="email" class="form-control" placeholder="University, College or School" name="institution" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Programme</label>
                            <input type="email" class="form-control" placeholder="Programme of study" name="program" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Level</label>
                            <input type="email" class="form-control" placeholder="Level" name="level" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Contact Number</label>
                            <input type="phone" class="form-control" placeholder="Contact Number" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>WhatsApp Number</label>
                            <input type="phone" class="form-control" placeholder="WhatApp Contact" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <input name="agreement" id="agreement" onchange="btn('sumbit')" type="checkbox"/> I Agree to all the <a href="policies.php">terms and conditions</a>.
                         </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-lg btn-primary" style="width:200px" placeholder="Sign Up" />
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
