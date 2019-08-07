<!--
    #TODO  
    Gender radio button validation
    current validation not working
-->
<script type="text/javascript" src="<?=base_url("assets/js/jquery-birthday-picker.min.js")?>"></script>
<link rel="stylesheet" href="<?=base_url("assets/font-awesome/css/font-awesome.min.css")?>">
<style type="text/css">
    .birthdayPicker{
        display: block !important;
    }
    fieldset input{
        color: #000 !important;
    }
    .content{
        background: white;
        height: inherit;
    }
    .content > .container{
        padding-bottom: 10px;
    }
    input[type="text"], 
    input[type="password"], 
    textarea, 
    textarea.form-control {
        height: 44px;
        margin: 0;
        padding: 0 20px;
        vertical-align: middle;
        background: #fff;
        border: 1px solid #ddd;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 44px;
        color: #888;
        -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
        -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
        -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
    }

    textarea, 
    textarea.form-control {
        height: 90px;
        padding-top: 8px;
        padding-bottom: 8px;
        line-height: 30px;
    }

    input[type="text"]:focus, 
    input[type="password"]:focus, 
    input[type="email"]:focus ,
    input[type="number"]:focus,
    input[type="phone"]:focus{
        outline: 0;
        background: #fff;
        border: 1px solid #ccc;
        -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    }

    input[type="text"]:-moz-placeholder, input[type="password"]:-moz-placeholder, 
    textarea:-moz-placeholder, textarea.form-control:-moz-placeholder { color: #888; }

    input[type="text"]:-ms-input-placeholder, input[type="password"]:-ms-input-placeholder, 
    textarea:-ms-input-placeholder, textarea.form-control:-ms-input-placeholder { color: #888; }

    input[type="text"]::-webkit-input-placeholder, input[type="password"]::-webkit-input-placeholder, 
    textarea::-webkit-input-placeholder, textarea.form-control::-webkit-input-placeholder { color: #888; }

    label { font-weight: 300; }

    .birthMonth, .birthDate, .birthYear{
        margin: 5px 2px;
        width: 30%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.428571429;
        color: #555;
        vertical-align: middle;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
        -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    }

    button.btn {
        min-width: 105px;
        height: 40px;
        margin: 0;
        padding: 0 20px;
        vertical-align: middle;
        border: 0;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 40px;
        color: #fff;
        -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
        text-shadow: none;
        -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
        -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
    }

    button.btn:hover { opacity: 0.6; color: #fff; }
    button.btn:active { outline: 0; opacity: 0.6; color: #fff; -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none; }
    button.btn:focus,
    button.btn:active:focus,
    button.btn.active:focus { outline: 0; opacity: 0.6; color: #fff; }

    button.btn.btn-next,
    button.btn.btn-next:focus,
    button.btn.btn-next:active:focus, button.btn.btn-next.active:focus { background: #f35b3f; }

    button.btn.btn-submit,
    button.btn.btn-submit:focus,
    button.btn.btn-submit:active:focus, button.btn.btn-submit.active:focus { background: #f35b3f; }

    button.btn.btn-previous,
    button.btn.btn-previous:focus,
    button.btn.btn-previous:active:focus, button.btn.btn-previous.active:focus { background: #bbb; }
    .form-box { padding-top: 40px; }

.f1 {
    padding: 25px; background: #fff;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}
.f1 h3 { margin-top: 0; margin-bottom: 5px; text-transform: uppercase; }

.f1-steps { overflow: hidden; position: relative; margin-top: 20px; }

.f1-progress { position: absolute; top: 24px; left: 0; width: 100%; height: 1px; background: #ddd; }
.f1-progress-line { position: absolute; top: 0; left: 0; height: 1px; background: #f35b3f; }

.f1-step { position: relative; float: left; width: 33.333333%; padding: 0 5px; }

.f1-step-icon {
    display: inline-block; width: 40px; height: 40px; margin-top: 4px; background: #ddd;
    font-size: 16px; color: #fff; line-height: 40px;
    -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%;
    position: relative;
    right: 5px;
}
.f1-step-icon > i{
    position: relative;
    left: 15px;
}
.f1-step.activated .f1-step-icon {
    background: #fff; border: 1px solid #f35b3f; color: #f35b3f; line-height: 38px;
}
.f1-step.active .f1-step-icon {
    width: 48px; height: 48px; margin-top: 0; background: #f35b3f; font-size: 22px; line-height: 48px;
}

.f1-step p { color: #ccc; }
.f1-step.activated p { color: #f35b3f; }
.f1-step.active p { color: #f35b3f; }

.f1 fieldset { display: none; text-align: left; }

.f1-buttons { text-align: right; }

.f1 .input-error { border-color: #f35b3f; }
.user-type-picker{
    margin-left: 10px;
    margin: 8px 22px;
    width: 200px;
    height: 35px !important;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    vertical-align: middle;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}


/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}


@media (max-width: 415px) {
    
    h1, h2 { font-size: 32px; }
    
    .f1 { padding-bottom: 20px; }
    .f1-buttons button { margin-bottom: 5px; }

}

.selectpicker {
    width: 150px;
    height: 30px;
    border-radius: 10px;
    font-size: 1.3em;
    text-align: center;
}
</style>
<script type="text/javascript">
    function user_type(type)
    {
        if(type == "student")
        {
            $(".student-form").css('display', 'block');
        }
        else
        {
            $(".student-form").css('display', 'none');
        }
    }
</script>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form role="form" action="register" method="post" class="f1">
                    <h3>Registration</h3>
                    <div class="f1-steps">
                        <div class="f1-progress">
                            <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                        </div>
                        <div class="f1-step active">
                            <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                            <p class="f1-title">Basic Information</p>
                        </div>
                        <div class="f1-step">
                            <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                            <p class="f1-title">Personalisation</p>
                        </div>
                        <div class="f1-step">
                            <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                            <p class="f1-title">Complete</p>
                        </div>
                    </div>
                    
                    <fieldset>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First Name(s)" name="firstName" autocomplete="on" required="" data-validation-required-message="Please enter your first name.">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name" name="lastName" autocomplete="on" required data-validation-required-message="Please enter your last name.">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="username" name="username" autocomplete="on" required data-validation-required-message="Please enter a username">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                             <label>Password</label>
                            <input type="password" class="form-control" placeholder="password" name="password" required data-validation-required-message="Please enter a password">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Re-enter password" name="confirm_pass" required="" data-validation-required-message="Please enter a matching password">
                            <p class="help-block text-danger"></p>
                        </div>
                        
                         <div class="form-group">
                            <label>Date of Birth</label>
                            <div id="DOB" class="form-group col-xs-12 floating-label-form-group controls" style="padding-left: 0px;"></div>
                                <script>
                                    $("#DOB").birthdayPicker({"monthFormat":"long", "sizeClass": "span3","minAge": "10", "altField" : "#actualDate", "altFormat": "yyyy-mm-dd"});
                                </script>
                         </div>

                         <div class="form-group row">
                            <label class="col-lg-3 col-md-3  control-label">Gender</label>
                            <div class="col-lg-9 col-md-9 ">
                                <div class="radio col-lg-4 col-md-4 " style="margin-top: 5px;">
                                    <label><input type="radio" name="gender" value="M" data-bv-field="gender" required> Male</label>
                                </div>
                                <div class="radio col-lg-4 col-md-4 " style="margin-top: 5px;">
                                    <label><input type="radio" name="gender" value="F" data-bv-field="gender"> Female</label>
                                </div>
                                <i class="form-control-feedback" data-bv-icon-for="gender" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="gender" data-bv-result="NOT_VALIDATED" style="display: none;">The gender is required</small></div>
                            </div>
                        <div class="f1-buttons">
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>

                    <fieldset>
                        <h4>Help us personalise your news:</h4>
                        <div class="form-group">
                            <label>Register As a</label>
                            <select name="user" class="selectpicker form-group user-type-picker" onchange="user_type(this.value)">
                                <option value="student">Student</option>
                                <option value="guest">Guest</option>
                            </select>
                        </div>
                        <div class="form-group student-form"id="insti">
                            <label>Institution</label>
                            <input type="text" class="form-control" placeholder="University, College or School" value="  " name="institution" required data-validation-required-message="Please enter your email address.">
                        </div>
                        <div class="form-group student-form">
                            <label>Programme</label>
                            <input type="text" class="form-control" placeholder="Programme of study" name="program" value="  " required data-validation-required-message="Please enter your email address.">
                        </div>
                        <div class="form-group student-form">
                            <label>Level</label>
                            <input type="number" class="form-control" placeholder="Level" name="level" value="0" required data-validation-required-message="Please enter your email address.">
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="phone" class="form-control" placeholder="Contact Number" name="phone" required data-validation-required-message="Please enter your email address.">
                        </div>
                        <div class="form-group">
                            <label>WhatsApp Number</label>
                            <input type="phone" class="form-control" placeholder="WhatApp Contact" name="whatsapp" required data-validation-required-message="Please enter your email address.">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-email">Email</label>
                            <input type="text" name="email" placeholder="Email" class="f1-email form-control" id="email">
                        </div>
                        <div class="f1-buttons">
                            <button type="button" class="btn btn-previous">Previous</button>
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>

                    <fieldset>
                        <h4>Agree to terms and conditions</h4>
                        <div class="form-group">
                            <input name="agreement" id="agreement" required="" type="checkbox"/> I Agree to all the <a href="policies.php">terms and conditionsm</a> of campusFila.com.
                         </div>
                        <div class="f1-buttons">
                            <button type="button" class="btn btn-previous">Previous</button>
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </div>
                    </fieldset>
                </form>
                <script type="text/javascript">    
                    function scroll_to_class(element_class, removed_height) {
                        var scroll_to = $(element_class).offset().top - removed_height;
                        if($(window).scrollTop() != scroll_to) {
                            $('html, body').stop().animate({scrollTop: scroll_to}, 0);
                        }
                    }

                    function bar_progress(progress_line_object, direction) {
                        var number_of_steps = progress_line_object.data('number-of-steps');
                        var now_value = progress_line_object.data('now-value');
                        var new_value = 0;
                        if(direction == 'right') {
                            new_value = now_value + ( 100 / number_of_steps );
                        }
                        else if(direction == 'left') {
                            new_value = now_value - ( 100 / number_of_steps );
                        }
                        progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
                    }

                    jQuery(document).ready(function() {
                        $('.f1 fieldset:first').fadeIn('slow');
                        
                        $('.f1 input[type="text"], .f1 input[type="password"], .f1 input[type="email"], .f1 input[type="radio"], .f1 input[type="number"], .f1 input[type="phone"]').on('focus', function() {
                            $(this).removeClass('input-error');
                        });
                        
                        // next step
                        $('.f1 .btn-next').on('click', function() {
                            var parent_fieldset = $(this).parents('fieldset');
                            var next_step = true;
                            // navigation steps / progress steps
                            var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                            var progress_line = $(this).parents('.f1').find('.f1-progress-line');
                            
                            // fields validation
                            parent_fieldset.find('input[type="text"], input[type="password"], input[type="phone"], input[type="number"], input[type="radio"]').each(function() {
                                if( $(this).val() == "" ) {
                                    $(this).addClass('input-error');
                                    next_step = false;
                                }
                                else {
                                    $(this).removeClass('input-error');
                                }
                            });
                            
                            if( next_step ) {
                                parent_fieldset.fadeOut(400, function() {
                                    // change icons
                                    current_active_step.removeClass('active').addClass('activated').next().addClass('active');
                                    // progress bar
                                    bar_progress(progress_line, 'right');
                                    // show next step
                                    $(this).next().fadeIn();
                                    // scroll window to beginning of the form
                                    scroll_to_class( $('.f1'), 20 );
                                });
                            }
                            
                        });
                        
                        // previous step
                        $('.f1 .btn-previous').on('click', function() {
                            // navigation steps / progress steps
                            var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                            var progress_line = $(this).parents('.f1').find('.f1-progress-line');
                            
                            $(this).parents('fieldset').fadeOut(400, function() {
                                // change icons
                                current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
                                // progress bar
                                bar_progress(progress_line, 'left');
                                // show previous step
                                $(this).prev().fadeIn();
                                // scroll window to beginning of the form
                                scroll_to_class( $('.f1'), 20 );
                            });
                        });
                        
                        // submit
                        $('.f1').on('submit', function(e) {
                            
                            // fields validation
                            $(this).find('input[type="text"], input[type="password"], textarea').each(function() {
                                if( $(this).val() == "" ) {
                                    e.preventDefault();
                                    $(this).addClass('input-error');
                                }
                                else {
                                    $(this).removeClass('input-error');
                                }
                            });
                            // fields validation
                            
                        });
                        
                        
                    });
                </script>
            </div>
        </div>
    </div>
