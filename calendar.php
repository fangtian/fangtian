<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='fullcalendar-2.5.0/fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar-2.5.0/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='fullcalendar-2.5.0/lib/moment.min.js'></script>
<script src='_/components/js/jquery.js'></script>
<script src='fullcalendar-2.5.0/fullcalendar.min.js'></script>
<script src='fullcalendar-2.5.0/lang/zh-cn.js'></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			themeButtonIcons : {
			    prev: 'circle-triangle-w',
			    next: 'circle-triangle-e',
			    prevYear: 'seek-prev',
			    nextYear: 'seek-next'
			},
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			minTime: '8:00',
    		maxTime: '21:00',
    		defaultView: 'agendaWeek',
    		color: 'gray',
    		textColor: 'yellow',
			events: [
				{
					title : '五年级超常班',
					start : '2015-12-19 18:30',
					end   : '2015-12-19 20:30',
					color : '#e64759',
					// color : 'green',
					url : '#',
					// rendering: '#e64759',
				}
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
		background-color: #252830;
		color: white;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>
