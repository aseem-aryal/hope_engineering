<!-- Header -->
	
<style>
	.backg {
		background: url(<?=site_url('img/bg.jpg')?>) no-repeat;
		height:1080px;
	}
	
	#form_container
	{
		background:rgba(255,255,255,0.4);
		border:1px solid #ccc;
		margin:0 auto;
		text-align:left;
		width:40%;
		margin-top:80px;
	}
	
	ul{
		 list-style-type: none;
	}
	
	.form_group{
		display:none;
	}
	
	.form_group1{
		display:block;
		padding-bottom:50px;
	}
	
	#header{
		text-align:center;
		height:100px;
		padding-top:100px;
	}
	
	.next, .prev{
		background-color: #85BEDC;
		padding: 5px 20px 5px 20px;
		color:#000000;
		text-decoration:none;
		border-radius:10px;
	}
	
	.next, .prev:hover{
		color:blue;
	}
</style>

<link rel="stylesheet" type="text/css" href='<?=site_url("css/nepali.datepicker.v2.css");?>' media="all">
<script type="text/javascript" src='<?=site_url("js/view.js");?>'></script>
<script type="text/javascript" src='<?=site_url("js/nepali.datepicker.v2.js");?>'></script>

    
	<!--
	<header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Hope Consultant Services</h1>
            <h2>We offer consultation to you</h2>
            <br>
        </div>
	
    </header>
	-->
	<div class="backg">
	<div id="header">
	<h1>
		Hope Consultants- Add New Form
	</h1>
	</div>
	
	
	<div id="form_container" >
		<form id="form_1" method="post" action="" style="">
		<div class="form_description">
		</div>
	<ul>		
		<div class="form_group" id="overall_details">	
			<li class="section_break">
				<h2>Overall Details</h2>
				<p></p>
			</li>		
			<li id="li_1" >
			<label class="description" for="element_1">Ref. Number </label>
			<div style="width:640px">
				<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
			</div><p class="guidelines" id="guide_1"><small>Format: PP/01/NatI/072</small></p> 
			</li>		<li id="li_2" >
			<label class="description" for="element_2">File Number </label>
			<div>
				<input id="element_2" name="element_2" class="element text small" type="text" maxlength="255" value=""/> 
			</div><p class="guidelines" id="guide_2"><small>Format: 242-072</small></p> 
			</li>		<li id="li_3" >
			<label class="description" for="element_3">Case Received Date </label>
			<span>
				<input id="element_3_1" name="element_3_1" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_3_1">MM</label>
			</span>
			<span>
				<input id="element_3_2" name="element_3_2" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_3_2">DD</label>
			</span>
			<span>
				<input id="element_3_3" name="element_3_3" class="element text" size="4" maxlength="4" value="" type="text">
				<label for="element_3_3">YYYY</label>
			</span>
		
			<span id="calendar_3">
				<img id="cal_img_3" class="datepicker" src='<?=site_url("form/calendar.gif");?>'alt="Pick a date.">	
			</span>
			<p class="guidelines" id="guide_3"><small>(In BS)</small></p> 
			</li>		<li id="li_4" >
			<label class="description" for="element_4">Insurer </label>
			<div>
				<input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
			</div> 
			</li>
			<br/>
			<span>
				<a id="" class="next" href="#" next="personal_details" current="overall_details">Next</a>
			</span>
		</div>
		<div class="form_group" id="personal_details">
			<li class="section_break">
				<h2>Personal Details</h2>
				<p></p>
			</li>		<li id="li_5" >
			<label class="description" for="element_5">Name:</label>
			<div>
				<input id="element_5_1" name= "element_5_1" class="element text" maxlength="255" size="40" value=""/>
				
			</div> 
			</li>		<li id="li_6" >
			<label class="description" for="element_6">Contact Number:</label>
			<div>
				<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
			</div> 
			</li>		<li id="li_9" >
			<label class="description" for="element_9">Address </label>
			
			<div>
				<input id="element_9_1" name="element_9_1" class="element text large" value="" type="text">
				<label for="element_9_1">Street Address</label>
			</div>
		
			<div>
				<input id="element_9_2" name="element_9_2" class="element text large" value="" type="text">
				<label for="element_9_2">Address Line 2</label>
			</div>
		
			<div class="left">
				<input id="element_9_3" name="element_9_3" class="element text medium" value="" type="text">
				<label for="element_9_3">City</label>
			</div>
		
			<div class="right">
				<input id="element_9_4" name="element_9_4" class="element text medium" value="" type="text">
				<label for="element_9_4">State / Province / Region</label>
			</div>
		
			<div class="left">
				<input id="element_9_5" name="element_9_5" class="element text medium" maxlength="15" value="" type="text">
				<label for="element_9_5">Postal / Zip Code</label>
			</div>
		
			<div class="right">
				
			<label for="element_9_6">Country</label>
		</div>

		
			</li>		<li id="li_10" >
			<label class="description" for="element_10">Vehicle Number </label>
			<div>
				<input id="element_10" name="element_10" class="element text medium" type="text" maxlength="255" value=""/> 
			</div> 
			</li>
			<br/>
			<span>
				<a class="prev" href="#" previous="overall_details" current="personal_details">Previous</a>
				<a class="next" href="#" next="file_details" current="personal_details">Next</a>
			</span>
		</div>
		<div class="form_group" id="case_details">
			<li class="section_break">
				<h2>Case Details</h2>
				<p></p>
			</li>		<li id="li_12" >
			<label class="description" for="element_12">Type of Case </label>
			<div>
				<input id="element_12" name="element_12" class="element text medium" type="text" maxlength="255" value=""/> 
			</div> 
			</li>		<li id="li_21" >
			<label class="description" for="element_21">First Survey </label>
			<span>
				<input id="element_21_1" name="element_21" class="element radio" type="radio" value="1" />
	<label class="choice" for="element_21_1">Yes</label>
	<input id="element_21_2" name="element_21" class="element radio" type="radio" value="2" />
	<label class="choice" for="element_21_2">No</label>

			</span> 
			</li>		<li id="li_13" >
			<label class="description" for="element_13">First Survey Done by </label>
			<div>
				<input id="element_13" name="element_13" class="element text medium" type="text" maxlength="255" value=""/> 
			</div> 
			</li>		<li id="li_22" >
			<label class="description" for="element_22">Photo </label>
			<span>
				<input id="element_22_1" name="element_22_1" class="element checkbox" type="checkbox" value="1" />
	<label class="choice" for="element_22_1">Yes</label>

			</span> 
			</li>		<li id="li_23" >
			<label class="description" for="element_23">File Status </label>
			<span>
				<input id="element_23_1" name="element_23" class="element radio" type="radio" value="1" />
	<label class="choice" for="element_23_1">All Documents Ready</label>
	<input id="element_23_2" name="element_23" class="element radio" type="radio" value="2" />
	<label class="choice" for="element_23_2">Final Report Done & Submitted</label>
	<input id="element_23_3" name="element_23" class="element radio" type="radio" value="3" />
	<label class="choice" for="element_23_3">Awating Documents</label>
	<input id="element_23_4" name="element_23" class="element radio" type="radio" value="4" />
	<label class="choice" for="element_23_4">Case Closed</label>

			</span> 
			</li>		<li id="li_14" >
			<label class="description" for="element_14">File Prepared By </label>
			<div>
				<input id="element_14" name="element_14" class="element text medium" type="text" maxlength="255" value=""/> 
			</div> 
			</li>		<li id="li_15" >
			<label class="description" for="element_15">Remarks </label>
			<div>
				<textarea id="element_15" name="element_15" class="element textarea medium"></textarea> 
			</div> 
			</li>		<li id="li_16" >
			<label class="description" for="element_16">Instructions from Prabesh Dai </label>
			<div>
				<textarea id="element_16" name="element_16" class="element textarea medium"></textarea> 
			</div> 
			</li>
			<br/>
			
			<span>
				<a class="prev" href="#" previous="personal_details" current="case_details">Previous</a>
				<a class="next" href="#" next="file_details"  current="case_details">Next</a>
			</span>
		</div>
		<div class="form_group" id="file_details">
			<li class="section_break">
				<h2>File Details</h2>
				<p></p>
			</li>		<li id="li_24" >
			<label class="description" for="element_24">Details </label>
			<span>
				<input id="element_24_1" name="element_24_1" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_1">Policy Document</label>
				<input id="element_24_2" name="element_24_2" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_2">Claim Form</label>
				<input id="element_24_3" name="element_24_3" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_3">Bill Book (OD)</label>
				<input id="element_24_4" name="element_24_4" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_4">Lisence (OD)</label>
				<input id="element_24_5" name="element_24_5" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_5">Quotaion (OD)</label>
				<input id="element_24_6" name="element_24_6" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_6">Bill (OD)</label>
				<input id="element_24_7" name="element_24_7" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_7">Police Report</label>
				<input id="element_24_8" name="element_24_8" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_8">Bill Book (TP)</label>
				<input id="element_24_9" name="element_24_9" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_9">Lisence (TP)</label>
				<input id="element_24_10" name="element_24_10" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_10">Quotaion (TP)</label>
				<input id="element_24_11" name="element_24_11" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_11">Bill (TP)</label>
				<input id="element_24_12" name="element_24_12" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_12">Injury</label>
				<input id="element_24_13" name="element_24_13" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_13">मिलाप-पत्र</label>
				<input id="element_24_14" name="element_24_14" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_14">Route Permit (CV)</label>
				<input id="element_24_15" name="element_24_15" class="element checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_24_15">Fitness (CV)</label>

			</span> 
			</li>		<li id="li_17" >
			<label class="description" for="element_17">1st Contact Date </label>
			<span>
				<input id="element_17_1" name="element_17_1" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_17_1">MM</label>
			</span>
			<span>
				<input id="element_17_2" name="element_17_2" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_17_2">DD</label>
			</span>
			<span>
				<input id="element_17_3" name="element_17_3" class="element text" size="4" maxlength="4" value="" type="text">
				<label for="element_17_3">YYYY</label>
			</span>
		
			<span id="calendar_17">
				<img id="cal_img_17" class="datepicker" src='<?=site_url("form/calendar.gif");?>' alt="Pick a date.">	
			</span>
			 
			</li>		<li id="li_18" >
			<label class="description" for="element_18">2nd Contact Date
	 </label>
			<span>
				<input id="element_18_1" name="element_18_1" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_18_1">MM</label>
			</span>
			<span>
				<input id="element_18_2" name="element_18_2" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_18_2">DD</label>
			</span>
			<span>
				<input id="element_18_3" name="element_18_3" class="element text" size="4" maxlength="4" value="" type="text">
				<label for="element_18_3">YYYY</label>
			</span>
		
			<span id="calendar_18">
				<img id="cal_img_18" class="datepicker" src='<?=site_url("form/calendar.gif");?>' alt="Pick a date.">	
			</span>
			
			</li>		<li id="li_19" >
			<label class="description" for="element_19">3rd Contact Date </label>
			<span>
				<input id="element_19_1" name="element_19_1" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_19_1">MM</label>
			</span>
			<span>
				<input id="element_19_2" name="element_19_2" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_19_2">DD</label>
			</span>
			<span>
				<input id="element_19_3" name="element_19_3" class="element text" size="4" maxlength="4" value="" type="text">
				<label for="element_19_3">YYYY</label>
			</span>
		
			<span id="calendar_19">
				<img id="cal_img_19" class="datepicker" src='<?=site_url("form/calendar.gif");?>' alt="Pick a date.">	
			</span>
			 
			</li>		<li id="li_20" >
			<label class="description" for="element_20">4th Contact Date </label>
			<span>
				<input id="element_20_1" name="element_20_1" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_20_1">MM</label>
			</span>
			<span>
				<input id="element_20_2" name="element_20_2" class="element text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_20_2">DD</label>
			</span>
			<span>
				<input id="element_20_3" name="element_20_3" class="element text" size="4" maxlength="4" value="" type="text">
				<label for="element_20_3">YYYY</label>
			</span>
		
			<span id="calendar_20">
				<img id="cal_img_20" class="datepicker" src='<?=site_url("form/calendar.gif");?>' alt="Pick a date.">	
			</span>
			 
			</li>
				
						<li class="buttons">
					<input type="hidden" name="form_id" value="1077360" />
					
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
			</li>
			<br/>
			
			<span>
				<a class="prev" href="#" previous="case_details" current="file_details">Previous</a>
			</span>
		</div>
		</ul>
		</form>	
		
	</div>
		
	</div>



</body>

</html>
<script>
$(document).ready(function(){
	$("#overall_details").show();
});

$('.next').click(function() {
    var currentDiv=$(this).attr('current');
	var nextDiv = $(this).attr('next'); 
    //window.alert(currentDiv + nextDiv);
	$("#"+currentDiv).hide();
	$("#"+nextDiv).show();
    viewer.show(picNumber);
});

$('.prev').click(function() {
    //split at the '_' and take the second offset
	var currentDiv=$(this).attr('current');
	var prevDiv = $(this).attr('previous'); 
    //window.alert(prevDiv);
	$("#"+currentDiv).hide();
	$("#"+prevDiv).show();
    viewer.show(picNumber);
});

</script>