<?php 
	$course_id = $_POST['course_id'];
	$start_time = $_POST['start_time']/1000;
	$end_time = $_POST['end_time']/1000;
	// $browserServer = "http://101.200.240.208";
	// $browserPath = $browserServer . "/browser";
	// $configPath = $browserPath . "/" . $courseid . "/";

	header ( 'Content-type:text/html;charset=utf8' );
	$host = 'tcp://101.200.240.208:9999';
	$fp = stream_socket_client ( $host, $errno, $error, 20 );
	if (! $fp) {

		$error_code = "$error ($errno)";
	     
	    echo errorMsg($error_code);
	    return false;
	} else {
		$data ='{"action":"montage","data":{"course_id":';
		$data.='"'.$course_id.'"';
		$data.=', "start_time":';
		$data.='"'.$start_time.'"';
		$data.=', "end_time":';
		$data.='"'.$end_time.'"';
		$data.='}}';

	    fwrite ( $fp, $data );
	    while ( ! feof ( $fp ) ) {
	        // echo errorMsg (fgets ( $fp )); #获取服务器返回的内容
	        $reponse = fgets ( $fp );
	        $reponse = json_decode($reponse);
	        // echo $reponse->code;
	        // echo errorMsg($reponse['code']);
	        switch ($reponse->code) {
	        	case 0:
	        		echo successMsg($reponse->message);
	        		break;
	        	case 1:
	        		echo errorMsg($reponse->message);
	        		break;
	        	
	        	default:
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

	function successMsg ($msg) {
		$error_msg = '';
		$error_msg .= '<div class="alert alert-success alert-dismissible" role="alert">';
		$error_msg .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span $aria-hidden="true">&times;</span></button>';
		$error_msg .= '<strong>完成！</strong>'.$msg;
		$error_msg .= '</div>';
		return $error_msg;
	}
?>