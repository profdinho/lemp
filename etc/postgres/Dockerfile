FROM postgres:alpine

LABEL maintainer="Dinho Zanardi <prof.dinho.ti@gmail.com>"

RUN echo "host all  all    0.0.0.0/0  md5" >> /var/lib/postgresql/data/pg_hba.conf

CMD ["postgres"]

EXPOSE 5432
