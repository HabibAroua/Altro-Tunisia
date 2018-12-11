function chk()
{
    var name=document.getElementById('name').value;
    var dataString ='name'+name;
    $.ajax(
        {
            type:"post",
            url:"hi.php",
            data:dataString,
            cache:false,
            success: function(html)
            {
                
            }
            
        }
    );
    return false;
}