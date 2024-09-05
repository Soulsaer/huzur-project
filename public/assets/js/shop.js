(function($) {
  'use strict';
  /*Product Details*/
  var productDetails = function() {
      $('.product-image-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: false,
          asNavFor: '.slider-nav-thumbnails',
      });

      $('.slider-nav-thumbnails').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          asNavFor: '.product-image-slider',
          dots: false,
          focusOnSelect: true,
          prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
          nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>'
      });

      // Remove active class from all thumbnail slides
      $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

      // Set active class to first thumbnail slides
      $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

      // On before slide change match active thumbnail to current slide
      $('.product-image-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
          var mySlideNumber = nextSlide;
          $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
          $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
      });

      $('.product-image-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
          var img = $(slick.$slides[nextSlide]).find("img");
          $('.zoomWindowContainer,.zoomContainer').remove();
          $(img).elevateZoom({
              zoomType: "inner",
              cursor: "crosshair",
              zoomWindowFadeIn: 500,
              zoomWindowFadeOut: 500
          });
      });
      //Elevate Zoom
      if ($(".product-image-slider").length) {
          $('.product-image-slider .slick-active img').elevateZoom({
              zoomType: "inner",
              cursor: "crosshair",
              zoomWindowFadeIn: 500,
              zoomWindowFadeOut: 500
          });
      }
      //Filter color/Size
      $('.list-filter').each(function() { 
          $(this).find('a').on('click', function(event) {
              event.preventDefault();
              $(this).parent().siblings().removeClass('active');
              $(this).parent().toggleClass('active');
              $(this).parents('.attr-detail').find('.current-size').text($(this).text());
              $(this).parents('.attr-detail').find('.current-color').text($(this).attr('data-color'));
          });
      });
      //Qty Up-Down
      $('.detail-qty').each(function() {
          var qtyval = parseInt($(this).find('.qty-val').text(), 10);
          $('.qty-up').on('click', function(event) {
              event.preventDefault();
              qtyval = qtyval + 1;
              $(this).prev().text(qtyval);
          });
          $('.qty-down').on('click', function(event) {
              event.preventDefault();
              qtyval = qtyval - 1;
              if (qtyval > 1) {
                  $(this).next().text(qtyval);
              } else {
                  qtyval = 1;
                  $(this).next().text(qtyval);
              }
          });
      });

      $('.dropdown-menu .cart_list').on('click', function(event) {
          event.stopPropagation();
      });
  };
  /* WOW active */
  new WOW().init();

  //Load functions
  $(document).ready(function() {
      productDetails();
  });

})(jQuery);


      const items = document.querySelectorAll(".accordion button");

      function toggleAccordion() {
      const itemToggle = this.getAttribute('aria-expanded');
      
      for (i = 0; i < items.length; i++) {
          items[i].setAttribute('aria-expanded', 'false');
      }
      
      if (itemToggle == 'false') {
          this.setAttribute('aria-expanded', 'true');
      }
      }

      items.forEach(item => item.addEventListener('click', toggleAccordion));

      // slider 

  'use strict';
  var multiItemSlider = (function () {
    return function (selector, config) {
      var
        _mainElement = document.querySelector(selector), // основный элемент блока
        _sliderWrapper = _mainElement.querySelector('.slider__wrapper'), // обертка для .slider-item
        _sliderItems = _mainElement.querySelectorAll('.slider__item'), // элементы (.slider-item)
        _sliderControls = _mainElement.querySelectorAll('.slider__control'), // элементы управления
        _sliderControlLeft = _mainElement.querySelector('.slider__control_left'), // кнопка "LEFT"
        _sliderControlRight = _mainElement.querySelector('.slider__control_right'), // кнопка "RIGHT"
        _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width), // ширина обёртки
        _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width), // ширина одного элемента    
        _positionLeftItem = 0, // позиция левого активного элемента
        _transform = 0, // значение транфсофрмации .slider_wrapper
        _step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
        _items = []; // массив элементов

      // наполнение массива _items
      _sliderItems.forEach(function (item, index) {
        _items.push({ item: item, position: index, transform: 0 });
      });

      var position = {
        getItemMin: function () {
          var indexItem = 0;
          _items.forEach(function (item, index) {
            if (item.position < _items[indexItem].position) {
              indexItem = index;
            }
          });
          return indexItem;
        },
        getItemMax: function () {
          var indexItem = 0;
          _items.forEach(function (item, index) {
            if (item.position > _items[indexItem].position) {
              indexItem = index;
            }
          });
          return indexItem;
        },
        getMin: function () {
          return _items[position.getItemMin()].position;
        },
        getMax: function () {
          return _items[position.getItemMax()].position;
        }
      }

      var _transformItem = function (direction) {
        var nextItem;
        if (direction === 'right') {
          _positionLeftItem++;
          if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) > position.getMax()) {
            nextItem = position.getItemMin();
            _items[nextItem].position = position.getMax() + 1;
            _items[nextItem].transform += _items.length * 100;
            _items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
          }
          _transform -= _step;
        }
        if (direction === 'left') {
          _positionLeftItem--;
          if (_positionLeftItem < position.getMin()) {
            nextItem = position.getItemMax();
            _items[nextItem].position = position.getMin() - 1;
            _items[nextItem].transform -= _items.length * 100;
            _items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
          }
          _transform += _step;
        }
        _sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
      }

      // обработчик события click для кнопок "назад" и "вперед"
      var _controlClick = function (e) {
        var direction = this.classList.contains('slider__control_right') ? 'right' : 'left';
        e.preventDefault();
        _transformItem(direction);
      };

      var _setUpListeners = function () {
        // добавление к кнопкам "назад" и "вперед" обрботчика _controlClick для событя click
        _sliderControls.forEach(function (item) {
          item.addEventListener('click', _controlClick);
        });
      }

      // инициализация
      _setUpListeners();

      return {
        right: function () { // метод right
          _transformItem('right');
        },
        left: function () { // метод left
          _transformItem('left');
        }
      }

    }
  }());

  var slider = multiItemSlider('.slider')

