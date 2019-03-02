$(document).ready(function () {

    $('#myform').validate
    ({ 
            rules: {
                num1: {
                    required: true,
                    number:true
                },
                num2: {
                    required: true,
                    number:true,
                    range:[-1,Infinity]
                },
                operator: { 
                    required: true
                },
                result: { 
                   
                }
            },
            messages: { 
                selectoperator: { 
                    required: "Please select operator"
                }
            }

            
        });
        
    });
 



function calculate() 
{ 
    var a= $("#selectoperator option:selected").val();
    var b = parseFloat($('#num1').val());
    var c = parseFloat($('#num2').val());

    switch (a)
    { 
        case 'add': 
            var result =  b + c;
            $("#result").val(result);
            break;
        case 'sub': 
            var result =  b - c;
            $("#result").val(result);
            break;
        case 'mul': 
            var result =  b * c;
            $("#result").val(result);
            break;		
        case 'div': 
            var result =  b / c;
            $("#result").val(result);
            if(!isFinite(result)) 
            { 
            alert("Please input a number greater than 0");
            $("#result").val('');
            }
            break;
        case '': 
            alert("Please select operator");
            break;

        
    }  
       if(isNaN(result)) 
       { 
       alert("Please input a number");
       $("#result").val('');
       }
    

    
}



    


   
