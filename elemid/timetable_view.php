<? include $_SERVER["DOCUMENT_ROOT"]."/dawon/include/header.php" ?>

<!-- Container :: reservation -->
<div id="container" class="reservation">

	<!-- location -->
	<div class="location_wrap">
		<!-- location :: PC ver -->
		<div class="section">
			<ul class="sub_menu">
				<li><a href="">초중등 본관 선생님</a></li>
				<li><a href="">초중등 영어관 선생님</a></li>
				<li class="on"><a href="">강의 시간표</a></li>
				<li><a href="">설명회</a></li>
			</ul>
			<ul class="location">
				<li>HOME</li>
				<li>초중등관</li>
				<li>강의 시간표</li>
			</ul>
		</div>
		<!-- location :: PC ver -->

		<!-- location :: mobile ver -->
		<div class="sub_menu m">
			<ul>
				<li class="on"><a href="">전체선생님</a></li>
				<li><a href="">시간표보기</a></li>
				<li><a href="">설명회</a></li>
			</ul>
		</div>
		<div class="location_slide">
			<div><a href="">초중등 본관 선생님</a></div>
			<div><a href="">초중등 영어관 선생님</a></div>
			<div class="on"><a href="">강의 시간표</a></div>
			<div><a href="">설명회</a></div>
		</div>
		<!-- location :: mobile ver -->
	</div>
	<!-- location -->

	<!-- content -->
	<div class="gray_cont">
		<div class="section">
			<h2 class="title">강의 시간표</h2>

			<!-- reservation -->
			<h3 class="sub_title">
				예약조회 (신청)
				<span class="desc">예약할 수업명과 일자를 한 번 더 확인해주시기 바랍니다.</span>
			</h3>
			<ul class="reserve_table">
				<li class="user">
					<strong class="essential">이름</strong>
					<div>
						<input type="text" name="" value="홍길동">
					</div>
				</li><!-- //이름 -->
				<li class="tel">
					<strong class="essential">연락처</strong>
					<div>
						<select class="" name="">
							<option value="">010</option>
						</select>
						<input type="tel" name="" value="">
						<input type="tel" name="" value="">
					</div>
				</li><!-- //연락처 -->
				<li class="number">
					<strong class="essential">인증번호</strong>
					<div>
						<input type="text" name="" value="51432">
						<a href="" class="btn_type_04">인증요청</a>
					</div>
				</li><!-- //인증번호 -->
			</ul>
			<div class="btn_wrap">
				<a href="" class="btn_type_05">조회하기</a>
			</div>
			<!-- //reservation -->

		</div>
	</div>
	<!-- //content -->

</div>
<!-- //Container :: reservation -->

<? include $_SERVER["DOCUMENT_ROOT"]."/dawon/include/footer.php" ?>
