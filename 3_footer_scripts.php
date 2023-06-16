<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/animsition/js/animsition.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/js/main.js"></script>
<script src="vendor/js/jquery.marquee.min.js"></script>
<script src="admin/vendors/validate.js"></script>

<script type="text/javascript">
$('.marquee').marquee({
//speed in milliseconds of the marquee
duration: 8000,
//gap in pixels between the tickers
gap: 10,
//time in milliseconds before the marquee will start animating
delayBeforeStart: 10,
//'left' or 'right'
direction: 'up',
//true or false - should the marquee be duplicated to show an effect of continues flow
duplicated: true,
pauseOnHover: true
});

$('.marquee_header').marquee({
//speed in milliseconds of the marquee
duration: 8000,
//gap in pixels between the tickers
//    gap: 10,
//time in milliseconds before the marquee will start animating
delayBeforeStart: 10,
//'left' or 'right'
direction: 'right',
//true or false - should the marquee be duplicated to show an effect of continues flow
duplicated: true,
pauseOnHover: true
});
</script>