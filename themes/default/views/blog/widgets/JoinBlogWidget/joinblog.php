<?php if (!$blog->isPrivate()): ?>
    <?php if ($user->isAuthenticated()): ?>
        <?php if (false === $inBlog || UserToBlog::STATUS_DELETED === $inBlog): ?>
            <a class="btn btn-warning btn-sm join-blog" href="<?php echo $blog->id; ?>"
               data-url="<?php echo Yii::app()->createUrl('/blog/blog/join'); ?>"><?php echo Yii::t(
                    'BlogModule.blog',
                    'Join blog'
                ); ?></a>
        <?php elseif ($inBlog == UserToBlog::STATUS_CONFIRMATION): ?>
            <button type="button" class="btn btn-info disabled"><?php echo Yii::t('BlogModule.blog', 'Wait for confirmation'); ?></button>
        <?php
        else: ?>
            <a class="btn btn-warning btn-sm leave-blog" href="<?php echo $blog->id; ?>"
               data-url="<?php echo Yii::app()->createUrl('/blog/blog/leave'); ?>"><?php echo Yii::t(
                    'BlogModule.blog',
                    'Leave blog'
                ); ?></a>
        <?php endif; ?>
    <?php else: ?>
        <a class="btn btn-warning btn-sm"
           href="<?php echo Yii::app()->createUrl('/user/account/login'); ?>"><?php echo Yii::t(
                'BlogModule.blog',
                'Join blog'
            ); ?></a>
    <?php endif; ?>
<?php endif; ?>
