<?php
    session_start();
	require "includes/connect.php";
    require "includes/mailer.php";
	date_default_timezone_set("Africa/Nairobi");
    $date = date("m/d/Y g:iA");
    $ddate = date("Y_m_d_H_i_s");
    $snapshot_self_email = "ganiamtech@gmail.com";

	//Subscribe to Newsletter
if(isset($_POST['sub_newsletter'])){
    $em = mysqli_real_escape_string($conn, $_POST["sub_newsletter"]);
    $output = 1;
    
    $chkres = $conn->query("SELECT * FROM subscriber WHERE email = '$em'");
    if($chkres->num_rows > 0){
        $output = 0; //Already subscribed
    }else{
        $qry = "INSERT iNTO subscriber (email, date_subscribed) VALUES ('$em', '$date')";
        $res = $conn->query($qry);
    }

    echo json_encode($output);
}

//Contact Us form
if(isset($_POST['contactEnquiry'])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $em = mysqli_real_escape_string($conn, $_POST["contactEnquiry"]);
    $sub = mysqli_real_escape_string($conn, $_POST["sub"]);
    $sms = mysqli_real_escape_string($conn, $_POST["sms"]);
    $output = 1;
    $_SESSION['thank_you_name'] = " ".$name;
    
    $qry = "INSERT iNTO enquiries (name, email, subject, message, date_created) VALUES ('$name', '$em', '$sub', '$sms', '$date')";
    $res = $conn->query($qry);
    
    echo $output;

    $emsubject = "New Enquiry From the Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new enquiry from the website - Contact Us page <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$em." <br/>
        <b>Subject:</b> ".$sub." <br/>
        <b>Message:</b> ".$sms." <br/>
        </p> 
    ";

    maillinge($snapshot_self_email, $emsubject, $embody);
}




if(isset($_POST['ganiamrequest'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $meth = $_POST['contmethod'];
    $serviceOption = '';
    if(isset($_POST['service_option'])){
        $serviceOption = strip_tags(trim($_POST['service_option']));
    }

    $insert = "INSERT INTO lead (name, email, phone, message, date_created) VALUES ('$name', '$email', '$phone', '$desc', '$date')";
    $conn->query($insert);


    $emsubject = "New Enquiry from the GaniamTech Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website (ganiamtech) <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> <a href='tel:".$phone."'>".$phone."</a> <br/>
        <b>Additional info:</b> ".$desc." <br/>
        <b>Via:</b> ".$meth." <br/>
    ";
    if($serviceOption !== ''){
        $embody .= "
        <b>Service option:</b> ".$serviceOption." <br/>
    ";
    }
    $embody .= "
        </p>
    ";
    $_SESSION['thankyou_name'] = $name;

    maillinge($snapshot_self_email, $emsubject, $embody);

    header('location: thank-you.php');
    exit();
}



if(isset($_POST['ganiamrequestecom'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $meth = $_POST['contmethod'];

    $insert = "INSERT INTO lead (name, email, phone, company, message, date_created) VALUES ('$name', '$email', '$phone', '$company', '$desc', '$date')";

    $conn->query($insert);


    $emsubject = "New Enquiry from the GaniamTech Website (Ecommerce)";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website (ecommerce.ganiamtech) <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Business:</b> ".$company." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> <a href='tel:".$phone."'>".$phone."</a> <br/>
        <b>Additional info:</b> ".$desc." <br/>
        <b>Contact via:</b> ".$meth." <br/>
        </p> 
    ";
    $_SESSION['thankyou_name'] = $name;

    maillinge($snapshot_self_email, $emsubject, $embody);

    header('location: thank-you-ecom.php');
    exit();
}



if(isset($_POST["contform"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $service = mysqli_real_escape_string($conn, $_POST["service"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
   


    $insert = "INSERT INTO lead (name, email, phone, service_type, message, date_created) VALUES ('$name', '$email', '$phone', '$service', '$desc', '$date')";

    $emsubject = "New Enquiry from the website by $name";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Sender details:</b><br/><br/>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Service:</b> ".$service." <br/>
        <b>Additional info:</b> ".$desc." <br/>
        </p> 
    ";
    $_SESSION['thank'] = $name;

    maillinge($self_email, $emsubject, $embody);
    //maillinge("ganiamtech@gmail.com", $emsubject, $embody);

    
    if ($conn->query($insert)===TRUE){
          
        header('location: thank-you-contact.php');
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: contact.php");
    }

    
    
    exit();
}
elseif(isset($_POST["booking"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $make = mysqli_real_escape_string($conn, $_POST["make"]);
    $model = mysqli_real_escape_string($conn, $_POST["model"]);
    $bdate = mysqli_real_escape_string($conn, $_POST["bdate"]);
    $service = mysqli_real_escape_string($conn, $_POST["service"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
   


    $insert = "INSERT INTO booking (fname, service, email, phone, make, model, bdate, description, date_created) VALUES ('$name', '$service', '$email', '$phone', '$make', '$model', '$bdate', '$desc', '$date')";

    
    $emsubject = "New Booking from the Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Sender details:</b><br/><br/>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Car:</b> ".$make." ".$model." <br/>
        <b>Date of Booking:</b> ".date('d/m/Y H:m A', strtotime($row['date_created']))." <br/>
        <b>Service Booked:</b> ".$service." <br/>
        <b>Additional info:</b> ".$desc." <br/>
        </p> 
    ";
    $_SESSION['thank'] = $name;

    maillinge($self_email, $emsubject, $embody);
    maillinge("ganiamtech@gmail.com", $emsubject, $embody);



    if ($conn->query($insert)===TRUE){
          
        header('location: thank-you-service.php');
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: book-service.php");
    }

    
    
    exit();
}
?>