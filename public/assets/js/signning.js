const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const firstForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");

signInBtn.addEventListener("click", () => {
	container.classList.remove("right-panel-active");
});

signUpBtn.addEventListener("click", () => {
	container.classList.add("right-panel-active");
});

// firstForm.addEventListener("submit", (e) => e.preventDefault());
// secondForm.addEventListener("submit", (e) => e.preventDefault());
var login = window.location.pathname.search('/login');
console.log(login);
if(login >= 0){
    container.classList.remove("right-panel-active");
}
//  to change the photo dynamically

 var overlay = document.getElementsByClassName("overlay");

var i=0
var urlArray = [
"url('https://i.pinimg.com/736x/3e/2e/69/3e2e69f4afa26d4c20e73adbfba59676--visit-egypt-nile-river.jpg')",
"url('https://i.pinimg.com/736x/6c/31/cf/6c31cf668be1dda2d0f09f2bf322fa4b.jpg')",
"url('https://i.pinimg.com/564x/95/f9/09/95f90989f7f92c9333344c1c314d12a1.jpg')",
"url('https://i.pinimg.com/564x/96/36/bd/9636bd84d529a6ebbeaeb79a2ced7110.jpg')",
];

for(i;i>urlArray.length;i++){
	console.log(urlArray[i]);
document.body.style.backgroundImage = urlArray[i];
overlay[0].style.backgroundImage = urlArray[i];
};

(function(){
    show=setInterval(
          next()

,3000);
});

// (function (){
//     clearInterval(show)
// });





