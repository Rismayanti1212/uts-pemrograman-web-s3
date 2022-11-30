var icon = document.getElementById('icon');
const header = document.getElementsByTagName('header');

icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        alert("Website will enter Dark Mode");
        icon.src = "img/darkmode.png";
        icon1.src = "img/Ig-dark.png";
        icon2.src = "img/Email-dark.png";
        icon3.src = "img/Wa-dark.png";
    }
    else{
        alert("Website will enter Light Mode");
        icon.src = "img/lightmode.png";
        icon1.src = "img/logo-ig.png";
        icon2.src = "img/Email.png";
        icon3.src = "img/logo-wa.png";
    }
}

document.getElementById("myBtn").addEventListener("click", function() {
    //var nama = prompt("Masukkan Nama Anda");
    //console.log(nama);
    var konfirmasi = confirm("Are you sure you want to book??")
    if(konfirmasi == true){
        console.log("Please fill in your details!");
    }
    else{
        console.log("You didn't order!")
    }
  });

function layer1(){
    document.getElementById('konten1-2').src="img/beverage3.jpg";
}

function layer2(){
   document.getElementById('konten1-2').src="img/dessert1.jpg";
}
document.getElementById('konten1-2').addEventListener('mouseover', layer1);
document.getElementById('konten1-2').addEventListener('mouseout', layer2);

function layer3(){
    document.getElementById('konten1-1').src="img/main-course5.jpg";
}

function layer4(){
   document.getElementById('konten1-1').src="img/main-course6.jpg";
   document.getElementById('konten1-3').src="img/beverage2.jpg";
}
document.getElementById('konten1-3').addEventListener('mouseover', layer5);
document.getElementById('konten1-3').addEventListener('mouseout', layer6);

function layer7(){
    document.getElementById('konten1-3').src="img/main-course6.jpg";
}

function layer8(){
   document.getElementById('konten1-3').src="img/beverage2.jpg";
}
document.getElementById('konten1-3').addEventListener('mouseover', layer5);
document.getElementById('konten1-3').addEventListener('mouseout', layer6);


document.getElementById("konten2-1").src = "img/beverage2.jpg";
document.getElementById("konten2-2").src = "img/main-course5.jpg";
document.getElementById("konten2-3").src = "img/main-course6.jpg";

document.getElementById("konten3").src = "img/chef2.jpg";
document.getElementById("konten3-1").src = "img/chef1.jpg";
document.getElementById("konten3-2").src = "img/chef3.jpg";
document.getElementById("konten3-3").src = "img/chef4.jpg";

