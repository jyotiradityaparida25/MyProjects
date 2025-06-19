<?php
include('skilldb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $cpassword = password_hash($_POST['cpassword'], PASSWORD_DEFAULT);
    $gender = $_POST['gender'];
    $info = $_POST['info'];
    $company = $_POST['company'];
    $skills = $_POST['skills'];
   
    $sql = "INSERT INTO regfree (full_name, dob, email, pno, country, city, address, pincode, password, cpassword, gender, info, company, skills) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    //'$fname', '$dob', '$email', '$phno','$country','$city','$address','$pincode','$password','$cpassword','$gender','$tellus','$haveyouever','$list'
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        input[type=submit] {
width: 50%;
background-color:rgb(0, 98, 255);
padding: 12px 16px;
color: white;
margin: 6px 0;
border: none;
border-radius: 4px;
cursor: pointer;
font-size: 16px;
font-weight: 600;
}

th,td{
    text-align: left;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
   
}
body{
      /* background-image: url('https://wallpapers.com/images/hd/professional-background-gpyiwar9suq43xgr.jpg');  */
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
}
/* h1,h2,p{
    color: black;
}*/
label,p{
    color:white;
} 
label{
    /* display: inline-block; */
    font-size: 14.5px;
    margin: 10px 0px 20px;
}
table{
    align-self: center;
    margin-left: auto;
    margin-right: auto;
     background:rgba(255, 255, 255, .1);
    backdrop-filter: blur(50px);
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    padding-left: 20px;

    
}
h1,h2{
    padding-left: 200px;
    color: white;

}
h1{
    padding-top: 25px;
    text-align: center;
    font-size: 40px;
    padding-bottom: 20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
h2{
    text-align: center;
    color:white;
}
 </style>
</head>
<body>
    <form action="LandingPage.php" method="post">
        

        <table style="width: 50%;">
            
            <tr>
                <!-- <th rowspan="17"><img src="https://miro.medium.com/v2/resize:fit:1400/1*MLnw1zny6I15TPcCdKYLdw.jpeg" alt="reg" width="700px" height="700px"></th> -->
               <th> <h1>Welcome User</h1>
            <!-- <h2>Sign Up</h2></th> -->
               
            </tr>
            <tr>
        <th><label for="fname">Full Name</label><br><input type="text" id="fname" name="full_name" placeholder="Please enter your"><i class='bx bxs-user' style='color:#fffdfd'  ></i></th>
        <th><label for="dob">Date of Birth</label><br><input type="date" id="dob" name="dob" placeholder="Please select"><i class='bx bxs-cake' style='color:#ffffff'  ></i></select></th>
        </tr>
        <tr>
        <th><label for="email">Email</label><br><input type="email" id="email" name="email" placeholder="Email"><i class='bx bxs-envelope' style='color:#fffdfd' ></i></th>
        <th><label for="pno">Phone Number</label><br><input type="number" name="pno" id="pno" placeholder="Phone Number"><i class='bx bxs-phone' style='color:#fffdfd' ></i></th>
        </tr>
        <tr>
        <th><label for="country">Country</label><br><input type="text" id="country" name="country" placeholder="Please enter your"><i class='bx bx-world' style='color:#fffdfd' ></i></th>
        <th><label for="city">City</label><br><input type="text" name="city" id="city" placeholder="Please enter your"><i class='bx bx-world' style='color:#fffdfd' ></i></th>
    </tr>
    <tr><th><label for="address">Address</label><br><input type="address" id="address" name="address" placeholder="Enter your address"><i class='bx bxs-home' style='color:#fffdfd' ></i></th>
        <th><label for="pincode">Pincode</label><br><input type="text" name="pincode" id="pincode" placeholder="Enter pincode "><i class='bx bxs-home' style='color:#fffdfd' ></i></th></tr>
    <tr>
    <tr>
        <th><label for="password">Password</label><br><input type="text" id="password" name="password" placeholder="Please enter your"><i class='bx bxs-lock-alt' style='color:#fffdfd' ></i></th>
        <th><label for="cpassword">Confirm Password</label><br><input type="text" id="cpassword" name="cpassword" placeholder="Please enter your"><i class='bx bxs-lock-alt' style='color:#fffdfd' ></i></th>
    </tr>
   
    <th>
        <label for="gen">Gender</label>
        </th>
        
    </tr>
    <tr><th><label>
        <input type="radio" name="gender" value="male"> Male
      </label>
      <label>
         <input type="radio" name="gender" value="female"> Female
      </label>
      <label>
         <input type="radio" name="gender" value="other"> Other
      </label>
      <label >
      <input type="radio" name="gender" value="prefer"> Prefer not to say
      </label>
    <br></th></tr>
    
    <tr><td colspan="2"><label for="info"><b>Tell us more about yourself</b></label><br><input type="text" name="info" id="info"></td></tr>
    <tr><th><label for="comp">Have you ever worked before for any company</label></th></tr>
    <tr><th><label>
        <input type="radio" name="company" value="yes">Yes
    </label>
<label>
    <input type="radio" name="company" value="no">No
</label></th></tr>
<tr><td colspan="2"><label for="skills"><b>List some of your top skills</b></label><br><input type="text" name="skills" id="skills"></td></tr>
<tr><td colspan="2"><label><input type="checkbox">I hereby declare that the above information is correct.</label></td></tr>
<tr><td colspan="2"><a href="LandingPage.php"><input type="submit" value="Sign Up" style="width: 400px;border-radius: 20px;"></a></td></tr>
<tr><td colspan="2"><p style="text-decoration: underline;">About Us</b></p></td></tr>
<tr><td colspan="2"><p>Welcome to <b>SKILLBIDDER</b>, where passion meets professionalism. We are a vibrant community of skilled freelancers from across the globe, dedicated to delivering exceptional services to clients seeking top-tier talent. Whether you're a startup in need of creative designs, a business looking for marketing expertise, or an entrepreneur seeking technical support, we have the perfect match for you.

        At <b>SKILLBIDDER</b>, we believe in the power of collaboration and innovation. Our platform connects businesses with experienced freelancers who excel in diverse fields such as design, development, writing, marketing, and more. Every freelancer is carefully vetted, ensuring you get access to reliable and skilled professionals ready to bring your vision to life.
        
        Our mission is simple: to empower freelancers and businesses by providing a seamless, trustworthy, and efficient platform where creativity and productivity thrive. We are committed to creating a space where freelancers can showcase their talents, and businesses can achieve their goals through our collective expertise.
        
        Join us, and let's make great things happen, together.</p></td></tr>
<tr><th></th></tr>
<tr><th></th></tr>

    </table>
  <table>
    </table>
    
    
    </form>
    
</body>
</html>