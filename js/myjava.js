

function reportePDF(){
	var fecha_de = $('#fecha_de').val();
	var fecha_a = $('#fecha_a').val();
	window.open('../repo/perf.php?fecha_de='+fecha_de+'&fecha_a='+fecha_a);
}

