export default function effectInit(params) {
  var effect = params.effect,
      swiper = params.swiper,
      on = params.on,
      setTranslate = params.setTranslate,
      setTransition = params.setTransition,
      overwriteParams = params.overwriteParams,
      perspective = params.perspective;
  on('beforeInit', function () {
    if (swiper.params.effect !== effect) return;
    swiper.classNames.push("" + swiper.params.containerModifierClass + effect);

    if (perspective && perspective()) {
      swiper.classNames.push(swiper.params.containerModifierClass + "3d");
    }

    var overwriteParamsResult = overwriteParams ? overwriteParams() : {};
    Object.assign(swiper.params, overwriteParamsResult);
    Object.assign(swiper.originalParams, overwriteParamsResult);
  });
  on('setTranslate', function () {
    if (swiper.params.effect !== effect) return;
    setTranslate();
  });
  on('setTransition', function (_s, duration) {
    if (swiper.params.effect !== effect) return;
    setTransition(duration);
  });
}