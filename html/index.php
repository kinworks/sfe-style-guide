<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="guide no-js lt-ie9 lt-ie8 lt-ie7" xmlns:html="http://www.w3.org/1999/xhtml"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="guide no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="guide no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="guide no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SFE Style Guide</title>
    <script>
      window.STYLE_GUIDE = {
        ctm: false
      }; 
      if ('querySelector' in document && 'addEventListener' in window  && ("classList" in document.createElement("_")) && Object.prototype.toString.call(window.operamini) !== "[object OperaMini]") {
        window.STYLE_GUIDE.ctm = true;  
      }
    </script>
    <script>(function(b,a){b&&(a.className=a.className.replace(/\bno-js\b/,"js-tabs"))})(window.STYLE_GUIDE.ctm,document.documentElement);</script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <style>.panels, iframe {display: none !important;}</style>
    <![endif]-->
    <link rel="stylesheet" href="css/output/global.css">
    <link rel="stylesheet" href="css/solarized_dark.css">
    <!--[if IE 8]>  
      <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <![if (gt IE 8)]>
      <script type="text/javascript">
        // Webfont loader - see https://github.com/typekit/webfontloader for details
  	    WebFontConfig = {
  	      typekit: { id: 'bkn2mmh' }
  	    };
  	    (function() {
  	      var wf = document.createElement('script');
  	      wf.src = ('js/webfontloader.min.js');
  	      wf.type = 'text/javascript';
  	      wf.async = 'true';
  	      var s = document.getElementsByTagName('script')[0];
  	      s.parentNode.insertBefore(wf, s);
  	    })();
  	  </script>
    <![endif]>
	  
	  <script>
  	  // Outline focus method without disrupting UI via @decadecity - https://decadecity.net/blog/2012/11/06/building-a-layered-ui#focus
      // This assumes we are using a modern browser - you'll need to cut the mustard to use this reliably.
      if(window.STYLE_GUIDE.ctm) {
        document.querySelector('html').classList.add('js');
        var addKeyboardHook = function () {
          document.querySelector('html').classList.add('keyboard');
          document.removeEventListener('keydown', addKeyboardHook);
        };
        document.addEventListener('keydown', addKeyboardHook);
      }
    </script>
    
    <?php if($_GET['mode'] == 'test'): ?>
    <style>
      .nav-wrapper.guidenav-collapse {display: none !important;}
      .body-wrapper {width: 100% !important; margin-left: 0;}
    </style>
    <?php endif; ?>
    
    <script src="js/jquery-1.11.1.min.js"></script>
    
    <script src="js/tappy.js"></script>
    
    <!-- Viljamis' responsive nav - http://responsivenav.com -->
    <script src="js/responsive-nav.js"></script>
    
    <script src="js/site.js"></script>
    
    <script>
			/* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!(!t.document.createElementNS||!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||window.opera&&-1===navigator.userAgent.indexOf("Chrome")),o=function(o){var a=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];a.rel="stylesheet",a.href=e[o&&n?0:o?1:2],a.media="only x",r.parentNode.insertBefore(a,r),setTimeout(function(){a.media="all"})},a=new t.Image;a.onerror=function(){o(!1)},a.onload=function(){o(1===a.width&&1===a.height)},a.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};

			grunticon(["assets-icons/output/icons.data.svg.css", "assets-icons/output/icons.data.png.css", "assets-icons/output/icons.fallback.css"]);
		</script>
		<noscript><link href="assets-icons/output/icons.fallback.css" rel="stylesheet"></noscript>
    
  </head>
  <?php include 'functions.php'; ?>
  <body class="icon-body-background">
    
    
    <footer>
      <div class="footer__top">
        <div class="footer__top__report-issues">
          <span>Problems using this site or with its content?</span>
          <a class="btn">Report an Issue &raquo;</a>
        </div>
        <div class="footer__top__partners">
          <span>In partnership with:</span>
          <i class="icon-footer-partner-es">Education Scotland</i>
          <i class="icon-footer-partner-nls">National Library of Scotland</i>
          <i class="icon-footer-partner-cs">Creative Scotland</i>
        </div>
      </div>
      <div class="footer__nav">
        <ul>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Accessibility</a></li>
          <li><a href="#">Acknowledgements</a></li>
        </ul>
      </div>
      <div class="footer__bottom"></div>
    </footer>
    
    
    <div class="nav-wrapper__trigger" id="guidenav-trigger">Show/Hide Guidenav</div>
    <div class="nav-wrapper guidenav-collapse">
      <ul class="nav-wrapper__list">
        <li class="test-mode">
          <a href="/?mode=test">Hide Nav (Test mode)</a>
        </li>
        <li class="nav-wrapper__list__heading">Development Guide:</li>
        <li>
          <a href="/#intro">Intro, Browser tests</a>
        </li>
        <li>
          <a href="/#reset">Global CSS Reset</a>
        </li>
        <li>
          <a href="/#defaults">CSS 'Defaults'</a>
        </li>
        <li>
          <a href="/#mixins">SASS Mixins</a>
        </li>
        <li>
          <a href="/#colour">Colour Palette</a>
        </li>
        <li>
          <a href="/#typography">Typography</a>
        </li>
        <li>
          <a href="/#layout">Layout:</a>
        </li>
        <li>
          <a href="/#header">— Header</a>
        </li>
        <li>
          <a href="/#nav">— Navigation</a>
        </li>
        <li>
          <a href="/#body">— Body</a>
        </li>
        <li>
          <a href="/#footer">— Footer</a>
        </li>
        <li class="nav-wrapper__list__heading">Patterns:</li>
        <!-- Above are manual sections, and after here:
          Iterates through every partial html file and lists it, also displaying a code panel for the styles and markup -->
        <?php
        $files = glob("patterns/*.html");
        sort($files);
        $i=1;
        foreach ($files as $file):
        $markup = $i;
        $css = ++$i;
        $scss = ++$i;
        ?>
        <li><a href="#<?php echo str_replace('-',' ', substr(basename($file, ".html"), 3)) ;?>">
          <?php echo ucwords(str_replace('-',' ', substr(basename($file, ".html"), 3))) ;?>
          </a>
        </li> 
        <?php $i++; ?>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="body-wrapper bg-light-pastel">
      
      <div class="outside" <?php if($_GET['mode'] != 'test'):?>style="padding-left: 5%"<?php endif; ?> >
        <h1>Scottish Film Education: Development Guide</h1>
        
        <h2 class="heading">Release <span class="lowercase"><?php echo $tagname; ?></span></h2>
        <span class="versioninfo">
            <!--NB this is kind of a hack - it assumes the latest version that has been pushed is the version you're looking at - which should be true, but :) -->
            <a class="cta cta--contrast" href="https://github.com/kinworks/sfe-style-guide/tree/<?php echo $tagname; ?>" target="_blank">
              View on GitHub</a>
        </span>
      </div>
    </div>
    
    <div class="body-wrapper">
      
      <div id="js-binder" class="styleguide container">
        
        <div class="guidepattern">
          <?php // ReadMe ?>
          <?php if($_GET['mode'] == 'test'): ?>
               <a href="/">Show Nav (Exit Test mode)</a>  
              <?php endif; ?>
          <h1 class="guidance" id="intro">Introduction</h1>
          <br/>
          <p class="guidance">
            For information about this style guide and to file issues / pull requests, please refer to the project on <a href="https://github.com/kinworks/sfe-style-guide/tree/<?php echo $tagname; ?>" target="_blank">GitHub</a>.
          </p>
          <br/>
          <h2 class="guidance">Browser Tests</h2>
          <p class="guidance">
            This guide has been tested for compliance and functionality to the coverage extent appropriate having monitored 6 months of traffic to each of the SFE web properties - the browser list is also summarised in the <a href="https://github.com/kinworks/sfe-style-guide/tree/<?php echo $tagname; ?>" target="_blank">readme on Github</a>. There will doubtless be other browser bugs uncovered, which should be filed as <a href="https://github.com/kinworks/sfe-style-guide/issues" target="_blank">issues on Github</a>.
          </p>
        </div>
        
        <div class="guidepattern elements-heading">
          <h1 class="guidance">Core Assets</h1>
          <br/>
        </div>
        
      <?php // CSS reset pattern box ======================================================?>
        
        <div class="guidepattern" id="reset">
            <div class="display">
              <h2 class="guidance">Global CSS reset</h2>
              <a class="pattern__back-to-top" href="/">Back to top &#8673;</a>
              <p class="guidance">
                The baseline for this style guide consists of a CSS reset and a small set of common 'defaults'. These should be used when implementing code from this style guide, or the appropriate steps taken to make sure your replicated component behaves in the same way if you choose not to use them.
              </p>
        
        <p class="guidance">
          The CSS reset used is <a href="http://necolas.github.io/normalize.css/" target="blank">Normalize</a> at version <b class="update">3.0.2</b>.
        </p>
            </div>
            <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                  CSS
                </li>
                <a href="https://raw.githubusercontent.com/kinworks/sfe-style-guide/<?php echo $tagname; ?>/html/css/sass/_1-normalize.scss" target="_blank">
                  <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>" class="linkout">
                    View Raw File &raquo;
                  </li>
                </a>
    
              </ul>
              <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>" style="display: block;">
                <h2 class="js-panel__title">SCSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/_1-normalize.scss"); ?></code>
                </pre>
              </div>
            </div>
          </div>
    
    <?php // CSS defaults pattern box ====================================================== ?>
        
        <div class="guidepattern" id="defaults">
            <div class="display">
              <h2 class="guidance">Our 'defaults'</h2>
              <a class="pattern__back-to-top" href="/">Back to top &#8673;</a>
              <p class="guidance">
                The baseline for this style guide consists of a CSS reset and a small set of common 'defaults'. These should be used when implementing code from this style guide, or the appropriate steps taken to make sure your replicated component behaves in the same way if you choose not to use them.
              </p>
        
        <p class="guidance">
          The item of highest priority in our 'defaults' is probably the decision to <a href="http://quirksmode.org/css/user-interface/boxsizing.html" tagrte="_blank">use IE's box model for everything;</a> otherwise, you can choose to include these as a global defaults file (as we do) or selectively implement features from it to help you achieve the same end visual behaviours for the components in this style guide.
        </p>
        <p class="guidance">
        The full list of defaults is as follows:
        <ul>
          <li>Box model default;</li>
          <li>Disable Webkit's UA margins and padding;</li>
          <li>@Decadecity's a11y keyboard focus pattern CSS;</li>
          <li>Disable browsers tweaking the appearance of submit controls;</li>
          <li>Clearfix utility class;</li>
          <li>Disabling UA margins on the &lt;p&gt; tag;</li>
          <li>'Skip to content' a11y pattern CSS.</li>
        </ul>  
        </p>
            </div>
            <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                  SCSS
                </li>
                <a href="https://raw.githubusercontent.com/kinworks/sfe-style-guide/<?php echo $tagname; ?>/html/css/sass/_3-defaults.scss" target="_blank">
                  <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>" class="linkout">
                    View Raw File &raquo;
                  </li>
                </a>
    
              </ul>
              <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>" style="display: block;">
                <h2 class="js-panel__title">SCSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/_3-defaults.scss"); ?></code>
                </pre>
              </div>
            </div>
          </div>
    
    <?php // Mixins pattern box ====================================================== ?>
        
        <div class="guidepattern" id="mixins">
            <div class="display">
              <h2 class="guidance">Our SASS Mixins</h2>
              <a class="pattern__back-to-top" href="/">Back to top &#8673;</a>
              <p class="guidance">
                A handful of these will be used for items in this style guide. Usage is entirely optional, but they're useful — and if you're copying code from the style guide containing a mixin, you'll need the appropriate section of this file too. 
              </p>
        
            </div>
            <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                  SCSS
                </li>
                <a href="https://raw.githubusercontent.com/kinworks/sfe-style-guide/<?php echo $tagname; ?>/html/css/sass/_2-mixins.scss" target="_blank">
                  <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>" class="linkout">
                    View Raw File &raquo;
                  </li>
                </a>
    
              </ul>
              <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>" style="display: block;">
                <h2 class="js-panel__title">SCSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/_2-mixins.scss"); ?></code>
                </pre>
              </div>
            </div>
          </div>
          
        <?php // COLOUR / COLOR / COLUUÜUR ==============================================?>
          
          <div class="guidepattern" id="colour">
            <h1 class="guidance">Colour & Patterns</h1>
          </div>
          <br/><a class="pattern__back-to-top" href="/">Back to top &#8673;</a>
          <div class="guidepattern colour">
            <div class="display">
               <div class="swatches">
                 
                  <h2 class="guidance">Brand</h2>
                  <ul>
                    <li>
                      <span class="light"><!--color fill--></span>
                      <b>$light</b>
                    </li>
                    <li>
                      <span class="mid"><!--color fill--></span>
                      <b>$mid</b>
                    </li>
                    <li>
                      <span class="dark"><!--color fill--></span>
                      <b>$dark</b>
                    </li>
                  </ul>
                  
                  <h2 class="guidance">Text-specific Colours</h2>
                  <ul>
                    <li>
                      <span class="mid-text"><!--color fill--></span>
                      <b>$mid-text</b>
                    </li>
                    <li>
                      <span class="dark-text"><!--color fill--></span>
                      <b>$dark-text</b>
                    </li>
                    <li>
                      <span class="disabled-text"><!--color fill--></span>
                      <b>$disabled-text</b>
                    </li>
                  </ul>
                  
                  <h2 class="guidance">Modules / Body</h2>
                  <ul>
                    <li>
                      <span class="white"><!--color fill--></span>
                      <b>$white</b>
                    </li>
                    <li>
                      <span class="light-pastel"><!--color fill--></span>
                      <b>$light-pastel</b>
                    </li>
                    <li>
                      <span class="pattern"><!--color fill--></span>
                      <b>.pattern</b>
                    </li>
                  </ul>
                  
                  <h2 class="guidance">Contrast / Feedback</h2>
                  <ul>
                    <li>
                      <span class="contrast"><!--color fill--></span>
                      <b>$contrast</b>
                    </li>
                    <li>
                      <span class="contrast-alt"><!--color fill--></span>
                      <b>$contrast-alt</b>
                    </li>
                    <li>
                      <span class="feedback"><!--color fill--></span>
                      <b>$feedback</b>
                    </li>
                    <li>
                      <span class="error"><!--color fill--></span>
                      <b>$error</b>
                    </li>
                    <li>
                      <span class="disabled"><!--color fill--></span>
                      <b>$disabled</b>
                    </li>
                    <p class="guidance fullwidth">
                      <em>See also $disabled-text.</em>
                    </p>
                  </ul>
                </div>
            </div>
            <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                  SCSS
                </li>
                <a href="https://raw.githubusercontent.com/kinworks/sfe-style-guide/<?php echo $tagname; ?>/html/css/sass/_4-colours.scss" target="_blank">
                  <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>" class="linkout">
                    View Raw File &raquo;
                  </li>
                </a>
    
              </ul>
              <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>" style="display: block;">
                <h2 class="js-panel__title">SCSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/_4-colours.scss"); ?></code>
                </pre>
              </div>
            </div>
          </div>
          
    <?php // TYPOGRAPHY ============================================?>
  
          <div class="guidepattern" id="typography">
            <h1 class="guidance">Typography</h1>
          </div>
          <br/>
          <a class="pattern__back-to-top" href="/">Back to top &#8673;</a>
          <?php // Webfont loading ============ ?>
          
          <div class="guidepattern webfontloader">
            <div class="display">
              <h2 class="guidance">Webfont Loader</h2> 
              <p class="guidance">
                A common issue for users slower web connections is a rise in the use of custom webfonts loaded from external services, meaning content and features of a site are unusable until the webfont(s) have loaded in.
              </p> 
              <p class="guidance">
                To mitigate this, we use the <a href="https://github.com/typekit/webfontloader" target="_blank">Webfont Loader (GitHub)</a> co-developed by Google and Typekit which handles the loading of the webfont(s) in and updates the &lt;html&gt; tag with classes we can use to set typeface choices in CSS while the document is loading or if the fonts have failed to load.
              </p> 
              <p class="guidance">
                To use the Typekit webfonts and fallbacks selected for SFE's digital branding, you'll need: 
              </p>
              <ul class="guidance">
                <li>The webfont loader script (<a href="https://raw.githubusercontent.com/kinworks/sfe-style-guide/<?php echo $tagname; ?>/html/js/webfontloader.min.js" target="_blank">here,</a> minified)</li>
                <li>The &lt;script&gt; found in 'Markup' (right) in your &lt;head&gt;, and; </li>
                <li>the fallback CSS (right)</li>
              </ul>
              
              <p class="guidance">
                The current kit ID, from a Typekit account owned by SFE, is <strong>bkn2mmh</strong> and weighs around 170kb.
              </p>
              
              <p class="guidance">
                We've had some issues with the webfont loader on IE 8 and below, so we wrap the &lt;script&gt; tag in the document head with an IE conditional comment. For the guide document itself, we're using the BBC's <a href="http://responsivenews.co.uk/post/18948466399/cutting-the-mustard" target="_blank">'cutting the mustard'</a> technique to avoid JS errors from both the webfont loader and <a href="https://decadecity.net/blog/2012/11/06/building-a-layered-ui#focus" target="_blank">@decadecity's focus pattern</a>, which you could also consider doing.
              </p>
              
            </div>
            <div class="js-tab-ui panels">
                <ul class="js-tabs-list" role="tablist">
                  <li role="tab" id="tab-wfl-markup" aria-controls="tab-wfl-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="wfl">Markup
                  </li>
                  <li role="tab" id="tab-wfl-css" aria-controls="tab-wfl-css-panel" aria-selected="false" data-tabgroup="wfl">
                    CSS
                  </li>
                  <a href="https://raw.githubusercontent.com/kinworks/sfe-style-guide/<?php echo $tagname; ?>/html/js/webfontloader.min.js" target="_blank">
                    <li role="tab" class="linkout">
                      Webfontloader.min.js &raquo;
                    </li>
                  </a>
                </ul>
                <div class="source js-panel first" id="tab-wfl-markup-panel" role="tabpanel" aria-labelledby="tab-wfl-markup" data-tabgroup="wfl">
                  <h2 class="js-panel__title">Markup</h2>
                  <pre>
                    <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/webfontloading.html")); ?></code>
                  </pre>
                </div>
                <div class="style js-panel" id="tab-wfl-css-panel" role="tabpanel" aria-labelledby="tab-wfl-css" data-tabgroup="wfl">
                  <h2 class="js-panel__title">CSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/sass/_5-font-fallback.scss"); ?></code>
                  </pre>
                </div>
              </div>
          </div>
            
  <?php // TYPOGRAPHIC HIERARCHY ================================= ?>
  
        <div class="guidepattern hierarchy">
            <div class="display">
              <h2 class="guidance">Type hierarchy & styles</h2> 
              <?php echo file_get_contents("guidepatterns/typography.html"); ?>           
            </div>
            <div class="js-tab-ui panels">
                <ul class="js-tabs-list" role="tablist">
                  <li role="tab" id="tab-hierarchy-markup" aria-controls="tab-hierarchy-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="hierarchy">Markup
                  </li>
                  <li role="tab" id="tab-hierarchy-css" aria-controls="tab-hierarchy-css-panel" aria-selected="false" data-tabgroup="hierarchy">
                    SCSS
                  </li>
                </ul>
                <div class="source js-panel first" id="tab-hierarchy-markup-panel" role="tabpanel" aria-labelledby="tab-hierarchy-markup" data-tabgroup="hierarchy">
                  <h2 class="js-panel__title">Markup</h2>
                  <pre>
                    <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/typography.html")); ?></code>
                  </pre>
                </div>
                <div class="style js-panel" id="tab-hierarchy-css-panel" role="tabpanel" aria-labelledby="tab-hierarchy-css" data-tabgroup="hierarchy">
                  <h2 class="js-panel__title">CSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/sass/_5.1-typography.scss"); ?></code>
                  </pre>
                </div>
              </div>
          </div> 
    <?php // HEADER BLOCK PATTERN ==================== ?>
      
          <div class="guidepattern" id="layout">
            <h1 class="guidance">Layout</h1>
          </div>
          <div class="guidepattern pattern-header" id="header">
        
            <h2 class="guidance">Header Block</h2>
            <p class="guidance">
              This is the header block style, currently depicting the header for Scotland on Screen. <a href="/?mode=test#layout"><b>View it in test mode</b></a> and resize the browser window to see the breakpoint switch from single-column to enhanced (~41em).
            </p>
            <p class="guidance">
              There's a lot of tooling used in this heading example. All vector assets are produced in SVG, and passed into a Grunt workflow taking them through SVGMin and Grunticon, meaning all vector assets used on a given SFE website are from a single HTTP request except in browsers that cannot accept Base64-encoded stylesheets, in which case they get auto-generated PNG assets instead. The navigation for search only collapses showing the trigger button if JS successfully loads, and uses <a href="http://responsive-nav.com">Responsive-nav.js</a> for the collapse (the same library used for the core navigation).
            </p>
            <br/>
          </div>
      </div>
      
    <div class="bodywrapper">         
            <header class="header clearfix">
              <div class="header__part header__part--brand icon-header-left">
                <i class="icon-sos-logo">Scotland on Screen</i>
              </div>
              <div class="header__search-trigger clearfix" id="search-trigger">
                <div class="trigger__container">  
                  <i class="icon-search"></i>
                  <span data-text-swap="Close Search" data-text-original="Search...">Search...</span>
                  <i class="icon-arrow-down">Open this section</i>
                </div>
              </div>
              <div class="header__part header__part--search icon-header-right search-collapse">
                <div class="search__container clearfix">  
                  <div class="form-item-search-block-form">
                    <label for="edit-search-block-form--2">Search:</label>
                    <input title="Enter the terms you wish to search for." type="text" id="edit-search-block-form--2" name="search_block_form" value="" maxlength="128" class="form-text">
                  </div>
                  <div class="form-actions" id="edit-actions">
                    <input type="submit" id="edit-submit" name="op" value="Go &raquo;" class="form-submit">
                  </div>
                  <div class="search__advanced clearfix">
                    <a href="#">Advanced Search &raquo;</a>
                  </div>
                </div>
              </div> 
            </header>
      </div>
      <div class="styleguide container"> 
        <div class="guidepattern">  
            <div class="js-tab-ui panels fullwidth">
                <ul class="js-tabs-list" role="tablist">
                  <li role="tab" id="tab-header-markup" aria-controls="tab-header-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="header">Markup
                  </li>
                  <li role="tab" id="tab-header-scss" aria-controls="tab-header-scss-panel" aria-selected="false" data-tabgroup="header">
                    SCSS
                  </li>
                  <li role="tab" id="tab-header-css" aria-controls="tab-header-css-panel" aria-selected="false" data-tabgroup="header">
                    Generated CSS
                  </li>
                </ul>
                <div class="source js-panel first" id="tab-header-markup-panel" role="tabpanel" aria-labelledby="tab-header-markup" data-tabgroup="header">
                  <h2 class="js-panel__title">Markup</h2>
                  <pre>
                    <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/header.html")); ?></code>
                  </pre>
                </div>
                <div class="style js-panel" id="tab-header-scss-panel" role="tabpanel" aria-labelledby="tab-header-scss" data-tabgroup="header">
                  <h2 class="js-panel__title">SCSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/sass/patterns/0-header.scss"); ?></code>
                  </pre>
                </div>            
                <div class="style js-panel" id="tab-header-css-panel" role="tabpanel" aria-labelledby="tab-header-css" data-tabgroup="header">
                  <h2 class="js-panel__title">Generated CSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/output/patterns/0-header.css"); ?></code>
                  </pre>
                </div>
              </div>
            </div>
            
            <?php // NAVIGATION PATTERN ==================== ?>
      
          <div class="guidepattern pattern-header" id="nav">
        
            <h2 class="guidance">Navigation</h2>
            <p class="guidance">
              This is the navigation pattern, currently depicting the header for Scotland on Screen. <a href="/?mode=test#nav"><b>You should view it in test mode</b></a> and resize the browser window to see the breakpoint switch from single-column to enhanced (~41em).
            </p>
            <p class="guidance">
              This is a very specific and heavily-breakpointed example. The breakpoints for any other site would be very different to SOS. The navigation only collapses showing the trigger button if JS successfully loads, and uses <a href="http://responsive-nav.com">Responsive-nav.js</a> for the collapse (the same library used for the search expansion on the single-column layout). Unlike the search expansion trigger, the navigation trigger is position: fixed to the bottom of the viewport in single-column view.
            </p>
            <br/>
          </div>
      </div>
      
    <div class="bodywrapper">         
          <nav class="nav icon-pattern clearfix nav-collapse">
          <ul class="main-nav clearfix">
            <li class="home current-current_page_item">
              <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Home">Home</a>
            </li>
            <li class="about parent clearfix">
              <a href="#" class="parent-item js-ga-event" data-ga-cat="Navigation Item" data-ga-label="About Scotland on Screen">
                About Scotland on Screen
              </a>
              <a href="#" class="sectiontoggle js-ga-event" data-ga-cat="Navigation: Section Toggles" data-ga-label="Section Toggled: About">
                <div>
                  <i class="sectionexpander icon-arrow-down"></i>
                </div>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="What Can I Do?">
                    What Can I Do?
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Latest News &amp; Updates">
                    Latest News &amp; Updates
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Request Login">
                    Request Login
                  </a>
                </li>
              </ul>
            </li>
            <li class="browse-films">
              <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Browse Films">Browse Films</a>
            </li>
            <li class="resources parent clearfix">
              <a href="#" class="parent-item js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Resources">
                Resources
              </a>
              <a href="#" class="sectiontoggle js-ga-event" data-ga-cat="Navigation: Section Toggles" data-ga-label="Section Toggled: Resources">
                
                <div>
                  <i class="sectionexpander icon-arrow-down"></i>
                </div>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="#" class=" js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Lesson Guides">
                    Lesson Guides
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Video Tutorials">
                    Video Tutorials
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Useful Links">
                    Useful Links
                  </a>
                </li>
              </ul>
            </li>
            <li class="moving-image-education parent clearfix">
              <a href="#" class="parent-item js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Moving Image Education">
                Moving Image Education
              </a>
              <a href="#" class="sectiontoggle js-ga-event" data-ga-cat="Navigation: Section Toggles" data-ga-label="Section Toggled: Moving Image Education">
                
                <div>
                  <i class="sectionexpander icon-arrow-down"></i>
                </div>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="What Can I Do?">
                    MIE
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Latest News &amp; Updates">
                    PAGES
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Request Login">
                    OF MANY
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="What Can I Do?">
                    MIE
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Latest News &amp; Updates">
                    PAGES
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Request Login">
                    OF MANY
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="What Can I Do?">
                    MIE
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Latest News &amp; Updates">
                    PAGES
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Request Login">
                    OF MANY
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="What Can I Do?">
                    MIE
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Latest News &amp; Updates">
                    PAGES
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Request Login">
                    OF MANY
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="What Can I Do?">
                    MIE
                  </a>
                </li>
                <li>
                  <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Latest News &amp; Updates">
                    PAGES
                  </a>
                </li>
              </ul>
            </li>
            <li class="contact-us">
              <a href="#" class="js-ga-event" data-ga-cat="Navigation Item" data-ga-label="Contact Us">Contact Us</a>
            </li> 
        </ul>
        </nav>
        <div class="nav__trigger icon-pattern clearfix" id="nav-trigger">
          <div class="trigger__container">
            <i class="icon-menu"></i>
            <span data-text-swap="Close Menu" data-text-original="Open Menu">Open Menu</span>
            <i class="icon-arrow-up">Open this section</i>
          </div>
        </div>  
    </div>
    
    <div class="bodywrapper">
      <div class="styleguide container">  

 <?php // BODY PATTERN  ==================== ?>
      
        <div class="guidepattern" id="body">
        
            <h2 class="guidance">Body Background</h2>
            <p class="guidance">
              The body of each SFE web property has an individual background pattern. Currently this Development guide features the background pattern from Scotland on Screen. We're using Grunticon to apply the SVG with a PNG fallback here, but you can get click to get the individual SVG and PNG assets from the repo for more direct use.
            </p>
            
            <p class="guidance">
              The image is fixed position and is set to 'background-size: contain;' to size to the viewport, and subsequently to 'background-size: auto;' to retain its original size via media query when the viewport is wider than the size of the original image (for SOS, this is around 56em).
            </p>
            <br/>            
            <div class="js-tab-ui panels fullwidth">
                <ul class="js-tabs-list" role="tablist">
                  <li role="tab" id="tab-footer-scss" aria-controls="tab-footer-scss-panel" aria-selected="true" data-tabgroup="footer">
                    SCSS
                  </li>
                  <li role="tab" id="tab-footer-css" aria-controls="tab-footer-css-panel" aria-selected="false" data-tabgroup="footer">
                    Generated CSS
                  </li>
                </ul>
                <div class="style js-panel first" id="tab-footer-scss-panel" role="tabpanel" aria-labelledby="tab-footer-scss" data-tabgroup="footer">
                  <h2 class="js-panel__title">SCSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/sass/patterns/01-body-background.scss"); ?></code>
                  </pre>
                </div>            
                <div class="style js-panel" id="tab-footer-css-panel" role="tabpanel" aria-labelledby="tab-footer-css" data-tabgroup="footer">
                  <h2 class="js-panel__title">Generated CSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/output/patterns/01-body-background.css"); ?></code>
                  </pre>
                </div>
              </div>
            </div>



            
  <?php // FOOTER BLOCK PATTERN  ==================== ?>
      
        <div class="guidepattern pattern-footer" id="footer">
        
            <h2 class="guidance">Footer Block</h2>
            <p class="guidance">
              This is the footer block style to be on all SFE web properties (with the exception of the main SFE website).
            </p>
  
            <p class="guidance">
              For the purposes of this guide, the image asset required is switching to higher resolution PNG based on a media query. Our preferred method would actually be to use the SVG provided in the /assets folder and a PNG fallback, using Modernizr or similar. Either way, resolution independence for all vector-based visual assets is a requirement of any interface built for STP projects.
            </p>
            <br/>     
            <footer class="footer">
              <div class="footer__container clearfix">
                <h1 class="heading heading__medium">Scotland's Towns Partnership</h1>
                <a class="footer__twitter clearfix" href="https://twitter.com/ScotlandsTowns" target="_blank">
                  <span class="heading heading__small">Follow us on Twitter &raquo;</span>
                  <span class="icon"></span>
                </a>
                <nav class="footer__nav clearfix">
                  <ul>
                    <li><a href="http://www.scotlandstowns.org/">Home</a></li>
                    <li><a href="http://www.scotlandstowns.org/news-and-resources">News &amp; Resources</a></li>
                    <li><a href="http://www.scotlandstowns.org/community">Community</a></li>
                    <li><a href="http://www.scotlandstowns.org/about-us">About Us</a></li>
                    <li><a href="http://www.scotlandstowns.org/get-involved">Get Involved</a></li>
                  </ul>
                </nav>
                
              </div>
              <div class="footer__container footer__container--dark clearfix">
                <div class="footer__terms">
                  <p class="text__small">
                    &copy; 2015 Scotland's Towns Ltd. Registered in Scotland No. SC419769. All Rights Reserved. 
                  </p>
                </div>
              </div>
            </footer>
            
            <br/>
        
            <div class="display">
            
              <iframe class="thicker" src="guidepatterns/mobilefooter.html"></iframe>
  
              <br/>
                        
              <iframe class="thinner" src="guidepatterns/mobilefooter.html"></iframe>
            
            </div>
            <div class="js-tab-ui panels">
                <ul class="js-tabs-list" role="tablist">
                  <li role="tab" id="tab-footer-markup" aria-controls="tab-footer-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="footer">Markup
                  </li>
                  <li role="tab" id="tab-footer-scss" aria-controls="tab-footer-scss-panel" aria-selected="false" data-tabgroup="footer">
                    SCSS
                  </li>
                  <li role="tab" id="tab-footer-css" aria-controls="tab-footer-css-panel" aria-selected="false" data-tabgroup="footer">
                    Generated CSS
                  </li>
                </ul>
                <div class="source js-panel first" id="tab-footer-markup-panel" role="tabpanel" aria-labelledby="tab-footer-markup" data-tabgroup="footer">
                  <h2 class="js-panel__title">Markup</h2>
                  <pre>
                    <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/footer.html")); ?></code>
                  </pre>
                </div>
                <div class="style js-panel" id="tab-footer-scss-panel" role="tabpanel" aria-labelledby="tab-footer-scss" data-tabgroup="footer">
                  <h2 class="js-panel__title">SCSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/sass/patterns/0-footer.scss"); ?></code>
                  </pre>
                </div>            
                <div class="style js-panel" id="tab-footer-css-panel" role="tabpanel" aria-labelledby="tab-footer-css" data-tabgroup="footer">
                  <h2 class="js-panel__title">Generated CSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/output/patterns/0-footer.css"); ?></code>
                  </pre>
                </div>
              </div>
            </div>
  
  <?php // LAYOUT CAP ==================== ?>
  
            <div class="guidepattern pattern-layout-cap">
              <div class="display">
                <h2 class="guidance">Layout cap</h2>
      
                <p class="guidance">The layout width should be capped to a maximum of 80em via a limitation on your layout container, also applied to the header and footer of the site.</p>

              </div>
                                           
            <div class="js-tab-ui panels">
                <ul class="js-tabs-list" role="tablist">
                  <li role="tab" id="tab-layout-cap-scss" aria-controls="tab-layout-cap-scss-panel" aria-selected="true" data-tabgroup="layout-cap">
                    SCSS
                  </li>
                  <li role="tab" id="tab-layout-cap-css" aria-controls="tab-layout-cap-css-panel" aria-selected="false" data-tabgroup="layout-cap">
                    Generated CSS
                  </li>
                </ul>
                <div class="style js-panel first" id="tab-layout-cap-scss-panel" role="tabpanel" aria-labelledby="tab-layout-cap-scss" data-tabgroup="layout-cap">
                  <h2 class="js-panel__title">SCSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/sass/patterns/01-layout-cap.scss"); ?></code>
                  </pre>
                </div>            
                <div class="style js-panel" id="tab-layout-cap-css-panel" role="tabpanel" aria-labelledby="tab-layout-cap-css" data-tabgroup="layout-cap">
                  <h2 class="js-panel__title">Generated CSS</h2>
                  <pre>
                    <code><?php echo file_get_contents("css/output/patterns/01-layout-cap.css"); ?></code>
                  </pre>
                </div>
              </div>
            </div>
  
    
    <?php // Heading for elements section ======================== ?>
    
    <div class="guidepattern elements-heading">
      <h1 class="guidance">Page Elements Style Guide:</h1>
    </div>
          
    <?php // BEGIN REGULAR PATTERN LIBRARY ============================
          
          //Iterates through every partial html file and embeds it, also displaying a code panel for the styles and markup ?>
        <?php
        $files = glob("patterns/*.html");
        sort($files);
        $i=1;
        foreach ($files as $file):
        $markup = $i;
        $css = ++$i;
        $scss = ++$i;
        
        ?>
          <div class="guidepattern elements-heading" id="<?php echo str_replace('-',' ', substr(basename($file, ".html"), 3)) ;?>">
            <h2 class="guidance"><?php echo str_replace('-',' ', substr(basename($file, ".html"), 3)) ;?></h2>
            <a class="pattern__back-to-top" href="/">Back to top 
              &#8673;</a>
          </div>
        
          <div class="guidepattern pattern-<?php echo substr(basename($file, ".html"), 3) ;?>">
            <div class="display">
            <?php include($file); ?>
            </div>
            <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab<?php echo $markup ?>" aria-controls="markup<?php echo $markup ?>" tabindex="0" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                  Markup
                </li>
                <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>">
                  SCSS
                </li>
                <li role="tab" id="tab<?php echo $css ?>" aria-controls="css<?php echo $css ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>">
                  Generated CSS
                </li>
              </ul>
              <div class="source js-panel first" id="markup<?php echo $markup ?>" role="tabpanel" aria-labelledby="tab<?php echo $markup ?>" data-tabgroup="<?php echo $i ?>">
                <h2 class="js-panel__title">Markup</h2>
                <pre>
                  <code><?php echo htmlspecialchars(file_get_contents($file)); ?></code>
                </pre>
              </div>
              <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>">
                <h2 class="js-panel__title">SCSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/patterns/".basename($file, ".html").".scss"); ?></code>
                </pre>
              </div>
              <div class="style js-panel" id="css<?php echo $css ?>" role="tabpanel" aria-labelledby="tab<?php echo $css ?>" data-tabgroup="<?php echo $i ?>">
                <h2 class="js-panel__title">Generated CSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/output/patterns/".basename($file, ".html").".css"); ?></code>
                </pre>
              </div>
            </div>
          </div>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
      <footer class="footer guide">
        <div class="footer__container clearfix">
          <h1 class="heading heading__medium">Scotland's Towns Partnership</h1>
          <a class="footer__twitter clearfix" href="https://twitter.com/ScotlandsTowns" target="_blank">
            <span class="heading heading__small">Follow us on Twitter &raquo;</span>
            <span class="icon"></span>
          </a>
          <nav class="footer__nav clearfix">
            <ul>
              <li><a href="http://www.scotlandstowns.org/">Home</a></li>
              <li><a href="http://www.scotlandstowns.org/news-and-resources">News &amp; Resources</a></li>
              <li><a href="http://www.scotlandstowns.org/community">Community</a></li>
              <li><a href="http://www.scotlandstowns.org/about-us">About Us</a></li>
              <li><a href="http://www.scotlandstowns.org/get-involved">Get Involved</a></li>
            </ul>
          </nav>
          
        </div>
        <div class="footer__container footer__container--dark clearfix">
          <div class="footer__terms">
            <p class="text__small">
              &copy; 2015 Scotland's Towns Ltd. Registered in Scotland No. SC419769. All Rights Reserved. 
            </p>
          </div>
        </div>
      </footer>
    </div><!--/body-wrapper-->
  <script>
      /* Fix this later
        var guidenav = responsiveNav(".guidenav-collapse", {
        customToggle: "guidenav-trigger", // Selector: Specify the ID of a custom toggle
        navClass: "guidenav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
        animate: true, // Boolean: Use CSS3 transitions, true or false
        transition: 284, // Integer: Speed of the transition, in milliseconds
      });
      */
      
      var search = responsiveNav(".search-collapse", {
        customToggle: "search-trigger", // Selector: Specify the ID of a custom toggle
        navClass: "search-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
      });
      
      var nav = responsiveNav(".nav-collapse", {
        customToggle: "nav-trigger", // Selector: Specify the ID of a custom toggle
        navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
      });  
  </script>
  <script src="js/tabs.js"></script>
  </body>
</html>
