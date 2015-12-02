/* Extensions to Viljamis' responsive nav, to facilitate mutli-level toggle navigation */
jQuery(function($) {
  var $menu = $('.sub-menu'),
      $menulink = $('.sectiontoggle');
    
  $menulink.click(function(e) {
    e.preventDefault();
    var $this = $(this),
        $thismenu = $this.next(),
        $icon = $this.find('.sectionexpander');
    $menu.not($thismenu).removeClass('open');
    $thismenu.toggleClass('open');
    $menulink.not($this).removeClass('active');
    $this.toggleClass('active');
    $('.sectionexpander').not($icon).removeClass('icon-nav-open').addClass('icon-nav-closed');
    $icon.toggleClass('icon-nav-closed');
    $icon.toggleClass('icon-nav-open');
    return false;
  });
  
  // Search toggle
  var $searchnavlink = $('#search-trigger');
  var $searchnavicon = $('#search-trigger .icon-search');
  var $searchnavtext = $('#search-trigger span');
  var $searchnavarrow = $('#search-trigger .icon-arrow-down');
  $searchnavlink.bind("tap", function(e) {
    $searchnavicon.toggleClass('icon-search').toggleClass('icon-close');
    $searchnavarrow.toggleClass('icon-arrow-down').toggleClass('icon-arrow-up');
    
    var el = $searchnavtext;
    if (el.text() == el.data("text-swap")) {
      el.text(el.data("text-original"));
    } else {
      el.data("text-original", el.text());
      el.text(el.data("text-swap"));
    }
    
  });

  // Navigation toggle
  var $navlink = $('#nav-trigger');
  var $navicon = $('#nav-trigger .icon-menu');
  var $navtext = $('#nav-trigger span');
  var $navarrow = $('#nav-trigger .icon-arrow-down');
  $navlink.bind("tap", function(e) {
    $navicon.toggleClass('icon-menu').toggleClass('icon-close');
    $navarrow.toggleClass('icon-arrow-down').toggleClass('icon-arrow-up');
    
    var el = $navtext;
    if (el.text() == el.data("text-swap")) {
      el.text(el.data("text-original"));
    } else {
      el.data("text-original", el.text());
      el.text(el.data("text-swap"));
    }
    
  });
  
  $("li.parent ul a").focus(function(){
    var $this = $(this);
    $(".sub-menu").removeClass("focused");
    $this.parent().parent().addClass("focused");
  });
  
  $("li.parent ul a:last-child").on("blur", function() {
    $(this).parent().parent().removeClass("focused");
  });
  
});
