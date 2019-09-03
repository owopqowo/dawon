<? include $_SERVER["DOCUMENT_ROOT"]."/dawon/include/header.php" ?>

<!-- Container :: reservation -->
<div id="container" class="reservation">

	<!-- location -->
	<div class="location_wrap">
		<div class="section">
			<ul class="sub_menu">
				<li><a href="teacher.php">전체선생님</a></li>
				<li class="on"><a href="timetable.php">강의 시간표</a></li>
				<li><a href="briefing.php">설명회</a></li>
			</ul>
			<ul class="location">
				<li>HOME</li>
				<li>초중등관</li>
				<li>강의 시간표</li>
			</ul>
		</div>
	</div>
	<!-- location -->

	<!-- content -->
	<div class="gray_cont">
		<div class="section">
			<h2 class="title">강의 시간표</h2>

			<!-- tab menu -->
			<ul class="tab_menu w33">
				<li class="on"><a href="">예약하기</a></li>
				<li><a href="">영재학교</a></li>
				<li><a href="">합격자 프로그램</a></li>
			</ul>
			<!-- //tab menu -->

			<!-- reserve info -->
			<div class="white_box reserve_info">
				<div class="reserve_box">
					<div class="program">
						<div class="img_wrap">
							<span><img src="../images/test_person.jpg" alt=""></span>
						</div>
						<div class="info">
							<div class="info_box name">
								<span class="teacher_name">전재림 선생님</span>
								<span class="cate">내신</span>
								<span class="cate">수능</span>
								<span class="cate reserved">예약</span>
							</div>
							<h4>수능국어 개념 집중반 문학+비문학</h4>
							<span class="line"></span>
							<div class="info_box period">
								<span><strong>시간</strong>18:00 -19:30</span>
								<span><strong>개강일</strong>2018.10.30(화)</span>
							</div>
						</div>
					</div>
				</div>
				<ul class="list_type_02">
					<li>
						<strong>수능국어 개념 시작반</strong>
						학생별 맞춤 데일리 과제 제공, 배운 내용에 대한 확인테스트로 확실한 수능국어 완성
					</li>
				</ul>
			</div>
			<!-- //reserve info -->

			<!-- reservation -->
			<h3 class="sub_title">
				예약하기
				<span class="desc">예약할 수업명과 일자를 한 번 더 확인해주시기 바랍니다.</span>
			</h3>
			<ul class="reserve_table">
				<li class="user">
					<strong class="essential">이름</strong>
					<span>홍길동</span>
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
				<li class="school">
					<strong class="essential">학교</strong>
					<div>
						<input type="text" name="" value="서울대학교">
					</div>
				</li><!-- //학교 -->
				<li class="division">
					<strong class="essential">계열</strong>
					<div>
						<ul>
							<li>
								<input id="radio1" type="radio" name="radioName1" value="" checked>
								<label for="radio1">공통</label>
							</li>
							<li>
								<input id="radio2" type="radio" name="radioName1" value="">
								<label for="radio2">문과</label>
							</li>
							<li>
								<input id="radio3" type="radio" name="radioName1" value="">
								<label for="radio3">이과</label>
							</li>
							<li>
								<input id="radio4" type="radio" name="radioName1" value="">
								<label for="radio4">예체능</label>
							</li>
							<li>
								<input id="radio5" type="radio" name="radioName1" value="">
								<label for="radio5">기타</label>
							</li>
						</ul>
					</div>
				</li><!-- //계열 -->
				<li class="grade">
					<strong class="essential">학년</strong>
					<div>
						<ul>
							<li>
								<input id="radio6" type="radio" name="radioName2" value="" checked>
								<label for="radio6">고1</label>
							</li>
							<li>
								<input id="radio7" type="radio" name="radioName2" value="">
								<label for="radio7">고2</label>
							</li>
							<li>
								<input id="radio8" type="radio" name="radioName2" value="">
								<label for="radio8">고3</label>
							</li>
							<li>
								<input id="radio9" type="radio" name="radioName2" value="">
								<label for="radio9">공통</label>
							</li>
							<li>
								<input id="radio10" type="radio" name="radioName2" value="">
								<label for="radio10">N수</label>
							</li>
							<li>
								<input id="radio11" type="radio" name="radioName2" value="">
								<label for="radio11">기타</label>
							</li>
							<li>
								<input id="radio12" type="radio" name="radioName2" value="">
								<label for="radio12">예비고1</label>
							</li>
							<li>
								<input id="radio13" type="radio" name="radioName2" value="">
								<label for="radio13">예비고2</label>
							</li>
							<li>
								<input id="radio14" type="radio" name="radioName2" value="">
								<label for="radio14">예비고3</label>
							</li>
						</ul>
					</div>
				</li><!-- //학년 -->
				<li class="agree">
					<strong><label for="checkbox1" class="essential">개인정보 수집 이용동의</label></strong>
					<div class="checkbox">
						<input id="checkbox1" type="checkbox"><i class="icon_checkbox"></i>
					</div>
					<div class="scroll">
						<strong>1. 개인정보 수집 및 이용 목적</strong>
						<p>회원의 개인정보는 서비스 이용계약의 성립(본인 식별 및 본인 의사 확인 등), 서비스의 이행(상품배송 및 대금결제), 기타 새로운 서비스 및 신상품이나 이벤트에 대한 정보 안내(제공)의 목적으로 수집되어 이용됩니다. <br />또한,  회원에게 편리하고 다양한 서비스를 제공하기 위하여 회원으로부터 수집한 개인정보를 이용하여 회사가 제공하는 각종 서비스를  전자우편, TM(텔레마케팅), DM(우편), SMS(핸드폰 문자메시지) 등의 방법으로 광고 또는 마케팅 활동을 수행할 수 있습니다. <br />이 경우 회원은 언제든지 전자우편 등을 통해 원치 않는 서비스를 거절할 수 있습니다.</p>
					</div>
				</li><!-- //개인정보 수집 이용동의 -->
				<li class="agree">
					<strong><label for="checkbox2">시간표 예약확정 절차 안내 SMS 수신 동의</label></strong>
					<div class="checkbox">
						<input id="checkbox2" type="checkbox" checked><i class="icon_checkbox"></i>
					</div>
				</li><!-- //SMS 수신 동의 -->
			</ul>
			<div class="btn_wrap">
				<a href="timetable_resulte_lesson.php" class="btn_type_05">예약하기</a>
				<a href="" class="btn_type_06">취소</a>
			</div>
			<!-- //reservation -->

		</div>
	</div>
	<!-- //content -->

</div>
<!-- //Container :: reservation -->

<? include $_SERVER["DOCUMENT_ROOT"]."/dawon/include/footer.php" ?>
