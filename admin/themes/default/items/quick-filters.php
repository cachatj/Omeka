<ul class="quick-filter-wrapper">
    <li><a href="#" tabindex="0"><?php echo __('Quick Filter'); ?></a>
    <ul class="dropdown">
        <li><a href="#"><?php echo __('Quick Filter') ?></a></li>
        <li><a href="<?php echo uri('items/browse'); ?>"><?php echo __('View All') ?></a></li>
        <li><a href="<?php echo uri('items/browse', array('public' => 1)); ?>"><?php echo __('Public'); ?></a></li>
        <li><a href="<?php echo uri('items/browse', array('public' => 0)); ?>"><?php echo __('Private'); ?></a></li>
        <li><a href="<?php echo uri('items/browse', array('featured' => 1)); ?>"><?php echo __('Featured'); ?></a></li>
    </ul>
    </li>
</ul>