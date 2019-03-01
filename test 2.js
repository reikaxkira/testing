var num1;
var num2;
var selectValue;


function calculate() { 
    num1 = parseFloat($('#num1').val());
    num2 = parseFloat($('#num2').val());
    var result="";
    if($('#num1').val() == '')
    {
    alert('Please input on number 1 it cannot be left blank');   
    }
    else if($('#num2').val() == '')
    {
    alert('Please input on number 2 it cannot be left blank');
    $('#result').val('');
    }
    if (isNaN(num1) || isNaN(num2))
    {
    alert('Please enter a number');
    return;
    }
    //switch
    if(selectValue == "add") 
    { 
       result = parseFloat(num1+num2);
    }
    else if(selectValue == "sub") 
    { 
       result = parseFloat(num1-num2);   
    }
    else if(selectValue == "mul") { 
       result = parseFloat(num1*num2);   
    }
    else if(selectValue == "div") { 
       result = parseFloat(num1/num2);
    }
     else if(selectValue == "Choose") { 
        alert('Please select operator');
    }
    else if(selectValue == null)
    {
       alert('Please select operator'); 
       $('#result').val('');
    }
    // console.log(result);
       var output = document.getElementById("result");

       console.log(result);
       console.log(output);
       output.value = result;
       console.log(output.value);

       if(!isFinite(result) || isNaN(result)) 
       {
         alert('Error Result is infinity please input a correct number'); 
         $('#result').val('');
       }
    }
    

    
function selectArithmetic() 
    { 
       selectValue = $('#arithmeticlist').val();
    }
   
    // $(document).ready(function() {
    // $('button').click('result', function() {
    // });
    // });

$(document).ready(function() { 
    $('#num1').validate({
        rules: {
            telephone: {
                required: function(element) {
                    return $("#mobile").is(':empty');
                }
            },
            mobile: {
                required: function(element) {
                    return $("#telephone").is(':empty');
                }
            }
        }
      });
    });