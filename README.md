# blog

## entityとは？
- 簡単に言うとテーブルにおけるレコードのデータのこと
- エンティティの例として、「社員」というモデルについて考えます。
山田さんという社員は、ある会社においては社員番号という識別子 123 で同一判定され ます。山田さんは部署が変わろうが、所持金、体重が変わろうが同じ「山田さん」であり、 別人にはなりません。
一方、新しく社員番号が 456 で、名前が同じ山田さんという社員が入ってきたとしま す。この人は部署、所持金、体重が仮に全部同じだったとしても、123 の山田さんとは別 の人物です。
 二人を識別する際に使うものは、それぞれが持つ属性値ではなく、社員番号という識別
子です。これがエンティティの同一性の考え方です。また、部署、所持金、体重などの属
性値が変わるということは、本質的に可変なものであるということです。
## SQL文

CREATE DATABASE blog;

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
); 

CREATE TABLE `comments` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `commenter_name` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
); 