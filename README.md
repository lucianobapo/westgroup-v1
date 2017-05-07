# westgroup-v1

## Comandos para iniciar o desenvolvimento
```shell
base_dir=/home/luciano/ && \
code_dir=${base_dir}code/ && \
packages_dir=${code_dir}westgroup-v1/packages/ && \
if [ ! -d ${packages_dir} ]; then mkdir -p ${packages_dir}; fi && \
if [ ! -h ${packages_dir}configs ]; then ln -s ${base_dir}configs ${packages_dir}configs; fi && \
if [ ! -h ${packages_dir}erpnet-permissions ]; then ln -s ${code_dir}erpnet-permissions ${packages_dir}erpnet-permissions; fi && \
if [ ! -h ${packages_dir}erpnet-saas ]; then ln -s ${code_dir}erpnet-saas ${packages_dir}erpnet-saas; fi && \
if [ ! -h ${packages_dir}saas-treinamento ]; then ln -s ${code_dir}saas-treinamento ${packages_dir}saas-treinamento; fi && \
if [ ! -h ${packages_dir}erpnet-v5 ]; then ln -s ${code_dir}erpnet-v5 ${packages_dir}erpnet-v5; fi
```

## Comandos para atualizar os códigos
```shell
base_dir=/home/luciano/ && \
code_dir=${base_dir}code/ && \
packages_dir=${code_dir}westgroup-v1/packages/ && \
if [ -h ${packages_dir}erpnet-permissions ]; then cd ${code_dir}erpnet-permissions && git cmt; fi || true && \
if [ -h ${packages_dir}erpnet-saas ]; then cd ${code_dir}erpnet-saas && git cmt; fi || true && \
cd ${code_dir}westgroup-v1 && composer update
```

[Site do GitHub](https://github.com/lucianobapo/westgroup-v1)

[![Latest Stable Version](https://poser.pugx.org/ilhanet/westgroup-v1/v/stable)](https://packagist.org/packages/ilhanet/westgroup-v1) 
[![Total Downloads](https://poser.pugx.org/ilhanet/westgroup-v1/downloads)](https://packagist.org/packages/ilhanet/westgroup-v1) 
[![Latest Unstable Version](https://poser.pugx.org/ilhanet/westgroup-v1/v/unstable)](https://packagist.org/packages/ilhanet/westgroup-v1) 
[![License](https://poser.pugx.org/ilhanet/westgroup-v1/license)](https://packagist.org/packages/ilhanet/westgroup-v1)