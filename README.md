#Draculartes

# Projeto Draculartes WEB
___
### Tecnologias:

- php 7.4
- mysql 5.7
- docker
- Laravel

___
### Como rodar o projeto
___

##### ambiente local

Iniciando serviço do docker

```shell
sudo service docker start
```

levantando imagem docker

```shell
docker-compose up -d
```

executando linha de comando da imagem docker

```shell
docker exec -it draculartes-app sh
```

___

## Observações:

para limpar cache e refazer autoload do composer caso tenha problemas com views ou funções não carregando:

```bash
# terminal na pasta raiz do projeto

docker exec -it draculartes-app sh

php artisan config:cache
php artisan config:clear
php artisan view:clear
php artisan cache:clear
composer dumpautoload
exit
```

Para criar novas tabelas
```bash
docker exec -it draculartes-app sh

php artisan make:migration create_flights_table
```
