class BasicJsFunctions {
	
	// Ellenőrzi, hogy a PHP sessions-ban található felhasználó és használhatja-e a rendszert
	static belepve() {
		$.ajax({
			url: "./src/controller/baseController.php",
			async: false,
			success: function(result) {
				try {
					result = JSON.parse(result);
					if(!result.validUser) {
						window.location = './base-webapp/login.php';
					}
				} catch($e) {
					window.location = './base-webapp/login.php';
					console.log(result);
				}
				return true;
			}
		});
	}
}