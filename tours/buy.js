var timeleft = 5;

var downloadTimer = setInterval(function(){
if(timeleft <= 0){
clearInterval(downloadTimer);
}
document.getElementById("progressBar").value = 5 - timeleft;
timeleft -= 1;
}, 1000);

