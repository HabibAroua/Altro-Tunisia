<?php
    
    function show($message)
    {
        echo "<script> basicMessage('$message');</script>";
    }
    
    function error($message)
    {
        echo "
            <script>
                swal
                (
                    {
                        type: 'error',
                        title: 'Erreur Message',
                        text: '$message',
                        footer: '__'
                    }
                );
            </script>";
    }

    
?>