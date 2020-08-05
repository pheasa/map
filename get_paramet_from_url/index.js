window.onload = function() {
			try {
				var url_string = (window.location.href).toLowerCase();
				var url = new URL(url_string);
                display = url.searchParams.get("display");
			} catch (err) {
				console.log("Issues with Parsing URL Parameter's - " + err);
			}
}