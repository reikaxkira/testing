<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Developer Test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="test.js"></script>
	
	
 

</head>
<body class="">
 <div class="justify-content-center m-0">
   <form action="" id= "form" name="form" class="">
	  <div class="form-group bg-info">
		  <div class="col-3">
			  <label class=""> Enter 2 Numbers to Calculate:</label>
			  <pre></pre>
		      <label> First Number</label>
		      <input type="text" class="form-control" id="num1" placeholder="Enter First Number" required>
		 	  <label> Second Number</label> 
			  <input type="text" class="form-control mb-4" id="num2" placeholder="Enter Second Number" required> 
				<div> 
				   <label class="" for="num1"> Select Operator</label>
			         <select class="custom-select" name="" id="arithmeticlist" onChange="selectArithmetic()"> 
					     <option value="Choose"> Choose </option> 
					     <option value="add"> + Add  </option>
                 	     <option value="sub"> - Subtract</option>
                    	 <option value="mul"> * Multiply</option>
                         <option value="div"> / Divide</option>
				     </select> 
				</div> 
			  <label for="result"> Result </label> 
			  <input type="text"  class="form-control mb-4" id="result" readonly>
			  <button type="button" id="button" onclick="calculate()" class="btn btn-secondary mb-4"> Calculate </button>
		  </div>
	    </div>
   </form>
 </div>

</body>

</html> 

