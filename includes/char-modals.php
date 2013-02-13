<div id="char-zyra" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Zyra</h3>
  </div>
  <div class="modal-body">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#general" data-toggle="tab">Statistics/Spells</a></li>
      <li><a href="#story" data-toggle="tab">Lore</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active" id="general">
          <div class="row-fluid">
            <div class="span4">
              
              <div class="center">
                <img src="img/characters/zyra.png" />
              </div>

              <div class="progress progress-ad">
                <div class="bar" style="width: 40%">Attack Power</div>
              </div>
              <div class="progress progress-def">
                <div class="bar" style="width: 30%">Defense Power</div>
              </div>
              <div class="progress progress-ap">
                <div class="bar" style="width: 80%">Ability Power</div>
              </div>
              <div class="progress progress-diff">
                <div class="bar" style="width: 70%">Difficulty</div>
              </div>

              <table class="charStats">
                <tr>
                  <th colspan="2">Statistics</th>
                </tr>
                <tr>
                  <td class="statTitle">HEALTH</td>
                  <td>355 (+74)</td>
                </tr>
                <tr>
                  <td class="statTitle">HEALTH REGEN.</td>
                  <td>4.85 (+0.5)</td>
                </tr>
                <tr>
                  <td class="statTitle">MANA</td>
                  <td>250 (+50)</td>
                </tr>
                <tr>
                  <td class="statTitle">MANA REGEN.</td>
                  <td>7.1 (+0.75)</td>
                </tr>
                <tr>
                  <td class="statTitle">RANGE</td>
                  <td>575</td>
                </tr>
                <tr>
                  <td class="statTitle">ATTACK DAMAGE</td>
                  <td>50 (+3.2)</td>
                </tr>
                <tr>
                  <td class="statTitle">ATTACK SPEED</td>
                  <td>0.625 (+1.8%)</td>
                </tr>
                <tr>
                  <td class="statTitle">ARMOR</td>
                  <td>11 (+3)</td>
                </tr>
                <tr>
                  <td class="statTitle">MAGIC RES.</td>
                  <td>30 (+0)</td>
                </tr>
                <tr>
                  <td class="statTitle">MOV. SPEED</td>
                  <td>325</td>
                </tr>
              </table>

            </div>
            <div class="span8">

              <table class="ability ability_auto">
                <tr>
                  <th colspan="3">Rise of the Thorns <span>RANGE: 1500 (estimate)</span></th>
                </tr>
                <tr>
                  <td class="abilityimage"><img src="img/characters/abilities-zyra/auto.jpg" /></td>
                  <td>Upon death, Zyra returns to her plant form. After 2 seconds, she can use any ability to fire a Vengeful Thorn towards her cursor, dealing true damage to every enemy it strikes.</td>
                  <td class="abilitystats"><strong>DURATION OF PLANT FORM:</strong> 8 seconds<br />
                  <strong>TRUE DAMAGE:</strong> 80 + (20 x level)</td>
                </tr>
              </table>

              <table class="ability ability_q">
                <tr>
                  <th colspan="3">Deadly Bloom <span>RANGE: 825</span> <span>COOLDOWN: 7 / 6.5 / 6 / 5.5 / 5</span> <span>COST: 75 / 80 / 85 / 90 / 95 mana</span></th>
                </tr>
                <tr>
                  <td class="abilityimage"><img src="img/characters/abilities-zyra/q.jpg" /></td>
                  <td><p>ACTIVE: Thorns shoot from the ground, dealing magic damage to enemies within the area.</p>
                    <p>RAMPANT GROWTH: If Deadly Bloom hits a seed, a Thorn Spitter grows. Thorn Spitters have a long ranged attack.</p></td>
                  <td class="abilitystats"><strong>MAGIC DAMAGE:</strong> 75 / 115 / 155 / 195 / 235 <span class="ap">(+ 60% AP)</span><br />
                    <strong>MAGIC DAMAGE THORN SPITTER:</strong> 26 + (6 × level) + <span class="ap">(+ 20% AP)</span><br />
                    <strong>DURATION:</strong> 10<br />
                    <strong>ATTACK SPEED:</strong> 0.800<br />
                    <strong>THORN SPITTER RANGE:</strong> 750<br />
                  </td>
                </tr>
              </table>

              <table class="ability ability_w">
                <tr>
                  <th colspan="3">Rampant Growth <span>RANGE: 825</span> <span>COST: 1 seed</span></th>
                </tr>
                <tr>
                  <td class="abilityimage"><img src="img/characters/abilities-zyra/w.jpg" /></td>
                  <td><p>PASSIVE: Grants bonus cooldown reduction.</p>
                    <p>ACTIVE: Plants a seed at a target point, granting vision of a small area around it. Zyra periodically regenerates seeds and can hold up to 2 seeds at any given time. Zyra cannot plant any more than 4 seeds at a time.</p>
                    <p>Enemies may move over a seed to destroy it, but they will be revealed to Zyra for 2 seconds afterwards.</p>
                    <p>If Zyra's spells hit a seed they will sprout into a plant, automatically attacking nearby enemies for 10 seconds. Plant damage is based on Zyra's level. Extra plants striking the same target deal 50% less damage.</p></td>
                  <td class="abilitystats"><strong>COOLDOWN REDUCTION: 4% / 8% / 12% / 16% / 20%</strong><br />
                    <strong>SEED RECHARGE TIME:</strong> 17 / 16 / 15 / 14 / 13<br />
                    <strong>SEED RECHARGE TIME INCLUDING BONUS:</strong> 16.3 / 14.7 / 13.2 / 11.8 / 10.4
                  </td>
                </tr>
              </table>

              <table class="ability ability_e">
                <tr>
                  <th colspan="3">Grasping Roots <span>RANGE: 1100</span> <span>COOLDOWN: 12</span> <span>COST: 70 / 75 / 80 / 85 / 90 mana</span></th>
                </tr>
                <tr>
                  <td class="abilityimage"><img src="img/characters/abilities-zyra/e.jpg" /></td>
                  <td><p>ACTIVE: Sends forward vines, dealing magic damage and rooting enemies hit for a short duration.</p>
                    <p>RAMPANT GROWTH: If Grasping Roots hits a seed, a Vine Lasher grows. Vine Lashers have a short ranged attack that also slow an enemy hit by 30% for 2 seconds.</p></td>
                  <td class="abilitystats"><strong>MAGIC DAMAGE:</strong> 60 / 95 / 130 / 165 / 200 <span class="ap">(+ 50% AP)</span><br />
                  <strong>ROOT DURATION:</strong> 0.75 / 1 / 1.25 / 1.5 / 1.75<br />
                  <strong>MAGIC DAMAGE VINE LASHER:</strong> 26 + (6 × level) + <span class="ap">(+ 20% AP)</span><br />
                  <strong>DURATION:</strong> 10<br />
                  <strong>ATTACK SPEED:</strong> 0.800<br />
                  <strong>VINE LASHER RANGE:</strong> 400
                  </td>
                </tr>
              </table>

              <table class="ability ability_r">
                <tr>
                  <th colspan="3">Stranglethorns <span>RANGE: 700</span> <span>COOLDOWN: 130 / 120 / 110</span> <span>COST: 100 / 120 / 140 mana</span></th>
                </tr>
                <tr>
                  <td class="abilityimage"><img src="img/characters/abilities-zyra/r.jpg" /></td>
                  <td><p>ACTIVE: Summons the fury of nature, growing a twisted thicket at the target location which deals magic damage to all enemies in the area as it expands. After 2 seconds, the vines snap upward knocking enemies into the air for 1.25 seconds.</p>
                    <p>RAMPANT GROWTH: Plants within the thicket are enraged, increasing their attack speed by 50%.</p></td>
                  <td class="abilitystats"><strong>MAGIC DAMAGE:</strong> 180 / 265 / 350 <span class="ap">(+ 70% AP)</span>
                  </td>
                </tr>
              </table>

            </div>
          </div>
      </div>
      <div class="tab-pane" id="story">
        <img src="img/characters/zyra-modal.png" />
        <p>Longing to take control of her fate, the ancient, dying plant Zyra transferred her consciousness into a human body for a second chance at life. Centuries ago, she and her kind dominated the Plague Lands, using thorns and vines to consume any animal that set foot in their territory. As the years passed, the animal population steadily died off. Food became increasingly scarce, and Zyra could only stand by helplessly as the last of her kin withered away. She thought she would perish alone, until the appearance of an unwary sorceress presented her with an opportunity for salvation.</p>
        <p>It was the first time in years Zyra had sensed a creature wander so close. Hunger drew her to the sorceress, but some other, deeper instinct compelled her. She enveloped the woman in thorns with ease, but as she savored this final meal, foreign memories invaded her thoughts. She saw great jungles of metal and stone where humans and animals thrived. Potent magic surged through her vines, and she devised an elegant but risky plan to survive. Using the woman’s memories, Zyra poured her newfound magic into the creation of a human-shaped vessel. She didn’t know what sort of world awaited her, but she had nothing left to lose. When Zyra opened her eyes, she was overwhelmed by the raw power ready at her fingertips. It wasn’t until she noticed the shriveled remains of the plant she once was that she realized how vulnerable she had become. If this body died, there would be no network of vines to retreat through, no roots to regrow her...but she felt truly alive. She beheld the world for the first time as animals did, and a dark smile crept across her lips. She was reborn, and there was so much now within her grasp.</p>
        <p><em>"Closer to the flower, closer to the thorns."</em><br />
        ―Zyra</p>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>