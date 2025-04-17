
<!DOCTYPE HTML>
<html>

<head>
	<title>Xanh Taxi | Home Page</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/camera.min.js"></script>
	<script type="text/javascript">
		jQuery(function () {
			jQuery('#camera_wrap_1').camera({
				height: '500px',
			});
		});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1200);
			});
		});
	</script>
	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.wrapper {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}
		.content {
			flex: 1;
			display: flex;
			flex-direction: column;
			justify-content: flex-end;
		}
	</style>
<!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

</head>

<body>
	<div class="wrapper">

	<div class="header" id="top">
		<div class="wrap">
			<!---start-logo---->
			<div class="logo">
				<h3 style="color: yellow;">Xanh Taxi</h3>
			</div>
			<!---End-logo---->
			<!---start-top-nav---->
			<div class="top-nav">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="contact.php"> Contact</a></li>
					<li><a href="search.php" target="_blank">Check Stand Receipt</a></li>
					<li><a href="admin/index.php">Admin</a></li>
					
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"> </div>
			<!---End-top-nav---->
		</div>
	</div>
	<!---End-header----->
	<!--start-image-slider---->
	<div class="slider">
		<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
			<div data-src="images/slider3.jpg"> </div>
			<div data-src="images/slider2.jpg"> </div>
			<div data-src="images/slider1.jpg"> </div>
			<div data-src="images/slider2.jpg"> </div>
		</div>
		<div class="clear"> </div>
	</div>
	<!--End-image-slider---->
<!--Start-Customer-Reviews-->
<section style="background-color:#f9f9f9; padding: 60px 20px; text-align: center;">
<div style="background-color: #f9f9f9; padding: 60px 20px;">
	<div class="wrap">
		<h2 style="text-align: center; color: #2E8B57; font-size: 28px; margin-bottom: 40px;">Khách hàng nói gì về Xanh Taxi?</h2>
		
		<div class="swiper customerSwiper" style="max-width: 1000px; margin: 0 auto;">
			<div class="swiper-wrapper">

				<!-- Review 1 -->
				<div class="swiper-slide" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
					<div style="font-size: 40px; color: #2E8B57;">❝</div>
					<p style="font-style: italic;">Dịch vụ rất chuyên nghiệp, xe sạch và tài xế cực kỳ thân thiện. Mình sẽ tiếp tục sử dụng!</p>
					<p style="margin-top: 15px; font-weight: bold;">– Trần Minh, Hà Nội</p>
				</div>

				<!-- Review 2 -->
				<div class="swiper-slide" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
					<div style="font-size: 40px; color: #2E8B57;">❝</div>
					<p style="font-style: italic;">App đặt xe tiện lợi, gọi cái có ngay. Mình thích sự đúng giờ của Xanh Taxi.</p>
					<p style="margin-top: 15px; font-weight: bold;">– Nguyễn Hoa, TP.HCM</p>
				</div>

				<!-- Review 3 -->
				<div class="swiper-slide" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
					<div style="font-size: 40px; color: #2E8B57;">❝</div>
					<p style="font-style: italic;">Các xe đều chạy êm, không có mùi xăng dầu. Rất thân thiện với môi trường!</p>
					<p style="margin-top: 15px; font-weight: bold;">– Lê Khánh, Đà Nẵng</p>
				</div>

				<!-- Review 4 -->
				<div class="swiper-slide" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
					<div style="font-size: 40px; color: #2E8B57;">❝</div>
					<p style="font-style: italic;">Lần đầu đặt xe bằng web mà cảm thấy nhanh và mượt như thế. Hệ thống thật thông minh!</p>
					<p style="margin-top: 15px; font-weight: bold;">– Phạm Duy, Cần Thơ</p>
				</div>

				<!-- Review 5 -->
				<div class="swiper-slide" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
					<div style="font-size: 40px; color: #2E8B57;">❝</div>
					<p style="font-style: italic;">Gia đình mình rất hài lòng. Tài xế giúp đỡ hành lý rất nhiệt tình và cẩn thận.</p>
					<p style="margin-top: 15px; font-weight: bold;">– Vũ Ngọc, Hải Phòng</p>
				</div>

				<!-- Review 6 -->
				<div class="swiper-slide" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
					<div style="font-size: 40px; color: #2E8B57;">❝</div>
					<p style="font-style: italic;">Đi công tác xa cũng yên tâm vì Xanh Taxi có hệ thống hóa đơn rõ ràng và hỗ trợ tốt.</p>
					<p style="margin-top: 15px; font-weight: bold;">– Trịnh Quang, Bình Dương</p>
				</div>

				<!-- Review 7 -->
				<div class="swiper-slide" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
					<div style="font-size: 40px; color: #2E8B57;">❝</div>
					<p style="font-style: italic;">Mình rất hay di chuyển ban đêm, nhưng tài xế của Xanh Taxi luôn lịch sự và chạy rất an toàn.</p>
					<p style="margin-top: 15px; font-weight: bold;">– Hoàng Anh, Nha Trang</p>
				</div>

				<!-- Review 8 -->
				<div class="swiper-slide" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
					<div style="font-size: 40px; color: #2E8B57;">❝</div>
					<p style="font-style: italic;">Đặt xe cho bố mẹ lớn tuổi mà không lo gì cả. Tài xế chu đáo và hỗ trợ rất nhiệt tình.</p>
					<p style="margin-top: 15px; font-weight: bold;">– Mai Linh, Huế</p>
				</div>

			</div>
			<div class="swiper-pagination" style="margin-top: 20px;"></div>
		</div>
	</div>
</div>
</section>
<!--End-Customer-Reviews-->

<!--End-Customer-Reviews-->


<div class="about" style="padding: 60px 20px; background-color: #f5f5f5;">
	<div class="wrap">
		<h2 style="color: #2E8B57; font-size: 28px; margin-bottom: 20px;">Giới thiệu về Xanh Taxi</h2>
		<p style="font-size: 16px; line-height: 1.8; color: #333;">
			Trong một thành phố luôn chuyển động không ngừng, việc tìm kiếm một phương tiện di chuyển an toàn, nhanh chóng và thân thiện với môi trường trở nên quan trọng hơn bao giờ hết. Đó chính là lý do Xanh Taxi ra đời – mang theo sứ mệnh trở thành người bạn đồng hành đáng tin cậy trên mọi nẻo đường của bạn.
			<br><br>
			Xanh Taxi không chỉ là một dịch vụ vận tải thông thường, mà còn là biểu tượng của sự hiện đại, tiện nghi và bền vững. Chúng tôi tự hào sở hữu đội xe chất lượng cao, luôn được bảo trì định kỳ, đảm bảo sạch sẽ và vận hành êm ái. Đặc biệt, nhiều xe trong hệ thống của chúng tôi sử dụng công nghệ tiết kiệm nhiên liệu và thân thiện với môi trường, góp phần giảm thiểu khí thải và ô nhiễm.
			<br><br>
			Đội ngũ tài xế của Xanh Taxi được đào tạo chuyên nghiệp, luôn cư xử lịch sự, hỗ trợ tận tình và đặt sự an toàn của hành khách lên hàng đầu. Chúng tôi hiểu rằng, mỗi chuyến đi không chỉ là hành trình từ điểm A đến điểm B, mà còn là trải nghiệm – là cảm giác an tâm, thoải mái mà bạn xứng đáng nhận được.
			<br><br>
			Với hệ thống điều hành thông minh và tổng đài hoạt động 24/7, bạn có thể dễ dàng đặt xe mọi lúc mọi nơi. Ngoài ra, Xanh Taxi còn hỗ trợ quản lý điểm đỗ xe tự động, tra cứu hóa đơn, và nhiều tiện ích trực tuyến khác – giúp bạn tiết kiệm thời gian và công sức.
			<br><br>
			Chọn Xanh Taxi là chọn sự an tâm, là bước đi cùng xu hướng công nghệ và sự phát triển bền vững. Hãy để chúng tôi đồng hành cùng bạn trong từng hành trình – từ những chuyến đi ngắn trong thành phố, đến những chuyến công tác, hay hành trình dài bên gia đình và bạn bè.
			<br><br>
			Xanh Taxi – Vững tay lái, sáng tương lai!
		</p>
	</div>
</div>
	<!---start-contnet---->
	<div class="content">
		<div class="bottom-grids">
			<div class="wrap">
				<div class="copy-right">
					<p>Auto/Taxi Stand Management System | Design by <a href="https://huyqa-home.com">HuyQA-Home.com</a></p>
				</div>
				
			</div>
		</div>
	</div>
	<!---End-contnet---->
	</div>

	</div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".customerSwiper", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
  });
</script>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".customerSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    spaceBetween: 30,
    slidesPerView: 1, // default for mobile
    breakpoints: {
      768: {
        slidesPerView: 2, // tablet & desktop
      }
    }
  });
</script>

</html>