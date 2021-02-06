FROM mysql:latest

RUN apt-get update && apt-get install --no-install-recommends -y \
  locales \
  && apt-get autoremove -y \
  && rm -rf /var/lib/apt/lists/* \
  && sed -i -E 's/# (ja_JP.UTF-8)/\1/' /etc/locale.gen \
  && locale-gen 

ENV LANG ja_JP.UTF-8

COPY ./my.cnf /etc/mysql/conf.d/my.cnf

RUN chmod 644 /etc/mysql/conf.d/*
