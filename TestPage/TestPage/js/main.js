$(document).ready(function(){
	$(".linkss").click(function (e) {
	$(".linkss").removeClass("active");
	$(this).addClass("active");
	var ime=$(this).data("name");
	$(".zasakriti").show();
	if(ime!=="SVE")
		$(".zasakriti[data-depr!="+ime+"]").hide();
	});

	var odj=$(".odjeel").data("odj");
	$("input[name=part][value="+odj+"]").attr("checked","checked");

	var odj1=$(".selectorzapol").data("kojijepol");
	$("input[name=pol][value="+odj1+"]").attr("checked","checked");

	var odj2=$(".brak").data("kojijebrak");
	$("input[name=bracniStatus][value="+odj2+"]").attr("checked","checked");

	var odj3=$(".trajanje").data("kojijetrajanje");
	$("input[name=trajanjeRadnogVremena][value="+odj3+"]").attr("checked","checked");

	var odj4=$(".ugovor").data("kojijeugovor");
	$("input[name=ugovorORadu][value="+odj4+"]").attr("checked","checked");

	$(".info-item .btn").click(function(){
  	$(".container").toggleClass("log-in");
	});
	//$(".container-form .btn").click(function(){
  	//$(".container").addClass("active");
  	
//});
});