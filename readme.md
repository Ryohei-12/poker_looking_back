## Poker looking back
世界で最も競技人口が多いと言われており、日本でもブームが近づいてきている「ポーカー」に特化したコミュニティサイトです。  
・プレイした履歴を保存、共有することができ、自身で振り返ることや、ユーザー同士での内容の討論ができます。  
・ハンドレンジ表という一部の推奨戦略の公開機能でどのようなカードを選べば良いかの確認ができます。  
  
![top](https://user-images.githubusercontent.com/81517427/117424013-4edeac00-af5c-11eb-90b3-c9cb7697bbea.png)

## 使用技術
- PHP 7.4.16
- Laravel 6.20.24
- HTML
- CSS
- XAMPP
- MySQL

## アプリケーションURL
https://poker-looking-back.herokuapp.com/

## テスト用アカウント
- [x] name:sample
- [x] email:sample@xxx
- [x] pass:sample11

## アプリケーションの目的
プレイ履歴の保存や討論、ハンドレンジ表の公開によって、ポーカープレイヤーのレベルアップ及びコミュニケーションの機会を増やすこと。

## 特徴
あえて投稿内容をポーカーのプレイの振り返りのみに縛ることで、現在Twitter等で頻繁に目にする「不運自慢」が発生しないようにしております。  
これによって、純粋に強くなりたいプレイヤー達が共に成長しあえるようになる環境を作ります。

## 機能一覧
- ユーザー管理機能（新規登録＆ログイン）
- 投稿機能
- コメント機能
- ハンドレンジ表表示
- ユーザー個別の投稿表示機能

## テーブル設計
### ▼users
|	Column	|	Type	|	Options	|
|-----------|-----------|-----------|
|	id		|	integer	|	null: false, unique: true	|
|	name	|	string	|	null: false, unique: true	|
|	email	|	string	|	null: false,unique: true	|
|	password	|	string	|null: false	|

#### relation
has_many :articles  
has_many :comments

### ▼articles
|	Column	|	Type	|	Options	|
|-----------|-----------|-----------|
|	id	|	integer	|	null: false	|
|	title	|	string	|	null: false	|
|	first_rank	|	string	|	null: false	|
|	first_suit	|	string	|	null: false	|
|	second_rank	|	string	|	null: false	|
|	second_suit	|	string	|	null: false	|
|	position	|	string	|	null: false	|
|	stack	|	decimal	|	null: false, precision:6, scale:2	|
|	action_at_preflop	|	string	|	null: false	|
|	flop_1_rank	|	string	|	|
|	flop_1_suit	|	string	|	|
|	flop_2_rank	|	string	|	|
|	flop_2_suit	|	string	|	|
|	flop_3_rank	|	string	|	|
|	flop_3_suit	|	string	|	|
|	action_at_flop	|	string	|	
|	turn_rank	|	string		|
|	turn_suit	|	string		|
|	action_at_turn	|	string	|	
|	river_rank	|	string		|
|	river_suit	|	string		|
|	action_at_river	|	string		|
|	opponent_first_rank	|	string		|
|	opponent_first_suit	|	string		|
|	opponent_second_rank	|	string		|
|	opponent_second_suit	|	string		|
|	result	|	decimal	|	precision:6, scale:2	|
|	body	|	string	|	null: false	|
|	user_id |	integer	|	foreign_key: true	|
#### relation
belongs_to :user  
has_many :comments

### ▼comments
|	Column	|	Type	|	Options	|
|-----------|-----------|-----------|
|	id	|	integer	|	null: false	|
|	user_id |	integer	|	foreign_key: true	|
|	user_id |	integer	|	foreign_key: true	|
|	body	|	string	|	null: false	|
#### relation
belongs_to :user  
belongs_to :article

## テスト
- unitテスト
- featureテスト