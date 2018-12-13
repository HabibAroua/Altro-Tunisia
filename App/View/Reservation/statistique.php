
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
<script>
    $(document).ready(function(){
	var ctx = $("#mycanavas").get(0).getContext("2d");
		
	var data = [
	{
	    value:270 ,
		color: "cornflowerblue",
		highlight: "Lightskyblue",
		label: "JavaScript"
	},
	{
	    value: 50,
		color: "Lightgreen",
		highlight: "yellowgreen",
		label: "HTML"
	},
	{
	    value:40,
		color:"orange",
		highlight:"darkorange",
		label:"CSS"
	}];
	var chart =new Chart(ctx).Doughnut(data);
});
</script>
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