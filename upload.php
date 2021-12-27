<?php
if(isset($_POST['submit'])){
    $file=$_FILES['file'];
    $filename=$_FILES['file']['name'];
    $filetmpname=$_FILES['file']['tmp_name'];
    $filesize=$_FILES['file']['size'];
    $fileerror=$_FILES['file']['error'];
    $filetype=$_FILES['file']['type'];

    $fileext=explode('.',$filename);
    $fileactualext=strtolower(end($fileext));
    $allowed=array('txt');
    if(in_array($fileactualext,$allowed)){
        if($fileerror===0){
            if($filesize<1000000){
                // $filenamenew=uniqid('',true).".".$fileactualext;
                $filenamenew="test".".".$fileactualext;
                $fildestination='env/Dependency parser/templates/prodigy-custom-model/uploads/'.$filenamenew;
                move_uploaded_file($filetmpname,$fildestination);
                header("Location: index.html?success=true");
                
            }
            else{
                echo "Your File size is Too! large";
            }
        }
        else{
            echo "You can only upload txt file.";
        }
    }
    else{
        echo "You have not uploaded any file.Please upload a file";
    }
}

?>
<!-- $output = shell_exec("env/Dependency parser/templates/prodigy-custom-model/test.sh");
echo "<pre>$output</pre>";
header('Location: http://localhost:8080/'); -->


