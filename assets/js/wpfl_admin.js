/*

  *** Toggle Custom Styles Box ***

*/
function togglePluginStyles() {
  //Check if the checkbox is checked
  if( jQuery('input[name="wpfl_remove_all_styles"]').is(':checked') ) {
    //If checkbox is checked, show the custom styles input box
    jQuery('#customStylesInfo').slideDown();
    jQuery('.linkStyleOptions').slideUp();
  } else {
    //If checkbox is not checked, hide the custom styles input box
    jQuery('#customStylesInfo').slideUp();
    jQuery('.linkStyleOptions').slideDown();
  }
}
//Active the function on page load
togglePluginStyles();



/*

  *** Tooltips ***

*/
jQuery( "span.wpfl_tooltip" ).hover(
  function() {
    var toolTipText = jQuery(this).attr('data-wpfl-tooltip');
    jQuery( this ).after( jQuery( "<span class='wpfl_tooltip_show''>"+toolTipText+"</span>" ) ).fadeIn("slow");
    jQuery('.wpfl_tooltip_show').fadeIn();
  }, function() {
    jQuery('.wpfl_tooltip_show').fadeOut("fast", function() {
      jQuery( "span.wpfl_tooltip_show" ).remove();
    });
  }
);


/* 

*** Tabs Plugin ***

* Original Author: John D Jameson
* Original Code URL: http://codepen.io/johndjameson/pen/ecmlu 

*/

var TabBlock = {
  s: {
    animLen: 200
  },
  
  init: function() {
    TabBlock.bindUIActions();
    TabBlock.hideInactive();
  },
  
  bindUIActions: function() {
    jQuery('.tabBlock-tabs').on('click', '.tabBlock-tab', function(){
      TabBlock.switchTab(jQuery(this));
    });
  },
  
  hideInactive: function() {
    var $tabBlocks = jQuery('.tabBlock');
    
    $tabBlocks.each(function(i) {
      var 
        $tabBlock = jQuery($tabBlocks[i]),
        $panes = $tabBlock.find('.tabBlock-pane'),
        $activeTab = $tabBlock.find('.tabBlock-tab.is-active');
      
      $panes.hide();
      jQuery($panes[$activeTab.index()]).show();
    });
  },
  
  switchTab: function($tab) {
    var $context = $tab.closest('.tabBlock');
    
    if (!$tab.hasClass('is-active')) {
      $tab.siblings().removeClass('is-active');
      $tab.addClass('is-active');
   
      TabBlock.showPane($tab.index(), $context);
    }
   },
  
  showPane: function(i, $context) {
    var $panes = $context.find('.tabBlock-pane');
   
    // Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter @johndjameson
    $panes.slideUp(TabBlock.s.animLen);
    jQuery($panes[i]).slideDown(TabBlock.s.animLen);
  }
};

jQuery(function() {
  TabBlock.init();
});

TabBlock.init();