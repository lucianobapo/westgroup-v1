# westgroup-v1
104.154.114.217 

## Comandos para iniciar
```shell
rsync -rvztPhe ssh /home/luciano/code/westgroup-v1/.env.production essencialy.com:code/westgroup-v1/.env && \
ssh westgroup.ilhanet.com
cd /home/luciano/code/ && \
git clone https://github.com/lucianobapo/westgroup-v1.git && \
cd /home/luciano/code/westgroup-v1 && composer install && \
php artisan vendor:publish --tag=publicSaas && \
php artisan vendor:publish --tag=erpnetPermissions && \
chmod +x permissions.sh && \
sudo ./permissions.sh
```

## Comandos para atualizar
```shell
rsync -rvztPhe ssh /home/luciano/code/westgroup-v1/composer.lock westgroup.ilhanet.com:code/westgroup-v1/composer.lock
rsync -rvztPhe ssh /home/luciano/code/westgroup-v1/composer.json westgroup.ilhanet.com:code/westgroup-v1/composer.json

rsync -rvztPhe ssh westgroup.ilhanet.com:code/westgroup-v1/composer.lock /home/luciano/code/westgroup-v1/composer.lock
rsync -rvztPhe ssh westgroup.ilhanet.com:code/westgroup-v1/composer.json /home/luciano/code/westgroup-v1/composer.json

rsync -rvztPhe ssh /home/luciano/code/westgroup-v1/.env.production westgroup.ilhanet.com:code/westgroup-v1/.env && \
git cmt || true && ssh westgroup.ilhanet.com
cd /home/luciano/code/westgroup-v1 && git pull && composer install && \
php artisan vendor:publish --tag=publicSaas && \
php artisan vendor:publish --tag=erpnetPermissions && \
chmod +x permissions.sh && \
sudo ./permissions.sh
```


## Comandos para iniciar o desenvolvimento
```shell
base_dir=/home/luciano/ && \
code_dir=${base_dir}code/ && \
packages_dir=${code_dir}westgroup-v1/packages/ && \
if [ ! -d ${packages_dir} ]; then mkdir -p ${packages_dir}; fi && \
if [ ! -h ${packages_dir}configs ]; then ln -s ${base_dir}configs ${packages_dir}configs; fi && \
if [ ! -h ${packages_dir}erpnet-permissions ]; then ln -s ${code_dir}erpnet-permissions ${packages_dir}erpnet-permissions; fi && \
if [ ! -h ${packages_dir}erpnet-saas ]; then ln -s ${code_dir}erpnet-saas ${packages_dir}erpnet-saas; fi && \
if [ ! -h ${packages_dir}erpnet-migrates ]; then ln -s ${code_dir}erpnet-migrates ${packages_dir}erpnet-migrates; fi && \
if [ ! -h ${packages_dir}erpnet-models ]; then ln -s ${code_dir}erpnet-models ${packages_dir}erpnet-models; fi && \
if [ ! -h ${packages_dir}saas-treinamento ]; then ln -s ${code_dir}saas-treinamento ${packages_dir}saas-treinamento; fi && \
if [ ! -h ${packages_dir}erpnet-v5 ]; then ln -s ${code_dir}erpnet-v5 ${packages_dir}erpnet-v5; fi &&\
if [ ! -h ${packages_dir}docker-lemp ]; then ln -s ${code_dir}docker-lemp ${packages_dir}docker-lemp; fi && \
if [ ! -h ${packages_dir}erpnet-email ]; then ln -s ${code_dir}erpnet-email ${packages_dir}erpnet-email; fi && \
if [ ! -h ${packages_dir}erpnet-mailsend ]; then ln -s ${code_dir}erpnet-mailsend ${packages_dir}erpnet-mailsend; fi
```

## Comandos para atualizar os códigos
```shell
base_dir=/home/luciano/ && \
code_dir=${base_dir}code/ && \
packages_dir=${code_dir}westgroup-v1/packages/ && \
if [ -h ${packages_dir}erpnet-permissions ]; then cd ${code_dir}erpnet-permissions && git cmt; fi || true && \
if [ -h ${packages_dir}erpnet-saas ]; then cd ${code_dir}erpnet-saas && git cmt; fi || true && \
if [ -h ${packages_dir}erpnet-migrates ]; then cd ${code_dir}erpnet-migrates && git cmt; fi || true && \
if [ -h ${packages_dir}erpnet-models ]; then cd ${code_dir}erpnet-models && git cmt; fi || true && \
cd ${code_dir}westgroup-v1 && composer update ilhanet/erpnet-models ilhanet/erpnet-migrates ilhanet/erpnet-saas ilhanet/erpnet-permissions --prefer-source --profile --root-reqs
```

## Subir docker
```shell
cd /home/luciano/code/docker-lemp && sudo docker-compose up
```

## Criar banco de dados postgresql
```sql
CREATE USER "westgroup-v1" WITH PASSWORD 'westgroup-v1';
CREATE DATABASE "westgroup-v1";
GRANT ALL PRIVILEGES ON DATABASE "westgroup-v1" to "westgroup-v1";
```

## Transferir mysql to postgre
```shell
pgloader mysql://westgroup-v1:westgroup-v1@localhost/westgroup-v1 postgresql://westgroup-v1:westgroup-v1@localhost:5432/westgroup-v1
pgloader mysql://westgroup-v1:westgroup-v1@localhost/westgroup-v1 postgresql://westgroup-v1:westgroup-v1@westgroup.ilhanet.com:5432/westgroup-v1
pgloader mysql://erpnet-v5:erpnet-v5@localhost/erpnet-v5 postgresql://westgroup-v1:westgroup-v1@westgroup.ilhanet.com:5432/westgroup-v1
```

[Site do GitHub](https://github.com/lucianobapo/westgroup-v1)

[![Latest Stable Version](https://poser.pugx.org/ilhanet/westgroup-v1/v/stable)](https://packagist.org/packages/ilhanet/westgroup-v1) 
[![Total Downloads](https://poser.pugx.org/ilhanet/westgroup-v1/downloads)](https://packagist.org/packages/ilhanet/westgroup-v1) 
[![Latest Unstable Version](https://poser.pugx.org/ilhanet/westgroup-v1/v/unstable)](https://packagist.org/packages/ilhanet/westgroup-v1) 
[![License](https://poser.pugx.org/ilhanet/westgroup-v1/license)](https://packagist.org/packages/ilhanet/westgroup-v1)