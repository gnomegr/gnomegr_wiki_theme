<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<div id="global_domain_bar">
	<div>
		<a href="http://www.gnome.org" target="_blank">GNOME.org</a>
	</div>
	<div>
		<a href="http://www.gnome.gr" target="_blank">GNOME.gr</a>
	</div>
	<div>
		<a href="http://planet.gnome.gr" target="_blank">Πλανήτης GNOME.gr</a>
	</div>
</div>

<div class="dokuwiki">
  <?php html_msgarea()?>

  <div class="stylehead">
	<!-- header -->
	<div id="header" class="container_12">

		<div id="logo" class="grid_3">
			<?php
            // get logo either out of the template images folder or data/media folder
            $logoSize = array();
            $logo = tpl_getMediaFile(array(':wiki:logo.png', ':logo.png', 'images/logo.png'), false, $logoSize);

            // display logo and wiki title in a link to the home page
            tpl_link(
                wl(),
                '<img src="'.$logo.'" '.$logoSize[3].' alt="" />', 'accesskey="h" title="[H]"'
            );
        ?>
		</div>
<?php if ($conf['useacl']): ?>
		<div id="top_bar" class="grid_9">
			<div class="left">
				<div class="menu-globalnav-container">
					<ul id="menu-globalnav" class="menu">
						<li><?php	tpl_action('admin', 1); ?></li>
						<li><?php	tpl_action('profile', 1);?></li>
						<li><?php	tpl_action('login', 1);?></li>
						<li><?php	tpl_action('register', 1);?></li>
					</ul>
				</div>
			</div>
			<div><?php tpl_searchform(); ?></div>
		</div>
<?php endif ?>
		<!-- introduction home -->
		<div class="grid_12">
			<div style="padding: 35px 0 0 0">
				<span style="font-size: 42px; color: #0489B7; line-height: normal;">Ελληνική κοινότητα του GNOME</span>
				<p class="main_header" style="margin-top: 5px;">Καλώς ήρθατε στο wiki!</p>
			</div>
		</div>

		<div class="clearer"></div>
	</div>
