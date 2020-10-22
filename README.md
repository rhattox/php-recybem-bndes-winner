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
        - app:/var/www/html
      ports:
        - ${PORT_PHP}:80
    db:
      image: mysql:${VERSION_MYSQL}
      restart: always
      volumes:
        - db:/var/lib/mysql
      environment:
        MYSQL_DATABASE: ${DB_NAME}
        MYSQL_USER: ${DB_USER}
        MYSQL_ROOT_PASSWORD: ${DB_PASSWORD}
    adminer:
      image: adminer
      restart: always
      ports:
        - ${PORT_ADMINER}:8080
      depends_on:
        - db
volumes:
  app:  
    driver_opts:
      type: none
      o: bind
      device: "/opt/docker/volumes/recybem-bndes/app"
  db:  
    driver_opts:
      type: none
      o: bind
      device: "/opt/docker/volumes/recybem-bndes/db"
````

.env
````
PORT_PHP=1000
PORT_ADMINER=1001
VERSION_MYSQL=8.0.22
DB_NAME=bndes
DB_USER=root
DB_PASSWORD=example
````
