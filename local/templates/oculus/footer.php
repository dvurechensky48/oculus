 <div id="footer">
        <section id="footer-1" class="blue medium">
            <div class="container">
                <div class="row">
                    <div class="hidden-sm hidden-xs">
                        <ul class="footer-menu">
                            <li><a class="main" href="#">О нас</a></li>
                            <li><a class="main" href="#">заболевания</a></li>
                            <li><a class="main" href="#">диагностика</a></li>
                            <li><a class="main" href="#">операции</a></li>
                            <li><a class="main" href="#">оборудование</a></li>
                            <li><a class="main" href="#">Наши врачи</a></li>
                            <li><a class="main" href="#">Пациентам</a></li>
                            <li><a class="main" href="#">детское отделение</a></li>
                            <li><a class="main" href="#">ортокератология</a></li>
                        </ul>                                
                    </div>
                    <div class="clearfix"></div>
                    <div class="margin-top-2"></div>
                    <div class="col-md-6">
                        <div>
                            <a href="#" class="button3">Лицензии и сертификаты</a>
                            <a href="#" class="button3">Надзорные органы</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="soc all-right">
                            <span>
                                <a href="#"> <img src="img/vk.png"> </a>
                            </span>
                            <span>
                                <a href="#"> <img src="img/ok.png"> </a>
                            </span>
                            <span>
                                <a href="#"> <img src="img/fb.png"> </a>
                            </span>
                            <span>
                                <a href="#"> <img src="img/mail.png"> </a>
                            </span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text margin-top-2">
                        <div class="col-xs-4">
                        © Центр микрохирургии глаза «Окулюс», 2017
                        </div>
                        <div class="col-xs-4 all-center">
                            <a href="#">Политика конфединциальности</a>
                        </div>
                        <div class="col-xs-4 all-right">
                            made in <a class="octavian" href="#">OCTAVIAN</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png"></a></h4>
                  </div>
                  <div class="modal-body">
                    <div class="form margin-top-2">
                    <form>
                        <div>
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
                        </div>
                        <div class="margin-top-4">
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
                        </div>
                        <div class="margin-top-4">
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
                        </div>
                        <div class="margin-top-4">
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
                        </div>
                    
                </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="button1-off" data-dismiss="modal">Закрыть</button>
                    <input type="submit" class="button1" value="Отправить" name="">
                  </div>
                  </form>
                </div>
              </div>
            </div>
        </section>
        <section id="footer-2" class="white medium">
            <div class="container">
                <div class="row">
                    <div class="title">
                        Имеются противопоказания, необходима консультация врача
                    </div>
                </div>
            </div>
        </section>
    </div>



 <script type="text/javascript">
    

    $(document).ready(function() {
  $("#owl-example").owlCarousel(
  {
    items: 1,
    itemsMobile : [479,1],
    itemsTablet : [768,1],
    itemsDesktopSmall : [979,1],
    itemsDesktop :  [1199,1],
    margin:10,
    singleItem: true,
    navigation : false,
    navigationText : ["<",">"],
    dots: false,

  }
    );
});
</script>
</body>
</html>
