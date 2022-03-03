export default function effectVirtualTransitionEnd(_ref) {
  var swiper = _ref.swiper,
      duration = _ref.duration,
      transformEl = _ref.transformEl,
      allSlides = _ref.allSlides;
  var slides = swiper.slides,
      activeIndex = swiper.activeIndex,
      $wrapperEl = swiper.$wrapperEl;

  if (swiper.params.virtualTranslate && duration !== 0) {
    var eventTriggered = false;
    var $transitionEndTarget;

    if (allSlides) {
      $transitionEndTarget = transformEl ? slides.find(transformEl) : slides;
    } else {
      $transitionEndTarget = transformEl ? slides.eq(activeIndex).find(transformEl) : slides.eq(activeIndex);
    }

    $transitionEndTarget.transitionEnd(function () {
      if (eventTriggered) return;
      if (!swiper || swiper.destroyed) return;
      eventTriggered = true;
      swiper.animating = false;
      var triggerEvents = ['webkitTransitionEnd', 'transitionend'];

      for (var i = 0; i < triggerEvents.length; i += 1) {
        $wrapperEl.trigger(triggerEvents[i]);
      }
    });
  }
}