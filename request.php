<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Whole Slide Cervical Histopathology Image Dataset (UCCD)</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- Bootstrap core CSS -->


</head>

<body>

    <div class="container">
        <header class="jumbotron subhead" id="overview">
            <p class="lead"> Istanbul Technical University </p>
            <h1>SIGNAL PROCESSING FOR COMPUTATIONAL INTELLIGENCE
</h1>
        </header>
        <div class="masthead">
            <div class="navbar">
                <div class="navbar-inner">
                     <div class="toggle">
                <div class="menu" id='menus' onclick="myFunction();">
                    <i class="fa fa-bars"></i></div>
            </div>
                    <div class="container">
                        <ul class="nav" id=navi>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="people.html">People</a></li>
                            <li><a href="research.html">Research</a></li>
                            <li><a href="publications.html">Publications</a></li>
                            <!--                        <li><a href="gallery.html">Gallery</a></li>-->
                            <!--                        <li><a href="news.html">News</a></li>-->
                            <!--                        <li><a href="teaching.html">Teaching</a></li>-->
                            <li class="active"><a href="#">Datasets</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
       

        


                <?php
                
                
                
          if(isset($_POST['submit'])) {
//              ini_set('display_startup_errors',1);
//            ini_set('display_errors',1);
//            error_reporting(E_ALL);
//                
                    require("php/class.phpmailer.php");

                      //email gönderme
                      $message =  'DATASET Contact Form: <br /><br /> 
									Name: ' . $_POST['name'] . ' <br>
									e-Mail: ' . $_POST['email'] . ' <br>
									Affiliation: ' . $_POST['affiliation'] . ' <br>
									Address: ' . $_POST['address'] . ' <br><br>
									Reason for Request: ' . $_POST['message'] . ' <br>

									';
              
              
                          $subject = "DATASET [CONTACT FORM]";
                          $sender_email = $_POST['email'];
                          $sender_user_name = $_POST['name'];

                          $mail = new  PHPMailer();

                          $mail->SMTPDebug = 1;           // Enable verbose debug output
                          $mail->IsSMTP();                // Sets up a SMTP connection  
                          $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
                          $mail->SMTPSecure = 'tls';      // Connect using a TLS connection  
                          $mail->Host = 'smtp.itu.edu.tr';  //Gmail SMTP server address
                          $mail->Port = 587;

                          $mail->Username = "spacing@itu.edu.tr";  // localhost email username
                          $mail->Password = "4d6N4N7zjK";

                               // set as the SMTP server

                          $mail->SetFrom($sender_email,$sender_user_name);
                          $mail->Subject = $subject;
                          $mail->MsgHTML($message);
                          $mail->AddAddress("cervixdataset@gmail.com", "Nurullah Calik");
              
//              
                          $mail->IsHTML(true); // send as HTML

                       if (!$mail->Send()) { //to see if we return a message or a value bolean
                          echo " Error occurred";
                      } else {
                          echo "Your message has been sent";
                         
                      }


          }
          ?>

            </div>
    
    <footer id="footer">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span5">
                    <h3>Contact Information</h3>
                    <p><b>Office Hours: </b>Monday-Friday (8.00am - 5.00pm)</p>
                    <p><b>Phone: </b>+90-212-2857392</p>
                    <a href="mailto:spacing@itu.edu.tr,toreyin@itu.edu.tr" >Email Us</a>
                </div>
                <div class="span2">
                    <a href="index.html"><img src="images/Resimnew.png" alt="research-lab-logo" /></a>
                </div>
                <div class="span5">
                    <h3>Address</h3>
                    <p>Sp4cing Research Lab
                        <br> İTÜ Ayazağa Kampüsü
                        <br> Sariyer, Istanbul
                        <br> Turkey 34467
                    </p>

                </div>
            </div>
        </div>
        </footer>
        <!-- /#wrapper -->

        <!-- Javascript files -->

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
      <!-- Bootstrap core JavaScript -->

        <script>
            $('#main-carousel').carousel();
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

        <script>
            function myFunction() {
                var x = document.getElementById("navi");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            };
        </script>
</body>

</html>