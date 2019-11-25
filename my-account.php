<!DOCTYPE html>
<html>
<head>
    <title>ABP News</title>
    <?php include '_meta.php'; ?>
</head>
<body>
<div id="wrapper">
    <?php include '_header.php'; ?>

    <div class="section-header notif_header">
    	<div class="uk-padding-small uk-padding-remove-vertical">
    		<a href="#" class="settings view-all" style="float: right;"><span>सेटिंग्स</span></a>
    	</div>
	</div>

	<div class="uk-padding-small uk-padding-remove-vertical"><br/><br/>
            <div class="uk-card uk-card-default box-shadow">
                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle uk-padding-smaller">
                    <div>
                        <div class="uk-border-circle uk-overflow-hidden">
                            <img data-src="https://randomuser.me/api/portraits/men/4.jpg" alt="Profile" width="80" height="80" uk-img />    
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-column uk-flex-around">
                        <h4 class="uk-text-normal uk-margin-small">Good Morning Vijay</h4>
                        <h5 class="uk-text-small uk-margin-remove">You've 23 new stories</h5>
                        <a href="#" class="uk-margin-small red-label uk-text-small">Customise my Newsfeed</a>
                    </div>
                </div>
            </div>
        </div>

         <?php include '_yourTopics.php'; ?>

    <?php include '_footer.php'; ?>
</div><!-- #wrapper -->
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</body>
</html>