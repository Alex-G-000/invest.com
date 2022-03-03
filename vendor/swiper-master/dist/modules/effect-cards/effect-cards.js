import createShadow from '../../shared/create-shadow.js';
import effectInit from '../../shared/effect-init.js';
import effectTarget from '../../shared/effect-target.js';
import effectVirtualTransitionEnd from '../../shared/effect-virtual-transition-end.js';
export default function EffectCards(_ref) {
  var swiper = _ref.swiper,
      extendParams = _ref.extendParams,
      on = _ref.on;
  extendParams({
    cardsEffect: {
      slideShadows: true,
      transformEl: null
    }
  });

  var setTranslate = function setTranslate() {
    var slides = swiper.slides,
        activeIndex = swiper.activeIndex;
    var params = swiper.params.cardsEffect;
    var _swiper$touchEventsDa = swiper.touchEventsData,
        startTranslate = _swiper$touchEventsDa.startTranslate,
        isTouched = _swiper$touchEventsDa.isTouched;
    var currentTranslate = swiper.translate;

    for (var i = 0; i < slides.length; i += 1) {
      var $slideEl = slides.eq(i);
      var slideProgress = $slideEl[0].progress;
      var progress = Math.min(Math.max(slideProgress, -4), 4);
      var offset = $slideEl[0].swiperSlideOffset;

      if (swiper.params.centeredSlides && !swiper.params.cssMode) {
        swiper.$wrapperEl.transform("translateX(" + swiper.minTranslate() + "px)");
      }

      if (swiper.params.centeredSlides && swiper.params.cssMode) {
        offset -= slides[0].swiperSlideOffset;
      }

      var tX = swiper.params.cssMode ? -offset - swiper.translate : -offset;
      var tY = 0;
      var tZ = -100 * Math.abs(progress);
      var scale = 1;
      var rotate = -2 * progress;
      var tXAdd = 8 - Math.abs(progress) * 0.75;
      var isSwipeToNext = (i === activeIndex || i === activeIndex - 1) && progress > 0 && progress < 1 && (isTouched || swiper.params.cssMode) && currentTranslate < startTranslate;
      var isSwipeToPrev = (i === activeIndex || i === activeIndex + 1) && progress < 0 && progress > -1 && (isTouched || swiper.params.cssMode) && currentTranslate > startTranslate;

      if (isSwipeToNext || isSwipeToPrev) {
        var subProgress = Math.pow(1 - Math.abs((Math.abs(progress) - 0.5) / 0.5), 0.5);
        rotate += -28 * progress * subProgress;
        scale += -0.5 * subProgress;
        tXAdd += 96 * subProgress;
        tY = -25 * subProgress * Math.abs(progress) + "%";
      }

      if (progress < 0) {
        // next
        tX = "calc(" + tX + "px + (" + tXAdd * Math.abs(progress) + "%))";
      } else if (progress > 0) {
        // prev
        tX = "calc(" + tX + "px + (-" + tXAdd * Math.abs(progress) + "%))";
      } else {
        tX = tX + "px";
      }

      if (!swiper.isHorizontal()) {
        var prevY = tY;
        tY = tX;
        tX = prevY;
      }

      var scaleString = progress < 0 ? "" + (1 + (1 - scale) * progress) : "" + (1 - (1 - scale) * progress);
      var transform = "\n        translate3d(" + tX + ", " + tY + ", " + tZ + "px)\n        rotateZ(" + rotate + "deg)\n        scale(" + scaleString + ")\n      ";

      if (params.slideShadows) {
        // Set shadows
        var $shadowEl = $slideEl.find('.swiper-slide-shadow');

        if ($shadowEl.length === 0) {
          $shadowEl = createShadow(params, $slideEl);
        }

        if ($shadowEl.length) $shadowEl[0].style.opacity = Math.min(Math.max((Math.abs(progress) - 0.5) / 0.5, 0), 1);
      }

      $slideEl[0].style.zIndex = -Math.abs(Math.round(slideProgress)) + slides.length;
      var $targetEl = effectTarget(params, $slideEl);
      $targetEl.transform(transform);
    }
  };

  var setTransition = function setTransition(duration) {
    var transformEl = swiper.params.cardsEffect.transformEl;
    var $transitionElements = transformEl ? swiper.slides.find(transformEl) : swiper.slides;
    $transitionElements.transition(duration).find('.swiper-slide-shadow').transition(duration);
    effectVirtualTransitionEnd({
      swiper: swiper,
      duration: duration,
      transformEl: transformEl
    });
  };

  effectInit({
    effect: 'cards',
    swiper: swiper,
    on: on,
    setTranslate: setTranslate,
    setTransition: setTransition,
    perspective: function perspective() {
      return true;
    },
    overwriteParams: function overwriteParams() {
      return {
        watchSlidesProgress: true,
        virtualTranslate: !swiper.params.cssMode
      };
    }
  });
}