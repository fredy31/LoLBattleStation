<?php include('includes/header.php'); ?>

<div class="row-fluid header">
	<div class="span3 blueteam">
		<div class="left score">
			0
		</div>
		TEAM 1
	</div>
	<div class="span6 title">
		LoL Battle Station
	</div>
	<div class="span3 redteam">
		<div class="right score">
			1
		</div>
		TEAM 2
	</div>
</div><!--Row Header-->

<div class="row-fluid">
	<div class="span6">
		<div class="row-fluid" id="graphsspace">
			<div class="span12" id="">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#kills" data-toggle="tab">Kills</a></li>
					<li><a href="#ckills" data-toggle="tab">Creeps Kill</a></li>
					<li><a href="#gold" data-toggle="tab">Gold</a></li>
				</ul>

				<div class="tab-content">
				  <div class="tab-pane active" id="kills"><div id="killsGraph"></div></div>
				  <div class="tab-pane" id="ckills"><div id="CKGraph"></div></div>
				  <div class="tab-pane" id="gold"><div id="goldGraph"></div></div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6 jungleinfo">
				<div class="sectiontitle">In the Jungle</div>
				<table>
					<tr>
						<td class="baron monstericon">&nbsp;</td>
						<td class="timer" id="baron" data-timer="900" data-respawn="420">Init</td>
						<td class="timer" id="dragon" data-timer="150" data-respawn="360">Init</td>
						<td class="dragon monstericon">&nbsp;</td>
					</tr>
					<tr>
						<td class="ancientgolem blue monstericon">&nbsp;</td>
						<td class="timer" id="ancientgolemblue" data-timer="115" data-respawn="300">Init</td>
						<td class="timer" id="ancientgolemred" data-timer="115" data-respawn="300">Init</td>
						<td class="ancientgolem red monstericon">&nbsp;</td>
					</tr>
					<tr>
						<td class="lizards blue monstericon">&nbsp;</td>
						<td class="timer" id="lizardsblue" data-timer="115" data-respawn="300">Init</td>
						<td class="timer" id="lizardsred" data-timer="115" data-respawn="300">Init</td>
						<td class="lizards red monstericon">&nbsp;</td>
					</tr>
					<tr>
						<td class="biggolem blue monstericon">&nbsp;</td>
						<td class="timer" id="biggolemblue" data-timer="100" data-respawn="60">Init</td>
						<td class="timer" id="biggolemred" data-timer="100" data-respawn="60">Init</td>
						<td class="biggolem red monstericon">&nbsp;</td>
					</tr>
					<tr>
						<td class="wraiths blue monstericon">&nbsp;</td>
						<td class="timer" id="wraithsblue" data-timer="100" data-respawn="50">Init</td>
						<td class="timer" id="wraithsred" data-timer="100" data-respawn="50">Init</td>
						<td class="wraiths red monstericon">&nbsp;</td>
					</tr>
					<tr>
						<td class="wolves blue monstericon">&nbsp;</td>
						<td class="timer" id="wolvesblue" data-timer="100" data-respawn="60">Init</td>
						<td class="timer" id="wolvesred" data-timer="100" data-respawn="60">Init</td>
						<td class="wolves red monstericon">&nbsp;</td>
					</tr>
				</table>
			</div>
			<div class="span6 twitterinfo">
				<div class="sectiontitle">On Twitter</div>
				<!--<div class="progress">
                	<div class="bar blue" style="width: 35%;">35%</div>
				  	<div class="bar red" style="width: 65%;">65%</div>
              	</div>-->

              	<div id="twittercontainer">

              	</div>

			</div>
		</div>
	</div>

	<div class="span6">
		<div class="row-fluid">
			<div class="span12">
				<object id="twitchPlayer" type="application/x-shockwave-flash" height="378" width="620" id="live_embed_player_flash" data="http://fr.twitch.tv/widgets/live_embed_player.swf?channel=riotgames" bgcolor="#111">
					<param name="allowFullScreen" value="true" />
					<param name="allowScriptAccess" value="always" />
					<param name="allowNetworking" value="all" />
					<param name="wmode" value="opaque">
					<param name="movie" value="http://fr.twitch.tv/widgets/live_embed_player.swf" />
					<param name="flashvars" value="hostname=fr.twitch.tv&channel=riotgames&auto_play=false&start_volume=25" />
				</object>
			</div>
		</div>

		<div class="row-fluid teamStats">
			<div class="span6 blueteam">

				<table class="statsTable">
					<tr class="tableHead">
						<td></td>
						<td>Name</td>
						<td>K/D/A</td>
						<td>Creeps Kill</td>
						<td>Worth (Gold)</td>
						<td>Items</td>
					</tr><!--INDEX-->

					<tr>
						<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
						<td class="playername">Player 1</td>
						<td>3/1/0</td>
						<td>123</td>
						<td>12345(1234)</td>
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
						</td>
					</tr><!--PLAYER 1-->

					<tr>
						<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
						<td class="playername">Player 2</td>
						<td>3/1/0</td>
						<td>123</td>
						<td>12345(1234)</td>
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
						</td>
					</tr><!--PLAYER 2-->

					<tr>
						<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
						<td class="playername">Player 3</td>
						<td>3/1/0</td>
						<td>123</td>
						<td>12345(1234)</td>
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
						</td>
					</tr><!--PLAYER 3-->

					<tr>
						<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
						<td class="playername">Player 4</td>
						<td>3/1/0</td>
						<td>123</td>
						<td>12345(1234)</td>
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
						</td>
					</tr><!--PLAYER 4-->

					<tr>
						<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
						<td class="playername">Player 5</td>
						<td>3/1/0</td>
						<td>123</td>
						<td>12345(1234)</td>
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
						</td>
					</tr><!--PLAYER 5-->
				</table>

			</div>
			<div class="span6 redteam">

				<table class="statsTable">
					<tr class="tableHead">
						<td>Items</td>
						<td>Worth (Gold)</td>
						<td>Creeps Kill</td>
						<td>K/D/A</td>
						<td>Name</td>
						<td></td>
					</tr><!--INDEX-->

					<tr>
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
						</td>
						<td>12345(1234)</td>
						<td>123</td>
						<td>3/1/0</td>
						<td class="playername">Player 1</td>
						<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
					</tr><!--PLAYER 1-->

					<tr>						
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
						</td>
						<td>12345(1234)</td>
						<td>123</td>
						<td>3/1/0</td>
						<td class="playername">Player 2</td>
						<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
					</tr><!--PLAYER 2-->

					<tr>
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
						</td>
						<td>12345(1234)</td>
						<td>123</td>
						<td>3/1/0</td>
						<td class="playername">Player 3</td>
						<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
					</tr><!--PLAYER 3-->

					<tr>
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
						</td>
						<td>12345(1234)</td>
						<td>123</td>
						<td>3/1/0</td>
						<td class="playername">Player 4</td>
						<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
					</tr><!--PLAYER 4-->

					<tr>	
						<td class="playeritems">
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 1-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 2-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 3-->
							<br />
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
						 		<img src="img/items/ward.png" />
						 	</a><!--Item 4-->
						 	<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 5-->
							<a href="#" class="popoverItem" data-placement="top" data-html="true" data-trigger="hover" data-title="Sight Ward" data-content="Places an invisible ward with 1100 range. Lasts 3 minutes.<br />Item cost <span class='yellow'>75g</span><br />Sell value <span class='yellow'>30g</span>">
								<img src="img/items/ward.png" />
							</a><!--Item 6-->
							<td>12345(1234)</td>
							<td>123</td>
							<td>3/1/0</td>
							<td class="playername">Player 5</td>
							<td class="playeravatar"><a href="#char-zyra" role="button" data-toggle="modal"><img src="img/characters/zyra.png" /></a></td>
						</td>
					</tr><!--PLAYER 5-->
				</table>

			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>