<!DOCTYPE html>
<html>
<head>
	<title>Halaman dengan Animasi Lottie</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-color: #ffc200;
			margin: 0;
			padding: 0;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
	<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_w5oe9omf.json" background="transparent" speed="1" style="width: 300px; height: 300px;" autoplay></lottie-player>
	
	<script>
		// Setelah animasi selesai, pindah ke halaman tujuan
		const animasiLottie = document.querySelector('lottie-player');
		animasiLottie.addEventListener('complete', () => {
			window.location.href = "skrining.php";
		});
	</script>
</body>
</html>
