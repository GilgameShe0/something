<?php
	header("Content-Type:text/html;charset=utf-8");
	$name = iconv('utf-8','GBK//IGNORE',$_FILES["file"]["name"]); 
	if($_FILES['file']['error'] > 0)
	{			
		echo 'error:'.$_FILES['file']['error'];
		exit();
	}
	else{
		if($_FILES['file']['type'] == 'image/jpeg'||$_FILES['file']['type'] =='image/jpg')
		{
			if($_FILES['file']['size'] <= 2*1024*1024)
			{	
				echo'上传成功！';
				 if (file_exists("upload/" . $_FILES["file"]["name"]))
				{
				  echo $_FILES["file"]["name"] . "文件已经存在. ";
				}
				else
				{
				  move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $name);
				  echo "文件已经被存储到: ". "upload/" . $_FILES["file"]["name"];
				}
			}
			else{
				echo '图片大小不能超过2M!';
				exit();
			}
		}
		else{
			echo  '类型：'.$_FILES['file']['type'];
			echo '图片只能为Jpg、JPEG格式';
			exit();
		}			
	}	
?>
	
	
	
	