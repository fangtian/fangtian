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
  <body id="course">

  <!-- include header.php -->
  <?php include "_/components/php/header.php" ?>
  
  <section id="course">
    <div class="container">
    
    <div class="content">
      <section class="col-lg-10 clearfix">
        <div class="query_zone clearfix">
          <div class="key clearfix">
            <div class="col-sm-3 col-xs-6"><span data-toggle="collapse" data-target="#location" class="btn btn-info" id="key-location">所在地</span><button id = "location-close" type="button" class="close hidden" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
            <div class="col-sm-3 col-xs-6"><span data-toggle="collapse" data-target="#level" class="btn btn-info">年级</span></div>
            <div class="col-sm-3 col-xs-6"><span data-toggle="collapse" data-target="#method" class="btn btn-info">授课方式</span></div>
            <div class="col-sm-3 col-xs-6"><span data-toggle="collapse" data-target="#subject" class="btn btn-info">科目</span></div>

          </div>

          <div class="result-indicator">
            <span>共有</span>
            <span class="result-sum">
              <strong>
                32
              </strong>
            </span>
            <span>条记录</span>
            <span>&nbsp</span>
            <span class="current-page"><strong>1</strong></span>
            <span>/</span>
            <span class="total-pages">2</span>
            <span>&nbsp</span>
            <span class="btn-group" role="group">
              <button class="btn btn-default btn-sm" disabled="true"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></button>
              <button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
            </span>
          </div>
          
          <div class="collapse clearfix" id="location">
            <div class="location well clearfix">
              <div class="col-sm-3 col-xs-6"><span class="btn-block btn btn-default">合肥</span></div>
              <div class="col-sm-3 col-xs-6"><span class="btn-block btn btn-default">长沙</span></div>
              <div class="col-sm-3 col-xs-6"><span class="btn-block btn btn-default">深圳</span></div>
              <div class="col-sm-3 col-xs-6"><span class="btn-block btn btn-default">其他城市</span></div>
            </div>
          </div>
          <div class="collapse clearfix" id="level">
            <div class="location well clearfix">
              <div class="col-sm-3 col-xs-6"><span class="btn-block btn btn-default">五年级</span></div>
              <div class="col-sm-3 col-xs-6"><span class="btn-block btn btn-default">六年级</span></div>
              <div class="col-sm-3 col-xs-6"><span class="btn-block btn btn-default">初一</span></div>
              <div class="col-sm-3 col-xs-6"><span class="btn-block btn btn-default">初二</span></div>
              <div class="col-sm-3 col-xs-6"><span class="btn-block btn btn-default">初三</span></div>
            </div>
          </div>
          <div class="collapse clearfix" id="method">
            <div class="location well clearfix">
              <div class="col-xs-6"><span class="btn-block btn btn-default">面授</span></div>
              <div class="col-xs-6"><span class="btn-block btn btn-default">网络直播</span></div>
            </div>
          </div>
          <div class="collapse clearfix" id="subject">
            <div class="location well clearfix">
              <div class="col-xs-6"><span class="btn-block btn btn-default">数学</span></div>
              <div class="col-xs-6"><span class="btn-block btn btn-default">物理</span></div>
            </div>
          </div>
        </div> <!-- query_zone -->
        <div class="course_list">
          <div class="classitem">
            <div class="row">
              <div class="col-md-2">
                <div class="course_img">
                  <a href="#" class="thumbnail">
                  <img src="_/images/course_icon.jpg" alt="...">
                  </a>
                </div>
                <div class="course_title col-md-6 col-xs-6">
                  <h5 class="bg-primary">数学</h5>
                </div>
                <div class="course_title col-md-6 col-xs-6">
                  <h5 class="bg-danger">人教版</h5>
                </div>
              </div>
              <div class="col-md-8 clearfix">
                <div class="row">
                  <div class="course_name">
                    <h4>初一年级秋季同步拓展班</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <p>开课日期：2015年2月1日</p>
                    <p>任课老师：曹柯楠，徐宏远</p>
                    <p>上课时间：每周日8:00-10:30</p>
                  </div>
                  <div class="col-lg-6">
                    <p>结束日期：2015年6月17日</p>
                    <p>班级类型：基础，提高，尖子</p>
                    <p>课程价格：2250元</p>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <span class="badge">学位<br>97人</span>
                <button class="btn btn-info" type="button">
                  我要试听
                </button>
                <button class="btn btn-danger" type="button">
                  马上报名
                </button>
              </div>
              
            </div>
          </div><div class="classitem">
            <div class="row">
              <div class="col-md-2">
                <div class="course_img">
                  <a href="#" class="thumbnail">
                  <img src="_/images/course_icon.jpg" alt="...">
                  </a>
                </div>
                <div class="course_title col-md-6 col-xs-6">
                  <h5 class="bg-primary">数学</h5>
                </div>
                <div class="course_title col-md-6 col-xs-6">
                  <h5 class="bg-danger">人教版</h5>
                </div>
              </div>
              <div class="col-md-8 clearfix">
                <div class="row">
                  <div class="course_name">
                    <h4>初一年级秋季同步拓展班</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <p>开课日期：2015年2月1日</p>
                    <p>任课老师：曹柯楠，徐宏远</p>
                    <p>上课时间：每周日8:00-10:30</p>
                  </div>
                  <div class="col-lg-6">
                    <p>结束日期：2015年6月17日</p>
                    <p>班级类型：基础，提高，尖子</p>
                    <p>课程价格：2250元</p>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <span class="badge">97人</span>
                <button class="btn btn-info" type="button">
                  我要试听
                </button>
                <button class="btn btn-info" type="button">
                  马上报名
                </button>
              </div>
              
            </div>
          </div>


          
        </div>
      </section>
    </div>
    
    <div class="teachers visible-lg">
      <section class="col-lg-2">
        <h5><strong>按照老师选择</strong></h5>
        <ul>
          <li>
            <a href="#" class="thumbnail">
                  <img src="_/images/course_icon.jpg" alt="...">
            </a>
            <h4>曹克楠老师</h4>
            <h5>方田教育部主任</h5>
          </li>
          <li>
            <a href="#" class="thumbnail">
                  <img src="_/images/course_icon.jpg" alt="...">
            </a>
            <h5>曹克楠老师</h5>
            <h5>方田教育部主任</h5>
          </li>
        </ul>
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
  <script type="text/javascript">
    jQuery(document).ready(function(){
      $('#location').on('click', 'span', function(e){
        $('#location-close').removeClass('hidden');
        $('#key-location').text(this.innerText);
        $('#location').collapse('hide');
         
      });
      $('#level').on('click', 'span', function(){
         $('#level').collapse('hide');
      });
      $('#method').on('click', 'span', function(){
         $('#method').collapse('hide');
      });
      $('#subject').on('click', 'span', function(){
         $('#subject').collapse('hide');
      });
      $('#location-close').click(function(){
        // $('#location-close').remove('button');
        $('#location-close').addClass('hidden');
        $('#key-location').text('所在地');
      });

    });
  </script>

  </body>
</html>