import $ from './dom.js';
export default function createShadow(params, $slideEl, side) {
  var shadowClass = "swiper-slide-shadow" + (side ? "-" + side : '');
  var $shadowContainer = params.transformEl ? $slideEl.find(params.transformEl) : $slideEl;
  var $shadowEl = $shadowContainer.children("." + shadowClass);

  if (!$shadowEl.length) {
    $shadowEl = $("<div class=\"swiper-slide-shadow" + (side ? "-" + side : '') + "\"></div>");
    $shadowContainer.append($shadowEl);
  }

  return $shadowEl;
}