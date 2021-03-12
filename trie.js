function trieparauthor(){
    var select=document.getElementById("kuttab").value;
    var book=document.getElementsByName("book");
    var author=document.getElementsByName("author");
    // console.log(author[3]);
    // console.log(book[3]);
    // alert(select);
    for(var i=0;i<book.length;i++){
        if(select==author[i].innerText){
            book[i].style.display="block";
            console.log(book[i]);
        }
        else{
            book[i].style.display="none";
        }
    }
}
function trieparprix(){
    var book=document.getElementsByName("book");
    var price=document.getElementsByName("price");
    var min=document.getElementById("min");
    var max=document.getElementById("max");
    // alert(min.value);
    for(var i=0;i<book.length;i++){
            // console.log(price[i].innerText);
        if(parseFloat(price[i].innerText)>=parseFloat(min.value) && parseFloat(price[i].innerText)<=parseFloat(max.value)){
            book[i].style.display="block";
            console.log(book[i]);
        }else{
            book[i].style.display="none";
        }
    }
}