<? 
	session_start(); 
     @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);
   //세션변수 4
    //num=7&page=1

	include "../lib/dbconn.php";

	$sql = "select * from greet where num=$num";
	$result = mysql_query($sql, $connect);

	$row = mysql_fetch_array($result);       	
	$item_subject     = $row[subject];
	$item_content     = $row[content];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>공지사항</title>

	<link href="../common/css/common.css" rel="stylesheet">
	<link href="./css/write.css" rel="stylesheet">
</head>
<body>
<? include "../common/sub_header.html" ?>	
	<div class="visual">
		<img src="../sub4/common/images/visual.jpg" alt="">
		<h3>고객참여</h3>
	</div>

	<div class="sub_menu">
		<ul>
			<li class="current"><a href="./list.php">공지사항</a></li>
			<li><a href="../concert/list.php">뉴스</a></li>
		</ul>
	</div>
	<article id="content">
		<div class="title_area">
			<div class="line_map">HOME &gt; 고객참여 &gt; <strong>공지사항</strong></div>
			<h2>공지사항</h2>
		</div>
		<div class="content_area">
			<form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>"> 
				<ul id="write_form">
					<li id="write_row1">
						<div class="col1">닉네임</div>
						<div class="col2"><?=$usernick?></div>
					</li>
					<li id="write_row2">
						<div class="col1">제목</div>
						<div class="col2"><input type="text" name="subject" value="<?=$item_subject?>" ></div>
					</li>
					<li id="write_row3">
						<div class="col1">내용</div>
						<div class="col2"><textarea rows="15" cols="79" name="content"><?=$item_content?></textarea></div>
					</li>
				</ul>

				<div id="write_button">
					<label for="w_submit" class="hidden">완료버튼</label>
					<input type="submit" value="완료">
					<a href="list.php?page=<?=$page?>">목록</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>


