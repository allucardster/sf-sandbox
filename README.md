Symfony Sandbox
===============

Requirements
============
- Docker (>= 18.x)
- Docker Compose (>= 1.20)
- Make

Technology Stack
================
- Composer 2.x
- PHP 8.1
- Symfony 5.4
- PostgreSQL 14.x
- Nginx 1.22
- Redis 7.x

Development Setup
=================
- Init docker containers
```sh
:~$ make up
```
- Install dependencies
```sh
:~$ make composer-install
```
- Init database (drop and create database. execute migrations )
```sh
:~$ make database-init
```

Contributors
============
- Richard Melo [Twitter](https://twitter.com/allucardster), [Linkedin](https://www.linkedin.com/in/richardmelo)