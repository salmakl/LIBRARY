function myFunction() {
    var x = document.querySelector("header ul");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = " none";
    }
  }
  window.onresize=function(){
      if(window.innerWidth >= 800){
          document.querySelector("header ul").style.display = "flex";
      }else{
          document.querySelector("header ul").style.display = " none";
      }
  }
  document.querySelector(".menu").addEventListener("click",myFunction);

