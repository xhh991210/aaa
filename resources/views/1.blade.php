<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<table width="1200" class="table table-bordered">
		<th>项目
		@foreach($res as $v)
			<td>{{$v->jsid}}技师{{$v->jsname}}</td>
		@endforeach
		</th>
		<th>销售排名
			<td></td>	
		</th>
		<th>销售数量
		@foreach($res as $b)
			<td>{{intval($b->sl)}}</td>
		@endforeach
		</th>
		<th>销售金额
		@foreach($res as $c)
			<td>{{floor($c->je)}}</td>
		@endforeach
		</th>
		<th>定额提成
		@foreach($res as $d)
			<td>{{$d->tcje}}</td>
		@endforeach
		</th>
		<th>客单价
		@foreach($res as $e)
			<td>{{round($c->je/$b->sl,2)}}</td>
		@endforeach
		</th>
	</table>
</body>
</html>