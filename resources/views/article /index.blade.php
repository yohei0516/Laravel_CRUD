<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<title>Laravelチュートリアル</title>
	</head>
	<body class="p-3">
		<h1>ブログ一覧</h1>

		<!-- 変数$articleを繰り返す -->
		{{-- {{}}はechoと同様 --}}
		@foreach ($articles as $article)
		<div class="card mb-2">
			<div class="card-body">
				<!-- 繰り返したデータを表示、$articleにデータが1つずつ取り出され、titleプロパティを参照するとDBから抽出したtitleフィールドの値を表示できる -->
				<h4 class="card-title">{{ $article->title }}</h4>
				<h6 class="card-subtitle mb-2 text-muted">{{ $article->update_at }}</h6>
				<p class="card-text">{{ $article->body }}</p>
			</div>
		</div>
		@endforeach

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>			