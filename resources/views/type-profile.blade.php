@extends('_master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/type-profile.css') }}">

@stop

@section('content')
<link rel="stylesheet" href="//rawgithub.com/Caged/d3-tip/master/examples/example-styles.css">

<div class="container-fluid">
	<div class="col-sm-offset-1"><a href="/">Back to Pokédex</a></div>
	<div class="panel panel-default col-xs-10 col-xs-offset-1"> 
		<h2>{{ $type }}</h2>
		<div class="col-sm-2">
			<script>
			var data = [];
			</script>

			<?php $count = 0; $single_type = 0; $dual_type = 0; $hp_total = 0; 
				  $attack_total = 0; $defense_total = 0; $sp_atk_total = 0; 
				  $sp_def_total = 0; $speed_total = 0;
			?>		

			@foreach ($pokemon as $pm)
			<div class="poke-cell {{ $pm->name }}">
				<?php $total = $pm->attack + $pm->defense + $pm->sp_atk + $pm->sp_def + $pm->speed ?>
				<div>
					<span class="name">{{ $pm->name }}</span><br>
					<span class="{{ $pm->type_a }}">{{ $pm->type_a }}</span> <span class="{{ $pm->type_b }}">{{ $pm->type_b }}</span>
				</div>

				<div class="total">{{ $pm->attack }} {{ $pm->defense }} {{ $pm->sp_atk }} {{ $pm->sp_def }} {{ $pm->speed }}</div>
			

				@if ($pm->type_b == "")
					<?php $single_type++; ?>
				@else 
					<?php $dual_type++; ?>
				@endif
				
				<?php 
				$hp_total += $pm->hp;
				$attack_total += $pm->attack;
				$defense_total += $pm->defense;
				$sp_atk_total += $pm->sp_atk;
				$sp_def_total += $pm->sp_def;
				$speed_total += $pm->speed;
				$count++; 
				?>
				<script>
				data.push(<?php echo json_encode($pm) ?>);
				</script>
			</div>
			@endforeach
		</div>		
		<?php
		$hp_avg = round($hp_total / $count);
		$attack_avg = round($attack_total / $count);
		$defense_avg = round($defense_total / $count);
		$sp_atk_avg = round($sp_atk_total / $count);
		$sp_def_avg = round($sp_def_total / $count);
		$speed_avg = round($speed_total / $count);
		?>
		<div class="col-sm-10 average">
			<div class="statistic">
				<div class="number">{{ $hp_avg }}</div>
				<div>Average HP</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $attack_avg }}</div>
				<div>Average Attack</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $defense_avg }}</div>
				<div>Average Defense</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $sp_atk_avg }}</div>
				<div>Average Sp. Atk</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $sp_def_avg }}</div>
				<div>Average Sp. Def</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $speed_avg }}</div>
				<div>Average Speed</div>
			</div>												
		</div>	

	
		<div class="col-sm-10">
			<div id="data"></div>
		</div>

		<div class="col-sm-10">
			<div class="statistic">
				<div class="number">{{ $count }}</div>
				<div>{{ $type }} Pokémon</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $single_type }}</div>
				<div>Single Types</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $dual_type }}</div>
				<div>Dual Types</div>
			</div>
		</div>	
		<div class="col-sm-10">
			<svg id="test" version="1.1" xmlns="http://www.w3.org/2000/svg" width="500" height="500"></svg>
		</div>
	</div>
</div>
<script src="{{ asset('js/d3.v3.min.js') }}"></script>
<script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
<script src="{{ asset('js/scatter-plot.js') }}"></script>
<script>
$(document).ready(function() {
	var pokemon = [];

	for(var i = 0; i < data.length; i++) {
		pokemon[i] = data[i]["name"];
	}

	console.log(pokemon);

	var s = Snap("#test");
	var rect = s.rect(10, 10, 100, 100); 
	$('.Parasect').click(function() {
		rect.toggleClass('test');
	});

	var test = Snap('#svg');

	var paths = test.selectAll("g.pm path");

	var circles = test.selectAll("circle");

	for (var i=0, j=0; i < circles.length; i+=6, j++) {
		circles[i].addClass(pokemon[j]);
		circles[i+1].addClass(pokemon[j]);
		circles[i+2].addClass(pokemon[j]);
		circles[i+3].addClass(pokemon[j]);
		circles[i+4].addClass(pokemon[j]);
		circles[i+5].addClass(pokemon[j]);
	}

	for (var i = 0; i < pokemon.length; i++) {
		highlight(pokemon[i]);
	}

	function highlight(pm) {
		$("div."+pm).click(function() {
			$(this).toggleClass("selected");
			var path = test.select("path."+pm);
			path.toggleClass("highlight");
			var circles = test.selectAll("circle."+pm);
			console.log(circles);
			for(var i=0; i< circles.length; i++) {
				circles[i].toggleClass("highlight-circle");
			}
			//circle.toggleClass("highlight-circle");

		});
	}

});


</script>
@stop