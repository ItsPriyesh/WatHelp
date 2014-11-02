$(document).ready(function() {
	var list = document.getElementById("course_list");
	$("#add_course").click(function() {
		var course_code = document.getElementById('course_code').value;

		// error_checking for 'course_code' here:

		

		var entry = document.createElement('li');
		entry.appendChild(document.createTextNode(course_code));
		list.appendChild(entry);
	});
});