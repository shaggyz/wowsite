<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo e($wowServerName); ?> Wowserver - <?php echo $__env->yieldContent('title'); ?></title>
	<link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon-' . rand(1,9) . '.png')); ?>">
	<?php echo $__env->yieldContent('head'); ?>
</head>
<body>
	<div class="container">

		<?php /* Banner and future login header */ ?>
		<header class="row">
			<?php /* banner */ ?>
			<div class="col-md-10">
				<h1><?php echo e($wowServerName); ?> Wowserver</h1>
				<h2 class="muted"><?php echo e(_('Classic Vanilla') . ' ' . $wowServerVersion . ' ' . _('World of warcraft server')); ?></h2>
				<p><strong><?php echo e(_('Untouched')); ?></strong> <?php echo e(_('database, Blizzard rates, No item store, normal drops, etc.')); ?></p>	
			</div>
			<?php /* language selectort */ ?>
			<div class="col-md-2">
				<?php echo LaravelGettext::getSelector([
				        'en_US' => _('English'),
				        'es_ES' => _('Spanish')
				    ])->render(); ?>

			</div>
		</header>

		<?php /* Main site section  */ ?>
		<section id="content">
			<?php echo $__env->yieldContent('content'); ?>
		</section>

		<?php /* foooooter */ ?>
		<footer>
			<hr>
			<p><?php echo e($wowServerName); ?> wow server - <?php echo e(date('Y')); ?></p>
			<script type="text/javascript" src="/vendor/jquery/dist/jquery.min.js"></script>
			<script type="text/javascript" src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="/js/bundle.js"></script>
			<?php echo $__env->yieldContent('foot'); ?>
		</footer>
	</div>
</body>
</html>