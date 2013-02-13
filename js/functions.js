var intervalstartup;
$('document').ready(function(){
	$(window).bind("resize", resizePlayer);
	
	resizePlayer();

	intervalstartup = setInterval('resizePlayer()',1000);

	$('.popoverItem').popover();

	$('.modal-body a[data-toggle="tab"]').on('shown', function (e) {
		reInitModal(e);
	})

	$('.modal').on('shown', function (e) {
		reInitModal(e);
	})

	setInterval(function() {
		$('.timer').each(function(){
			$(this).attr('data-timer', $(this).attr('data-timer')-1)
			if($(this).attr('data-timer') > 0){
				var timerText;
				
				if($(this).attr('data-timer')%60>=10){
					timerText = Math.floor($(this).attr('data-timer')/60)+':'+ $(this).attr('data-timer')%60;
				}else{
					timerText = Math.floor($(this).attr('data-timer')/60)+':0'+ $(this).attr('data-timer')%60;
				}

				$(this).html(timerText);
			}else{
				$(this).html('LIVE')
				if(Math.random()*60>=59){
					$(this).attr('data-timer', $(this).attr('data-respawn'))
				}
			}
		})
	},1000)

	jQuery(function($){
        $("#twittercontainer").tweet({
          avatar_size: 32,
          count: 5,
          username: ["LeagueofLegends", 'riotgames'],
          loading_text: "searching twitter...",
          refresh_interval: 30
        });
      });
})

function resizePlayer(){
	$('#twitchPlayer').css('width', '100%')
	$('#twitchPlayer').css('height', $('#twitchPlayer').width()*0.6)
	$('#graphsspace').css('height', $('#twitchPlayer').width()*0.6)
	if($('#twitchPlayer').height()>100){
		window.clearInterval(intervalstartup);
	}
	console.log($('#twitchPlayer').height())
}

function reInitModal(e){
	$('.modal').each(function(e){
		$(this).animate({
			marginTop: -($(this).height()/2)
		},0,false,false,false)
		$(this).animate({
			marginLeft: -($(this).width()/2)
		},0,false,false,false)
	})
}