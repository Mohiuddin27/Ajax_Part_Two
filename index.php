
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
<div class="sign-up">
        <div class="card">
           
            <div class="card-body">
           
           
					<div class="form-group">
						<label for="">Name</label>
						<input id="name" name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Skill</label>
						<input id="skill" name="skill" class="form-control" type="text">
					</div>
					
                   <div class="form-group">
						<button id="button" class="btn btn-danger">Submit</button>
					</div>
				   <hr>
				   <div class="root">

	              </div>

            </div>
        </div>
		<br>
		
    </div>
	
  


	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
   <script>
	   $('#button').click(function(){
         let name=$('#name').val();
		 let skill=$('#skill').val();
		$.ajax({
          url: 'data.php',
		  method: 'POST',
		  data:{name:name, skill:skill},
		  success: function(data){
              $('.root').html(data);
		  }
		});
	   });
   </script>
    
</body>
</html>