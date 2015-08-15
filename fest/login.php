<?php
    session_start();
    require 'connect.inc.php';
    $participants_table = 'design_users';
    $design_table = 'design_images';
    function test($data)
    {
        $data = trim($data);
        $data = mysql_real_escape_string($data);
        return $data;
    }
    if(isset($_POST['unique_id']) && isset($_POST['password']) && isset($_POST['description']))
    {
        if(!empty($_POST['unique_id']) && !empty($_POST['password']) && !empty($_POST['description']))
        {
            $id = test($_POST['unique_id']);
            $password = test($_POST['password']);//md5(test($_POST['password']));
            $description = test($_POST['description']);
            $round_no = ROUND_NUMBER;
            $query = "SELECT qualified FROM $participants_table WHERE unique_num='$id' AND password='$password'";
            $query_run = mysql_query($query);
            if(mysql_num_rows($query_run) == 1)
            {
                $query = "SELECT id FROM $design_table WHERE unique_num='$id' and round_no='$round_no'";
                if(mysql_num_rows(mysql_query($query)) == 0)
                {
                    $qualified = mysql_result($query_run, 0, 'qualified');
                    if($qualified == ROUND_NUMBER)
                    {
                        $file_size=$_FILES['image']['size'];
                        $file_type=$_FILES['image']['type'];
                        $tmp_location=$_FILES['image']['tmp_name'];
                        if($file_size>0 && $file_size<=5*1024*1024)
                        {
                            $imageData = getimagesize($tmp_location);
                            $mimeType = image_type_to_mime_type($imageData[2]);
                            $extension = image_type_to_extension($imageData[2]);
                            if(($extension=='.jpeg' || $extension=='.png') &&
                                ($mimeType=='image/jpeg' || $mimeType=='image/png'))
                            {
                                $image_path = 'uploads/'.ROUND_NUMBER.'/'.$id.$extension;
                                if(move_uploaded_file($tmp_location,$image_path))
                                {
                                    $query="INSERT INTO
				                $design_table(id,unique_num,description,round_no,timestamp)
				                VALUES
				                (
				                '',
				                '$id',
				                '$description',
				                '$round_no',
				                CURRENT_TIMESTAMP
				                )";
                                    if(mysql_query($query))
                                    {
                                        $_SESSION['success'] = true;
                                        header('Location:register_success.php');
                                    }
                                    else
                                    {
                                        echo mysql_error();
                                        @unlink($image_path);
                                    }
                                }
                                else
                                {
                                    echo 'An error occured in uploading';
                                }
                            }
                            else
                            {
                                echo 'The uploaded file must be either jpeg or png format.';
                            }
                        }
                        else
                        {
                            echo 'The file size doesnt match the required specifications.';
                        }
                    }
                    else
                    {
                        echo 'You are not qualified for the current round.';
                    }
                }
                else
                {
                    echo 'You have already submitted.<br/><a href="index.php">Back to HOME</a>';
                }
            }
            else
            {
                echo 'Invalid Unique ID and password combination.';
            }
        }
        else
        {
            echo 'Please fill all the fields';
        }
    }
?>

