<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<footer class="page-end">

<div id="spenden" class="text-white py-4" style="background: url(/wp-content/uploads/2017/03/Ohne-Titel-2.001-1.jpeg); background-position: center center; background-size: cover">
    <div class="container py-5">
      <form id="donationForm" class="donate">
        <div id="donationCarousel" class="carousel slide" data-interval="0" data-ride="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row row justify-content-between align-items-center">
                <!-- FIRST PAGE -->
                <div class="col-md-5 py-5">
                  <h1>Die demokratische Revolution <u>braucht Dich!</u></h1>
                  <p>Unterstütze DiB mit einer Spende!</p>
                </div>
                <div class="col-md-5 py-5 h5">
                  <input name="pk_campaign" value="website-form-below" type="hidden">
                  <div class="container">
                    <div class="row">
                      <div class="form-check col-4">
                        <input class="form-check-input" name="amount" id="one-hun" value="100" type="radio">
                        <label class="form-check-label" for="one-hun">
                          100
                        </label>
                      </div>
                      <div class="form-check col-4">
                        <input class="form-check-input" name="amount" id="fifty" value="50" type="radio">
                        <label class="form-check-label" for="fifty">
                          50
                        </label>
                      </div>
                      <div class="form-check col-4">
                        <input class="form-check-input" name="amount" id="twenty" value="20" type="radio">
                        <label class="form-check-label" for="twenty">
                          20
                        </label>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="form-check col-4">
                        <input class="form-check-input" name="amount" id="ten" value="10" type="radio">
                        <label class="form-check-label" for="ten">
                          10
                        </label>
                      </div>
                      <div class="form-check col-4">
                        <input class="form-check-input" name="amount" id="five" value="5" type="radio">
                        <label class="form-check-label" for="five">
                          5
                        </label>
                      </div>
                      <div class="form-check col-4">
                        <input class="custom" placeholder="Anderer" name="amount-alternative" id="custom-value" value="" type="number">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col text-right">
                        <a role="button" class="btn btn-primary btn-lg js-switch-to-donate">Spenden!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-between align-items-center">
                <!-- FIRST PAGE -->
                <div class="col-md-5 py-4">
                    <h2><span class="js-amount-lbl"></span> EUR spenden <a role="button" class="btn js-switch-to-amounts text-muted small">Betrag ändern</a></h2>
                  <div>
                    <label>
                      <input checked="" name="payment[interval]" value="0" type="radio"> einmaling 
                    </label>
                    <label>
                      <input name="payment[interval]" value="1" type="radio"> monatlich 
                    </label>
                    <label>
                      <input name="payment[interval]" value="6" type="radio"> halbjährlich 
                    </label>
                    <label>
                      <input name="payment[interval]" value="12" type="radio"> jährlich 
                    </label>
                  </div>
                  <div>
                    <label>
                      <input name="payment[wants_receipt]" value="receipt_now" type="checkbox"> Ich möchte eine Spendenquitting erhalten
                    </label>
                  </div>
                  <div class="pt-2">
                    <h4>Kontakt-Informationen</h4>
                    <div class="row no-gutters">
                        <div class="col-md-6 mb-1">
                            <input class="form-control outline" placeholder="Vorname" id="payment_first_name" name="payment[first_name]" type="text">
                        </div>
                        <div class="col-md-6 mb-1">
                            <input class="form-control outline" placeholder="Nachname" id="payment_last_name" name="payment[last_name]" type="text">
                        </div>
                        <div class="col-md-7 mb-1">
                            <input class="form-control outline" placeholder="E-Mail" id="payment_email" name="payment[email]" type="text">
                        </div>
                        <div class="col-md-5 mb-1">
                            <input class="form-control outline" placeholder="Telefon (optional)" id="payment_phone" name="payment[phone]" type="text">
                        </div>
                      </div>
                    <div class="row no-gutters">
                      <div class="col-md-12 mb-1">
                        <select name="payment[person_custom_field_2445]" class="form-control outline" id="payment_person_custom_field_2445">
                          <option value="" selected="selected">(Bitte Bundesland wählen)</option>
                          <option value="Baden-Württemberg">Baden-Württemberg</option>
                          <option value="Bayern">Bayern</option>
                          <option value="Berlin">Berlin</option>
                          <option value="Brandenburg">Brandenburg</option>
                          <option value="Bremen">Bremen</option>
                          <option value="Hamburg">Hamburg</option>
                          <option value="Hessen">Hessen</option>
                          <option value="Mecklenburg-Vorpommern">Mecklenburg-Vorpommern</option>
                          <option value="Niedersachsen">Niedersachsen</option>
                          <option value="Nordrhein-Westfalen">Nordrhein-Westfalen</option>
                          <option value="Rheinland-Pfalz">Rheinland-Pfalz</option>
                          <option value="Saarland">Saarland</option>
                          <option value="Sachsen">Sachsen</option>
                          <option value="Sachsen-Anhalt">Sachsen-Anhalt</option>
                          <option value="Schleswig-Holstein">Schleswig-Holstein</option>
                          <option value="Thüringen">Thüringen</option>
                          <option value="Ausland">Ausland</option>
                          </select>
                      </div>
                    </div>
                  </div>
                    
                </div>
                <div class="col-md-5 py-4">
                  <h4>Bankverbindung<a href="/spenden" role="button" class="btn js-switch-to-amounts text-akz-blue small">andere Zahlungsweise</a></h4>
                  <div>
                    <input placeholder="Kontoinhaber*in" maxlength="150" name="payment[bank_account_owner]" class="form-control col-md-12 outline mt-1" id="payment_bank_account_owner" type="text">
                    <input placeholder="IBAN" name="payment[bank_iban]" id="payment_bank_iban" class="form-control col-md-12 outline mt-1" type="text">
                    <input placeholder="BIC/Swift" name="payment[bank_bic]" class="form-control col-md-12 outline mt-1" id="payment_bank_bic" type="text">             
                  </div>
                  <p class="small">Hiermit stimme ich der Abbuchung der Spende zu und bestätige, dass ich Kontoinhaber*in bin.</p>
                  <div class="d-flex justify-content-between">
                    <a target="_blank" href="http://www.fundraisingbox.com"><img style="border: 0 !important" src="https://secure.fundraisingbox.com/images/FundraisingBox-Logo-Widget.png" alt="FundraisingBox Logo" border="0"></a>
                    <button type="submit" class="btn btn-primary btn-lg">Jetzt spenden</button>
                  </div>

                </div>
              </div>
              </div>
            </div>
          </div>
        </form></div>
      
    </div>


	<?php if ( 'container' == $container ) : ?>
		<div class="container" >
	<?php endif; ?>
		<div class="row justify-content-between  align-items-center">
		  <div class="col justify-content-center">

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'social',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'list-inline text-right mt-2 mb-0',
						'fallback_cb'     => '',
						'menu_id'         => 'social-footer-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
		  </div>
		</div>

	<?php if ( 'container' == $container ) : ?>
		</div >
	<?php endif; ?>

	<?php get_sidebar( 'footerfull' ); ?>

		<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row mt-2">
		      <div class="col">
		        <small>© 2018 
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php bloginfo( 'name' ); ?>
						
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->
				</small>
		      </div>
		      <div class="col text-right">

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'container_class' => 'list-inline',
							'container_id'    => '',
							'menu_class'      => '',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
		      </div>
			</div><!-- row end -->

		</div><!-- container end -->

</footer>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script type="text/javascript">
  var MauticDomain = 'https://mautic.bewegung.jetzt';
  var MauticLang   = {
      'submittingMessage': "Bitte warten..."
  }

jQuery(function($) {
  // donation carousel and framework
  $('#custom-value').change(function(){
    $('input[name=amount]:checked').attr('checked', false);
  });
  $('input[name=amount]').change(function(){
    $('#custom-value').val('');
  });

  $('.js-switch-to-donate').click(function() {
    var amnt = $('#custom-value').val() || $('input[name=amount]:checked').val();
    if(!amnt) return;
    $('.js-amount-lbl').text(amnt);
    $('.js-amount-value').val(amnt);
    $("#donationCarousel").carousel(1);
  });
  $('.js-switch-to-amounts').click(function() {
    $("#donationCarousel").carousel(0);
  });
});
</script>
<script type="text/plain" data-cookieconsent="required">
jQuery(function($) {
    // Donation Form on bottom
    var head            = document.getElementsByTagName('head')[0];
    var script          = document.createElement('script');
    script.type         = 'text/javascript';
    script.src          = 'https://secure.fundraisingbox.com/js/jquery.fundraisingbox.min.js';
    script.async        = true;
    script.onload       = function() {
      jQuery("#donationForm").fundraisingBoxForm({
          hash: "72769j2tcsgcihsr"
      });
    };
    head.appendChild(script);
});
</script>
<script data-src="https://mautic.bewegung.jetzt/mtc.js" data-cookieconsent="required"></script>


<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setCookieDomain", "*.bewegung.jetzt"]);
  _paq.push(["setDomains", ["*.bewegung.jetzt"]]);
  _paq.push(["setDoNotTrack", true]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.bewegung.jetzt/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->



</body>

</html>

