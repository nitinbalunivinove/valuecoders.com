<?php
/*
Template Name: Contact Page - v3 MS Template
*/ 

/*
$csrf_token = ( isset( $_SESSION['vc-csrf'] ) &&  is_array( $_SESSION['vc-csrf'] ) && ( count( $_SESSION['vc-csrf'] ) > 0  ) ) ? end( $_SESSION['vc-csrf'] ) : '';
*/

global $post;
$thisPostID = $post->ID;
get_header();
?>
<section class="contact-us-section full-width-form padding-t-150 padding-b-150">


	<div class="container">		
		<div class="step-info-box">
			<div class="step-box step-active" onclick="dovcstep_one();">
				<span class="num">1</span>
				<span class="step-info">Your Information</span>
			</div>
			<div class="step-box">
				<span class="num">2</span>
				<span class="step-info">Project Details</span>
			</div>
		</div>
		<div class="bg-voilet">
			<div class="form-box-outer right-box" style="padding-top:40px;">
				<div class="head-txt text-center">
				<?php 
				while( have_posts() ) : the_post();
					the_content();
				endwhile;
				?>			
				</div>
				<form action="<?php bloginfo('url'); ?>/sendmail1.php" enctype="multipart/form-data" method="POST" id="contact-form-section"  onsubmit="return vcCmnFormValidation();"  style="margin-top:40px;">
					<div id="vc-fstep1" class="step-one">
					<div class="form-inner">
						<div class="form-text-cont">
							<label for="focusInput">Full Name*</label>
							<div class="user-input">
								<input type="text" id="cont_name" placeholder="Enter your full name" class="input-field" value="" maxlength="50" name="user-name" />
								<small>Error Message</small>
							</div>
						</div>
						<div class="form-text-cont">
							<label>Email Address*</label>
							<div class="user-input">
								<input type="text" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}$" placeholder="Enter your email address" class="input-field" value="" maxlength="50" name="user-email" id="cont_email" />
								<small>Error Message</small>
							</div>
						</div>
						<div class="form-text-cont">
							<label>Phone Number*</label>
							<div class="user-input">
								<input type="text" class="input-field" placeholder="Enter your Phone Number" value="" id="cont_phpne" maxlength="18" onkeydown="checkphonenumber(event)" name="user-phone"/>
								<small>Error Message</small>
							</div>
						</div>
						<div class="form-text-cont">
							<label>Country*</label>
							<div class="user-input">
								<input class="input-field input-skype" id="cont_country" type="text" placeholder="Enter your country" autocomplete="off" value="" name="user-country" />
								<small>Error Message</small>
							</div>
						</div>

						<!-- #new Fields Add Here -->
						<div id="help-ul" class="form-text-cont width-full">
							<label>How can we help?*</label>
							<div class="select-box input-field" onclick="apnSelect('help-ul');">
								<input type="hidden" id="inp-we-help" name="we-help" value="">
								<small></small>
								<a href="javascript:void(0);" class="select-first" id="label-wehelp">Please Select from the dropdown</a> <span class="arrow-btn"></span>
							</div>
							<div class="select-list">
								<ul class="in-options">
									<li onclick="setoptValue('Software Development', 'target-div', 'label-wehelp', 'inp-we-help', 'help-ul', this);">Software Development
										<div class="info-box">
											<em>i</em>
											<span class="info">For custom software development and fixed cost projects.</span>
										</div>
									</li>

									<li onclick="setoptValue('Team Extension', 'team-ext-col', 'label-wehelp', 
									'inp-we-help', 'help-ul', this);">Team Extension (Staff Augmentation)
										<div class="info-box">
											<em>i</em>
											<span class="info">Augment your team with expert software engineers.</span>
										</div>
									</li>

									<li onclick="setoptValue('Dedicated Software Team', 'target-div', 'label-wehelp', 'inp-we-help', 'help-ul', this);">Dedicated Software Team
										<div class="info-box">
											<em>i</em>
											<span class="info">Dedicated autonomous software product engineering teams comprising of multiple skills.</span>
										</div>
									</li>
									
									<li onclick="setoptValue('Other Technology Needs', 'target-div', 'label-wehelp', 'inp-we-help', 'help-ul', this);">Other Technology Needs
										<div class="info-box">
											<em>i</em>
											<span class="info">Any other world-class technology solution that you may need.</span>
										</div>
									</li>

									<li onclick="setoptValue('None of the above', 'target-div', 'label-wehelp', 
									'inp-we-help', 'help-ul', this);">None of the above
										<div class="info-box">
											<em>i</em>
											<span class="info">Connect with our business consultant to discuss your requirements.</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<a class="nxt-btn" href="javascript:void(0);" onclick="vcStepOneCheckert();">Next</a>
						</div>
						</div><!--//Setp 1 Ends Here -->

						<div id="vc-fstep2" class="step-two" style="display:none;">
						<div id="exp-date-row" class="form-text-cont width-full">
						<label>What is the expected start date?*</label>
						<div class="select-box input-field" onclick="apnSelect('exp-date-row');">
							<input type="hidden" id="inp-expdate" name="expected-date" value="">
							<small></small>
							<a href="javascript:void(0);" id="label-expdate" class="select-first">Please Select from the dropdown</a> 
							<span class="arrow-btn"></span>
						</div>

						<div class="select-list">
							<ul class="in-options">
							<li onclick="setoptValue('I am already late', 'rb-other', 'label-expdate', 'inp-expdate', 'exp-date-row', this);">I am already late</li>
							<li onclick="setoptValue('Immediately', 'rb-other', 'label-expdate', 'inp-expdate', 'exp-date-row', this);">Immediately</li>
							<li onclick="setoptValue('When I get internal funding/approval', 'rb-other', 'label-expdate', 'inp-expdate', 'exp-date-row', this);">When I get internal funding/approval</li>
							<li onclick="setoptValue('Specify a date', 'radio-date', 'label-expdate', 'inp-expdate', 
							'exp-date-row', this);">Specify a date</li>
							<li onclick="setoptValue('I don\'t know', 'rb-other', 'label-expdate', 'inp-expdate', 
							'exp-date-row', this);">I don't know</li>
							</ul>
						</div>
						<div class="radio-date opt-div" id="radio-date" style="display:none;">
							<div class="radio-date-list">
								<input type="radio" id="oneMonth" name="expected-month" value="1 month" checked>
								<label for="oneMonth">1 month</label>
							</div>
							<div class="radio-date-list">
								<input type="radio" id="twoMonth" name="expected-month" value="2 months">
								<label for="twoMonth">2 months</label>
							</div>
							<div class="radio-date-list">
								<input type="radio" id="threeMonth" name="expected-month" value="3 months">
								<label for="threeMonth">3 months</label>
							</div>
							<div class="radio-date-list">
								<input type="radio" id="sixMonth" name="expected-month" value="6 months">
								<label for="sixMonth">6 months</label>
							</div>
						</div>
					</div>	
						<div class="form-text-cont width-full opt-div" id="team-ext-col" style="display:none;">
						<div id="many-eng" class="form-text-cont width-full">
							<label>How many engineers would you like to add?*</label>
							<div class="select-box input-field"  onclick="apnSelect('many-eng');">
							<input type="hidden" id="inp-resources" name="count-resources" value="">
							<small></small>	
							<a href="javascript:void(0);" id="label-resource-count" class="select-first">Please Select from the dropdown</a> <span class="arrow-btn"></span>
							</div>
							<div class="select-list">
								<ul class="in-options">
									<li onclick="setoptValue('1', 'sub-opt', 'label-resource-count', 'inp-resources', 'many-eng', this);">1</li>
									<li onclick="setoptValue('2-5', 'sub-opt', 'label-resource-count', 'inp-resources', 'many-eng', this);">2-5</li>
									<li onclick="setoptValue('6-10', 'sub-opt', 'label-resource-count', 'inp-resources', 'many-eng', this);">6-10</li>
									<li onclick="setoptValue('11-20', 'sub-opt', 'label-resource-count', 'inp-resources', 'many-eng', this);">11-20</li>
									<li onclick="setoptValue('More than 20', 'sub-opt', 'label-resource-count', 'inp-resources', 'many-eng', this);">More than 20</li>
									<li onclick="setoptValue('I don\'t know', 'sub-opt', 'label-resource-count', 'inp-resources', 'many-eng', this);">I don't know</li>
								</ul>
							</div>
						</div>

						<div id="how-long" class="form-text-cont width-full">
							<label>For how long will you need these engineers?*</label>
							<div class="select-box input-field" onclick="apnSelect('how-long');">
								<input type="hidden" id="inp-howlong" name="howlong" value="">
								<small></small>
								<a href="javascript:void(0);" id="label-howlong" class="select-first">Please Select from the dropdown</a> 
								<span class="arrow-btn"></span>
							</div>
							<div class="select-list">
								<ul class="in-options">
									<li onclick="setoptValue('1-3 Months', 'sub-opt', 'label-howlong', 'inp-howlong', 
									'how-long', this);">1-3 Months</li>
									<li onclick="setoptValue('3-6 Months', 'sub-opt', 'label-howlong', 'inp-howlong', 
									'how-long', this);">3-6 Months</li>
									<li onclick="setoptValue('6+ Months', 'sub-opt', 'label-howlong', 'inp-howlong', 
									'how-long', this);">6+ Months</li>
								</ul>
							</div>
						</div>
						</div>
						<div id="temp-tem-ext-dv"></div>
						

						<div class="form-text-cont width-full">
							<label>Requirement*</label>
							<div class="user-input">
								<textarea class="input-field comment-input" placeholder="Project Brief" id="user-req" name="user-req"></textarea>
								<small>Error Message</small>
								<div class="drop-input attachment_brw" id="uploadcontact">
								<div id="dropcontact"></div>
								</div>
								<div id="drop-area">
								<input type="file" name="files[]" id="fileElem" multiple accept="image/*,application/pdf,.psd,.zip,.docx,.xlsx,.xls,.txt" onchange="handleFiles(this.files)">								
								<label class="button" for="fileElem">BROWSE | DROP FILES HERE</label>
								<input type="hidden" name="up-counter" id="uplcounter" value="0">
								<progress style="display:none;" id="progress-bar" max=100 value=0></progress>			
								</div>
							</div>
						</div>
					
					<div id="gloader" class="gal-loader">
					<div class="loader"></div>
					<div id="gallery"></div>
					</div>
					<p id="file-type-error"></p>
					<div class="nda-button">
						<input type="checkbox" id="ndaButton" name="nda" value="Send me NDA">
						<label for="ndaButton">Send me NDA
							<div class="info-box">
								<em>i</em>
								<span class="info">A non-disclosure agreement (NDA) is a legally binding contract that establishes a confidential relationship. The party or parties signing the agreement agree that sensitive information they may obtain will not be made available to any others. An NDA may also be referred to as a confidentiality agreement. (credit: Investopedia)</span>
							</div>
						</label>
					</div>
					<div class="form-group">
						<div class="quizQ">
							<span id="j-quiz"></span>
							<a href="javascript:void(0)" ;="" class="refreshbtn" onclick="generateWsQuiz();"></a>
						</div>
						<span class="equal">=</span>
						<div class="quizAns">
							<input type="text" name="captcha" placeholder="??" id="j-quiz-ans" 
							onkeypress="cap_limit(this);">
							<span class="error" id="captchaerror"></span>
						</div>
					</div>
					<div class="user-input checkout">
						<input type="hidden" name="Uploadedfilename" id="Uploadedfilename" value="">
						<input type="hidden" name="frmqueryString" value="<?php the_permalink(); ?>">
						<input type="hidden" name="page_url" value="<?php the_permalink(); ?>">
						
						<input type="submit" id="submitButton" class="checkout-submit" value="Send your request" />
					</div>
					<p class="note">Note : We Respect Your Privacy! Your details will never be shared with anyone for marketing purposes.</p>
					</div><!-- //Step - 2 #Ends -->
				</form>
			</div>

			<div class="trusted-logos">
				<div class="dis-flex items-center justify-sb">
					<span class="text-box">Trusted By</span>
					<div class="logo-box">
						<picture>
							<source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/trusted-logos.webp">
							<source type="image/png" srcset="<?php bloginfo('template_url'); ?>/images/trusted-logos.png">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/trusted-logos.png" 
							alt="Valuecoders" width="786" height="104"> 
						</picture>

					</div>
				</div>
			</div>

		</div>
		<div class="form-footer dis-flex">
			<div class="left-block">
				<span class="title">Email Us</span>
				<a href="mailto:sales@valuecoders.com">sales@valuecoders.com</a>
				<span class="title">Whatsapp</span>
				<a href="tel:+917042020782">+917042020782</a>
			</div>
			<div class="mid-block dis-flex">
				<div class="flex-2">
					<span class="title">INDIA</span>
					<a href="tel:+917042020782">+91 704 202 0782</a>
				</div>
				<div class="flex-2">
					<span class="title">UK</span>
					<a href="tel:+442032392299">+44 20 3239 2299</a>
				</div>
				<div class="flex-2">
					<span class="title">USA</span>
					<a href="tel:+14152300123">+1 415 230 0123</a>
				</div>
				<div class="flex-2">
					<span class="title">AUS</span>
					<a href="tel:+61280058080">+61 2 8005 8080</a>
				</div>
			</div>
			<div class="last-block">
				<ul>
					<li><strong>Gurugram :</strong> 2nd Floor, 55P, Sector 44, Gurugram 122003, Haryana</li>
					<li><strong>Noida :</strong>  3rd Floor, Fusion Square, 5A & 5B, Sector 126, Noida 201303</li>
					<li><strong>Mohali :</strong> Bestech Business Tower, B- 4th floor 401, Sahibzada Ajit Singh Nagar, Punjab 160062</li>
				</ul>
			</div>
		</div>
</div>	
</section>	
<script type="text/javascript">
function autocomplete(inp, arr) {
	  /*the autocomplete function takes two arguments,
	  the text field element and an array of possible autocompleted values:*/
	  var currentFocus;
	  /*execute a function when someone writes in the text field:*/
	  inp.addEventListener("input", function(e) {
	      var a, b, i, val = this.value;
	      /*close any already open lists of autocompleted values*/
	      closeAllLists();
	      if (!val) { return false; }
	      currentFocus = -1;
	      /*create a DIV element that will contain the items (values):*/
	      a = document.createElement("DIV");
	      a.setAttribute("id", this.id + "autocomplete-list");
	      a.setAttribute("class", "autocomplete-items");
	      /*append the DIV element as a child of the autocomplete container:*/
	      this.parentNode.appendChild(a);
	      /*for each item in the array...*/
	      for (i = 0; i < arr.length; i++) {
	        /*check if the item starts with the same letters as the text field value:*/
	        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
				a.classList.add('has-data');
				/*create a DIV element for each matching element:*/
				b = document.createElement("DIV");
				/*make the matching letters bold:*/
				b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
				b.innerHTML += arr[i].substr(val.length);
				/*insert a input field that will hold the current array item's value:*/
				b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
				/*execute a function when someone clicks on the item value (DIV element):*/
				b.addEventListener("click", function(e) {
				/*insert the value for the autocomplete text field:*/
				inp.value = this.getElementsByTagName("input")[0].value;
				/*close the list of autocompleted values,
				(or any other open lists of autocompleted values:*/
				closeAllLists();
				});
				a.appendChild(b);
	        }
	      }
	  });
	  /*execute a function presses a key on the keyboard:*/
	  inp.addEventListener("keydown", function(e) {
	      var x = document.getElementById(this.id + "autocomplete-list");
	      if (x) x = x.getElementsByTagName("div");
	      if (e.keyCode == 40) {
	        /*If the arrow DOWN key is pressed,
	        increase the currentFocus variable:*/
	        currentFocus++;
	        /*and and make the current item more visible:*/
	        addActive(x);
	      } else if (e.keyCode == 38) { //up
	        /*If the arrow UP key is pressed,
	        decrease the currentFocus variable:*/
	        currentFocus--;
	        /*and and make the current item more visible:*/
	        addActive(x);
	      } else if (e.keyCode == 13) {
	        /*If the ENTER key is pressed, prevent the form from being submitted,*/
	        e.preventDefault();
	        if (currentFocus > -1) {
	          /*and simulate a click on the "active" item:*/
	          if (x) x[currentFocus].click();
	        }
	      }
	  });
	  function addActive(x) {
	    /*a function to classify an item as "active":*/
	    if (!x) return false;
	    /*start by removing the "active" class on all items:*/
	    removeActive(x);
	    if (currentFocus >= x.length) currentFocus = 0;
	    if (currentFocus < 0) currentFocus = (x.length - 1);
	    /*add class "autocomplete-active":*/
	    x[currentFocus].classList.add("autocomplete-active");
	  }
	  function removeActive(x) {
	    /*a function to remove the "active" class from all autocomplete items:*/
	    for (var i = 0; i < x.length; i++) {
	      x[i].classList.remove("autocomplete-active");
	    }
	  }
	  function closeAllLists(elmnt) {
	    /*close all autocomplete lists in the document,
	    except the one passed as an argument:*/
	    var x = document.getElementsByClassName("autocomplete-items");
	    for (var i = 0; i < x.length; i++) {
	      if (elmnt != x[i] && elmnt != inp) {
	        x[i].parentNode.removeChild(x[i]);
	      }
	    }
	  }
	  /*execute a function when someone clicks in the document:*/
	  document.addEventListener("click", function (e) {
	      closeAllLists(e.target);
	      });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","zMonaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("cont_country"), countries);
</script>
<style type="text/css">
.cont_country_section{
position: relative;
}
.autocomplete-items {
    position: absolute;
    border-bottom: none;
    border-top: none;
    z-index: 99;
    top: 100%;
    left: 0;
    right: 0;
    overflow: auto;
    min-height: 50px;
    height: 150px;
    /*background: #181732;*/
}
.autocomplete-items div {
    padding: 10px;
    cursor: pointer;
    color: #000;
    border-bottom: 1px solid #d4d4d4;
}
.err{
    border:1px solid red !important;
    color:red;
}
.onfcs{
    border:0px solid red !important;
    color:black;
}
#drop-area.highlight {
  /*border-color: purple;*/
}
p {
  margin-top: 0;
}
.my-form {
  margin-bottom: 10px;
}
#gallery img {
    width: auto;
    height: 54px;
    margin-bottom: 10px;
    margin-right: 10px;
    vertical-align: middle;
}
/*#gallery img {
  width: 100px;
  margin-bottom: 10px;
  margin-right: 10px;
  vertical-align: middle;
}*/
.button {
 /* display: inline-block;
  padding: 10px;
  background: #ccc;
  cursor: pointer;
  border-radius: 5px;
  border: 1px solid #ccc;*/
  background: #60b741;
    border: 0;
    outline: 0;
    color: #1d1c39;
    padding: 12px 27px;
    font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    cursor: pointer;
    transition: all .3s ease-in-out;
    letter-spacing: .5px;
    border-radius: 4px;
    font-weight: 600;
}
.button:hover {
  background: #ddd;
}
#fileElem {
  display: none;
}
.form-control.success input {
    border-color: #2ecc71;
}

.form-control.success small{
	visibility: hidden;
}

.form-control.verror input {
    border-color: #e74c3c;    
}

.form-control small , .user-input small {
    color: #e74c3c;
    visibility: hidden;
}
.user-input.form-control.verror:focus-visible{
	border-color: #e74c3c !important;  
}
.form-control.verror small{
    visibility: visible;
}
.user-input.form-control.success input {
    color: #60b741!important;
}
.user-input.form-control.verror input {
   color: red!important;
}
button {
	background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
	text-decoration:underline;
}
<but
</style>
<script type="text/javascript">
function upload_file(e) {
    e.preventDefault();
    ajax_file_upload(e.dataTransfer.files);
}
  
function file_explorer() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        files = document.getElementById('selectfile').files;
        ajax_file_upload(files);
    };
}
  
function ajax_file_upload(files_obj) {
	let gloader = document.getElementById('gloader');
	gloader.classList.add("active");
    if(files_obj != undefined) {
        var form_data = new FormData();
        for(i=0; i<files_obj.length; i++) {
            form_data.append('file[]', files_obj[i]);
        }
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "ajax.php", true);
        xhttp.onload = function(event) {
            if (xhttp.status == 200) {
                alert(this.responseText);
            } else {
                alert("Error " + xhttp.status + " occurred when trying to upload your file.");
            }
            gloader.classList.add("active");
        }
 
        xhttp.send(form_data);
    }
}

// ************************ Drag and drop ***************** //
let dropArea = document.getElementById("drop-area")

// Prevent default drag behaviors
;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, preventDefaults, false)   
  document.body.addEventListener(eventName, preventDefaults, false)
})

// Highlight drop area when item is dragged over it
;['dragenter', 'dragover'].forEach(eventName => {
  dropArea.addEventListener(eventName, highlight, false)
})

;['dragleave', 'drop'].forEach(eventName => {
	//console.log(eventName);
  	dropArea.addEventListener(eventName, unhighlight, false)
})

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false)

function preventDefaults (e) {
  e.preventDefault()
  e.stopPropagation()
}

function highlight(e) {
  dropArea.classList.add('highlight')
}

function unhighlight(e) {
  dropArea.classList.remove('active')
}

function handleDrop(e) {
  var dt = e.dataTransfer
  var files = dt.files

  handleFiles(files)
}

let uploadProgress = []
let progressBar = document.getElementById('progress-bar')

function initializeProgress(numFiles) {
  progressBar.value = 0
  uploadProgress = []

  for(let i = numFiles; i > 0; i--) {
    uploadProgress.push(0)
  }
}

function setFileError( msg ){
	let fcontainer = document.getElementById('file-type-error');
	fcontainer.innerHTML = msg;
	setTimeout(function(){
		fcontainer.innerHTML = "";
	}, 3000);
}

function updateProgress(fileNumber, percent) {
  uploadProgress[fileNumber] = percent
  let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
  progressBar.value = total
}

function handleFiles(files){
	//alert( files.length );
	setFileError("");
	let uldCounter 	= document.getElementById("uplcounter");
	if( parseInt(uldCounter.value) >= 10 ){
		setFileError( "You can not upload more then 10 media files." );
		return;
	}
	let allFcount = (files.length + parseInt(uldCounter.value))
	if( parseInt(allFcount) > 10 ){
		setFileError( "You can not upload more then 10 media files." );
		return;
	}

	let preuploaded = document.getElementById('Uploadedfilename').value;
	if( preuploaded ){
		let prefiles = preuploaded.split(",");
		if( prefiles.length > 10 ){
			setFileError( "You can not upload more then 10 media files." );
			return;	
		}
	}	
	if( files.length > 10 ){
		setFileError( "You can not upload more then 10 media files." );
		return;
	}
	files = [...files]
	initializeProgress(files.length)
	files.forEach(uploadFile)
	//files.forEach(previewFile)
}
//Remove Fle
function removeMe(e,imageName){
	let uldCounter = document.getElementById("uplcounter");
	setFileError("");
	const xhttp = new XMLHttpRequest(); 
	xhttp.open("GET", "<?php bloginfo('url'); ?>/delete_file.php?delete=1&imageName="+imageName, true);
	xhttp.onreadystatechange = function () {
	        if (this.readyState == 4 && this.status == 200) {
	        	let counterValue = parseInt(uldCounter.value);
        		counterValue--;
        		uldCounter.value = counterValue;

	        	var fileName=document.getElementById('Uploadedfilename').value;
	        	newStr = fileName.replace(imageName, '');
	        	document.getElementById('Uploadedfilename').value=newStr;
	            console.log(this.responseText);
	            e.parentNode.remove();
	        }
	    }
	xhttp.send();
 
}
//End Remove Fle

function uploadFile(file, i) {
		setFileError("");
		let uldCounter 	= document.getElementById("uplcounter");
		if( parseInt(uldCounter.value) >= 10 ){
			setFileError( "You can not upload more then 10 media files." );
			return;
		}

		let gloader 	= document.getElementById('gloader');
		gloader.classList.add("show-me");
		gloader.classList.add("active");
		
		const fileSize = file.size / 1024 / 1024;
		if( fileSize > 20 ){
			setFileError("ERROR Uploaded document exceeds the maximum size limit of 20 MB");
			gloader.classList.remove("active");
			return;
		}

  		// if(files_obj != undefined) {
	    var form_data = new FormData();
	    form_data.append('file', file)
	    var xhttp = new XMLHttpRequest();
	    xhttp.open("POST", "<?php bloginfo('url'); ?>/file-uploader.php", true);
	    xhttp.onload = function(event) {
	        if (xhttp.status == 200) {
	        	let response =  JSON.parse(xhttp.responseText);	        	
	        	console.log( response );
	        	if( response.status == true ){
	        		let counterValue = parseInt(uldCounter.value);
	        		counterValue++;
	        		uldCounter.value = counterValue;
	        		let existingVal = document.getElementById('Uploadedfilename').value;
					if( existingVal == '' ){
						document.getElementById('Uploadedfilename').value = response.file;						
					}else{
						document.getElementById('Uploadedfilename').value = existingVal + response.file;
					}

				let reader = new FileReader()
				  reader.readAsDataURL(file)
				  reader.onloadend = function() {
				  	let indiv 	= document.createElement('div');
				  	let icon 	= '';
				  	console.log( file.type );
				  	switch (file.type) {
						case 'application/pdf':
						    icon = "<?php bloginfo('template_url') ?>/dev-img/pdf_gy.png";     
						    break;
						case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
						    icon = "<?php bloginfo('template_url') ?>/dev-img/doc_gy.png"; 
						    break;
						case 'text/plain':
						    icon = "<?php bloginfo('template_url') ?>/dev-img/doc_gy.png"; 
						    break;    
						case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
						    icon =  "<?php bloginfo('template_url') ?>/dev-img/xls_gy.png"; 
						    break;
						case 'application/vnd.ms-excel':
						    icon =  "<?php bloginfo('template_url') ?>/dev-img/xls_gy.png"; 
						    break;    
						case 'image/vnd.adobe.photoshop':
						    icon = "<?php bloginfo('template_url') ?>/dev-img/psd_gy.png";
						    break;
						case 'application/x-zip-compressed':
						    icon = "<?php bloginfo('template_url') ?>/dev-img/zip_gy.png";
						    break;
						case 'application/zip':
						    icon = "<?php bloginfo('template_url') ?>/dev-img/zip_gy.png";
						    break;						    
						default:
							icon = "<?php bloginfo('template_url') ?>/dev-img/def-thumb.png";
							break;
					}
					//if size exceed than 10 MB
				        if(file.size > 10000000 && file.type == 'image/jpeg') {
				           	icon = "<?php bloginfo('template_url') ?>/dev-img/jpg_gy.png" ;
				        } else if(file.size > 10000000 && file.type == 'image/png') {
				           	icon = "<?php bloginfo('template_url') ?>/dev-img/png_gy.png";
				        }
				        indiv.innerHTML = '<img src="'+icon+'" height="55" width="55"><button type="button" onclick="return removeMe(this,this.value);" value="'+response.file+'">X</button></span>';
						document.getElementById('gallery').appendChild(indiv);
					}

// End Preview File
	        	}else{
	        		setFileError( response.message );
	        	}
	        }else{
	            console.log("error");
	        }
	        gloader.classList.remove("active");
	    }
	    xhttp.send(form_data);
	// }
}
</script>
<?php get_footer(); ?>