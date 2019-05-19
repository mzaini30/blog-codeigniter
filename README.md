# Composer Update

Jalankan:

```bash
composer update
```

# Upload Database

Buat database baru

Upload database dari `zen.sql`

# Konfigurasi

Buka `application/config/config.php`

Sesuaikan pada bagian:

```php
$config['base_url'] = 'http://localhost/zen/';
```

Buka `application/config/database.php`

Sesuaikan pada bagian:

```php
'username' => 'root',
'password' => 'mysql',
'database' => 'zen',
```

# Username dan Password

Username: admin

Password: admin