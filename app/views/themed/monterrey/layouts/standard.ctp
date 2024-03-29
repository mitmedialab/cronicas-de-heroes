<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <?php echo $html->charset(); ?>

    <title>
        <?php echo $title_for_layout; ?> - <?php __('site.title'); ?> <?= Configure::read('Gui.CityName') ?>
    </title>

    <meta name="google-site-verification" content="BIoW-yZb0Ft-5-36py_NXrIiY_J2wPFwsVmLqLtV37w" />

    <?php
        echo $html->meta('icon');

        echo $html->css('heroreports-base');
        echo $html->css('heroreports-custom');  // this is the file you can edit in your theme to override default styles
        if(Configure::read('debug')==2) {
            echo $html->css('cake.debug');
        }
        
        echo $javascript->link('jquery-1.5.min');
        echo $javascript->link('jquery-ui-1.8.10.custom.min');
        echo $javascript->link('openlayers/OpenLayers');
        echo $javascript->link('openlayers/cloudmade');
        echo $javascript->link('heroreports');
        echo $javascript->link('heroreports-config');
        echo $javascript->link('http://maps.google.com/maps/api/js?sensor=false');
        echo $javascript->link('audio-player');
        echo $javascript->link('jwplayer');
        echo $scripts_for_layout;
    ?>
    <?php echo $this->element('analytics')?>
    
</head>

<body>

    <div id="hr-container">

<?php 
if ( Configure::Read('Gui.IsDevInstall') ) {
?>
    <div id="hr-dev-waring">
    <?php __('warning.devinstall') ?>
    </div>
<?php 
}
?>

        <div id="hr-header">
            <div class="hr-width-wrapper">

<?php 
$navCss = ($isModerator || $isAdmin) ? 'hr-admin-nav' : '';
?>
                <div id="hr-nav" class="<?=$navCss?>">
                    <?php echo $this->element('navigation')?>
                </div>

                <?php echo $this->element('header')?>

            </div>
        </div>
        
        <div id="hr-pre-content"><?php echo $this->element('pre_content')?></div>
        
        <div id="hr-content">

            <?php 
            if( (Configure::read('debug')==2)){
                if(count($setupErrors)>0){
            ?>
            <div class="error-message">
                <?php print join("<br />",$setupErrors); ?>
            </div>
            <?php 
                }
            }
            ?>
            
            <?php echo $this->Session->flash(); ?>

            <?php echo $content_for_layout; ?>

            <div style="clear: both;"></div> <!-- make sure scaffolding looks ok -->

        </div>

        <div id="hr-footer">
            <div class="hr-width-wrapper">
            <?php echo $this->element('footer')?>
            </div>
        </div>
        
        <div id="hr-sub-footer">
            <div class="hr-width-wrapper">
            <h2>
            Crónicas de Héroes Monterrey es parte de la red de comunidades 
            <a href="http://www.heroreports.org/">Hero Reports</a> 
            de 
            <a href="http://civic.mit.edu">MIT Center for Civic Media</a>
            </h2>
            </div>
        </div>
        
    </div>

</body>

</html>
