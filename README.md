
# DESCRIPTION

The repository implements Localisation on the Laravel plartform into
two languages, English and German. It enables the user to choose a languages
which changes the content of the dashboard and also the notifications of 
that they will receive.


## INSTALLATION

First clone the repository

```bash
  Clone the repository
  cd my-project
```

Run composer and npm install

```bash
  Run composer
  Run npm install 
```

Create the copy of the .env file/ or copy and paste
```bash
  Cp .env.example
```
Generate an app encryption key
```bash
  php artisan key:generate 
```
Create an empty database for the application and update the .env 
file and update the following fields as required
```bash
  DB_DATABASE: your database name
  DB_USERNAME: your username
  DB_PASSWORD: password to the database
```