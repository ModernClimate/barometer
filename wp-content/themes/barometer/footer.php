<?php ?>

  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."script/vendor/skrollr.min.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."script/vendor/skrollr.ie.min.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."script/vendor/bootstrap.min.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."script/init.js") ?>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-6808479-7', 'barometerit.com');
    ga('send', 'pageview');
  </script>

  <?php wp_footer(); ?>

</body>
</html>
