<div id="monetize" class="twelve columns">
	<?php
	$STUDIO_NAME = "Broken Vector UG (haftungsbeschränkt)";
	$LEGAL_REPRESENTATIVE_NAME = "Michael Lohr";
	$LEGAL_REPRESENTATIVE_TITLE = "Founder, Manager and Developer";
	$GAME_TITLES_SEPERATED_BY_COMMAS = "VoxVR";	

	error_reporting(0);
	$name = htmlspecialchars($_GET["name"]);
	if( strlen($name) > 0 )
	{
		?>
        <div>
            <p><strong><p>Monetization permission for "<?=$name?>"</p></strong></p>
            <p><p>I,</p> 
            <p><?php echo( $LEGAL_REPRESENTATIVE_NAME ); ?></p>
            <p class="title"><?php echo( $LEGAL_REPRESENTATIVE_TITLE); ?> at <?php echo($STUDIO_NAME); ?></p>
            <p>give my explicit and legal permission to</p>
            <p>"<?=$name?>",</p>
            <p class="title">a user of your video broadcasting service,</p>
            <p>to monetize videos of <?php echo( $STUDIO_NAME ); ?>-made games including but not limited to <?php echo( $GAME_TITLES_SEPERATED_BY_COMMAS ); ?> or any other title, prototype or terrible game jam thing developed by  <?php echo( $STUDIO_NAME ); ?> in the past, current or future, on any channel owned by
"<?=$name?>"
.          </p>
          <p>This permission is (retro-actively) valid from the moment your service has been launched until the end of time / apocalypse. This permission shall not be limited to any territory, planet, solar system, universe or hypothetical alternate realities. </p>
          
          <p class="major">Seriously, "<?=$name?>" is allowed to monetize videos using our games for commercial goals. It is good for us too when people share their opinion about our games, you know. Free marketing and all that, but also a good way for us to lift our moods when we're a bit demotivated - watching videos of people playing our games is really energizing for us. We would recommend it to engineers and designers over at your place.</p>
            
            <p>Either way, if somebody can earn a penny or get filthy rich doing that, we are totally cool with that.</p>
            <p>If you need irrefutable proof, please click <a href="<?php echo( "http".(!empty($_SERVER["HTTPS"]) ? "s" : "")."://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]."?name=".urlencode($name) ); ?> 
"><?php echo( "http".(!empty($_SERVER["HTTPS"]) ? "s" : "")."://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]."?name=".urlencode($name) ); ?></a>, where this exact message is available in full on the official <?php echo($STUDIO_NAME); ?> website.</p>
            </p>
            
            <small>This text was generated using <a href="http://vlambeer.com">Vlambeer</a>'s Monetization Approval creator.</small>
		</div>
	<?php
	}
	else
	{
		?>
		<p>Please enter your username on YouTube (or equivalent):</p>
        <form method="get">
            <input type="text" name="name" id="name" maxlength="24" />
            <input type="submit" title="Get permission!" />
        </form>
        <?php
	}
?>
</div>