## Laravel Quickstart
This is a standard laravel project but I added, changed, and removed a couple of things get started more quickly..

### My changes
```
- Added my hostname to [bootstrap / start.php].
- Added deploy, seed, serve, refresh scripts in [bin].

- Deleted postgres and sqlsrv and redis from [app / config {/,/ local} / database.php].
- Set sqlite as default database driver for local and production [ˆ].

- Set timezone to Europe/Amsterdam in [app / config / app.php].

- Included Bootstrap, jQuery in [public]. 
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
#### Settings
![screen shot 2014-11-15 at 23 37 04](https://cloud.githubusercontent.com/assets/1312973/5059584/bfd67f8a-6d20-11e4-9f79-2977ce10d9b5.png)


