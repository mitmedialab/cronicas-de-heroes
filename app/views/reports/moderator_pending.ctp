<?php 
$pageTitle = __("page.report.pendingapproval",true);
$this->set('title_for_layout', $pageTitle);
?>

<h2><?=$pageTitle?></h2>

<?php echo $this->element('moderation-list-links')?>

<?php echo $this->element('report_list',array('reportList'=>$reportList)) ?>

<?php echo $this->element('pagination_controls'); ?>
