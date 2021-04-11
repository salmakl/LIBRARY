function validationBook(){
    
    var title=document.formB.title.value;
    var price=document.formB.price.value;
    var date=document.formB.PubDate.value;
    var author=document.formB.authors.value;
    var img=document.formB.img.value;

    if(title==""){
        event.preventDefault();
        alert("title is required");
    }

    if(price==""){
        event.preventDefault();
        alert("Price is required");
    }
    if(date==""){
        event.preventDefault();
        alert("Date is required");
    }

    if(author==""){
        event.preventDefault();
        alert("Author is required");
    }

    if(img==""){
        event.preventDefault();
        alert("Image is required");
    }
}

function validationAuteur(){
    
    var cin=document.formA.cin.value;
    var Fname=document.formA.Fname.value;
    var Lname=document.formA.Lname.value;
    var birthDate=document.formA.birthDate.value;
   

    if(cin==""){
        event.preventDefault();
        alert("CIN is required");
    }

    if(Fname==""){
        event.preventDefault();
        alert("First name is required");
    }
    if(Lname==""){
        event.preventDefault();
        alert("Last name is required");
    }

    if(birthDate==""){
        event.preventDefault();
        alert("birth date is required");
    }

}