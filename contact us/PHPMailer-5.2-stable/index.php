<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IPN-Service</title>
	<link rel="icon" type="image/png" href= "../../agence-communication-imprimerie-removebg-preview.png">
    <link rel="stylesheet" href=  "style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
	<style>
		
	#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}
	</style>
</head>
<body>




	
  <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">IPN-Service</h3>
          <p class="text">
           Contactez nous,envoyer nous vos message pour etre a jour avec vous , on vous reponds dans le plus que possible.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <a href="https://www.google.co.ma/maps/place/IPN:+Agence+de+communication+%26+Imprimerie+au+Maroc/@34.044261,-4.999535,15z/data=!4m5!3m4!1s0x0:0x5da9f1d5fc36f108!8m2!3d34.044261!4d-4.999535" style="color: black"><p>N°16 Résidence Al Fassiya Rue Tunisie VN Fès</p></a>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>ipn@gmail.ma</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>+212 535 94 20 08</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/ipn.event">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/ipn_events/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/company/imagerie-pub-n%C3%A9on/mycompany/">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
        
			 <form action="Animation Text/index.html" onsubmit = "return validate();" autocomplete="off" id="myForm" >
            <h3 class="title">Contact us</h3>
				 <div id="error_message">
     
  </div>
            <div class="input-container">
              <input id="name" type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input id="email" type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input id="subject" type="tel" name="subject" class="input" />
              <label for="">Subject</label>
              <span>Subject</span>
            </div>
            <div class="input-container textarea">
              <textarea  id="body" name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input  onclick="sendEmail()" type="submit" value="Send" class="btn" />
				 
				<a href="../../index.php"> <input type="button" value="Return to web site" class="btn" /></a> 
          </form>
        </div>
      </div>
    </div>

		
      

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
			var a= validate()
			if(a==true){
   
  
	
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
				
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
				
					
				}else {
					 text = "Please Enter valid message";
    error_message.innerHTML = text;
    return false;
				}
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
	<script>
	
	function validate(){
	
  var name = document.getElementById("name").value;
	
	
	var body = document.getElementById("body").value;
	
  var subject = document.getElementById("subject").value;
  
  var email = document.getElementById("email").value;
  
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
	
  if(name.length < 3){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
	
	if(body.length < 5){
    text = "Please Enter valid message";
    error_message.innerHTML = text;
    return false;
  }
	
	
  if(subject.length < 2){
    text = "Please Enter Correct subject";
    error_message.innerHTML = text;
    return false;
  }
 
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
	
  
  
  return true;
}
	</script>
<script src="app.js"></script>
</body>
</html>