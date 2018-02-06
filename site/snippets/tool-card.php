<div class="col-sm-4">
	<div class="card mb-6">
		<a href="<?= $p->url() ?>">
			<div class="card-img-top">
				<?php if ($p->hasImages()) : ?>
		    		<?php $img = $p->images()->first() ?>
		    		<div class="cover-img" style="background-image:url('<?= $img->url() ?>')">
		    			<?php if ($diff = $p->difficulty()->int()) : ?>
			    			<div class="cover-meta">
			    				<?php snippet('stars', array('diff' => $diff)) ?>
			    			</div>
			    		<?php endif ?>
		    		</div>
		    	<?php else : ?>
		    		<div class="cover-img"></div>
		    	<?php endif ?>
		    </div>
	    </a>
		<div class="card-body caption">
			<a href="<?= $p->url() ?>">
		    	<h4 class="card-title">
		    		<?= $p->title() ?>
	    		</h4>
		    </a>
		    <p class="card-text"><?= $p->baseline()->excerpt(80) ?></p>
		</div>
		<div class="card-footer text-muted">
			<?php if ($p->template() == 'tool') : ?>
				<i class="fa fa-wrench"></i> Outil
			<?php elseif ($p->template() == 'module') : ?>
				<i class="fa fa-users"></i> Module
			<?php endif ?>
		</div>
	</div>
</div>

