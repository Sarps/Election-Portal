<!DOCTYPE html>

<html>
<head>

	<meta charset="utf-8">

	<title>NSBE Election</title>
	
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
	<link href='//fonts.googleapis.com/css?family=Podkova:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/revealjs/css/reveal.css">
	<link rel="stylesheet" href="assets/revealjs/css/theme/black.css" id="theme">
	<link rel="stylesheet" href="assets/css/fonts.css">
	<link rel="stylesheet" href="assets/css/hover-min.css">
	<link type="text/css" rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>

	<form class="login">
		<div>
			<span>What is your NSBE ID ?</span>
		</div>
		<input type="text" placeholder="Enter your NSBE ID!" id="ndbe_id"/>
		<input type="submit" value="➡" />
	</form>

	<div class="reveal blurred">
		<div class="slides">
			<section data-background="assets/img/1.jpg">
				<p>Welcome to the <a class="tz-link" href="https://www.github.com/Sarps">NSBE Election</a> Portal</p>
				<p><small>Click on right arrow at the bottom-right to start voting.</small></p>
			</section>
			<section>
				@foreach ($posts as $post)
					<section data-background="assets/img/{{rand(1, 7)}}.jpg">
						<div>
							<img src="{{asset("images/nominees/{$post->nominee->photo}")}}" width="auto" style="max-height: 300px; border-radius: 10px;">
						</div>
						<div>
								Aspirant: <a>{{$post->nominee->gender == 'M' ? 'Mr.' : 'Miss'}} {{$post->nominee->name}}</a>
						</div>
						Aspiring for the <a>{{$post->title}}</a>
						<div class="vote-btn-container">
							<div class="vote-btn hvr-rectangle-out hvr-ripple-out up" onclick="saveVote(event, {{$post->nominee->id}}, 1)">
								<i class="material-icons">thumb_up</i>
							</div>
							<div class="vote-btn hvr-rectangle-out hvr-ripple-out down" onclick="saveVote(event, {{$post->nominee->id}}, -1)">
								<i class="material-icons">thumb_down</i>
							</div>
						</div>
					</section>
				@endforeach
			</section>
			<section data-background="assets/img/8.jpg">Thank you for your time. Have a wonderful day</section>
		</div>
	</div>

	<script src="assets/revealjs/js/reveal.js"></script>
	<script src="assets/js/axios.min.js"></script>
	<script src="assets/js/script.js"></script>

</body>
</html>
