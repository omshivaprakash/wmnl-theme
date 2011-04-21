<?php global $T, $WMNL; ?>
    <div id="footer">
        <div class="nav-search">
            <div class="nav"><?php $WMNL->menu(); ?></div>
            <form class="searchform" name="searchform" method="get" action="<?php echo home_url(); ?>">
                <div>
        			<input type="text" id="s" name="s" />
        			<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyten' ); ?>" />
    			</div>
            </form>
        </div>

        <a href="http://www.wmnederland.nl" title="Wikimedia Nederland">
            <img class="logo" src="<?php $T->theme(); ?>/img/logotrans.png" alt="Wikimedia Nederland" />
        </a>
    </div> <!-- #footer -->
</div> <!-- #wrapper -->
<?php wp_footer(); ?>

<?php if ($T->getThemeOption("custom-js")) : ?>
<script>
var _CUSTOM_JS = function() {
    var $ = jQuery;
    <?php $T->themeOption("custom-js"); ?>
};
</script>
<?php endif; ?>

<script>
function __loadScript(b,a){function f(h,i){i=i||function(){};var g=document.createElement("script");g.type="text/javascript";if(g.readyState){g.onreadystatechange=function(){if(g.readyState==="loaded"||g.readyState==="complete"){g.onreadystatechange=null;i()}}}else{g.onload=function(){i()}}g.src=h;document.getElementsByTagName("head")[0].appendChild(g)}if(typeof b==="string"){f(b,a)}else{if(b instanceof Array){var e=0,c=b.length;function d(){if(e>=c){a();return false}f(b[e],d);e++}d()}}};

var __scripts = [
    "http://global.wmnederland.nl/nav/v1/nav.js",
    "<?php $T->style(); ?>/js/javascript.js"
];

__loadScript(__scripts, function() {
    WMNL_NAV();
    App.init();
    if(typeof _CUSTOM_JS !== "undefined") _CUSTOM_JS();
});
</script>

<!-- Google Analytics -->
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php $T->themeOption('google-analytics-id'); ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- /Google Analytics -->

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
<?php /* "Just what do you think you're doing Dave?" */ ?>
</body>
</html>