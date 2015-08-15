<?php
    session_start();
    require 'connect.inc.php';
    $required = ['name','DOB','college','city','phone_no','email','password','password_confirm'];
    $mysql_table = 'design_users';
    foreach($required as $field)
    {
        if(isset($_POST[$field]))
        {
            $error = false;
        }
        else
        {
            $error = true;
            echo $field;
            break;
        }
    }
    function uniqueNum()
    {
        global $mysql_table;
        $num = rand(100000, 999999);
        $query = "SELECT COUNT(*) FROM $mysql_table";
        $count = mysql_result(mysql_query($query), 0, 'COUNT(*)');
        return $count+BASE_NUMBER;
    }
    function test($data)
    {
        $data = trim($data);
        $data = mysql_real_escape_string($data);
        return $data;
    }
    if(!$error)
    {
        foreach($required as $field)
        {
            if(!empty($_POST[$field]))
            {
                $error = false;
            }
            else
            {
                $error = true;
                break;
            }
        }
        if(!$error)
        {
            $name = test($_POST['name']);
            $DOB = test($_POST['DOB']);
            $college = test($_POST['college']);
            $city = test($_POST['city']);
            $phone_no = test($_POST['phone_no']);
            $email = test($_POST['email']);
            $password = md5(test($_POST['password']));
            $qualified = 1;
            $file_size=$_FILES['id_image']['size'];
            $file_type=$_FILES['id_image']['type'];
            $tmp_location=$_FILES['id_image']['tmp_name'];
            if($file_size>0 && $file_size<=2*1024*1024)
            {
                $query = "SELECT id FROM $mysql_table WHERE email='$email'";
                if(mysql_num_rows(mysql_query($query)) == 0)
                {
                    $imageData = getimagesize($tmp_location);
                    $mimeType = image_type_to_mime_type($imageData[2]);
                    $extension = image_type_to_extension($imageData[2]);
                    if(($extension=='.jpeg' || $extension=='.png') &&
                        ($mimeType=='image/jpeg' || $mimeType=='image/png'))
                    {
                        $unique_id = uniqueNum();
                        $image_path = 'uploads/id/'.$unique_id.$extension;
                        if(move_uploaded_file($tmp_location,$image_path))
                        {
                            $query="INSERT INTO
				                $mysql_table(id,name,DOB,city,college,phone_num,
				                email,password,unique_num,qualified,timestamp)
				                VALUES
				                (
				                  '',
				                  '$name',
				                  '$DOB',
				                  '$college',
				                  '$city',
				                  '$phone_no',
				                  '$email',
				                  '$password',
				                  '$unique_id',
				                  '$qualified',
				                   CURRENT_TIMESTAMP
				                )";
                            if(mysql_query($query))
                            {
                                $_SESSION['id'] = $unique_id;
                                header('Location: register_success.php');
                            }
                            else
                            {
                                echo mysql_error();
                                @unlink($image_path);
                            }
                        }
                        else
                        {
                            echo 'Error occured in uploading';
                        }
                    }
                    else
                    {
                        echo 'The uploaded file must be either jpeg or png format.';
                    }
                }
                else
                {
                    echo 'The email is already used';
                }
            }
            else
            {
                echo 'The file size doesnt match the required specifications.';
            }
        }
        else
        {
            echo 'Please fill all the fields.';
        }
    }
    else
    {
        echo 'hi';
    }
?>