<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Model::unguard();

		// $this->call('UserTableSeeder');

		$this->call('PokemonTableSeeder');
	}

}

class PokemonTableSeeder extends Seeder {
	public function run()
	{
		DB::table('pokemon')->delete();

		DB::table('pokemon')->insert(array(
			array('name'=>'Bulbasaur', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/bulbasaur.png',
			'hp'=>'45', 'attack'=>'49', 'defense'=>'49', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'45'),

			array('name'=>'Ivysaur', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/ivysaur.png',
			'hp'=>'60', 'attack'=>'62', 'defense'=>'63', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'60'),

			array('name'=>'Venusaur', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/venusaur.png',
			'hp'=>'80', 'attack'=>'82', 'defense'=>'83', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'80'),

			array('name'=>'Charmander', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/charmander.png',
			'hp'=>'39', 'attack'=>'52', 'defense'=>'43', 'sp_atk'=>'60', 'sp_def'=>'50', 'speed'=>'65'),

			array('name'=>'Charmeleon', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/charmeleon.png',
			'hp'=>'58', 'attack'=>'64', 'defense'=>'58', 'sp_atk'=>'80', 'sp_def'=>'65', 'speed'=>'80'),

			array('name'=>'Charizard', 'type_a'=>'Fire', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/charizard.png',
			'hp'=>'78', 'attack'=>'84', 'defense'=>'78', 'sp_atk'=>'109', 'sp_def'=>'85', 'speed'=>'100'),

			array('name'=>'Squirtle', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/squirtle.png',
			'hp'=>'44', 'attack'=>'48', 'defense'=>'65', 'sp_atk'=>'50', 'sp_def'=>'64', 'speed'=>'43'),

			array('name'=>'Wartortle', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/wartortle.png',
			'hp'=>'59', 'attack'=>'63', 'defense'=>'80', 'sp_atk'=>'65', 'sp_def'=>'80', 'speed'=>'58'),

			array('name'=>'Blastoise', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/blastoise.png',
			'hp'=>'79', 'attack'=>'83', 'defense'=>'100', 'sp_atk'=>'85', 'sp_def'=>'105', 'speed'=>'78'),

			array('name'=>'Caterpie', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/caterpie.png',
			'hp'=>'45', 'attack'=>'30', 'defense'=>'35', 'sp_atk'=>'20', 'sp_def'=>'20', 'speed'=>'45'),

			array('name'=>'Metapod', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/metapod.png',
			'hp'=>'50', 'attack'=>'20', 'defense'=>'55', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'30'),

			array('name'=>'Butterfree', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/butterfree.png',
			'hp'=>'60', 'attack'=>'45', 'defense'=>'50', 'sp_atk'=>'90', 'sp_def'=>'80', 'speed'=>'70'),

			array('name'=>'Weedle', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/weedle.png',
			'hp'=>'40', 'attack'=>'35', 'defense'=>'30', 'sp_atk'=>'20', 'sp_def'=>'20', 'speed'=>'50'),

			array('name'=>'Kakuna', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/kakuna.png',
			'hp'=>'45', 'attack'=>'25', 'defense'=>'50', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'35'),

			array('name'=>'Beedrill', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/beedrill.png',
			'hp'=>'65', 'attack'=>'90', 'defense'=>'40', 'sp_atk'=>'45', 'sp_def'=>'80', 'speed'=>'75'),
			array('name'=>'Pidgey', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/pidg
				ey.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'40', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'56'),

			array('name'=>'Pidgeotto', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/pidgeotto.png',
			'hp'=>'63', 'attack'=>'60', 'defense'=>'55', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'71'),

			array('name'=>'Pidgeot', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/pidgeot.png',
			'hp'=>'83', 'attack'=>'80', 'defense'=>'75', 'sp_atk'=>'70', 'sp_def'=>'70', 'speed'=>'101'),

			array('name'=>'Rattata', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/rattata.png',
			'hp'=>'30', 'attack'=>'56', 'defense'=>'35', 'sp_atk'=>'25', 'sp_def'=>'35', 'speed'=>'72'),

			array('name'=>'Raticate', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/raticate.png',
			'hp'=>'55', 'attack'=>'81', 'defense'=>'60', 'sp_atk'=>'50', 'sp_def'=>'70', 'speed'=>'97'),

			array('name'=>'Spearow', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/spearow.png',
			'hp'=>'40', 'attack'=>'60', 'defense'=>'30', 'sp_atk'=>'31', 'sp_def'=>'31', 'speed'=>'70'),

			array('name'=>'Fearow', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/fearow.png',
			'hp'=>'65', 'attack'=>'90', 'defense'=>'65', 'sp_atk'=>'61', 'sp_def'=>'61', 'speed'=>'100'),

			array('name'=>'Ekans', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/ekans.png',
			'hp'=>'35', 'attack'=>'60', 'defense'=>'44', 'sp_atk'=>'40', 'sp_def'=>'54', 'speed'=>'55'),

			array('name'=>'Arbok', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/arbok.png',
			'hp'=>'60', 'attack'=>'85', 'defense'=>'69', 'sp_atk'=>'65', 'sp_def'=>'79', 'speed'=>'80'),

			array('name'=>'Pikachu', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/pikachu.png',
			'hp'=>'35', 'attack'=>'55', 'defense'=>'40', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'90'),

			array('name'=>'Raichu', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/raichu.png',
			'hp'=>'60', 'attack'=>'90', 'defense'=>'55', 'sp_atk'=>'90', 'sp_def'=>'80', 'speed'=>'110'),

			array('name'=>'Sandshrew', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/sandshrew.png',
			'hp'=>'50', 'attack'=>'75', 'defense'=>'85', 'sp_atk'=>'20', 'sp_def'=>'30', 'speed'=>'40'),

			array('name'=>'Sandslash', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/sandslash.png',
			'hp'=>'75', 'attack'=>'100', 'defense'=>'110', 'sp_atk'=>'45', 'sp_def'=>'55', 'speed'=>'65'),

			array('name'=>'Nidoran (female)', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/nidoran-f.png',
			'hp'=>'55', 'attack'=>'45', 'defense'=>'72', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'41'),

			array('name'=>'Nidorina', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/nidorina.png',
			'hp'=>'70', 'attack'=>'62', 'defense'=>'67', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'56'),

			array('name'=>'Nidoqueen', 'type_a'=>'Poison', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/nidoqueen.png',
			'hp'=>'90', 'attack'=>'92', 'defense'=>'87', 'sp_atk'=>'75', 'sp_def'=>'85', 'speed'=>'76'),

			array('name'=>'Nidoran (male)', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/nidoran-m.png',
			'hp'=>'46', 'attack'=>'57', 'defense'=>'40', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'50'),

			array('name'=>'Nidorino', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/nidorino.png',
			'hp'=>'61', 'attack'=>'72', 'defense'=>'57', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'65'),

			array('name'=>'Nidoking', 'type_a'=>'Poison', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/nidoking.png',
			'hp'=>'81', 'attack'=>'102', 'defense'=>'77', 'sp_atk'=>'85', 'sp_def'=>'75', 'speed'=>'85'),

			array('name'=>'Clefairy', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/clefairy.png',
			'hp'=>'70', 'attack'=>'45', 'defense'=>'48', 'sp_atk'=>'60', 'sp_def'=>'65', 'speed'=>'35'),

			array('name'=>'Clefable', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/clefable.png',
			'hp'=>'95', 'attack'=>'70', 'defense'=>'73', 'sp_atk'=>'95', 'sp_def'=>'90', 'speed'=>'60'),

			array('name'=>'Vulpix', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/vulpix.png',
			'hp'=>'38', 'attack'=>'41', 'defense'=>'40', 'sp_atk'=>'50', 'sp_def'=>'65', 'speed'=>'65'),

			array('name'=>'Ninetales', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/ninetales.png',
			'hp'=>'73', 'attack'=>'76', 'defense'=>'75', 'sp_atk'=>'81', 'sp_def'=>'100', 'speed'=>'100'),

			array('name'=>'Jigglypuff', 'type_a'=>'Normal', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/jigglypuff.png',
			'hp'=>'115', 'attack'=>'45', 'defense'=>'20', 'sp_atk'=>'45', 'sp_def'=>'25', 'speed'=>'20'),

			array('name'=>'Wigglytuff', 'type_a'=>'Normal', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/wigglytuff.png',
			'hp'=>'140', 'attack'=>'70', 'defense'=>'45', 'sp_atk'=>'85', 'sp_def'=>'50', 'speed'=>'45'),

			array('name'=>'Zubat', 'type_a'=>'Poison', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/zubat.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'30', 'sp_atk'=>'30', 'sp_def'=>'40', 'speed'=>'55'),

			array('name'=>'Golbat', 'type_a'=>'Poison', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/golbat.png',
			'hp'=>'75', 'attack'=>'80', 'defense'=>'70', 'sp_atk'=>'65', 'sp_def'=>'75', 'speed'=>'90'),

			array('name'=>'Oddish', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/oddish.png',
			'hp'=>'45', 'attack'=>'50', 'defense'=>'55', 'sp_atk'=>'75', 'sp_def'=>'65', 'speed'=>'35'),

			array('name'=>'Gloom', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/gloom.png',
			'hp'=>'60', 'attack'=>'65', 'defense'=>'70', 'sp_atk'=>'85', 'sp_def'=>'75', 'speed'=>'40'),

			array('name'=>'Vileplume', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/vileplume.png',
			'hp'=>'75', 'attack'=>'80', 'defense'=>'85', 'sp_atk'=>'110', 'sp_def'=>'90', 'speed'=>'50'),

			array('name'=>'Paras', 'type_a'=>'Bug', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/paras.png',
			'hp'=>'35', 'attack'=>'70', 'defense'=>'55', 'sp_atk'=>'45', 'sp_def'=>'55', 'speed'=>'25'),

			array('name'=>'Venonat', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/venonat.png',
			'hp'=>'60', 'attack'=>'55', 'defense'=>'50', 'sp_atk'=>'40', 'sp_def'=>'55', 'speed'=>'45'),

			array('name'=>'Venomoth', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/venomoth.png',
			'hp'=>'70', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'90', 'sp_def'=>'75', 'speed'=>'90'),

			array('name'=>'Diglett', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/diglett.png',
			'hp'=>'10', 'attack'=>'55', 'defense'=>'25', 'sp_atk'=>'35', 'sp_def'=>'45', 'speed'=>'90'),

			array('name'=>'Dugtrio', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/dugtrio.png',
			'hp'=>'35', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'50', 'sp_def'=>'70', 'speed'=>'120'),

			array('name'=>'Meowth', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/meowth.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'35', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'90'),

			array('name'=>'Persian', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/persian.png',
			'hp'=>'65', 'attack'=>'70', 'defense'=>'60', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'115'),

			array('name'=>'Psyduck', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/psyduck.png',
			'hp'=>'50', 'attack'=>'52', 'defense'=>'48', 'sp_atk'=>'65', 'sp_def'=>'50', 'speed'=>'55'),

			array('name'=>'Golduck', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/golduck.png',
			'hp'=>'80', 'attack'=>'82', 'defense'=>'78', 'sp_atk'=>'95', 'sp_def'=>'80', 'speed'=>'85'),

			array('name'=>'Mankey', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/mankey.png',
			'hp'=>'40', 'attack'=>'80', 'defense'=>'35', 'sp_atk'=>'35', 'sp_def'=>'45', 'speed'=>'70'),

			array('name'=>'Primeape', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/primeape.png',
			'hp'=>'65', 'attack'=>'105', 'defense'=>'60', 'sp_atk'=>'60', 'sp_def'=>'70', 'speed'=>'95'),

			array('name'=>'Growlithe', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/growlithe.png',
			'hp'=>'55', 'attack'=>'70', 'defense'=>'45', 'sp_atk'=>'70', 'sp_def'=>'50', 'speed'=>'60'),

			array('name'=>'Arcanine', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/arcanine.png',
			'hp'=>'90', 'attack'=>'110', 'defense'=>'80', 'sp_atk'=>'100', 'sp_def'=>'80', 'speed'=>'95'),

			array('name'=>'Poliwag', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/poliwag.png',
			'hp'=>'40', 'attack'=>'50', 'defense'=>'40', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'90'),

			array('name'=>'Poliwhirl', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/poliwhirl.png',
			'hp'=>'65', 'attack'=>'65', 'defense'=>'65', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'90'),

			array('name'=>'Poliwrath', 'type_a'=>'Water', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/poliwrath.png',
			'hp'=>'90', 'attack'=>'95', 'defense'=>'95', 'sp_atk'=>'70', 'sp_def'=>'90', 'speed'=>'70'),

			array('name'=>'Abra', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/abra.png',
			'hp'=>'25', 'attack'=>'20', 'defense'=>'15', 'sp_atk'=>'105', 'sp_def'=>'55', 'speed'=>'90'),

			array('name'=>'Kadabra', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/kadabra.png',
			'hp'=>'40', 'attack'=>'35', 'defense'=>'30', 'sp_atk'=>'120', 'sp_def'=>'70', 'speed'=>'105'),
			
			array('name'=>'Alakazam', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/alakazam.png',
			'hp'=>'55', 'attack'=>'50', 'defense'=>'45', 'sp_atk'=>'135', 'sp_def'=>'90', 'speed'=>'120'),

			array('name'=>'Machop', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/machop.png',
			'hp'=>'70', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'35'),

			array('name'=>'Machoke', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/machoke.png',
			'hp'=>'80', 'attack'=>'100', 'defense'=>'70', 'sp_atk'=>'50', 'sp_def'=>'60', 'speed'=>'45'),

			array('name'=>'Machamp', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/machamp.png',
			'hp'=>'90', 'attack'=>'130', 'defense'=>'80', 'sp_atk'=>'65', 'sp_def'=>'85', 'speed'=>'55'),

			array('name'=>'Bellsprout', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/bellsprout.png',
			'hp'=>'50', 'attack'=>'75', 'defense'=>'35', 'sp_atk'=>'70', 'sp_def'=>'30', 'speed'=>'40'),

			array('name'=>'Weepinbell', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/weepinbell.png',
			'hp'=>'65', 'attack'=>'90', 'defense'=>'50', 'sp_atk'=>'85', 'sp_def'=>'45', 'speed'=>'55'),

			array('name'=>'Victreebell', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/victreebell.png',
			'hp'=>'80', 'attack'=>'105', 'defense'=>'65', 'sp_atk'=>'100', 'sp_def'=>'70', 'speed'=>'70'),

			array('name'=>'Tentacool', 'type_a'=>'Water', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/tentacool.png',
			'hp'=>'40', 'attack'=>'40', 'defense'=>'35', 'sp_atk'=>'50', 'sp_def'=>'100', 'speed'=>'70'),

			array('name'=>'Tentacruel', 'type_a'=>'Water', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/tentacruel.png',
			'hp'=>'80', 'attack'=>'70', 'defense'=>'65', 'sp_atk'=>'65', 'sp_def'=>'80', 'speed'=>'120'),

			array('name'=>'Geodude', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/geodude.png',
			'hp'=>'40', 'attack'=>'80', 'defense'=>'100', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'20'),

			array('name'=>'Graveler', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/graveler.png',
			'hp'=>'55', 'attack'=>'95', 'defense'=>'115', 'sp_atk'=>'45', 'sp_def'=>'45', 'speed'=>'35'),

			array('name'=>'Golem', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/golem.png',
			'hp'=>'80', 'attack'=>'120', 'defense'=>'130', 'sp_atk'=>'55', 'sp_def'=>'65', 'speed'=>'45'),

			array('name'=>'Ponyta', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/ponyta.png',
			'hp'=>'50', 'attack'=>'85', 'defense'=>'55', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'90'),

			array('name'=>'Rapidash', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/rapidash.png',
			'hp'=>'65', 'attack'=>'100', 'defense'=>'70', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'105'),

			array('name'=>'Slowpoke', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/slowpoke.png',
			'hp'=>'90', 'attack'=>'65', 'defense'=>'65', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'15'),

			array('name'=>'Slowbro', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/slowbro.png',
			'hp'=>'95', 'attack'=>'75', 'defense'=>'110', 'sp_atk'=>'100', 'sp_def'=>'80', 'speed'=>'30'),

			array('name'=>'Magnemite', 'type_a'=>'Electric', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/magnemite.png',
			'hp'=>'25', 'attack'=>'35', 'defense'=>'70', 'sp_atk'=>'95', 'sp_def'=>'55', 'speed'=>'45'),

			array('name'=>'Magneton', 'type_a'=>'Electric', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/magneton.png',
			'hp'=>'50', 'attack'=>'65', 'defense'=>'95', 'sp_atk'=>'102', 'sp_def'=>'70', 'speed'=>'70'),

			array('name'=>"Farfetch'd", 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/farfetchd.png',
			'hp'=>'52', 'attack'=>'65', 'defense'=>'55', 'sp_atk'=>'58', 'sp_def'=>'62', 'speed'=>'60'),

			array('name'=>'Doduo', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/doduo.png',
			'hp'=>'35', 'attack'=>'85', 'defense'=>'45', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'75'),

			array('name'=>'Dodrio', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/dodrio.png',
			'hp'=>'60', 'attack'=>'110', 'defense'=>'70', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'100'),

			array('name'=>'Seel', 'type_a'=>'Water', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/seel.png',
			'hp'=>'65', 'attack'=>'45', 'defense'=>'55', 'sp_atk'=>'45', 'sp_def'=>'70', 'speed'=>'45'),

			array('name'=>'Dewgong', 'type_a'=>'Water', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/dewgong.png',
			'hp'=>'90', 'attack'=>'70', 'defense'=>'80', 'sp_atk'=>'70', 'sp_def'=>'95', 'speed'=>'70'),

			array('name'=>'Grimer', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/grimer.png',
			'hp'=>'80', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'40', 'sp_def'=>'50', 'speed'=>'25'),

			array('name'=>'Shellder', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/shellder.png',
			'hp'=>'30', 'attack'=>'65', 'defense'=>'100', 'sp_atk'=>'45', 'sp_def'=>'25', 'speed'=>'40'),

			array('name'=>'Cloyster', 'type_a'=>'Water', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/cloyster.png',
			'hp'=>'50', 'attack'=>'95', 'defense'=>'180', 'sp_atk'=>'85', 'sp_def'=>'45', 'speed'=>'70'),

			array('name'=>'Gastly', 'type_a'=>'Ghost', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/gastly.png',
			'hp'=>'30', 'attack'=>'35', 'defense'=>'30', 'sp_atk'=>'100', 'sp_def'=>'35', 'speed'=>'40'),

			array('name'=>'Haunter', 'type_a'=>'Ghost', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/haunter.png',
			'hp'=>'45', 'attack'=>'50', 'defense'=>'45', 'sp_atk'=>'115', 'sp_def'=>'55', 'speed'=>'95'),

			array('name'=>'Gengar', 'type_a'=>'Ghost', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/gengar.png',
			'hp'=>'60', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'130', 'sp_def'=>'75', 'speed'=>'110'),

			array('name'=>'Onix', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/onix.png',
			'hp'=>'35', 'attack'=>'45', 'defense'=>'160', 'sp_atk'=>'30', 'sp_def'=>'45', 'speed'=>'70'),

			array('name'=>'Drowzee', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/drowzee.png',
			'hp'=>'60', 'attack'=>'48', 'defense'=>'45', 'sp_atk'=>'43', 'sp_def'=>'90', 'speed'=>'42'),

			array('name'=>'Hypno', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/hypno.png',
			'hp'=>'85', 'attack'=>'73', 'defense'=>'70', 'sp_atk'=>'73', 'sp_def'=>'115', 'speed'=>'67'),

			array('name'=>'Krabby', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/krabby.png',
			'hp'=>'30', 'attack'=>'105', 'defense'=>'90', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'50'),

			array('name'=>'Kingler', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/kingler.png',
			'hp'=>'55', 'attack'=>'130', 'defense'=>'115', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'75'),

			array('name'=>'Voltorb', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/voltorb.png',
			'hp'=>'40', 'attack'=>'30', 'defense'=>'50', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'100'),

			array('name'=>'Electrode', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/electrode.png',
			'hp'=>'60', 'attack'=>'50', 'defense'=>'70', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'140'),

			array('name'=>'Exeggcute', 'type_a'=>'Grass', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/exeggcute.png',
			'hp'=>'60', 'attack'=>'40', 'defense'=>'80', 'sp_atk'=>'60', 'sp_def'=>'45', 'speed'=>'40'),

			array('name'=>'Exeggutor', 'type_a'=>'Grass', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/exeggutor.png',
			'hp'=>'95', 'attack'=>'95', 'defense'=>'85', 'sp_atk'=>'125', 'sp_def'=>'65', 'speed'=>'55'),

			array('name'=>'Cubone', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/cubone.png',
			'hp'=>'50', 'attack'=>'50', 'defense'=>'95', 'sp_atk'=>'40', 'sp_def'=>'50', 'speed'=>'35'),

			array('name'=>'Marowak', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/marowak.png',
			'hp'=>'60', 'attack'=>'80', 'defense'=>'110', 'sp_atk'=>'50', 'sp_def'=>'80', 'speed'=>'45'),

			array('name'=>'Hitmonlee', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/hitmonlee.png',
			'hp'=>'50', 'attack'=>'120', 'defense'=>'53', 'sp_atk'=>'35', 'sp_def'=>'110', 'speed'=>'87'),

			array('name'=>'Hitmonchan', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/hitmonchan.png',
			'hp'=>'50', 'attack'=>'105', 'defense'=>'79', 'sp_atk'=>'35', 'sp_def'=>'110', 'speed'=>'76'),

			array('name'=>'Lickitung', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/lickitung.png',
			'hp'=>'90', 'attack'=>'55', 'defense'=>'75', 'sp_atk'=>'60', 'sp_def'=>'75', 'speed'=>'30'),

			array('name'=>'Koffing', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/koffing.png',
			'hp'=>'40', 'attack'=>'65', 'defense'=>'95', 'sp_atk'=>'60', 'sp_def'=>'45', 'speed'=>'35'),

			array('name'=>'Weezing', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/weezing.png',
			'hp'=>'65', 'attack'=>'90', 'defense'=>'120', 'sp_atk'=>'85', 'sp_def'=>'70', 'speed'=>'60'),

			array('name'=>'Rhyhorn', 'type_a'=>'Ground', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/rhyhorn.png',
			'hp'=>'80', 'attack'=>'85', 'defense'=>'95', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'25'),

			array('name'=>'Rhydon', 'type_a'=>'Ground', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/rhydon.png',
			'hp'=>'105', 'attack'=>'130', 'defense'=>'120', 'sp_atk'=>'45', 'sp_def'=>'45', 'speed'=>'40'),

			array('name'=>'Chansey', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/chansey.png',
			'hp'=>'250', 'attack'=>'5', 'defense'=>'5', 'sp_atk'=>'35', 'sp_def'=>'105', 'speed'=>'50'),

			array('name'=>'Tangela', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/tangela.png',
			'hp'=>'65', 'attack'=>'55', 'defense'=>'115', 'sp_atk'=>'100', 'sp_def'=>'40', 'speed'=>'60'),

			array('name'=>'Kangaskhan', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/kangaskhan.png',
			'hp'=>'105', 'attack'=>'95', 'defense'=>'80', 'sp_atk'=>'40', 'sp_def'=>'80', 'speed'=>'90'),

			array('name'=>'Horsea', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/horsea.png',
			'hp'=>'30', 'attack'=>'40', 'defense'=>'70', 'sp_atk'=>'70', 'sp_def'=>'25', 'speed'=>'60'),

			array('name'=>'Seadra', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/seadra.png',
			'hp'=>'55', 'attack'=>'65', 'defense'=>'95', 'sp_atk'=>'95', 'sp_def'=>'45', 'speed'=>'85'),

			array('name'=>'Goldeen', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/goldeen.png',
			'hp'=>'45', 'attack'=>'67', 'defense'=>'60', 'sp_atk'=>'35', 'sp_def'=>'50', 'speed'=>'63'),

			array('name'=>'Seaking', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/seaking.png',
			'hp'=>'80', 'attack'=>'92', 'defense'=>'65', 'sp_atk'=>'65', 'sp_def'=>'80', 'speed'=>'68'),

			array('name'=>'Staryu', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/staryu.png',
			'hp'=>'30', 'attack'=>'45', 'defense'=>'55', 'sp_atk'=>'70', 'sp_def'=>'55', 'speed'=>'85'),

			array('name'=>'Starmie', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/starmie.png',
			'hp'=>'60', 'attack'=>'75', 'defense'=>'85', 'sp_atk'=>'100', 'sp_def'=>'85', 'speed'=>'115'),

			array('name'=>'Mr. Mime', 'type_a'=>'Psychic', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/mr-mime.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'65', 'sp_atk'=>'100', 'sp_def'=>'120', 'speed'=>'90'),

			array('name'=>'Scyther', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/scyther.png',
			'hp'=>'70', 'attack'=>'110', 'defense'=>'80', 'sp_atk'=>'55', 'sp_def'=>'80', 'speed'=>'105'),

			array('name'=>'Jynx', 'type_a'=>'Ice', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/jynx.png',
			'hp'=>'65', 'attack'=>'50', 'defense'=>'35', 'sp_atk'=>'115', 'sp_def'=>'95', 'speed'=>'95'),

			array('name'=>'Electabuzz', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/electabuzz.png',
			'hp'=>'65', 'attack'=>'83', 'defense'=>'57', 'sp_atk'=>'95', 'sp_def'=>'85', 'speed'=>'105'),

			array('name'=>'Magmar', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/magmar.png',
			'hp'=>'65', 'attack'=>'95', 'defense'=>'57', 'sp_atk'=>'100', 'sp_def'=>'85', 'speed'=>'93'),

			array('name'=>'Pinsir', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/pinsir.png',
			'hp'=>'65', 'attack'=>'125', 'defense'=>'100', 'sp_atk'=>'55', 'sp_def'=>'70', 'speed'=>'85'),

			array('name'=>'Tauros', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/tauros.png',
			'hp'=>'75', 'attack'=>'100', 'defense'=>'95', 'sp_atk'=>'40', 'sp_def'=>'70', 'speed'=>'110'),

			array('name'=>'Magikarp', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/magikarp.png',
			'hp'=>'75', 'attack'=>'100', 'defense'=>'95', 'sp_atk'=>'40', 'sp_def'=>'70', 'speed'=>'110'),

			array('name'=>'Gyarados', 'type_a'=>'Water', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/gyarados.png',
			'hp'=>'95', 'attack'=>'125', 'defense'=>'79', 'sp_atk'=>'60', 'sp_def'=>'100', 'speed'=>'81'),

			array('name'=>'Lapras', 'type_a'=>'Water', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/lapras.png',
			'hp'=>'130', 'attack'=>'85', 'defense'=>'80', 'sp_atk'=>'85', 'sp_def'=>'95', 'speed'=>'60'),

			array('name'=>'Ditto', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/ditto.png',
			'hp'=>'48', 'attack'=>'48', 'defense'=>'48', 'sp_atk'=>'48', 'sp_def'=>'48', 'speed'=>'48'),

			array('name'=>'Eevee', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/eevee.png',
			'hp'=>'55', 'attack'=>'55', 'defense'=>'50', 'sp_atk'=>'45', 'sp_def'=>'65', 'speed'=>'55'),

			array('name'=>'Vaporeon', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/vaporeon.png',
			'hp'=>'130', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'110', 'sp_def'=>'95', 'speed'=>'65'),

			array('name'=>'Jolteon', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/jolteon.png',
			'hp'=>'65', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'110', 'sp_def'=>'95', 'speed'=>'130'),

			array('name'=>'Flareon', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/flareon.png',
			'hp'=>'65', 'attack'=>'130', 'defense'=>'60', 'sp_atk'=>'60', 'sp_def'=>'95', 'speed'=>'110'),

			array('name'=>'Porygon', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/porygon.png',
			'hp'=>'65', 'attack'=>'60', 'defense'=>'70', 'sp_atk'=>'85', 'sp_def'=>'75', 'speed'=>'40'),

			array('name'=>'Omanyte', 'type_a'=>'Rock', 'type_b'=>'Water', 'sprite_url'=>'/sprites/omanyte.png',
			'hp'=>'35', 'attack'=>'40', 'defense'=>'100', 'sp_atk'=>'90', 'sp_def'=>'55', 'speed'=>'30'),

			array('name'=>'Omastar', 'type_a'=>'Rock', 'type_b'=>'Water', 'sprite_url'=>'/sprites/omastar.png',
			'hp'=>'70', 'attack'=>'60', 'defense'=>'125', 'sp_atk'=>'115', 'sp_def'=>'70', 'speed'=>'55'),

			array('name'=>'Kabuto', 'type_a'=>'Rock', 'type_b'=>'Water', 'sprite_url'=>'/sprites/kabuto.png',
			'hp'=>'30', 'attack'=>'80', 'defense'=>'90', 'sp_atk'=>'55', 'sp_def'=>'45', 'speed'=>'55'),

			array('name'=>'Kabutops', 'type_a'=>'Rock', 'type_b'=>'Water', 'sprite_url'=>'/sprites/kabutops.png',
			'hp'=>'60', 'attack'=>'115', 'defense'=>'105', 'sp_atk'=>'65', 'sp_def'=>'70', 'speed'=>'80'),

			array('name'=>'Aerodactyl', 'type_a'=>'Rock', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/aerodactyl.png',
			'hp'=>'80', 'attack'=>'105', 'defense'=>'65', 'sp_atk'=>'60', 'sp_def'=>'75', 'speed'=>'130'),

			array('name'=>'Snorlax', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/snorlax.png',
			'hp'=>'160', 'attack'=>'110', 'defense'=>'65', 'sp_atk'=>'65', 'sp_def'=>'110', 'speed'=>'30'),

			array('name'=>'Articuno', 'type_a'=>'Ice', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/articuno.png',
			'hp'=>'90', 'attack'=>'85', 'defense'=>'100', 'sp_atk'=>'95', 'sp_def'=>'125', 'speed'=>'85'),

			array('name'=>'Zapdos', 'type_a'=>'Electric', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/zapdos.png',
			'hp'=>'90', 'attack'=>'90', 'defense'=>'85', 'sp_atk'=>'125', 'sp_def'=>'90', 'speed'=>'100'),

			array('name'=>'Moltres', 'type_a'=>'Fire', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/moltres.png',
			'hp'=>'90', 'attack'=>'100', 'defense'=>'90', 'sp_atk'=>'125', 'sp_def'=>'85', 'speed'=>'90'),

			array('name'=>'Dratini', 'type_a'=>'Dragon', 'type_b'=>'', 'sprite_url'=>'/sprites/dratini.png',
			'hp'=>'41', 'attack'=>'64', 'defense'=>'45', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'50'),

			array('name'=>'Dragonair', 'type_a'=>'Dragon', 'type_b'=>'', 'sprite_url'=>'/sprites/dragonair.png',
			'hp'=>'61', 'attack'=>'84', 'defense'=>'65', 'sp_atk'=>'70', 'sp_def'=>'70', 'speed'=>'70'),

			array('name'=>'Dragonite', 'type_a'=>'Dragon', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/dragonite.png',
			'hp'=>'91', 'attack'=>'134', 'defense'=>'95', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'80'),

			array('name'=>'Mewtwo', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/mewtwo.png',
			'hp'=>'106', 'attack'=>'110', 'defense'=>'90', 'sp_atk'=>'154', 'sp_def'=>'90', 'speed'=>'130'),

			array('name'=>'Mew', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/mew.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'100', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'100'),

			array('name'=>'Chikorita', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/chikorita.png',
			'hp'=>'45', 'attack'=>'49', 'defense'=>'65', 'sp_atk'=>'49', 'sp_def'=>'65', 'speed'=>'45'),

			array('name'=>'Bayleef', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/bayleef.png',
			'hp'=>'60', 'attack'=>'62', 'defense'=>'80', 'sp_atk'=>'63', 'sp_def'=>'80', 'speed'=>'60'),

			array('name'=>'Meganium', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/meganium.png',
			'hp'=>'80', 'attack'=>'82', 'defense'=>'100', 'sp_atk'=>'83', 'sp_def'=>'100', 'speed'=>'80'),

			array('name'=>'Cyndaquill', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/cyndaquill.png',
			'hp'=>'39', 'attack'=>'52', 'defense'=>'43', 'sp_atk'=>'60', 'sp_def'=>'50', 'speed'=>'65'),

			array('name'=>'Quilava', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/quilava.png',
			'hp'=>'58', 'attack'=>'64', 'defense'=>'58', 'sp_atk'=>'80', 'sp_def'=>'65', 'speed'=>'80'),

			array('name'=>'Typhlosion', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/typhlosion.png',
			'hp'=>'78', 'attack'=>'84', 'defense'=>'78', 'sp_atk'=>'109', 'sp_def'=>'85', 'speed'=>'100'),

			array('name'=>'Totodile', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/totodile.png',
			'hp'=>'50', 'attack'=>'65', 'defense'=>'64', 'sp_atk'=>'44', 'sp_def'=>'48', 'speed'=>'43'),

			array('name'=>'Croconaw', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/croconaw.png',
			'hp'=>'65', 'attack'=>'80', 'defense'=>'80', 'sp_atk'=>'59', 'sp_def'=>'63', 'speed'=>'58'),

			array('name'=>'Feraligatr', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/feraligatr.png',
			'hp'=>'50', 'attack'=>'65', 'defense'=>'64', 'sp_atk'=>'44', 'sp_def'=>'48', 'speed'=>'43'),

			array('name'=>'Sentret', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/sentret.png',
			'hp'=>'35', 'attack'=>'46', 'defense'=>'34', 'sp_atk'=>'35', 'sp_def'=>'45', 'speed'=>'20'),

			array('name'=>'Furret', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/furret.png',
			'hp'=>'85', 'attack'=>'76', 'defense'=>'64', 'sp_atk'=>'45', 'sp_def'=>'55', 'speed'=>'90'),

			array('name'=>'Hoothoot', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/hoothoot.png',
			'hp'=>'60', 'attack'=>'30', 'defense'=>'30', 'sp_atk'=>'36', 'sp_def'=>'56', 'speed'=>'50'),

			array('name'=>'Noctowl', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/noctowl.png',
			'hp'=>'100', 'attack'=>'50', 'defense'=>'50', 'sp_atk'=>'76', 'sp_def'=>'96', 'speed'=>'70'),

			array('name'=>'Ledyba', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/ledyba.png',
			'hp'=>'40', 'attack'=>'20', 'defense'=>'30', 'sp_atk'=>'40', 'sp_def'=>'80', 'speed'=>'55'),

			array('name'=>'Ledian', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/ledian.png',
			'hp'=>'55', 'attack'=>'35', 'defense'=>'50', 'sp_atk'=>'55', 'sp_def'=>'110', 'speed'=>'85'),

			array('name'=>'Spinarak', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/spinarak.png',
			'hp'=>'40', 'attack'=>'60', 'defense'=>'40', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'30'),

			array('name'=>'Ariados', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/ariados.png',
			'hp'=>'70', 'attack'=>'90', 'defense'=>'70', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'40'),

			array('name'=>'Crobat', 'type_a'=>'Poison', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/crobat.png',
			'hp'=>'85', 'attack'=>'90', 'defense'=>'80', 'sp_atk'=>'70', 'sp_def'=>'80', 'speed'=>'130'),

			array('name'=>'Chinchou', 'type_a'=>'Water', 'type_b'=>'Electric', 'sprite_url'=>'/sprites/chinchou.png',
			'hp'=>'75', 'attack'=>'38', 'defense'=>'38', 'sp_atk'=>'56', 'sp_def'=>'56', 'speed'=>'67'),

			array('name'=>'Lanturn', 'type_a'=>'Water', 'type_b'=>'Electric', 'sprite_url'=>'/sprites/lanturn.png',
			'hp'=>'125', 'attack'=>'58', 'defense'=>'58', 'sp_atk'=>'76', 'sp_def'=>'76', 'speed'=>'67'),

			array('name'=>'Pichu', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/pichu.png',
			'hp'=>'20', 'attack'=>'40', 'defense'=>'15', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'60'),

			array('name'=>'Cleffa', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/cleffa.png',
			'hp'=>'50', 'attack'=>'25', 'defense'=>'28', 'sp_atk'=>'45', 'sp_def'=>'55', 'speed'=>'15'),

			array('name'=>'Igglybuff', 'type_a'=>'Normal', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/igglybuff.png',
			'hp'=>'90', 'attack'=>'30', 'defense'=>'15', 'sp_atk'=>'40', 'sp_def'=>'20', 'speed'=>'15'),

			array('name'=>'Togepi', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/togepi.png',
			'hp'=>'35', 'attack'=>'20', 'defense'=>'65', 'sp_atk'=>'40', 'sp_def'=>'65', 'speed'=>'20'),

			array('name'=>'Togetic', 'type_a'=>'Fairy', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/togetic.png',
			'hp'=>'55', 'attack'=>'40', 'defense'=>'85', 'sp_atk'=>'80', 'sp_def'=>'105', 'speed'=>'40'),

			array('name'=>'Natu', 'type_a'=>'Psychic', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/natu.png',
			'hp'=>'40', 'attack'=>'50', 'defense'=>'45', 'sp_atk'=>'70', 'sp_def'=>'45', 'speed'=>'70'),

			array('name'=>'Xatu', 'type_a'=>'Psychic', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/xatu.png',
			'hp'=>'65', 'attack'=>'75', 'defense'=>'70', 'sp_atk'=>'95', 'sp_def'=>'70', 'speed'=>'95'),

			array('name'=>'Mareep', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/mareep.png',
			'hp'=>'55', 'attack'=>'40', 'defense'=>'40', 'sp_atk'=>'65', 'sp_def'=>'45', 'speed'=>'35'),

			array('name'=>'Faafy', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/flaafy.png',
			'hp'=>'70', 'attack'=>'55', 'defense'=>'55', 'sp_atk'=>'80', 'sp_def'=>'60', 'speed'=>'45'),

			array('name'=>'Ampharos', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/ampharos.png',
			'hp'=>'90', 'attack'=>'75', 'defense'=>'85', 'sp_atk'=>'115', 'sp_def'=>'90', 'speed'=>'55'),

			array('name'=>'Bellossom', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/bellossom.png',
			'hp'=>'75', 'attack'=>'80', 'defense'=>'95', 'sp_atk'=>'90', 'sp_def'=>'100', 'speed'=>'50'),

			array('name'=>'Marill', 'type_a'=>'Water', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/marill.png',
			'hp'=>'70', 'attack'=>'20', 'defense'=>'50', 'sp_atk'=>'20', 'sp_def'=>'50', 'speed'=>'40'),

			array('name'=>'Azumarill', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/azumarill.png',
			'hp'=>'100', 'attack'=>'50', 'defense'=>'80', 'sp_atk'=>'60', 'sp_def'=>'80', 'speed'=>'50'),

			array('name'=>'Sudowoodo', 'type_a'=>'Rock', 'type_b'=>'', 'sprite_url'=>'/sprites/sudowoodo.png',
			'hp'=>'70', 'attack'=>'100', 'defense'=>'115', 'sp_atk'=>'30', 'sp_def'=>'65', 'speed'=>'30'),

			array('name'=>'Politoed', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/politoed.png',
			'hp'=>'90', 'attack'=>'75', 'defense'=>'75', 'sp_atk'=>'90', 'sp_def'=>'100', 'speed'=>'70'),

			array('name'=>'Hoppip', 'type_a'=>'Grass', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/hoppip.png',
			'hp'=>'35', 'attack'=>'35', 'defense'=>'40', 'sp_atk'=>'35', 'sp_def'=>'55', 'speed'=>'50'),

			array('name'=>'Skiploom', 'type_a'=>'Grass', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/skiploom.png',
			'hp'=>'55', 'attack'=>'45', 'defense'=>'50', 'sp_atk'=>'45', 'sp_def'=>'65', 'speed'=>'80'),

			array('name'=>'Jumpluff', 'type_a'=>'Grass', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/jumpluff.png',
			'hp'=>'75', 'attack'=>'55', 'defense'=>'70', 'sp_atk'=>'55', 'sp_def'=>'95', 'speed'=>'110'),

			array('name'=>'Aipom', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/aipom.png',
			'hp'=>'55', 'attack'=>'70', 'defense'=>'55', 'sp_atk'=>'40', 'sp_def'=>'55', 'speed'=>'85'),

			array('name'=>'Sunkern', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/sunkern.png',
			'hp'=>'30', 'attack'=>'30', 'defense'=>'30', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'30'),

			array('name'=>'Sunflora', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/sunflora.png',
			'hp'=>'75', 'attack'=>'75', 'defense'=>'55', 'sp_atk'=>'105', 'sp_def'=>'85', 'speed'=>'30'),

			array('name'=>'Yanma', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/yanma.png',
			'hp'=>'65', 'attack'=>'65', 'defense'=>'45', 'sp_atk'=>'75', 'sp_def'=>'45', 'speed'=>'95'),

			array('name'=>'Wooper', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/wooper.png',
			'hp'=>'55', 'attack'=>'45', 'defense'=>'45', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'15'),

			array('name'=>'Quagsire', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/quagsire.png',
			'hp'=>'95', 'attack'=>'85', 'defense'=>'85', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'35'),

			array('name'=>'Espeon', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/espeon.png',
			'hp'=>'65', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'130', 'sp_def'=>'95', 'speed'=>'110'),

			array('name'=>'Umbreon', 'type_a'=>'Dark', 'type_b'=>'', 'sprite_url'=>'/sprites/umbreon.png',
			'hp'=>'95', 'attack'=>'65', 'defense'=>'110', 'sp_atk'=>'60', 'sp_def'=>'130', 'speed'=>'65'),

			array('name'=>'Murkrow', 'type_a'=>'Dark', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/murkrow.png',
			'hp'=>'60', 'attack'=>'85', 'defense'=>'42', 'sp_atk'=>'85', 'sp_def'=>'42', 'speed'=>'91'),

			array('name'=>'Slowking', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/slowking.png',
			'hp'=>'95', 'attack'=>'75', 'defense'=>'80', 'sp_atk'=>'100', 'sp_def'=>'110', 'speed'=>'30'),

			array('name'=>'Misdreavus', 'type_a'=>'Ghost', 'type_b'=>'', 'sprite_url'=>'/sprites/misdreavus.png',
			'hp'=>'60', 'attack'=>'60', 'defense'=>'60', 'sp_atk'=>'85', 'sp_def'=>'85', 'speed'=>'85'),

			array('name'=>'Unown', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/unown.png',
			'hp'=>'48', 'attack'=>'72', 'defense'=>'48', 'sp_atk'=>'72', 'sp_def'=>'48', 'speed'=>'48'),

			array('name'=>'Wobbuffet', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/wobbuffet.png',
			'hp'=>'190', 'attack'=>'33', 'defense'=>'58', 'sp_atk'=>'33', 'sp_def'=>'58', 'speed'=>'33'),

			array('name'=>'Girafarig', 'type_a'=>'Normal', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/girafarig.png',
			'hp'=>'70', 'attack'=>'80', 'defense'=>'65', 'sp_atk'=>'90', 'sp_def'=>'65', 'speed'=>'85'),

			array('name'=>'Pineco', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/pineco.png',
			'hp'=>'50', 'attack'=>'65', 'defense'=>'90', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'15'),

			array('name'=>'Forretress', 'type_a'=>'Bug', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/forretress.png',
			'hp'=>'75', 'attack'=>'90', 'defense'=>'140', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'40'),

			array('name'=>'Dunsparce', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/dunsparce.png',
			'hp'=>'100', 'attack'=>'70', 'defense'=>'70', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'45'),

			array('name'=>'Gligar', 'type_a'=>'Ground', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/gligar.png',
			'hp'=>'65', 'attack'=>'75', 'defense'=>'105', 'sp_atk'=>'35', 'sp_def'=>'65', 'speed'=>'85'),

			array('name'=>'Steelix', 'type_a'=>'Steel', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/steelix.png',
			'hp'=>'75', 'attack'=>'85', 'defense'=>'200', 'sp_atk'=>'55', 'sp_def'=>'65', 'speed'=>'30'),

			array('name'=>'Snubbull', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/snubbull.png',
			'hp'=>'60', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'30'),

			array('name'=>'Granbull', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/granbull.png',
			'hp'=>'90', 'attack'=>'120', 'defense'=>'75', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'45'),

			array('name'=>'Qwilfish', 'type_a'=>'Water', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/qwilfish.png',
			'hp'=>'65', 'attack'=>'95', 'defense'=>'75', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'45'),

			array('name'=>'Scizor', 'type_a'=>'Bug', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/scizor.png',
			'hp'=>'70', 'attack'=>'130', 'defense'=>'100', 'sp_atk'=>'55', 'sp_def'=>'80', 'speed'=>'65'),

			array('name'=>'Shuckle', 'type_a'=>'Bug', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/shuckle.png',
			'hp'=>'20', 'attack'=>'10', 'defense'=>'230', 'sp_atk'=>'10', 'sp_def'=>'230', 'speed'=>'5'),

			array('name'=>'Heracross', 'type_a'=>'Bug', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/heracross.png',
			'hp'=>'80', 'attack'=>'125', 'defense'=>'75', 'sp_atk'=>'40', 'sp_def'=>'95', 'speed'=>'85'),

			array('name'=>'Sneasel', 'type_a'=>'Dark', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/sneasel.png',
			'hp'=>'55', 'attack'=>'95', 'defense'=>'55', 'sp_atk'=>'35', 'sp_def'=>'75', 'speed'=>'115'),

			array('name'=>'Teddiursa', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/teddiursa.png',
			'hp'=>'60', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'40'),

			array('name'=>'Ursaring', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/ursaring.png',
			'hp'=>'90', 'attack'=>'130', 'defense'=>'75', 'sp_atk'=>'75', 'sp_def'=>'75', 'speed'=>'55'),

			array('name'=>'Slugma', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/slugma.png',
			'hp'=>'40', 'attack'=>'40', 'defense'=>'40', 'sp_atk'=>'70', 'sp_def'=>'40', 'speed'=>'20'),
			
			array('name'=>'Magcargo', 'type_a'=>'Fire', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/magcargo.png',
			'hp'=>'50', 'attack'=>'50', 'defense'=>'120', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'30'),

			array('name'=>'Swinub', 'type_a'=>'Ice', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/swinub.png',
			'hp'=>'50', 'attack'=>'50', 'defense'=>'40', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'50'),

			array('name'=>'Piloswine', 'type_a'=>'Ice', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/piloswine.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'80', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'50'),

			array('name'=>'Corsola', 'type_a'=>'Water', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/corsola.png',
			'hp'=>'55', 'attack'=>'85', 'defense'=>'85', 'sp_atk'=>'65', 'sp_def'=>'85', 'speed'=>'35'),

			array('name'=>'Remoraid', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/remoraid.png',
			'hp'=>'35', 'attack'=>'65', 'defense'=>'35', 'sp_atk'=>'65', 'sp_def'=>'35', 'speed'=>'65'),

			array('name'=>'Slugma', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/slugma.png',
			'hp'=>'40', 'attack'=>'40', 'defense'=>'40', 'sp_atk'=>'70', 'sp_def'=>'40', 'speed'=>'20'),

			array('name'=>'Octillery', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/octillery.png',
			'hp'=>'75', 'attack'=>'105', 'defense'=>'75', 'sp_atk'=>'105', 'sp_def'=>'75', 'speed'=>'45'),

			array('name'=>'Delibird', 'type_a'=>'Ice', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/delibird.png',
			'hp'=>'45', 'attack'=>'55', 'defense'=>'45', 'sp_atk'=>'65', 'sp_def'=>'45', 'speed'=>'75'),

			array('name'=>'Mantine', 'type_a'=>'Water', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/mantine.png',
			'hp'=>'65', 'attack'=>'40', 'defense'=>'70', 'sp_atk'=>'80', 'sp_def'=>'140', 'speed'=>'70'),

			array('name'=>'Skarmory', 'type_a'=>'Steel', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/skarmory.png',
			'hp'=>'65', 'attack'=>'80', 'defense'=>'140', 'sp_atk'=>'40', 'sp_def'=>'70', 'speed'=>'70'),

			array('name'=>'Houndour', 'type_a'=>'Dark', 'type_b'=>'Fire', 'sprite_url'=>'/sprites/houndour.png',
			'hp'=>'45', 'attack'=>'60', 'defense'=>'30', 'sp_atk'=>'80', 'sp_def'=>'50', 'speed'=>'65'),

			array('name'=>'Houndoom', 'type_a'=>'Dark', 'type_b'=>'Fire', 'sprite_url'=>'/sprites/houndoom.png',
			'hp'=>'75', 'attack'=>'90', 'defense'=>'90', 'sp_atk'=>'140', 'sp_def'=>'90', 'speed'=>'115'),

			array('name'=>'Kingdra', 'type_a'=>'Water', 'type_b'=>'Dragon', 'sprite_url'=>'/sprites/kingdra.png',
			'hp'=>'75', 'attack'=>'95', 'defense'=>'95', 'sp_atk'=>'95', 'sp_def'=>'95', 'speed'=>'85'),

			array('name'=>'Phanpy', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/phanpy.png',
			'hp'=>'90', 'attack'=>'60', 'defense'=>'60', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'40'),

			array('name'=>'Donphan', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/donphan.png',
			'hp'=>'90', 'attack'=>'120', 'defense'=>'120', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'50'),

			array('name'=>'Porygon2', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/porygon2.png',
			'hp'=>'85', 'attack'=>'80', 'defense'=>'90', 'sp_atk'=>'105', 'sp_def'=>'95', 'speed'=>'60'),

			array('name'=>'Stantler', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/stantler.png',
			'hp'=>'73', 'attack'=>'95', 'defense'=>'62', 'sp_atk'=>'85', 'sp_def'=>'65', 'speed'=>'85'),

			array('name'=>'Smeargle', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/smeargle.png',
			'hp'=>'40', 'attack'=>'40', 'defense'=>'40', 'sp_atk'=>'70', 'sp_def'=>'40', 'speed'=>'20'),

			array('name'=>'Tyrogue', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/tyrogue.png',
			'hp'=>'35', 'attack'=>'35', 'defense'=>'35', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'35'),

			array('name'=>'Hitmontop', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/hitmontop.png',
			'hp'=>'50', 'attack'=>'95', 'defense'=>'95', 'sp_atk'=>'35', 'sp_def'=>'110', 'speed'=>'70'),

			array('name'=>'Smoochum', 'type_a'=>'Ice', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/smoochum.png',
			'hp'=>'45', 'attack'=>'30', 'defense'=>'15', 'sp_atk'=>'85', 'sp_def'=>'65', 'speed'=>'65'),

			array('name'=>'Elekid', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/elekid.png',
			'hp'=>'45', 'attack'=>'63', 'defense'=>'37', 'sp_atk'=>'65', 'sp_def'=>'55', 'speed'=>'95'),

			array('name'=>'Magby', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/magby.png',
			'hp'=>'45', 'attack'=>'75', 'defense'=>'37', 'sp_atk'=>'70', 'sp_def'=>'55', 'speed'=>'83'),

			array('name'=>'Miltank', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/miltank.png',
			'hp'=>'95', 'attack'=>'80', 'defense'=>'105', 'sp_atk'=>'40', 'sp_def'=>'70', 'speed'=>'100'),

			array('name'=>'Blissey', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/blissey.png',
			'hp'=>'255', 'attack'=>'10', 'defense'=>'10', 'sp_atk'=>'75', 'sp_def'=>'135', 'speed'=>'55'),

			array('name'=>'Raikou', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/raikou.png',
			'hp'=>'90', 'attack'=>'85', 'defense'=>'75', 'sp_atk'=>'115', 'sp_def'=>'100', 'speed'=>'115'),

			array('name'=>'Entei', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/entei.png',
			'hp'=>'115', 'attack'=>'115', 'defense'=>'85', 'sp_atk'=>'90', 'sp_def'=>'75', 'speed'=>'100'),

			array('name'=>'Suicune', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/suicune.png',
			'hp'=>'100', 'attack'=>'75', 'defense'=>'115', 'sp_atk'=>'90', 'sp_def'=>'115', 'speed'=>'85'),

			array('name'=>'Larvitar', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/larvitar.png',
			'hp'=>'50', 'attack'=>'64', 'defense'=>'50', 'sp_atk'=>'45', 'sp_def'=>'50', 'speed'=>'41'),

			array('name'=>'Pupitar', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/pupitar.png',
			'hp'=>'70', 'attack'=>'84', 'defense'=>'70', 'sp_atk'=>'65', 'sp_def'=>'70', 'speed'=>'51'),

			array('name'=>'Tyranitar', 'type_a'=>'Rock', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/tyranitar.png',
			'hp'=>'100', 'attack'=>'164', 'defense'=>'150', 'sp_atk'=>'95', 'sp_def'=>'120', 'speed'=>'71'),

			array('name'=>'Lugia', 'type_a'=>'Psychic', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/lugia.png',
			'hp'=>'106', 'attack'=>'90', 'defense'=>'130', 'sp_atk'=>'90', 'sp_def'=>'154', 'speed'=>'110'),

			array('name'=>'Ho-oh', 'type_a'=>'Fire', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/ho-oh.png',
			'hp'=>'106', 'attack'=>'130', 'defense'=>'90', 'sp_atk'=>'110', 'sp_def'=>'154', 'speed'=>'90'),

			array('name'=>'Celebi', 'type_a'=>'Psychic', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/celebi.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'100', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'100'),

			));
	}
}