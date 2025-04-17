<?php
session_start();
error_reporting(0);
include('admin/includes/dbconnection.php');

$success = "";
$error = "";

// Nếu form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$subject = mysqli_real_escape_string($con, $_POST['subject']);
	$message = mysqli_real_escape_string($con, $_POST['message']);

	$sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
	if (mysqli_query($con, $sql)) {
		$success = "Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất có thể.";
		header("refresh:4;url=index.php"); // Tự động quay về sau 4 giây
	} else {
		$error = "Đã xảy ra lỗi. Vui lòng thử lại.";
	}
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Liên hệ | Xanh Taxi</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<style>
		body {
			font-family: 'Open Sans', sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 800px;
			margin: 50px auto;
			background: #fff;
			padding: 40px;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
			border-radius: 10px;
		}
		h2 {
			color: #2E8B57;
			margin-bottom: 20px;
		}
		form label {
			display: block;
			margin: 15px 0 5px;
		}
		form input, form textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 14px;
		}
		form textarea {
			resize: vertical;
			height: 120px;
		}
		form button {
			margin-top: 20px;
			background-color: #2E8B57;
			color: white;
			border: none;
			padding: 12px 25px;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
		}
		.contact-info {
			margin-top: 40px;
			color: #333;
		}
		.message-box {
			margin-top: 20px;
			padding: 15px;
			border-radius: 5px;
			font-weight: bold;
		}
		.success {
			background-color: #d4edda;
			color: #155724;
		}
		.error {
			background-color: #f8d7da;
			color: #721c24;
		}
	</style>
</head>

<body>
	<div class="container">
		<h2>Liên hệ với Xanh Taxi</h2>
		<p>Chúng tôi luôn sẵn sàng lắng nghe phản hồi và hỗ trợ bạn. Hãy điền vào mẫu dưới đây, hoặc liên hệ trực tiếp với chúng tôi qua thông tin bên dưới.</p>

		<?php if ($success): ?>
			<div class="message-box success"><?php echo $success; ?></div>
			<p><a href="index.php" style="color:#2E8B57;text-decoration:underline;">← Quay về Trang chủ</a></p>
		<?php elseif ($error): ?>
			<div class="message-box error"><?php echo $error; ?></div>
		<?php endif; ?>

		<form method="post" action="">
			<label for="name">Họ và Tên:</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="subject">Chủ đề:</label>
			<input type="text" id="subject" name="subject" required>

			<label for="message">Nội dung:</label>
			<textarea id="message" name="message" required></textarea>

			<button type="submit">Gửi liên hệ</button>
		</form>

		<div class="contact-info">
			<h3>Thông tin liên hệ</h3>
			<p><strong>Địa chỉ:</strong> 123 Đường Xanh, Quận Bình Thạnh, TP. Hồ Chí Minh</p>
			<p><strong>Hotline:</strong> 0909 123 456</p>
			<p><strong>Email:</strong> lienhe@xanhtaxi.vn</p>
			<p><strong>Website:</strong> <a href="https://xanhtaxi.vn">https://xanhtaxi.vn</a></p>
		</div>
	</div>
</body>

</html>
