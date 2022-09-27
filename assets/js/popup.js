
// var d = new Date();
// var n = d.getDay();
// var now = d.getHours() + "." + d.getMinutes();
// var weekdays = [
//     ["Sunday"],
//     ["Monday", 12.30, 18.00],
//     ["Tuesday", 8.30, 18.00],
//     ["Wednesday", 8.30, 18.00],
//     ["Thursday", 8.30, 18.00],
//     ["Friday", 8.30, 19.30],
//     ["Saturday", 9.00, 17.00] 
// ];
// var day = weekdays[n];


// if (now > day[1] && now < day[2] || now > day[3] && now < day[4]) {
//     window.addEventListener("load", function () {
//                 setTimeout(
//                     function open(event) {
//                         document.querySelector(".popup").style.display = "block";
//                     },
//                     1000
//                 )
//             });
//             document.querySelector("#close").addEventListener("click", function () {
//                 document.querySelector(".popup").style.display = "none";
//             });
// }

var tb = document.getElementById("nmb-activate");
var btn = document.getElementById("#btn-submit");
function functionpop(){
    if(document.querySelectorAll("nmb-activate").values.length = 9){
        document.querySelector(".popup").style.display = "block";
        console.log("kut");

        document.querySelector("#close").addEventListener("click", function () {
        document.querySelector(".popup").style.display = "none";});
    }
    else{
        document.querySelector(".popup").style.display = "none";
    }
    
}