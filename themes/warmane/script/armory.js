$(function() {
    $('table img').mouseover(function(event) {
        var alt = $(this).attr('alt');
        $CoTTooltip.showTooltip(event, alt, "", 4)
    }).mouseout(function() {
        $CoTTooltip.hideTooltip();
    }).mousemove(function(event) {
        $CoTTooltip.moveTooltip(event);
    });
    
    $('.tooltip').mouseover(function(event) {
        var alt = $(this).attr('data-tooltip');
        $CoTTooltip.showTooltip(event, alt + '&nbsp;', "", 4)
    }).mouseout(function() {
        $CoTTooltip.hideTooltip();
    }).mousemove(function(event) {
        $CoTTooltip.moveTooltip(event);
    });
    
    $('.talentHolder').mousemove(function(event) {
        $CoTTooltip.moveTooltip(event);
    }).mouseout(function() {
        $CoTTooltip.hideTooltip();
    });

    $('#nav-search-input').bind('keyup', function (e) {
        if (e.keyCode === 13) {
            $('#nav-search').click();
        }
    });

    $('#nav-search').on('click', function(e) {
        e.preventDefault();
        var _term = $('#nav-search-input').val();
        if(_term != '') {
            window.location = '/search/' + _term;
        }
    });
    
    $('.relevance-bar').stop().animate({ left: ($('.relevance-wrap').data('relevance-percent') / 100) * ($('.relevance-wrap').width()) }, 2500);
});

function switchTalents(group, string) {
    
    talentCalc.applyTalents(string);	
    
    $("#group_primary").removeClass("selectedSet");
    $("#group_secondary").removeClass("selectedSet");
    $("#group_" + group).addClass("selectedSet");

    $("#glyphs_primary").hide();
    $("#glyphs_secondary").hide();
    $("#glyphs_" + group).show();
}

function switchSpecializations(group) {
    $("#group_primary").removeClass("selectedSet");
    $("#group_secondary").removeClass("selectedSet");
    $("#group_" + group).addClass("selectedSet");

    $("#glyphs_primary").hide();
    $("#glyphs_secondary").hide();
    $("#glyphs_" + group).show();
    
    $("#talents_primary").hide();
    $("#talents_secondary").hide();
    $("#talents_" + group).show();
}

function sprintf(str) {
	for(var i = 1; i < arguments.length; ++i) {
		str = str.replace('{' + (i - 1) + '}', arguments[i]);
	}
	return str;
}