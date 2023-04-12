<?php
    $flname="";
    if (isset($_POST["upfile"])){

        /* echo "<pre>";
        print_r($_FILES);
        echo "</pre>"; */

        $path= "upfile/";
        $flname=$path.basename($_FILES["FlGAMBAR"]["name"]);
        move_uploaded_file($_FILES["FlGAMBAR"]["tmp_name"],$flname);
         
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>

<body>

    <form method="POST" action="uploadfile.php" enctype="multipart/form-data">

        <div>
            File Gambar
            <input type="File" name="FlGAMBAR" accept=".jpg,.jpeg,.png">
        </div>

         <div>
             <button type="submit"> Upload Gambar </button>
         </div>
         <input type="hidden" name="upfile">
    </form>

    <div>
    
<?php
if(!$flname==""){
    echo "<img src='".$flname."'>";
}
?>



</body>
</html>