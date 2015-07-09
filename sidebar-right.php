<?php if (is_active_sidebar('sidebar-right')) { ?>
				<div class="col-md-3" id="sidebar-right">
					<?php do_action('before_sidebar'); ?>
					<?php dynamic_sidebar('sidebar-right'); ?>
					<div class="textwidget">
						<!-- social panel -->
						<div class="panel panel-default panel-social">
							<div class="panel-heading">
								<div class="btn-group btn-group-justified">
						    	<div class="btn-group">
										<a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter" data-container="body" class="btn btn-default btn-social" href="https://twitter.com/fiware" alt="FIWARE Twitter" class="social" target="blank"><i class="fa fa-twitter"></i></a>
									</div>
									<div class="btn-group">
										<a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook" data-container="body" class="btn btn-default btn-social" href="https://www.facebook.com/eu.fiware" alt="FIWARE Facebook" class="social" target="blank"><i class="fa fa-facebook"></i></a>
									</div>
									<div class="btn-group">
										<a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Google +" data-container="body" class="btn btn-default btn-social" href="https://plus.google.com/+Fi-wareEu" rel="publisher" alt="Go to FIWARE Google Plus" class="social" target="blank"><i class="fa fa-google-plus"></i></a>
									</div>
									<div class="btn-group">
										<a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Linkedin" data-container="body" class="btn btn-default btn-social" href="http://www.linkedin.com/company/fi-ware" alt="Our Linkedin" class="social" target="blank"><i class="fa fa-linkedin"></i></a>
									</div>
									<div class="btn-group">
										<a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Youtube" data-container="body" class="btn btn-default btn-social" href="http://www.youtube.com/user/fiware" alt="FIWARE Youtube Channel" class="social" target="blank"><i class="fa fa-youtube"></i></a>
									</div>
									<div class="btn-group">
										<a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flickr" data-container="body" class="btn btn-default btn-social" href="http://www.flickr.com/photos/fi-ware/" alt="Go to Fi-Wate Flickr" class="social" target="blank"><i class="fa fa-flickr"></i></a>
									</div>
									<div class="btn-group">
										<a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Slide Share" data-container="body" class="btn btn-default btn-social" href="http://www.slideshare.net/fi-ware" alt="FIWARE Slideshare" class="social" target="blank"><i class="social fa fa-slideshare"></i></a>
									</div>
								</div>
						  </div>
						</div>
						<!-- blue panel_help -->
						<div class="panel panel-default panel-bk-blue-l">
							<div class="panel-heading">
						  	<div class="help" onclick="confirm_help_box()">
		              <span class="help-i-h"></span>
		              <h5>Need Help?</h5>
		              <i class="fa fa-caret-right"></i>
		            </div>
						  </div>
		          <div class="panel-body">
		            Send us a message
		          </div>
						</div>
						<!-- orange panel_catalogue -->
		        <div class="panel panel-default panel-bk-orange">
		          <div class="panel-heading">
								<a class="help" href="http://catalogue.fiware.org/enablers">
		              <span class="help-i-g"></span>
		              <h5>Our GEs</h5>
		              <i class="fa fa-caret-right"></i>
		            </a>
		          </div>
		          <div class="panel-body">
		            See our Catalogue
		          </div>
		        </div>
						<!-- pink panel_fiwareLab -->
		        <div class="panel panel-default panel-bk-magenta">
		          <div class="panel-heading">
		            <a class="help" href="http://infographic.lab.fiware.org">
									<span class="help-i-n"></span>
		              <h5>FIWARE nodes</h5>
		              <i class="fa fa-caret-right"></i>
		            </a>
		          </div>
		          <div class="panel-body">
		            Learn about FIWARE Lab
		          </div>
		        </div>
						<!-- bluedark panel_more info -->
		        <div class="panel panel-default panel-bk-blue-d">
		          <div class="panel-heading">
		            <a class="help" href="http://edu.fiware.org/">
		             <span class="help-i-i"></span>

		              <h5>More information</h5>
		              <i class="fa fa-caret-right"></i>
		            </a>
		          </div>
		          <div class="panel-body">
		            Visit our eLearning Platform
		          </div>
		        </div>

						<!-- request -->
						<div class="request">
		          <button href="#" id="myCustomTrigger" class="btn btn-default btn-large">Community Account upgrade</button>
		          <script type="text/javascript" src="https://jira.fiware.org/s/4d99dfea096a41baa8a46feda6f85823-T/en_GBek2res/6346/29/1.4.16/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-GB&amp;collectorId=a188b867"></script>
		          <script type="text/javascript">
								window.ATL_JQ_PAGE_PROPS =  {
			           	"triggerFunction": function(showCollectorDialog) {
			           	//Requires that jQuery is available!
			            jQuery("#myCustomTrigger").click(function(e) {
		            		e.preventDefault();
		            		showCollectorDialog();
		          		});
		         			jQuery('.btn-social').tooltip();
		        		}};
							</script>
		      	</div>

						<!-- twitter -->
		        <div class="twitter">
							<a class="twitter-timeline" data-tweet-limit="2" href="https://twitter.com/FIware" data-widget-id="378538709693382657">Tweets by @FIware</a>
		          <script>
								!function(d,s,id){
									var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
									if(!d.getElementById(id)){
										js=d.createElement(s);
										js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
										fjs.parentNode.insertBefore(js,fjs);
									}
								}(document,"script","twitter-wjs");
							</script>
		        </div>
					</div>
				</div>
<?php } ?>
