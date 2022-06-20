<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/pages-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 08:17:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>USER Data</title>

	<link rel="canonical" href="pages-sign-up.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	
</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">


	<div class="main d-flex justify-content-center w-200">
		<main class="content d-flex p-0">
			<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">
            <?php if($error = $this->session->flashdata('msg')){ ?>
       <p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
  <?php } ?>            
							<div class="text-center mt-4">
                            <h2>USER</h2>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-6">
										
										<form class=" g-3 needs-validation"action="school_data" method="post"enctype="multipart/form-data" style="margin-left:20px; margin-top:10px; width: 400px;"  novalidate >
  
  <div class="col-md-6">
    <label for="validationname" class="form-label"> User Name</label>
    <div class="input-group has-validation">
      
      <input type="text" name="name" class="form-control" id="validationname" aria-describedby="inputGroupPrepend" required>
	  <?php echo form_error('name'); ?> 
	  <div class="invalid-feedback">
        Please enter a user name .
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-6">
    <label for="validationemail" class="form-label">Email</label>
	
    <div class="input-group has-validation">
	
	<input class="form-control form-control-lg" type="email"  id="validationemail"name="email" placeholder="enter Email"  required/>
											
      
	  
	  <div class="invalid-feedback">
        Please enter a email.
		<?php echo form_error('email'); ?>
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <label  for="validationaddress" class="form-label">Subject </label>
   
	<textarea   name="sub" > </textarea>

	<div class="invalid-feedback">
      Please provide a valid subject.
    
  </div>
</div>
  
   
  
  <div class="col-12">
    <input class="btn btn-primary"  name="save"type="submit">
  </div>
										</form>
                   
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

	<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function (){
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>


<!-- Mirrored from appstack.bootlab.io/pages-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 08:17:24 GMT -->
</html>