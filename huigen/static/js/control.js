// 初始化Web Uploader
var thumbnailWidth = 100;
var thumbnailHeight = 100;
var uploader = WebUploader.create({

    // 选完文件后，是否自动上传。
    auto: false,

    // swf文件路径
    swf: 'webuploader/Uploader.swf',

    // 文件接收服务端。
    server: 'http://webuploader.duapp.com/server/fileupload.php',

    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '.filePicker',

    // 只允许选择图片文件。
    accept: {
        title: 'Images',
        extensions: 'gif,jpg,jpeg,bmp,png',
        mimeTypes: 'image/*'
    }
});

// 当有文件添加进来的时候
uploader.on( 'fileQueued', function( file ) {
	var uid = '#rt_' + file.source.ruid;
	if($(uid).parents("td").find("img").length > 1){
		$("#myModal2").modal();
		$("#myModal2 .modal-body").html("只能传一张图片");
		return false;
	}
	else{
		var $list = $(uid).parents("td");
		var $li = $(
            '<div id="' + file.id + '" class="file-item thumbnail">' +
                '<img>' +
                '<div class="info"></div>' +
                '<a href="javascript:;" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>' + 
            '</div>'
            ),
	    $img = $li.find('img');


	    // $list为容器jQuery实例
	    $list.append( $li );

	    // 创建缩略图
	    // 如果为非图片文件，可以不用调用此方法。
	    // thumbnailWidth x thumbnailHeight 为 100 x 100
	    uploader.makeThumb( file, function( error, src ) {
	        if ( error ) {
	            $img.replaceWith('<span>不能预览</span>');
	            return;
	        }

	        $img.attr( 'src', src );
	    }, thumbnailWidth, thumbnailHeight );

	    // 点击删除图片
	    $("#myModal").delegate(".btn-primary.del-img","click",function(){
			uploader.removeFile( file );
		})
	}
});


// 调用拖拽列表方法
$(".table").tableDnD();

// 新增列表
$(".create-slide").click(function(){
	var html = '';
	html += '<td>';
	html += '<div class="uploader-list"></div>';
	html += '<div class="filePicker" id="aa">选择图片1</div>';
	html += '</td>';
	html += '<td><input class="form-control" type="text" data-error="请输入标题" placeholder="请输入标题" /></td>'
	html += '<td><a href="javascript:;" class="btn btn-danger">删除</a> <a href="javascript:;" class="btn btn-primary btn-slide">提交</a></td>';
	$("<tr></tr>").html(html).appendTo($(".table-slide tbody"));
	uploader.addButton({
	    id: '#aa',
	    innerHTML: '选择图片'
	});
	$(".table-slide tbody tr:last .filePicker").attr("id","");
	$(".table").tableDnD();
})
$(".create-article").click(function(){
	var html = '';
	html += '<td>';
	html += '<div class="uploader-list"></div>';
	html += '<div class="filePicker" id="aa">选择图片1</div>';
	html += '</td>';
	html += '<td><input class="form-control" type="text" data-error="请输入链接地址" placeholder="请输入链接地址" /></td>'
	html += '<td><input class="form-control" type="text" data-error="请输入主标题" placeholder="请输入主标题" /></td>'
	html += '<td><input class="form-control" type="text" data-error="请输入副标题" placeholder="请输入副标题" /></td>'
	html += '<td><a href="javascript:;" class="btn btn-danger">删除</a> <a href="javascript:;" class="btn btn-primary btn-article">提交</a></td>';
	$("<tr></tr>").html(html).appendTo($(".article-content.show .table-article tbody"));
	uploader.addButton({
	    id: '#aa',
	    innerHTML: '选择图片'
	});
	$(".article-content.show .table-article tbody tr:last .filePicker").attr("id","");
	$(".table").tableDnD();
})

// 删除按钮
var bindObj;
$(".table").delegate(".btn-danger","click",function(){
	bindObj = $(this).parents("tr");
	$("#myModal").modal();
	$("#myModal .modal-body").html("是否确认要删除?");
	$("#myModal .btn-primary").addClass("del-tr");
})
// 确认删除某一行
$("#myModal").delegate(".btn-primary.del-tr","click",function(){
	$("#myModal .btn-primary").removeClass("del-tr");
	$("#myModal .modal-body").html("操作成功");
	$("#myModal").modal("hide");
	bindObj.remove();
})

// 点击删除图片
$(".table").delegate(".close","click",function(){
	bindObj = $(this).parent();
	$("#myModal").modal();
	$("#myModal .modal-body").html("是否确认要删除?");
	$("#myModal .btn-primary").addClass("del-img");
})
// 确认删除图片
$("#myModal").delegate(".btn-primary.del-img","click",function(){
	$("#myModal .btn-primary").removeClass("del-img");
	$("#myModal .modal-body").html("操作成功");
	$("#myModal").modal("hide");
	bindObj.remove();
})

// 表格提交判断

function checkCtrl(obj){
	if(obj.parents("tr").find("img").length == 0){
		$("#myModal2").modal();
		$("#myModal2 .modal-body").html("请选择要上传的图片");
		return false;
	}
	for(var i = 0; i < obj.parents("tr").find(".form-control").length; i++){
		var now = obj.parents("tr").find(".form-control").eq(i);
		if(now.val() == ""){
			$("#myModal2").modal();
			$("#myModal2 .modal-body").html(now.attr("data-error"));
			now.focus();
			now.addClass("has-error");
			return false;
		}
	}
	return true;
}

// 输入内容，移除has-error
$(".table").delegate(".form-control.has-error","keydown",function(){
	$(this).removeClass("has-error");
})

// 列表切换
$(".nav li").click(function(){
	var index = $(this).index();
	$(this).addClass("active").siblings().removeClass("active");
	$(".article-content").removeClass("show").eq(index).addClass("show");
})