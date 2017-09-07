<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="https://unpkg.com/vue"></script>
</head>
<body>
	<div id="root">
		
	</div>
	<script>
	const apiURL = '/custom-fields';

		let app = new Vue({
			el:"#root",
			created:{
				this.getCustomFields()
			},
			methods:{
				getCustomFields:function (){
					var xhr = new XMLHttpRequest()
			      var self = this
			      xhr.open('GET', apiURL)
			      xhr.onload = function () {
			        console.log(xhr.responseText)
			      }
			      xhr.send()
				}
			}
		});
	</script>
</body>
</html>