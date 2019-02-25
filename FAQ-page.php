
<?php
/*
Template Name: FAQ
*/
?>
<?php get_header(); ?>
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


</html>
<?php get_footer(); ?>
