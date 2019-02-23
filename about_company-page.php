<?php
/*
Template Name: О компании
*/
?>

<?php get_header(); ?>
		<div class="home-page">
			<div class="company-page">
				<div class="first-block">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<h2 class="page-headline">
									<?php the_field('about_company_pre_headline'); ?></h2>
								<p>
								<?php the_field('about_company_page_content0'); ?></p>
								<div class="btn-row">
									<a class="custom-btn" href="https://backoffice.verumtrade.com/sign_up" target="_blank"><span><?php the_field('about_company_page_button'); ?></span>
                    <svg id="button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
                    </g></svg></a>
									<a class="secondary-btn" href="<?php bloginfo ('template_directory')?>/assets/files/VerumTradeПрезентация.pdf" target="_blank"><span><?php the_field('about_company_page_button_PDF'); ?></span>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<path fill="#3469f5" d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"></path>
										</svg></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/sYuRR2Ud9oI" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="second-block">
					<div class="container">
						<div class="row">
							<div class="col-xl-9 col-lg-12">
								<h6 class="pre-headline"><?php the_field('about_company_pre_headline1'); ?></h6>
								<h2 class="page-headline">
									<?php the_field('about_company_page_headline1'); ?></h2>
							</div>
							<div class="col-xl-3 col-lg-12 d-none d-xl-block"><a class="custom-btn" href="javascript:void(0);"><span><?php the_field('about_company_page_button1'); ?></span>
									<svg id="button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
										<g>
											<polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
										</g>
									</svg></a>
							</div>
						</div>
						<div class="timeline-block"><img src="<?php bloginfo ('template_directory')?>/assets/images/timeline.png" alt="timeline">
							<div class="timeline-description-block">
								<div class="item item-1">
									<h2 class="num">2015</h2>
									<h3 class="title"><?php the_field('about_company_title'); ?></h3>
									<p class="content"><?php the_field('about_company_content'); ?></p>
								</div>
								<div class="item item-2">
									<h2 class="num">2016</h2>
									<h3 class="title"><?php the_field('about_company_title1'); ?></h3>
									<p class="content"><?php the_field('about_company_content1'); ?></p>
								</div>
								<div class="item item-3">
									<h2 class="num">2017</h2>
									<h3 class="title"><?php the_field('about_company_title2'); ?></h3>
									<p class="content"><?php the_field('about_company_content2'); ?></p>
								</div>
								<div class="item item-4">
									<h2 class="num">2018</h2>
									<h3 class="title"><?php the_field('about_company_title3'); ?></h3>
									<p class="content"><?php the_field('about_company_content3'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="third-block">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<h6 class="pre-headline"><?php the_field('about_company_pre_headline2'); ?></h6>
								<h2 class="page-headline">
									<?php the_field('about_company_page_headline2'); ?></h2>
								<p><?php the_field('about_company_page_content'); ?></p>
								<div class="btn-row"><a class="custom-btn" href="#lightbox1" data-toggle="modal"><span><?php the_field('about_company_page_button2'); ?></span>
										<!-- ?xml version="1.0" encoding="UTF-8" standalone="no"?-->
										<svg id="svg2" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 480 480" height="480" width="480">
											<metadata id="metadata10">
												<rdf:rdf>
													<cc:work rdf:about="">
														<dc:format>image/svg+xml</dc:format>
														<dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
														<dc:title></dc:title>
													</cc:work>
												</rdf:rdf>
											</metadata>
											<defs id="defs8"></defs>
											<path id="path4" fill="#ffffff" d="M 190,340 290,240 190,140 Z"></path>
										</svg></a><a class="secondary-btn" href="https://verumcoin.com/" target="_blank"><span><?php the_field('about_company_page_button3'); ?></span>
										<svg id="button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
											<g>
												<polyline fill="none" stroke="#3469f5" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
											</g>
										</svg></a></div>
							</div>
							<div class="col-lg-6 col-md-12"><img src="<?php bloginfo ('template_directory')?>/assets/images/verumcoin.png" alt="Verumcoin" style="width: 586px; height: 514px;"></div>
						</div>
					</div>
					<div class="modal fade photo-video-modal" id="lightbox1">
						<div class="modal-dialog window">
							<button class="close-modal" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<div class="modal-content"></div>
						</div>
					</div>
				</div>
				<div class="fourth-block">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-12">
								<h6 class="pre-headline"><?php the_field('about_company_pre_headline3'); ?></h6>
								<h2 class="page-headline">
									<?php the_field('about_company_page_headline3'); ?></h2>
								<div class="flex-block">
									<div class="flex-item">
										<p><?php the_field('about_company_flex_content'); ?></p>
									</div>
									<div class="flex-item">
										<p><?php the_field('about_company_flex_content1'); ?></p>
									</div>
									<div class="flex-item">
										<p><?php the_field('about_company_flex_content2'); ?></p>
									</div>
									<div class="flex-item">
										<p><?php the_field('about_company_flex_content3'); ?></p>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="form-wrapper">
									<form class="form">
										<h3><?php the_field('about_company_pre_headline4'); ?></h3>
										<p><?php the_field('about_company_page_headline4'); ?></p>
										<div class="form-group">
											<input type="text" name="name" placeholder="<?php the_field('about_company_form_field'); ?>" required>
										</div>
										<div class="form-group">
											<input type="email" name="email" placeholder="<?php the_field('about_company_form_field1'); ?>" required>
										</div>
										<div class="form-group">
											<input type="text" name="phone" placeholder="<?php the_field('about_company_form_field2'); ?>">
										</div>
										<button class="custom-btn" type="submit" role="button"><span><?php the_field('about_company_page_button4'); ?></span>
											<svg id="submit" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
												<g>
													<polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
												</g>
											</svg>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="faq-page">
					<div class="container">
						<div class="faq-page-wrapper">
							<h6 class="pre-headline"><?php the_field('quеstion pre_headline'); ?></h6>
							<h1 class="page-headline ta-c"><?php the_field('question page_headline'); ?></h1>
							<div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical"><a class="nav-link active" href="#tab1" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true"><i class="mdi mdi-help-circle"></i> <?php the_field('question nav-link'); ?></a>
                <a class="nav-link" href="#tab2" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false"><i class="mdi mdi-account"></i> <?php the_field('question nav-link1'); ?></a>
                <a class="nav-link" href="#tab3" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                  <i class="mdi mdi-account-settings"></i><?php the_field('question nav-link2'); ?></a></div>
							<div class="tab-content" id="faq-tab-content">
								<div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
									<div class="accordion" id="accordion-tab-1">
										<div class="card">
											<div class="card-header" id="accordion-tab-1-heading-1"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1"><span><?php the_field('question tab_pre_headline'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
												<div class="card-body">
													<p><?php the_field('question tab_content'); ?></p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="accordion-tab-1-heading-2"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2"><span><?php the_field('question tab_pre_headline1'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
												<div class="card-body">
													<p><?php the_field('question tab_content1'); ?></p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="accordion-tab-1-heading-3"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3"><span><?php the_field('question tab_pre_headline2'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
												<div class="card-body">
													<p><?php the_field('question tab_content2'); ?></p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="accordion-tab-1-heading-4"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4"><span><?php the_field('question tab_pre_headline3'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
												<div class="card-body">
													<p><?php the_field('question tab_content3'); ?></p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="accordion-tab-1-heading-5"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5"><span><?php the_field('question tab_pre_headline4'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
												<div class="card-body">
													<p><?php the_field('question tab_content4'); ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
									<div class="accordion" id="accordion-tab-2">
										<div class="card">
											<div class="card-header" id="accordion-tab-2-heading-1"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1"><span><?php the_field('question tab_pre_headline5'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
												<div class="card-body">
													<p><?php the_field('question tab_content5'); ?></p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="accordion-tab-2-heading-2"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-2" aria-expanded="false" aria-controls="accordion-tab-2-content-2"><span><?php the_field('question tab_pre_headline6'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-2-content-2" aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
												<div class="card-body">
													<p><?php the_field('question tab_content6'); ?></p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="accordion-tab-2-heading-3"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-3" aria-expanded="false" aria-controls="accordion-tab-2-content-3"><span><?php the_field('question tab_pre_headline7'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-2-content-3" aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
												<div class="card-body">
													<p><?php the_field('question tab_content7'); ?></p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="accordion-tab-2-heading-4"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-4" aria-expanded="false" aria-controls="accordion-tab-2-content-4"><span><?php the_field('question tab_pre_headline8'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-2-content-4" aria-labelledby="accordion-tab-2-heading-4" data-parent="#accordion-tab-2">
												<div class="card-body">
													<p><?php the_field('question tab_content8'); ?></p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="accordion-tab-2-heading-5"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-5" aria-expanded="false" aria-controls="accordion-tab-2-content-5"><span><?php the_field('question tab_pre_headline9'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-2-content-5" aria-labelledby="accordion-tab-2-heading-5" data-parent="#accordion-tab-2">
												<div class="card-body">
													<p><?php the_field('question tab_content9'); ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
									<div class="accordion" id="accordion-tab-3">
										<div class="card">
											<div class="card-header" id="accordion-tab-3-heading-1"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1"><span><?php the_field('question tab_pre_headline10'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
												<div class="card-body">
													<p><?php the_field('question tab_content10'); ?></p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="accordion-tab-3-heading-2"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-3-content-2" aria-expanded="false" aria-controls="accordion-tab-3-content-2"><span><?php the_field('question tab_pre_headline11'); ?></span></a></div>
											<div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
												<div class="card-body">
													<p><?php the_field('question tab_content11'); ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<?php get_footer(); ?>
