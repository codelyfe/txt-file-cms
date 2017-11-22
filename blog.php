<?php echo '<head>'; ?>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>TXT Base CMS</title>

<?php echo file_get_contents( "cdn/bootstrap-v4.txt" ); ?>

<?php echo file_get_contents( "cdn/font-awesome4-7-0.txt" ); ?>

<?php //echo file_get_contents( "cdn/animate-css.txt" ); // un-comment to activate ?>

<?php //echo file_get_contents( "cdn/ionicons.txt" ); // un-comment to activate ?>

<?php //https://cdnjs.com/libraries/ ?>

<style>
<?php echo file_get_contents( "style/default.txt" ); ?>
</style>

<?php echo '</head>'; ?>

<?php echo '<body>'; ?>
	
<!--0-->
<?php echo file_get_contents( "components/navbar.txt" ); ?>
<!--0-->

<div class="container-fluid">
	<pre><?php echo file_get_contents( "blog-feed.txt" ); ?></pre>
</div>

<?php echo '</body>'; ?>