# AFS Client Area using FOSSBilling 


## Local Development Setup


### Setup database
- Create `mariadb_data` directory. This will keep the DB data persistent

### Run app
- Run `docker-compose up`
- Login to Admin `http://localhost/admin` with email: team@apifirstsolutions.com  password: Password123
- Cron job is disabled, but if needed use, `*/5 * * * * php /var/www/html/cron.php`
