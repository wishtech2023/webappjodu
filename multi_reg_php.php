<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <style>
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  overflow: hidden;
  background: url("bg.png"), -webkit-linear-gradient(bottom, #0250c5, #d43f8d);
}
::selection{
  color: #fff;
  background: #d43f8d;
}
.container{
  width: 330px;
  background: #fff;
  text-align: center;
  border-radius: 5px;
  padding: 50px 35px 10px 35px;
}
.container header{
  font-size: 35px;
  font-weight: 600;
  margin: 0 0 30px 0;
}
.container .form-outer{
  width: 100%;
  overflow: hidden;
}
.container .form-outer form{
  display: flex;
  width: 400%;
}
.form-outer form .page{
  width: 25%;
  transition: margin-left 0.3s ease-in-out;
}
.form-outer form .page .title{
  text-align: left;
  font-size: 25px;
  font-weight: 500;
}
.form-outer form .page .field{
  width: 330px;
  height: 45px;
  margin: 45px 0;
  display: flex;
  position: relative;
}
form .page .field .label{
  position: absolute;
  top: -30px;
  font-weight: 500;
}
form .page .field input{
  height: 100%;
  width: 100%;
  border: 1px solid lightgrey;
  border-radius: 5px;
  padding-left: 15px;
  font-size: 18px;
}
form .page .field select{
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  font-weight: 500;
}
form .page .field button{
  width: 100%;
  height: calc(100% + 5px);
  border: none;
  background: #d33f8d;
  margin-top: -20px;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
}
form .page .field button:hover{
  background: #000;
}
form .page .btns button{
  margin-top: -20px!important;
}
form .page .btns button.prev{
  margin-right: 3px;
  font-size: 17px;
}
form .page .btns button.next{
  margin-left: 3px;
}
.container .progress-bar{
  display: flex;
  margin: 40px 0;
  user-select: none;
}
.container .progress-bar .step{
  text-align: center;
  width: 100%;
  position: relative;
}
.container .progress-bar .step p{
  font-weight: 500;
  font-size: 18px;
  color: #000;
  margin-bottom: 8px;
}
.progress-bar .step .bullet{
  height: 25px;
  width: 25px;
  border: 2px solid #000;
  display: inline-block;
  border-radius: 50%;
  position: relative;
  transition: 0.2s;
  font-weight: 500;
  font-size: 17px;
  line-height: 25px;
}
.progress-bar .step .bullet.active{
  border-color: #d43f8d;
  background: #d43f8d;
}
.progress-bar .step .bullet span{
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}
.progress-bar .step .bullet.active span{
  display: none;
}
.progress-bar .step .bullet:before,
.progress-bar .step .bullet:after{
  position: absolute;
  content: '';
  bottom: 11px;
  right: -51px;
  height: 3px;
  width: 44px;
  background: #262626;
}
.progress-bar .step .bullet.active:after{
  background: #d43f8d;
  transform: scaleX(0);
  transform-origin: left;
  animation: animate 0.3s linear forwards;
}
@keyframes animate {
  100%{
    transform: scaleX(1);
  }
}
.progress-bar .step:last-child .bullet:before,
.progress-bar .step:last-child .bullet:after{
  display: none;
}
.progress-bar .step p.active{
  color: #d43f8d;
  transition: 0.2s linear;
}
.progress-bar .step .check{
  position: absolute;
  left: 50%;
  top: 70%;
  font-size: 15px;
  transform: translate(-50%, -50%);
  display: none;
}
.progress-bar .step .check.active{
  display: block;
  color: #fff;
}

.radio-group {
  display: flex;
  flex-direction: row;
  align-items: center;
}

.radio-group input[type="radio"] {
  width: auto;
  height: auto;
}

.radio-group input[type="radio"][value="male"] {
  margin-right: 5px;
}

.radio-group input[type="radio"][value="female"] {
  margin-left: 10px;
}

.radio-group {
  display: flex;
  flex-direction: row;
  align-items: center;
}

.radio-group input[type="radio"] {
  width: auto;
  height: auto;
}

.radio-group input[type="radio"][value="male"] {
  margin-right: 5px;
}

.radio-group label[for="female"] {
  margin-left: 5px;
}
.dob-group {
		display: flex;
		align-items: left;
	}
	.dob-item {
		margin-right: 30px;
	}
	.dob-item select {
		width: 100px;
		padding: 5px;
		font-size: 16px;
		border: 1px solid #ccc;
		border-radius: 5px;
	}
	.dob-item select option {
		font-size: 16px;
	}
	
</style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <header>Signup Form</header>
      <div class="progress-bar">
        <div class="step">
          <p>General</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Contact</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Birth</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submit</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="#">
<div class="page slide-page">
	<div class="title">Basic Info:</div>
	<div class="field">
		<div class="label">Name</div>
		<input type="text" id="name" name="name">
	</div>
	<div class="field">
		<div class="label">Gender</div>
		<div class="radio-group">
			<input type="radio" id="male" name="gender" value="male">
			<label for="male">Male</label>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female</label>
		</div>
	</div>
	<div class="field">
		<div class="label">Blood Group</div>
		<select>
			<option value="">Select Blood Group</option>
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
		</select>
	</div>
	<div class="field">
		<div class="label">Date of Birth</div>
		<div class="dob-group">
			<div class="dob-item">
				<select name="day" style="width: 80px;">
					<option value="">Day</option>
					<?php
						for ($day = 1; $day <= 31; $day++) {
							echo "<option value='" . $day . "'>" . $day . "</option>";
						}
					?>
				</select>
			</div>
			<div class="dob-item">
				<select name="month" style="width: 80px;">
					<option value="">Month</option>
					<?php
						for ($month = 1; $month <= 12; $month++) {
							echo "<option value='" . $month . "'>" . $month . "</option>";
						}
					?>
				</select>
			</div>
			<div class="dob-item">
				<select name="year" style="width: 100px;">
					<option value="">Year</option>
					<?php
						$currentYear = date('Y');
						for ($year = $currentYear; $year >= ($currentYear - 100); $year--) {
							echo "<option value='" . $year . "'>" . $year . "</option>";
						}
					?>
				</select>
			</div>
		</div>
	</div>
	<div class="field">
		<button class="firstNext next" id="nextBtn">Next</button>
	</div>
</div>

<script>
	document.getElementById('nextBtn').addEventListener('click', function(event) {
		const nameInput = document.getElementById('name');
		if (nameInput.value.trim() === '') {
			alert('Please enter your name.');
			nameInput.focus();
			event.preventDefault();
		}
	});
</script>



          <div class="page">
            <div class="title">Contact Info:</div>
            <div class="field">
			  <div class="label">Email Address</div>
			  <input type="text" id="emailInput">
			</div>

			<script>
			  const emailInput = document.getElementById('emailInput');

			  emailInput.addEventListener('blur', () => {
				const email = emailInput.value;
				if (!email.includes('@')) {
				  // Email address does not contain the "@" symbol
				  alert('Please enter a valid email address.');
				  emailInput.value = '';
				}
			  });
			</script>

            <div class="field">
              <div class="label">Phone Number</div>
              <input type="text" name="MobileNumber" pattern=".{10}"
                     oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" / placeholder="9440XXXXXXX"  maxlength="10" required>
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Address</div>
			  <div class="field">
				<div class="label">Country</div>
				<select name="Country" required>
				  <option value="" disabled selected hidden>COUNTRY</option>
				  <option>India</option>
				  <!-- Other countries can be added here -->
				</select>
			</div>
			<div class="field">
				<div class="label">State</div>
				<select name="State" required>
				  <option value="" disabled selected hidden>STATE</option>
				  <option>Andhra Pradesh</option>
				  <option>Telangana</option>
				  <option>Karnataka</option>
				  <option>Tamilnadu</option>
				  <option>Kerala</option>
				  <!-- Other states can be added here -->
				</select>
			  </div>
			  <div class="field">
				<div class="label">District</div>
				<select name="District" required>
				  <option value="" disabled selected hidden>DISTRICT</option>
				  <option>Anantapur</option>
				  <option>Prakasham</option>
				  <option>Chittor</option>
				  <option>Kadapa</option>
				  <option>Nellore</option>
				  <!-- Other districts in Andhra Pradesh can be added here -->
				</select>
			  </div>
			  <div class="field">
				  <div class="label">Taluk</div>
				  <select name="TalukName" id="TalukName" required>
					<option value="" disabled selected hidden>TALUK</option>
					<option value="Badvel">Badvel</option>
					<option value="Jammalamadugu">Jammalamadugu</option>
					<option value="Kadapa">Kadapa</option>
					<option value="Proddatur">Proddatur</option>
					<option value="Kamalapuram">Kamalapuram</option>
					<option value="Mydukur">Mydukur</option>
					<option value="Pulivendula">Pulivendula</option>
				  </select>
				</div>
				<div class="field">
				  <div class="label">Mandal</div>
				  <select name="MandalName" id="MandalName" required>
					<option value="" disabled selected hidden>Mandal</option>
					<option value="ATLURU">ATLURU</option>
					<option value="B-KODURU">B-KODURU</option>
					<option value="BADVEL">BADVEL</option>
					<option value="B.MATAM">B.MATAM</option>
					<option value="CHAPADU">CHAPADU</option>
					<option value="DUVVURU">DUVVURU</option>
					<option value="GOPAVARAM">GOPAVARAM</option>
					<option value="KALASAPADU">KALASAPADU</option>
					<option value="KHAJIPET">KHAJIPET</option>
					<option value="MYDUKUR">MYDUKUR</option>
					<option value="PORUMAMILLA">PORUMAMILLA</option>
					<option value="KASINAYANA">KASINAYANA</option>
				  </select>
				</div>
				<div class="field">
					<div class="label">VillageName</div>
					<input type="text">
				</div>
				<div class="field">
					<div class="label">Complete Address</div>
					<input type="text">
				</div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page">
		  <div class="field">
            <div class="label">Education</div>
            <label for="Education" required></label>
                  <select name="EducationData" id="EducationData">>
                     <option value="" disabled selected hidden>Select your Qualification</option>
                     <option value="SSC">INDIA</option>
                     <option value="PUC">+2 (PUC/Intermediate)</option>
                     <option value="Degree">Degree</option>
                     <option value="B.Tech">B.TECH</option>
                     <option value="MBBS">MBBS</option>
                     <option value="Masters">Masters/PG</option>
                     <option value="CA">CA</option>
                     <option value="Ph.D">PH.D</option>
                     <option value="Aggriculture">Aggriculture</option>
                     <option value="TTC">TTC</option>
                     <option value="MBA">MBA</option>
                     <option value="MCA">MCA</option>
                  </select>
				  </div>
			<div class="field">
			  <div class="label">Goal/Job/Future Plans</div>
			  <textarea id="Goal" name="GoalName" placeholder="Enter your ambition like EAMCET, JEE Aspirant, Govt Job IAS, IPS, MBBS or NEET,Software Engineer (Optional)" rows="4" cols="500" style="width: 500px !important;"></textarea>
			</div>
			
			<style>
				  .radio-group label {
					margin-right: 15px; 
				  }
			</style>

			<div class="field">
				<div class="label">Marriage Status</div>
				<div class="radio-group">
					<input type="radio" id="MarriedYes" name="Married" value="YES">
					<label for="MarriedYes">YES</label>

					<input type="radio" id="MarriedNo" name="Married" value="NO">
					<label for="MarriedNo">NO</label>
				</div>
			</div>
			<div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script>
		const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});

nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("Your Form Successfully Signed up");
    location.reload();
  },800);
});

prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});


	</script>

  </body>
</html>
