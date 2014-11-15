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
