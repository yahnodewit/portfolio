var $progressbars = $('.progress_bars');
var $bar = $('.progress_bar_value');
var i = 0;


$progressbars.waypoint(function(direction) {
    if (i == 0){
        i = 1;
        $('.progress_bar_value').each(function(){
            $(this).animate({
              width:$(this).attr('data-percent')},"");
            });
    }
}, {
        offset: '70%'
    });
    
$progressbars.waypoint(function(direction) {
    if (direction === 'up') {
        $bar.width("0px");
        i = 0;
    }
}, {
        offset: '100%'
    });


