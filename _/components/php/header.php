<header>

	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">方田教育</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">首页</a></li>
	        <li><a href="course.php">选课中心</a></li>
	        <li><a href="interaction.php">交流中心</a></li>
	        <li><a href="about.php">关于我们</a></li>
	        <li class="hidden-sm hidden-xs">
	        	<a id="dropdown_wx" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                关注官方微信 <span class="caret"></span>
                </a>
	            <ul id="dropdown-wx-menu" class="dropdown-menu" role="menu">
	            	<div class="wxqr thumbnail">
	            		<img src="_/images/wx_qrcode.jpg" alt="">
	            	</div>
	            	<div class="wx_desc">
	            		扫码二维码关注
	            	</div>
	            </ul>
	        </li> <!-- 关注官方微信 -->
	        
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#" data-toggle="modal" data-target="#registerModal">注册</a></li>
	        <li><a href="#" data-toggle="modal" data-target="#loginModal">登陆</a></li>
	      </ul> <!-- 未登录 -->
	      <!-- <ul class="nav navbar-nav navbar-right">
	        <li role="presentation" class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
			      李晓彤 <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu" role="menu">
			    	<li><a href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 我的课程</a></li>
			    	<li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 账号设置</a></li>
			    	<li class="divider"></li>
			      	<li><a href="#"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 退出登录</a></li>
			    </ul>
			</li>
	      </ul> <!-- 已登录 -->

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	<!-- login Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="loginModalLabel">登录</h4>
	      </div>
	      <div class="modal-body">
	        <div class="form-group">
	        	<input type="phonenumber" class="form-control" placeholder="手机号码">
	        </div>
	        <div class="form-group">
	        	<input type="password" class="form-control" placeholder="密码">
	        </div>
	      </div>
	      <div class="modal-footer">
	      	<a href="">忘记密码？</a>
	        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> -->
	        <button type="button" class="btn btn-primary">登录</button>
	      </div>
	    </div>guan
	  </div>
	</div>
	<!-- register Modal -->
	<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="registerModalLabel">注册</h4>
	      </div>
	      <div class="modal-body">
	        <div class="form-group">
	        	<input type="phonenumber" class="form-control" placeholder="手机号码">
	        </div>
	        <div class="form-group">
	        	<input type="password" class="form-control" placeholder="密码">
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	        <button type="button" class="btn btn-primary">注册</button>
	      </div>
	    </div>
	  </div>
	</div>
</header> <!-- header -->