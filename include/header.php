<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>다원교육</title>
<link type="text/css" rel="stylesheet" href="/dawon/css/font.css">
<link type="text/css" rel="stylesheet" href="/dawon/css/reset.css">
<link type="text/css" rel="stylesheet" href="/dawon/css/slick.css">
<link type="text/css" rel="stylesheet" href="/dawon/css/main.css">
<link type="text/css" rel="stylesheet" href="/dawon/css/sub.css">
<link type="text/css" rel="stylesheet" href="/dawon/css/mobile.css">
<script type="text/javascript" src="/dawon/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/dawon/js/slick.min.js"></script>
<script type="text/javascript" src="/dawon/js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/dawon/js/common.js"></script>
</head>

<?php if(defined('MAIN')) { ?>
<!-- 메인은 body에 main 클래스 필요! -->
<body class="main">
<?php } else if (defined('SUB_MAIN')) { ?>
<!-- 관별메인은 body에 sub_main 클래스 필요! -->
<body class="sub_main">
<?php } else if (defined('INTRO')) { ?>
<!-- 다원교육 소개 페이지는 body에 intro 클래스 필요! -->
<body class="intro">
<?php } else { ?>
<body>
<?php } ?>

<!-- Header -->
<div id="header">
	<!-- header top -->
	<div class="header_top">
		<div class="section">
			<ul class="top_menu">
				<li><a href="/dawon/intro/">다원교육소개</a></li>
				<li><a href="/dawon/elemid/">대치초.중등관</a></li>
				<li><a href="/dawon/elemid/">대치고등관</a></li>
				<li><a href="/dawon/elemid/">영재관</a></li>
				<li><a href="/dawon/elemid/">특목관</a></li>
				<li><a href="/dawon/elemid/">다독원</a></li>
				<li><a href="/dawon/elemid/">입시연구소</a></li>
				<li><a href="/dawon/elemid/">목동초중등관</a></li>
				<li><a href="/dawon/elemid/">목동고등관</a></li>
			</ul>
			<ul class="header_sns">
				<li><a href=""><img src="/dawon/images/ico_kakao_plus.png" alt="카카오톡 플러스 친구"></a></li>
				<li><a href=""><img src="/dawon/images/ico_facebook.png" alt="페이스북"></a></li>
				<li><a href=""><img src="/dawon/images/ico_instagram.png" alt="인스타그램"></a></li>
			</ul>
		</div>
	</div>
	<!-- //header top -->

	<!-- inner header -->
	<div class="inner_header">
		<div class="section">
			<h1><a href="/dawon/"><img src="/dawon/images/logo.png" alt="다원교육" /></a></h1>
			<div class="one_depth">
				<span>대치 초·중등관</span>
				<select class="" name="">
					<option value="/dawon/intro/">다원교육소개</option>
					<option value="/dawon/elemid/">대치초·중등관</option>
					<option value="#">대치고등관</option>
					<option value="#">영재관</option>
					<option value="#">특목관</option>
					<option value="#">다독원</option>
					<option value="#">입시연구소</option>
					<option value="#">목동초중등관</option>
					<option value="#">목동고등관</option>
				</select>
			</div>
			<div class="btn_wrap">
				<a href="">로그인</a>
				<a href="">회원가입</a>
			</div>
			<a href="" class="btn_menu">메뉴버튼</a>
		</div>
		<!-- gnb -->
		<div class="gnb">
			<!-- logout -->
			<div class="logout">
				<div class="btn_wrap">
					<a href="">로그인</a>
					<a href="">회원가입</a>
				</div>
			</div>
			<!-- //logout -->
			<!-- login -->
			<!-- <div class="login">
				<a href="">로그아웃</a>
				<p><strong>홍길동</strong> 님 반갑습니다.</p>
			</div> -->
			<!-- //login -->
			<div class="inner_gnb">
				<ul class="common_menu">
					<li>
						<a href="/dawon/intro/">다원교육소개</a>
						<ul>
							<li><a href="/dawon/intro/">다원교육 소개</a></li>
							<li><a href="/dawon/intro/location.php">다원교육 위치안내</a></li>
							<li><a href="/dawon/intro/system.php">시스템 소개</a></li>
							<li><a href="/dawon/intro/staff.php">스태프 소개</a></li>
						</ul>
					</li>
					<li>
						<a href="/dawon/elemid/">대치초·중등관</a>
						<ul>
							<li><a href="/dawon/elemid/">소개</a></li>
							<li><a href="/dawon/elemid/teacher.php">선생님 소개</a></li>
							<li><a href="/dawon/elemid/timetable.php">강의 시간표</a></li>
							<li><a href="/dawon/elemid/briefing.php">설명회</a></li>
							<li><a href="/dawon/elemid/notice.php">공지사항</a></li>
							<li><a href="/dawon/elemid/news.php">새소식</a></li>
							<li><a href="/dawon/elemid/faq.php">자주하는 질문</a></li>
						</ul>
					</li>
					<li>
						<a href="">대치고등관</a>
						<ul>
							<li><a href="">소개</a></li>
							<li><a href="">선생님 소개</a></li>
							<li><a href="">강의 시간표</a></li>
							<li><a href="">설명회</a></li>
							<li><a href="">공지사항</a></li>
							<li><a href="">새소식</a></li>
							<li><a href="">자주하는 질문</a></li>
						</ul>
					</li>
					<li>
						<a href="">중등영재/특목관</a>
						<ul>
							<li><a href="">소개</a></li>
							<li><a href="">선생님 소개</a></li>
							<li><a href="">프로그램</a></li>
							<li><a href="">설명회</a></li>
							<li><a href="">공지사항</a></li>
							<li><a href="">새소식</a></li>
							<li><a href="">자주하는 질문</a></li>
						</ul>
					</li>
					<li>
						<a href="">고등 특목관</a>
						<ul>
							<li><a href="">소개</a></li>
							<li><a href="">선생님 소개</a></li>
							<li><a href="">프로그램</a></li>
							<li><a href="">에듀바이블</a></li>
							<li><a href="">설명회</a></li>
							<li><a href="">공지사항</a></li>
							<li><a href="">새소식</a></li>
							<li><a href="">자주하는 질문</a></li>
						</ul>
					</li>
					<li>
						<a href="">다독원</a>
						<ul>
							<li><a href="">소개</a></li>
							<li><a href="">스태프 & 선생님 소개</a></li>
							<li><a href="">공지사항</a></li>
							<li><a href="">클리닉수업</a></li>
							<li><a href="">입시정보</a></li>
							<li><a href="">공지사항</a></li>
							<li><a href="">새소식</a></li>
							<li><a href="">자주하는 질문</a></li>
						</ul>
					</li>
					<li>
						<a href="">입시연구소</a>
						<ul>
							<li><a href="">소개</a></li>
							<li><a href="">선생님 소개</a></li>
							<li><a href="">강의 시간표</a></li>
							<li><a href="">입시정보</a></li>
							<li><a href="">공지사항</a></li>
							<li><a href="">새소식</a></li>
							<li><a href="">자주하는 질문</a></li>
						</ul>
					</li>
					<li>
						<a href="">목동초중등관</a>
						<ul>
							<li><a href="">소개</a></li>
							<li><a href="">선생님 소개</a></li>
							<li><a href="">강의 시간표</a></li>
							<li><a href="">설명회</a></li>
							<li><a href="">공지사항</a></li>
							<li><a href="">새소식</a></li>
							<li><a href="">자주하는 질문</a></li>
						</ul>
					</li>
					<li>
						<a href="">목동고등관</a>
						<ul>
							<li><a href="">소개</a></li>
							<li><a href="">선생님 소개</a></li>
							<li><a href="">강의 시간표</a></li>
							<li><a href="">설명회</a></li>
							<li><a href="">공지사항</a></li>
							<li><a href="">새소식</a></li>
							<li><a href="">자주하는 질문</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- //gnb -->
	</div>
	<!-- //inner header -->
</div>
<div class="mask"></div>
<!-- //Header -->
