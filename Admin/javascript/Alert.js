function validation()
{
    swal
    (
        'The Internet?',
        'That thing is still around?',
        'question'
    );
}
         
function basicMessage(Mytext)
{
    swal
        (
            {
                title: "Good job!",
                text: Mytext,
                icon: "success",
            }
        );
}

function error(Mytext)
{
    swal
        (
            {
                title: "Good job!",
                text: Mytext,
                icon: "waring",
            }
        );
}

function errorMessage(title,text,footer)
{
    swal
    (
        {
            type: 'error',
            title: title,
            text: text,
            footer: footer
        }
    );
}

function ImageMessage(imageUrl,imageHeight,imageAlt)
{
    swal
    (
        {
            imageUrl: imageUrl,
            imageHeight: imageHeight,
            imageAlt: imageAlt
        }
    );
}

function positionedDialog(position,type,title,showConfirmButton,timer)
{
    swal
    (
        {
            position: position,
            type: type,
            title: title,
            showConfirmButton: showConfirmButton, //booleen
            timer: timer
        }
    );
}

function CustomAnimation(title,animation,c)
{
    
    swal
    (
        {
            title: title,
            animation: animation, //booleen
            customClass: c //animated tada
        }
    );
}
//https://sweetalert2.github.io/