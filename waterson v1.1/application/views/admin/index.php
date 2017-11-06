<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?=site_url()?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpla Admin</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />

<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>

</head>
<body>
<div id="body-wrapper"> 
  <!-- Wrapper for the radial gradient background -->
  <div id="sidebar">
    <div id="sidebar-wrapper"> 
      <!-- Sidebar with logo and menu -->
      <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
      <!-- Logo (221px wide) --> 
      <a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a> 
      <!-- Sidebar Profile links -->
      <div id="profile-links"> Hello, <a href="<?=site_url('admin/admin/')?>" title="Edit your profile">
        <?=$adminname?>
        </a><br />
        <br />
        <a href="<?=site_url()?>" title="Sign Out">Home</a>  /  <a href="index.php/admin/admin/signout" title="Sign Out">Sign Out</a> </div>
      <ul id="main-nav">
        <!-- Accordion Menu -->
        <li> <a href="#" class="nav-top-item"> 
          <!-- Add the class "current" to current menu item --> 
          管理留言 </a>
          <ul>
            <li><a href="<?=site_url('admin/admin')?>">留言列表</a></li>
          </ul>
        </li>
      </ul>
      <!-- End #main-nav -->
      <div id="messages" style="display: none"> 
        <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
        <h3>3 Messages</h3>
        <p> <strong>17th May 2009</strong> by Admin<br />
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <p> <strong>2nd May 2009</strong> by Jane Doe<br />
          Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <p> <strong>25th April 2009</strong> by Admin<br />
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <form action="#" method="post">
          <h4>New Message</h4>
          <fieldset>
            <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
          </fieldset>
          <fieldset>
            <select name="dropdown" class="small-input">
              <option value="option1">Send to...</option>
              <option value="option2">Everyone</option>
              <option value="option3">Admin</option>
              <option value="option4">Jane Doe</option>
            </select>
            <input class="button" type="submit" value="Send" />
          </fieldset>
        </form>
      </div>
      <!-- End #messages --> 
    </div>
  </div>
  <!-- End #sidebar -->
  <div id="main-content"> 
    <!-- Main Content Section with everything -->
    <noscript>
    <!-- Show a notification if the user has disabled javascript -->
    <div class="notification error png_bg">
      <div> Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
        Download From <a href="http://www.exet.tk">exet.tk</a></div>
    </div>
    </noscript>
    <!-- Page Head -->
    <h2>Welcome</h2>
    <p id="page-intro">What would you like to do?</p>
    
    <!-- End .shortcut-buttons-set -->
    <div class="clear"></div>
    <!-- End .clear -->
    <div class="content-box"> 
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>Content box</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">Table</a></li>
          <!-- href must be unique and match the id of target div -->
          
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> 
          <!-- This is the target div. id must match the href of this div's tab -->
          
          <table>
            <thead>
              <tr>
                <th> <input class="check-all" type="checkbox" />
                </th>
                <th>姓名</th>
                <th>电话</th>
                <th>地址</th>
                <th>留言内容</th>
                <th>操作</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="6">
                  <div class="pagination"> 
                  <?=$pages?>
                   </div>
                  
                  <!-- End .pagination -->
                  
                  <div class="clear"></div></td>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($list as $key=>$value):?>
              <tr>
                <td><input type="checkbox" /></td>
                <td><?=$value['name']?></td>
                <td><?=$value['tel']?></td>
                <td><?=$value['addr']?></td>
                <td><?=$value['content']?></td>
                <td><!-- Icons --> 
                  <a href="/index.php/admin/admin/update/id/<?=$value['id']?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a> <a href="/index.php/admin/admin/delete/id/<?=$value['id']?>" title="Delete" onclick="return confirm('是否删除？')"><img src="resources/images/icons/cross.png" alt="Delete" /></a> </td>
              </tr>
              <?php endforeach?>
            </tbody>
          </table>
        </div>
        <!-- End #tab1 -->
      </div>
      <!-- End .content-box-content --> 
    </div>
    <!-- End .content-box -->
    
    <div class="clear"></div>
    <div id="footer"> <small> 
      <!-- Remove this notice or replace it with whatever you want --> 
      &#169; Copyright 2013 Waterson V 1.0 | Powered by <a href="http://www.php23.com" target="_blank">余水升</a> | <a href="#">Top</a> </small> </div>
    <!-- End #footer --> 
  </div>
  <!-- End #main-content --> 
</div>

</body>
<!-- Download From www.exet.tk-->
</html>
