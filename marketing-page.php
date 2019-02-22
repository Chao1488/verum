<?php
/*
Template Name: Marketing
*/
?>

<?php get_header(); ?>
<div class="marketing-page">
	<div class="container">
		<div class="row first-block">
			<div class="col-lg-3 col-md-6 referral-table-wrap">
				<table class="referral-table">
					<thead class="blue-thead">
						<tr>
							<th><?php the_field('marketing_page thead-blue'); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><span>1 <?php the_field('marketing_page line'); ?></span></td>
						</tr>
						<tr>
							<td><span>2 <?php the_field('marketing_page line'); ?></span></td>
						</tr>
						<tr>
							<td><span>3 <?php the_field('marketing_page line'); ?></span></td>
						</tr>
						<tr>
							<td><span>4 <?php the_field('marketing_page line'); ?></span></td>
						</tr>
						<tr>
							<td><span>5 <?php the_field('marketing_page line'); ?></span></td>
						</tr>
						<tr>
							<td><span>6 <?php the_field('marketing_page line'); ?></span></td>
						</tr>
						<tr>
							<td><span>7 <?php the_field('marketing_page line'); ?></span></td>
						</tr>
						<tr>
							<td><span>8 <?php the_field('marketing_page line'); ?></span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-lg-3 col-md-6 percent-table-wrap">
				<table class="percent-table">
					<thead class="green-thead">
						<tr>
							<th><?php the_field('marketing_page thead-green'); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><span>7%</span></td>
						</tr>
						<tr>
							<td><span>4%</span></td>
						</tr>
						<tr>
							<td><span>2%</span></td>
						</tr>
						<tr>
							<td><span>1%</span></td>
						</tr>
						<tr>
							<td><span>1%</span></td>
						</tr>
						<tr>
							<td><span>1%</span></td>
						</tr>
						<tr>
							<td><span>1%</span></td>
						</tr>
						<tr>
							<td><span>1%</span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="content-wrapper">
					<h6 class="pre-headline"><?php the_field('marketing_page pre_headline'); ?></h6>
					<h2 class="page-headline">
					<?php the_field('marketing_page page_headline'); ?>
					</h2>

					<p><?php the_field('marketing_page page_content'); ?></p><a class="custom-btn" href="https://backoffice.verumtrade.com/sign_up" target="_blank"><span><?php the_field('marketing_page page_button'); ?></span>
						<svg id="button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
							<g>
								<polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
							</g>
						</svg></a>
				</div>
			</div>
		</div>
		<div class="second-block">
			<div class="row">
				<div class="col-sm-12">
					<h6 class="pre-headline"><?php the_field('marketing_page pre_headline1'); ?></h6>
					<h2 class="page-headline ta-c"><?php the_field('marketing_page page_headline1'); ?></h2>
					<p class="ta-c">
						<?php the_field('marketing_page page_content1'); ?> </p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 first-table-wrap">
					<table class="first-table">
						<thead class="green-thead">
							<tr>
								<th><?php the_field('marketing_page thead-green1'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span>7%</span></td>
							</tr>
							<tr>
								<td><span>4%</span></td>
							</tr>
							<tr>
								<td><span>2%</span></td>
							</tr>
							<tr>
								<td><span>1%</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-3 col-md-6 second-table-wrap">
					<table class="second-table">
						<thead class="blue-thead">
							<tr>
								<th><?php the_field('marketing_page thead-blue1'); ?> ($)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span>50 000$</span></td>
							</tr>
							<tr>
								<td><span>100 000$</span></td>
							</tr>
							<tr>
								<td><span>500 000$</span></td>
							</tr>
							<tr>
								<td><span>1 000 000$</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-3 col-md-6 third-table-wrap">
					<table class="third-table">
						<thead class="green-thead">
							<tr>
								<th><?php the_field('marketing_page thead-green2'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span>-</span></td>
							</tr>
							<tr>
								<td><span>-</span></td>
							</tr>
							<tr>
								<td><span>0.5% -<?php the_field('marketing_page page_akcii'); ?></span></td>
							</tr>
							<tr>
								<td><span>1% - <?php the_field('marketing_page page_akcii'); ?></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-3 col-md-6 fourth-table-wrap">
					<table class="fourth-table">
						<thead class="blue-thead">
							<tr>
								<th><?php the_field('marketing_page thead-blue2'); ?> ($)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span>2 000$</span></td>
							</tr>
							<tr>
								<td><span>5 000$</span></td>
							</tr>
							<tr>
								<td><span>20 000$</span></td>
							</tr>
							<tr>
								<td><span>50 000$</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row third-block">
			<div class="col-lg-6 col-md-12">
				<h6 class="pre-headline"><?php the_field('marketing_page pre_headline2'); ?></h6>
				<h2 class="page-headline">
					<?php the_field('marketing_page page_headline2'); ?></h2>
				<p><?php the_field('marketing_page page_content2'); ?></p>
			</div>
			<div class="col-lg-6 col-md-12"><img src="<?php bloginfo ('template_directory')?>/assets/images/credit-card.png" alt="credit card" style="width: 525px; height: 501px;"></div>
		</div>

	</div>
</div>
		<?php get_footer(); ?>
