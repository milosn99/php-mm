function validacija()                                 
{ 
    var ime = document.forms["FormaNarucivanje"]["Ime"];               
    var email = document.forms["FormaNarucivanje"]["EMail"];    
    var telefon = document.forms["FormaNarucivanje"]["Telefon"];   
    var model = document.forms["FormaNarucivanje"]["Model"];  

    if (ime.value == "")                                  
    { 
        event.preventDefault();
        window.alert("Niste uneli svoje ime."); 
        ime.focus(); 
        return false; 
    } 
   
    if (model.value == "")                               
    { 
        event.preventDefault();
        window.alert("Niste uneli svoju model."); 
        adresa.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        event.preventDefault();
        window.alert("Niste uneli svoju e-mail adresu"); 
        email.focus(); 
        return false; 
    } 
    if (!telefon.value.match(/^[0-9]{10}$/))                           
    { 
        event.preventDefault();
        window.alert("Niste ispravno uneli broj telefona"); 
        telefon.focus(); 
        return false; 
    } 

    if(confirm("Da li ste sigurni da treba da dođem u subotu?"))
    {
        return true;
    }
    event.preventDefault();
    return false;
}

function kliknuto() {
    let checkBox = document.getElementById("potvrda");
    let text = document.getElementById("cepano");

    if (checkBox.checked == true){
      text.style.display = "";
    } else {
      text.style.display = "none";
    }
  }


$(document).ready(function(){
    $(".pocetna").vegas({
        slides: [
        { src: "1.jpg" },
        { src: "2.jpg" },
        { src: "3.jpg" },
        ],
        overlay: './assets/overlays/05.png',
        transition: 'blur'
    });
})
  
