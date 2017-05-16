<?php
  $link = mysqli_connect("localhost", "root", "password", "hackershell");
  if($link === false)
  {
    //die("ERROR: Could not connect. " . mysqli_connect_error());
    echo "Could not connect to database";
    // Attempt insert query execution
    
  }
  else
  {
    echo nl2br("Connected successfully\n");
    echo "Host info: " . mysqli_get_host_info($link);
    if(isset($_POST["reg_name"]))
    {
      $name = $_POST['reg_name'];

      //$name = mysql_real_escape_string($name);
      $password = $_POST['reg_password'];
      //$password = mysql_real_escape_string($password);
      $email = $_POST['reg_email'];
      //$email = mysql_real_escape_string($email);
      $sql = "INSERT INTO users (name, email, password) VALUES ('".$name."', '".$email."', '".$password."')";
      if(mysqli_query($link, $sql))
      {
        echo "<br>Records inserted successfully.<br>";
      }
      else
      {
        echo "<br>ERROR: Could not able to execute $sql. " . mysqli_error($link)."<br>";
      }
    }
    if(isset($_POST["heading"]))
    {
      $name = $_POST['name'];

      //$name = mysql_real_escape_string($name);
      $email = $_POST['email'];
      //$password = mysql_real_escape_string($password);
      $mobile = $_POST['heading'];
      $data = $_POST['article'];
      $otp = rand(1000,9999);
      $String = "https://control.msg91.com/api/sendhttp.php?authkey= <_MY_API_Key_> &mobiles=".$mobile."&message=".$otp."&sender=IWANUJ&route=4&country=91";
      //
      //echo $String;

      //$email = mysql_real_escape_string($email);
      $sql = "INSERT INTO otp (name, mobile, otp, data) VALUES ('".$name."', '".$mobile."', '".$otp."','".$data."')";
      if(mysqli_query($link, $sql))
      {
        echo "<br>Records inserted successfully.<br>";
        ?>
        
        <button onclick="myFunction()" >Your OPT has been generated. Please Click here so that we can sms you this OTP</button>
       <script>
       var link = "<?=$String;?>";
function myFunction() {
    window.open(link);
}
</script>
        
        <?php

      }
      else
      {
        echo "<br>ERROR: Could not able to execute $sql. " . mysqli_error($link)."<br>";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>OTP</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">

</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">WSS</a></h1>
      <h2>Web Security Solutions</h2>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="article.php">Articles</a></li>
        <li class="last"><a href="#">Implememtations</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div id="container">
  <!-- content body -->
  <h2>Welcome to Our Community.</h2><br>
    
      
      <p>A one-time password (OTP) is a password that is valid for only one login session or transaction, on a computer system or other digital device. OTPs avoid a number of shortcomings that are associated with traditional (static) password-based authentication; a number of implementations also incorporate two factor authentication by ensuring that the one-time password requires access to something a person has (such as a small keyring fob device with the OTP calculator built into it, or a smartcard or specific cellphone) as well as something a person knows (such as a PIN).</p>

      <p>The most important advantage that is addressed by OTPs is that, in contrast to static passwords, they are not vulnerable to replay attacks. This means that a potential intruder who manages to record an OTP that was already used to log into a service or to conduct a transaction will not be able to abuse it, since it will no longer be valid. A second major advantage is that a user who uses the same (or similar) password for multiple systems, is not made vulnerable on all of them, if the password for one of these is gained by an attacker. A number of OTP systems also aim to ensure that a session cannot easily be intercepted or impersonated without knowledge of unpredictable data created during the previous session, thus reducing the attack surface further.</p>
      <button type="button" onclick="document.getElementById('id_article_form').style.display='block'" style="width:auto;">Click here to Fill OTP-Form</button> <hr>
   	<section id="form_article" >
        <!-- article 1 -->

      <div id="id_article_form" class="modal1">

        <form class="modal-content animate" method="POST" name="article_form_name" action="" >
          <div class="container">
            Name: <br>
            <input type="text" name="name" id="name" style="width:70%"><br>
            Email: <br>
            <input type="text" name="email" id="email" style="width:70%"><br>
            Your Mobile Number:<br>
            <input type="text" name="heading" id="heading" style="width:70%"><br>
            Please Enter a short text here:<br> <textarea name="article" id="art1" cols="40" rows="8"></textarea><br>
            <button type="submit" style="width:100px;" name="submit" >Submit</button>
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id_article_form').style.display='none'" class="cancelbtn">Cancel</button>
        
          </div>
        </form>
      </div>

        <!-- article 3 -->
  <aside id="right_column">
    <h2 class="title">Site Navigation</h2>
    <nav>
      <ul>
        <li><a href="#">Current Page</a></li>
        <li><a href="#">Current Page</a>
          <ul>
            <li><a href="#">Current Page</a></li>
            <li><a href="#">Current Page</a></li>
          </ul>
        </li>
        
        <li><a href="#">Current Page</a></li>
      </ul>
    </nav>
    <h2 class="title">Current Page</h2>
    <section>
      <!-- article 1 -->
     
      <article>
        <h2>Post Title</h2>
        <address>
        jabalpur, India
        </address>
        <time >Thursday, 16<sup>th</sup> Feburary 2017 @08:15:00</time>
        <p>This is a random text. It will be replaced by something when my brain starts working. I guess 9 hrs of continuous coding is sufficient for a human in one night.</p>
      </article>
      <!-- / articles -->
    </section>
  </aside>      
   	</section>

  <!-- right column -->
  
  <!-- / content body -->
  <div class="clear"></div>
</div>

<!-- footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; Abhishek Chelawat, Anuj Mehta, Anuj Dubey  <a href="#"></a></p>
  </footer>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function()
{
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
   img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


var modal = document.getElementById('id_article_form');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
<?php
//Fetching records from database and displaying it on screen.
/*
    $sql = "SELECT * FROM article";
    if($result = mysqli_query($link, $sql))
    {
      echo "<br>";
      if(mysqli_num_rows($result) > 0)
      {
        while($row = mysqli_fetch_array($result))
        {
          print_r($row);
          echo "<br>";
          echo $row['data'];
          echo "<br>";
          ?>
          <script>
            var name = '<?=$row["author"]?>';
            var email = "abc@abcabc";
            var heading = '<?= $row['heading']; ?>';
            var article = '<?= $row['data']; ?>';
            console.log(name);
            console.log(email);
            console.log(heading);
            console.log(article);

            var dh2 = document.createElement("h2");
            var  dh2_text = document.createTextNode(heading);
            dh2.appendChild(dh2_text);

            var dimg = document.createElement("img");
            dh2.className += "one_third";
            dimg.setAttribute("src", "images/demo/anuj.jpg"); dimg.setAttribute("src", "images/demo/anuj.jpg");
            dimg.style.float = "left"; dimg.style.width = "80px"; dimg.style.height = "80px"; 
            dimg.style.margin = "0 10px 10px 0"; dimg.style.padding = "4px"; dimg.style.border = "1px solid #DEDEDE"; 
            
            var dp = document.createElement("p");
            var  dp_text = document.createTextNode(article);
            dp.appendChild(dp_text);

            var dfooter = document.createElement("footer");
            dh2.className += "more";

            var da = document.createElement("a");
            da.href = "#";
            var  da_text = document.createTextNode("read More &raquo;");
            dp.appendChild(da);

            var darticle = document.createElement("article");
            darticle.className += "one_third";
            darticle.appendChild(dh2); darticle.appendChild(dimg); darticle.appendChild(dp);
            darticle.appendChild(dfooter);

            var services = document.getElementById('services');
            services.appendChild(darticle);

          </script>
          
          <?php
          //echo "<script> addarticle2('This is just a data');</script>";
        }
      }
      echo "<br>";
      print_r($result);
    }
*/
?>
