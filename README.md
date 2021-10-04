# Resource Manager

## Description

This is  resources management application.Where  an administrator cancreate different resources, and visitors of the website where they could access provided resources.


### Created by John Wanjema 24/09/2021

## Setup and installations

### Prerequisites

1. [Laravel](https://laravel.com/)
2. [Vue](https://vuejs.org/)


### Technologies used

    - Vue js
    - HTML
    - Laravel

### Clone the Repo and rename it to suit your needs.

```bash
git clone https://github.com/johnwanjema/resource-manager
```

### Initialize git and add the remote repository

```bash
git init
```

```bash
git remote add origin <your-repository-url>
```

### Setting up environment variables

Copy content in  `.env.example` to a `.env` file:

```
cp .env.example .env
```

Create database and set up  your `.env` 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<database name>
DB_USERNAME=<userName>
DB_PASSWORD=<password>
```


## Build Setup

``` bash

composer install
```

``` bash

npm install
```


## Run the app

### Generate application key
```bash

php artisan key:generate
```

### Run migration and seeder
```bash

php artisan migrate:fresh --seed
```

### Start Application
```bash

php artisan serve
```

### Access the application at localhost:8000

Open [localhost:8000](http://localhost:8000/)

use the credentials:

Email
```
admin@theremotecompany.com
```
```
password : password12345
```


## Run Unit Test

```bash

composer test
```

## Bugs

Create an issue mentioning the bug you have found.

### Known bugs

- N/A

## Support and contact details

Contact [John Wanjema](https://github.com/johnwanjema) for further help/support.

