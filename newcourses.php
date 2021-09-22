<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>New Coureses</title>
	<link rel="stylesheet" href="assets/css/courses.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script src="assets/scripts/vote.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<?php
    include "./includes/head.php";
?> 
<body>
	<?php
        include "./includes/header.php";
    ?>
	<main>
	<h2 class="title_newcourse">
		Các khóa học mới
	</h2>
	<!-- Thông tin các khóa học -->
	<div class="list_courses">
		<div class="_1newcourse" id="Language">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover blueback">
				<h4>
					Toeic: Rèn luyện kĩ năng Viết (Phần 2)
				</h4>
				<p>
					Nâng cao kĩ năng với các câu hỏi từ câu 6 đến câu 8 trong format đề với hơn nhiều dạng, bài tập mới được cập nhật mỗi ngày, học viên có thể ngưng khóa học bất cứ lúc nào.
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setWriting()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Toeic: Rèn luyện kĩ năng Viết (Phần 2)','235.000đ', 'tháng')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Principles of Written English, Part 2.jpg" alt="">
				</div>
				<div class="namecourse blueback">	
					<h4>
						Toeic: Rèn luyện kĩ năng Viết (Phần 2)
					</h4>
				</div>
				<div class="overview">
					<p class="type blue">Writing Skill</p>
					<p class="cost">235.000đ <label class="period">/ tháng</label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Marketing">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover greenback">
				<h4>
					Khóa học Toeic Full 4 kĩ năng (EL1205)
				</h4>
				<p>
					Khóa học kéo dài 6 tháng. 4 tháng đầu học viên sẽ được rèn luyện 2 kĩ năng Reading và Listening, 2 tháng còn lại 
					sẽ học 2 kĩ năng Speaking và Writing. Chuẩn đầu ra sẽ được đảm bảo như sau: <br>
					Reading + Listening: 550+ <br>
					Speaking + Writing: 200+ <br>
					Thời gian học: 19h - 21h thứ 3,5,7 mỗi tuần. <br>
					Thời hạn đăng kí: Đến hết 25/12/2021.
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setFull()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Khóa học Toeic Full 4 kĩ năng (EL1205)','5.400.000đ', 'none')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Entrepreneurship 101 Who is your customer.jpg" alt="">
				</div>
				<div class="namecourse greenback">	
					<h4>
						Khóa học Toeic Full 4 kĩ năng (EL1205)
					</h4>
				</div>
				<div class="overview">
					<p class="type green">Full Skill</p>
					<p class="cost">5.400.000đ <label class="period"></label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Social">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover yellowback">
				<h4>
					Khóa học Toeic Full 4 kĩ năng (EL1206)
				</h4>
				<p>
					Khóa học kéo dài 6 tháng. 4 tháng đầu học viên sẽ được rèn luyện 2 kĩ năng Reading và Listening, 2 tháng còn lại 
					sẽ học 2 kĩ năng Speaking và Writing. Chuẩn đầu ra sẽ được đảm bảo như sau: <br>
					Reading + Listening: 550+ <br>
					Speaking + Writing: 200+ <br>
					Thời gian học: 19h - 21h thứ 2,4,6 mỗi tuần. <br>
					Thời hạn đăng kí: Đến hết 25/12/2021.
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setFull()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Khóa học Toeic Full 4 kĩ năng (EL1206)','5.400.000đ', 'none')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Evaluating Social Programs.jpg" alt="">
				</div>
				<div class="namecourse yellowback">	
					<h4>
						Khóa học Toeic Full 4 kĩ năng (EL1206)
					</h4>
				</div>
				<div class="overview">
					<p class="type yellow">Full Skill</p>
					<p class="cost">5.400.000đ<label class="period"></label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Language">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover greenback">
				<h4>
					Toeic: Rèn luyện kĩ năng Viết (Phần 1)
				</h4>
				<p>
					Rèn luyện khả năng làm các câu hỏi từ câu 1 đến câu 5 với hơn 200 dạng đề khác nhau, học viên có thể ngưng khóa học bất cứ lúc nào.
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setWriting()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Toeic: Rèn luyện kĩ năng Viết (Phần 1)','235.000đ', 'tháng')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Principles of Written English, Part 1.jpg" alt="">
				</div>
				<div class="namecourse greenback">	
					<h4>
						Toeic: Rèn luyện kĩ năng Viết (Phần 1)
					</h4>
				</div>
				<div class="overview">
					<p class="type green">Writing Skill</p>
					<p class="cost">235.000đ <label class="period">/ tháng</label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Medicine">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover yellowback">
				<h4>
					Toeic: Khóa học Reading cơ bản
				</h4>
				<p>
					Nội dung xoay quanh 2 phần Part 5 và Part 6 của đề thi Reading thực tế với độ khó từ dễ tới mức trung bình. Thích hợp cho 
					những bạn có kiến thức nền chưa vững. Bạn sẽ có khả năng quét "key-word" nhanh hơn, rút ngắn thời gian để tập trung cho phần khó hơn. Với số lượng câu hỏi được các trợ giảng cập nhật đều đặn mỗi tuần và các bạn có thể ngưng khóa học 
					bất cứ khi nào cảm thấy đã đủ kiến thức.
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setReading()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Toeic: Khóa học Reading cơ bản','300.000đ', 'tháng')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Introduction to Biomedical Imaging.jpg" alt="">
				</div>
				<div class="namecourse yellowback">	
					<h4>
						Toeic: Khóa học Reading cơ bản
					</h4>
				</div>
				<div class="overview">
					<p class="type yellow">Reading Skill</p>
					<p class="cost">300.000đ <label class="period"> / tháng</label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Computer">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover blueback">
				<h4>
					Toeic: Khóa học Reading nâng cao
				</h4>
				<p>
					Nội dung xoay quanh Part 7 là phần khó nhất của đề thi Reading. Thích hợp cho 
					những bạn đã có kiến thức nền. Khóa học sẽ tập trung vào các kĩ năng như lọc đáp án nhiễu, kĩ năng tìm kiếm thông tin, tránh phải đọc hết đoạn văn. Với số lượng câu hỏi được các trợ giảng cập nhật đều đặn mỗi tuần và các bạn có thể ngưng khóa học 
					bất cứ khi nào cảm thấy đã đủ kiến thức.
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setReading()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Toeic: Khóa học Reading nâng cao','300.000đ', 'tháng')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Introduction to Computer Science.jpg" alt="">
				</div>
				<div class="namecourse blueback">	
					<h4>
						Toeic: Khóa học Reading nâng cao
					</h4>
				</div>
				<div class="overview">
					<p class="type blue">Reading Skill</p>
					<p class="cost">300.000đ <label class="period">/ tháng</label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
	</div>
	<!-- Thông tin các khóa học -->
	<a href="allcourses.php" title="" class="view_all"> <i class="fas fa-graduation-cap"></i> XEM TẤT CẢ KHÓA HỌC</a>
	</main>
	 <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>