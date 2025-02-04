## Real Time Reverb

To begin with the demonstration of this application, these are the following steps:

### Install Compose
````
compose i
````
### Start Laravel Project

```
composer dev
```

Note: Take into account these environment variables.

````
BROADCAST_CONNECTION=reverb
BROADCAST_DRIVER=reverb

REVERB_APP_ID=857193
REVERB_APP_KEY=jky3h5emiriditpr4oef
REVERB_APP_SECRET=oh6rt4guepy9cty0v9al
REVERB_HOST="localhost"
REVERB_PORT=8080
REVERB_SCHEME=http
````
### Start Server Realtime
```
php artisan reverb:start --debug
```

Return:

INFO  Starting server on 0.0.0.0:8080 (localhost).

### Migrate
`````
php artisan migrate

php artisan db:seed --class=DemoUserSeeder
`````

### User Enter Socket Private

email: demo@demo.com
password: password123

### Demo
To test it give this command
````
php artisan changestatusorder
````
![alt text](https://github.com/valenzuela21/Realtime-Laravel-App/blob/master/resources/images/demo_console.gif?raw=true)

![alt text](https://github.com/valenzuela21/Realtime-Laravel-App/blob/master/resources/images/demo_console.gif?raw=true)

![alt text](https://github.com/valenzuela21/Realtime-Laravel-App/blob/master/resources/images/demo_console.gif?raw=true)




