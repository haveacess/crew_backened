After running docker container 
you app will access by this url:

## Part 1. Nginx
Nginx container deployed on this url.
```
GET http://127.0.0.1:{NGINX_PORT} 
```

Type url in you browser. If url correctly you will receive welcome message:
```
Welcome to the server
```

## Part 2. Static (public) files
You may some files which not need authorize and passing through application. </br>
**IS PUBLIC FILES. EVERYBODY CAN ACCESS TO IT**

For example you have static file **robots.txt**
```
File location: {project_folder}/static_files/robots.txt
Public url via nginx: 127.0.0.1:{NGINX_PORT}/static/robots.txt
```

## Part 3. Laravel application
Main part of you application located behind url ``/backend``

For example, you have route ``/devil`` in ``routes/api.php``
```
Route::get('/devil', function (Request $request) {
    return sprintf('Hello world. My name is: %s', $request->get('name'));
});
```

```
GET http://127.0.0.1:{NGINX_PORT}/backend/api/devil?name=John

RESPONSE 200 OK
Hello world. My name is: John
```