<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>方田教育</title>

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <!-- fangtian css -->
    <link href="_/css/fangtian.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="teachers">

  <!-- include header.php -->
  <?php include "_/components/php/header.php" ?>
  
  <section id="teacher_desc">

    <div class="container">
    
      <div class="content">
        
        <section class="col-md-10 col-md-offset-1 col-sm-12">

          <div class="row">
            <div class="title">
              <h1>我们的老师</h1>
            </div>
          </div> <!-- row -->
          <div class="row">
            <div class="teacher_list">
            
              <div class="teacher_item clearfix">
                <div class="col-md-3 col-sm-4 col-xs-5">
                  <div class="teacher_pic thumbnail">
                   <img src="_/images/caoyuan.png" alt="曹媛老师" class="img-rounded">
                   <span class="teacher_name">曹媛老师</span>
                  </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-7">
                  <div class="teacher_cv">
                    <p class="edu_bg">毕业于<strong>清华大学</strong></p>
                    <p class="cv">在深圳从事过四年教学工作，有丰富小学教学经验，有26 位学生获得过希望杯、华杯赛全国奖项，5位学生获得过深圳区特等奖。</p>
                    <p class="special"><strong>教学特点：</strong>讲解深入浅出，注重培养学生独立思考能力。眼睛亮，笑脸亮，嗓音亮，课程设计是最亮。</p>
                  </div>
                  <div class="teacher_video">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#caoyuanModal">
                      <span class="video_demo"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> 教学视频</span>
                    </button>
                    
                  </div>
                </div>  
              </div> <!-- teacher_item -->
              <div class="teacher_item clearfix">
                <div class="col-md-3 col-sm-4 col-xs-5">
                  <div class="teacher_pic thumbnail">
                   <img src="_/images/maohua.png" alt="孙茂华老师" class="img-rounded">
                   <span class="teacher_name">孙茂华老师</span>
                  </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-7">
                  <div class="teacher_cv">
                    <p class="edu_bg">毕业于<strong>北京大学</strong></p>
                    <p class="cv">四年教学经验，教育规划师，有25名学生考入北大清华在内的国内知名学府，4名学生考入哈佛剑桥在内的国外高校。所带初中课程中60多名学生物理单科满分。</p>
                    <p class="special"><strong>教学特点：</strong>不仅注重激发学生的学习兴趣，更注重培养良好的学习习惯；不仅努力提高学生学习效率更注重树立学生的自信。以其严禁的逻辑，丰富的知识和感染力把同学领进物理之门。</p>
                  </div>
                  <div class="teacher_video">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#maohuaModal">
                      <span class="video_demo"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> 教学视频</span>
                    </button>
                    
                  </div>
                </div>  
              </div> <!-- teacher_item -->
              <div class="teacher_item clearfix">
                <div class="col-md-3 col-sm-4 col-xs-5">
                  <div class="teacher_pic thumbnail">
                   <img src="_/images/kenan.png" alt="曹克楠老师" class="img-rounded">
                   <span class="teacher_name">曹克楠老师</span>
                  </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-7">
                  <div class="teacher_cv">
                    <p class="edu_bg">毕业于<strong>北京航空航天大学</strong></p>
                    <p class="cv">方田全职教师，初中部负责人。北京人大附早培班冲刺训练营创始人，所教学员100%进入人大附中早培班。联赛优秀教练，华杯赛优秀教练员。</p>
                    <p class="special"><strong>教学特点：</strong>课堂设计由浅入深，风趣幽默。爱美食、爱演讲、爱上课，爱和孩子们在一起。</p>
                  </div>
                  <div class="teacher_video">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#kenanModal">
                      <span class="video_demo"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> 教学视频</span>
                    </button>
                    
                  </div>
                </div>  
              </div> <!-- teacher_item -->
              <div class="teacher_item clearfix">
                <div class="col-md-3 col-sm-4 col-xs-5">
                  <div class="teacher_pic thumbnail">
                   <img src="_/images/hongyuan.png" alt="许宏远老师" class="img-rounded">
                   <span class="teacher_name">许宏远老师</span>
                  </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-7">
                  <div class="teacher_cv">
                    <p class="edu_bg">毕业于<strong>中国科学技术大学</strong></p>
                    <p class="cv">方田全职老师，四五年级负责人。超常班教练，2015年所带四年级学员华杯赛参赛者初赛通过率100%。</p>
                    <p class="special"><strong>教学特点：</strong>耐心细致，善于鼓励学生开动脑筋独立思考。 个子高，学历高，水平高，对学生要求最高。</p>
                  </div>
                  <div class="teacher_video">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hongyuanModal">
                      <span class="video_demo"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> 教学视频</span>
                    </button>
                    
                  </div>
                </div>  
              </div> <!-- teacher_item -->
              <div class="teacher_item clearfix">
                <div class="col-md-3 col-sm-4 col-xs-5">
                  <div class="teacher_pic thumbnail">
                   <img src="_/images/yukun.png" alt="俞堃老师" class="img-rounded">
                   <span class="teacher_name">俞堃老师</span>
                  </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-7">
                  <div class="teacher_cv">
                    <p class="edu_bg">毕业于<strong>中国科学技术大学</strong></p>
                    <p class="cv">方田全职骨干教师。希望杯教练员，小升初专家，尖端班教练员。长期在论坛分享知识点和习题等资料，受到家长们的高度关注和广泛认可。</p>
                    <p class="special"><strong>教学特点：</strong>深入浅出，课堂节奏明朗。有活力，有能力，有诗与书，有粉丝千百里。</p>
                  </div>
                  <div class="teacher_video">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#yukunModal">
                      <span class="video_demo"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> 教学视频</span>
                    </button>
                    
                  </div>
                </div>  
              </div> <!-- teacher_item -->
              <div class="teacher_item clearfix">
                  <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="teacher_pic thumbnail">
                     <img src="_/images/chunxue.png" alt="王春雪老师" class="img-rounded">
                     <span class="teacher_name">王春雪老师</span>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-8 col-xs-7">
                    <div class="teacher_cv">
                      <p class="edu_bg"><strong>数学与应用数学</strong>（师范）专业</p>
                      <p class="cv">从事教育培训工作8年，在北京和深圳均有授课，曾任深圳学而思学科部主管，所教学生59人获得华杯赛、希望杯全国一二等奖项。</p>
                      <p class="special"><strong>教学特点：</strong>循循善诱，课堂节奏紧凑。<br>笑容美，声音美，板书美，教出来的学生成绩美。</p>
                    </div>
                    <div class="teacher_video">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#chunxueModal">
                        <span class="video_demo"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> 教学视频</span>
                      </button>
                      
                    </div>
                  </div>  
              </div> <!-- teacher_item -->
              <div class="teacher_item clearfix">
                  <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="teacher_pic thumbnail">
                     <img src="_/images/jianwei.png" alt="孔建伟老师" class="img-rounded">
                     <span class="teacher_name">孔建伟老师</span>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-8 col-xs-7">
                    <div class="teacher_cv">
                      <p class="edu_bg">毕业于<strong>河北工业大学</strong></p>
                      <p class="cv">七年教学经验。曾任深圳学而思学科部主管。所教学生48人升入深圳四大名校。37人在全国性质杯赛中获得一等奖。希望杯、华杯赛优秀教练员。</p>
                      <p class="special"><strong>教学特点：</strong>注重思维拓展，善于帮助学生养成良好学习习惯。讲计算，讲行程，讲几何，讲尽美妙数学世界！</p>
                    </div>
                    <div class="teacher_video">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#jianweiModal">
                        <span class="video_demo"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> 教学视频</span>
                      </button>
                      
                    </div>
                  </div>  
              </div> <!-- teacher_item -->
            
            </div> <!-- teacher_list -->
          </div> <!-- row -->
          
        </section>
      </div>
    
    </div>

  </section>

  <!-- Modal -->
  <div class="modal fade" id="caoyuanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body" style="height:357px;">
          <script id="autoJs71bd5eaea2" type="text/javascript">var pNode=document.getElementById("autoJs71bd5eaea2").parentNode,pnd=pNode.style,dWidth=pnd.width,pHeight=pnd.height,dHeight=ReCallHeight(pHeight,pNode);function ReCallHeight(e,t){if(e==""||e=="100%"){var n=t.parentNode,r=t.parentNode.style.height;if(r)return r;var i=ReCallHeight(r,n);return i}return e} var letvcloud_player_conf =  {"uu":"94196978cb","vu":"71bd5eaea2","auto_play":1,"gpcflag":1,"width": dWidth,"height": dHeight};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="maohuaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body" style="height:357px;">
          <script id="autoJs71bd5eaea2" type="text/javascript">var pNode=document.getElementById("autoJs71bd5eaea2").parentNode,pnd=pNode.style,dWidth=pnd.width,pHeight=pnd.height,dHeight=ReCallHeight(pHeight,pNode);function ReCallHeight(e,t){if(e==""||e=="100%"){var n=t.parentNode,r=t.parentNode.style.height;if(r)return r;var i=ReCallHeight(r,n);return i}return e} var letvcloud_player_conf =  {"uu":"94196978cb","vu":"6ca7ef09f3","auto_play":1,"gpcflag":1,"width": dWidth,"height": dHeight};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="kenanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body" style="height:357px;">
          <script id="autoJs71bd5eaea2" type="text/javascript">var pNode=document.getElementById("autoJs71bd5eaea2").parentNode,pnd=pNode.style,dWidth=pnd.width,pHeight=pnd.height,dHeight=ReCallHeight(pHeight,pNode);function ReCallHeight(e,t){if(e==""||e=="100%"){var n=t.parentNode,r=t.parentNode.style.height;if(r)return r;var i=ReCallHeight(r,n);return i}return e} var letvcloud_player_conf =  {"uu":"94196978cb","vu":"0fd82649f0","auto_play":1,"gpcflag":1,"width": dWidth,"height": dHeight};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="hongyuanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body" style="height:357px;">
          <script id="autoJs71bd5eaea2" type="text/javascript">var pNode=document.getElementById("autoJs71bd5eaea2").parentNode,pnd=pNode.style,dWidth=pnd.width,pHeight=pnd.height,dHeight=ReCallHeight(pHeight,pNode);function ReCallHeight(e,t){if(e==""||e=="100%"){var n=t.parentNode,r=t.parentNode.style.height;if(r)return r;var i=ReCallHeight(r,n);return i}return e} var letvcloud_player_conf =  {"uu":"94196978cb","vu":"3701874e28","auto_play":1,"gpcflag":1,"width": dWidth,"height": dHeight};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="yukunModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body" style="height:357px;">
          <script id="autoJs71bd5eaea2" type="text/javascript">var pNode=document.getElementById("autoJs71bd5eaea2").parentNode,pnd=pNode.style,dWidth=pnd.width,pHeight=pnd.height,dHeight=ReCallHeight(pHeight,pNode);function ReCallHeight(e,t){if(e==""||e=="100%"){var n=t.parentNode,r=t.parentNode.style.height;if(r)return r;var i=ReCallHeight(r,n);return i}return e} var letvcloud_player_conf =  {"uu":"94196978cb","vu":"bbc76b6641","auto_play":1,"gpcflag":1,"width": dWidth,"height": dHeight};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="caoyuanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body" style="height:357px;">
          <script id="autoJs71bd5eaea2" type="text/javascript">var pNode=document.getElementById("autoJs71bd5eaea2").parentNode,pnd=pNode.style,dWidth=pnd.width,pHeight=pnd.height,dHeight=ReCallHeight(pHeight,pNode);function ReCallHeight(e,t){if(e==""||e=="100%"){var n=t.parentNode,r=t.parentNode.style.height;if(r)return r;var i=ReCallHeight(r,n);return i}return e} var letvcloud_player_conf =  {"uu":"94196978cb","vu":"71bd5eaea2","auto_play":1,"gpcflag":1,"width": dWidth,"height": dHeight};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="caoyuanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body" style="height:357px;">
          <script id="autoJs71bd5eaea2" type="text/javascript">var pNode=document.getElementById("autoJs71bd5eaea2").parentNode,pnd=pNode.style,dWidth=pnd.width,pHeight=pnd.height,dHeight=ReCallHeight(pHeight,pNode);function ReCallHeight(e,t){if(e==""||e=="100%"){var n=t.parentNode,r=t.parentNode.style.height;if(r)return r;var i=ReCallHeight(r,n);return i}return e} var letvcloud_player_conf =  {"uu":"94196978cb","vu":"71bd5eaea2","auto_play":1,"gpcflag":1,"width": dWidth,"height": dHeight};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="chunxueModal" tabindex="-1" role"dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" style="height:357px;">
    <script id="autoJs71bd5eaea2" type="text/javascript">var pNode=document.getElementById("autoJs71bd5eaea2").parentNode,pnd=pNode.style,dWidth=pnd.width,pHeight=pnd.height,dHeight=ReCallHeight(pHeight,pNode);function ReCallHeight(e,t){if(e==""||e=="100%"){var n=t.parentNode,r=t.parentNode.style.height;if(r)return r;var i=ReCallHeight(r,n);return i}return e} var letvcloud_player_conf =  {"uu":"94196978cb","vu":"651dbb0694","auto_play":1,"gpcflag":1,"width": dWidth,"height": dHeight};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
    </div> <!--.modal-body-->
    <div class="modal-footer">
    </div> <!--.modal-footer-->
    </div> <!--.modal-content-->
  </div> <!--.modal-dialog-->
  </div> <!--.modal -->
  
  <div class="modal fade" id="jianweiModal" tabindex="-1" role"dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" style="height:357px;">
    <script id="autoJs71bd5eaea2" type="text/javascript">var pNode=document.getElementById("autoJs71bd5eaea2").parentNode,pnd=pNode.style,dWidth=pnd.width,pHeight=pnd.height,dHeight=ReCallHeight(pHeight,pNode);function ReCallHeight(e,t){if(e==""||e=="100%"){var n=t.parentNode,r=t.parentNode.style.height;if(r)return r;var i=ReCallHeight(r,n);return i}return e} var letvcloud_player_conf =  {"uu":"94196978cb","vu":"9e3f9315d7","auto_play":1,"gpcflag":1,"width": dWidth,"height": dHeight};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
    </div> <!--.modal-body-->
    <div class="modal-footer">
    </div> <!--.modal-footer-->
    </div> <!--.modal-content-->
  </div> <!--.modal-dialog-->
  </div> <!--.modal -->

  <!-- include footer.php -->
  <?php include "_/components/php/footer.php" ?>
  
  <div id="back-top-wrapper" class="visible-desktop">
    <p id="back-top"> <a href="#top"><span></span></a> </p>
  </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="_/components/js/jQuery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="_/js/bootstrap.js"></script>
  <script src="_/js/fangtian.js"></script>

  </body>
</html>