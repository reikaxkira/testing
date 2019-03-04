<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="test.css" />
  </head>
  <body>
      
      <div class="container">
         <div class="row bg-info">
           <div class="col-md-4">
              <form action="" id="myform" class="needs-validation">
                  <h2> Please input 2 Numbers to Calculate</h2>
                    <div class="form-group">
                        <label for="First Number"> First number</label>
                          <input type="text" class="form-control" name="num1" id="num1">
                    </div>
                    <div class="form-group">
                        <label for=""> Second Number</label>
                          <input type="text" class="form-control" name="num2" id="num2">
                    </div>
                    <div class="form-group">
                        <label for=""> Select Arithmetic Operator</label>
                           <select class="form-control" name="selectoperator" id="selectoperator"> 

                             <option value="">  Select Operator</option>
                             <option id="add" value="add"> + Add</option>
                             <option id="sub" value="sub"> - Subtract</option>
                             <option id="mul" value="mul"> * Multiply</option>
                             <option id="div" value="div"> / Divide</option>
                            </select>
                    </div>
                    <div class="form-group">
                    <label for="result"> Result </label> 
		             	  <input type="text"  class="form-control mb-4" id="result" readonly>
                    </div>
                    <div class="form-group">  
                     <button type="button" class="btn btn-primary" id="btn" onclick="calculate()"> Calculate</button>
                    </div>
              </form>
           </div>
         </div>
        
      </div>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="test.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>

  </body>
</html>