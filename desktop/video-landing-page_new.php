<?php
	include 'header.php';
?>

<section>
	<div class="uk-container content">
		<div class="uk-grid-small" uk-grid> 
			<div class="uk-width-expand">
					<div>
						 <div class="uk-position-relative">
							<div class="sub_menu uk-text-left">
								<ul class="uk-padding-remove">
									<li class="active"><a href="#">वीडियो</a></li>
									<li><a href="#">ABP ओरिजिनलस</a></li>
									<li><a href="#">TV शोज</a></li>		
								</ul>
							</div>
						</div>

						  <!-- <ul id="my-id" class="uk-switcher uk-margin"> -->
 						    <div class="active_video_tab vid_li">
 						    	<div class="uk-grid-small" uk-grid>
 						    		<div class="uk-width-3-5">
										<div class="uk-position-relative uk-text-center">
											<div class="vid_thumbnail">
												<img src="images/artboard_op.png">
											</div>
											<img style="border-top-left-radius: 8px;border-bottom-left-radius: 8px;" src="images/16-9.jpg" width="100%">
										</div>
 						    		</div>
 						    		<div class="uk-width-2-5 trending_videos">
 						    			<div class="trending_videos_section scroll_css">
 						    				<h2>टॉप १० ट्रेंडिंग वीडियो</h2>
 						    				<div class="trending_vid_each" uk-grid>
 						    					<div class="uk-width-2-5 uk-position-relative">
	 						    					<img src="images/now-playing.png">
	 						    					<div class="now_playing_img">
	 						    						NOW
 						    						</div>
 						    					</div>
 						    					<div class="uk-width-3-5 trending_vid_each_row">
 						    						<p class="fz18">इन पुलिसकर्मियों के कौन काटेगा चालान? खुलेआम तोड़ रहे ट्रैफिक नियम</p>
 						    					</div>
 						    				</div>
 						    				<div class="trending_vid_each" uk-grid>
 						    					<div class="uk-width-2-5">
	 						    					<img src="images/16-9.jpg">
 						    					</div>
 						    					<div class="uk-width-3-5 trending_vid_each_row">
 						    						<p class="fz18">इन पुलिसकर्मियों के कौन काटेगा चालान? खुलेआम तोड़ रहे ट्रैफिक नियम</p>
 						    					</div>
 						    				</div>
 						    				<div class="trending_vid_each" uk-grid>
 						    					<div class="uk-width-2-5">
	 						    					<img src="images/16-9.jpg">
 						    					</div>
 						    					<div class="uk-width-3-5 trending_vid_each_row">
 						    						<p class="fz18">इन पुलिसकर्मियों के कौन काटेगा चालान? खुलेआम तोड़ रहे ट्रैफिक नियम</p>
 						    					</div>
 						    				</div>
 						    				<div class="trending_vid_each" uk-grid>
 						    					<div class="uk-width-2-5">
	 						    					<img src="images/16-9.jpg">
 						    					</div>
 						    					<div class="uk-width-3-5 trending_vid_each_row">
 						    						<p class="fz18">इन पुलिसकर्मियों के कौन काटेगा चालान? खुलेआम तोड़ रहे ट्रैफिक नियम</p>
 						    					</div>
 						    				</div>
 						    				
 						    			</div>
 						    		</div>
 						    	</div>
 						    </div>
 						   
 						<!-- </ul> -->
 					</div>
 			</div>
 			<div class="uk-sidebar">
 				<?php include '_adBanner_square.php'; ?>
					<div class="other_news">
						<div class="uk-grid-small" uk-grid>
									<div class="uk-width-2-3">
										<a href="#"><p class="fz18">पहलवान बबीता फोगाट का सब इंस्पेक्टर पद से दिया इस्तीफा मंजूर</p></a>
									</div>
									<div class="uk-width-1-3 uk-position-relative uk-padding-remove-left">
										<div class="play_btn_div" style="position: absolute;right: 8px;top:8px;">
											<img class="play_btn_div_small" src="images/artboard.png">
										</div>
										<a href="#"><img src="images/1-1.jpg" width="100%"></a>
									</div>
								</div>	
					</div>
 			</div>
 		</div>
 	</div>
</section>

<section class="new_section">
	<div class="uk-container">
		<div class="floated_section_title">
			<div class="after_div">
				<h2>आपके लिए</h2>
				<h6>
					<a href="#">
						<span class="abp_icon_tr abp_black_arrow"></span>&nbsp;&nbsp;&nbsp;View All</a>
				</h6>
			</div>
		</div>

		
		<div class="slider">
        	<div id="slider_panel" class="uk-position-relative uk-visible-toggle uk-light pb-20" >
			    <ul class="uk-slider-items uk-grid-small" uk-grid>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			               
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			               
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			               
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			               
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			               
			            </div>
			        </li>
			    </ul>
			    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
			</div>
        </div>


	</div>
</section>

<section class="new_section bgColor">
		<div class="uk-container">
			
			<div class="uk-grid-small" uk-grid>

				<div class="uk-width-expand">
					<div class="floated_section_title">
				<div class="after_div">
					<h2 style="background-color:#eeeeee;">ABP ओरिगिनाल्स</h2>
					<h6 style="background-color:#eeeeee;">
						<a href="#">
						<span class="abp_icon_tr abp_black_arrow"></span>&nbsp;&nbsp;&nbsp;View All</a>
					</h6>
				</div>
			</div>
					<div class="uk-grid-small" uk-grid>
						<div class="uk-width-1-3">
							 <?php include '_newsFeaturedVideo.php'; ?>
						</div>
						<div class="uk-width-1-3">
							 <?php include '_newsFeaturedVideo.php'; ?>
						</div><div class="uk-width-1-3">
							 <?php include '_newsFeaturedVideo.php'; ?>
						</div>
					</div></div>
				<div class="uk-sidebar">
					<?php include '_adBanner_square.php'; ?>
				</div>




			</div>
		</div>
	</section>


<?php include '_adBannerHead.php'; ?>

<section class="new_section">
		<div class="uk-container">
			<div class="floated_section_title">
				<div class="after_div">
					<h2>आपके लिए</h2>
					<h6>
						<a href="#">
						<span class="abp_icon_tr abp_black_arrow"></span>&nbsp;&nbsp;&nbsp;View All</a>
					</h6>
				</div>
			</div>
			<div class="slider">
        	<div id="slider_panel_1" class="uk-position-relative uk-visible-toggle uk-light pb-20">
			    <ul class="uk-slider-items uk-grid-small" uk-grid>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			    </ul>
			    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
			</div>
        </div>
		</div>
	</section>


	<section class="new_section">
	<div class="uk-container">
		<div class="floated_section_title">
			<div class="after_div">
				<h2>रिसेंटली उप्लोडेड</h2>
				<h6>
					<a href="#">
						<span class="abp_icon_tr abp_black_arrow"></span>&nbsp;&nbsp;&nbsp;View All</a>
				</h6>
			</div>
		</div>

		<div class="slider">
        	<div id="slider_panel_2" class="uk-position-relative uk-visible-toggle uk-light pb-20">
			    <ul class="uk-slider-items uk-grid-small" uk-grid>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			                <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			    </ul>
			    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
			</div>
        </div>


	</div>
</section>


<section class="new_section">
		<div class="uk-container">
			<div class="floated_section_title">
				<div class="after_div">
					<h2>पॉपुलर टीवी शो</h2>
					<h6><a href="#">
						<span class="abp_icon_tr abp_black_arrow"></span>&nbsp;&nbsp;&nbsp;View All</a>
					</h6>
				</div>
			</div>
			<div class="popular_tv_shows uk-margin-top" uk-grid>
				<div class="uk-width-1-6 uk-position-relative">
					<img src="images/1-1.jpg" >
					<p class="fz16">Master Stroke</p>
					<div class="populartv_icon"><span><input type="checkbox" class="star" checked/></span></div>
				</div>
				<div class="uk-width-1-6 uk-position-relative">
					<img src="images/1-1.jpg" >
					<p class="fz16">Master Stroke</p>
					<div class="populartv_icon"><span><input type="checkbox" class="star"/></span></div>
				</div>
				<div class="uk-width-1-6 uk-position-relative">
					<img src="images/1-1.jpg" >
					<p class="fz16">Master Stroke</p>
					<div class="populartv_icon"><span><input type="checkbox" class="star"/></span></div>
				</div>
				<div class="uk-width-1-6 uk-position-relative">
					<img src="images/1-1.jpg" >
					<p class="fz16">Master Stroke</p>
					<div class="populartv_icon"><span><input type="checkbox" class="star"/></span></div>
				</div>
				<div class="uk-width-1-6 uk-position-relative">
					<img src="images/1-1.jpg" >
					<p class="fz16">Master Stroke</p>
					<div class="populartv_icon"><span><input type="checkbox" class="star"/></span></div>
				</div>
				<div class="uk-width-1-6 uk-position-relative">
					<img src="images/1-1.jpg" >
					<p class="fz16">Master Stroke</p>
					<div class="populartv_icon"><span><input type="checkbox" class="star" checked/></span></div>
				</div>
				
			</div>
		</div>
	</section>




<section>
	<div class="uk-container content">
		<div class="uk-grid-small" uk-grid> 
			<div class="uk-width-expand">
					<div>
						<div class="floated_section_title">
							<div class="after_div">
								<h2>पॉपुलर प्लेलिस्ट</h2>
							</div>
						</div>
						  <!-- <ul id="my-id" class="uk-switcher uk-margin"> -->
 						    <div class="active_video_tab vid_li">
 						    	<div class="uk-grid-small" uk-grid>
 						    		<div class="uk-width-3-5">
										<div class="uk-position-relative uk-text-center">
											<div class="vid_thumbnail">
												<img src="images/artboard_op.png">
											</div>
											<img style="border-top-left-radius: 8px;border-bottom-left-radius: 8px;" src="images/16-9.jpg" width="100%">
										</div>
 						    		</div>
 						    		<div class="uk-width-2-5 trending_videos">
 						    			<div class="trending_videos_section scroll_css">
 						    				<h2>Top 10 Trending Videos</h2>
 						    				<div class="trending_vid_each" uk-grid>
 						    					<div class="uk-width-2-5 uk-position-relative">
	 						    					<img src="images/now-playing.png">
	 						    					<div class="now_playing_img">
	 						    						NOW
 						    						</div>
 						    					</div>
 						    					<div class="uk-width-3-5 trending_vid_each_row">
 						    						<p class="fz18">इन पुलिसकर्मियों के कौन काटेगा चालान? खुलेआम तोड़ रहे ट्रैफिक नियम</p>
 						    					</div>
 						    				</div>
 						    				<div class="trending_vid_each" uk-grid>
 						    					<div class="uk-width-2-5">
	 						    					<img src="images/16-9.jpg">
 						    					</div>
 						    					<div class="uk-width-3-5 trending_vid_each_row">
 						    						<p class="fz18">इन पुलिसकर्मियों के कौन काटेगा चालान? खुलेआम तोड़ रहे ट्रैफिक नियम</p>
 						    					</div>
 						    				</div>
 						    				<div class="trending_vid_each" uk-grid>
 						    					<div class="uk-width-2-5">
	 						    					<img src="images/16-9.jpg">
 						    					</div>
 						    					<div class="uk-width-3-5 trending_vid_each_row">
 						    						<p class="fz18">इन पुलिसकर्मियों के कौन काटेगा चालान? खुलेआम तोड़ रहे ट्रैफिक नियम</p>
 						    					</div>
 						    				</div>
 						    				<div class="trending_vid_each" uk-grid>
 						    					<div class="uk-width-2-5">
	 						    					<img src="images/16-9.jpg">
 						    					</div>
 						    					<div class="uk-width-3-5 trending_vid_each_row">
 						    						<p class="fz18">इन पुलिसकर्मियों के कौन काटेगा चालान? खुलेआम तोड़ रहे ट्रैफिक नियम</p>
 						    					</div>
 						    				</div>
 						    				
 						    			</div>
 						    		</div>
 						    	</div>
 						    </div>
 						   
 						<!-- </ul> -->
 					</div>
 			</div>
 			<div class="uk-sidebar">
 				<?php include '_adBanner_square.php'; ?>
					<div class="other_news">
						<div class="uk-grid-small" uk-grid>
									<div class="uk-width-2-3">
										<a href="#"><p class="fz18">पहलवान बबीता फोगाट का सब इंस्पेक्टर पद से दिया इस्तीफा मंजूर</p></a>
									</div>
									<div class="uk-width-1-3 uk-position-relative uk-padding-remove-left">
										<div class="play_btn_div" style="position: absolute;right: 8px;top:8px;">
											<img class="play_btn_div_small" src="images/artboard.png">
										</div>
										<a href="#"><img src="images/1-1.jpg" width="100%"></a>
									</div>
								</div>	
					</div>
 			</div>
 		</div>
 	</div>
</section>



<section class="new_section">
	<div class="uk-container">
		<div class="floated_section_title">
			<div class="after_div">
				<h2>ABP ओरिगिनाल्स</h2>
				<h6>
<a href="#">
						<span class="abp_icon_tr abp_black_arrow"></span>&nbsp;&nbsp;&nbsp;View All</a>
					
				</h6>
			</div>
		</div>

		<div class="slider">
        	<div id="slider_panel_3" class="uk-position-relative uk-visible-toggle uk-light pb-20" uk-slider="center: true">
			    <ul class="uk-slider-items uk-grid-small" uk-grid>
			        <li class="uk-width-1-4">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-4">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-4">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-4">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-4">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-4">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			    </ul>
			    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
			</div>
        </div>


	</div>
</section>



<section class="new_section">
		<div class="uk-container">
			<div class="floated_section_title">
				<div class="after_div">
					<h2>आपके लिए</h2>
					<h6>
<a href="#">
						<span class="abp_icon_tr abp_black_arrow"></span>&nbsp;&nbsp;&nbsp;View All</a>
						
					</h6>
				</div>
			</div>
			<div class="slider">
        	<div id="slider_panel_4" class="uk-position-relative uk-visible-toggle uk-light pb-20">
			    <ul class="uk-slider-items uk-grid-small" uk-grid>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			        <li class="uk-width-1-5">
			            <div class="uk-panel">
			               <?php include '_newsFeaturedVideo.php'; ?>
			            </div>
			        </li>
			    </ul>
			    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
			</div>
        </div>
		</div>
	</section>

<?php
	include 'footer.php';
?>