import createShadow from '../../shared/create-shadow.js';
import effectInit from '../../shared/effect-init.js';
import effectTarget from '../../shared/effect-target.js';
import effectVirtualTransitionEnd from '../../shared/effect-virtual-transition-end.js';
export default function EffectCreative(_ref) {
  var swiper = _ref.swiper,
      extendParams = _ref.extendParams,
      on = _ref.on;
  extendParams({
    creativeEffect: {
      transformEl: null,
      limitProgress: 1,
      shadowPerProgress: false,
      progressMultiplier: 1,
      perspective: true,
      prev: {
        translate: [0, 0, 0],
        rotate: [0, 0, 0],
        opacity: 1,
        scale: 1
      },
      next: {
        translate: [0, 0, 0],
        rotate: [0, 0, 0],
        opacity: 1,
        scale: 1
      }
    }
  });

  var getTranslateValue = function getTranslateValue(value) {
    if (typeof value === 'string') return value;
    return value + "px";
  };

  var setTranslate = function setTranslate() {
    var slides = swiper.slides,
        $wrapperEl = swiper.$wrapperEl,
        slidesSizesGrid = swiper.slidesSizesGrid;
    var params = swiper.params.creativeEffect;
    var multiplier = params.progressMultiplier;
    var isCenteredSlides = swiper.params.centeredSlides;

    if (isCenteredSlides) {
      var margin = slidesSizesGrid[0] / 2 - swiper.params.slidesOffsetBefore || 0;
      $wrapperEl.transform("translateX(calc(50% - " + margin + "px))");
    }

    var _loop = function _loop(i) {
      var $slideEl = slides.eq(i);
      var slideProgress = $slideEl[0].progress;
      var progress = Math.min(Math.max($slideEl[0].progress, -params.limitProgress), params.limitProgress);
      var originalProgress = progress;

      if (!isCenteredSlides) {
        originalProgress = Math.min(Math.max($slideEl[0].originalProgress, -params.limitProgress), params.limitProgress);
      }

      var offset = $slideEl[0].swiperSlideOffset;
      var t = [swiper.params.cssMode ? -offset - swiper.translate : -offset, 0, 0];
      var r = [0, 0, 0];
      var custom = false;

      if (!swiper.isHorizontal()) {
        t[1] = t[0];
        t[0] = 0;
      }

      var data = {
        translate: [0, 0, 0],
        rotate: [0, 0, 0],
        scale: 1,
        opacity: 1
      };

      if (progress < 0) {
        data = params.next;
        custom = true;
      } else if (progress > 0) {
        data = params.prev;
        custom = true;
      } // set translate


      t.forEach(function (value, index) {
        t[index] = "calc(" + value + "px + (" + getTranslateValue(data.translate[index]) + " * " + Math.abs(progress * multiplier) + "))";
      }); // set rotates

      r.forEach(function (value, index) {
        r[index] = data.rotate[index] * Math.abs(progress * multiplier);
      });
      $slideEl[0].style.zIndex = -Math.abs(Math.round(slideProgress)) + slides.length;
      var translateString = t.join(', ');
      var rotateString = "rotateX(" + r[0] + "deg) rotateY(" + r[1] + "deg) rotateZ(" + r[2] + "deg)";
      var scaleString = originalProgress < 0 ? "scale(" + (1 + (1 - data.scale) * originalProgress * multiplier) + ")" : "scale(" + (1 - (1 - data.scale) * originalProgress * multiplier) + ")";
      var opacityString = originalProgress < 0 ? 1 + (1 - data.opacity) * originalProgress * multiplier : 1 - (1 - data.opacity) * originalProgress * multiplier;
      var transform = "translate3d(" + translateString + ") " + rotateString + " " + scaleString; // Set shadows

      if (custom && data.shadow || !custom) {
        var $shadowEl = $slideEl.children('.swiper-slide-shadow');

        if ($shadowEl.length === 0 && data.shadow) {
          $shadowEl = createShadow(params, $slideEl);
        }

        if ($shadowEl.length) {
          var shadowOpacity = params.shadowPerProgress ? progress * (1 / params.limitProgress) : progress;
          $shadowEl[0].style.opacity = Math.min(Math.max(Math.abs(shadowOpacity), 0), 1);
        }
      }

      var $targetEl = effectTarget(params, $slideEl);
      $targetEl.transform(transform).css({
        opacity: opacityString
      });

      if (data.origin) {
        $targetEl.css('transform-origin', data.origin);
      }
    };

    for (var i = 0; i < slides.length; i += 1) {
      _loop(i);
    }
  };

  var setTransition = function setTransition(duration) {
    var transformEl = swiper.params.creativeEffect.transformEl;
    var $transitionElements = transformEl ? swiper.slides.find(transformEl) : swiper.slides;
    $transitionElements.transition(duration).find('.swiper-slide-shadow').transition(duration);
    effectVirtualTransitionEnd({
      swiper: swiper,
      duration: duration,
      transformEl: transformEl,
      allSlides: true
    });
  };

  effectInit({
    effect: 'creative',
    swiper: swiper,
    on: on,
    setTranslate: setTranslate,
    setTransition: setTransition,
    perspective: function perspective() {
      return swiper.params.creativeEffect.perspective;
    },
    overwriteParams: function overwriteParams() {
      return {
        watchSlidesProgress: true,
        virtualTranslate: !swiper.params.cssMode
      };
    }
  });
}