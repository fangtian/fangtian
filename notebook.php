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
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
<div style="clear:both;height:59px;padding:0 0 0 15px;position:relative;">
    <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"> <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0027_Simplified Chinese.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /> </a></div>
<![endif]-->
  </head>
  <body>
  
  <!-- include header.php -->
  <?php include "_/components/php/header.php" ?>
  
    <section id="notebook">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="title">
              <h1>个人专属错题本</h1>
            </div> <!-- title -->
          </div>
        </div> <!-- row -->
        <div class="row">
          
          <div class="col-md-6">
            <div class="chartcontainer" id="chartcontainer">
              
            </div>
            <div class="curve_content">
              <p>德国心理学家艾宾浩斯（H.Ebbinghaus）通过对人的记忆进行研究发现：遗忘是在学习之后立刻开始的，最初遗忘速度很快，以后逐渐缓慢。学得的知识在一天后，如不抓紧复习，就只剩下原来的33.7%。即如果一开始学习知识花了三个小时，则第二天脑中只能记得总共大约一小时的内容，还需要再花两小时才能把三小时学的内容重新记忆起。
              </p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="correct_book">
              <div class="sub_title">
                <h5>错题本</h5>
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
              </div>
              <div class="correct_content">
                <p>你做错的题目，会自动添加到错题本。</p>
                <p>复习时，打开错题本，一题一题地消灭。</p>
                <p>还有比这更高效的复习方法吗？</p>
              </div>
            </div> <!-- correct_book -->
            
          </div>
          

        </div> <!-- row -->     
      </div> <!-- container -->

    </section> <!-- savetime -->

  
  

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
  <!-- Include js plugin -->
  <script src="owl-carousel/owl.carousel.js"></script>
  <!-- canvasjs  -->
  <script type="text/javascript" src="canvasjs/canvasjs.min.js"></script>
  <script type="text/javascript">
  // ---------------------------------------------------------
  // CanvasJS
  // ---------------------------------------------------------
  jQuery(document).ready(function(){
    CanvasJS.addColorSet("ft01",
     [
     // "#E65527",
     "#E65527"
    ]); 
    var chart = new CanvasJS.Chart("chartcontainer",
      {
        // theme: "theme2",
        backgroundColor: "#716F84",
        colorSet: "ft01",
        title:{
          text: "遗忘曲线",
          fontColor: "white",
          fontSize: 20,
          margin: 20
        },     
        axisY :{
          title: "记住的知识",
          labelFontColor: "white",
          titleFontColor: "white",
          suffix: " %"
        },
        animationEnabled: true,
        axisX :{
          title: "经历的时间",
          titleFontColor: "white",
          labelFontColor: "white",
          suffix: ""
        },
        legend : {
          fontColor: "white",
          fontSize: 12
        },
        data: [
        {      
          markerSize: 10, 
          toolTipContent: "<span style='\"'color: {color};'\"'>{label}</span><br /><span style='\"'color: {color};'\"'><strong>记住的知识</strong></span> {y} %",
          type: "spline",
          showInLegend: true,
          // indexLabelFontColor: "orangered",
          legendText: "遗忘是在学习之后立刻开始的，最初遗忘速度很快，以后逐渐缓慢",
          dataPoints: [
          {label: "下课后" , y: 75},     
          {label: "10分钟后" , y: 50},     
          {label: "24小时后" , y: 33.7},     
          {label: "一周后" , y: 20},     
          {label: "一个月后" , y: 10}   

          ]
        }             
        
        ]
      });

    chart.render();
  });
  
  </script>
  </body>
</html>