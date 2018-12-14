
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
    require_once ('../App/Controller/ReservationController.php');
	$r=new ReservationController();
	$laptop=$r->nbPanierByCategorie(1);
	$smartPhone=$r->nbPanierByCategorie(2);
	$television=$r->nbPanierByCategorie(3);
    echo "<script>
    $(document).ready(function(){
	var ctx = $('#mycanavas').get(0).getContext('2d');
		
	var data = [
	{
	    value: $laptop ,
		color: 'cornflowerblue',
		highlight: 'Lightskyblue',
		label: 'Laptop'
	},
	{
	    value: $smartPhone,
		color: 'Lightgreen',
		highlight: 'yellowgreen',
		label: 'Smartphone'
	},
	{
	    value: $television ,
		color:'orange',
		highlight:'darkorange',
		label:'Television'
	}];
	var chart =new Chart(ctx).Doughnut(data);
});
</script>";
?>

<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-xs-12">
                <center>
                    <h1>
                        Les statistiques
                    </h1>
                </center>
                <center>
                    <canvas id="mycanavas" width="500" height="500"></canvas>
                </center>
            </div>
        </div>
    </div>
</div>