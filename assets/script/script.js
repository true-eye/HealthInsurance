

document.getElementById("btn-page-1").addEventListener("click", function(event){

    zip = document.getElementById("zip").value;

    if( zip == '' )
        return false;

    event.preventDefault()
    document.getElementById("page-1").setAttribute("style", "display: none;");
    document.getElementById("page-2").setAttribute("style", "display: inline;");
    return false;
});

document.getElementById("btn-page-2").addEventListener("click", function(event){
    birthdate_month = document.getElementById("birthdate-month").value;
    birthdate_day = document.getElementById("birthdate-day").value;
    birthdate_year = document.getElementById("birthdate-year").value;

    if( birthdate_month == '' )
        return false;

    if( birthdate_day == '' )
        return false;

    if( birthdate_year == '' )
        return false;

    event.preventDefault()
    document.getElementById("page-2").setAttribute("style", "display: none;");
    document.getElementById("page-3").setAttribute("style", "display: inline;");
});
document.getElementById("btn-page-3").addEventListener("click", function(event){

    height_feet = document.getElementById("height-feet").value;
    height_inches = document.getElementById("height-inches").value;
    weight = document.getElementById("weight").value;
    numberPeople = document.getElementById("numberPeople").value;
    income = document.getElementById("income").value;

    if( height_feet == '' || height_inches == '' || weight == '' || numberPeople == '' || income == '')
        return false;

    event.preventDefault()
    document.getElementById("page-3").setAttribute("style", "display: none;");
    document.getElementById("page-4").setAttribute("style", "display: inline;");
});

document.getElementById("btn-page-4").addEventListener("click", function(event){

    firstname = document.getElementById("firstname").value;
    lastname = document.getElementById("lastname").value;
    email = document.getElementById("email").value;
    address = document.getElementById("address").value;
    city = document.getElementById("city").value;
    state = document.getElementById("state").value;
    phone = document.getElementById("phone").value;

    if( firstname == '' || lastname == '' || email == '' || address == '' || city == '' || state == '' || phone == '')
        return false;

    document.getElementByName("form1").submit();
    /*event.preventDefault()
    document.getElementById("page-4").setAttribute("style", "display: none;");
    document.getElementById("div-caption").setAttribute("style", "display: none;");
    document.getElementById("page-5").setAttribute("style", "display: inline;");*/
});

document.getElementById("radio-male").addEventListener("click", function(event){
    if( document.getElementById("radio-male").getAttribute("checked") != "checked")
    {
        document.getElementById("radio-male").setAttribute("checked", "checked");
        document.getElementById("radio-female").removeAttribute("checked");
    }
});


document.getElementById("radio-female").addEventListener("click", function(event){
    if( document.getElementById("radio-female").getAttribute("checked") != "checked")
    {
        document.getElementById("radio-female").setAttribute("checked", "checked");
        document.getElementById("radio-male").removeAttribute("checked");
    }
});