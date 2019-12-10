<?php
	include 'header.php';
?>

<section>
		<div class="uk-container content">
			<div class="uk-grid-small" uk-grid>
				<div class="uk-width-1-4">
					<div class="left_section">
						<div class="section_title">
							<h2 style="color: #000;text-transform: capitalize;">Categories</h2>
							
						</div>

						<div class="my_notifications">
							<ul>
								<li class="search-blob-label active"><a class="uk-text-normal" href="#"><span>HowdyModi</span><i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">#BoxOffice<i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">#WhatsApp<i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">#AssemblyElection<i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">#Chandrayan<i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">See More<i uk-icon="chevron-right"></i></a></li>
							</ul>
						</div>

						<div class="section_title">
							<h2 style="color: #000;text-transform: capitalize;">Related Searches</h2>
							
						</div>

						<div class="my_notifications">
							<ul>
								<li class="search-blob-label active"><a class="uk-text-normal" href="#"><span>HowdyModi</span><i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">#BoxOffice<i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">#WhatsApp<i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">#AssemblyElection<i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">#Chandrayan<i uk-icon="chevron-right"></i></a></li>
								<li class="search-blob-label"><a class="uk-text-normal" href="#">See More<i uk-icon="chevron-right"></i></a></li>
							</ul>
						</div>					
						
					</div>


				</div>
				<div class="uk-width-3-4">
					<div class="uk-grid-small" uk-grid>
						<div class="uk-width-expand">

							<div class="uk-grid">
								<div class="uk-width-1-1">
									<form class="uk-search uk-search-default" style="width: 100%">
								        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
								        <input style="border-radius: 10px;border:1px solid #aaa" class="uk-search-input" type="search" placeholder="Search Results For Trump">
								    </form>
								</div>
								<div class="search_filters uk-margin-top">
									<ul class="uk-padding-remove">
										<li>Type : </li>
										<li><a class="active" href="#">All</a></li>
										<li>|</li>
										<li><a href="#">Articles</a></li>
										<li>|</li>
										<li><a href="#">Photos</a></li>
										<li>|</li>
										<li><a href="#">Videos</a></li>
									</ul>
								</div>
							</div>
							<div class="uk-grid-small" uk-grid>
								<div class="uk-width-1-2">
									<div>
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
									<div class="uk-margin-top">
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
									<div class="uk-margin-top">
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
									<div class="uk-margin-top">
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
									<div class="uk-margin-top">
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
									
								</div>
								<div class="uk-width-1-2">
									<div>
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
									<div class="uk-margin-top">
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
									<div class="uk-margin-top">
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
									<div class="uk-margin-top">
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
									<div class="uk-margin-top">
										<?php include '_newsFeaturedVideo.php'; ?>
									</div>
								</div>
							</div>

						</div>
						<div class="uk-sidebar">
							<?php include '_adBanner_square.php'; ?>


							<div class="other_news">
								<?php include '_newsListItemSidebar.php'; ?>
							</div>

							<div class="section_title uk-margin-top">
								<h2>टॉप न्यूज़</h2>
								<a href="#"><span class="abp_icon_tr abp_black_arrow"></span>&nbsp;&nbsp;&nbsp;&nbsp;View All</a>
							</div>

							<div class="other_news uk-margin-remove-top">
								<?php include '_newsListItemSidebar.php'; ?>
							</div>

							<div class="other_news">
								<?php include '_newsListItemSidebarVideo.php'; ?>
							</div>

							<div class="other_news">
								<?php include '_newsListItemSidebar.php'; ?>
							</div>

							<div class="other_news">
								<?php include '_newsListItemSidebarVideo.php'; ?>
							</div>

							<div class="uk-margin-top">
								<?php include '_adBanner_square.php'; ?>
							</div>
							<div class="other_news">
								<?php include '_newsListItemSidebar.php'; ?>
							</div>

						</div>
					</div>


					

				</div>
			</div>
		</div>
	</section>


<?php
	include 'footer.php';
?>