<?php get_header(); ?>

      <section class="tabbable">
        
        <header>

        <div class="intro">
          <span class="fi-band"></span>
          Click on the links to see the FIWARE video tutorials
        </div>
          <ul class="nav nav-tabs">
            <li><a href="#cloud" data-toggle="tab">Cloud</a></li>
            <li><a href="#store" data-toggle="tab">Store</a></li>
            <li><a href="#mashup" data-toggle="tab">Mashup</a></li>
            <li><a href="#account" data-toggle="tab">Account</a></li>
          </ul>
          <span class="corner hidden-tablet hidden-phone"></span>
        </header>

        <div class="tab-content">
          <div class="tab-pane active" id="cloud">
            <div class="video span6">
           
                <iframe id="blueprints-video" src="//www.youtube.com/embed/MdZS_0jt6Vo" frameborder="0" allowfullscreen></iframe>
              
                <iframe id="instances-video" src="//www.youtube.com/embed/mb7CdMnZh7Q" frameborder="0" allowfullscreen></iframe>
                
                <iframe id="o-storage-video" src="//www.youtube.com/embed/M0plEExFQgI" frameborder="0" allowfullscreen></iframe>
             
            </div>

            <ul class="description span5">
              <div class="tabbable description"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                  <li id="li_button1"><a id="blueprints" class="sub-active"href="#tab5" data-toggle="tab">Blueprints</a></li>
                  <li><a id="instances" href="#tab6" data-toggle="tab">Instances</a></li>
                  <li><a id="o-storage" href="#tab7" data-toggle="tab">Object Storage</a></li>
                </ul>
                <div class="tab-content">
                  <div id="blueprints-text" class="tab-pane active" id="tab5">
                    <p>Blueprint Templates let you quickly create a template from which to build your application.</p>
                    <p>You can specify the software you need in the Tier Templates and easily deploy all the instances with one click.</p>
                  </div>
                  <div id="instances-text" class="tab-pane" id="tab6">
                    <p>Use the Cloud section to create virtual servers for your applications in FIWARE.</p>
                    <p>This short video shows how to start a virtual server from an image and configure IP, security groups, and keys to access it.</p>
                  </div>
                  <div id="o-storage-text" class="tab-pane" id="tab7">
                    <p>The FIWARE Object Storage facility is ideal for storing large static files.</p>
                    <p>You can manage your object store using the FIWARE, and integrate your applications with it through the CDMI interface. The FIWARE Object Storage facility is ideal for storing large static files. You can manage your object store using the FIWARE, and integrate your applications with it through the CDMI interface.</p>
                  </div>
                </div>
              </div>
            </ul>
          </div>
          <div class="tab-pane" id="store">
            <div class="video span6">
              <iframe src="//www.youtube.com/embed/PR2gnSJLKvc" frameborder="0" allowfullscreen></iframe>
            </div>
            <ul class="description span5">
              <div class="content">
                <p>Use the Store portal to publish your own service offerings and to acquire those of your interest</p>
                <p>You can use the Store to publish your service offerings including Mashup resources, Account applications or external services, or to obtain those offerings of your interest. The Store allows you to manage your offerings through their entire life cycle.</p>
              </div>
            </ul>
          </div>
          <div class="tab-pane" id="mashup">
            <div class="video span6">
              <iframe src="//www.youtube.com/embed/yzQqstBAUeo" frameborder="0" allowfullscreen></iframe>
            </div>
            <ul class="description span5">
              <div class="content">
                <p>Use the Mashup portal to easily create value added web application mashups integrating heterogeneous data, application logic and user interface components (aka widgets).</p>

                <p>As an end user, you can use the Mashup portal to create and your own web application mashups from existing widgets and operators without requiring programming skills, and you can even share the mashups by publishing them in a registered store or marketplace. As a web developer, you can enrich the existing catalogue with your own catalogue of widgets and operators, and publish them through the Store. Wirecloud offers you a rich set of connectors to other FIWARE GEs that ease the task.</p>  
              </div>
            </ul>
          </div>
          <div class="tab-pane" id="account">
            <div class="video span6">
              <iframe src="//www.youtube.com/embed/FtV0jTL4Vyw" frameborder="0" allowfullscreen></iframe>
            </div>
            <ul class="description span5">

            <div class="content">
              <p>Use the Account section to register your new applications in FIWARE, associating roles and permissions.</p>

              <p>If you want to set up your users and organizations, you can also go to the Account application and add their data in an easy to use user interface. </p>
            </div>

            </ul>
          </div>
        </div>
      </section>
      <!-- Carousel nav-->
      
      
      <div id="content" class="clearfix wrapper row">
        <div class="help-bar">
          <div class="help-box span3" onclick="confirm_help_box()">
              <img src="wp-content/themes/wordpress-bootstrap/images/help.png">
              <div>
                <h4>Need Help?</h4>
                Ask a question.
              </div>
          </div>
          <div class="help-box span3">
            <a href="http://catalogue.fi-ware.org/enablers" target="_blank">
              <img src="wp-content/themes/wordpress-bootstrap/images/ges.png">
              <div>
                <h4>Our GEs</h4>
                See our Catalogue.
              </div>
            </a>
          </div>
          <div class="help-box nst span3">
            <a href="http://infographic.lab.fiware.org" target="_blank">
              <img src="wp-content/themes/wordpress-bootstrap/images/fi-ops.png">
              <div>
                <h4>FIWARE Lab nodes</h4>
                  Learn about FIWARE Lab.
              </div>
            </a>
          </div>
          <div class="help-box span3">
            <a href="http://edu.fi-ware.eu/" target="_blank">
              <img src="wp-content/themes/wordpress-bootstrap/images/more-info.png">
              <div>
                <h4>eLearning</h4>
                Train yourself.
              </div>
            </a>
          </div>
        </div>
        <hr class="soften" style="margin-top: 0;"></hr>
        <div id="main" class="span8 clearfix" role="main">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
            
            <header>
            
              <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
              
              <div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
              
              <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> </p>
            
            </header> <!-- end article header -->
          
            <section class="post_content clearfix">
              <?php the_content( __("Read more &raquo;","bonestheme") ); ?>
            </section> <!-- end article section -->
            
            <footer>
            </footer> <!-- end article footer -->
          
          </article> <!-- end article -->
          
          <?php endwhile; ?>  
          
          <?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
            
            <?php page_navi(); // use the page navi function ?>
            
          <?php } else { // if it is disabled, display regular wp prev & next links ?>
            <nav class="wp-prev-next">
              <ul class="clearfix">
                <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
                <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
              </ul>
            </nav>
          <?php } ?>    
          
          <?php else : ?>
          
          <article id="post-not-found">
              <header>
                <h1><?php _e("Not Found", "bonestheme"); ?></h1>
              </header>
              <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
              </section>
              <footer>
              </footer>
          </article>
          
          <?php endif; ?>

      
        </div> <!-- end #main -->

        <div class="span3 pull-right">
          <a href="#" id="myCustomTrigger" class="btn btn-primary btn-large">Request Community Account upgrade</a>
  
          <script type="text/javascript" src="https://jira.fiware.org/s/4d99dfea096a41baa8a46feda6f85823-T/en_GBek2res/6346/29/1.4.16/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-GB&amp;collectorId=a188b867"></script>
         <script type="text/javascript">window.ATL_JQ_PAGE_PROPS =  {
        "triggerFunction": function(showCollectorDialog) {
          //Requires that jQuery is available! 
          jQuery("#myCustomTrigger").click(function(e) {
            e.preventDefault();
            showCollectorDialog();
          });
        }};</script>
        
      </div>

        <div class="twitter span3">
          <a class="twitter-timeline" data-tweet-limit="2" href="https://twitter.com/FIware" data-widget-id="378538709693382657">Tweets by @FIware</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    
      </div> <!-- end #content end .wrapper -->

      <div id="my_mo_modal" style="top: 60%;" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                <h3>Important info</h3>
              </div>
              <div class="modal-body">
<p>Dear User, <br><br>
By clicking the “I accept” link below, you declare to accept the new defined policies.  Otherwise, you can still work with your account but note that it will be removed by the defined deadline and the FIWARE Lab providers will not be responsible for creating a copy of the data you stored on the FIWARE Lab.<br><br>
<a href="http://terms.lab.fiware.org/accept"  target="_blank">I Accept</a><br><br>
Thanks</p>
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" type="button" class="btn btn-blue">Continue</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


<?php get_footer(); ?>
