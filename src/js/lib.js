// ライブラリ読み込み用ファイル
// expose-loaderを通してインポートすることでグローバルオブジェクトにする

import 'expose-loader?exposes[]=$&exposes[]=jQuery!jquery' // jQuery

// import 'expose-loader?exposes[]=baguetteBox!baguettebox.js' // BaguetteBox

// import 'trunk8' // Trunk8

import './module/_hashScroll' // アンカーリンクスクロール
import './module/_spMenuToggle' // SPメニュー開閉
