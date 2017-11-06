<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpla Admin</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />
<link rel="stylesheet" href="skin/css/style.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="resources/scripts/jquery-1.9.1.min.js"></script>

<script type="text/javascript" src="skin/js/Validform_v5.3.2_min.js"></script>
</head>
<body>
<div id="body-wrapper"> 
  <!-- Wrapper for the radial gradient background -->

  <div id="main-content"> 
    
    
    <div class="clear"></div>
    <!-- End .clear -->
    <div class="content-box"> 
      <h2 style="padding-top: 15px;">waterson v1.0留言本</h2>
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>请留言</h3>
        <ul class="content-box-tabs">
          
          <!-- href must be unique and match the id of target div -->
          <li><a href="#tab2"  class="default-tab">Forms</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content  default-tab" id="tab2">
          <form action="" method="post" class="registerform">
            <fieldset>
              <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
              <p>
                <label>姓名</label>
                <input class="text-input small-input" type="text" id="small-input" name="name" value="" nullmsg="姓名不能为空" datatype="*"/>
              </p>
              <p>
                <label>手机</label>
                <input class="text-input small-input" type="text" id="small-input" name="tel" value="" datatype="m" nullmsg="手机号码不能为空" errormsg="手机号码格式不正确"/>
              </p>
              <p>
                <label>地址</label>
                <input class="text-input small-input" type="text" id="small-input" name="addr" value="" nullmsg="地址不能为空" datatype="s10-100"  errormsg="请输入详细地址"/>
              </p>
              <p>
                <label>留言内容</label>
                <textarea class="text-input textarea wysiwyg" id="textarea" name="content" cols="79" rows="15"  datatype="*"></textarea>
              </p>
              
              <p>
                <input class="button" type="submit" value="Submit" />
              </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->
          </form>
        </div>
        <!-- End #tab2 --> 
      </div>
      <!-- End .content-box-content --> 
    </div>
    <!-- End .content-box -->
    
    <div class="clear"></div>
    <div id="footer"> <small> 
      <!-- Remove this notice or replace it with whatever you want --> 
      &#169; Copyright 2014 waterson v1.0 | Powered by <a href="http://www.php23.com" target="_blank">余水升个人博客</a> | <a href="#">Top</a> </small> </div>
    <!-- End #footer --> 
  </div>
  <!-- End #main-content --> 
</div>
<script type="text/javascript">
$(function(){
 //$(".registerform").Validform();  //就这一行代码！;
  
 $(".registerform").Validform({
  tiptype:4
 });
})
</script>
</body>
<!-- Download From www.exet.tk-->
</html>
