const thumbnails = document.querySelectorAll('.thumb');
const mainImage = document.getElementById('main-image');
thumbnails.forEach(thumbnail => {
	thumbnail.addEventListener('click', function() {
		mainImage.src = this.src;
	});
});