<?php $__env->startSection('content'); ?>

<div id="app">
<div class="container-fluid app-body settings-page">
	<h3>Recent post sent to buffer</h3>
        <div clall="row">
            <div class="col-md-12">
                <input type="text"/>
            </div>
        </div>
		<div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr> 
				</thead> 
				<tbody> 
				<?php $__currentLoopData = $bufferPostingData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profiles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
                        <td><?php echo e($profiles->groupInfo['name']); ?></td>
                        <td><?php echo e($profiles->groupInfo['type']); ?></td>
						<td width="350">
							<div class="media">
								<div class="media-left">
									<a href="">
										<span class="fa fa-<?php echo e($profiles->groupInfo['type']); ?>"></span>
										<img width="50" class="media-object img-circle" src="<?php echo e($profiles->accountInfo['avatar']); ?>" alt="">
									</a>
								</div>
								<div class="media-body media-middle" style="width: 180px;">
									
								</div>
							</div>
						</td>
                        <td><?php echo e($profiles['post_text']); ?></td>
                        <td><?php echo e($profiles['sent_at']); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody> 
			</table>
		</div>
	</div>

</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>