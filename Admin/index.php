<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="bootstrap/bootstrap.min.css" rel="stylesheet"/>    
        <link href="bootstrap/bootstrap-theme.css" rel="stylesheet"/>
        <link href="fonts/OleoScript-Regular.ttf" rel="stylesheet" />
		<style>
            @font-face
            {
                font-family:Fuentechida;
                src:url(fonts/OleoScript-Regular.ttf);
            }
    
            body
            {
                background-image: url(image/bb.jpg);
                background-size:cover;
                background-repeat: no-repeat;
                background-attachment:fixed;
            }
         
            .formulaire
            { 
                transition: 2s;
                margin-top: 100px;
                width: 30%;
                box-shadow: 0px 0px 40px violet,0px 0px 80px violet;
            }
        
            .formulaire:hover
            {
                transition: .8s;
                background-color: rgba(0,0,0,.5);
            }
        
            .login
            {
                height: 75px;
                margin-top: 40px;
            }
        
            .espace
            {
                margin-top: 40px;
            }
        
            fieldset
            {
                transition: 2s;
                margin-bottom: 50px;
                border-color: wheat;
                border-style: groove;
                border-width: 5px;
                border-radius: 20px;
            }
        
            h3,h4
            {
                color:white;
                text-align: center;
                font-family: fuentechida;
            }
  
            .Input
	        {
			    transition: .8s;
                background-color: rgba(0,0,0,.5);
                color: darkcyan;
                border-color:#006;
	            border-bottom-color:blueviolet;
                border-bottom-style:groove;
	            border-left:none;
	            border-right:none;
	            border-top:none;
                border-width: 4px;
		    }
	 	
		    .Input:hover
		    {
			    transition: .8s;
	            background-color:slategray;
	            box-shadow:inset;
                border-bottom-color:saddlebrown;
		    }
		
		    .Input:focus
		    {
			    transition: .8s;
			    border-bottom-color:salmon;
		    }
		
		    @media screen and (max-width:750px)
		    {
			    .login
			    {
				    height: 50px;
			    }
			
			    .formulaire
			    {
				    transition: 2s;
                    width: 95%;
                    margin-top: 10px;
			    }
		    }
        </style>
    </head>
    <body>
        <?php
            require_once('../App/View/default/loginAdmin.php');
        ?>
    </body>
</html>