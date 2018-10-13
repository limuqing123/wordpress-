<?php
/**
 * Front Page
 *
 * @package square
 */

$square_page = '';
$square_page_array = get_pages();
if(is_array($square_page_array)){
	$square_page = $square_page_array[0]->ID;
}

if ( 'page' == get_option( 'show_on_front' ) ) {
    include( get_page_template() );
}else{
get_header(); 
?>
<section id="sq-home-slider-section">
	<div id="sq-bx-slider">
	<?php for ($i=1; $i < 4; $i++) {  
		if($i == 1){
			$square_slider_title = get_theme_mod('square_slider_title1', __('Free WordPress Themes', 'square'));
			$square_slider_subtitle = get_theme_mod('square_slider_subtitle1', __('Create website in no time', 'square'));
			$square_slider_image = get_theme_mod('square_slider_image1', get_template_directory_uri().'/images/bg.jpg');
		}else{
			$square_slider_title = get_theme_mod('square_slider_title'.$i);
			$square_slider_subtitle = get_theme_mod('square_slider_subtitle'.$i);
			$square_slider_image = get_theme_mod('square_slider_image'.$i);
		}

		if( $square_slider_image ){
		?>
		<div class="sq-slide sq-slide-count<?php echo $i; // WPCS: XSS OK. ?>">
			<img src="<?php echo esc_url( $square_slider_image ); ?>" alt="<?php esc_attr_e('Slider', 'square') ?>">
			
			<?php if( $square_slider_title || $square_slider_subtitle){ ?>
				<div class="sq-slide-caption">
					<div class="sq-slide-cap-title animated fadeInDown">
						<?php echo esc_html( $square_slider_title ); ?>
					</div>

					<div class="sq-slide-cap-desc animated fadeInUp">
						<?php echo esc_html( $square_slider_subtitle ); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php 
		}
	} ?>
	</div>
	<div class="sq-banner-shadow"><img src="<?php echo get_template_directory_uri() // WPCS: XSS OK. ?>/images/banner-shadow.png" alt="<?php esc_attr_e('Banner Shadow', 'square'); ?>"></div>
</section>

<section id="sq-featured-post-section" class="sq-section">
	<div class="sq-container">
		<div class="sq-featured-post-wrap sq-clearfix">
			<?php 
			$square_enable_featured_link = get_theme_mod('square_enable_featured_link', true);
			$FontAwesome=array("","fa-user","fa-pagelines","fa-phone-square");
			for( $i = 1; $i < 4; $i++ ){
				$square_featured_page_id = get_theme_mod('square_featured_page'.$i, $square_page ); 
				$square_featured_page_icon =$FontAwesome[$i];
			
			if($square_featured_page_id){
				$args = array( 'page_id' => $square_featured_page_id );
				$query = new WP_Query($args);
				if($query->have_posts()):
					while($query->have_posts()) : $query->the_post();
				?>
					<div class="sq-featured-post <?php echo 'sq-featured-post'.$i // WPCS: XSS OK.; ?>">
						<div class="sq-featured-icon"><i class="fa <?php echo esc_attr( $square_featured_page_icon ); ?>"></i></div>
						<h4><?php the_title(); ?></h4>
						<div class="sq-featured-excerpt">
						<?php 
						if(has_excerpt()){
							echo get_the_excerpt(); // WPCS: XSS OK.
						}else{
							echo square_excerpt( get_the_content(), 64); // WPCS: XSS OK.
						}?>
						</div>
						<?php 
						if($square_enable_featured_link){
							?>
							<a href="<?php the_permalink(); ?>" class="sq-featured-readmore"><i class="fa fa-plus-square-o"></i></a>
							<?php
						}
						?>
					</div>
				<?php
				endwhile;
				endif;	
				wp_reset_postdata();
				}
			}
			?>
		</div>
	</div>
</section>

<?php 
$square_disable_about_sec = get_theme_mod('square_disable_about_sec');
if(!$square_disable_about_sec){
$square_about_image_stack = get_theme_mod('square_about_image_stack');
$square_about_sec_class = !$square_about_image_stack ? 'sq-about-fullwidth' : "";
?>
<section id="sq-about-us-section" class="sq-section">
	<div class="sq-container sq-clearfix">
		<div class="sq-about-sec  sq-about-fullwidth">
		
			<h2 class="sq-section-title">产品展示Products</h2>
			<div class="sq-content">
				<ul class="imageflip box">
					<li class="container">
						<div class="front">
							<img src="image\1cpzs.jpg">
						</div>
						<div class="back">
							<h3 class="one">文件篮</h3>
							<p class="one">轻松收纳</p>
							<p class="one">温馨办公</p>
						</div>
					</li>
					<li class="container">
						<div class="front">
							<img src="image\2cpzs.jpg">
						</div>
						<div class="back">
							<h3 class="one">中性笔</h3>
							<p class="one">出墨流畅</p>
							<p class="one">顺滑书写</p>
						</div>
					</li>
					<li class="container">
						<div class="front">
							<img src="image\3cpzs.jpg">
						</div>
						<div class="back">
							<h3 class="one">透明胶纸</h3>
							<p class="one">粘性十足</p>
							<p class="one">缠绕紧实</p>
						</div>
					</li>
					<li class="container">
						<div class="front">
							<img src="image\4cpzs.jpg">
						</div>
						<div class="back">
							<h3 class="one">拉伸膜</h3>
							<p class="one">拉伸力强</p>
							<p class="one">透明度好</p>
						</div>

					</li>
				</ul>
				<ul class="imageflip box">
					<li class="container">
						<div class="front">
							<img src="image\5cpzs.jpg">
						</div>
						<div class="back">
							<h3 class="one">PE袋</h3>
							<p class="one">封口结实</p>
							<p class="one">防尘防潮</p>
						</div>

					</li>
					<li class="container">
						<div class="front">
							<img src="image\6cpzs.jpg">
						</div>
						<div class="back">
							<h3 class="one">纱手套</h3>
							<p class="one">耐磨防滑</p>
							<p class="one">吸汗透气</p>
						</div>

					</li>
					<li class="container">
						<div class="front">
							<img src="image\7cpzs.jpg">
						</div>
						<div class="back">
							<h3 class="one">口罩</h3>
							<p class="one">隔离细菌</p>
							<p class="one">自然呼吸</p>
						</div>

					</li>
					<li class="container">
						<div class="front">
							<img src="image/8cpzs.jpg">
						</div>
						<div class="back">
							<h3 class="one">劳保鞋</h3>
							<p class="one">穿着舒适</p>
							<p class="one">有效防护</p>
						</div>

					</li>
				</ul>
			</div>
		</div>		
	</div>
</section>
<?php } 

$square_disable_tab_sec = get_theme_mod('square_disable_tab_sec');
if(!$square_disable_tab_sec){
?>
<section id="sq-tab-section" class="sq-section">
	<ul class="sq-container sq-clearfix box">
		<li>
			<img src="image/foot_icon1.png" alt="正品保障">
			<span>正品保障</span>
		</li>
		<li>
			<img src="image/foot_icon2.png" alt="选型优化">
			<span>选型优化</span>
		</li>	
		<li>
			<img src="image/foot_icon3.png" alt="运费全免">
			<span>运费全免</span>
		</li>	
		<li>
			<img src="image/foot_icon4.png" alt="全线低价">
			<span>全线低价</span>
		</li>	
	</ul>
</section>

<?php } ?>
<?php 
get_footer(); 
} 