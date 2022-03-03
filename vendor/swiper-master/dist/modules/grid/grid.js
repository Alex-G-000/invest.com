export default function Grid(_ref) {
  var swiper = _ref.swiper,
      extendParams = _ref.extendParams;
  extendParams({
    grid: {
      rows: 1,
      fill: 'column'
    }
  });
  var slidesNumberEvenToRows;
  var slidesPerRow;
  var numFullColumns;

  var initSlides = function initSlides(slidesLength) {
    var slidesPerView = swiper.params.slidesPerView;
    var _swiper$params$grid = swiper.params.grid,
        rows = _swiper$params$grid.rows,
        fill = _swiper$params$grid.fill;
    slidesPerRow = slidesNumberEvenToRows / rows;
    numFullColumns = Math.floor(slidesLength / rows);

    if (Math.floor(slidesLength / rows) === slidesLength / rows) {
      slidesNumberEvenToRows = slidesLength;
    } else {
      slidesNumberEvenToRows = Math.ceil(slidesLength / rows) * rows;
    }

    if (slidesPerView !== 'auto' && fill === 'row') {
      slidesNumberEvenToRows = Math.max(slidesNumberEvenToRows, slidesPerView * rows);
    }
  };

  var updateSlide = function updateSlide(i, slide, slidesLength, getDirectionLabel) {
    var _swiper$params = swiper.params,
        slidesPerGroup = _swiper$params.slidesPerGroup,
        spaceBetween = _swiper$params.spaceBetween;
    var _swiper$params$grid2 = swiper.params.grid,
        rows = _swiper$params$grid2.rows,
        fill = _swiper$params$grid2.fill; // Set slides order

    var newSlideOrderIndex;
    var column;
    var row;

    if (fill === 'row' && slidesPerGroup > 1) {
      var groupIndex = Math.floor(i / (slidesPerGroup * rows));
      var slideIndexInGroup = i - rows * slidesPerGroup * groupIndex;
      var columnsInGroup = groupIndex === 0 ? slidesPerGroup : Math.min(Math.ceil((slidesLength - groupIndex * rows * slidesPerGroup) / rows), slidesPerGroup);
      row = Math.floor(slideIndexInGroup / columnsInGroup);
      column = slideIndexInGroup - row * columnsInGroup + groupIndex * slidesPerGroup;
      newSlideOrderIndex = column + row * slidesNumberEvenToRows / rows;
      slide.css({
        '-webkit-order': newSlideOrderIndex,
        order: newSlideOrderIndex
      });
    } else if (fill === 'column') {
      column = Math.floor(i / rows);
      row = i - column * rows;

      if (column > numFullColumns || column === numFullColumns && row === rows - 1) {
        row += 1;

        if (row >= rows) {
          row = 0;
          column += 1;
        }
      }
    } else {
      row = Math.floor(i / slidesPerRow);
      column = i - row * slidesPerRow;
    }

    slide.css(getDirectionLabel('margin-top'), row !== 0 ? spaceBetween && spaceBetween + "px" : '');
  };

  var updateWrapperSize = function updateWrapperSize(slideSize, snapGrid, getDirectionLabel) {
    var _swiper$$wrapperEl$cs;

    var _swiper$params2 = swiper.params,
        spaceBetween = _swiper$params2.spaceBetween,
        centeredSlides = _swiper$params2.centeredSlides,
        roundLengths = _swiper$params2.roundLengths;
    var rows = swiper.params.grid.rows;
    swiper.virtualSize = (slideSize + spaceBetween) * slidesNumberEvenToRows;
    swiper.virtualSize = Math.ceil(swiper.virtualSize / rows) - spaceBetween;
    swiper.$wrapperEl.css((_swiper$$wrapperEl$cs = {}, _swiper$$wrapperEl$cs[getDirectionLabel('width')] = swiper.virtualSize + spaceBetween + "px", _swiper$$wrapperEl$cs));

    if (centeredSlides) {
      snapGrid.splice(0, snapGrid.length);
      var newSlidesGrid = [];

      for (var i = 0; i < snapGrid.length; i += 1) {
        var slidesGridItem = snapGrid[i];
        if (roundLengths) slidesGridItem = Math.floor(slidesGridItem);
        if (snapGrid[i] < swiper.virtualSize + snapGrid[0]) newSlidesGrid.push(slidesGridItem);
      }

      snapGrid.push.apply(snapGrid, newSlidesGrid);
    }
  };

  swiper.grid = {
    initSlides: initSlides,
    updateSlide: updateSlide,
    updateWrapperSize: updateWrapperSize
  };
}