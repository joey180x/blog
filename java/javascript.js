$('.post').readmore({
    moreLink: '<a href="#">Show More</a>',
    maxHeight: 100,
    afterToggle: function(trigger, element, expanded) {
      if(! expanded) { // The "Close" link was clicked
        $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
      }
    }
  });
    $('article').readmore({maxHeight: 240});

//window.addEventListener("load", function(){
	//loading function
	//var load_screen = document.getElementById("load_screen");
	//showing load screen
	//document.body.removeChild(load_screen);
	//child element to get removes load screen
//});