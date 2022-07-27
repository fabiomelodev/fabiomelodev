import jQuery from "jquery";
import Swiper from "swiper";

(function(document, window, jQuery, Swiper) {
  const routes = require("./routes");

  window.$ = window.jQuery = jQuery;
  window.Swiper = Swiper;

  require("./components/change-language");
  require("./components/loading");
  require("./components/menu-toggler");
  require("./components/project-show");
  require("./components/swiper-folk");
  require("./components/widget-social-media");
})(document, window, jQuery, Swiper);
