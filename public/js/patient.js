$(document).ready(function(e){
	$("#dob").datepicker({
		dateFormat: "dd/mm/yy",
		changeMonth: true,
	    changeYear: true,
	    yearRange: "-100:+0",
	    onSelect: function(dateText, inst) {
	    	var date = new Date();
	    	var age = date.getFullYear()-inst.selectedYear;	    
	    	$('#age').val(age);
	    }
	});
});