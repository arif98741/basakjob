

<!-- Main Banner Section Start -->	
<div>	 

</div> 
         <!-- Scripts
          ================================================== -->
          <script type="text/javascript" src="assets1/plugins/js/jquery.min.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/viewportchecker.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/bootsnav.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/select2.min.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/wysihtml5-0.3.0.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/bootstrap-wysihtml5.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/datedropper.min.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/dropzone.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/loader.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/owl.carousel.min.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/slick.min.js"></script>
          <script type="text/javascript" src="assets1/plugins/js/gmap3.min.js"></script>
          <!-- Custom Js -->
          <script src="assets1/js/custom.js"></script>
          <script src="assets1/js/jQuery.style.switcher.js"></script>
          <script type="text/javascript">
            $(document).ready(function() {
            	$('#styleOptions').styleSwitcher();
            });
          </script>
          <script type="text/javascript">

           $.fn.jQuerySimpleCounter = function( options ) {
            var settings = $.extend({
             start:  0,
             end:    100,
             easing: 'swing',
             duration: 400,
             complete: ''
           }, options );

            var thisElement = $(this);

            $({count: settings.start}).animate({count: settings.end}, {
             duration: settings.duration,
             easing: settings.easing,
             step: function() {
              var mathCount = Math.ceil(this.count);
              thisElement.text(mathCount);
            },
            complete: settings.complete
          });
          };


          $('#number1').jQuerySimpleCounter({end: 2500,duration: 5000});
          $('#number2').jQuerySimpleCounter({end: 151655,duration: 5000});
          $('#number3').jQuerySimpleCounter({end: 5654,duration: 5000});
          $('#number4').jQuerySimpleCounter({end: 1565,duration: 5000});



          /* AUTHOR LINK */
          $('.about-me-img').hover(function(){
           $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
         }, function(){
           $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
         });
       </script>
       <script>
        function openRightMenu() {
         document.getElementById("rightMenu").style.display = "block";
       }

       function closeRightMenu() {
         document.getElementById("rightMenu").style.display = "none";
       }
     </script>
   </div>	
 </body>

 <!-- Mirrored from 198.38.86.159/~onlineexamboard/demo/advanced-job-portal/contactus.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2019 20:45:33 GMT -->
 </html><!--<script src='https://www.google.com/recaptcha/api.js'></script>-->

 <script type="text/javascript">
   function Captcha(){
     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
     var i;
     for (i=0;i<6;i++){
       var a = alpha[Math.floor(Math.random() * alpha.length)];
       var b = alpha[Math.floor(Math.random() * alpha.length)];
       var c = alpha[Math.floor(Math.random() * alpha.length)];
       var d = alpha[Math.floor(Math.random() * alpha.length)];
       var e = alpha[Math.floor(Math.random() * alpha.length)];
       var f = alpha[Math.floor(Math.random() * alpha.length)];
       var g = alpha[Math.floor(Math.random() * alpha.length)];
     }
     var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
     document.getElementById("mainCaptcha").value = code
   }
   function ValidCaptcha(){
    var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
    var string2 = removeSpaces(document.getElementById('txtInput').value);
    var maincaptcha=$('#mainCaptcha').val();
    if(maincaptcha!=""){
      if (string1 == string2){
       document.getElementById('id5').innerHTML='<span style="color:#DE1616;">Verification success</span>';
       return true;
     }
     else{       
       document.getElementById('id5').innerHTML='<span style="color:#DE1616;">Enter the correct captcha</span>';					  
       return false;
     }
   }
 }
 function removeSpaces(string){
  return string.split(' ').join('');
}
</script>






<!-- CONTENT -->
<div id="content">
  <div class="container">



    <ol  class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li class="active">Contact Us</li>
    </ol>
    
    <div class="row">
      <div class="col-sm-9" >
       <div class="top-emp-center p5">
         <h4>Contact Us</h4>
       </div>
       <div class="row"> 
         <div class="col-sm-12"> 
           <div class="col-sm-6"> 
            <div class="all-catehead blue">Employers contact us at</div><br>
            <address>
              <div class="enq"> Salauddin Shiplu</div>
              <strong class="enq">Subrata Basak:</strong>01935932025 <br>
              <strong class="enq">Mobile:</strong>  01935932025<br>
              <strong class="enq">Email: </strong><span class="add"> <a href="mailto:employer@gmail.com">basak@gmail.com</a></span><br>
              <!-- <div class="add"><a href="#">Click here</a>  to request information</div>	-->
            </address>
          </div><!--col-sm-6-->     

          <div class="col-sm-6"> 
            <div class="all-catehead blue">Job Seekers contact us at</div><br>
            <address>
              <strong class="enq">Toll Free Nuber:</strong> 01935932025<br>
              Enterprenuer Services<br>
              <strong class="enq">Email: </strong><span class="add"> <a href="mailto:info@gmail.com">shiplu@gmail.com</a></span><br>
              <!--<div class="add"><a href="#">Click here</a>  for My Enterprenuer Services </div>-->	
            </address>
          </div><!--col-sm-6-->     
        </div><!--col-sm-12-->
      </div>

      <div class="top-emp-center p5 mtop40">
       <h4>Our Management Team</h4>
     </div>
     <div class="contact row mtop40 ">
       <div class="col-sm-4"> 
         <div class="manage-bg ">
          <div class="manage-title"> Salaudding Shiplu</div>
          <div class="manage">
           <ul>
            <li>Designer</li>
            <li>Graphics Department</li>
            <li><i class="fa fa-envelope-o"></i> <a href="mailto:haruto@enterprenuer.com">shiplu@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div><!--col-sm-4-->

    <div class="col-sm-4"> 
      <div class="manage-bg ">
        <div class="manage-title"> Subrata Basak</div>
        <div class="manage">
         <ul>
          <li>Developer</li>
          <li>Software Department</li>
          <li><i class="fa fa-envelope-o"></i> <a href="mailto:haruto@enterprenuer.com">basak@gmail.com</a></li>
        </ul>
      </div>
    </div>
  </div><!--col-sm-4-->

  <div class="col-sm-4"> 
    <div class="manage-bg ">
      <div class="manage-title">  Mirana Bulbul</div>
      <div class="manage">
       <ul>
        <li>Digital Marketer</li>
        <li>Marketing Department</li>
        <li><i class="fa fa-envelope-o"></i> <a href="mailto:haruto@enterprenuer.com">minara.bulbul@gmail.com</a></li>
      </ul>
    </div>
  </div>
</div><!--col-sm-4-->
</div><!--contact -->


</div><!--col-sm-9-->

<div class="col-sm-3" >

  <div class="create-job">
   <div class="create-job-head">
    <h3> Enquiry Form </h3>
  </div>
  <div class="create-job-content">

   <p ></p>
   <form  action="#" name="formreg" id="formreg" method="post" onsubmit="return ChkContact()">
    <div class="form-group">
      <input type="text" class="form-control" id="fullname" name="fullname" value="" placeholder="*Name"><div id='id1'></div>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" name="email"  placeholder="Email"><div id='id2'></div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" placeholder="*Phone"><div id='id3'></div>
    </div>
    <div class="form-group">
      <textarea class="form-control" id="message" name="message" rows="3" placeholder="*Message"></textarea><div id='id4'></div>
    </div>
    <div class="form-group">


     <input type="text" id="mainCaptcha"/>
     <script>Captcha();</script>								 

     <input type="text" id="txtInput" placeholder="Enter above code"/> 
     <!--<input id="Button1" type="button" value="Check" onclick="alert(ValidCaptcha());"/>-->


     <div id='id5'></div>
   </div>
   <!--<div class="g-recaptcha" data-sitekey="6LdwJCMUAAAAAENeQP_xGsG-VFH4vNd1OGHGs8Wy"></div>-->
   <div class="ali-right"> 
     <input  type="hidden" id="formsubmit" name="formsubmit" value="add">
     <input class="btn-blue btn" type="submit" name="Submits"  value="Submit" onclick="return ValidCaptcha();" >
   </div>
 </form>
</div>
</div><!--create-job-->

<div class="press-banner img-responsive"><img src="images/agency.jpg"  alt="agency"></div>

</div><!--col-sm-3-->

</div><!--row-->
</div><!-- container -->

</div><!-- CONTENT -->

<script type="text/javascript">

/*  function DrawCaptcha()
    {
        var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var code = a + ' + ' + b+ ' = ';
        document.getElementById("txtCaptcha").value = code;
        document.getElementById("total").value = parseInt(a)+parseInt(b);
      } */

      function ChkContact()
      {

//tinyMCE.triggerSave();
if(document.getElementById('fullname').value=='')
{
	
  document.getElementById('id1').innerHTML='<span style="color:#DE1616;">Enter the Name</span>';
  document.getElementById('fullname').focus();
  return false;
}
var noalpha = /^[a-zA-Z ]*$/;

if (!noalpha.test(document.getElementById('fullname').value)) {
     /*alert("Special characters are not allowed in companyname field.");
     document.form1.companyname.value="";*/
     document.getElementById('id1').innerHTML='<span style="color:#DE1616;">Enter the Name in Alphabets Only</span>';
     document.getElementById('fullname').focus();
     return false;
   }
   if(document.getElementById('email').value=='')
   {
    document.getElementById('id1').innerHTML='';
    document.getElementById('id2').innerHTML='<span style="color:#DE1616;">Enter the Email-Id</span>';
    document.getElementById('email').focus();
    return false;
  }
  if(echeck(document.getElementById('email').value)==false)
  {
    document.getElementById('id2').innerHTML=''
    document.getElementById('id2').innerHTML='<span style="color:#DE1616;">Check your Email ID</span>';
    document.getElementById('email').focus();
    return false;
  }
  if(document.getElementById('mobile').value=='')
  {
   document.getElementById('id1').innerHTML='';
   document.getElementById('id2').innerHTML='';
   document.getElementById('id3').innerHTML='<span style="color:#DE1616; ">Enter your mobile number</span>';
   document.getElementById('mobile').focus();
   return false;
 }
	/*else if(!numberReg.test($("#mobile").val())){
	 document.getElementById('id1').innerHTML='';
		document.getElementById('id2').innerHTML='';
		document.getElementById('id3').innerHTML='<span style="color:#DE1616; font-family: monospace;">Enter Valid Mobile Number</span>';
		document.getElementById('mobile').focus();
		return false;
    //$('#mobileLabel').html('<span class="error"> Numbers only</span>');clr=1;
  }*/
  if(document.getElementById('message').value=='')
  {
   document.getElementById('id1').innerHTML='';
   document.getElementById('id2').innerHTML='';
   document.getElementById('id3').innerHTML='';
   document.getElementById('id4').innerHTML='<span style="color:#DE1616;">Enter the Message</span>';
   document.getElementById('message').focus();
   return false;
 }
 if(document.getElementById('message').value.length <=10)
 {
   document.getElementById('id1').innerHTML='';
   document.getElementById('id2').innerHTML='';
   document.getElementById('id3').innerHTML='';
   document.getElementById('id4').innerHTML='<span style="color:#DE1616;">Enter the Message in atleast 10 Characters</span>';
   document.getElementById('message').focus();
   return false;
 }
 if(document.getElementById('txtInput').value=="")
 {

  document.getElementById('id5').innerHTML='<span style="color:#DE1616;">Enter the Captcha</span>';
  document.getElementById('txtInput').focus();
  return false;
}
else
{
 document.getElementById('id1').innerHTML='';
 document.getElementById('id2').innerHTML='';
 document.getElementById('id3').innerHTML='';
 document.getElementById('id4').innerHTML='';
 document.getElementById('id5').innerHTML='';
 document.getElementById("formreg").submit();

 return true;
}


/*	var captcha=ValidBotBoot();
	
	if(captcha==false) {
		alert("Please enter valid captcha code");
		document.getElementById('BotBootInput').focus();
		return false;
	}*/
	
	/*if(document.getElementById('reg_answer').value=='')
		{
		alert("Please enter the captcha code");
		document.getElementById('reg_answer').focus();
		return false;
		}
		if(document.getElementById('reg_answer').value!='')
		{
		if(document.getElementById('reg_answer').value!=document.getElementById('total').value)
        {
		alert("Please enter the valid captcha code");
		document.getElementById('reg_answer').focus();
		return false;
		}
  }*/

}

function echeck(str) 
{

  var at="@";
  var dot=".";
  var lat=str.indexOf(at);
  var lstr=str.length;
  var ldot=str.indexOf(dot);
  if (str.indexOf(at)==-1){

   return false;
 }

 if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){

   return false;
 }

 if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){

  return false;
}

if (str.indexOf(at,(lat+1))!=-1){

  return false;
}

if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){

  return false;
}

if (str.indexOf(dot,(lat+2))==-1){

  return false;
}

if (str.indexOf(" ")!=-1){

  return false;
}

return true;			
}

</script>

<!--<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-1.2.6.min.js"></script>-->
  <!--ADVANCED SEARCH POPUP-->

  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header avd-serbg">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
          <h4 class="modal-title mode-tit" id="myModalLabel">Advanced Search</h4>
        </div>
        <div class="modal-body avdbg1a">
          <div id="divsearch"></div>
          <form class="form-horizontal m10" name="advancesearchform" id="advancesearchform" action="http://198.38.86.159/~onlineexamboard/demo/advanced-job-portal/searchpage.php" >   
           <div class="form-group m20">
            <label class="col-sm-4 pedit2 text-right mtop4">Keyskills: </label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="ad-keyword" name="advkeyword" autocomplete="off" placeholder="Skills, Designation. Companies">
            </div>
          </div>        
          <div class="form-group m20">
            <label class="col-sm-4 pedit2 text-right mtop4">Location: </label>
            <div class="col-sm-5">
              <input type="text" id="adv-location" autocomplete="off" name="location" class="form-control" placeholder="Enter the cities you want to work in">
            </div>
          </div>   

          <div class="form-group">
            <label class="col-sm-4 pedit2 text-right mtop4">Work Experience: </label>
            <div class="col-sm-2 padno">
              <div class="col-sm-9">
                <select name="advexperience" id="advexperience" class="form-control ">
                 <option value="" selected="">Select</option>
                 <!--  <option value="99">Fresher</option>-->
                 <option value="0">0</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
                 <option value="9">9</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>
                 <option value="13">13</option>
                 <option value="14">14</option>
                 <option value="15">15</option>
                 <option value="16">16</option>
                 <option value="17">17</option>
                 <option value="18">18</option>
                 <option value="19">19</option>
                 <option value="20">20</option>
                 <option value="21">21</option>
                 <option value="22">22</option>
                 <option value="23">23</option>
                 <option value="24">24</option>
                 <option value="25">25</option>
                 <option value="25">Above 25 Years</option>
                                       <!--<option value="0" label="0">0</option>
                                       <option value="1" label="1">1</option>
                                       <option value="2" label="2">2</option>
                                       <option value="3" label="3">3</option>
                                       <option value="4" label="4">4</option>-->
                                     </select>
                                   </div>
                                   <label>Years </label>
                                 </div><!--col-sm-6-->
                                 <div class="col-sm-3 padno">
                                  <div class="col-sm-8">
                                    <select id="admonths" name="admonths" class="form-control">
                                     <option value="" selected="">Select</option>
                                     <option value="0">0</option>
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option>
                                     <option value="4">4</option>
                                     <option value="5">5</option>
                                     <option value="6">6</option>
                                     <option value="7">7</option>
                                     <option value="8">8</option>
                                     <option value="9">9</option>
                                     <option value="10">10</option>
                                     <option value="11">11</option>
                                     <option value="12">12</option>
                                     <option value="13">13</option>
                                     <option value="14">14</option>
                                     <option value="15">15</option>
                                     <option value="16">16</option>
                                     <option value="17">17</option>
                                     <option value="18">18</option>
                                     <option value="19">19</option>
                                     <option value="20">20</option>
                                     <option value="21">21</option>
                                     <option value="22">22</option>
                                     <option value="23">23</option>
                                     <option value="24">24</option>
                                     <option value="25">25</option>
                                     <option value="25">Above 25 Years</option>
                                   </select>
                                 </div>
                                 <label> Months </label>
                               </div>
                             </div>

                             <div class="form-group">
                              <label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
                              <div class="col-sm-2 padno">
                                <div class="col-sm-10">
                                  <select name="advsalary" class="form-control ">
                                   <option value="" selected="">Min</option>
                                   <option value="0">0 Lacks</option>
                                   <option value="1">1 Lacks</option>
                                   <option value="2">2 Lacks</option>
                                   <option value="3">3 Lacks</option>
                                   <option value="4">4 Lacks</option>
                                   <option value="5">5 Lacks</option>
                                   <option value="6">6 Lacks</option>
                                   <option value="7">7 Lacks</option>
                                   <option value="8">8 Lacks</option>
                                   <option value="9">9 Lacks</option>
                                   <option value="10">10 Lacks</option>
                                   <option value="11">11 Lacks</option>
                                   <option value="12">12 Lacks</option>
                                   <option value="13">13 Lacks</option>
                                   <option value="14">14 Lacks</option>
                                   <option value="15">15 Lacks</option>
                                   <option value="16">16 Lacks</option>
                                   <option value="17">17 Lacks</option>
                                   <option value="18">18 Lacks</option>
                                   <option value="19">19 Lacks</option>
                                   <option value="20">20 Lacks</option>
                                   <option value="21">21 Lacks</option>
                                   <option value="22">22 Lacks</option>
                                   <option value="23">23 Lacks</option>
                                   <option value="24">24 Lacks</option>
                                   <option value="25">25 Lacks</option>

                                   <option value="25">Above 25 Lacks</option>
                                       <!--<option value="99">100000</option>
                                         <option value="0" label="0">200000</option>-->

                                       </select>
                                     </div>
                                     <label><i class="fa fa-jpy"></i> </label>
                                   </div><!--col-sm-6-->
                                   <div class="col-sm-3 padno">
                                    <div class="col-sm-10">
                                      <select name="adv_max" class="form-control">
                                       <option value="" selected="">Max</option>
                                       <option value="0">0 Lacks</option>
                                       <option value="1">1 Lacks</option>
                                       <option value="2">2 Lacks</option>
                                       <option value="3">3 Lacks</option>
                                       <option value="4">4 Lacks</option>
                                       <option value="5">5 Lacks</option>
                                       <option value="6">6 Lacks</option>
                                       <option value="7">7 Lacks</option>
                                       <option value="8">8 Lacks</option>
                                       <option value="9">9 Lacks</option>
                                       <option value="10">10 Lacks</option>
                                       <option value="11">11 Lacks</option>
                                       <option value="12">12 Lacks</option>
                                       <option value="13">13 Lacks</option>
                                       <option value="14">14 Lacks</option>
                                       <option value="15">15 Lacks</option>
                                       <option value="16">16 Lacks</option>
                                       <option value="17">17 Lacks</option>
                                       <option value="18">18 Lacks</option>
                                       <option value="19">19 Lacks</option>
                                       <option value="20">20 Lacks</option>
                                       <option value="21">21 Lacks</option>
                                       <option value="22">22 Lacks</option>
                                       <option value="23">23 Lacks</option>
                                       <option value="24">24 Lacks</option>
                                       <option value="25">25 Lacks</option>

                                       <option value="25">Above 25 Lacks</option>
                                     </select>
                                   </div>
                                   <label> <i class="fa fa-jpy"></i> </label>
                                 </div>
                               </div>
                               <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right mtop4"  >Industry:</label>
                                <div class="col-sm-5">
                                  <select name="advindustry" id="advindustry" class="form-control" placeholder="Select the industry where you want to work">
                                    <option value="">Select</option>

                                    <option value="56">Construction</option>
                                    <option value="53">IT - BPO</option>
                                    <option value="50">IT-ERP-Oracle</option>
                                    <option value="42">KPO/Technical Support</option>
                                    <option value="34">Law Enforcement</option>
                                    <option value="35">Legal/Law</option>
                                    <option value="55">Management</option>
                                    <option value="36">Marketing/Sales</option>
                                    <option value="52">mech</option>
                                    <option value="51">Media </option>
                                    <option value="37">Media/Journalism</option>
                                    <option value="54">NGO/Social Services</option>
                                    <option value="57">Others</option>
                                    <option value="38">Production/Manufacturing/Maintenance</option>
                                    <option value="59">sindhu</option>
                                    <option value="44">Strategy Management</option>
                                    <option value="58">test</option>
                                    <option value="46">test cate</option>
                                    <option value="40">Tours and Travel</option>
                                    <option value="41">Transportation</option>
                                  </select>
                                  You can select at max 2 Industries
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right mtop4"  >Job Category:</label>
                                <div class="col-sm-5">
                                  <select name="advfarea" id="advfarea" class="form-control" placeholder="Select the industry where you want to work">
                                    <option value="">Select</option>
                                    <option value="349">0 - 044 -</option>
                                    <option value="340">Accessory Designer</option>
                                    <option value="99">Accountant</option>
                                    <option value="73">Accounts Assistant</option>
                                    <option value="241">Accounts Manager</option>
                                    <option value="339">AD</option>
                                    <option value="154">Administration</option>
                                    <option value="316">Air Hostess/Steward/Cabin Crew</option>
                                    <option value="183">Anaesthetist</option>
                                    <option value="83">Animator</option>
                                    <option value="176">Apparel / Garment Designer</option>
                                    <option value="136">Architects</option>
                                    <option value="272">Art Director</option>
                                    <option value="258">Asst. Sales Manager</option>
                                    <option value="159">Autocad Draughtman/Designer</option>
                                    <option value="84">AV Executive</option>
                                    <option value="100">Bank Assurance</option>
                                    <option value="101">Banking - General</option>
                                    <option value="211">Banquet Manager</option>
                                    <option value="184">Beautician</option>
                                    <option value="185">Bio-Technology Research</option>
                                    <option value="317">Branch Head</option>
                                    <option value="259">Branch Manager</option>
                                    <option value="286">Building Inspection</option>
                                    <option value="260">Business Analyst</option>
                                    <option value="261">Business Development Executives</option>
                                    <option value="273">Cameraman</option>
                                    <option value="327">Cargo</option>
                                    <option value="137">Carpenter</option>
                                    <option value="74">Chartered Accountant</option>
                                    <option value="186">Chemical Research Scientist</option>
                                    <option value="187">Chemist</option>
                                    <option value="341">chennai</option>
                                    <option value="212">Chief Chef</option>
                                    <option value="160">Chief Engineer</option>
                                    <option value="161">Civil Engineer</option>
                                    <option value="102">Clerk/Office Boy</option>
                                    <option value="247">Company Secretary</option>
                                    <option value="293">Computer Operator/Data Entry</option>
                                    <option value="124">Configuration Manager</option>
                                    <option value="350">Construction</option>
                                    <option value="138">Construction Manager</option>
                                    <option value="274">Content Developer</option>
                                    <option value="139">Controller</option>
                                    <option value="275">Correspondent/Reporter</option>
                                    <option value="75">Cost Accountant</option>
                                    <option value="155">Councellor</option>
                                    <option value="328">Courier/Delivery</option>
                                    <option value="140">Crane Operator</option>
                                    <option value="262">Customer Relationship Officer</option>
                                    <option value="112">Customer Service Executive (Non Voice)</option>
                                    <option value="113">Customer Service Executive (Voice)</option>
                                    <option value="162">Customer Service/Tech. Support</option>
                                    <option value="223">Data Entry/Computer Operator</option>
                                    <option value="114">Data Processing Executive</option>
                                    <option value="125">Database Administrator</option>
                                    <option value="298">Database Programmer</option>
                                    <option value="297">DBA</option>
                                    <option value="188">Dentist</option>
                                    <option value="189">Dietician</option>
                                    <option value="329">Dockworker</option>
                                    <option value="190">Doctor</option>
                                    <option value="318">Documentation and Visa</option>
                                    <option value="319">Domestic Travel</option>
                                    <option value="191">ECG/CGA Technician</option>
                                    <option value="163">Electrical Engineer</option>
                                    <option value="141">Electrician</option>
                                    <option value="164">Engineer</option>
                                    <option value="143">Equipment Operator</option>
                                    <option value="103">Equity Analyst</option>
                                    <option value="85">Event Coordinator</option>
                                    <option value="86">Event/Promotios Manager</option>
                                    <option value="76">External Auditor</option>
                                    <option value="213">F & B Manager</option>
                                    <option value="126">Faculty</option>
                                    <option value="77">Finance Assistant</option>
                                    <option value="165">Foreman</option>
                                    <option value="330">Forklift Operator</option>
                                    <option value="214">Front Office Executive</option>
                                    <option value="345">gdfgdf</option>
                                    <option value="263">GM- Marketing</option>
                                    <option value="294">Graphic Designer /Animator</option>
                                    <option value="320">Ground Staff</option>
                                    <option value="127">H/W Installation / Maintenance Engg</option>
                                    <option value="128">Hardware Design Technical Leader</option>
                                    <option value="347">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                                    <option value="348">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                                    <option value="144">Heavy Equipment Operator</option>
                                    <option value="215">Hostess</option>
                                    <option value="193">House Keeping</option>
                                    <option value="216">House Keeping Executive</option>
                                    <option value="225">HR Executive / Recruiter</option>
                                    <option value="226">HR Manager</option>
                                    <option value="129">Instructional Designer</option>
                                    <option value="104">Insurance / Financial Advisor</option>
                                    <option value="105">Insurance Telesales</option>
                                    <option value="166">Interior Designer</option>
                                    <option value="78">Internal Auditor</option>
                                    <option value="343">it software- application programming / maintenance</option>
                                    <option value="346">IT-ERP- Business Analyst</option>
                                    <option value="177">Jewellery Designer</option>
                                    <option value="217">Kitchen Manager</option>
                                    <option value="194">Lab Technician</option>
                                    <option value="146">Laborer</option>
                                    <option value="248">Law Officer</option>
                                    <option value="249">Lawyer</option>
                                    <option value="250">Legal Adviser</option>
                                    <option value="251">Legal Assistant</option>
                                    <option value="252">Legal Consultant</option>
                                    <option value="253">Legal Editor</option>
                                    <option value="254">Legal Services - Manager</option>
                                    <option value="156">Librarian</option>
                                    <option value="331">Logistics Manager</option>
                                    <option value="235">Machine Operator</option>
                                    <option value="236">Machinist</option>
                                    <option value="237">Maintenance Supervisor</option>
                                    <option value="321">Management Trainee</option>
                                    <option value="322">Manager</option>
                                    <option value="79">Manager - Accounts</option>
                                    <option value="80">Manager- Finance Planning</option>
                                    <option value="228">Manager/Co-ordinator</option>
                                    <option value="264">Marketing Executives</option>
                                    <option value="265">Marketing Manager</option>
                                    <option value="167">Mechanical Engineer</option>
                                    <option value="238">Mechanical Technician</option>
                                    <option value="89">Media Planning - Manager / Executive</option>
                                    <option value="195">Medical Assistant</option>
                                    <option value="196">Medical Representative</option>
                                    <option value="115">Medical Transcriptionist</option>
                                    <option value="197">Medical Writer</option>
                                    <option value="179">Merchandiser</option>
                                    <option value="198">Microbiologist</option>
                                    <option value="148">Mining</option>
                                    <option value="107">Mutual Funds</option>
                                    <option value="130">Network Administrator</option>
                                    <option value="131">Network Designer</option>
                                    <option value="295">Network Engineer</option>
                                    <option value="278">News Editor</option>
                                    <option value="279">News Reador</option>
                                    <option value="199">Nurse</option>
                                    <option value="200">Nutritionist</option>
                                    <option value="323">Office Assistant</option>
                                    <option value="229">Office Secretary/AdminOfficer</option>
                                    <option value="287">Officer</option>
                                    <option value="108">Operations</option>
                                    <option value="332">Operations Management</option>
                                    <option value="201">Opthamologist</option>
                                    <option value="296">Oracle Developer</option>
                                    <option value="132">Other</option>
                                    <option value="149">Painter</option>
                                    <option value="256">Patent</option>
                                    <option value="203">Pharmaceutical Research</option>
                                    <option value="204">Pharmacist</option>
                                    <option value="300">Photoshop</option>
                                    <option value="205">Physician</option>
                                    <option value="206">Physiotherapist</option>
                                    <option value="150">Plumber</option>
                                    <option value="288">Process Engineer</option>
                                    <option value="122">Process Engineers</option>
                                    <option value="281">Production Manager</option>
                                    <option value="289">Production Quality Assurance</option>
                                    <option value="301">Programmer</option>
                                    <option value="169">Project Manager</option>
                                    <option value="282">Proof Reader</option>
                                    <option value="257">Proof Reader (Law)</option>
                                    <option value="207">Public Health Administration</option>
                                    <option value="231">Public Relation Officer</option>
                                    <option value="312">QA</option>
                                    <option value="290">Quality Assurance Engineer</option>
                                    <option value="291">Quality Assurance Manager</option>
                                    <option value="292">Quality Control Inspector</option>
                                    <option value="208">Radiographer</option>
                                    <option value="232">Receptionist/Front Office Executive</option>
                                    <option value="109">Relationship Manager</option>
                                    <option value="239">Repairman</option>
                                    <option value="325">Reservation and Ticketing</option>
                                    <option value="219">Reservation Manager</option>
                                    <option value="220">Restaurant Manager</option>
                                    <option value="151">Roofing</option>
                                    <option value="170">Safety Officer</option>
                                    <option value="268">Sales Executives</option>
                                    <option value="269">Sales Manager</option>
                                    <option value="97">Sales/Marketing Executive</option>
                                    <option value="209">Scientist</option>
                                    <option value="243">Security Guard</option>
                                    <option value="240">Security Installation</option>
                                    <option value="221">Security Manager</option>
                                    <option value="333">Shipping And Receiving</option>
                                    <option value="245">Site Manager</option>
                                    <option value="304">Software Application Developer</option>
                                    <option value="305">Software Engineer</option>
                                    <option value="222">Steward/Waiter</option>
                                    <option value="180">Stiching/Tailor</option>
                                    <option value="110">Stock Broking</option>
                                    <option value="171">Store Keeper</option>
                                    <option value="91">Studio Operation Manager</option>
                                    <option value="283">Sub Editor</option>
                                    <option value="95">Supervisor</option>
                                    <option value="181">Supervisor/Officer</option>
                                    <option value="172">Surveyor</option>
                                    <option value="306">System Administrator</option>
                                    <option value="133">System Analyst</option>
                                    <option value="303">System Programmer</option>
                                    <option value="81">Taxation - Manager</option>
                                    <option value="157">Teaching/Professor/Lecturer</option>
                                    <option value="117">Team Leader</option>
                                    <option value="308">Technical Architect</option>
                                    <option value="134">Technical Leader</option>
                                    <option value="135">Technical Support Engineer</option>
                                    <option value="118">Technical Support Executive (Voice)</option>
                                    <option value="309">Technical Writer</option>
                                    <option value="173">Technician</option>
                                    <option value="271">Tele Marketing Executives</option>
                                    <option value="119">Telemarketing Executive</option>
                                    <option value="311">Testing Engineer</option>
                                    <option value="182">Textile Designer</option>
                                    <option value="326">Tour Operator</option>
                                    <option value="335">Train Operator</option>
                                    <option value="120">Trainee/Management Trainee</option>
                                    <option value="313">Trainer</option>
                                    <option value="246">Training Officer</option>
                                    <option value="284">Translator</option>
                                    <option value="336">Transportation Supervisor</option>
                                    <option value="233">Travel/Immigration Coordinator</option>
                                    <option value="337">Truck Driver</option>
                                    <option value="234">Typist</option>
                                    <option value="210">Veterinary</option>
                                    <option value="285">Video Editor</option>
                                    <option value="92">Visualiser- Art Director</option>
                                    <option value="121">Voice & Accent Trainer</option>
                                    <option value="338">Warehouse Worker</option>
                                    <option value="314">Web Designer</option>
                                    <option value="315">Web Developer</option>
                                    <option value="153">Welder</option>
                                    <option value="174">Workman / Foreman / Technician</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right mtop4"  >Job Type:</label>
                                <div class="col-sm-5">  
                                 <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary2 active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked value="">  All Jobs 
                                  </label>
                                  <label class="btn btn-primary2">
                                    <input type="radio" name="options" id="option2" autocomplete="off" value="Company"> Company Jobs 
                                  </label>
                                  <label class="btn btn-primary2">
                                    <input type="radio" name="options" id="option3" autocomplete="off" value="Consultant"> Consultant Jobs
                                  </label>
                                </div>
                              </div>
                            </div>  
                            <div class="form-group">
                              <label class="col-sm-4 pedit2 text-right mtop4"  > Sort By:</label>
                              <div class="col-sm-5">  
                               <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary2 active">
                                  <input type="radio" name="options1" id="option1" autocomplete="off" checked> Relevance  
                                </label>
                                <label class="btn btn-primary2">
                                  <input type="radio" name="options2" id="option2" value="date" autocomplete="off">  Date
                                </label>
                              </div>
                            </div>
                          </div> 
                          <div class="form-group">
                           <input type="hidden" name="hiddenval" value="valhid" />
                           <div class="col-sm-12 text-center"><input name="advancesearch" class="btn-blue btn bc3" onclick="advancedsearch()" value="Search" type="button"> </div>
                         </div>   
                       </form>
                     </div>
                   </div>
                 </div>
               </div>

               <!--ADVANCED SEARCH POPUP END-->

               <!--CREATE JOB ALERT POPUP-->

               <div class="modal fade bs-example-modal-lg2" id="createjob" tabindex="-1" role="dialog" aria-labelledby="search">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header avd-serbg">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                      <h4 class="modal-title mode-tit" id="myModalLabel">Tell us what kind of jobs you want</h4>
                    </div>
                    <div class="modal-body avdbg1a">
                     <form class="form-horizontal m10" name="myform1">   
                       <div class="form-group m20">
                        <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Keyword:</label>
                        <div class="col-sm-5">
                          <input type="text" name="keywordalert" id="keywordalert" class="form-control" placeholder="Skills, Designation. Companies">
                        </div>
                        <div><span id="keywordinfo"></span></div>
                      </div>        
                      <div class="form-group m20">
                        <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Location: </label>
                        <div class="col-sm-5">
                          <input type="text" name="locationalert" id="locationalert" class="form-control" placeholder="Enter the cities you want to work in">
                        </div>
                        <div><span id="locationinfo"></span></div>
                      </div>   

                      <div class="form-group">
                        <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Work Experience: </label>
                        <div class="col-sm-2 padno">
                          <div class="col-sm-9">
                            <select class="form-control " name="workexp" id="workexp">
                             <option value="">Select</option>
                             <option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option>                                    </select>
                           </div>

                           <label>Years </label>
                         </div><!--col-sm-6-->
                         <div class="col-sm-3 padno">
                          <div class="col-sm-8">
                            <select class="form-control" name="workexpmon" id="workexpmon">
                             <option value="">Select</option>

                             <option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>                                    </select>
                           </div>
                           <label> Months </label>
                         </div>
                         <div><span id="workinfo"></span></div>
                       </div>

                       <div class="form-group">
                        <label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
                        <div class="col-sm-2 padno">
                          <div class="col-sm-9">
                            <select class="form-control " name="salmin" id="salmin">
                             <option value="">Min</option>
                             <option value="0.5">0.5</option>
                             <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
                           </div>

                         </div><!--col-sm-6-->
                         <div class="col-sm-3 padno">
                          <div class="col-sm-8">
                            <select class="form-control" name="salmax" id="salmax">
                             <option value="">Max</option>
                             <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
                           </div>
                           <label>In Lakhs </label>
                         </div>
                       </div>
                       <div class="form-group">
                        <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Industry:</label>
                        <div class="col-sm-5">
                          <select name="indus" id="indus" class="form-control " placeholder="Select the industry where you want to work">
                           <option value=''>-&nbsp;Select&nbsp;-</option>

                           <option value='Construction'>Construction</option><option value='IT - BPO'>IT - BPO</option><option value='IT-ERP-Oracle'>IT-ERP-Oracle</option><option value='KPO/Technical Support'>KPO/Technical Support</option><option value='Law Enforcement'>Law Enforcement</option><option value='Legal/Law'>Legal/Law</option><option value='Management'>Management</option><option value='Marketing/Sales'>Marketing/Sales</option><option value='mech'>mech</option><option value='Media '>Media </option><option value='Media/Journalism'>Media/Journalism</option><option value='NGO/Social Services'>NGO/Social Services</option><option value='Others'>Others</option><option value='Production/Manufacturing/Maintenance'>Production/Manufacturing/Maintenance</option><option value='sindhu'>sindhu</option><option value='Strategy Management'>Strategy Management</option><option value='test'>test</option><option value='test cate'>test cate</option><option value='Tours and Travel'>Tours and Travel</option><option value='Transportation'>Transportation</option>								</select>

                         </div>
                         <div><span id="industryinfo"></span></div>
                       </div>

                       <div class="form-group">
                        <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Job Category:</label>
                        <div class="col-sm-5">
                          <select name="jobcat" id="jobcat" class="form-control " placeholder="Select the industry where you want to work" >

                           <option value='' >--Select--</option> 			  

                           <option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


                         </div>
                         <div><span id="categoryinfo"></span></div>
                       </div>
                       <div class="form-group">
                        <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Role:</label>
                        <div class="col-sm-5">  
                          <select name="jobrole" id="jobrole" class="form-control " placeholder="Select the role where you want to work" >

                           <option value='' >--Select--</option> 			  

                           <option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


                         </div>
                         <div><span id="roleinfo"></span></div>
                       </div>  
                       <div class="form-group">
                        <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Name Your Job Alert:</label>
                        <div class="col-sm-5">  
                         <input type="text" name="namealert" id="namealert" class="form-control" placeholder="Enter a name that will help you reconize this job alert">

                       </div>
                       <div><span id="nameinfo"></span></div>
                     </div>  
                     <div class="form-group">
                      <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Email Id:</label>
                      <div class="col-sm-5">  
                       <input type="email" name="emailalert" id="emailalert" class="form-control" placeholder="Enter a mail id">

                     </div>
                     <div><span id="emailinfo"></span></div>

                   </div>

                   <div class="form-group ">
                    <label class="col-sm-4 pedit2 text-right"></label>
                    <div class="col-sm-7">
                     <label class="checkbox-inline">
                      <input type="checkbox" name="closejob" id="inlineCheckbox1" value="1"> <span class="redstar">*</span> Also send me job closely related to my search terms.
                    </label>
                  </div>

                </div>

                <div class="form-group ">
                  <label class="col-sm-4 pedit2 text-right"></label>
                  <div class="col-sm-7">
                   <div ><span id="termsinfo"></span></div>
                 </div>

               </div>



               <div class="form-group">
                <div class="col-sm-12 text-center"><input class="btn-blue btn bc3" name="submitalert" onclick="return jobalertValidate();" value="Create Job Alert "> </div>
              </div>   
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--CREATE JOB ALERT END-->

    <div class="clearfix"></div>
