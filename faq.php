<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Matrimonial Website </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Theme files -->

	<link rel="icon" href="images/146457.png">s
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
$(".dropdown").hover(            
function() {
$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
$(this).toggleClass('open');        
},
function() {
$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
$(this).toggleClass('open');       
}
);
});
</script>
</head>
<body>
	<!-- ============================  Navigation Start =========================== -->
	<?php include_once("includes/navigation.php");?>
	<!-- ============================  Navigation End ============================ -->
	<div class="grid_3">
		<div class="container">
			<div class="breadcrumb1">
				<ul>
					<a href="index.php"><i class="fa fa-home home_1"></i></a>
					<span class="divider">&nbsp;|&nbsp;</span>
					<li class="current-page">FAQ</li>
				</ul>
			</div>
			<dl class="faq-list">
				<dt class="faq-list_h">
					<h4 class="marker">Q?</h4>
					<h4>How can I register on matrimonialwebsite.com ?h4>
					</dt>
					<dd>
						<h4 class="marker1">A.</h4>
						<p class="m_4">Registering in our matrimony site is a simple process, you can register by filling the online registration that runs for 3 pages or use the Quick registration form, a shorter and simpler process available.</p>
					</dd>
					<dt class="faq-list_h">
						<h4 class="marker">Q?</h4>
						<h4>I did my registration, but my profile does not show up online ?</h4>
					</dt>
					<dd>
						<h4 class="marker">A.</h4>
						<p class="m_4">

						Every new profile will be validated by our ADMIN (Backend Team) and upon activation, your profile will be visible to all ! Verification of profiles is done manually. Our support team checks each and every profile carefully for any invalid or incorrect information and also candidates are contacted over the phone for confirmation of authority. You will get a notification once the profile is active !</p>
					</dd>
					<dt class="faq-list_h">
						<h4 class="marker">Q?</h4>
						<h4>Can I upload my photograph?</h4>
					</dt>
					<dd>
						<h4 class="marker">A.</h4>
						<p class="m_4">

						You have the option of uploading your photograph on My Profile Page. You can upload a maximum of three photographs.</p>
					</dd>
					<dt class="faq-list_h">
						<h4 class="marker">Q?</h4>
						<h4>How do I upload Horoscope ?</h4>
					</dt>
					<dd>
						<h4 class="marker">A.</h4>
						<p class="m_4">

						We have an exclusive interface to key in your horoscope details. Login to your Matrimonial Website account and click Manage Horoscope.</p>
					</dd>
					<dt class="faq-list_h">
						<h4 class="marker">Q?</h4>
						<h4>Can I edit all my details ?</h4>
					</dt>
					<dd>
						<h4 class="marker">A.</h4>
						<p class="m_4">

						At any time, you can update your profile by clicking Modify My Profile button . </p>
					</dd>
					<dt class="faq-list_h">
						<h4 class="marker">Q?</h4>
						<h4>I see a tab called MY MATCHES, What’s the use of it ?</h4>
					</dt>
					<dd>
						<h4 class="marker">A.</h4>
						<p class="m_4">


						My Matches fetches the profiles matching your partner preferences that you keyed in while registering your profile. Its dynamically updated.</p>
					</dd>
					<dt class="faq-list_h">
						<h4 class="marker">Q?</h4>
						<h4>Can I shortlist/bookmark a Profile ?</h4>
					</dt>
					<dd>
						<h4 class="marker">A.</h4>
						<p class="m_4 m_5">

						Yes, you can ! Its an useful feature to make a note of the interested profiles. You need to be logged in to use the shortlist feature.</p>
					</dd>
				</dl>
			</div>
		</div>


		<?php include_once("footer.php");?>

	</body>
	</html>	