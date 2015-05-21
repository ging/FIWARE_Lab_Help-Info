<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						

        <div class="tabbable">
          <header>
            <div class="intro">
            <!--<h4 data-toggle="tooltip" data-placement="right" title="Click on the links to see the FI-WARE video tutorials"><i class="fa fa-question-circle"></i></h4>-->
            <h4 class="h4">Click on the links to see the FI-WARE video tutorials</h4>
            </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#cloud" data-toggle="tab">Cloud</a></li>
              <li><a href="#store" data-toggle="tab">Store</a></li>
              <li><a href="#mashup" data-toggle="tab">Mashup</a></li>
              <li><a href="#account" data-toggle="tab">Account</a></li>
            </ul>
            <span class="corner hidden-tablet hidden-phone"></span>
          </header>
          <div class="tab-content">
            <div class="tab-pane active" id="cloud">
              <div class="video">
           
                <iframe id="blueprints-video" src="//www.youtube.com/embed/MdZS_0jt6Vo" frameborder="0" allowfullscreen></iframe>
              
                <iframe id="instances-video" src="//www.youtube.com/embed/mb7CdMnZh7Q" frameborder="0" allowfullscreen></iframe>
                
                <iframe id="o-storage-video" src="//www.youtube.com/embed/M0plEExFQgI" frameborder="0" allowfullscreen></iframe>
             
              </div>

              <ul class="description">
                <div class="tabbable"> <!-- Only required for left/right tabs -->
                  <ul class="nav nav-pills nav-justified" role="tablist" id="myTab">
                    <li role="presentation" class="active"><a href="#blueprints-t" aria-controls="home" role="tab" data-toggle="tab">Blueprints</a></li>
                    <li role="presentation"><a href="#instances-t" aria-controls="profile" role="tab" data-toggle="tab">Instances</a></li>
                    <li role="presentation"><a href="#object-storage-t" aria-controls="messages" role="tab" data-toggle="tab">Object Storage</a></li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="blueprints-t">
                      <p>Blueprint Templates let you quickly create a template from which to build your application.</p>
                                        <p>You can specify the software you need in the Tier Templates and easily deploy all the instances with one click.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="instances-t">
                      <p>Use the Cloud section to create virtual servers for your applications in FI-WARE.</p>
                      <p>This short video shows how to start a virtual server from an image and configure <acronym title="Internet protocol">IP</acronym>, security groups, and keys to access it.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="object-storage-t">
                      <p>The FI-WARE Object Storage facility is ideal for storing large static files.</p>
                      <p>You can manage your object store using the FI-WARE, and integrate your applications with it through the <acronym title="connecting digital media interfaces">CDMI</acronym> interface.</p>
                      <p>The FI-WARE Object Storage facility is ideal for storing large static files. You can manage your object store using the FI-WARE, and integrate your applications with it through the <acronym title="connecting digital media interfaces">CDMI</acronym> interface.</p>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
 

            <div class="tab-pane" id="store">
              
              <div class="video">
                <iframe src="//www.youtube.com/embed/-yainBAU32E" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="description">
                <div class="content">
                  <p>Use the Store portal to publish your own service offerings and to acquire those of your interest.</p>
                  <p>You can use the Store to publish your service offerings including Mashup resources, Account applications or external services, or to obtain those offerings of your interest. The Store allows you to manage your offerings through their entire life cycle.</p>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="mashup">
              <div class="video">
                <iframe src="//www.youtube.com/embed/yzQqstBAUeo" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="description">
                <div class="content">
                  <p>Use the Mashup portal to easily create value added web application mashups integrating heterogeneous data, application logic and user interface components (aka widgets).</p>

                  <p>As an end user, you can use the Mashup portal to create and your own web application mashups from existing widgets and operators without requiring programming skills, and you can even share the mashups by publishing them in a registered store or marketplace. As a web developer, you can enrich the existing catalogue with your own catalogue of widgets and operators, and publish them through the Store. Wirecloud offers you a rich set of connectors to other FI-WARE <acronym title="Generic Enablers">GEs</acronym> that ease the task.</p>  
                </div>
              </div>
            </div>

            <div class="tab-pane" id="account">
              <div class="video">
                <iframe src="//www.youtube.com/embed/FtV0jTL4Vyw" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="description">

              <div class="content">
                <p>Use the Account section to register your new applications in FI-WARE, associating roles and permissions.</p>

                <p>If you want to set up your users and organizations, you can also go to the Account application and add their data in an easy to use user interface. </p>
              </div>

              </div>
            </div>
          </div>
        </div>

    
      
      
      
        <div id="blog">

						<?php if (have_posts()) { ?> 
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', get_post_format());
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?> 
						</div>
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 