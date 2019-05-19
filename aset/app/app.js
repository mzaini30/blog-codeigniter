$('.truncate').each(function(){
	if ($(this).text().length > 300){
		text = $(this).text()
		text = text.substr(0, 300) + '...'
		$(this).text(text)
	}
})

$('.theia').theiaStickySidebar({
	additionalMarginTop: 70,
	additionalMarginBottom: 0
})