jQuery(document).ready(function($) {
  var $solari = $("*[data-solari]")
  $solari.each(function() {
  	var options = $(this).data('solari-options');
  	$(this).solari(options);
  })
});	

(function($){
	$.fn.solari = function(options) {
		var $this = $(this);
		var settings = solari.init(options);
		var inject = solari.cut($this,settings);
		if(inject) {
			solari.append($this,inject,settings);
		}
	};

	var solari = {
		init: function(options) {
			var defaults = { 
				aged: false,
				animate: true,
				animateStyle: '2d',
				characters: ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9',' ','#','&','?','!'],
				delay: '1',
				digitClass: 'digit',
				digitMax: '0',
				flapBase: '10',
				flapMin: '0',
				padChar: ' '
			};
			var settings = $.extend({}, defaults, options);
			return settings;
		},

		cut: function($el,settings) {
			var text = $el.text()
			, padText = solari.padText(text,settings)
			, cutText = padText.split('')
			, inject = '';
			if (cutText.length) {
				$(cutText).each(function(i, digit) {
					inject += '<span class="'+settings.digitClass+'" aria-hidden="true">'+
						'<span data-digit="'+digit+'" class="'+settings.digitClass+'-char '+settings.digitClass+'-top">'+settings.padChar+'</span>'+
						'<span data-digit="'+digit+'" class="'+settings.digitClass+'-char '+settings.digitClass+'-bottom">'+settings.padChar+'</span>'+
					'</span>';
				});	
				return inject;
			}
			return false;
		},

		append: function($el,inject,settings) {
			var $inject = $(inject);
			if(settings.aged) {
				$inject = solari.age($inject);
			}
			if(settings.animate) {
				$inject = solari.prepareAnimation($inject,settings);
			}
			$el.attr('aria-label',$el.text())
				.empty();
			var $solari = $el.append($inject);
			solari.flap($solari,settings);
		},

		prepareAnimation: function($inject,settings) {
			$inject.addClass('animate-'+settings.animateStyle+'');
			if(settings.animateStyle == '' || settings.animateStyle == '2d') {

			} else {

			}
			return $inject;
		},

		flap: function($el,settings) { 
			var $digits = $el.find('.'+settings.digitClass+'-char');
			$digits.each(function() {
				solari.flapChar($(this),settings);
			})
		},

		flapChar: function($el,settings) {
			var flaps = Math.round(settings.flapMin+(Math.random()*settings.flapBase));
			console.log(flaps);
			var i=0;
			var flapInterval = setInterval(function() {
				var letter = Math.round(Math.random()*settings.characters.length);
				$el.text(settings.characters[letter]);
				i++;
				if(i==flaps) {
					$el.text($el.data('digit'));
					clearInterval(flapInterval);
				}
			},100);
		},

		padText: function(text,settings) {
			var _text = text;
			if(settings.digitMax != 0) {
				if(_text.length > settings.digitMax) {
					_text = _text.substring(0,settings.digitMax);
				} else if(_text.length < settings.digitMax) {
					var difference = settings.digitMax - _text.length;
					_text = solari.pad(_text,settings,difference);
				}
			}
			return _text;
		},

		pad: function(text,settings,difference) {
			var _text = text;
			while(difference > 0) {
				_text+=settings.padChar;
				difference--;
			}
			return _text;
		}
	};
})(jQuery);
