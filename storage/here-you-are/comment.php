<html>
	<head>
		<title>心得意見箱</title>
		<link href='https://fonts.googleapis.com/css?family=Rammetto One' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Aguafina Script' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
		<style>
		body{background-color:white;color:#4A3000;line-height:38px;font-family:"Times New Roman", Times, serif;font-size: 20px;font-stretch:expanded;}
		#top {position: sticky;top: 0px;overflow: auto;background-color:#ECC050;}
		#top a {float:left;text-align:center;padding: 14px 16px;font-family:'Allan';font-size:24px;color:white;text-decoration:none;}
		#top a:hover {background-color:Khaki ;color: white;text-decoration:none;}
			a.now{background-color:#D1A432;color:white;text-decoration:none;}
		h1{font-family:"Aguafina Script";font-size:56px;letter-spacing:3px;text-align:center;color:#885800;}
		.home{font-size:88px;font-family:'Allan';text-align:center;text-shadow: 2px 2px 8px white;}
		h2{font-family:"Aguafina Script";font-size:48px;letter-spacing:3px;text-align:center;text-shadow: 2px 2px 8px magenta;}
		strong{font-family: 'Rammetto One';font-size: 28px;font-style:oblique;}
		a:link {color:#7C5205;}
		a:visited {color:#5F3D00;}
		a:hover {color:#916005;}
		a:active {color:white;}
		.margin{margin-left:105px;}
		.right{float:right;width: 100%;margin-right:100px;}
		p#bottom{text-align:right;margin-right:80px;}
		div.text{width: 80%; border:1px solid transparent;margin:11%;font-size:120%;}
		</style>
	</head>
<body>
<br>
		<h1>Here You Are</h1> 
<br>
<div id=top>
			<a href='./reminder.html'>*</a>
      <a href='./01.html'>春</a>
			<a href='./02.html'>夏</a>
			<a href='./03.html'>秋</a>
			<a href='./04.html'>冬</a>
      <a href='./creator.html'>Intro</a>
      <a class=now href='./comment.php'>Comment</a>
			</div>
<br><br>
		<h1>Comment Box</h1>
<div class=text>
<form action='./feedback.php' method='post'>
<p>這邊是匿名的心得意見箱，如果對這次作品（含插畫、排版、短文、網頁設計等）有想說的話歡迎留言給我們～</p>
<textarea
	name='comments'
	rows='50'
	column='20'
	required='required'></textarea>
<button type="submit">送出</button>
</form>
</div>

</body>
