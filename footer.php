<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<div id="footer-art"></div>
<div id="footer-grass"></div>

<div id="footer">
	<div class="container_12">
		<div  id="footer-left" class="links grid_9" >
			<div>
				<ul>
					<li><a href="http://www.gnome.gr/" target="_blank">Αρχική σελίδα</a></li>
					<li><a href="http://gnome.gr/whygnome/">Γιατί GNOME;</a></li>
					<li><a href="http://gnome.gr/screenshots/">Στιγμιότυπα</a></li>
					<li><a href="http://gnome.gr/downloads/">Λήψη</a></li>
					<li><a href="http://gnome.gr/contribute/">Συμμετοχή</a></li>
					<li><a href="http://gnome.gr/mailing-list/">Επικοινωνία</a></li>
				</ul>
			</div>

			<div>
				<ul>
					<li><a href="http://www.gnome.org/" target="_blank">GNOME.org</a></li>
					<li><a href="http://gnome.gr/" target="_blank">GNOME.gr</a></li>
					<li><a href="http://planet.gnome.gr/" target="_blank">Πλανήτης GNOME.gr</a></li>
					<li><a href="http://planet.gnome.org/" target="_blank">Πλανήτης GNOME.org</a></li>
					<li><a href="http://lists.gnome.gr/listinfo.cgi/team-gnome.gr" target="_blank">Λίστα ταχυδρομείου</a></li>
					<li><a href="http://gnome.gr/mailing-list/irc-gnome-el/">Κανάλι στο IRC</a></li>
				</ul>
			</div>

			<div>
				<ul>
					<li><a href="https://www.facebook.com/gnomegr" target="_blank">Facebook</a></li>
					<li><a href="http://twitter.com/gnomegr/" target="_blank">Twitter</a></li>
					<li><a href="http://identi.ca/gnomegr" target="_blank">Identi.ca</a></li>
					<li><a href="http://linkd.in/mHGOIb" target="_blank">Linkedin</a></li>
					<li><a href="https://plus.google.com/117283807360585416333?prsrc=3" style="text-decoration:none;">Google+</a></li>
				</ul>
			</div>
		</div> <!--footer-left-->
		<div class="grid_3"><?php tpl_actiondropdown($lang['tools']); ?></div>
        <div class="clearer"></div>

		<!-- footnotes -->
		<div id="footnotes" class="links ">
			<p>Πνευματικά δικαιώματα © 2008‒2014 <strong>Ελληνική κοινότητα του GNOME</strong></p>
			<?php tpl_license(false);?>
		</div>
	</div><!--container_12-->

	<div class="clearer"></div>
</div>
