function recent_date () {
	var recent = new Date();

	var date = recent.getDay() + "-" + recent.getMonth() + "-" + recent.getFullYear();

	console.log(date);
}