<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>会跟后台</title>
		<meta name="format-detection" content="telephone=no">
		<meta name="referrer" content="unsafe-url">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<link rel="stylesheet" href="<?php echo STATIC_URL.'/css';?>/webuploader.css">
		<link rel="stylesheet" href="<?php echo STATIC_URL.'/css';?>/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo STATIC_URL.'/css';?>/style.css">
	</head>
	<body>
		<div class="container" id="uploader">
			<h1 class="text-center">会跟管理后台</h1>
			<h2 class="text-center">轮播图信息</h2>
			<div class="clearfix add">
				<a href="javascript:;" class="btn btn-primary fr create-slide">新增轮播图片</a>
			</div>
			<form id=form1>
			<table class="table table-bordered table-slide">
				<thead>
					<tr>
						<th>图片</th>
						<th>标题</th>
						<th>操作</th>
					</tr>
				</thead>
				<?php foreach ($pictures as $key):?>
				<tbody id="picinfo<?php echo $key['ID'];?>">				
					<tr>
						<td>
						    <div class="uploader-list"></div>
						    <div class="filePicker">选择图片1</div>
						    <div class="file-item thumbnail">
							    	<img src="<?php echo $key['pic'];?>" width="160" height="160" alt="..." class="img-rounded img-responsive">
							    	<div class="info"></div>
							    	<a href="javascript:;" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
							 </div>
					    </td>
					    <td>
							<input name="pic_name" class="form-control" type="text" data-error="请输入标题" placeholder="请输入标题"  value="<?php echo $key['picname'];?>"/></td>
						<td>
							<a href="<?php echo HOST_NAME."/admin/deletepic/". $key['ID']?>" class="btn btn-danger">删除</a>
							<a id="submit_pic" href="<?php echo HOST_NAME."/admin/submitpic/". $key['ID']?>" class="btn btn-primary btn-slide">提交</a>
						</td>		
					</tr>
				</tbody>
				<?php endforeach; ?>
			</table>
			</form>
			<h2 class="text-center">文章信息列表</h2>
			<ul class="nav nav-pills nav-justified">
				<li role="presentation" class="active"><a href="javascript:;">列表1</a></li>
				<li role="presentation"><a href="javascript:;">列表2</a></li>
				<li role="presentation"><a href="javascript:;">列表3</a></li>
			</ul>
			<div class="add clearfix">
				<a href="javascript:;" class="btn btn-primary fr create-article">新增内容</a>
			</div>
			<div class="article-content show">
				<table class="table table-bordered table-article">
					<thead>
						<tr>
							<th>图片</th>
							<th>链接地址</th>
							<th>主标题</th>
							<th>副标题</th>
							<th>操作</th>
						</tr>
					</thead>
					<?php foreach ($atc as $k):?>
					<tbody id="<?php echo $k['xuhao']?>">
						<tr>
							<td>
							    <div class="uploader-list"></div>
							    <div class="filePicker">选择图片</div>
							    <div class="file-item thumbnail">
							    	<img src="http://v3.bootcss.com/assets/img/components.png" width="160" height="160" alt="..." class="img-rounded img-responsive">
							    	<div class="info"></div>
							    	<a href="javascript:;" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
							    </div>
						    </td>
							<td>
								<input class="form-control" type="text" data-error="请输入链接地址" placeholder="请输入链接地址" value="<?php echo $k['url']?>" /></td>
							<td>
								<input  class="form-control" type="text" data-error="请输入主标题" placeholder="请输入主标题" value="<?php echo $k['title']?>" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入副标题" placeholder="请输入副标题" value="<?php echo $k['info']?>" />
							</td>
							<td>
								<a href="<?php echo HOST_NAME."/admin/deletepic/". $key['ID']?>" class="btn btn-danger">删除</a>
								<a href="javascript:;" class="btn btn-primary btn-article">提交</a>
							</td>		
						</tr>
					</tbody>
					<?php endforeach; ?>
				</table>
			</div>
			<div class="article-content">
				<table class="table table-bordered table-article">
					<thead>
						<tr>
							<th>图片</th>
							<th>链接地址</th>
							<th>主标题</th>
							<th>副标题</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
							    <div class="uploader-list"></div>
							    <div class="filePicker">选择图片2</div>
							    <div class="file-item thumbnail">
							    	<img src="http://v3.bootcss.com/assets/img/components.png" width="160" height="160" alt="..." class="img-rounded img-responsive">
							    	<div class="info"></div>
							    	<a href="javascript:;" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
							    </div>
						    </td>
							<td>
								<input class="form-control" type="text" data-error="请输入链接地址" placeholder="请输入链接地址" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入主标题" placeholder="请输入主标题" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入副标题" placeholder="请输入副标题" />
							</td>
							<td>
								<a href="javascript:;" class="btn btn-danger">删除</a>
								<a href="javascript:;" class="btn btn-primary btn-article">提交</a>
							</td>		
						</tr>
						<tr>
							<td>
							    <div class="uploader-list"></div>
							    <div class="filePicker">选择图片2</div>
								<div class="file-item thumbnail">
							    	<img src="http://v3.bootcss.com/assets/img/components.png" width="160" height="160" alt="..." class="img-rounded img-responsive">
							    	<div class="info"></div>
							    	<a href="javascript:;" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
							    </div>
						    </td>
							<td>
								<input class="form-control" type="text" data-error="请输入链接地址" placeholder="请输入链接地址" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入主标题" placeholder="请输入主标题" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入副标题" placeholder="请输入副标题" />
							</td>
							<td>
								<a href="javascript:;" class="btn btn-danger">删除</a>
								<a href="javascript:;" class="btn btn-primary btn-article">提交</a>
							</td>		
						</tr>
						<tr>
							<td>
							    <div class="uploader-list"></div>
							    <div class="filePicker">选择图片3</div>
								<div class="file-item thumbnail">
							    	<img src="http://v3.bootcss.com/assets/img/components.png" width="160" height="160" alt="..." class="img-rounded img-responsive">
							    	<div class="info"></div>
							    	<a href="javascript:;" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
							    </div>
						    </td>
							<td>
								<input class="form-control" type="text" data-error="请输入链接地址" placeholder="请输入链接地址" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入主标题" placeholder="请输入主标题" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入副标题" placeholder="请输入副标题" />
							</td>
							<td>
								<a href="javascript:;" class="btn btn-danger">删除</a>
								<a href="javascript:;" class="btn btn-primary btn-article">提交</a>
							</td>		
						</tr>
					</tbody>
				</table>
			</div>
			<div class="article-content">
				<table class="table table-bordered table-article">
					<thead>
						<tr>
							<th>图片</th>
							<th>链接地址</th>
							<th>主标题</th>
							<th>副标题</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
							    <div class="uploader-list"></div>
							    <div class="filePicker">选择图片3</div>
							    <div class="file-item thumbnail">
							    	<img src="http://v3.bootcss.com/assets/img/components.png" width="160" height="160" alt="..." class="img-rounded img-responsive">
							    	<div class="info"></div>
							    	<a href="javascript:;" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
							    </div>
						    </td>
							<td>
								<input class="form-control" type="text" data-error="请输入链接地址" placeholder="请输入链接地址" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入主标题" placeholder="请输入主标题" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入副标题" placeholder="请输入副标题" />
							</td>
							<td>
								<a href="javascript:;" class="btn btn-danger">删除</a>
								<a href="javascript:;" class="btn btn-primary btn-article">提交</a>
							</td>		
						</tr>
						<tr>
							<td>
							    <div class="uploader-list"></div>
							    <div class="filePicker">选择图片2</div>
								<div class="file-item thumbnail">
							    	<img src="http://v3.bootcss.com/assets/img/components.png" width="160" height="160" alt="..." class="img-rounded img-responsive">
							    	<div class="info"></div>
							    	<a href="javascript:;" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
							    </div>
						    </td>
							<td>
								<input class="form-control" type="text" data-error="请输入链接地址" placeholder="请输入链接地址" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入主标题" placeholder="请输入主标题" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入副标题" placeholder="请输入副标题" />
							</td>
							<td>
								<a href="javascript:;" class="btn btn-danger">删除</a>
								<a href="javascript:;" class="btn btn-primary btn-article">提交</a>
							</td>		
						</tr>
						<tr>
							<td>
							    <div class="uploader-list"></div>
							    <div class="filePicker">选择图片3</div>
								<div class="file-item thumbnail">
							    	<img src="http://v3.bootcss.com/assets/img/components.png" width="160" height="160" alt="..." class="img-rounded img-responsive">
							    	<div class="info"></div>
							    	<a href="javascript:;" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
							    </div>
						    </td>
							<td>
								<input class="form-control" type="text" data-error="请输入链接地址" placeholder="请输入链接地址" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入主标题" placeholder="请输入主标题" /></td>
							<td>
								<input class="form-control" type="text" data-error="请输入副标题" placeholder="请输入副标题" />
							</td>
							<td>
								<a href="javascript:;" class="btn btn-danger">删除</a>
								<a href="javascript:;" class="btn btn-primary btn-article">提交</a>
							</td>		
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="myModal">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="exampleModalLabel">提示框:</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
						<button type="button" class="btn btn-primary">确认</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="myModal2">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="exampleModalLabel">提示框:</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					</div>
				</div>
			</div>
		</div>
		<div class="showtips"></div>
		<script src="<?php echo STATIC_URL.'/js';?>/jquery-1.11.1.min.js"></script>
		<script src="<?php echo STATIC_URL.'/js';?>/bootstrap.min.js"></script>
		<script src="<?php echo STATIC_URL.'/js';?>/webuploader/webuploader.min.js"></script>
		<script src="<?php echo STATIC_URL.'/js';?>/sortTable.js"></script>
		<script src="<?php echo STATIC_URL.'/js';?>/control.js"></script>
	</body>
	<script type="text/javascript">
	uploader.on( 'fileQueued', function( file ) {
		$("#submit_pic").on('click', function(){

			var title = $("input[name='pic_name']").val();
			var fi = $("input[name=file]").get(0).files[0]; 		
			var fr = new FileReader();
      		fr.readAsDataURL(fi); //以base64编码格式读取图片文件
      		fr.onload = function(frev){
        	pic = frev.target.result; //得到结果数据
        	alert(pic);

        	}
        	return;

			$.ajax({  
	         url: '<?php echo HOST_NAME."/admin/submitpic";?>' ,  
	         type: 'POST',  
	         data: {thumb:pic,pic_name:title},  
	         async: false,  
	         cache: false,  
	         contentType: false,  
	         processData: false,  
	         success: function (returndata) {  
	           alert(returndata);  
	         },  
	         error: function (returndata) {  
	           alert(returndata);  
         	}  
		})
		})
	})
	// $(".table").delegate("#submit_pic","click",function(){
	// if(checkCtrl($(this))){

		// var form = document.getElementById('form1');  
		// var formdata = new FormData(form);
		// var data = new FormData($('#form1')[0]); 
		
		//var upload_file = $("input[name='file']").get(0).files[0];
        //var title = $("input[name='pic_name']").val();
        //alert(title);
        //return;
	
	// 	 $.ajax({
	// 		url: '<?php //echo HOST_NAME."/admin/submitpic";?>',
	// 	 	type: 'POST',
	// 		dataType: 'json',
	// 		data: data,
	// 		cache: false,
 //            contentType: false,        /*不可缺*/
 //            processData: false,         /*不可缺*/
	// 	 	success: function(tips){
	// 			if(tips.status == 0){
	// 				alert(tips.msg);
	// 			}
	// 		}
	// 	 })
	// 	}
	// })
	</script>


</html>
