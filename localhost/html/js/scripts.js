/***********************************************************************
 * scripts.js
 *
 * Computer Science 50
 * Problem Set 7
 *
 * Global JavaScript, if any.
 **********************************************************************/
var context;
var canvas;
var isDrawing = false;

 window.onload = function() {
 


     
     
     //for canvas
     canvas = document.getElementById("draw");
     context = canvas.getContext("2d");
     var my_gradient=context.createLinearGradient(0,0,canvas.width,canvas.height);
     context.lineWidth = 3;
     my_gradient.addColorStop(0,'rgb(68,217,177)');
     my_gradient.addColorStop(1,'rgb(0,154,73)');
     context.fillStyle=my_gradient;
     context.fillRect(0,0,canvas.width,canvas.height);
     canvas.onmousedown = startDrawing;
     canvas.onmouseup = stopDrawing;
     canvas.onmouseout = stopDrawing;
     canvas.onmousemove = Draw

} ;
function email(){
    s = document.getElementsByTagName("input");
    s = s.item();
    var email = s.value;
    var url = canvas.toDataURL();
       $.ajax({
        url:'draw.php',
        type:'POST',
        data:{
            'pic':url,
            'email':email
            },
        success:function(response){
            $('#save').html(response);
        }}
        );
}
function small(){
    context.lineWidth = 3;
} 
function medium(){
    context.lineWidth = 6;
}
function big(){ 
    context.lineWidth = 12;
}
function clearCanvas(){
    context.clearRect(0,0,canvas.width,canvas.height);
    var my_gradient=context.createLinearGradient(0,0,canvas.width,canvas.height);
     my_gradient.addColorStop(0,'rgb(68,217,177)');
     my_gradient.addColorStop(1,'rgb(0,154,73)');
     context.fillStyle=my_gradient;
     context.fillRect(0,0,canvas.width,canvas.height);
} 

function saveCanvas(){
    var url = canvas.toDataURL();
    var word = document.getElementById("word").textContent;
    console.log(word);
   $.ajax({
        url:'draw.php',
        type:'POST',
        data:{
            'picture':url,
             'word':word
            },
        success:function(response){
            $('#save').html(response);
        }}
        );
}   
function stopDrawing(){
    isDrawing = false;
}
function Draw(e){
if (isDrawing == true)
{
 
    context.lineTo(e.pageX - canvas.offsetLeft,e.pageY - canvas.offsetTop);

    context.stroke();
}
}
function startDrawing(e){
isDrawing = true;
context.beginPath();
context.moveTo(e.pageX-canvas.offsetLeft,e.pageY - canvas.offsetTop);

}
function penColorOrange(){
        context.strokeStyle = 'rgb(244,152,0)';
}
function penColorCyan(){
        context.strokeStyle = 'rgb(0,161,233)';
}
function penColorBlack(){   
        context.strokeStyle = 'rgb(0,0,0)';
}
function penColorWhite(){
        context.strokeStyle = 'rgb(255,255,255)';
}
function penColorRed(){
        context.strokeStyle = 'rgb(255,0,0)';
    }
function penColorGreen(){
        context.strokeStyle = 'rgb(0,255,0)';
    }
function penColorBlue(){
        context.strokeStyle = 'rgb(0,0,255)';
    }
