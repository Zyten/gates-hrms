### A. Guide for Heroku

**Step 1. Initial prep**

1. Install heroku-cli (No way to avoid this)

   ``curl https://cli-assets.heroku.com/install.sh | sh``

2. Create new app at heroku --> gates-hrms.heroku.com
3. Create heroku branch at Github
4. Connect heroku app to Github's heroku branch and set to auto-deploy

**Step 2. Prep Heroku folder**

```bash
cd ~/dev/personal
mkdir gates-hrms-heroku && cd gates-hrms-heroku
git clone --single-branch --branch heroku git@github.com:Zyten/gates-hrms.git .

heroku login --interactive
heroku git:remote -a gates-hrms
heroku config:set APP_KEY=$(php artisan --no-ansi key:generate --show)
```

**Step 3. Prep Apache**

```bash
echo "web: vendor/bin/heroku-php-apache2 public/" > Procfile

git add Procfile
git commit -m "Add heroku Procfile"
git push origin heroku
```

**Step 4. Prep MySQL**

><small>Heroku has not native support for MySQL so we use an addon with free plan</small>
>

1. Setup [ClearDB](https://mattstauffer.com/blog/laravel-on-heroku-using-a-mysql-database/)

	``heroku addons:add cleardb``

2. Get configuration for the newly created database

	``heroku config | grep CLEARDB_DATABASE_URL``
    
	That returns a string in the following format:

	>mysql://bXXXXXXXXXXXX5:eXXXXXXf@us-cdbr-iron-east-02.cleardb.net/heroku_4XXXXXXXXXXXXX8?reconnect=true

	Which should be interpreted as the following:

	>mysql://db_username:db_password@db_host/db_database?reconnect=true


3. Import sql dump - we use trimmed sql (No permission to create database)

	```bash
	mysql --host=us-cdbr-iron-east-02.cleardb.net --user=bXXXXXXXXXXXX5 --	password=eXXXXXXf --reconnect heroku_4XXXXXXXXXXXXX8 < heroku-gates-hrms-20181212.sql
	```

4. Add ENV variable for DB at Heroku - since we did not commit .env file

	```bash
	heroku config:set DB_HOST=us-cdbr-iron-east-02.cleardb.net
	heroku config:set DB_DATABASE=heroku_4XXXXXXXXXXXXX8
	heroku config:set DB_USERNAME=bXXXXXXXXXXXX5
	heroku config:set DB_PASSWORD=eXXXXXXf
	```

**Step 5. Enable logging**

```bash
heroku config:set APP_LOG=errorlog
```

**Step 6. Prep Jasper**

```bash
# Setup JDK for Heroku

echo "java.runtime.version=1.8" > system.properties

git add system.properties
git commit -m "Add jdk buildpack for heroku"
git push origin heroku

heroku buildpacks:add -i 1 https://github.com/heroku/heroku-buildpack-jvm-common.git

# Update JDBC_URL for Laravel to pass to Jasper

## Get JDBC_URL string in format:
### jdbc:mysql://us-cdbr-iron-east-02.cleardb.net/heroku_4XXX8?reconnect=true&user=bXXX5&password=eXXXf
heroku run echo \$JDBC_DATABASE_URL

## Set JDBC_URL as ENV (trim after '?')
heroku config:set JDBC_URL=jdbc:mysql://us-cdbr-iron-east-02.cleardb.net/heroku_4XXX8
```

**Step 7. Code modifications to make it work in server**

- Comment out Domain Route Group in routes.php
- Comment out CREATE DATABASE... in db_dump.sql

```bash
git add .
git commit -m "Prep for Heroku"
git push origin heroku
```

 <small>This should trigger auto-deploy previously but if not manual deployment is possible via Heroku Dashboard</small>


### B. Guide for Github Pages redirector

><small>Redirect sruban.me/gates-hrms to gates-hrms.herokuapp.com based on this [guide](https://dev.to/steveblue/setup-a-redirect-on-github-pages-1ok7)</small>

**Step 1. Create gh-pages branch at Github**

**Step 2. Prep gh-pages folder**

```bash
mkdir gates-hrms-gh-pages
cd gates-hrms-gh-pages
git clone --single-branch --branch gh-pages git@github.com:Zyten/gates-hrms.git .
```

**Step 3. Clean up**

```bash
rm -r *

git add -u .
git commit -m "Remove * for gh-pages"
git push origin gh-pages
```

**Step 4. Prep redirector**

```bash
echo theme: jekyll-theme-cayman > _config.yml

touch index.html
```

Add the following to ``index.html``

```html
<!DOCTYPE html>
<meta charset="utf-8">
<title>Redirecting to https://gates-hrms.herokuapp.com/</title>
<meta http-equiv="refresh" content="0; URL=https://gates-hrms.herokuapp.com/">
<link rel="canonical" href="https://gates-hrms.herokuapp.com/">
```

