<!DOCTYPE html>
<html>
<head>
	<title>报名信息</title>
</head>
<script src="<?php echo STATIC_URL;?>/js/jquery.min.js?v=<?php echo VERSION;?>"></script>
<body>
	<input type="text" name="name" id="name" class="input" value="" placeholder="请输入姓名"><br>
	<input type="num" name="telphone" id="telphone" class="input"  value="" placeholder="请输入手机号码">
	<button  class="sub" id="subbtn" onclick="checkInfo()">提交</button>
	
</body>
<script>
function checkInfo() {
		var name = $("#name").val();
		var telphone = $("#telphone").val();
		
		$.ajax({
			type:'post',
			url:'<?php echo "http://www.baoming.com/bm/AjaxBaoming";?>',
			data:{mobile:telphone,name:name},
			dataType:'json',
			success:function(data){
				if(data.state == 1)
				{
					alert(data.msg);
					window.location.reload(); 
				}else{
					alert(data.msg);
					return false;
				}
			}
		})
	}
</script>	
</html>