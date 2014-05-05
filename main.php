<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>
	<?php tpl_metaheaders();?>
	<?php echo tpl_favicon(array('favicon', 'mobile')) ?>
	<link rel="stylesheet" type="text/css" media="all" href="/lib/tpl/gnomegr/gnomegr.css" />
</head>
<body>
<!-- header start -->
<?php include('header.php') ?>
<!-- header ends -->

<?php tpl_flush()?>
<div id="container" class="two_columns">
	<div class="container_12">
		<div class="content without_sidebar">
			<hr class="bottom_shadow"/>
		 	<!-- wikipage start -->
			<?php tpl_content()?>
			<!-- wikipage stop -->
			<?php tpl_pageinfo() ?>
		</div>
	</div>
</div> <!--container_id-->

	<div id="dokuwiki__pagetools">
                <div class="tools">
                    <ul>
                        <?php
                            $data = array(
                                'view'  => 'main',
                                'items' => array(
                                    'edit'      => tpl_action('edit',      1, 'li', 1, '<span>', '</span>'),
                                    'revert'    => tpl_action('revert',    1, 'li', 1, '<span>', '</span>'),
                                    'revisions' => tpl_action('revisions', 1, 'li', 1, '<span>', '</span>'),
                                    'backlink'  => tpl_action('backlink',  1, 'li', 1, '<span>', '</span>'),
                                    'subscribe' => tpl_action('subscribe', 1, 'li', 1, '<span>', '</span>'),
                                )
                            );

                            // the page tools can be amended through a custom plugin hook
                            $evt = new Doku_Event('TEMPLATE_PAGETOOLS_DISPLAY', $data);
                            if($evt->advise_before()){
                                foreach($evt->data['items'] as $k => $html) echo $html;
                            }
                            $evt->advise_after();
                            unset($data);
                            unset($evt);
                        ?>
                    </ul>
		</div>
	</div> <!-- dokuwiki__pagetools -->

<div class="clearer"></div>
<?php tpl_flush()?>

<!-- footer start -->
<?php include('footer.php') ?>
<!-- footer ends -->

</div> <!-- end dokuwiki -->

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
