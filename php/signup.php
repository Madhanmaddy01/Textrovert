<?php 
    
    include_once "configure.php";
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
 
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
 
     if(filter_var($email,FILTER_VALIDATE_EMAIL)){
         $sql = mysql1_query($conn,"SELECT email FROM users WHERE email= '{$email}'");
         if(mysqli_query($sql) > 0){
             echo "$email-This email already exist!!"
 
         }else{
             if(isset($_FILES['image'])){
                 $img_name = $_FILES['image']['name']; //gettig user upload image name
                 $img_type =$_FILES['image']['type']; //getting user image type
                 $tmp_name =$_FILES['image']['temp_name']; //this temporary name is used to save filr in our folder
 
                 $img_explode = explode('.',$img_name)
                 $img_ext = end($img_explode); //here we can get extension of user uploding image
                 $extensions =['png','jpeg'.'jpg']
 
                 if(in_array($img_ext,$extensions)=== true){
                     $time = time();
 
                     $new_img_name = $time.$img_name;
                     if(move_uploaded_file($tmp_name,"images/".$new_img_name)){ //if user upload image move to our folder successfully
                     $status ="Active now";
                     $random_id = rand(time(),10000000);
 
                     $sql2= mysqli_query($conn,"INSERT INTO users (unique_id,fname,lname,email,password,img,status)
                     VALUES({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')")
                     if ($sql2){
                         $sql3 = mysqli_query($conn,"SELECT * FROM users WHERE email = '{$email}'");
                         if(mysqli_num_rows($sql3)> 0){
                             $row = mysqli_fetch_assoc($sql3);
                             $_SESSION['unique-id'] = $row['unique_id'];
                             echo "success";
                         }
                     }else{
 
                     }
                 
                 } //once user signup or sing in this will be active
 
                 }else{
                     echo "Please select an Image file - jpeg png jpg"
                 }
             }else{
                 echo "Please select an Image file!"
             }
         }
     }else{
         echo "$email-This is not valid email"
     }
    }else{
        echo "All field Required"
    }
 ?>
