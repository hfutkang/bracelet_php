<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST')  
 {  
     if (!is_uploaded_file($_FILES["upfile"][tmp_name]))  
     //是否存在文件  
     {  
         echo "图片不存在!";  
         exit;  
     }  
  
    $file = $_FILES["upfile"];  
    if($max_file_size < $file["size"])  
    //检查文件大小  
    {  
        echo "文件太大!";  
        exit;  
    }  
  
    if(!in_array($file["type"], $uptypes))  
    //检查文件类型  
    {  
        echo "文件类型不符!".$file["type"];  
        exit;  
    }  
  
    if(!file_exists($destination_folder))  
    {  
        mkdir($destination_folder);  
    }  
  
    $filename=$file["tmp_name"];  
    $image_size = getimagesize($filename);  
    $pinfo=pathinfo($file["name"]);  
    $ftype=$pinfo['extension'];  
    $destination = $destination_folder.time().".".$ftype;  
    if (file_exists($destination) && $overwrite != true)  
    {  
        echo "同名文件已经存在了";  
        exit;  
    }  
  
    if(!move_uploaded_file ($filename, $destination))  
    {  
        echo "移动文件出错";  
        exit;  
    }  
  
    if($imgpreview==1)  
    {  
    echo "<br>图片预览:<br>";  
    echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);  
    echo " alt=\"图片预览:\r文件名:".$destination."\r上传时间:\">";  
    }  
  }
?>
