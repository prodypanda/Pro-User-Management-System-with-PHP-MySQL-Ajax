<?php include 'app/inc/header.php'; ?>

<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $inserUser = $usr->createNewUserData($_POST, $_FILES);

}


 ?>


<!--====== Start Main Wrapper Section======-->
<section class="d-flex" id="wrapper">

   <?php include 'app/inc/sidebar.php'; ?>

   <div class="page-content-wrapper">
      <!--  Header BreadCrumb -->
      <div class="content-header">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php"><i class="material-icons">home</i>Home</a></li>
               <li class="breadcrumb-item"><a href="users.php">Users</a></li>
               <li class="breadcrumb-item active" aria-current="page">Add new User</li>
            </ol>
         </nav>
         <div class="create-item">

            <a href="adduser.php" class="theme-primary-btn btn btn-primary"><i class="material-icons">add</i>Create
               user</a>



         </div>
      </div>
      <!--  Header BreadCrumb -->
      <?php 

          if (isset($inserUser)) {
              echo $inserUser;
              
          }

         ?>
      <!-- Create New User -->
      <div class="main-content">

         <div class="card bg-white">
            <div class="card-body mt-5 mb-5">

               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

                  <div class="form-group row">
                     <div class="col-md-2">Name</div>
                     <div class="col-md-8">
                        <input id="name" type="text" placeholder="Please enter your name" class="form-control"
                           name="name" value="" autofocus="">

                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-2">Phone number</div>
                     <div class="col-md-4">
                        <input id="phone" type="text" placeholder="Please enter your Phone number" class="form-control"
                           name="phone" value="" autofocus="">

                     </div>
                  </div>

                  <div class="form-group row">
                     <div class="col-md-2">Address</div>
                     <div class="col-md-8">
                        <input id="address" type="text" placeholder="Please enter your Address" class="form-control"
                           name="address" value="" autofocus="">

                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-2">About yourself</div>
                     <div class="col-md-8">
                        <textarea name="information" placeholder="About yourself" id="information" class="form-control"
                           cols="4" rows="4"></textarea>

                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-2">E-Mail Address</div>
                     <div class="col-md-4">
                        <input id="email" type="email" placeholder="Enter your Email please" class="form-control"
                           name="email" value="" autofocus="">

                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-2">City</div>
                     <div class="col-md-4">
                        <input id="city" type="text" placeholder="Please enter your City" class="form-control"
                           name="city" value="" autofocus="">

                     </div>
                  </div>

                  <div class="form-group row">
                     <div class="col-md-2">Country</div>
                     <div class="col-md-4">
                        <select class="form-control" id="country" name="country">
                           <option>Select your Country</option>
                           <option value="Afganistan">Afghanistan</option>
                           <option value="Albania">Albania</option>
                           <option value="Algeria">Algeria</option>
                           <option value="American Samoa">American Samoa</option>
                           <option value="Andorra">Andorra</option>
                           <option value="Angola">Angola</option>
                           <option value="Anguilla">Anguilla</option>
                           <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                           <option value="Argentina">Argentina</option>
                           <option value="Armenia">Armenia</option>
                           <option value="Aruba">Aruba</option>
                           <option value="Australia">Australia</option>
                           <option value="Austria">Austria</option>
                           <option value="Azerbaijan">Azerbaijan</option>
                           <option value="Bahamas">Bahamas</option>
                           <option value="Bahrain">Bahrain</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Barbados">Barbados</option>
                           <option value="Belarus">Belarus</option>
                           <option value="Belgium">Belgium</option>
                           <option value="Belize">Belize</option>
                           <option value="Benin">Benin</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Bhutan">Bhutan</option>
                           <option value="Bolivia">Bolivia</option>
                           <option value="Bonaire">Bonaire</option>
                           <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                           <option value="Botswana">Botswana</option>
                           <option value="Brazil">Brazil</option>
                           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                           <option value="Brunei">Brunei</option>
                           <option value="Bulgaria">Bulgaria</option>
                           <option value="Burkina Faso">Burkina Faso</option>
                           <option value="Burundi">Burundi</option>
                           <option value="Cambodia">Cambodia</option>
                           <option value="Cameroon">Cameroon</option>
                           <option value="Canada">Canada</option>
                           <option value="Canary Islands">Canary Islands</option>
                           <option value="Cape Verde">Cape Verde</option>
                           <option value="Cayman Islands">Cayman Islands</option>
                           <option value="Central African Republic">Central African Republic</option>
                           <option value="Chad">Chad</option>
                           <option value="Channel Islands">Channel Islands</option>
                           <option value="Chile">Chile</option>
                           <option value="China">China</option>
                           <option value="Christmas Island">Christmas Island</option>
                           <option value="Cocos Island">Cocos Island</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Comoros">Comoros</option>
                           <option value="Congo">Congo</option>
                           <option value="Cook Islands">Cook Islands</option>
                           <option value="Costa Rica">Costa Rica</option>
                           <option value="Cote DIvoire">Cote DIvoire</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cuba">Cuba</option>
                           <option value="Curaco">Curacao</option>
                           <option value="Cyprus">Cyprus</option>
                           <option value="Czech Republic">Czech Republic</option>
                           <option value="Denmark">Denmark</option>
                           <option value="Djibouti">Djibouti</option>
                           <option value="Dominica">Dominica</option>
                           <option value="Dominican Republic">Dominican Republic</option>
                           <option value="East Timor">East Timor</option>
                           <option value="Ecuador">Ecuador</option>
                           <option value="Egypt">Egypt</option>
                           <option value="El Salvador">El Salvador</option>
                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                           <option value="Eritrea">Eritrea</option>
                           <option value="Estonia">Estonia</option>
                           <option value="Ethiopia">Ethiopia</option>
                           <option value="Falkland Islands">Falkland Islands</option>
                           <option value="Faroe Islands">Faroe Islands</option>
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                           <option value="French Guiana">French Guiana</option>
                           <option value="French Polynesia">French Polynesia</option>
                           <option value="French Southern Ter">French Southern Ter</option>
                           <option value="Gabon">Gabon</option>
                           <option value="Gambia">Gambia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Ghana">Ghana</option>
                           <option value="Gibraltar">Gibraltar</option>
                           <option value="Great Britain">Great Britain</option>
                           <option value="Greece">Greece</option>
                           <option value="Greenland">Greenland</option>
                           <option value="Grenada">Grenada</option>
                           <option value="Guadeloupe">Guadeloupe</option>
                           <option value="Guam">Guam</option>
                           <option value="Guatemala">Guatemala</option>
                           <option value="Guinea">Guinea</option>
                           <option value="Guyana">Guyana</option>
                           <option value="Haiti">Haiti</option>
                           <option value="Hawaii">Hawaii</option>
                           <option value="Honduras">Honduras</option>
                           <option value="Hong Kong">Hong Kong</option>
                           <option value="Hungary">Hungary</option>
                           <option value="Iceland">Iceland</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="India">India</option>
                           <option value="Iran">Iran</option>
                           <option value="Iraq">Iraq</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Isle of Man">Isle of Man</option>
                           <option value="Israel">Israel</option>
                           <option value="Italy">Italy</option>
                           <option value="Jamaica">Jamaica</option>
                           <option value="Japan">Japan</option>
                           <option value="Jordan">Jordan</option>
                           <option value="Kazakhstan">Kazakhstan</option>
                           <option value="Kenya">Kenya</option>
                           <option value="Kiribati">Kiribati</option>
                           <option value="Korea North">Korea North</option>
                           <option value="Korea Sout">Korea South</option>
                           <option value="Kuwait">Kuwait</option>
                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                           <option value="Laos">Laos</option>
                           <option value="Latvia">Latvia</option>
                           <option value="Lebanon">Lebanon</option>
                           <option value="Lesotho">Lesotho</option>
                           <option value="Liberia">Liberia</option>
                           <option value="Libya">Libya</option>
                           <option value="Liechtenstein">Liechtenstein</option>
                           <option value="Lithuania">Lithuania</option>
                           <option value="Luxembourg">Luxembourg</option>
                           <option value="Macau">Macau</option>
                           <option value="Macedonia">Macedonia</option>
                           <option value="Madagascar">Madagascar</option>
                           <option value="Malaysia">Malaysia</option>
                           <option value="Malawi">Malawi</option>
                           <option value="Maldives">Maldives</option>
                           <option value="Mali">Mali</option>
                           <option value="Malta">Malta</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Martinique">Martinique</option>
                           <option value="Mauritania">Mauritania</option>
                           <option value="Mauritius">Mauritius</option>
                           <option value="Mayotte">Mayotte</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Midway Islands">Midway Islands</option>
                           <option value="Moldova">Moldova</option>
                           <option value="Monaco">Monaco</option>
                           <option value="Mongolia">Mongolia</option>
                           <option value="Montserrat">Montserrat</option>
                           <option value="Morocco">Morocco</option>
                           <option value="Mozambique">Mozambique</option>
                           <option value="Myanmar">Myanmar</option>
                           <option value="Nambia">Nambia</option>
                           <option value="Nauru">Nauru</option>
                           <option value="Nepal">Nepal</option>
                           <option value="Netherland Antilles">Netherland Antilles</option>
                           <option value="Netherlands">Netherlands (Holland, Europe)</option>
                           <option value="Nevis">Nevis</option>
                           <option value="New Caledonia">New Caledonia</option>
                           <option value="New Zealand">New Zealand</option>
                           <option value="Nicaragua">Nicaragua</option>
                           <option value="Niger">Niger</option>
                           <option value="Nigeria">Nigeria</option>
                           <option value="Niue">Niue</option>
                           <option value="Norfolk Island">Norfolk Island</option>
                           <option value="Norway">Norway</option>
                           <option value="Oman">Oman</option>
                           <option value="Pakistan">Pakistan</option>
                           <option value="Palau Island">Palau Island</option>
                           <option value="Palestine">Palestine</option>
                           <option value="Panama">Panama</option>
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <option value="Paraguay">Paraguay</option>
                           <option value="Peru">Peru</option>
                           <option value="Phillipines">Philippines</option>
                           <option value="Pitcairn Island">Pitcairn Island</option>
                           <option value="Poland">Poland</option>
                           <option value="Portugal">Portugal</option>
                           <option value="Puerto Rico">Puerto Rico</option>
                           <option value="Qatar">Qatar</option>
                           <option value="Republic of Montenegro">Republic of Montenegro</option>
                           <option value="Republic of Serbia">Republic of Serbia</option>
                           <option value="Reunion">Reunion</option>
                           <option value="Romania">Romania</option>
                           <option value="Russia">Russia</option>
                           <option value="Rwanda">Rwanda</option>
                           <option value="St Barthelemy">St Barthelemy</option>
                           <option value="St Eustatius">St Eustatius</option>
                           <option value="St Helena">St Helena</option>
                           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                           <option value="St Lucia">St Lucia</option>
                           <option value="St Maarten">St Maarten</option>
                           <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                           <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                           <option value="Saipan">Saipan</option>
                           <option value="Samoa">Samoa</option>
                           <option value="Samoa American">Samoa American</option>
                           <option value="San Marino">San Marino</option>
                           <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                           <option value="Saudi Arabia">Saudi Arabia</option>
                           <option value="Senegal">Senegal</option>
                           <option value="Seychelles">Seychelles</option>
                           <option value="Sierra Leone">Sierra Leone</option>
                           <option value="Singapore">Singapore</option>
                           <option value="Slovakia">Slovakia</option>
                           <option value="Slovenia">Slovenia</option>
                           <option value="Solomon Islands">Solomon Islands</option>
                           <option value="Somalia">Somalia</option>
                           <option value="South Africa">South Africa</option>
                           <option value="Spain">Spain</option>
                           <option value="Sri Lanka">Sri Lanka</option>
                           <option value="Sudan">Sudan</option>
                           <option value="Suriname">Suriname</option>
                           <option value="Swaziland">Swaziland</option>
                           <option value="Sweden">Sweden</option>
                           <option value="Switzerland">Switzerland</option>
                           <option value="Syria">Syria</option>
                           <option value="Tahiti">Tahiti</option>
                           <option value="Taiwan">Taiwan</option>
                           <option value="Tajikistan">Tajikistan</option>
                           <option value="Tanzania">Tanzania</option>
                           <option value="Thailand">Thailand</option>
                           <option value="Togo">Togo</option>
                           <option value="Tokelau">Tokelau</option>
                           <option value="Tonga">Tonga</option>
                           <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                           <option value="Tunisia">Tunisia</option>
                           <option value="Turkey">Turkey</option>
                           <option value="Turkmenistan">Turkmenistan</option>
                           <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                           <option value="Tuvalu">Tuvalu</option>
                           <option value="Uganda">Uganda</option>
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="Ukraine">Ukraine</option>
                           <option value="United Arab Erimates">United Arab Emirates</option>
                           <option value="United States of America">United States of America</option>
                           <option value="Uraguay">Uruguay</option>
                           <option value="Uzbekistan">Uzbekistan</option>
                           <option value="Vanuatu">Vanuatu</option>
                           <option value="Vatican City State">Vatican City State</option>
                           <option value="Venezuela">Venezuela</option>
                           <option value="Vietnam">Vietnam</option>
                           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                           <option value="Wake Island">Wake Island</option>
                           <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                           <option value="Yemen">Yemen</option>
                           <option value="Zaire">Zaire</option>
                           <option value="Zambia">Zambia</option>
                           <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-2">Password</div>
                     <div class="col-md-8">
                        <input id="password" type="password" placeholder="Enter your Password" class="form-control"
                           name="password" value="" autofocus="">

                     </div>
                  </div>

                  <div class="form-group row">
                     <div class="col-md-2">Confirm Password</div>
                     <div class="col-md-8">
                        <input id="confirm_password" type="text" placeholder="Please confirm your password"
                           class="form-control" name="confirm_password" value="" autofocus="">

                     </div>
                  </div>
                  <?php if ( isset($access) == '$access' ) { ?>
                  <div class="form-group row">
                     <div class="col-md-2">Role</div>
                     <div class="col-md-4">
                        <select class="form-control" id="rolename" name="rolename">
                           <option>Select user Role</option>
                           <?php 

                                    $rolelist = $rol->selectAllRole();
                                    if ($rolelist) {
                                        
                                        while ($result = $rolelist->fetch_assoc()) {
                                            
                                          

                                 ?>

                           <option value="<?php echo $result['rolename']; ?>"><?php echo $result['rolename']; ?>
                           </option>
                           <?php }}else{  ?>

                           <option>No user Role created</option>
                           <?php } ?>

                        </select>
                     </div>
                  </div>
                  <?php }else{ ?>

                  <input type="hidden" value="Only user" name="rolename">


                  <?php } ?>
                  <div class="form-group row">
                     <div class="col-md-2">Status</div>
                     <div class="col-md-4">
                        <select class="form-control" id="status" name="status">
                           <option>Select user Status</option>
                           <option value="0">Active</option>
                           <option value="1">Deactive</option>

                        </select>
                     </div>
                  </div>


                  <div class="form-group row">
                     <div class="col-md-2">Gendar</div>
                     <div class="col-md-4">
                        <select class="form-control" id="gendar" name="gendar">
                           <option>Select your gendar</option>
                           <option value="male">Male</option>
                           <option value="female">Female</option>

                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-2">Account create Date</div>
                     <div class="col-md-4">

                        <div class="input-group date" id="id_0">
                           <input type="text" name="create_date" value="" class="form-control" />
                           <div class="input-group-addon input-group-append">
                              <div class="input-group-text">
                                 <i class="icofont-ui-calendar"></i>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-2 pt-5">Upload profile photo</div>
                     <div class="col-md-4">
                        <div class="add-photo">
                           <div id='img_contain'>
                              <img id="preview-thumb" align='middle' src="app/uploads/userAvatar/dev.jpg"
                                 alt="your image" title='' />
                           </div>
                           <div class="fileUploadInput">
                              <input type="file" name="profilePhoto" id="file-input-profile" />
                              <button class="input-file-btn"><i class="material-icons"> cloud_upload </i></button>
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="form-group pt-2 row">
                     <div class="col-md-2"></div>
                     <div class="col-md-4">
                        <button class="theme-primary-btn btn btn-success" type="submit" name="submit">Create
                           User</button>
                        <button class="btn btn-warning text-white" type="reset">Reset</button>
                     </div>
                  </div>

               </form>

            </div>
         </div>
      </div>
      <!-- Create New User-->


      <div class="row mt-3">

         <div class="col-md-12">
            <div class="card ">
               <div class="card-body footer-p">
                  <p>Design and developed by Nababur rahaman send a thanks giving mail or do you want any support :)
                     <a href="mailto:nababurdev@gmail.com">nababurdev@gmail.com</a>
                  </p>
                  <p>Do you want to develop any php or laravel or wordpress project ? send a mail:) <a
                        href="mailto:nababurdev@gmail.com">nababurdev@gmail.com</a> </p>
                  <p>CEO of GridTemaplate: <a target="_blank"
                        href="https://www.gridtemplate.com/">https://www.gridtemplate.com/</a>
                  </p>
                  <p>Connect with Github: <a target="_blank"
                        href="https://github.com/nababur">https://github.com/nababur</a>
                  </p>

               </div>
            </div>
         </div>


      </div>


   </div>
   <!--  main-content -->
   </div>

</section>

<!--====== End Main Wrapper Section======-->


<?php include 'app/inc/footer.php'; ?>