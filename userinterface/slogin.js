$(document).ready(function(){
//alert('ok');

$(document).on("click", "#btnloggin", function(){
    
    //alert("Loggin button is clicked");
    // alert($("#txtrollno").val());
    // alert($("#txtpassword").val());

    // alert($("#lblrollno").text());

    //alert($("#innerdiv").html());

    //setting values

   // $("#txtrollno").val('Hello world ');
    //$("#txtpassword").val('gf2345ghdnjf');

   // var x = '<input type="text"><br><button>ok</button>';
    //$("#dynamicdiv").html(x);

    // var un = $("#txtrollno").val();
    // var pwd = $("#password").val();

    // var trimmedun = un.trim();
    // var lun = trimmedun.length;

    // var trimmedpwd = pwd.trim();
    // var lpwd = trimmedpwd.length;

    // if(lun!=0 && lpwd!=0){
    //     $("#lblerrmessage").text("");
    // }else{
    //     $("#lblerrmessage").text("Invalid Login");
    // }

    $(document).on("click", "#btnloggin", function(){
        // ... (other code remains unchanged)

        var un = $("#txtrollno").val();
        var pwd = $("#txtpassword").val(); // Correct variable name for password

        var trimmedun = un.trim();
        var lun = trimmedun.length;

        var trimmedpwd = pwd.trim();
        var lpwd = trimmedpwd.length;

        if (lun != 0 && lpwd != 0) {
            // Update the line below to set the error message text when login is invalid
            $("#lblerrmessage").text(""); // Set to empty string or any other appropriate message
        } else {
            $("#lblerrmessage").text("Invalid Login");
        }
    });
});

//$(document).on("click", "#lblrollno", function(){
  //  alert("Roll No clicked");
//});
  
  });