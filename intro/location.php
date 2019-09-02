<?php define('INTRO', true) ?>
<? include $_SERVER["DOCUMENT_ROOT"]."/dawon/include/header.php" ?>

<!-- Container :: place -->
<div id="container" class="place">
	<!-- location -->
	<div class="location_wrap">
		<!-- location :: PC ver -->
		<div class="section">
			<ul class="sub_menu">
				<li><a href="index.php">다원교육 소개</a></li>
				<li class="on"><a href="location.php">위치 안내</a></li>
				<li><a href="system.php">시스템 소개</a></li>
				<li><a href="staff.php">스태프 소개</a></li>
			</ul>
			<ul class="location">
				<li>HOME</li>
				<li>다원교육 소개</li>
				<li>위치 안내</li>
			</ul>
		</div>
		<!-- location :: PC ver -->

		<!-- location :: mobile ver -->
		<div class="location_slide">
			<div><a href="index.php">다원교육 소개</a></div>
			<div class="on"><a href="location.php">위치 안내</a></div>
			<div><a href="system.php">시스템 소개</a></div>
			<div><a href="staff.php">스태프 소개</a></div>
		</div>
		<!-- location :: mobile ver -->
	</div>
	<!-- location -->

	<!-- content -->
	<div class="cont">
		<div class="section">
			<h2 class="title">위치 안내</h2>

			<!-- tab menu -->
			<ul class="tab_menu w33">
				<li class="on"><a href="">초 중등관</a></li>
				<li><a href="">고등관</a></li>
				<li><a href="">영재관</a></li>
				<li><a href="">다독원</a></li>
				<li><a href="">입시연구소</a></li>
				<li><a href="">목동캠퍼스</a></li>
			</ul>
			<!-- //tab menu -->

			<!-- map box -->
			<div class="map_box">
				<h3>초.중등 본관</h3>
				<div class="map"><img src="/dawon/images/test_map.jpg" alt="지도" width="100%" height="100%" /></div>
				<p class="address"><span>주 소 : </span>서울특별시 강남구 도곡로 83길 5, (대치동, 아카데미하우스) 1층, 2층, 6층</p>
				<p>전화번호 : 02-562-3399</p>
			</div>

			<div class="map_box">
				<h3>초.중등 1관</h3>
				<div class="map"><img src="/dawon/images/test_map.jpg" alt="지도" width="100%" height="100%" /></div>
				<p class="address"><span>주 소 : </span>서울특별시 강남구 도곡로 511, (대치동, 대진빌딩) 6층</p>
				<p>전화번호 : 02-562-3399</p>
			</div>
			<!-- //map box -->
		</div>
	</div>
	<!-- //content -->

</div>
<!-- //Container :: place -->

<? include $_SERVER["DOCUMENT_ROOT"]."/dawon/include/footer.php" ?>
