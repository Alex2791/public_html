

$(document).ready(function()
{
    /*if($('input#bundles_storebundle_user2_email').length>3)
    {

        alert("ok");
    }*/

    $('#bundles_storebundle_user2_email').blur(function()
        {
            console.log($('#bundles_storebundle_user2_email').val().length);
            //alert($('#bundles_storebundle_user2_email').value);
            if($('#bundles_storebundle_user2_email').val().length>6)
            {
                 var email = $('#bundles_storebundle_user2_email').val();
               //  alert($('#bundles_storebundle_user2_email').val());
                $.ajax(
                {
                    method : 'GET',
                    url : pathajax,
                    data : { email: email},
                    success:function(data)
                    {
                        console.log(data.message);

                       if(typeof data.message!== "undefined")
                       {
                           // console.log($(".bsu_message").value);
                           var str ="<div class='bsu_message' style='color: red'>"+data.message+"</div>";
                           // $(str).appendTo( "" );
                           $( ".bsu_message" ).replaceWith(str);
                       }
                       else
                       {
                           var str ="<div class='bsu_message'></div>";
                           //console.log("1111");
                           $( ".bsu_message" ).replaceWith(str);
                       }


                    }
                });

            }
        }
    )



})