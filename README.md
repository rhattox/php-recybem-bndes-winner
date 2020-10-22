# Recybem
Trabalho ganhador do Hackathon promovido pelo BNDES-RJ para a disputa de vagas para estágio.

Link do Hackathon: https://devpost.com/software/recybem

Link do vídeo no youtube: https://www.youtube.com/watch?v=pHCKWjfo_Ds&feature=emb_title

Grupo: 
  Bruno Coviello Souto: https://www.linkedin.com/in/bruno-coviello-souto-8771371b6/
  Victor:
  Willian: 
  Rafaela:

# Como utilizar?

## Docker

Para a utilização de forma rápida e prática, estou disponibilizando este método feito por mim para facilitar a instalação do aplicativo desde que já tenha o docker.

Dockerfile

````
FROM php:apache
RUN docker-php-ext-install mysqli
````

docker-compose.yml
````
version: '3.7'
services:
    app:
      image: php-mysqli:latest
      restart: always
      depends_on:
        - db
      volumes:
        - /opt/docker/volumes/recybem-bndes/app:/var/www/html
      ports:
        - 1000:80
    db:
      image: mysql:latest
      restart: always
      volumes:
        - /opt/docker/volumes/recybem-bndes/db:/var/lib/mysql
      environment:
        MYSQL_DATABASE: bndes
        MYSQL_USER: root
        MYSQL_ROOT_PASSWORD: example
    adminer:
      image: adminer
      restart: always
      ports:
        - 1001:8080
      depends_on:
        - db
````
