<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>后台管理</title>
</head>
 <script src="<?php echo STATIC_URL."/";?>jquery.min.js"></script>
<body>
	<form action="<?php echo HOST_NAME."/admin/submit/"?>" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>添加文章</td>
		</tr>
		<tr>
			<td>文章标题:</td>
			<td>
				<input type="text" name="title"/>
			</td>
		</tr>
		<tr>
			<td>文章类别:</td>
			<td>
				<input type="radio" name="type" value="0" />类别1
				<input type="radio" name="type" value="1" />类别2
				<input type="radio" name="type" value="2" />类别3
			</td>
		</tr>
		<tr>
			<td>摘要：</td>
			<td>
				<textarea style="width:400px;height:100px" name="content" ></textarea>
			</td>
		</tr>
		<tr>
			<td>预览图：</td>
			<td>
				<input type="file" name="thumb"/>
			</td>
		</tr>
		<tr>
			<td>正文：</td>
			<td>
				<textarea style="width:400px;height:200px" name="content" ></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<button onclick="checkInfo()">提交</button>
			</td>
		</tr>	
	</table>
</form>
</body>

<script>
</script>

</html>
