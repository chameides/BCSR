/*
In the original LH designs, this code appeared in the index.php unminified. I moved to an external file in order to separate the full version from the live minified version. 

*/ 

 /*
        $( window ).load(function() {
                        
        });
        */
        
        $( document ).ready(function() {
        
            //console.log('doc ready');
            
            function squidgevid() {
                var windwidth = $('#intro_vidbg').width();
                var vidwidth = $('#intro_background_video').width();
                //alert(vidwidth);
                var vidoffset = vidwidth/2;
                // document.getElementById('intro_background_video_html5_api').style.marginLeft = '-' + vidoffset + 'px';
                var negativevidoffsetpx = '-' + vidoffset + 'px';
                $('.vidbg video').css({'marginLeft':negativevidoffsetpx,'left':'50%'});
                $('#introduction').animate({opacity:1},750,function(){
                    //console.log('faded in');
                    $('video').get(0).play();
                });
                setTimeout(function(){ 
                    $('#introduction video').fadeTo('slow', 0.5); 
                }, 3000);
                
            }
            squidgevid();
            

            $('#introVideoModal').on('hidden.bs.modal', function (e) {
                $('#introduction video').get(0).play();
            });
            $('#introVideoModal').on('show.bs.modal', function (e) {
                $('#introduction video').get(0).pause();
            });