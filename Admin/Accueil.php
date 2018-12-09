<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Landing Page Website Tutorial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<style>
		    body.swal2-in{overflow-y:hidden}.swal2-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:fixed;top:0;left:0;bottom:0;right:0;padding:10px;background-color:transparent;z-index:1060}.swal2-container:not(.in){pointer-events:none}.swal2-container.fade{-webkit-transition:background-color .1s;transition:background-color .1s}.swal2-container.in{background-color:rgba(0,0,0,.4)}.swal2-modal{background-color:#fff;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;border-radius:5px;box-sizing:border-box;text-align:center;margin:auto;overflow-x:hidden;overflow-y:auto;display:none}.swal2-modal:focus{outline:0}.swal2-modal.loading{overflow-y:hidden}.swal2-modal h2{color:#595959;font-size:30px;text-align:center;font-weight:600;text-transform:none;position:relative;margin:0;padding:0;line-height:60px;display:block}.swal2-modal .swal2-spacer{height:10px;color:transparent;border:0}.swal2-modal .styled{border:0;border-radius:3px;box-shadow:none;color:#fff;cursor:pointer;font-size:17px;font-weight:500;margin:0 5px;padding:10px 32px}.swal2-modal .styled:not(.loading)[disabled]{opacity:.4;cursor:no-drop}.swal2-modal .styled.loading{box-sizing:border-box;border:4px solid transparent;width:40px;height:40px;padding:0;margin:-2px 30px;vertical-align:top;background-color:transparent!important;color:transparent;cursor:default;border-radius:100%;-webkit-animation:rotate-loading 1.5s linear 0s infinite normal;animation:rotate-loading 1.5s linear 0s infinite normal}.swal2-modal :not(.styled).loading::after{display:inline-block;content:'';margin-left:5px;vertical-align:-1px;height:6px;width:6px;border:3px solid #999;border-right-color:transparent;border-radius:50%;-webkit-animation:rotate-loading 1.5s linear 0s infinite normal;animation:rotate-loading 1.5s linear 0s infinite normal}.swal2-modal .swal2-checkbox input,.swal2-modal .swal2-checkbox span,.swal2-modal .swal2-radio input,.swal2-modal .swal2-radio span{vertical-align:middle}.swal2-modal .swal2-image{margin:20px auto;max-width:100%}.swal2-modal .swal2-close{font-size:36px;line-height:36px;font-family:serif;position:absolute;top:5px;right:13px;cursor:pointer;color:#ccc;-webkit-transition:color .1s ease;transition:color .1s ease}.swal2-modal .swal2-close:hover{color:#d55}.swal2-modal>.swal2-checkbox,.swal2-modal>.swal2-file,.swal2-modal>.swal2-input,.swal2-modal>.swal2-radio,.swal2-modal>.swal2-select,.swal2-modal>.swal2-textarea{display:none}.swal2-modal .swal2-content{font-size:18px;text-align:center;font-weight:300;position:relative;float:none;margin:0;padding:0;line-height:normal;color:#545454}.swal2-modal .swal2-checkbox,.swal2-modal .swal2-file,.swal2-modal .swal2-input,.swal2-modal .swal2-radio,.swal2-modal .swal2-select,.swal2-modal .swal2-textarea{margin:20px auto}.swal2-modal .swal2-file,.swal2-modal .swal2-input,.swal2-modal .swal2-textarea{width:100%;box-sizing:border-box;border-radius:3px;border:1px solid #d9d9d9;font-size:18px;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);-webkit-transition:border-color box-shadow .3s;transition:border-color box-shadow .3s}.swal2-modal .swal2-file.error,.swal2-modal .swal2-input.error,.swal2-modal .swal2-textarea.error{border-color:#f06e57}.swal2-modal .swal2-file:focus,.swal2-modal .swal2-input:focus,.swal2-modal .swal2-textarea:focus{outline:0;box-shadow:0 0 3px #c4e6f5;border:1px solid #b4dbed}.swal2-modal .swal2-file:focus::-webkit-input-placeholder,.swal2-modal .swal2-input:focus::-webkit-input-placeholder,.swal2-modal .swal2-textarea:focus::-webkit-input-placeholder{-webkit-transition:opacity .3s .03s ease;transition:opacity .3s .03s ease;opacity:.8}.swal2-modal .swal2-file:focus::-moz-placeholder,.swal2-modal .swal2-input:focus::-moz-placeholder,.swal2-modal .swal2-textarea:focus::-moz-placeholder{-webkit-transition:opacity .3s .03s ease;transition:opacity .3s .03s ease;opacity:.8}.swal2-modal .swal2-file:focus:-ms-input-placeholder,.swal2-modal .swal2-input:focus:-ms-input-placeholder,.swal2-modal .swal2-textarea:focus:-ms-input-placeholder{-webkit-transition:opacity .3s .03s ease;transition:opacity .3s .03s ease;opacity:.8}.swal2-modal .swal2-file:focus::placeholder,.swal2-modal .swal2-input:focus::placeholder,.swal2-modal .swal2-textarea:focus::placeholder{-webkit-transition:opacity .3s .03s ease;transition:opacity .3s .03s ease;opacity:.8}.swal2-modal .swal2-file::-webkit-input-placeholder,.swal2-modal .swal2-input::-webkit-input-placeholder,.swal2-modal .swal2-textarea::-webkit-input-placeholder{color:#e6e6e6}.swal2-modal .swal2-file::-moz-placeholder,.swal2-modal .swal2-input::-moz-placeholder,.swal2-modal .swal2-textarea::-moz-placeholder{color:#e6e6e6}.swal2-modal .swal2-file:-ms-input-placeholder,.swal2-modal .swal2-input:-ms-input-placeholder,.swal2-modal .swal2-textarea:-ms-input-placeholder{color:#e6e6e6}.swal2-modal .swal2-file::placeholder,.swal2-modal .swal2-input::placeholder,.swal2-modal .swal2-textarea::placeholder{color:#e6e6e6}.swal2-modal .swal2-range input{float:left;width:80%}.swal2-modal .swal2-range output{float:right;width:20%;font-size:20px;font-weight:600;text-align:center}.swal2-modal .swal2-range input,.swal2-modal .swal2-range output{height:43px;line-height:43px;vertical-align:middle;margin:20px auto;padding:0}.swal2-modal .swal2-input{height:43px;padding:0 12px}.swal2-modal .swal2-input[type=number]{max-width:150px}.swal2-modal .swal2-file{font-size:20px}.swal2-modal .swal2-textarea{height:108px;padding:12px}.swal2-modal .swal2-select{color:#545454;font-size:inherit;padding:5px 10px;min-width:40%;max-width:100%}.swal2-modal .swal2-radio{border:0}.swal2-modal .swal2-radio label:not(:first-child){margin-left:20px}.swal2-modal .swal2-radio input{margin:0 3px 0 0}.swal2-modal .swal2-checkbox{color:#545454}.swal2-modal .swal2-validationerror{background-color:#f0f0f0;margin:0 -20px;overflow:hidden;padding:10px;color:gray;font-size:16px;font-weight:300;display:none}.swal2-modal .swal2-validationerror::before{content:'!';display:inline-block;width:24px;height:24px;border-radius:50%;background-color:#ea7d7d;color:#fff;line-height:24px;text-align:center;margin-right:10px}.swal2-icon.swal2-info,.swal2-icon.swal2-question,.swal2-icon.swal2-warning{font-size:60px;line-height:80px;text-align:center}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}.swal2-icon{width:80px;height:80px;border:4px solid transparent;border-radius:50%;margin:20px auto 30px;padding:0;position:relative;box-sizing:content-box;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon.swal2-error{border-color:#f27474}.swal2-icon.swal2-error .x-mark{position:relative;display:block}.swal2-icon.swal2-error .line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal2-icon.swal2-error .line.left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal2-icon.swal2-error .line.right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}.swal2-icon.swal2-warning{font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;color:#f8bb86;border-color:#facea8}.swal2-icon.swal2-info{font-family:'Open Sans',sans-serif;color:#3fc3ee;border-color:#9de0f6}.swal2-icon.swal2-question{font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;color:#87adbd;border-color:#c9dae1}.swal2-icon.swal2-success{border-color:#a5dc86}.swal2-icon.swal2-success::after,.swal2-icon.swal2-success::before{content:'';position:absolute;width:60px;height:120px;background:#fff}.swal2-icon.swal2-success::before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal2-icon.swal2-success::after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px}.swal2-icon.swal2-success .placeholder{width:80px;height:80px;border:4px solid rgba(165,220,134,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal2-icon.swal2-success .fix{width:7px;height:90px;background-color:#fff;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-icon.swal2-success .line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal2-icon.swal2-success .line.tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-success .line.long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-progresssteps{font-weight:600;margin:0 0 20px;padding:0}.swal2-progresssteps li{display:inline-block;position:relative}.swal2-progresssteps .swal2-progresscircle{background:#3085d6;border-radius:2em;color:#fff;height:2em;line-height:2em;text-align:center;width:2em;z-index:20}.swal2-progresssteps .swal2-progresscircle:first-child{margin-left:0}.swal2-progresssteps .swal2-progresscircle:last-child{margin-right:0}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep{background:#3085d6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle,.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline{background:#add8e6}.swal2-progresssteps .swal2-progressline{background:#3085d6;height:.4em;margin:0 -1px;z-index:10}[class^=swal2]{-webkit-tap-highlight-color:transparent}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes hideSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@keyframes hideSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}.show-swal2{-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s}.show-swal2.no-animation{-webkit-animation:none;animation:none}.hide-swal2{-webkit-animation:hideSweetAlert .15s forwards;animation:hideSweetAlert .15s forwards}.hide-swal2.no-animation{-webkit-animation:none;animation:none}@-webkit-keyframes animate-success-tip{0%,54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}100%{width:25px;left:14px;top:45px}}@keyframes animate-success-tip{0%,54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}100%{width:25px;left:14px;top:45px}}@-webkit-keyframes animate-success-long{0%,65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}100%{width:47px;right:8px;top:38px}}@keyframes animate-success-long{0%,65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}100%{width:47px;right:8px;top:38px}}@-webkit-keyframes rotatePlaceholder{0%,5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}100%,12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%,5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}100%,12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}.animate-success-tip{-webkit-animation:animate-success-tip .75s;animation:animate-success-tip .75s}.animate-success-long{-webkit-animation:animate-success-long .75s;animation:animate-success-long .75s}.swal2-success.animate::after{-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}@-webkit-keyframes animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}@keyframes animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}.animate-error-icon{-webkit-animation:animate-error-icon .5s;animation:animate-error-icon .5s}@-webkit-keyframes animate-x-mark{0%,50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}100%{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animate-x-mark{0%,50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}100%{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.animate-x-mark{-webkit-animation:animate-x-mark .5s;animation:animate-x-mark .5s}@-webkit-keyframes pulse-warning{0%{border-color:#f8d486}100%{border-color:#f8bb86}}@keyframes pulse-warning{0%{border-color:#f8d486}100%{border-color:#f8bb86}}.pulse-warning{-webkit-animation:pulse-warning .75s infinite alternate;animation:pulse-warning .75s infinite alternate}@-webkit-keyframes rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
        </style>
			<style>
				html,body
				{
					height:100%;
					width: 100%;
				}
				.navbar
				{
					background-color: #23415C;
					padding: 1% 0:
					font-size : 1.2em;
				}
				.navbar-brand
				{
					min-height: 55px;
					padding: 0 15px 5px;
				}
				.navbar-default .navbar-nav li a
				{
					color :#D5D5D5;
				}
				.navbar-default .navbar-nav li a :hover , .navbar-default .navbar-nav li a :active
				{
					color: #FFF;
				}
				#home
				{
					background: url(picture/mountains.jpeg) no-repeat center center fixed;
					display:table;
					height: 100%;
					position: relative;
					width: 100%;
					background-size:cover; 
				}
				.landing-text
				{
				    display: table-cell;
				    text-align: center;
					vertical-align: middle;
				}
				.landing-text h1
				{
					font-size: 500%;
				}
				.padding
				{
					padding: 80px 0;
				}
				.padding img
				{
					width: 100%;
				}
				#fixed
				{
					background: url(picture/background.png) no-repeat center center fixed;
					display: table;
					height:60%;
					position: relative;
					width: 100%;
					background-size: cover;
				}
				footer
				{
					width: 100%;
					background-color: #23415C;
					padding: 5% 5% 10% 5%;
					color: #FFF;
				}
				.fa
				{
					padding: 15x;
					font-size: 25px;
					color: #FFF;
				}
				.fa :hover
				{
					color: #D5D5D5;
					text-decoration: none;
				}
				.icon
				{
					max-width: 200px;
				}
				@media (max-width: 768px)
				{
				    .landing-text h1
					{
						font-size: 300%;
					}
					.fa
					{
						font-size: 20px;
						padding: 10px;
					}
					.icon
					{
						padding-top: 5%;
						max-width: 100px;
					}
				}
			</style>
    </head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img style="width:100px; height: 50px;" src="picture/AltroTunisia.png"></a>
                </div>
				<div class="collapse navbar-collapse" id="navbar-collapse-main">
					<ul class="nav navbar-nav navbar-right">
						<li>
                            <a class="active" href="#">Acceuil</a>
                        </li>
						<li><a href="Accueil.php?page=client">Gestion des clients</a></li>
						<li><a href="#">Gestion des produits</a></li>
						<li><a href="#">Gestion des réservation</a></li>
						<li><a href="#">Les statistiques</a></li>
						<li><a href="#">Gestion des fidélité</a></li>
						<li><a href="logout.php">Deconexion</a></li>
					</ul>
                </div>
            </div>
        </nav>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="javascript/Alert.js"></script>
        <?php
            //require_once('../App/View/Client/Gere_client.php');
			
			if(isset($_GET['page']))
			{
				switch($_GET['page'])
				{
					case 'client' :require_once('../App/View/Client/Gere_client.php');
					break;
				    case 'ajouterProduit' : require_once('../App/View/Produit/ajouterProduit.php');
					break;
				}
			}
        ?>
    </body>
</html>