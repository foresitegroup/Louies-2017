<?php
$PageTitle = "Event";
include "header.php";
?>

<div class="banner banner-event">
  <div class="site-width">
    <h3><?php echo date("F j, Y", $GLOBALS['eventdate']); ?>, High Noon</h3>

    <h2>Louie's Last Regatta</h2>

    <div class="banner-text">
      Louie's is one of the nation's largest fundraising regattas. It's held on Lake Michigan in Milwaukee, and is an open-to-all, fun-oriented weekend of sailing and fundraising for the Children's Hospital of Wisconsin. The event includes pre-race fundraising by the participants, the race itself and a post-race dock-side party and auction.
    </div>

    <div class="event-links">
      <a href="#dates-and-times">DATES AND TIMES <i class="fg fg-calendar"></i></a>
      <a href="#awards">TROPHIES <i class="fg fg-trophy"></i></a>
      <a href="#results">RESULTS <i class="fg fg-stopwatch"></i></a>
      <a href="#louies-story">LOUIE'S STORY <i class="fg fg-boat"></i></a>
    </div>
  </div>
</div>

<div id="dates-and-times">
  <div class="site-width">
    <div class="sidebar">
      IMPORTANT DATES &amp; TIMES
      <i class="fg fg-waves"></i>
    </div>

    <div class="dats">
      <div class="dat">
        <h3><?php echo date('l\<\sp\a\n>\<\/\sp\a\n>F j\<\s\up>S\<\/\s\up>', $GLOBALS['kickoff']); ?></h3>
        <h2>KICKOFF PARTY</h2>
        Milwaukee Ale House<br>
        At <?php echo date("g:i A", $GLOBALS['kickoff']); ?>
      </div>

      <div class="dat">
        <h3><?php echo date('l\<\sp\a\n>\<\/\sp\a\n>F j\<\s\up>S\<\/\s\up>', $GLOBALS['skippers']-86000); ?></h3>
        <h2>RAZOO DEADLINE</h2>
        12PM on <?php echo date("F j, Y", $GLOBALS['skippers']-86000); ?><br>
        Online Donations will not be counted after Noon on <?php echo date("m.d.Y", $GLOBALS['skippers']-86000); ?>.
      </div>

      <div class="dat">
        <h3><?php echo date('l\<\sp\a\n>\<\/\sp\a\n>F j\<\s\up>S\<\/\s\up>', $GLOBALS['skippers']); ?></h3>
        <h2>SKIPPERS MEETING</h2>
        Milwaukee Ale House<br>
        At <?php echo date("g:i A", $GLOBALS['skippers']); ?>
      </div>

      <div class="dat">
        <h3><?php echo date('l\<\sp\a\n>\<\/\sp\a\n>F j\<\s\up>S\<\/\s\up>', $GLOBALS['eventdate']); ?></h3>
        <h2>GREEN ENVELOPES</h2>
        Must be turned in at the Milwaukee Ale House by 3:30 on <?php echo date('l \t\h\e jS', $GLOBALS['eventdate']); ?>.
      </div>

      <div class="dat">
        <h3><?php echo date('l\<\sp\a\n>\<\/\sp\a\n>F j\<\s\up>S\<\/\s\up>', $GLOBALS['eventdate']); ?></h3>
        <h2>THE REGATTA</h2>
        Lake Michigan off the Main Gap<br>
        At High Noon
      </div>

      <div class="dat">
        <h3><?php echo date('l\<\sp\a\n>\<\/\sp\a\n>F j\<\s\up>S\<\/\s\up>', $GLOBALS['eventdate']); ?></h3>
        <h2>POST RACE PARTY</h2>
        Milwaukee Ale House<br>
        Immediately after the race
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="inc/swipebox/swipebox.css">
<script type="text/javascript" src="inc/swipebox/jquery.swipebox.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".swipebox-video").swipebox({ autoplayVideos: true, videoMaxWidth : 1200 });
  });
</script>

<div class="slide-section" id="louies-story">
  <link rel="stylesheet" href="inc/slick/slick.css">
  <script type="text/javascript" src="inc/slick/slick.min.js"></script>
  <script type="text/javascript" src="inc/slick/slick.init.slide-section-slider.js"></script>

  <div class="slide-section-slider">
    <div style="background-image: url(images/register-slider1.jpg)"></div>
    <div style="background-image: url(images/register-slider2.jpg)"></div>
    <div style="background-image: url(images/register-slider3.jpg)"></div>
    <div style="background-image: url(images/register-slider4.jpg)"></div>
    <div style="background-image: url(images/register-slider5.jpg)"></div>
    <div style="background-image: url(images/register-slider6.jpg)"></div>
  </div>

  <i class="fg fg-waves"></i>

  <div class="site-width">
    <div class="slide-section-text">
      <h2>LOUIE'S LAST</h2>

      As one of the nation's largest fundraising regattas, Louie's Last Regatta is a year-end, open-to-all, fun-oriented sailing regatta held on Lake Michigan. Louie's was founded by a group of local sailors who wanted one last sail before the season ended. To give it more purpose, the sailors made the race into a fundraiser for Children's Hospital and as a contribution to the regatta founder's niece, Maggie.<br>
      <br>

      As time passed, popularity grew, and more sponsors and volunteers stepped forward, the event grew from a few boats to hundreds, with thousands of participants.<br>
      <br>

      Louie's Last Regatta has has gained national attention being named one of the top ten sailing events in the county and raising over $1 million for the Children's Hospital of Wisconsin.<br>
      <br>

      <a href="https://vimeo.com/192156399" class="swipebox-video">PLAY VIDEO</a>
    </div>
  </div>
</div>

<div id="awards">
  <div class="site-width">
    <div class="trophy header">
      <div class="trophy-image"></div>

      <div class="trophy-text">
        <h2>THE AWARDS</h2>
        <i class="fg fg-waves"></i>
      </div>
    </div>

    <div class="trophy maggie">
      <div class="trophy-image">
        <i class="fg fg-maggie-bersch-cup"></i>
      </div>
      <div class="trophy-text">
        <h3>Maggie Bersch Cup</h3>
        Maggie Bersch was diagnosed with leukemia when she was three years old. Her battle with cancer and the quality of care she and her family received at the Children's Hospital of Wisconsin were the inspiration for the event's relationship with the hospital. Her story became a part of Louie's fundraising as Maggie's father, Denny, provided an annual update on her treatments at Children's Hospital. After Maggie passed away in 2004 at age eight, a trophy was dedicated in Maggie's honor and is awarded to the top fundraiser. Winning the Maggie Bersch Cup is the most prized honor at Louie's.
      </div>
    </div>

    <div class="trophy louies">
      <div class="trophy-image">
        <i class="fg fg-louies-last-cup"></i>
      </div>
      <div class="trophy-text">
        <h3>Louie's Last Cup</h3>
        The dented and scuffed cup is the Louie's Last Cup. This trophy is awarded to the first place boat in the actual race. Legend has it that this may have been the drinking vessel that was bashed over Uncle Louie's head back in 1886, ultimately leading to his demise. The truth is that the cup was repeatedly bashed into a parking meter out in front of the trophy store the day it was purchased. We wanted a distressed look to it....
      </div>
    </div>

    <div class="trophy flounder">
      <div class="trophy-image">
        <i class="fg fg-flounder"></i>
      </div>
      <div class="trophy-text">
        <h3>The Flounder</h3>
        The large fish is called The Flounder (commissioned in 2005). It is awarded to the boat with the longest elapsed time around the marks (last stinking place). The winner of the Flounder epitomizes the good-natured attitude of the event.
      </div>
    </div>

    <div class="trophy debbia">
      <div class="trophy-image">
        <i class="fg fg-debbia"></i>
      </div>
      <div class="trophy-text">
        <h3>The Debbia Grassroots Trophy</h3>
        In an effort to recognize the hard work that many Louie's sailors exert to raise small donations from a large number of family and friends, but never get to the level of dollars that would win the Maggie Bersch Cup, Louie's introduced the Grassroots Cup in 2012. The winner of the Grassroots Cup is the boat that raises the greatest number of individual donors of over $15. The first winner of the Grassroots Cup, Mike Kenny's Debbia, earned the right to have the trophy named honor of their boat.
      </div>
    </div>

    <div class="trophy cutlass">
      <div class="trophy-image">
        <i class="fg fg-cutlass"></i>
      </div>
      <div class="trophy-text">
        <h3>The Cutlass</h3>
        In 2007, a new trophy was added to the lineup of polished cups and plaques. Inspired by those fun-loving, keg-standing bears from Louie's 8th and donated by Captain Tom (Bucket-O-Margaritas) Young. This highly-prized trophy is awarded to the most uniquely-attired crew, a.k.a., the best costumed crew of the regatta. Judging will be held on the evening of the regatta party by the regatta committee.
      </div>
    </div>

    <div class="trophy spinnaker">
      <div class="trophy-image">
        <i class="fg fg-ugliest-spinnaker"></i>
      </div>
      <div class="trophy-text">
        <h3>The Ugliest Spinnaker Award</h3>
        This award is not associated with any award other than the distinction of flying the most hideous sail of the year.
      </div>
    </div>

    <div class="trophy flag">
      <div class="trophy-image">
        <i class="fg fg-louies-flag"></i>
      </div>
      <div class="trophy-text">
        <h3>Green Brag Flag</h3>
        The Green Brag Flag is awarded to the three boats that raised the most money for the Children's Hospital of Wisconsin.
      </div>
    </div>

    <div class="trophy flag">
      <div class="trophy-image">
        <i class="fg fg-louies-flag"></i>
      </div>
      <div class="trophy-text">
        <h3>Division Brag Flag</h3>
        This flag is awarded to each participating boat in Louie's Last Regatta because "each boat is its own division."
      </div>
    </div>
  </div>
</div>

<div id="results">
  <div class="site-width">
    <div class="results-sidebar">
      LOUIE'S LAST RESULTS

      <!-- <a href="#">View all 1999-2016</a><br> -->

      <i class="fg fg-trophy-burst"></i>
    </div>

    <div class="results">
      <script type="text/javascript" src="inc/slick/slick.init.results-slider.js"></script>
      <div class="results-slider">
        <div>
          <h2>2016</h2>
          <a href="http://www.regattanetwork.com/clubmgmt/applet_regatta_results.php?regatta_id=13313&show_divisions=1" class="arrow">2016 Complete Results</a>

          <h3>O-Gii</h3>
          1st - Defiance<br>
          2nd - Promo<br>
          3rd - Imeldi<br>
          <br>

          <h3>Outboard</h3>
          1st - Sabotage<br>
          2nd - Debbia<br>
          3rd - Meltdown<br>
          <br>

          <h3>Cutlass - Most Uniquely Attired Crew</h3>
          MAI TAI<br>
          <br>

          <h3>Maggie Bersch Memorial Cup for Top Fundraiser</h3>
          1st - Debbia<br>
          2nd - Dirty Vicar Racing<br>
          3rd - Firefly<br>
          Honorable Mention - YOLO<br>
          <br>

          <h3>Debbia Grassroots Cup for Highest Number of Individual Donors</h3>
          1st - Debbia<br>
          2nd - YOLO<br>
          3rd - Firefly<br>
          Honorable Mention - Eclipse
        </div>

        <div>
          <h2>2015</h2>
          <a href="pdf/2015_Results.pdf" class="arrow">2015 Complete Results</a>

          <h3>Louie's Cup - Love Rock Section</h3>
          1st - Defiance (Dale Smirl)<br>
          2nd - Imedi (Mark Hauf)<br>
          3rd - Blue (Michael Schoendorf)<br>
          <br>

          <h3>Louie's Cup - Solomon Juneau Section</h3>
          1st - Prop Job (Joe McBride)<br>
          2nd - Chautauqua (Mark Ernst)<br>
          3rd - Kindred Spirit (Karl Krueger)<br>
          <br>

          <h3>Flounder</h3>
          Solomon Juneau - Allegro (Joe Buck)<br>
          <br>

          <h3>Cutlass - Most Uniquely Attired Crew</h3>
          Instigator (Matthew Merger)<br>
          <br>

          <h3>Maggie Bersch Memorial Cup for Top Fundraiser</h3>
          1st - YOLO (Darryl Green)<br>
          2nd - Get Kraken (Robin Olson)<br>
          3rd - Debbia (Mike Kenny)<br>
          <br>

          <h3>Debbia Grassroots Cup for Highest Number of Individual Donors</h3>
          1st - Debbia (Mike Kenny) - 212 donations<br>
          2nd - Eclipse (Ken Quant) - 164 donations<br>
          3rd - YOLO (Darryl Green) - 74 donations
        </div>

        <div>
          <h2>2014</h2>
          <a href="pdf/2014_Results.pdf" class="arrow">Complete Results</a>

          <h3>Louie's Cup - Love Rock Section</h3>
          1st - Defiance (Dale Smirl)<br>
          2nd - Blue (Michael Schoendorf)<br>
          3rd - Imedi (Mark Hauf)<br>
          <br>

          <h3>Louie's Cup - Solomon Juneau Section</h3>
          1st - Chautauqua (Mark Ernst)<br>
          2nd - Typhoon Mary (Tom Molinski)<br>
          3rd - WHO (Mike Aita)<br>
          <br>

          <h3>Poker Run</h3>
          1st - Steely Dan (Patric Kuptz) - Royal Flush of Diamonds<br>
          2nd - Endless Summer (Dave Erbstoetzer) - Royal Flush of Spades<br>
          3rd - Bin-Sea (Kevin Radcliffe) - Full House<br>
          <br>

          <h3>Flounder</h3>
          Love Rock - Sandpiper (Dick Pfoertsch)<br>
          Solomon Juneau - Windrider (Adam Brzezicka)<br>
          <br>

          <h3>Cutlass - Most Uniquely Attired Crew</h3>
          Meatloaf Express (Brian Kennalley, Edward Mui, &amp; Craig Roehl)<br>
          <br>

          <h3>North Sails Ugliest Spinnaker Award</h3>
          Mai Tai (Rick Hake)<br>
          <br>

          <h3>Maggie Bersch Memorial Cup for Top Fundraiser</h3>
          1st - Cayenne (Adam &amp; Susie Brotz) - $10,541<br>
          2nd - Hobgoblin (Dick Hobbs) - $8,440<br>
          3rd - s/v Debbia (Mike Kenny) - $7,600<br>
          <br>

          <h3>Debbia Grassroots Cup for Highest Number of Individual Donors</h3>
          1st - s/v Debbia (Mike Kenny) - 203 donations<br>
          2nd - Eclipse (Ken Quant &amp; Melissa Suring) - 102 donations<br>
          3rd - Dock Holiday (Rick &amp; Susan Kremel) - 47 donations
        </div>

        <div>
          <h2>2013</h2>
          <a href="pdf/2013_Results.pdf" class="arrow">2013 Complete Results</a>

          <h3>Louie's Cup - Love Rock Section</h3>
          1st - Widespread Panic / Tom Peterson<br>
          2nd - TRI n Catch Me / John Achim<br>
          3rd - Blueprint / Chris Moll<br>
          <br>

          <h3>Louie's Cup - Solomon Juneau Section</h3>
          1st - Little Rafiki / Whitney Kent<br>
          2nd - Rafiki Mufasa / Alison Kent<br>
          3rd - Laser / Dave Poquette<br>
          <br>

          <h3>Flounder</h3>
          WILD IRISH / Joe Kiehm<br>
          <br>

          <h3>First Ever Poker Run</h3>
          1st - TAPd Out / Tom Peterson<br>
          2nd - Lakefront Condo / Robert Roberson<br>
          3rd - Seas the Day / Jesse Jacobs<br>
          <br>

          <h3>Cutlass - Most Uniquely Attired Crew</h3>
          HOPE / Michael Leland:  "Star Wars"<br>
          <br>

          <h3>North Sails Ugliest Spinnaker Award</h3>
          WHO / Mike Aita<br>
          <br>

          <h3>Maggie Bersch Memorial Cup for Top Fundraiser</h3>
          1st - Yippee-Ki-Yay / Gordy &amp; Jayne King<br>
          2nd - Hobgoblin / Dick Hobbs &amp; Mike Kuptz<br>
          3rd - s/v Debbia / Mike Kenny<br>
          <br>

          <h3>Debbia Grassroots Cup for Highest Number of Individual Donors</h3>
          1st - s/v Debbia / Mike Kenny<br>
          2nd - Hasten / Fred Stritt<br>
          3rd - Eclipse / Ken Quant &amp; Melissa Suring
        </div>

        <div>
          <h2>2012</h2>
          <a href="pdf/2012_Results.pdf" class="arrow">2012 Complete Results</a>

          <h3>Louie's Cup</h3>
          <strong>Love Rock Section (twice around)</strong><br>
          1st - Golden Goose - Art Mitchell<br>
          2nd - REDRUM - Scott Bruesewitz &amp; Bernie Reinhard<br>
          3rd - IMEDI - Linc Yates &amp; Marc Hauf<br>
          <br>

          <strong>Solomon Juneau Section (once around)</strong><br>
          1st - Mind the Gap - Phillip Peterson<br>
          2nd - Laser - Dave Poquette<br>
          3rd - Chance - Bob &amp; Cindy Kraus<br>
          <br>

          <h3>Flounder Award for Last Place</h3>
          Love Rock Section: Caribbean Soul - Glenn &amp; Wendy Ponting<br>
          Solomon Juneau Section: Green Eyed Girl - Michael Pritzkow<br>
          <br>

          <h3>Most Uniquely Attired Crew</h3>
          "Peter Pan" - Harry Corbett &amp; The Crew of TFWB Relentless<br>
          <br>

          <h3>North Sails Ugliest Spinnaker Award</h3>
          Vesta - Pete Duecker<br>
          <br>

          <h3>Maggie Bersch Cup for Top Fundraiser</h3>
          1st - Yippie-Ki-Yay - Gordy &amp; Jayne King<br>
          2nd - Dock Holiday - Richard Kremel<br>
          3rd - The Sliders - Emma, Ainsley &amp; Fiona Berger<br>
          <br>

          <h3>The Debbia Grassroots Cup for Highest Number of Individual Donors</h3>
          1st - Debbia - Mike Kenny<br>
          2nd - Eclipse - Ken Quant &amp; Melissa Suring<br>
          3rd - Defiance - Dale Smirl
        </div>

        <div>
          <h2>2011</h2>
          No race was sailed in 2011 due to water spouts<br>
          <br>

          <h3>Flaming Damsel Section Skippers' Footrace Awards</h3>
          Louie's Last Cup - 1st Mike Sabinash / Sabotage<br>
          2nd - Jeremy Burns / Heatwave<br>
          3rd - Greg Adams / Sociable<br>
          <br>

          <h3>Solomon Juneau Card Draw Awards</h3>
          Louie's Last Cup - 1st Don Doggett / Summer Hours<br>
          2nd - Ed Purcell / F-Stop<br>
          3rd - John Sutphen / Second Edition<br>
          <br>

          <h3>Flounder Award</h3>
          Mark Johnson / Dirty Rat<br>
          <br>

          <h3>The Cutlass</h3>
          Michael Leland the crew on HOPE (Pregnant) Snow White and the Seven Dwarves<br>
          <br>

          <h3>Fund-Raising Awards</h3>
          Louie's Challenge for the Maggie Bersch Memorial Trophy<br>
          For The Top Fund Raising Skippers and Crews<br>
          1st - Adam Brotz/Preston Wake and the crew of Chance/Twister<br>
          2nd - Adam Berger and the crew of Impetuous<br>
          3rd - Jim &amp; Cheryl Kelly and the crew of Bounder<br>
          <br>

          $69,000 raised for Children's Hospital
        </div>

        <div>
          <h2>2010</h2>
          <a href="pdf/2010_Results.pdf" class="arrow">2010 Complete Results</a><br>

          112 boats finished the race out of 135 registered<br>
          <br>

          <h3>Flaming Damsel Section (twice around)</h3>
          Louie's Last Cup - 1st Scott Conger / Alliance<br>
          2nd - Art Mitchel / Snow Goose<br>
          3rd - Chris Moll / Blue Moon<br>
          <br>

          <h3>Solomon Juneau Section (once around)</h3>
          Louie's Last Cup -1st Phil Peterson / Mind the Gap<br>
          2nd - Mark Ernst / Chautauqua<br>
          3rd -Dave Poquette / Laser 187723<br>
          <br>

          <h3>Flounder Award (Flaming Damsel)</h3>
          Ken Deboer / Pirate Dog<br>
          <br>

          <h3>Flounder Award (Solomon Juneau)</h3>
          Doug Gallus / Mousekateer<br>
          <br>

          <h3>The Cutlass</h3>
          Alice Martin and her crew on Painkiller 4<br>
          <br>

          <h3>Fund-Raising Awards</h3>
          Louie's Challenge for the Maggie Bersch Memorial Trophy<br>
          For The Top Fund Raising Skippers and Crews<br>
          1st - Jayne and Gordy King and crew of Yippe-Ki-Yay<br>
          2nd - Dan Wright and crew on Maggie<br>
          3rd - Adam Brotz and the crew of Chance<br>
          <br>

          $125,015 raised for Children's Hospital
        </div>

        <div>
          <h2>2009</h2>
          <a href="pdf/2009_Results.pdf" class="arrow">2009 Complete Results</a>

          <h3>Louie's Last Cup</h3>
          1st - Tassi deFelice / Skimbishanks<br>
          2nd - Scott and Debbie Bruesewitz / REDRUM<br>
          3rd - Jamie Hummert / Scout<br>
          <br>

          <h3>Flounder Award</h3>
          Rick Schoos / Phantom<br>
          <br>

          <h3>The Cutlass</h3>
          Whitney and Alison Kent on Impetuous II<br>
          <br>

          <h3>Fund-Raising Awards</h3>
          Louie's Challenge for the Maggie Bersch Memorial Trophy<br>
          For The Top Fund Raising Skippers and Crews<br>
          1st - Dan Wright / Maggie<br>
          2nd - Jayne &amp; Gordy King / Yippie-Ki-Yay<br>
          3rd - Michael Nauman / Windhunter
        </div>

        <div>
          <h2>2008</h2>
          <a href="pdf/2008_Results.pdf" class="arrow">2008 Complete Results</a>

          <h3>Louie's Last Cup</h3>
          1st - Bill Schanen III / Main Street<br>
          2nd - Jamie Hummert / Scout<br>
          3rd - Auggie Barkow / Big Wheels<br>
          <br>

          <h3>Flounder Award</h3>
          Jim Kerlin / Blue Pearl<br>
          <br>

          <h3>The Cutlass</h3>
          Adam Berger &amp; Crew / Impetuous<br>
          <br>

          <h3>Fund-Raising Awards</h3>
          Louie's Challenge for the Maggie Bersch Memorial Trophy<br>
          For The Top Fund Raising Skippers and Crews<br>
          1st - Fred &amp; Cynthia Stritt / Hasten<br>
          2nd - Scott &amp; Debbie Bruesewitz / Redrum<br>
          3rd - John &amp; Ellen Kuber / Promo
        </div>

        <div>
          <h2>2007</h2>
          <a href="pdf/2007_Results.pdf" class="arrow">2007 Complete Results</a>

          <h3>Louie's Last Cup</h3>
          1st - deFelice / Looking for a Name<br>
          2nd - Brown / Naiya - Team Impetuous<br>
          3rd - Reinhard &amp; Bruesewitz / REDRUM<br>
          <br>

          <h3>Flounder Award</h3>
          Roedig / Trimatic<br>
          <br>

          <h3>The Cutlass</h3>
          Rob Morton / Edge<br>
          <br>

          <h3>Louie's Challenge (green flag)</h3>
          John &amp; Ellen Kuber and Clay &amp; Cynthia Feller / Promo<br>
          Scott &amp; Debbie Bruesewitz / REDRUM<br>
          Gordy King / Yippi-Ki-Yay<br>
          <br>

          $131,000 raised for Children's Hospital
        </div>

        <div>
          <h2>2006</h2>
          <a href="pdf/2006_Results.pdf" class="arrow">2006 Complete Results</a>

          <h3>Louie's Last Cup</h3>
          1st - Special Sauce<br>
          2nd - Strait Jacket<br>
          3rd - Veloce<br>
          <br>

          <h3>Flounder Award</h3>
          Mai Tai<br>
          <br>

          <h3>Maggie Bersch Memorial Trophy</h3>
          Scott &amp; Debbie Bruesewitz / Some Assembly Required<br>
          <br>

          <h3>Louie's Challenge (green flag)</h3>
          Scott &amp; Debbie Bruesewitz / Some Assembly Required<br>
          John &amp; Ellen Kuber / Promo<br>
          Richard &amp; Christine Hobbs / Hobgoblin
        </div>

        <div>
          <h2>2005</h2>
          <a href="pdf/2005_Results.pdf" class="arrow">2005 Complete Results</a>

          <h3>Louie's Last Cup</h3>
          1st - Naiya<br>
          2nd- Stealth<br>
          3rd- Hasten<br>
          <br>

          <h3>Maggie Bersch Memorial Trophy</h3>
          Michael Bersch / Dirty Vicar<br>
          <br>

          <h3>Louie's Challenge</h3>
          Michael Bersch / Dirty Vicar<br>
          Matt Suminski / The Concept<br>
          John &amp; Ellen Kuber / Promo<br>
          <br>

          $80,000 raised for Children's Hospital
        </div>

        <div>
          <h2>2004</h2>
          <h3>Louie's Last Cup</h3>
          1st - Strait Jacket<br>
          2nd - Still Married After All These Beers<br>
          3rd - Hasten<br>
          <br>

          <h3>Louie's Challenge</h3>
          Tom Young / Forever Young<br>
          Michael Bersch / Dirty Vicar<br>
          Clay Feller / Bullseye<br>
          <br>

          $60,000 raised for Children's Hospital
        </div>

        <div>
          <h2>2003</h2>
          <h3>Louie's Last Cup</h3>
          Mosquito<br>
          <br>

          <h3>Louie's Challenge</h3>
          Clay Feller / Quicksilver<br>
          Matt Suminski / Dirty Vicar<br>
          <br>

          $30,000 raised for Children's Hospital
        </div>

        <div>
          <h2>2002</h2>
          <h3>Louie's Last Cup</h3>
          Alliance<br>
          <br>

          <h3>Louie's Challenge</h3>
          Clay Feller / Bullseye<br>
          Matt Suminski / The Concept<br>
          <br>

          $30,000 raised for Children's Hospital
        </div>

        <div>
          <h2>2001</h2>
          <h3>Louie's Last Cup</h3>
          LBS<br>
          <br>

          <h3>Louie's Challenge</h3>
          Richard Hobbs / Hobgoblin<br>
          <br>

          $12,500 raised for Children's Hospital
        </div>

        <div>
          <h2>2000</h2>
          <h3>Louie's Last Cup</h3>
          Alliance<br>
          <br>

          $5,000 raised for Children's Hospital
        </div>

        <div class="toggle-content">
          <h2>1999</h2>
          <h3>Louie's Last Cup</h3>
          Ragdoll<br>
          <br>

          $900 raised for Children's Hospital
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="inc/slick/slick.init.sponsor-slider.js"></script>

<div class="sponsors">
  <div class="sponsors-slider">
    <div class="sponsor"><img src="images/logo-chw.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-mount-gay.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-mke-ale-house.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-harken.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-boelter.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-mke-yacht-club.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-ssyc.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-mke-brewing-co.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-foresite.png" alt=""></div>
  </div>

  <a href="#sponsor" rel="nofollow">BECOME A SPONSOR</a>
</div>

<div id="sponsor" class="site-width-small">
  <script type="text/javascript">
    $(document).ready(function() {
      var form = $('#sponsor-form');
      var formMessages = $('#sponsor-form-messages');
      $(form).submit(function(event) {
        event.preventDefault();

        function formValidation() {
          if ($('#name').val() === '') { alert('Name required.'); $('#name').focus(); return false; }
          if ($('#email').val() === '') { alert('Email address required.'); $('#email').focus(); return false; }
          if ($('#phone').val() === '') { alert('Phone required.'); $('#phone').focus(); return false; }
          if ($('#comment').val() === '') { alert('Comment required.'); $('#comment').focus(); return false; }
          return true;
        }

        if (formValidation()) {
          var formData = $(form).serialize();
          formData += '&src=ajax';

          $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
          })
          .done(function(response) {
            $(formMessages).html(response);
            $(form).find('input:text, textarea').val('');
            $('input:checkbox').removeAttr('checked');
            $('#phone').val('');
            $('#email').val('');
          })
          .fail(function(data) {
            if (data.responseText !== '') {
              $(formMessages).html(data.responseText);
            } else {
              $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
          });
        }
      });
    });
  </script>

  <?php
  // Settings for randomizing form field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "LouiesSponsorForm";
  ?>

  <h2>BECOME A SPONSOR</h2>

  <div id="sponsor-form-messages"></div>

  <form action="form-sponsor.php" method="POST" id="sponsor-form">
    <div>
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="NAME">

      <input type="text" name="<?php echo md5("organization" . $ip . $salt . $timestamp); ?>" id="organization" placeholder="ORGANIZATION / COMPANY">

      <div style="clear: both;"></div>

      <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="EMAIL ADDRESS">

      <input type="tel" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="PHONE">

      <div style="clear: both;"></div>

      <div class="header">WE ARE INTERESTED IN:</div>
      <input type="checkbox" name="interest[]" id="int-money" value="Donating money">
      <label for="int-money">Donating money</label>

      <input type="checkbox" name="interest[]" id="int-time" value="Donating time">
      <label for="int-time">Donating time</label>

      <input type="checkbox" name="interest[]" id="int-raffle" value="Contributing raffle item(s)">
      <label for="int-raffle">Contributing raffle item(s)</label>

      <input type="checkbox" name="interest[]" id="int-other" value="Other">
      <label for="int-other">Other</label>

      <br>

      <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment" placeholder="COMMENT"></textarea>

      <input type="submit" name="submit" value="SUBMIT">

      <input type="text" name="confirmationCAP" style="display: none;">
      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
    </div>
  </form>
</div>

<?php include "footer.php"; ?>