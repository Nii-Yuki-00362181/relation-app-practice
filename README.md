# relation-app-practice

## 概要

COACHTECH 教材 Tutorial 9-5「リレーション ハンズオン演習」で作成した成果物です。

Eloquent ORM のリレーション機能を使って構築したブログシステムです。

## 使用技術

- PHP 8.x
- Laravel 10.x
- Eloquent ORM（hasMany / belongsTo / belongsToMany）
- MySQL

## 学んだこと

- 1対多、多対多リレーションの正しい定義方法
- Eager Loading を活用した効率的なデータ取得とN+1問題の対策
- 'whereHas()' を使ったリレーション先の条件によるデータフィルタリングの仕組み

## 動作確認

sail up -d`で環境を起動
ブラウザで http://localhost/posts にアクセス
コメント数・タグ付きの投稿一覧が表示されることを確認
タグをクリックして投稿の絞り込みができることを確認
投稿タイトルをクリックして詳細画面（コメント一覧）が表示されることを確認
