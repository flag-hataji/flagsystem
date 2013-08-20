<script type="text/javascript"> 
jQuery(document).ready(function() {
	jQuery('#slider').bxSlider({
		auto: true,
		autoControls: false,
		controls: false,
		pager: false,
		mode: 'horizontal',
		speed: 1000,
		autoHover: true,
		pause:	6000,
		easing: 'swing',
		displaySlideQty: 3,
		moveSlideQty: 2
	});
  	jQuery('.green-button').append('<span class="hover">Back to Article</span>').each(function () {
  		var span = jQuery('span.hover', this).css('opacity', 0);
  		jQuery(this).hover(function () {
    		span.stop().fadeTo(500, 1);
 		}, function () {
   		span.stop().fadeTo(500, 0);
  		});
	});
});
</script>

<div id="main" class="archive">
		
	<div class="clearfix">
		<ul id="slider">
			<li id="slider1">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>products">○○製 電子ポット</a></h3>
				</div>
			</li>
			<li id="slider2">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>products">○○製 空気清浄機</a></h3>
				</div>
			</li>
			<li id="slider3">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>products">○○製 冷蔵庫</a></h3>
				</div>
			</li>
			<li id="slider4">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>products">○○製 炊飯器</a></h3>
				</div>
			</li>
			<li id="slider5">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>products">○○製 掃除機</a></h3>
				</div>
			</li>
			<li id="slider6">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>products">○○製 電気照明器具</a></h3>
				</div>
			</li>
			<li id="slider7">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>products">○○製 IHクッキングヒーター</a></h3>
				</div>
			</li>
			<li id="slider8">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>products">○○製 液晶テレビ</a></h3>
				</div>
			</li>
			<li id="slider9">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>products">○○製 ソーラーパネル</a></h3>
				</div>
			</li>
		</ul><!-- /slider -->
	</div><!-- /clearfix -->
</div> 