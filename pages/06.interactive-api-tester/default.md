---
title: ''
body_classes: ''
order_by: ''
order_manual: ''
---

				 
 <link rel="icon" type="image/png" href="https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="wp_swagger/swagger_ui/images/favicon-16x16.png" sizes="16x16" />
  <link href='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/css/typography.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/css/reset.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/css/screen.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/css/reset.css' media='print' rel='stylesheet' type='text/css'/>
  <link href='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/css/print.css' media='print' rel='stylesheet' type='text/css'/>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/jquery-1.8.0.min.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/jquery.slideto.min.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/jquery.wiggle.min.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/jquery.ba-bbq.min.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/handlebars-2.0.0.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/js-yaml.min.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/lodash.min.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/backbone-min.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/swagger-ui.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/highlight.9.1.0.pack.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/highlight.9.1.0.pack_extended.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/jsoneditor.min.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/marked.js' type='text/javascript'></script>
  <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lib/swagger-oauth.js' type='text/javascript'></script>

  <!-- Some basic translations -->
  <!-- <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_uilang/translator.js' type='text/javascript'></script> -->
  <!-- <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lang/ru.js' type='text/javascript'></script> -->
  <!-- <script src='https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/lang/en.js' type='text/javascript'></script> -->

  <script type="text/javascript">
      
$(function () {
var def = 'https://raw.githubusercontent.com/antonioortegajr/idx-swagger-def/master/test/test3.yaml'
      var url = def;
      if (url && url.length > 1) {
        url = def;
      } else {
        url = def;
      }
url = def;
      hljs.configure({
        highlightSizeThreshold: 5000
      });

      // Pre load translate...
      if(window.SwaggerTranslator) {
        window.SwaggerTranslator.translate();
      }
      window.swaggerUi = new SwaggerUi({
        url: url,
        dom_id: "swagger-ui-container",
        supportedSubmitMethods: ['get'],
        onComplete: function(swaggerApi, swaggerUi){
          if(typeof initOAuth == "function") {
            initOAuth({
              clientId: "your-client-id",
              clientSecret: "your-client-secret-if-required",
              realm: "your-realms",
              appName: "TumTum",
              scopeSeparator: ",",
              additionalQueryStringParams: {}
            });
          }

          if(window.SwaggerTranslator) {
            window.SwaggerTranslator.translate();
          }
        },
        onFailure: function(data) {
          log("Unable to Load SwaggerUI");
        },
        docExpansion: "none",
        jsonEditor: false,
        defaultModelRendering: 'schema',
        showRequestHeaders: false
      });

      window.swaggerUi.load();

      function log() {
        if ('console' in window) {
          console.log.apply(console, arguments);
        }
      }
  });
  </script>

<div class="swagger-section">
<div id='header'>
  <div class="swagger-ui-wrap">
    <a id="logo" href="http://swagger.io"><img class="logo__img" alt="swagger" height="30" width="30" src="https://developers.idxbroker.com/wp-content/plugins/wp_swagger/swagger_ui/images/logo_small.png" /><span class="logo__title">swagger</span></a>
    <form id='api_selector'>
      <div class='input'><input placeholder="http://example.com/api" id="input_baseUrl" name="baseUrl" type="text"/></div>
      <div id='auth_container'></div>
      <div class='input'><a id="explore" class="header__btn" href="#" data-sw-translate>Explore</a></div>
    </form>
  </div>
</div>

<div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
<div id="swagger-ui-container" class="swagger-ui-wrap"></div>
</div>
<style>
.swagger-section #header, .swagger-section #message-bar {
	display: none;
}
#resources_container {
	width: 100%;
}
.swagger-section .swagger-ui-wrap {
	min-width: 0;
    max-width: none;
    width: 100%;
}
.swagger-section .swagger-ui-wrap .info_title {<
	font-size: 40px;
}
#wrapper .post-content h2 {
	font-size: 30px;
}
.swagger-section .swagger-ui-wrap p {
	margin-bottom: 0;
}
.swagger-section .swagger-ui-wrap ul#resources li.resource ul.endpoints li.endpoint ul.operations li.operation.get div.heading h3 span.http_method a {
	background-color: #2568AD;
    border-radius: 0;
}
.swagger-section .swagger-ui-wrap ul#resources li.resource ul.endpoints li.endpoint ul.operations li.operation.get div.heading {
	border: 1px solid #2568AD;
}
.swagger-section .swagger-ui-wrap ul#resources li.resource ul.endpoints li.endpoint ul.operations li.operation.post div.heading h3 span.http_method a {
	background-color: #8EC641;
    border-radius: 0;
}
.swagger-section .swagger-ui-wrap ul#resources li.resource ul.endpoints li.endpoint ul.operations li.operation.post div.heading {
	border: 1px solid #8EC641;
}
.swagger-section .swagger-ui-wrap ul#resources li.resource ul.endpoints li.endpoint ul.operations li.operation.put div.heading h3 span.http_method a {
	background-color: #F5602E;
    border-radius: 0;
}
.swagger-section .swagger-ui-wrap .footer span {
}
</style>