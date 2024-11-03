FROM php:8.2-fpm

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 作成した設定ファイルをコンテナ内にコピー
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

# gitとvimのインストール
RUN apt-get update && \
    apt-get install -y git vim zip unzip && \
    apt-get clean

# コンテナ内のポート8000を開放
# MEMO：あくまで宣言に過ぎないので、docker-compose.yaml等で別途ポートマッピングする必要がある
EXPOSE 8000

# 作業ディレクトリの設定（exec bashでコンテナ内部に入った時にデフォルトで開かれる階層の設定）
WORKDIR /var/www/html

# サーバー起動
ENTRYPOINT ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]