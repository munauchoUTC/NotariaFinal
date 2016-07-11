var actual=1;

$(document).ready(function main(
		){
	var intervalo = setInterval("runSlider",3000);	
}


function runSlider(){
	if (actual==$("#containerSlider img").size()) {
		actual=0;
	}

	$("#containerSlider").animate({
		marginLeft:(-1*actual*$("#containerSlider img").eq(0).width())
	},700);
	actual++;
}
);