<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-sm-9">
			<div class="create-account">
				<h3><?php echo e(_('Create new account')); ?></h3>

				<?php /* Action messages: the good news :D */ ?>
				<?php if(session()->has('message')): ?>
					<div class="alert alert-success">
				        <p><?php echo e(session()->get('message')); ?></p>
				    </div>
				<?php endif; ?>

				<?php /* Validation error list */ ?>
				<?php if(count($errors) > 0): ?>
				    <div class="alert alert-danger">
				        <ul>
				            <?php foreach($errors->all() as $error): ?>
				                <li><?php echo e($error); ?></li>
				            <?php endforeach; ?>
				        </ul>
				    </div>
				<?php endif; ?>

				<?php /* If account was created the form isn't needed */ ?>
				<?php if(! session()->has('message')): ?>
					<form class="form-inline" method="post" action="<?php echo e(route('accounts.create')); ?>" autocomplete="off">
						<?php echo e(csrf_field()); ?>

						<div class="form-group">
							<label class="sr-only" for="username"><?php echo e(_('Username')); ?></label>
							<input type="text" name="username" class="form-control" id="username" placeholder="<?php echo e(_('Username')); ?>" required>
						</div>
						<div class="form-group">
							<label class="sr-only" for="email"><?php echo e(_('Email address')); ?></label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<label class="sr-only" for="password"><?php echo e(_('Password')); ?></label>
							<input type="password" name="password" class="form-control" id="password" placeholder="<?php echo e(_('Password')); ?>" required>
						</div>
						<div class="form-group">
							<label class="sr-only" for="repassword"><?php echo e(_('Repeat Password')); ?></label>
							<input type="password" name="repassword" class="form-control" id="repassword" placeholder="<?php echo e(_('Repeat Password')); ?>" required>
						</div>
						<button type="submit" class="btn btn-primary"><?php echo e(_('Create account')); ?></button>
					</form>
				<?php endif; ?>

				<hr>

				<div class="help">
					<h3><?php echo e(_('Help')); ?></h3>

					<h4><?php echo e(_('Howto play?')); ?></h4>
					<ul>
						<li>
							<p><?php echo e(_('Create a new account')); ?></p>
						</li>
						<li>
							<p><?php echo e(_('Download game client')); ?></p>
						</li>
						<li>
							<p><?php echo e(_('Uncompress game client in folder named')); ?> <i>World of Warcraft</i></p>
						</li>
						<li>
							<p><?php echo e(_('Run the game always with wow.exe (never with launcher.exe)')); ?></p>
						</li>
						<li>
							<p><?php echo e(_('At logon screen enter your credentials. Enjoy :D')); ?></p>
						</li>
					</ul>

					<h4><?php echo e(_('Classic wow tools')); ?></h4>

					<ul>
						<li>
							<h5><?php echo e(_('Talent calculator')); ?></h5>
							<a href="http://rpgworld.altervista.org/classic_vanilla_talent/" rel="external">http://rpgworld.altervista.org/classic_vanilla_talent/</a>
						</li>
						<li>
							<h5><?php echo e(_('World database')); ?></h5>
							<a href="http://db.vanillagaming.org/" rel="external">http://db.vanillagaming.org/</a>
						</li>
						<li>
							<h5><?php echo e(_('Addons')); ?> 1</h5>
							<a href="https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfVFA4cGNkRG5ZdDQ" rel="external">https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfVFA4cGNkRG5ZdDQ</a>
						</li>
						<li>
							<h5><?php echo e(_('Addons')); ?> 2</h5>
							<a href="https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfQ2QxZV9Qc0RnR28" rel="external">https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfQ2QxZV9Qc0RnR28</a>
						</li>
					</ul>

				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="server-statistics">
				<h3><?php echo e(_('Server statistics')); ?></h3>
				<dl>
					<dt><?php echo e(_('Characters')); ?></dt>
						<dd><?php echo e(_('Total characters on server')); ?> <strong><?php echo e($characters); ?></strong></dd>
					<dt><?php echo e(_('Players online')); ?></dt>
						<dd><?php echo e(_('Total players online')); ?> <strong><?php echo e($online); ?></strong></dd>
					<dt><?php echo e(_('Created accounts')); ?></dt>
						<dd><?php echo e(_('Total accounts on server')); ?> <strong><?php echo e($accounts); ?></strong></dd>
				</dl>
			</div>

			<div class="client-download">
				<h3><?php echo e(_('Download game client')); ?></h3>
				<p><a href="/downloads/wow-1.12.1.zip">World of Warcraft 1.12.1 EN</a></p>

				<h4><?php echo e(_('Extra downloads')); ?></h4>
				<p><a href="#"><?php echo e(_('Server VirtualBox image')); ?></a></p>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>