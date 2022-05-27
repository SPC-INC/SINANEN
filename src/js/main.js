/* global  */ // tUrl等のグローバル変数を宣言する

import 'core-js/features/number/is-nan' // SwiperのIE対応
import 'custom-event-polyfill' // SwiperのIE対応
import { Autoplay, Controller, EffectFade, Navigation, Pagination, Swiper } from 'swiper'
Swiper.use([Autoplay, Controller, EffectFade, Navigation, Pagination]) // Swiper宣言
// その他、Swiperで使う機能があったら上に追加で宣言する
// A11y, Autoplay, Controller, EffectCoverflow, EffectCube, EffectFade, EffectFlip, HashNavigation, History, Keyboard, Lazy, Mousewheel, Navigation, Pagination, Parallax, Scrollbar, Thumbs, Virtual, Zoom,

$('.js-topAbout').on('mouseover', function () {
  const index = $(this).index()
  console.log('index: ' + index)
  $('.js-topAbout-img').children().removeClass('show')
  $('.js-topAbout-img').children().eq(index).addClass('show')
})

/*
   ######  ##       #### ########  ########
  ##       ##        ##  ##     ## ##
   ######  ##        ##  ##     ## ######
        ## ##        ##  ##     ## ##
   ######  ######## #### ########  ########
*/
if ($('.js-topMvSlide')[0]) {
  const topMvSlide = new Swiper('.js-topMvSlide', {
    autoplay: {
      delay: 5000,
    },
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
  })
}

if ($('.topCrosstalkSlide')[0]) {
  const topCrosstalkSlide = new Swiper('.topCrosstalkSlide', {
    slidesPerView: 1.2,
    loop: true,
    centeredSlides: true,
    spaceBetween: 23,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
        spaceBetween: 93,
      },
      1200: {
        centeredSlides: true,
        slidesPerView: 1.5,
        spaceBetween: 93,
      },
      1300: {
        slidesPerView: 1.5,
      },
      1400: {
        slidesPerView: 1.5,
      },
      1500: {
        slidesPerView: 2,
      },
      1600: {
        slidesPerView: 2,
      },
      1700: {
        slidesPerView: 2,
      },
      1800: {
        slidesPerView: 2,
      },
      1900: {
        slidesPerView: 2,
      },
    },
  })
}

if ($('.js-inteviewList-slide')[0]) {
  const IntervieSwiper = new Swiper('.js-inteviewList-slide', {
    slidesPerView: 1.6,
    loop: true,
    spaceBetween: 20,
    navigation: {
      nextEl: '.js-inteviewList-next',
      prevEl: '.js-inteviewList-prev',
    },
  })
}

$('.js-recruitEnvironment-tab').on('click', function () {
  $(this).addClass('selected')
  $(this).siblings().removeClass('selected')
  $('.js-recruitEnvironment-tabItem').removeClass('show')
  $('#' + $(this).attr('data-tab')).addClass('show')
})

/*
######## ########  ##     ## ##    ## ##    ##  #######
   ##    ##     ## ##     ## ####  ## ##  ##   ##     ##
   ##    ########  ##     ## ## ## ## #####     #######
   ##    ##   ##   ##     ## ##  #### ##  ##   ##     ##
   ##    ##     ##  #######  ##    ## ##    ##  #######
*/
if (document.getElementsByClassName('js-t8')[0]) {
  // 要素を検出したら実行
  trunk8()
  $(window).on('load resize ', function () {
    trunk8()
  })
}
function trunk8() {
  // 指定要素に行数制限をかける
  $('.js-t8.line2').trunk8({
    lines: 2,
    fill: '...',
  })
}

/*
   ###     ######   ######
 ##   ##  ##       ##
##     ## ##       ##
######### ##       ##
##     ##  ######   ######
*/
if ($('.js-acc')[0]) {
  $('.js-acc').next().hide()
  $('.js-acc').on('click', function () {
    $(this).toggleClass('open')
    $(this).next().slideToggle()
  })
}

/*
#### ##    ## ########          #######  ########   ######
 ##  ####  ##    ##            ##     ## ##     ## ##
 ##  ## ## ##    ##    ####### ##     ## ########   ######
 ##  ##  ####    ##            ##     ## ##     ##       ##
#### ##    ##    ##             #######  ########   ######
*/
$(function () {
  if (document.getElementsByClassName('js-in')[0]) {
    // 画面に入った監視対象に.animatedを付加
    // Intersection Observer
    intObs()
  }
  function intObs() {
    let rootMargin = '-10px 0px'
    if (window.matchMedia('(max-width:768px)').matches) {
      //SPは検出を早くする
      rootMargin = '100px 0px'
    }
    const intObsOption = {
      // root: document.querySelector('#obsArea'), // 監視領域 省略でビューポート
      rootMargin: rootMargin, // 指定px,%分判定領域を増減する -50% 0pxで画面中央の走査線になる
      threshold: 0, // 発火判定の閾値 0.1=10%以上交差で発火 0で接触次第発火
    }
    const observer = new IntersectionObserver(intObsCallback, intObsOption)
    const intObsItems = document.getElementsByClassName('js-in')
    for (let index = 0; index < intObsItems.length; index++) {
      const intObsItem = intObsItems[index]
      observer.observe(intObsItem) // 監視対象に加える
    }
    function intObsCallback(entries) {
      for (let index = 0; index < entries.length; index++) {
        const entry = entries[index]
        if (entry.isIntersecting) {
          const entryItem = entry.target
          entryItem.classList.add('active')
          observer.unobserve(entryItem) // 監視対象から外す
        }
      }
    }
  }
})

if (document.getElementsByClassName('js-topMvText')[0]) {
  const topIntro = $('.js-topMvText-intro').offset().top - 352
  let distance = 0
  if (window.matchMedia('(min-width:769px)').matches) {
    $('.js-topMvText-intro').addClass('none')
    $(document).on('scroll', function () {
      distance = $(this).scrollTop()
      if (topIntro >= distance) {
        $('.js-topMvText').removeClass('none')
        $('.js-topMvText-intro').addClass('none')
      } else {
        $('.js-topMvText').addClass('none')
        $('.js-topMvText-intro').removeClass('none')
      }
    })
  }
}

if (document.getElementsByClassName('js-stickyNav')[0]) {
  const headerHeight = 90
  const stickeyNavTop = $('.js-stickyNav-target').offset().top - headerHeight * 2
  const stickeyNavBottom = $('.js-stickyNav-target').height() + stickeyNavTop
  console.log('stickeyNavTop: ' + stickeyNavTop)
  console.log('stickeyNavBottom: ' + stickeyNavBottom)
  let distance = 0
  if (window.matchMedia('(min-width:769px)').matches) {
    $(document).on('scroll', function () {
      distance = $(this).scrollTop()
      console.log('distance: ' + distance)
      if (distance <= stickeyNavTop) {
        $('.js-stickyNav').removeClass('fixed')
      } else if (distance >= stickeyNavBottom) {
        $('.js-stickyNav').removeClass('fixed')
      } else {
        $('.js-stickyNav').addClass('fixed')
      }
    })
  }
}
