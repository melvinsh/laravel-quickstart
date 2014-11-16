## Laravel Quickstart
This is a standard laravel project but I added, changed, and removed some things and created example controllers, models, views, routes, migrations, seeds and binaries to get started more quickly with your Laravel project. 

Please submit issues if you find them, but have a look at `todo.md` first. Screenshots are [below](#screenies)!

### Getting started
```
cd laravel-quickstart 
nano bootstrap/start.php # add your own hostname here
bin/deploy
bin/seed
bin/serve
```

### My changes
```
- Added my hostname to [bootstrap / start.php].
- Added deploy, seed, serve, refresh scripts in [bin].

- Deleted postgres and sqlsrv and redis from [app / config {/,/ local} / database.php].
- Set sqlite as default database driver for local and production [ˆ].

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
![screen shot 2014-11-16 at 01 27 21](https://cloud.githubusercontent.com/assets/1312973/5059862/c977a000-6d2f-11e4-889d-7c6dd642f599.png)
![screen shot 2014-11-16 at 01 27 26](https://cloud.githubusercontent.com/assets/1312973/5059863/ca17bf90-6d2f-11e4-84d6-0d9e1a47eadd.png)
#### Settings
![screen shot 2014-11-16 at 01 26 50](https://cloud.githubusercontent.com/assets/1312973/5059859/a8884c78-6d2f-11e4-8ba0-706aaf56914e.png)

