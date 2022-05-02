$(function() {
    if($('meta[name=csrf-token]').length > 0) {
	    $.ajaxPrefilter(function (options, originalOptions, jqXHR) {
	    	jqXHR.setRequestHeader('X-CSRF-Token', $('meta[name=csrf-token]').attr('content'));
	    });

	    $('#wm-ui-flash-message').ajaxListener('init');
    }
});

(function($) {
    var methods = {
        init: function(options) {
            methods.settings = $.extend({}, $.warmane.defaults, options);	
            methods.setupRotators();
        },
        
        resolveLocation: function(ip, ret, ele) {
            $.get('https://freegeoip.net/json/' + ip, function(response) {
                if(ret) {
                    return response;
                } else {
                    $(ele).html(response.country_name);
                }
            }, "jsonp"); 
        },

        pingAlert: function() {
            $.ajax({
                type: "GET",
                url: "/?alert&t=" + methods.settings.alertTime + (methods.settings.init ? '&init=true' : ''),
                dataType:"json",
                success:function(data) {
                    methods.settings.alertTime = data.time;
                    if(data.alerts) {
                        $.titleAlert("Warning Message", {
                            requireBlur:false,
                            stopOnFocus:true,
                            duration:30000,
                            interval:700
                        });
                        $.each(data.alerts, function(index, value) {
                            $.gritter.add({
                                title: value.title,
                                text: value.text,
                                time: 60000,
                            });
                        });
                    }
                }
            });
            methods.settings.init = false;
        },
        
        initAlerts: function () {
            methods.pingAlert();
            setInterval(function () {
                methods.pingAlert();
            }, 30000);
        },
        
        setupRotators: function () {
            return;
            console.log('Calling global warmane backgrounds.');
            $.ajax({ 
                type: 'GET', 
                url: '//www.warmane.com/?global',
                dataType: 'json',
                success: function (result) {
                    if(result.backgrounds) {
                        console.log('Got warmane backgrounds.');
                        methods.settings.backgrounds = result.backgrounds;
                        $.each(methods.settings.backgrounds, function(index, value) {
                            $('<a>')
                            .attr('href','javascript:;')
                            .attr('data-background',index)
                            .prependTo('#wm-theme-navigation');
                        });
                        
                        methods.rotateBackgrounds();
                        methods.forceBackground();
                    } else {
                        console.log('No backgrounds available.');
                    }
                },
                error: function(result) {
                    
                }
            });
        },
        
        forceBackground: function() {
            $('a[data-background]').on('click', function() {
                methods.settings.forceBackground = $(this).attr('data-background');
                methods.rotateBackgrounds();
            })
        },
  
        rotateBackgrounds: function() {
            clearTimeout(methods.settings.backgroundTimer);

            if(methods.settings.currentBackground > -1 && methods.settings.backgrounds[methods.settings.currentBackground]['render'].length > 1) {
                $(methods.settings.backgrounds[methods.settings.currentBackground]['render']).fadeOut(250);
            }
            methods.settings.currentBackground++;

            if(methods.settings.forceBackground != -1) {
                methods.settings.currentBackground = methods.settings.forceBackground;
            }

            if(methods.settings.currentBackground > 1) {
                methods.settings.currentBackground = 0;
            }
            $('.bg-rotator').fadeOut(250, function() {
                $('.bg-rotator').css({
                    'background-image' : "url('" + methods.settings.backgrounds[methods.settings.currentBackground]['image'] + "')"
                })
                if(methods.settings.backgrounds[methods.settings.currentBackground]['url'].length > 1) {
                    $('.bg-rotator')
                    .css({'cursor' : 'pointer'})
                    .attr('onclick','location.href="' + methods.settings.backgrounds[methods.settings.currentBackground]['url'] + '";');
                } else {
                    $('.bg-rotator')
                    .css({'cursor' : ''})
                    .attr('onclick','');
                }
                
                if(methods.settings.backgrounds[methods.settings.currentBackground]['render'].length > 1) {
                    $(methods.settings.backgrounds[methods.settings.currentBackground]['render']).fadeIn(250);
                }
                                    
                $('.bg-rotator').fadeIn(250);
            });
            
            if(methods.settings.forceBackground == -1) {
                //methods.settings.backgroundTimer = setTimeout(methods.rotateBackgrounds, methods.settings.backgrounds[methods.settings.currentBackground]['timeout']); 
            }
        },
        
		showTooltip: function(event, text, icon) {
		    $CoTTooltip.showTooltip(event, text, icon, 4)
		},
		
		hideTooltip: function() {
			$CoTTooltip.hideTooltip();
		},
		
		moveTooltip: function(event) {
			$CoTTooltip.moveTooltip(event)
		},
        
        initNotifications: function() {
            $.each($('div[data-notification]'), function(index, value) {
                if($.cookie && $.cookie('closenotification-' +  $(value).data('notification'))) {
                    $(value).hide();
                }
            });
            
            $('div[data-toggle=close]').on('click', function(e) {
                e.preventDefault();
                $.cookie('closenotification-' + $(this).data('notificationid'),'true', { expires: $(this).data('notificationexpire') });
                $('div[data-notification=' + $(this).data('notificationid') + ']').hide();
            });
        }
    };
    
    $.warmane = function(method) {
        if (methods[method]) {
            return methods[ method ].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || ! method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' +  method + ' does not exist on jQuery.warmane');
        }
    };
    
    $.warmane.defaults =  {
        backgroundTimer: null,
        forceBackground: -1,
        init: true
	};
})(jQuery);

(function($) {
    var methods = {
        init: function(options) {
            methods.settings = $.extend({}, $.wmstore.defaults, options);
            methods.settings.realmselector.msDropDown();
            methods.settings.characterselector.msDropDown();
            if(methods.selectedCurrencyType()) {
                methods.settings.currencyselector.msDropDown();
            }
            if(methods.selectedServiceType()) {
                methods.settings.servicehandler = methods.settings.serviceselector.msDropDown().data('dd');
            }
            methods.updatePage();
        },
				
		updateRealm: function(id) {
			if(id != '' && typeof id != undefined) {
				$.ajax({ 
					type: 'POST', 
					url: '', 
					data: { update: 'realm', realm: id },
					dataType: 'json',
					success: function (data) { }
				});
				return false;
			} else {
				methods.updatePage();
			}
		},
		
		updateCurrency: function() {
			
		},
        
        selectedCurrencyType: function() {
            if(methods.settings.currencyselector.prop('type') != 'hidden') {
                return true;
            }
            
            return false;
        },
        
        selectedCurrencyVal: function() {
            if(methods.selectedCurrencyType()) {
                return methods.settings.currencyselector.find(':selected').val();
            } else {
                return methods.settings.currencyselector.val();
            }
        },
        
        selectedServiceType: function() {
            if(methods.settings.serviceselector.prop('type') != 'hidden') {
                return true;
            }
            
            return false;
        },
        
        selectedServiceVal: function() {
            if(methods.selectedServiceType()) {
                return methods.settings.serviceselector.find(':selected').val();
            } else {
                return methods.settings.serviceselector.val();
            }
        },
        
        updateServices: function() {
            if(methods.settings.currencyselector.val() !== '') {
                if(methods.selectedServiceType()) {
                    for(var i = 0; i < methods.settings.servicehandler.childElementCount; i++) {
                        methods.settings.servicehandler.remove(0);
                    }

                    $.each(methods.settings.services, function(index, value) {
                        if(value.status & (1 << (methods.settings.currencyselector.find(':selected').attr('data-index')))) {
                           methods.settings.servicehandler.add({value: value.service, text: value.name});
                        }
                    });
                
                    methods.settings.servicehandler.set('selectedIndex', 0);
                }
                    
                setTimeout(function() { methods.updatePage(); }, 50);
            }
        },
		
		updatePage: function() {
            if(typeof methods.settings.useerrorcontainer !== undefined && methods.settings.useerrorcontainer) {
                 $('.wm-error-hidden').hide();
            }
            
            $('#refreshListing').hide();
            
			if(methods.settings.realmselector.val() === '') {
				methods.pageError('Select your realm.');
				return false;
			} else if(methods.settings.currencyselector.val() === '') {
				methods.pageError('Select currency to proceed.');
				return false;
			} else if(methods.settings.serviceselector.val() === '') {
				methods.pageError('Select service to proceed.');
				return false;
			} else if(methods.settings.characterselector.val() === '' && services[methods.settings.serviceselector.val()]['characterrequired']) {
				methods.pageError('Select your character on ' + methods.settings.realmselector.find(':selected').text() + '.');
				return false;
			} else {
				$.ajax({ 
					type: 'POST', 
					url: '', 
					data: { 
						update: 'page',
						method: 'load',
						realm: methods.settings.realmselector.val(),
						character: methods.settings.characterselector.val(),
						currency: methods.selectedCurrencyVal(),
						service: methods.selectedServiceVal()
					},
					dataType: 'json',
					success: function (data) {
						if(data.pageError) {
							methods.pageError(data.pageError);
						} else {
							if(data.content) {
								methods.settings.container
								.empty().html(data.content)
								.find('#inpage-character')
								.html(methods.settings.characterselector.find(':selected').text());
								$('#wmstore')
								.find('#inpage-realm')
								.html(methods.settings.realmselector.find(':selected').text());
                                
                                $('#refreshListing').show();
							}
						}
					},
					error: function() {
						$('#wm-ui-flash-message').ajaxListener('addError','There was an error loading the page.');
					}
				});
				return false;
			}
		},
		
		serviceComplete: function(form) {
			var data = { 
				update: 'page',
				method: 'fulfill',
				realm: methods.settings.realmselector.val(),
				character: methods.settings.characterselector.val(),
				currency: methods.settings.currencyselector.val(),
				service: methods.settings.serviceselector.val()
			};
			
			data = $(form).serialize() + '&' + $.param(data);
			
			$.ajax({ 
				type: 'POST', 
				url: '', 
				data: data,
				dataType: 'json',
				success: function (result) {
                    if (result !== undefined) {
                        if (result.refresh !== undefined) {
                            methods.updatePage();
                        }
                    }
				},
				error: function() {
					$('#wm-ui-flash-message').ajaxListener('addError','There was an error completing your request.');
				}
			});
			return false;
		},
		
		pageError: function(message) {
            var element = $('<div></div>')
				.css('text-align', 'center')
				.css('padding','50px 0 50px 0')
                .html(message);
            $(methods.settings.container).html('');
			$(methods.settings.errorcontainer).html(element);
            if(typeof methods.settings.useerrorcontainer !== undefined && methods.settings.useerrorcontainer) {
                $('.wm-error-hidden').show();
            }
		},
    };
	
    $.wmstore = function(method) {
        if (methods[method]) {
            return methods[ method ].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || ! method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' +  method + ' does not exist on jQuery.WarmaneStore');
        }
    };
	
	$.wmstore.defaults =  {
        'container': $('#wmstore'),
		'realmselector': $('#realmselector'),
		'characterselector': $('#characterselector'),
		'currencyselector': $('#currencyselector'),
		'serviceselector': $('#serviceselector'),
        'services': { }
	};
		
})(jQuery);

function in_array(needle, haystack) {
    for(var i in haystack) {
        if(haystack[i] == needle) return true;
    }
    return false;
}

function is_numeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

(function($) {
	$.fn.equalizeCols = function() {
        var height = 0,
            reset = "auto";
  
        return this
            .css("height", reset)
            .each(function() {
                height = Math.max(height, this.offsetHeight);
            })
            .css("height", height)
            .each(function() {
                var h = this.offsetHeight;
                if (h > height) {
                    $(this).css("height", height - (h - height));
                };
            });	
        };
})(jQuery);

(function($,undefined){
    '$:nomunge'; // Used by YUI compressor.

    $.fn.serializeObject = function(){
        var obj = {};

        $.each( this.serializeArray(), function(i,o){
        var n = o.name,
            v = o.value;

            obj[n] = obj[n] === undefined ? v
            : $.isArray( obj[n] ) ? obj[n].concat( v )
            : [ obj[n], v ];
        });

        return obj;
    };
})(jQuery);

;(function($){	
	$.titleAlert = function(text, settings) {
		if ($.titleAlert._running)
			$.titleAlert.stop();

		$.titleAlert._settings = settings = $.extend( {}, $.titleAlert.defaults, settings);

		if (settings.requireBlur && $.titleAlert.hasFocus)
			return;

		settings.originalTitleInterval = settings.originalTitleInterval || settings.interval;
		
		$.titleAlert._running = true;
		$.titleAlert._initialText = document.title;
		document.title = text;
		var showingAlertTitle = true;
		var switchTitle = function() {
			if (!$.titleAlert._running)
				return;
			
		    showingAlertTitle = !showingAlertTitle;
		    document.title = (showingAlertTitle ? text : $.titleAlert._initialText);
		    $.titleAlert._intervalToken = setTimeout(switchTitle, (showingAlertTitle ? settings.interval : settings.originalTitleInterval));
		}
		$.titleAlert._intervalToken = setTimeout(switchTitle, settings.interval);
		
		if (settings.stopOnMouseMove) {
			$(document).mousemove(function(event) {
				$(this).unbind(event);
				$.titleAlert.stop();
			});
		}
		
		if (settings.duration > 0) {
			$.titleAlert._timeoutToken = setTimeout(function() {
				$.titleAlert.stop();
			}, settings.duration);
		}
	};

	$.titleAlert.defaults = {
		interval: 500,
		originalTitleInterval: null,
		duration:0,
		stopOnFocus: true,
		requireBlur: false,
		stopOnMouseMove: false
	};

	$.titleAlert.stop = function() {
		if (!$.titleAlert._running)
			return;
		
		clearTimeout($.titleAlert._intervalToken);
		clearTimeout($.titleAlert._timeoutToken);
		document.title = $.titleAlert._initialText;
		
		$.titleAlert._timeoutToken = null;
		$.titleAlert._intervalToken = null;
		$.titleAlert._initialText = null;
		$.titleAlert._running = false;
		$.titleAlert._settings = null;
	}
	
	$.titleAlert.hasFocus = true;
	$.titleAlert._running = false;
	$.titleAlert._intervalToken = null;
	$.titleAlert._timeoutToken = null;
	$.titleAlert._initialText = null;
	$.titleAlert._settings = null;
	
	
	$.titleAlert._focus = function () {
		$.titleAlert.hasFocus = true;
		
		if ($.titleAlert._running && $.titleAlert._settings.stopOnFocus) {
			var initialText = $.titleAlert._initialText;
			$.titleAlert.stop();
			
			setTimeout(function() {
				if ($.titleAlert._running)
					return;
				document.title = ".";
				document.title = initialText;
			}, 1000);
		}
	};
	$.titleAlert._blur = function () {
		$.titleAlert.hasFocus = false;
	};

	$(window).bind("focus", $.titleAlert._focus);
	$(window).bind("blur", $.titleAlert._blur);
})(jQuery);
