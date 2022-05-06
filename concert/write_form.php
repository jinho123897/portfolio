<? 
	session_start(); 
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);
    //새글쓰기 =>  $table


	include "../lib/dbconn.php";

	if ($mode=="modify") //수정 글쓰기면
	{
		$sql = "select * from $table where num=$num";
		$result = mysql_query($sql, $connect);

		$row = mysql_fetch_array($result);       
	
		$item_subject     = $row[subject];
		$item_content     = $row[content];

		$item_file_0 = $row[file_name_0];
		$item_file_1 = $row[file_name_1];
		$item_file_2 = $row[file_name_2];

		$copied_file_0 = $row[file_copied_0];
		$copied_file_1 = $row[file_copied_1];
		$copied_file_2 = $row[file_copied_2];
	}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>뉴스</title>

	<link href="../common/css/common.css" rel="stylesheet">
	<link href="./css/write.css" rel="stylesheet">
	<script>
		function check_input()
		{
			if (!document.board_form.subject.value)
			{
				alert("제목을 입력하세요!");    
				document.board_form.subject.focus();
				return;
			}

			if (!document.board_form.content.value)
			{
				alert("내용을 입력하세요!");    
				document.board_form.content.focus();
				return;
			}
			document.board_form.submit();
		}
	</script>
</head>
<body>
	<? include "../common/sub_header.html" ?>	

	<div class="visual">
		<img src="../sub4/common/images/visual.jpg" alt="">
		<h3>고객참여</h3>
	</div>

	<div class="sub_menu">
		<ul>
			<li><a href="../greet/list.php">공지사항</a></li>
			<li class="current"><a href="./list.php">뉴스</a></li>
		</ul>
	</div>

	<article id="content">
		<div class="title_area">
			<div class="line_map">HOME &gt; 고객참여 &gt; <strong>뉴스</strong></div>
			<h2>뉴스</h2>
		</div>
		<div class="content_area">
	<?
		if($mode=="modify")
		{

	?>
			<form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data"> 
	<?
		}
		else
		{
	?>
			<form  name="board_form" method="post" action="insert.php?table=<?=$table?>" enctype="multipart/form-data"> 
	<?
		}
	?>
			<ul id="write_form">
				<li id="write_row1">

						<div class="col1">닉네임</div>
						<div class="col2"><?=$usernick?></div>
	<?
		if( $userid && ($mode != "modify") )
		{   //새글쓰기 에서만 HTML 쓰기가 보인다
	?>
						<div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기</div>
	<?
		}				
	?>						
				</li>
				<li id="write_row2"><div class="col1"> 제목   </div>
									<div class="col2"><input type="text" name="subject" value="<?=$item_subject?>" ></div>
				</li>
				<li id="write_row3"><div class="col1"> 내용   </div>
									<div class="col2"><textarea rows="15" cols="79" name="content"><?=$item_content?></textarea></div>
				</li>
				<li id="write_row4"><div class="col1"> 이미지파일1   </div>
									<div class="col2"><input type="file" name="upfile[]"></div>
				</li>
				
	<? 	if ($mode=="modify" && $item_file_0)
		{
	?>
				<div class="delete_ok"><?=$item_file_0?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="0"> 삭제</div>
				
	<?
		}
	?>
				
				<li id="write_row5"><div class="col1"> 이미지파일2  </div>
									<div class="col2"><input type="file" name="upfile[]"></div>
				</li>
	<? 	if ($mode=="modify" && $item_file_1)
		{
	?>
				<div class="delete_ok"><?=$item_file_1?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="1"> 삭제</div>
				
	<?
		}
	?>
				
				<li id="write_row6"><div class="col1"> 이미지파일3   </div>
									<div class="col2"><input type="file" name="upfile[]"></div>
				</li>
	<? 	if ($mode=="modify" && $item_file_2)
		{
	?>
				<div class="delete_ok"><?=$item_file_2?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="2"> 삭제</div>
				
	<?
		}
	?>
				
			</ul>

			<div id="write_button">
				<a href="#" onclick="check_input()">완료</a>
				<a href="list.php?table=<?=$table?>&page=<?=$page?>">목록</a>
			</div>
			
			</form>
		</div>
	</article>
	<? include "../common/sub_footer.html" ?>
</body>
</html>




<body>
<div id="wrap">

  <div id="header">
    <? include "../lib/top_login2.php"; ?>
  </div>  <!-- end of header -->

  <div id="menu">
	<? include "../lib/top_menu2.php"; ?>
  </div>  <!-- end of menu --> 

  <div id="content">
	<div id="col1">
		<div id="left_menu">
<?
			include "../lib/left_menu.php";
?>
		</div>
	</div> <!-- end of col1 -->

	<div id="col2">
        
		<div id="title">
			<img src="../img/title_concert.gif">
		</div>

		<div class="clear"></div>

		<div id="write_form_title">
			<img src="../img/write_form_title.gif">
		</div>

		<div class="clear"></div>


    
	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
