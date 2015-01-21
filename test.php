<html>
<head>

    <link rel="stylesheet" href="css/layerslider.css" />

</head>
<body>

<!-- SLIDER -->
        <div id="outerslider">
        	<div id="slidercontainer">
            	<section id="slider">
                	<div class="opacitytop"></div>
                    <div id="layerslider" class="slideritems">
                    	<div class="ls-layer" id="ls-layer-1" data-rel="slidedelay: 3000;">
                            <img class="ls-bg" src="images/slider/slide1.png" alt="layer"></div>
                        
                        
                        
                        <div class="ls-layer" id="ls-layer-3" data-rel="slidedelay: 3000;">
                            <img class="ls-bg" src="images/slider/slide2.png" alt="layer"></div>
                        
                        
                        <div class="ls-layer" id="ls-layer-2" data-rel="slidedelay: 3000;">
                            <img class="ls-bg" src="images/slider/slide3.png" alt="layer"></div>
                        
                       
                    </div>
                </section>
            </div>
        </div>
        <!-- END SLIDER -->

<script type="text/javascript" src="js/layerslider.kreaturamedia.jquery-min.js"></script>

<script type="text/javascript">
jQuery(window).load(function() {
	
	jQuery('#layerslider').hover(function(){
		jQuery('a.ls-nav-prev,a.ls-nav-next').fadeTo('slow',1);	
	},
	function(){
		jQuery('a.ls-nav-prev,a.ls-nav-next').fadeTo('slow',0);	
	});

    jQuery('#layerslider.slideritems').layerSlider({
		skinsPath : 'images/layerslider-skins/',
		skin : 'broadway',
		autoStart : true,
		cbInit: function(){jQuery('a.ls-nav-prev,a.ls-nav-next').css('display','none');	},  
	});
});
</script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>