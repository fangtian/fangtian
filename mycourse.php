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
      <script src="data:application/octet-stream;base64,LyohIFJlc3BvbmQuanMgdjEuNC4yOiBtaW4vbWF4LXdpZHRoIG1lZGlhIHF1ZXJ5IHBvbHlmaWxsICogQ29weXJpZ2h0IDIwMTMgU2NvdHQgSmVobAogKiBMaWNlbnNlZCB1bmRlciBodHRwczovL2dpdGh1Yi5jb20vc2NvdHRqZWhsL1Jlc3BvbmQvYmxvYi9tYXN0ZXIvTElDRU5TRS1NSVQKICogICovCgohZnVuY3Rpb24oYSl7InVzZSBzdHJpY3QiO2EubWF0Y2hNZWRpYT1hLm1hdGNoTWVkaWF8fGZ1bmN0aW9uKGEpe3ZhciBiLGM9YS5kb2N1bWVudEVsZW1lbnQsZD1jLmZpcnN0RWxlbWVudENoaWxkfHxjLmZpcnN0Q2hpbGQsZT1hLmNyZWF0ZUVsZW1lbnQoImJvZHkiKSxmPWEuY3JlYXRlRWxlbWVudCgiZGl2Iik7cmV0dXJuIGYuaWQ9Im1xLXRlc3QtMSIsZi5zdHlsZS5jc3NUZXh0PSJwb3NpdGlvbjphYnNvbHV0ZTt0b3A6LTEwMGVtIixlLnN0eWxlLmJhY2tncm91bmQ9Im5vbmUiLGUuYXBwZW5kQ2hpbGQoZiksZnVuY3Rpb24oYSl7cmV0dXJuIGYuaW5uZXJIVE1MPScmc2h5OzxzdHlsZSBtZWRpYT0iJythKyciPiAjbXEtdGVzdC0xIHsgd2lkdGg6IDQycHg7IH08L3N0eWxlPicsYy5pbnNlcnRCZWZvcmUoZSxkKSxiPTQyPT09Zi5vZmZzZXRXaWR0aCxjLnJlbW92ZUNoaWxkKGUpLHttYXRjaGVzOmIsbWVkaWE6YX19fShhLmRvY3VtZW50KX0odGhpcyksZnVuY3Rpb24oYSl7InVzZSBzdHJpY3QiO2Z1bmN0aW9uIGIoKXt1KCEwKX12YXIgYz17fTthLnJlc3BvbmQ9YyxjLnVwZGF0ZT1mdW5jdGlvbigpe307dmFyIGQ9W10sZT1mdW5jdGlvbigpe3ZhciBiPSExO3RyeXtiPW5ldyBhLlhNTEh0dHBSZXF1ZXN0fWNhdGNoKGMpe2I9bmV3IGEuQWN0aXZlWE9iamVjdCgiTWljcm9zb2Z0LlhNTEhUVFAiKX1yZXR1cm4gZnVuY3Rpb24oKXtyZXR1cm4gYn19KCksZj1mdW5jdGlvbihhLGIpe3ZhciBjPWUoKTtjJiYoYy5vcGVuKCJHRVQiLGEsITApLGMub25yZWFkeXN0YXRlY2hhbmdlPWZ1bmN0aW9uKCl7NCE9PWMucmVhZHlTdGF0ZXx8MjAwIT09Yy5zdGF0dXMmJjMwNCE9PWMuc3RhdHVzfHxiKGMucmVzcG9uc2VUZXh0KX0sNCE9PWMucmVhZHlTdGF0ZSYmYy5zZW5kKG51bGwpKX07aWYoYy5hamF4PWYsYy5xdWV1ZT1kLGMucmVnZXg9e21lZGlhOi9AbWVkaWFbXlx7XStceyhbXlx7XH1dKlx7W15cfVx7XSpcfSkrL2dpLGtleWZyYW1lczovQCg/OlwtKD86b3xtb3p8d2Via2l0KVwtKT9rZXlmcmFtZXNbXlx7XStceyg/OlteXHtcfV0qXHtbXlx9XHtdKlx9KStbXlx9XSpcfS9naSx1cmxzOi8odXJsXCgpWyciXT8oW15cL1wpJyJdW146XCknIl0rKVsnIl0/KFwpKS9nLGZpbmRTdHlsZXM6L0BtZWRpYSAqKFteXHtdKylceyhbXFNcc10rPykkLyxvbmx5Oi8ob25seVxzKyk/KFthLXpBLVpdKylccz8vLG1pbnc6L1woW1xzXSptaW5cLXdpZHRoXHMqOltcc10qKFtcc10qWzAtOVwuXSspKHB4fGVtKVtcc10qXCkvLG1heHc6L1woW1xzXSptYXhcLXdpZHRoXHMqOltcc10qKFtcc10qWzAtOVwuXSspKHB4fGVtKVtcc10qXCkvfSxjLm1lZGlhUXVlcmllc1N1cHBvcnRlZD1hLm1hdGNoTWVkaWEmJm51bGwhPT1hLm1hdGNoTWVkaWEoIm9ubHkgYWxsIikmJmEubWF0Y2hNZWRpYSgib25seSBhbGwiKS5tYXRjaGVzLCFjLm1lZGlhUXVlcmllc1N1cHBvcnRlZCl7dmFyIGcsaCxpLGo9YS5kb2N1bWVudCxrPWouZG9jdW1lbnRFbGVtZW50LGw9W10sbT1bXSxuPVtdLG89e30scD0zMCxxPWouZ2V0RWxlbWVudHNCeVRhZ05hbWUoImhlYWQiKVswXXx8ayxyPWouZ2V0RWxlbWVudHNCeVRhZ05hbWUoImJhc2UiKVswXSxzPXEuZ2V0RWxlbWVudHNCeVRhZ05hbWUoImxpbmsiKSx0PWZ1bmN0aW9uKCl7dmFyIGEsYj1qLmNyZWF0ZUVsZW1lbnQoImRpdiIpLGM9ai5ib2R5LGQ9ay5zdHlsZS5mb250U2l6ZSxlPWMmJmMuc3R5bGUuZm9udFNpemUsZj0hMTtyZXR1cm4gYi5zdHlsZS5jc3NUZXh0PSJwb3NpdGlvbjphYnNvbHV0ZTtmb250LXNpemU6MWVtO3dpZHRoOjFlbSIsY3x8KGM9Zj1qLmNyZWF0ZUVsZW1lbnQoImJvZHkiKSxjLnN0eWxlLmJhY2tncm91bmQ9Im5vbmUiKSxrLnN0eWxlLmZvbnRTaXplPSIxMDAlIixjLnN0eWxlLmZvbnRTaXplPSIxMDAlIixjLmFwcGVuZENoaWxkKGIpLGYmJmsuaW5zZXJ0QmVmb3JlKGMsay5maXJzdENoaWxkKSxhPWIub2Zmc2V0V2lkdGgsZj9rLnJlbW92ZUNoaWxkKGMpOmMucmVtb3ZlQ2hpbGQoYiksay5zdHlsZS5mb250U2l6ZT1kLGUmJihjLnN0eWxlLmZvbnRTaXplPWUpLGE9aT1wYXJzZUZsb2F0KGEpfSx1PWZ1bmN0aW9uKGIpe3ZhciBjPSJjbGllbnRXaWR0aCIsZD1rW2NdLGU9IkNTUzFDb21wYXQiPT09ai5jb21wYXRNb2RlJiZkfHxqLmJvZHlbY118fGQsZj17fSxvPXNbcy5sZW5ndGgtMV0scj0obmV3IERhdGUpLmdldFRpbWUoKTtpZihiJiZnJiZwPnItZylyZXR1cm4gYS5jbGVhclRpbWVvdXQoaCksaD1hLnNldFRpbWVvdXQodSxwKSx2b2lkIDA7Zz1yO2Zvcih2YXIgdiBpbiBsKWlmKGwuaGFzT3duUHJvcGVydHkodikpe3ZhciB3PWxbdl0seD13Lm1pbncseT13Lm1heHcsej1udWxsPT09eCxBPW51bGw9PT15LEI9ImVtIjt4JiYoeD1wYXJzZUZsb2F0KHgpKih4LmluZGV4T2YoQik+LTE/aXx8dCgpOjEpKSx5JiYoeT1wYXJzZUZsb2F0KHkpKih5LmluZGV4T2YoQik+LTE/aXx8dCgpOjEpKSx3Lmhhc3F1ZXJ5JiYoeiYmQXx8ISh5fHxlPj14KXx8IShBfHx5Pj1lKSl8fChmW3cubWVkaWFdfHwoZlt3Lm1lZGlhXT1bXSksZlt3Lm1lZGlhXS5wdXNoKG1bdy5ydWxlc10pKX1mb3IodmFyIEMgaW4gbiluLmhhc093blByb3BlcnR5KEMpJiZuW0NdJiZuW0NdLnBhcmVudE5vZGU9PT1xJiZxLnJlbW92ZUNoaWxkKG5bQ10pO24ubGVuZ3RoPTA7Zm9yKHZhciBEIGluIGYpaWYoZi5oYXNPd25Qcm9wZXJ0eShEKSl7dmFyIEU9ai5jcmVhdGVFbGVtZW50KCJzdHlsZSIpLEY9ZltEXS5qb2luKCJcbiIpO0UudHlwZT0idGV4dC9jc3MiLEUubWVkaWE9RCxxLmluc2VydEJlZm9yZShFLG8ubmV4dFNpYmxpbmcpLEUuc3R5bGVTaGVldD9FLnN0eWxlU2hlZXQuY3NzVGV4dD1GOkUuYXBwZW5kQ2hpbGQoai5jcmVhdGVUZXh0Tm9kZShGKSksbi5wdXNoKEUpfX0sdj1mdW5jdGlvbihhLGIsZCl7dmFyIGU9YS5yZXBsYWNlKGMucmVnZXgua2V5ZnJhbWVzLCIiKS5tYXRjaChjLnJlZ2V4Lm1lZGlhKSxmPWUmJmUubGVuZ3RofHwwO2I9Yi5zdWJzdHJpbmcoMCxiLmxhc3RJbmRleE9mKCIvIikpO3ZhciBnPWZ1bmN0aW9uKGEpe3JldHVybiBhLnJlcGxhY2UoYy5yZWdleC51cmxzLCIkMSIrYisiJDIkMyIpfSxoPSFmJiZkO2IubGVuZ3RoJiYoYis9Ii8iKSxoJiYoZj0xKTtmb3IodmFyIGk9MDtmPmk7aSsrKXt2YXIgaixrLG4sbztoPyhqPWQsbS5wdXNoKGcoYSkpKTooaj1lW2ldLm1hdGNoKGMucmVnZXguZmluZFN0eWxlcykmJlJlZ0V4cC4kMSxtLnB1c2goUmVnRXhwLiQyJiZnKFJlZ0V4cC4kMikpKSxuPWouc3BsaXQoIiwiKSxvPW4ubGVuZ3RoO2Zvcih2YXIgcD0wO28+cDtwKyspaz1uW3BdLGwucHVzaCh7bWVkaWE6ay5zcGxpdCgiKCIpWzBdLm1hdGNoKGMucmVnZXgub25seSkmJlJlZ0V4cC4kMnx8ImFsbCIscnVsZXM6bS5sZW5ndGgtMSxoYXNxdWVyeTprLmluZGV4T2YoIigiKT4tMSxtaW53OmsubWF0Y2goYy5yZWdleC5taW53KSYmcGFyc2VGbG9hdChSZWdFeHAuJDEpKyhSZWdFeHAuJDJ8fCIiKSxtYXh3OmsubWF0Y2goYy5yZWdleC5tYXh3KSYmcGFyc2VGbG9hdChSZWdFeHAuJDEpKyhSZWdFeHAuJDJ8fCIiKX0pfXUoKX0sdz1mdW5jdGlvbigpe2lmKGQubGVuZ3RoKXt2YXIgYj1kLnNoaWZ0KCk7ZihiLmhyZWYsZnVuY3Rpb24oYyl7dihjLGIuaHJlZixiLm1lZGlhKSxvW2IuaHJlZl09ITAsYS5zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7dygpfSwwKX0pfX0seD1mdW5jdGlvbigpe2Zvcih2YXIgYj0wO2I8cy5sZW5ndGg7YisrKXt2YXIgYz1zW2JdLGU9Yy5ocmVmLGY9Yy5tZWRpYSxnPWMucmVsJiYic3R5bGVzaGVldCI9PT1jLnJlbC50b0xvd2VyQ2FzZSgpO2UmJmcmJiFvW2VdJiYoYy5zdHlsZVNoZWV0JiZjLnN0eWxlU2hlZXQucmF3Q3NzVGV4dD8odihjLnN0eWxlU2hlZXQucmF3Q3NzVGV4dCxlLGYpLG9bZV09ITApOighL14oW2EtekEtWjpdKlwvXC8pLy50ZXN0KGUpJiYhcnx8ZS5yZXBsYWNlKFJlZ0V4cC4kMSwiIikuc3BsaXQoIi8iKVswXT09PWEubG9jYXRpb24uaG9zdCkmJigiLy8iPT09ZS5zdWJzdHJpbmcoMCwyKSYmKGU9YS5sb2NhdGlvbi5wcm90b2NvbCtlKSxkLnB1c2goe2hyZWY6ZSxtZWRpYTpmfSkpKX13KCl9O3goKSxjLnVwZGF0ZT14LGMuZ2V0RW1WYWx1ZT10LGEuYWRkRXZlbnRMaXN0ZW5lcj9hLmFkZEV2ZW50TGlzdGVuZXIoInJlc2l6ZSIsYiwhMSk6YS5hdHRhY2hFdmVudCYmYS5hdHRhY2hFdmVudCgib25yZXNpemUiLGIpfX0odGhpcyk7"></script>
    <![endif]-->
  </head>
  <body id="mycourse">

  <!-- include header.php -->
  <?php include "_/components/php/header.php" ?>
  
  <section id="mycourse">
    <div class="container">
    
    <div class="content">
      <section class="col-lg-2 col-md-3 clearfix visible-lg visible-md">
        <?php include "_/components/php/menu.php" ?>
      </section
    </div>
    
    <div>
      <section class="col-lg-10 col-md-9">
        <div class="row">
          <div class="myscore">
            <div class="col-md-2 col-md-push-6 col-xs-4">
              <a href=""><span class="badge badge-score"><br>笔记本<br>1</span></a>
            </div>
            <div class="col-md-2 col-md-push-6 col-xs-4">
              <a href=""><span class="badge badge-score"></br>天天练<br>99</span></a>
            </div>
            <div class="col-md-2 col-md-push-6 col-xs-4">
              <a href=""><span class="badge badge-score"></br>错题本<br>111</span></a>
            </div>
            <h4 class="col-md-6 col-md-pull-6 clearfix">我的收获</h4>
            <div class="col-md-3 col-md-pull-6 col-sm-6 col-xs-6">
              <h5>收获米粒：<span class="score_style">31</span></h5>
              <h5>已学课程：<span class="score_style">3</span></h5>
            </div>
            <div class="col-md-3 col-md-pull-6 col-sm-6 col-xs-6">
              <h5>收获表扬：<span class="score_style">19</span></h5>
              <h5>完成习题：<span class="score_style">89</span></h5>
            </div>
            
          </div><!-- myscore -->

        </div><!-- row -->
        <div class="row">
          <div class="mycourse">
            <h4>西门吹雪的班级</h4>
            <div class="course_list">
              <div class="list_info clearfix">
                <div class="col-lg-2 col-md-3 col-sm-4">
                  <div class="course_img">
                    <img src="_/images/course_icon.jpg" alt="" class="img-rounded img-responsive">
                  </div>
                  <div class="course_title col-md-6 col-xs-6">
                    <h5 class="bg-primary">数学</h5>
                  </div>
                  <div class="course_title col-md-6 col-xs-6">
                    <h5 class="bg-danger">人教版</h5>
                  </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-8">
                  <div class="course_info clearfix">
                    <h4>2015年初一年级春季同步班</h4>
                    <h5>任课老师：曹克楠</h5>
                    <h5>班级类别：超常班</h5>
                    <h5>上课小区：线上互联网</h5>
                    <h5>上课时间：每周五晚18:30-20:30</h5>
                    
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="button_list">     
                    <!-- <a class="btn btn-success btn-block" href="http://localhost/haibian/course/course.html">去上课</a>
                    <a class="btn btn-info btn-block">做作业</a> -->
                  </div>
                </div>

              </div><!-- list_info -->
              <div class="chapter">
                <div class="show_chapter">
                <span data-toggle="collapse" data-target="#show_chapter">节次列表详情>></span>
                </div>
                <div class="collapse clearfix" id="show_chapter">
                  <div class="location well clearfix">
                    <?php include "_/components/php/chapter_list.php" ?>
                  </div>
                </div>
                
                
              </div> <!-- chapter -->

            </div>
            
            
          </div><!-- mycourse -->
        </div><!-- row -->
        

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