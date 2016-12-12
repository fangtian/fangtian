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
  <body>

  <!-- include header.php -->
  <?php include "_/components/php/header.php" ?>
  
  <section id="detail">
    
    <div class="container">
    
    <div class="content">
      <section class="col-md-10 clearfix">
        <div id="coure_content" data-spy="scroll" data-target="#navbar-slider" data-offset="90" style="position: relative;">
          <div class="row">
            <div class="col-md-4">
              <div class="course_img">
                <img src="_/images/course_icon.jpg" alt="" class="img-rounded">
              </div>
            </div>
            <div class="col-md-8">
              <div class="course_info">
                <div class="row">
                  <div class="course_title" id="choose_lesson">
                    <h3>初一年级春季同步班</h3>
                    <h5>教材版本：沪科版</h5>
                  </div>
                  
                  <div class="course_score">
                      <span class="glyphicon glyphicon-star marked" aria-hidden="true"></span>
                      <span class="glyphicon glyphicon-star marked" aria-hidden="true"></span>
                      <span class="glyphicon glyphicon-star marked" aria-hidden="true"></span>
                      <span class="glyphicon glyphicon-star marked" aria-hidden="true"></span>
                      <span class="glyphicon glyphicon-star unmarked" aria-hidden="true"></span>
                      <a href="">95条评论</a>
                  </div>
                </div>
                <div class="row">
                  <div class="course_info_area clearfix">
                    <div class="col-md-6">
                      <div class="price">
                        <h5>价格：<span class="price_real">￥1500元 </span> <span class="cash_back"> 课前试听，随时退费</span></h5>
                        <h5>课时：30课时</h5>
                        <h5>上课时间：2015年3月-6月</h5>
                        <h5>上课频率：一周一次</h5>
                      </div>
                    </div>
                    <div class="col-md-6">
                      
                      <div class="col-md-6 visible-lg">
                        <ul class="online_pub">
                          <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>直播互动</li>
                          <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>课堂评测</li>
                          <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>个性作业</li>
                          <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>全程答疑</li>
                        </ul>
                      </div>
                      
                     
                      <div class="col-md-6">
                        <span class="badge">在读</br>297</span>
                      </div>
                      
                      
                    </div>
                  </div><!-- course_info_area -->
                </div>
                
                <div class="row">
                  <div class="choose_teacher">
                    <h4>选老师：</h4>
                    <h5 class="btn btn-default col-md-2 col-sm-4 col-xs-6">曹克楠</h5>
                    <h5 class="btn btn-danger col-md-2 col-sm-4 col-xs-6">许宏远</h5>
                    <h5 class="btn btn-default col-md-2 col-sm-4 col-xs-6">曹媛</h5>
                    <h5 class="btn btn-default col-md-2 col-sm-4 col-xs-6 " disabled="disabled">吴晓宁</h5>
                  </div>
                </div> <!-- row -->

                <div class="row">
                  <div class="choose_time">
                    <h4>选时间：</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>时间</th>
                          <th>周一</th>
                          <th>周二</th>
                          <th>周三</th>
                          <th>周四</th>
                          <th>周五</th>
                          <th>周六</th>
                          <th>周日</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>上午</th>
                          <td></td> 
                          <td></td> 
                          <td></td> 
                          <td></td> 
                          <td></td> 
                          <td class="complet">名额已满</td> 
                          <td class="complet">名额已满</td> 
                        </tr>
                        <tr>
                          <th>下午</th>
                          <td></td> 
                          <td></td> 
                          <td></td> 
                          <td></td> 
                          <td></td> 
                          <td class="complet">名额已满</td> 
                          <td class="complet">名额已满</td> 
                        </tr>
                        <tr>
                          <th>晚上</th>
                          <td class="hot">热报中</td> 
                          <td class="hot">热报中</td> 
                          <td class="available">学位：3</td> 
                          <td class="complet">名额已满</td> 
                          <td class="complet">名额已满</td> 
                          <td class="complet">名额已满</td> 
                          <td class="complet">名额已满</td> 
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div> <!-- row -->
                
                <div class="row visible-lg visible-md">
                  <div class="copy_buy_lesson">
                    <h4>报名：</h4>
                    <h5 class="btn btn-warning">购买课程</h5>
                    <span class="text-info">现价：<span id="discount_price">0</span>元（原价<span id="real_price">500</span>元，中途报名，比例收费）</span>
                  </div>
                </div> <!-- row -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="hot_course visible-lg visible-md">
                <h4>热门直播</h4>
                <div class="hot_course_object">
                  <img src="_/images/course_icon.jpg" alt="" class="img-thumbnail img-responsive">
                  <h5>名称：绝对值突破</h5>
                  <h5>学员：初一年级</h5>
                  <h5>时间：2015年4月20日</h5>
                  <h5>性质：免费体验课</h5>
                  

                </div>
                <div class="hot_course_object">
                  <img src="_/images/course_icon.jpg" alt="" class="img-thumbnail img-responsive">
                  <h5>名称：绝对值突破</h5>
                  <h5>学员：初一年级</h5>
                  <h5>时间：2015年4月20日</h5>
                  <h5>性质：免费体验课</h5>
                  

                </div>
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <h4 id="lesson_desc">课程简介</h4>
                <h5>1、  春季班尖子班的变化</h5>
                <p>关键词：必修直播  选修直播  作业批改  天天练  答疑</p>
                <p>(1)    必修课和选修课：每周末一次的直播作为每周的必修直播，同时我们增加了每周至少一次的选修直播，针对课堂中的重点和难点为没有过瘾的孩子讲解难度更高的课程。所有的必修课和选修课都提供录播。</p>
                <p>(2)    作业批改：每次必修直播课都会有在电脑上直接完成的作业和需要手写的作业。作业辅导老师会给予批改。</p>
                <p>(3)    天天练：针对学习进度，每天都会给孩子布置10-15分钟作业，当天晚上完成，第二天老师会批改给予语音反馈。天天练的目的是让练习成为常态化。学习效果的最好保障，只包含在学神套餐中。</p>
                <p>(4)    答疑：每天晚上在qq群，都会有广场答疑；针对尖子班的学霸和学神方案，我们还有专门的答疑群进行针对性答疑。答疑群实名认证，报名后可见。</p>
                <h5>2、  尖子班讲什么？</h5>
                <p>尖子班分为人教版和北师版两个版本。根据教材版本不同，孩子可以选择不同的版本。苏教、浙教、冀教和湘教选择北师版；沪科、上海和华师选择人教版。</p>
                <p>尖子班在春季同步提高初一下的内容，细心的小伙伴可能发现其中有部分初二内容，因为几乎所有的学校都会把部分初二内容提前讲，所以初一下学期非常重要。难度和学校考试压轴题接近。选修课更是讲解考试必考经典题型。</p>
                <p>尖子班在暑期预习初二的内容。</p>
              </div><!-- row -->
              <div class="row">
                <h4 id="lesson_brief">课程大纲</h4>
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>课时</th>
                      <th>课程内容</th>
                      <th>课程详情</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>第一讲</th>
                      <td>实数的综合练习</td> 
                      <td>系统学习实数的相关知识，概念，并进行相关的计算训练。</td> 
                    </tr>
                    <tr>
                      <th>第二讲</th>
                      <td>实数的综合练习</td> 
                      <td>系统学习实数的相关知识，概念，并进行相关的计算训练。</td> 
                    </tr>
                  </tbody>
                </table>
              </div><!-- row -->
              <div class="row">
                <h4 id="teacher">任课老师</h4>
                <div class="teacher_info">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="teacher_img">
                        <img src="_/images/course_icon.jpg" alt="" class="img-circle" width=160px>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <h4>曹克楠老师</h4>
                      <h5 class="teacher_desc">曹克楠老师，毕业于北京航空航天大学。初一年级负责人。上课以激情，有活力著称。</h5>
                      <h5 class="teacher_special">授课特点：激情四射，严肃活泼。</h5>
                      <h5 class="teacher_special1">教学宣言：我在方田，我嗓门最大</h5>
                      <div class="col-md-6 col-md-offset-6">
                        <div class="btn btn-info">教学视频</div>
                      </div>
                    </div>
                  </div>
                  
                </div><!-- teacher_info -->
                <div class="teacher_info">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="teacher_img">
                        <img src="_/images/course_icon.jpg" alt="" class="img-circle" width=160px>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <h5 class="teacher_desc">曹克楠老师，毕业于北京航空航天大学。初一年级负责人。上课以激情，有活力著称。</h5>
                      <h5>授课特点：激情四射，严肃活泼。</h5>
                      <h5>教学宣言：我在方田，我嗓门最大</h5>
                      <div class="col-md-6 col-md-offset-6">
                        <div class="btn btn-info">教学视频</div>
                      </div>
                    </div>
                  </div>
                  
                </div><!-- teacher_info -->
              </div><!-- row -->
              <div class="row">
                <h4 id="score_by_students">学员评价</h4>
                <div class="row">
                  
                
                  <div class="col-md-6">
                    <div class="score_info">
                      <div>综合评价：<span class="glyphicon glyphicon-star marked" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star marked" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star marked" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star marked" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star unmarked" aria-hidden="true"></span>
                      </div>
                      <div>
                        <h2>97%</h2>
                        <p>好评度</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="score_progress">
                      <div class="col-md-3">
                        <h5>好评</h5>
                      </div>
                      <div class="col-md-9">
                        <div class="progress">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%;">
                            97%
                          </div>
                        </div><!-- progress -->
                      </div>
                      
                    </div><!-- score_progress -->
                    <div class="score_progress">
                      <div class="col-md-3">
                        <h5>中评</h5>
                      </div>
                      <div class="col-md-9">
                        <div class="progress">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 3%;">
                            3%
                          </div>
                        </div><!-- progress -->
                      </div>
                      
                    </div><!-- score_progress -->
                    <div class="score_progress">
                      <div class="col-md-3">
                        <h5>差评</h5>
                      </div>
                      <div class="col-md-9">
                        <div class="progress">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                            0%
                          </div>
                        </div><!-- progress -->
                      </div>
                      
                    </div><!-- score_progress -->
                  </div>
                </div>
                <div class="row">
                  <div class="student_commends">
                    <div class="col-md-3">
                      <img src="_/images/course_icon.jpg" alt="" width=100px>
                    </div>
                    <div class="col-md-9">
                      <div class="row">
                        <h5>许宏远</h5>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <h6>上课时间：周六晚上</h6>
                        </div>
                        <div class="col-md-6">
                          <h6>任课老师：曹克楠</h6>
                        </div>
                      </div>
                      <div class="row">
                        <p>柯南老师的课还是特别喜欢，他的讲解也非常细致，希望有机会让孩子一直跟着柯南老师的班级学习。</p>
                      </div>
                      
                    </div>
                  </div>
                  
                </div><!-- row -->
                <div class="row">
                  <div class="student_commends">
                    <div class="col-md-3">
                      <img src="_/images/course_icon.jpg" alt="" width=100px>
                    </div>
                    <div class="col-md-9">
                      <div class="row">
                        <h5>许宏远</h5>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <h6>上课时间：周六晚上</h6>
                        </div>
                        <div class="col-md-6">
                          <h6>任课老师：曹克楠</h6>
                        </div>
                      </div>
                      <div class="row">
                        <p>柯南老师的课还是特别喜欢，他的讲解也非常细致，希望有机会让孩子一直跟着柯南老师的班级学习。</p>
                      </div>
                      
                    </div>
                  </div>
                  
                </div><!-- row -->
              </div>
            </div>
          </div> <!-- row -->

        </div>
      </section>
    </div>
    
    <div class="slider">
      <section class="col-md-2">
        <div class="slider_menu affix">
          <div class="row">
            <div class="try_lesson clearfix">
              <div class="btn btn-info">试听课程</div>
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="buy_lesson">
              <div class="btn btn-warning">购买课程</div>
            </div>
          </div><!-- row -->
          <div class="row">
            <nav class="visible-lg visible-md" id="navbar-slider">
              <ul>
                <li id="navbar_choose_lesson"><a href="#">课程选择</a></li>
                <li id="navbar_lesson_desc"><a href="#">课程介绍</a></li>
                <li id="navbar_lesson_brief"><a href="#">课程大纲</a></li>
                <li id="navbar_teacher"><a href="#">任课老师</a></li>
                <li id="navbar_score_by_students"><a href="#">学员评价</a></li>
              </ul>
            </nav>
          </div><!-- row -->
          <span id="activeitem" style="color:red;"></span>
          
        </div>
        
        
      </section>
    </div>

  </section>

  
  </div>

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