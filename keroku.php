
Heroku

Instalar heroku en el pc
sudo snap install --classic heroku 

heroku login
Y le damos a cli

Dentro del programa

heroku git:remote -a 'pruebamar'

Settings
Crear las variables de la base de datos en Resources
	SMTP_PASS contraseñaa
	YII_ENV	prod

git push -u heroku master

cargar la base de datos
heroku pg:psql
create extension pgcrypto; (Solo la primera vez)

heroku pg:psql < db/'bd'


ejecutar migracion

heroku run ".yii/migrate"
