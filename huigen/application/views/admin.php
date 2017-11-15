<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>后台管理</title>
</head>
 <script src="<?php echo STATIC_URL."/";?>jquery.min.js"></script>
<body>

<label>历史文章</label>
<hr>

<div>
	<tr>
		<td>序号</td>
		<td>文章标题</td>
		<td>摘要</td>
		<td>操作</td>
	</tr>
</div>

<?php foreach ($atc as $atcs): ?>
<div>
	<tr>
		<td class='atc<?php echo $atcs['xuhao'];?>'></td>
			<td><?php echo $atcs['xuhao'];?></td>
			<td class="biaoti"><?php echo $atcs['biaoti'];?></td>
			<td class="zhaiyao"><?php echo $atcs['zhaiyao'];?></td>
			<td>
				<a href="<?php echo HOST_NAME."/admin/delete/". $atcs['xuhao']?>">删除</a>
				<a href="<?php echo HOST_NAME."/admin/edit/". $atcs['xuhao']?>">修改</a>
			</td>
		</div>
	</tr>
</div>
<?php endforeach; ?>

<form action="<?php echo HOST_NAME."/admin/submit/"?>" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>添加文章</td>
		</tr>
		<tr>
			<td>文章标题:</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>文章类别:</td>
			<td>
				<select name="leibie">
				  <option class="style1" value ="style1">类别1</option>
				  <option class="style2" value ="style2">类别2</option>
				  <option class="style3" value ="style3">类别3</option>
				</select>
			</td>
		</tr>
		<tr>
			<label>摘要：</label>
			<input type="text" id="zhaiyao" name="zhaiyao" datatype="*"/>
		</p>
		<p>
			<label>预览图：</label>
			<input type="file" name="suoluetu" id="suoluetu" accept="image/gif, image/jpeg" />
		</p>
		<p>
			<label>正文：</label>
			<textarea type="text" style="width:400px;height:200px" id="zhengwen" name="zhengwen" ></textarea>
		</p>
		<p>
			<button onclick="checkInfo()">提交</button>
		</p>	
	</table>
</form>
</body>

<script>
</script>

</html>
