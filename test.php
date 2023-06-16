<style>
.marquee {
  width: 100%;
  height:600px; 
  overflow: hidden;  
  text-decoration: none;    
}    
</style>    

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js"></script>
<div class="marquee">
    jQuery marquee is the best marquee plugin in the world jQuery marquee is the best marquee plugin in the world 
</div>
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
    duplicated: true
});
</script>