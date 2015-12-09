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
    <!-- datepick css -->
    <link rel="stylesheet" href="picker/lib/themes/default.css">
    <link rel="stylesheet" href="picker/lib/themes/default.date.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="replayadmin">

  <!-- include header.php -->
  <?php include "_/components/php/header.php" ?>
  
  <section id="replaycontent">
    <div class="container">
      <div class="row">
        <div class="query-date btn-group" role="group">
          <button class="btn btn-primary">当天</button>
          <button class="btn btn-info">三天内</button>
          <button class="btn btn-info">一周内</button>
        </div>
      </div> <!-- row -->
      <form id="browserForm" action="browser.php" method="post">
        <fieldset class="browserfield">
          <div class="courseid-zone col-sm-3">
            <select class="form-control" name="courseid" multiple="true" size="5">
              <option   value= "108_977"   > 108_977 </option>
              <option   value= "19_239"   > 19_239 </option>
              <option   value= "19_381"   > 19_381 </option>
              <option   value= "19_382"   > 19_382 </option>
              <option   value= "19_388"   > 19_388 </option>
              <option   value= "19_389"   > 19_389 </option>
              <option   value= "19_390"   > 19_390 </option>
            </select>
          </div>
          <div class="course_info col-sm-3">
            <h5>任课老师：曹媛</h5>
            <h5>科目：数学</h5>
            <h5>课程名称：五年级提高班</h5>
          </div>
          <div class="form-group has-warning col-sm-3">
            <label class="control-label" for="input_date">请选择预览的课程日期</label>
            <input
              id="input_date"
              class="datepicker control-label"
              name="date"
              type="text"
              autofocuss
              >
          </div>
          
          <div class="browser col-sm-12">
            <input id="make-browser" class="btn btn-success" type="submit" value="生成预览播放器" />
            <!-- <button>生成预览</button> -->
            <div id="progress" class="progress col-sm-9 col-sm-push-1 hide" >
              <div id="browser-progress" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <!-- <span class="sr-only">40% Complete</span> -->
                40% Complete
              </div>
            </div>
          </div>
        </fieldset>
      </form> <!-- browserForm -->
      <div class="row">
        <div id="browserPlayer" class="col-sm-12"></div>
      </div> <!-- row -->
      <div class="row">
        <div id="Player" class="col-sm-10"></div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-sm-12">
          <form id="mongtageForm" action="montage.php" method="post">
            <fieldset>
              <div class="form-group has-success col-sm-3">
                <label class="control-label" for="course_id">课程id</label>
                <input type="text" id="course_id" name="course_id" readonly>
              </div>
              <div class="form-group has-warning col-sm-3">
                <label class="control-label" id="label_start_time" for="start_time">课程开始时间</label>
                <input class="control-label" type="text" id="start_time" name="start_time" readonly>
              </div>
              <div class="form-group has-warning col-sm-3">
                <label class="control-label" id="label_end_time" for="end_time">课程结束时间</label>
                <input class="control-label" type="text" id="end_time" name="end_time" readonly>
              </div>
              <div class="col-sm-12">
                <input type="submit" class="btn btn-success" value="生成回看视频">
              </div>
            </fieldset>
          </form>
        </div>
      </div> <!-- row -->
      <div class="row">
        <div id="montageMsgZone" class="col-sm-12"></div>
      </div>
      
    </div> <!-- container -->
  </section>
  <!-- <div id="piakerContainer"></div> -->
  
  <!-- include footer.php -->
  <?php include "_/components/php/footer.php" ?>
  
  <div id="back-top-wrapper" class="visible-desktop">
    <p id="back-top"> <a href="#top"><span></span></a> </p>
  </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="_/js/bootstrap.js"></script>
  <script src="_/js/fangtian.js"></script>
  <script src="_/js/jquery.form.min.js"></script>
  <script src="player/swfobject.js"></script>
  <script src="picker/lib/picker.js"></script>
  <script src="picker/lib/picker.date.js"></script>
  <!-- // <script src="picker/lib/legacy.js"></script> -->
  <script type="text/javascript">
    // prepare the form when the DOM is ready 
    $(document).ready(function() { 
        // bind browserForm using ajaxForm 
        $('#browserForm').ajaxForm({ 
            //beforeSubmit do a validate
            beforeSubmit: validate,
            // target identifies the element(s) to update with the server response 
            target: '#browserPlayer',
            // resetForm: true, 
            // clearForm: true, 
     
            // success identifies the function to invoke when the server response 
            // has been received; here we apply a fade-in effect to the new content 
            success: function() { 
                $('#browserPlayer').fadeIn('slow'); 
            } 
        }); 

        // bind montageForm using ajaxForm 
        $('#mongtageForm').ajaxForm({ 
            //beforeSubmit do a validate
            beforeSubmit: validateMontage,
            // target identifies the element(s) to update with the server response 
            target: '#montageMsgZone',
            // resetForm: true, 
            // clearForm: true, 
     
            // success identifies the function to invoke when the server response 
            // has been received; here we apply a fade-in effect to the new content 
            success: function() { 
                $('#montageMsgZone').fadeIn('slow'); 
            } 
        }); 
    });

    function validate(formData, jqForm, options) { 
      // jqForm is a jQuery object which wraps the form DOM element 
      // 
      // To validate, we can access the DOM elements directly and return true 
      // only if the values of both the username and password fields evaluate 
      // to true 
   
      var form = jqForm[0]; 
      if (!form.courseid.value) { 
        $('#browserPlayer').html(selectIsEmpty('您需要先选择一个要预览的课程'));
        return false; 
      } else if (!form.date.value) {
        $('#browserPlayer').html(selectIsEmpty('您需要先选择一个上课的日期'));
        return false;
      } 
      $('#make-browser').attr('disabled','');
      $('#make-browser').val('正在生成预览文件，请稍等...');
      return true;
    }

    function validateMontage(formData, jqForm, options) { 
      // jqForm is a jQuery object which wraps the form DOM element 
      // 
      // To validate, we can access the DOM elements directly and return true 
      // only if the values of both the username and password fields evaluate 
      // to true 
   
      var form = jqForm[0]; 
      if (!form.course_id.value) { 
        $('#montageMsgZone').html(selectIsEmpty('课程id为空，请先生成预览播放器'));
        return false; 
      } else if (!form.start_time.value) {
        $('#montageMsgZone').html(selectIsEmpty('开始时间为空，请选择要剪辑的起点'));
        return false;
      } else if (!form.end_time.value) {
        $('#montageMsgZone').html(selectIsEmpty('结束时间为空'));
        return false;
      } 
      return true;
    }


    function selectIsEmpty (msgInput) {
      var msg = "";
      msg += '<div class="alert alert-info alert-dismissible" role="alert">';
      msg += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
      msg += '<strong>错误！</strong>';
      msg += msgInput;
      msg += '</div>';
      return msg;
    }

    function creatPlayerById(browserPath, courseid) {
      // console.log(browserPath,courseid);
      var swfVersionStr = "11.1.0";
      var flashvars = {};
      flashvars.mode = "montage";
      flashvars.configpath = browserPath+'/'+courseid+'/';
      var params = {};
      params.quality = "high";
      params.bgcolor = "#2f3b39";
      params.allowscriptaccess = "sameDomain";
      params.allowfullscreen = "true";
      var attributes = {};
      attributes.align = "middle";
      attributes.wmode = "opaque";
      swfobject.embedSWF(
                "player/montagePlayer.swf", "Player", 
                "100%", "60", 
                swfVersionStr, "player/playerProductInstall.swf", 
                flashvars, params, attributes);
            // JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
      swfobject.createCSS("#Player", "display:block;text-align:left;margin:0 50px 20px 30px;");
      $('#course_id').val(courseid);
      $('#browserForm').resetForm();
    }

    function browser_progress(progress_message) {
      switch(progress_message){
        case 'init':
          $('#progress').removeClass('hide');
          $('#browser-progress').html('初始化完成');
          $('#browser-progress').css('width','25%');
          break;
        case 'getflvfiles':
          $('#browser-progress').html('文件搜索完成');
          $('#browser-progress').css('width','50%');
          $('#make-browser').attr('disabled','');
          break;
        case 'getflvinfo':
          $('#browser-progress').html('生成视频文件信息完成');
          $('#browser-progress').css('width','75%');
          break;
        case 'complete':
          // $('#browser-progress').html('播放器成功生成');
          // $('#browser-progress').css('width','100%');
          $('#make-browser').removeAttr('disabled');
          $('#make-browser').val('生成预览播放器');
          break;
        case 'error':
          $('#make-browser').removeAttr('disabled','');
          $('#make-browser').val('生成预览播放器');
          break;
      }
    }

    // ---------------------------------------------------------
    // datepicker
    // ---------------------------------------------------------
    
    $('.datepicker').pickadate({
      // Buttons
      today: '今天',
      clear: '清除',
      close: '关闭',
      // Formats
      format: 'yyyy-mm-dd',
      // formatSubmit: 'yyyy/mm/dd',
      hiddenPrefix: undefined,
      hiddenSuffix: '_submit',
      hiddenName: undefined,
      weekdaysShort: ['日', '一', '二', '三', '四', '五', '六'],
      showMonthsShort: true,
      monthsFull: ['一月份', '二月份', '三月份', '四月份', '五月份', '六月份', '七月份', '八月份', '九月份', '十月份', '十一月份', '十二月份'],
      monthsShort: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
    });

    // ---------------------------------------------------------
    // montage flv
    // ---------------------------------------------------------

    function montageMarker(marker){
      // console.log('从'+Date(marker[0]).getHours()+':'+Date(marker[0]).getMinutes()+':'+Date(marker[0]).getSeconds()+'开始');
      // console.log(+String(Date(marker[0]).getHours()));
      // console.log((new Date(marker[0])).getHours());
      console.log(marker[0]);
      console.log(marker[1]);
      $('#start_time').val(marker[0]);
      $('#end_time').val(marker[1]);
      $('#label_start_time').html('从'+getTimeToString(marker[0])+'开始');
      $('#label_end_time').html('到'+getTimeToString(marker[1])+'结束');
    }

    function getTimeToString(_time) {
      var time = new Date(_time);
      var hours = String(time.getHours());
      hours = hours.length == 1 ? '0' + hours: hours;
      var minutes = String(time.getMinutes());
      minutes = minutes.length == 1 ? '0' + minutes: minutes;
      var seconds = String(time.getSeconds());
      seconds = seconds.length == 1 ? '0' + seconds: seconds;

      return hours + ':' + minutes + ':' + seconds;
    }

  </script>

  </body>
</html>