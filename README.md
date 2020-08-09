# -study-php
PHPのサンプルコードとか

# 目標
- 一次情報（公式リファレンスなど）から欲しい物を取り出すことができるようになる
- サーバーやHTTPなど、node.jsとFW-Expressでうやむやにしてきた（うやむやにできてしまっていた）低レイヤーを理解する
- MVCモデルを理解する
- なにかWebアプリケーションを作る
- Laravelを使うかどうかは未定
- CRUD操作を行えるWebアプリケーションをリリースする

# memo

拡張for文とforeach文について  
やってることは同じそうだけど各言語で呼称が異なるだけ？よく調べておく必要がありそう  
→Javaは拡張for文とforeachは明確に異なる（後者はラムダ式）  

divタグは改行要素を持つので、それを利用してブラウザに出力される内容の改行を操作する

```
    <div>
        <?php
        echo ($total);
        ?>
        
        <div>
        <?php
        echo($kyouka);

        ?>
        
    </div>
    
```
    
    by hashmap.php
    


# 学習教材

- [スラスラ読めるPHPふりがなプログラミング](https://www.amazon.co.jp/%E3%82%B9%E3%83%A9%E3%82%B9%E3%83%A9%E8%AA%AD%E3%82%81%E3%82%8B-PHP%E3%81%B5%E3%82%8A%E3%81%8C%E3%81%AA%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0-%E3%81%B5%E3%82%8A%E3%81%8C%E3%81%AA%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0%E3%82%B7%E3%83%AA%E3%83%BC%E3%82%BA-%E3%83%94%E3%82%AF%E3%82%B7%E3%83%96%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE-ebook/dp/B07Z63J7Z4)
- [PHP公式リファレンス](https://www.php.net/manual/ja/index.php)
- [PHPビギナーズガイド: ビギナー必須のWeb開発言語をマスターせよ！ ](https://www.amazon.co.jp/PHP%E3%83%93%E3%82%AE%E3%83%8A%E3%83%BC%E3%82%BA%E3%82%AC%E3%82%A4%E3%83%89-%E3%83%93%E3%82%AE%E3%83%8A%E3%83%BC%E5%BF%85%E9%A0%88%E3%81%AEWeb%E9%96%8B%E7%99%BA%E8%A8%80%E8%AA%9E%E3%82%92%E3%83%9E%E3%82%B9%E3%82%BF%E3%83%BC%E3%81%9B%E3%82%88%EF%BC%81-PRIMER%E3%82%B7%E3%83%AA%E3%83%BC%E3%82%BA-libro%E3%83%96%E3%83%83%E3%82%AF%E3%82%B9-%E6%8E%8C%E7%94%B0%E6%B4%A5%E8%80%B6%E4%B9%83-ebook/dp/B01ABI7IGO/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=php%E3%83%93%E3%82%AE%E3%83%8A%E3%83%BC%E3%82%BA%E3%82%AC%E3%82%A4%E3%83%89&qid=1596876512&s=digital-text&sr=1-1)
