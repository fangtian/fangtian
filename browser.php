<?php 
	$courseid = $_POST['courseid'];
	$date = $_POST['date'];
	$browserServer = "http://101.200.240.208";
	$browserPath = $browserServer . "/browser";
	// $configPath = $browserPath . "/" . $courseid . "/";

	header ( 'Content-type:text/html;charset=utf8' );
	// echo '<script type="text/javascript">console.log("test");</script>';
	$host = 'tcp://101.200.240.208:9999';
	$fp = stream_socket_client ( $host, $errno, $error, 20 );
	if (! $fp) {

		$error_code = "$error ($errno)";
	     
	    echo errorMsg($error_code);
	    return false;
	} else {
		$data ='{"action":"browser","data":{"course_id":';
		$data.='"'.$courseid.'"';
		$data.=', "date":';
		$data.='"'.$date.'"';
		$data.='}}';

	    fwrite ( $fp, $data );
	    while ( ! feof ( $fp ) ) {
	        // echo errorMsg (fgets ( $fp )); #获取服务器返回的内容
	        $reponse = fgets ( $fp );
	        // echo $reponse;
	        $reponse = json_decode($reponse);
	        // echo $reponse->code;
	        // echo errorMsg($reponse['code']);
	        // echo $reponse->code;
	        switch ($reponse->code) {
	        	case 0:
	        		// echo errorMsg(json_encode($reponse->message));
	        		// echo '<script type="text/javascript">console.log('.$data.');</script>';
	        		echo '<script type="text/javascript">creatPlayerById("'.$browserPath.'","'.$courseid.'");</script>';
	        		echo '<script type="text/javascript">browser_progress("complete");</script>';
	        		// echo '<script type="text/javascript">creatPlayerById("http://123.57.232.73/replay/19_382/");</script>';
	        		break;
	        	case 1:
	        		echo errorMsg($reponse->message);
	        		break;
	        	case 100:
	        		echo '<script type="text/javascript">browser_progress("'.$reponse->message.'");</script>';
	        		break;
	        	default:
	        		echo '<script type="text/javascript">browser_progress("error");</script>';
	        		echo errorMsg($reponse->message);
	        		break;
	        }
	    }
	    fclose ( $fp );
	}

	function errorMsg ($msg) {
		$error_msg = '';
		$error_msg .= '<div class="alert alert-danger alert-dismissible" role="alert">';
		$error_msg .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span $aria-hidden="true">&times;</span></button>';
		$error_msg .= '<strong>错误！</strong>'.$msg;
		$error_msg .= '</div>';
		return $error_msg;
	}
?>