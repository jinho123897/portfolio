<?
	session_start();
    @extract($_GET); 
    @extract($_POST); 
    @extract($_SESSION);  
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>로그인</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="stylesheet" href="../common/css/common.css">
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<div class="wrap">
		<header>
			<h1><a href="../index.html">롯데중앙연구소</a></h1>
		</header>

		<article id="content">
			<form  name="member_form" method="post" action="login.php"> 
				<ul>
					<li>
						<label for="id" class="hidden">아이디</label>
						<i class="fas fa-user" aria-hidden="true"></i>
						<input type="text" name="id" id="id" class="login_input" placeholder="아이디를 입력하세요">
					</li>
					<li>
						<label for="pass" class="hidden">비밀번호</label>
						<i class="fas fa-lock" aria-hidden="true"></i>
						<input type="password" name="pass" id="pass" class="login_input" placeholder="비밀번호를 입력하세요">
					</li>
				</ul>						
				<button type="submit">
					<span>로그인</span>
				</button>
			</form>
			<ul>
				<li><a href="./id_find.php">아이디찾기</a></li>
				<li><a href="./pw_find.php">비밀번호 찾기</a></li>
			</ul>
			<div>
				<span>아직 회원이 아니신가요&#63;</span>
				<a href="../member/member_check.html">회원가입</a>
			</div>
		</article>
	</div>
</body>
</html>

