<table class="table table-striped table-inverse table-bordered">
    <?php if(count($posts)): ?>
        <thead class="thead-inverse">
        <tr>
            <th>Group Name</th>
            <th>Group Type</th>
            <th>Account Name</th>
            <th>Post Text</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody >
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(isset($post->groupInfo) ? $post->groupInfo->name : null); ?></td>
                <td><?php echo e(isset($post->groupInfo) ? $post->groupInfo->type : null); ?></td>
                <td><?php echo e($post->accountInfo->user->name); ?></td>
                <td><?php echo e($post->post_text); ?></td>
                <td><?php echo e(date('d M,Y h:m a',strtotime($post->created_at))); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    <?php else: ?>
        <tr><td colspan="3">No Data Found</td></tr>
    <?php endif; ?>
</table>
<div class="paginateData">
    <?php echo e($posts->links()); ?>

</div>