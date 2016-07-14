FROM enakai00/centos:centos6
MAINTAINER genzouw

RUN yum install -y \
    http://dl.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-8.noarch.rpm \
    http://rpms.famillecollet.com/enterprise/remi-release-6.rpm \
    https://dev.mysql.com/get/mysql-community-release-el6-5.noarch.rpm \
;

RUN yum install -y \
    httpd \
    php \
    php-cli \
    php-common \
    php-devel \
    php-gd \
    php-dom \
    php-json \
    php-mbstring \
    php-mcrypt \
    php-mysql \
    php-mysqlnd \
    php-pgsql \
    php-opcache \
    php-pdo \
    php-pear \
    php-pecl-ssh2 \
    php-pecl-xdebug \
    php-pecl-xhprof \
    php-xml \
    php-xmlrpc \
    php-xsl \
;

# RUN echo '<php phpinfo();' > /var/www/html/index.php
RUN chmod 777 /var/www/html

RUN sed -i 's#^[^d]*date.timezone *= *#date.timezone = Asia/Tokyo#' /etc/php.ini
RUN sed -i 's#^[^d]*mbstring.language*= *#mbstring.language = Japanese#' /etc/php.ini
RUN sed -i 's#^[^d]*mbstring.internal_encoding *= *#mbstring.internal_encoding = UTF-8#' /etc/php.ini

CMD service httpd start && /bin/bash
