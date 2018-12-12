# Gates HRMS CRUD Demo
:office: GATES Assessment 2 (1 Day Hackathon with specified UC for a Human Resource Management System)
***
### Synopsis

Simple mini-project with Laravel 5.2 built as the final assessment for my internship at GATES.
It is basically a CRUD app that meets the minimal use case for a Human Resource Management System
specified by the representative from MDEC with some fluff here and there to make it more interesting.

### How to use

There are actually two different (and decoupled) projects in this repository.
A placeholder portal site and the backend HRMS system. The portal site is merely 
a static template that was added to allow me to play around with subdomain routing.
Nevertheless, each of them live in their own Views and Controllers folder while having access to shared resources like Auth etc.

To get started, you need to do some preliminary setup first to allow the subdomain routing to work locally.

**Step 1. Append this to your hosts file**

    127.0.0.1 hrms.gates.localhost gates.localhost
    
**Step 2. Add these to your Apache2 Virtual Hosts Configuration**

```xml
<Directory path-to-www/gates-hrms>
  Options Indexes FollowSymLinks
  AllowOverride All
  Require all granted
</Directory>
<VirtualHost *:80>
    DocumentRoot path-to-www/gates-hrms
    ServerName hrms.gates.localhost
    ServerAlias hrms.gates.localhost
    ErrorLog "logs/hrms.gates.localhost-error.log"
    CustomLog "logs/hrms.gates.localhost-access.log" common
</VirtualHost>
<VirtualHost *:80>
    DocumentRoot path-to-www/gates-hrms
    ServerName gates.localhost
    ServerAlias gates.localhost
    ErrorLog "logs/gates.localhost-error.log"
    CustomLog "logs/gates.localhost-access.log" common
</VirtualHost>
```

>I replaced .dev with .localhost since Google has enabled HSTS for the .dev TLD (2018). I'd prefer .test but I've bound it with my [Hotel](https://github.com/typicode/hotel) instance but I couldn't get Laravel to recognise requests from the Hotel proxy. I'm probably missing something in terms of how Hotel is meant to work but Laravel router seems to still see the request as coming from localhost and returns 404 (PR welcome! :D)

**Step 3. Business as usual**

1. Clone the repository && CD into it
2. Copy **.env.example** to **.env** and fill in your database credentials
3. Run **composer install**
4. Run **php artisan key:generate**
5. ~~Run **php artisan migrate --seed**~~ Import **gates-hrms.sql**

You can now access the site at ```hrms.gates.localhost``` in your browser

**Available logins**

| Username | Role        | Password |
| -------- | ----------- |--------- |
| RUBAN    | Supervisor  | password |
| CHUA     | Staff       | password |
| THARIQ   | Admin       | password |

### Tools used

- [Apache2](https://httpd.apache.org), [Laravel 5.2](https://laravel.com/docs/5.2) and [MySQL](https://www.mysql.com)
- [TIBCO Jaspersoft Studio 6.2.0](https://community.jaspersoft.com/project/jaspersoft-studio/releases)

### License

![MIT license](https://img.shields.io/npm/l/express.svg)