FROM ervinne/base-php-nginx:7.2

Maintainer Ervinne Sodusta<ervinne.sodusta@nuworks.ph>

WORKDIR /var/www/vhost/app/gg/gg-byo1-bs-website

# Install Node
RUN \
    apt-get update && \
    curl -sL https://deb.nodesource.com/setup_10.x | bash - && \
    apt-get install nodejs

# Enable this site
RUN rm /etc/nginx/sites-enabled/vhost
ADD ./vhost-gg-byo1.conf /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/vhost-gg-byo1.conf /etc/nginx/sites-enabled/vhost-gg-byo1

# Install Git FTP
RUN apt-get install git-ftp

# Expose Ports
EXPOSE 80

COPY ./start.sh /
RUN chmod +x /start.sh

ENTRYPOINT ["/start.sh"]
