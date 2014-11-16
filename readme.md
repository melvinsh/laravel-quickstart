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
![screen shot 2014-11-15 at 23 36 59](https://cloud.githubusercontent.com/assets/1312973/5059582/aea52b62-6d20-11e4-8dac-3a80b6dcdd56.png)
#### Sign up
![screen shot 2014-11-15 at 23 41 06](https://cloud.githubusercontent.com/assets/1312973/5059587/ed4af63a-6d20-11e4-9e16-d263e657df82.png)
#### Settings
![screen shot 2014-11-15 at 23 37 04](https://cloud.githubusercontent.com/assets/1312973/5059584/bfd67f8a-6d20-11e4-9f79-2977ce10d9b5.png)


