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
    
    $('.main-nav .active i').not($icon).removeClass('icon-arrow-up').addClass('icon-arrow-down');
    $menulink.not($this).removeClass('active');
    $this.toggleClass('active');
    $icon.toggleClass('icon-arrow-up');
    $icon.toggleClass('icon-arrow-down');
    return false;
  });
  
  // Search toggle
  var $searchnavlink = $('#search-trigger');
  var $searchnavicon = $('#search-trigger .icon-search');
  var $searchnavtext = $('#search-trigger span');
  var $searchnavarrow = $('#search-trigger .icon-arrow-down');
  var $navlink = $('.nav__trigger');
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
  var $navarrow = $('#nav-trigger .icon-arrow-up');
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
  
  // Login toggle
  if($(".not-logged-in").length) {
    var $loginnavlink = $('#login__trigger');
    var $loginnavtext = $('#login__trigger span');
    var $loginnavarrow = $('#login__trigger .icon-arrow-down');
    var $navlink = $('.login__trigger');
    $loginnavlink.bind("tap", function(e) {
      $loginnavarrow.toggleClass('icon-arrow-down').toggleClass('icon-arrow-up');
      
      var el = $loginnavtext;
      if (el.text() == el.data("text-swap")) {
        el.text(el.data("text-original"));
      } else {
        el.data("text-original", el.text());
        el.text(el.data("text-swap"));
      }
    });
    
    var $loginnavlinktop = $('#login__trigger__top');
      $loginnavlinktop.bind("tap", function() {
        login.toggle();
        $loginnavarrow.toggleClass('icon-arrow-down').toggleClass('icon-arrow-up');
        var el = $loginnavtext;
        if (el.text() == el.data("text-swap")) {
          el.text(el.data("text-original"));
        } else {
          el.data("text-original", el.text());
          el.text(el.data("text-swap"));
        }
    });
      
  };
  
  

  
  $("li.parent ul a").focus(function(){
    var $this = $(this);
    $(".sub-menu").removeClass("focused");
    $this.parent().parent().addClass("focused");
  });
  
  $("li.parent ul a:last-child").on("blur", function() {
    $(this).parent().parent().removeClass("focused");
  });
  
});
