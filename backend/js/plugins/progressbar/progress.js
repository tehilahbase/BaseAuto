/**
* Creator: I. Kennedy Yinusa
* Email: iyinusa@yahoo.co.uk
* Website: http://iyinusa.kenafftech.com
* Module/App: Js Form
*/
$(function() {
	var elem = $("#pBar");
	var elem_width = elem.attr("barWidth");
	var width = 1;
	var id = setInterval(frame, 10);
	function frame() {
		if (width >= elem_width) {
			clearInterval(id);
		} else {
			width++; 
			elem.style.width = width + '%'; 
		}
	}
});