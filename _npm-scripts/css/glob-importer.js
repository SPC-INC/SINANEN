// PostCSS自作プラグイン
// *でglob記述されたimport文をSASSの正規importに変換
const config = require('../../config.js') // 設定ファイル
const glob = require('glob') // glob

module.exports = () => {
  return {
    postcssPlugin: 'postcss-glob-importer',
    Once(root) {
      root.walkAtRules((atRule) => {
        // *を含まないimportは無視
        if (!atRule.params.includes('*')) {
          return
        }

        const path = config.src + 'scss/' + atRule.params.replace(/["']/g, '') // glob用のパスを組み立てる
        const files = glob.sync(path) // globでファイルパスを探索

        for (let file of files) {
          file = file.replace(config.src + 'scss/', '') // import用のパスに変換
          atRule.after({ name: 'import', params: '"' + file + '"' }) // at-rule
        }
        atRule.remove() // 元の記述を消す
      })
    },
  }
}
module.exports.postcss = true

/*
const config = require('../../config.js') // 設定ファイル
const glob = require('glob') // glob

module.exports = {
  postcssPlugin: 'postcss-glob-importer',
  AtRule(atRule) {
    // *を含まないimportは無視
    if (!atRule.params.includes('*')) {
      return
    }

    const path = config.src + 'scss/' + atRule.params.replace(/["']/g, '') // glob用のパスを組み立てる
    const files = glob.sync(path) // globでファイルパスを探索

    for (let file of files) {
      file = file.replace(config.src + 'scss/', '') // import用のパスに変換
      atRule.after({ name: 'import', params: '"' + file + '"' }) // at-rule
    }
    atRule.remove() // 元の記述を消す
  },
}
module.exports.postcss = true

*/
