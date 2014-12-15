## Laravel Quickstart
This is a standard Laravel project. I added, changed, and removed some things and I created example controllers, models, views, routes, migrations, seeds and binaries to help you get started more quickly with your Laravel project. 

Please submit issues if you find them, but have a look at `todo.md` first. Screenshots are [below](#screenies)!

### Getting started
```
# Install Homestead if you haven't already
# and add a site for laravel-quickstart.
# http://laravel.com/docs/4.2/homestead

homestead ssh
cd Code/laravel-quickstart
bin/deploy
bin/seed
```

### My changes
```
- Added deploy, seed, and refresh scripts in [bin].

- Removed everything but MySQL from [app / config {/,/ local} / database.php].

- Set timezone to Europe/Amsterdam in [app / config / app.php].

- Included Bootstrap, jQuery and DataTables in [public]. 
- Created nice and simple view structure + bootstrap example.

- Added User signup and authentication + messages and errors.
- Added User settings: change e-mail and/or password.
- Added simple user profile pages.
- Added migration and seed example (demo user) for users.

- Added (show and add) Records (relation: User hasMany Records).
- Added migration and seed examples for records.

- Removed CONTRIBUTING.md
```

### Screenies
#### Dashboard
![screen shot 2014-11-15 at 23 36 47](https://cloud.githubusercontent.com/assets/1312973/5059579/9be62026-6d20-11e4-8a06-53f949b0bfa4.png)
#### Records
![screen shot 2014-11-16 at 01 25 29](https://cloud.githubusercontent.com/assets/1312973/5059857/7d94963e-6d2f-11e4-98d2-c7216085ab4e.png)
![screen shot 2014-11-16 at 01 46 15](https://cloud.githubusercontent.com/assets/1312973/5059906/680a1e6c-6d32-11e4-8015-b2e6c9a0134a.png)
#### Sign in/Sign up
![signin](https://cloud.githubusercontent.com/assets/1312973/5059928/acd27db2-6d34-11e4-87a6-c9d3ffc3a6d6.png)
![signup](https://cloud.githubusercontent.com/assets/1312973/5059930/acd30b6a-6d34-11e4-8b05-128c5ac898ec.png)
#### Settings
![changeemail](https://cloud.githubusercontent.com/assets/1312973/5059926/acb57b04-6d34-11e4-8224-272eb97e91ce.png)
![changepassword](https://cloud.githubusercontent.com/assets/1312973/5059929/acd2bc46-6d34-11e4-868e-27dd28cc7548.png)

