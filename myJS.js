function _(id) {return document.getElementById(id); }
function submitForm(){
    var reminder = "";
    _("status").innerHTML = 'Please vait ...';
    var name = document.forms["form"]["fname"].value;
    var mail = document.forms["form"]["email"].value;
    if (name === null || name === "" || mail === null || mail === "") {
        reminder = "All field must be filled out";
        var err = _("err").innerHTML = reminder;
        return false;  
    }
    var formdata = new FormData();
    formdata.append( "n", _("n").value );
    formdata.append( "e", _("e").value );
    formdata.append( "m", _("m").value );
    var ajax = new XMLHttpRequest();
    ajax.open( 'POST', 'meil.php', true );
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200) {
            if(ajax.responseText == "success"){
                _("f").innerHTML = '<h2>Thanks ' + _("n").value + ', your message has been sent.</h2>';
            } else {
                _("status").innerHTML = ajax.responseText;
            }
        }
    }
    ajax.send( formdata );
}
