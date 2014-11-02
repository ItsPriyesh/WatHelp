$(document).ready(function() {
	var list = document.getElementById("course_list");
	$("#add_course").click(function() {
		var course_code = document.getElementById('course_code').value;
		document.getElementById("course_code").value = "";

		// error_checking for 'course_code' here:

		var entry = document.createElement('li');
		entry.appendChild(document.createTextNode(course_code));
		list.appendChild(entry);
	});
/*
	for (var x = 1; x <= 7; x++) {
		document.getElementById("from_hour" + x).disabled = true;
		document.getElementById("from_min" + x).disabled = true;
		document.getElementById("to_hour" + x).disabled = true;
		document.getElementById("to_min" + x).disabled = true;
	}*/
});