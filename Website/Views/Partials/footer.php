<!-- FOOTER BOTTOM -->

      <div class="footer-bottom">
        <span class="copyright">Websize Created by <a href="#">Hoang/AD-Theme</a>. All Rights Reserved</span>
        <span class="backtotop">TOP <i class="icon-arrow-up7"></i></span>
          <div class="clearfix"></div>
      </div>

  </footer>

  <!--******************************************************************************************************************************************
  ****************************************************************** SCRIPT ********************************************************************
  *******************************************************************************************************************************************-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="Publics/assets/js/jquery-1.12.4.min.js"></script>
<script src="Publics/assets/js/slippry.js"></script>
  <script src="Publics/assets/js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      var p = $('#abcde p');
      var ks = $('#abcde').height();
      while ($(p).outerHeight() > ks) {
        $(p).text(function(index, text) {
          return text.replace(/\W*\s(\S)*$/, '...');
        });
}
});
  </script>
  <style>
  body > header > section > div > article > div.post-text > div > p > a,
  body > header > section > div > article > div.post-text > p > a{
    color: black;
  }
  body > header > section > div > article > div.post-text > div > div.lwptoc.lwptoc-center.lwptoc-light.lwptoc-notInherit{
    display: none;
  }
  </style>

</body>
</html>
