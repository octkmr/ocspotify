FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=ocspotify \
  MYSQL_USER=octkmr \
  MYSQL_PASSWORD=octkmr9582 \
  MYSQL_ROOT_PASSWORD=octkmr9582 \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf