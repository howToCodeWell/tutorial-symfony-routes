# Tutorial 8: Symfony route debugging

```bash
php bin/console debug:router  

 ----------------- -------- -------- ------ -------------------------- 
  Name              Method   Scheme   Host   Path                      
 ----------------- -------- -------- ------ -------------------------- 
  _preview_error    ANY      ANY      ANY    /_error/{code}.{_format}  
  app_user_index    GET      ANY      ANY    /user/{id}                
  app_user_edit     POST     ANY      ANY    /user/{id}/edit           
  app_user_delete   DELETE   ANY      ANY    /user/{id}/delete         
 ----------------- -------- -------- ------ -------------------------- 
```

```bash
php bin/console debug:router --show-controllers
 ----------------- -------- -------- ------ -------------------------- ----------------------------------------- 
  Name              Method   Scheme   Host   Path                       Controller                               
 ----------------- -------- -------- ------ -------------------------- ----------------------------------------- 
  _preview_error    ANY      ANY      ANY    /_error/{code}.{_format}   error_controller::preview()              
  app_user_index    GET      ANY      ANY    /user/{id}                 App\Controller\UserController::index()   
  app_user_edit     POST     ANY      ANY    /user/{id}/edit            App\Controller\UserController::edit()    
  app_user_delete   DELETE   ANY      ANY    /user/{id}/delete          App\Controller\UserController::delete()  
 ----------------- -------- -------- ------ -------------------------- ----------------------------------------- 
 ```

 ```bash
 php bin/console debug:router --show-controllers --show-aliases
 ----------------- -------- -------- ------ -------------------------- ----------------------------------------- --------------------------------------- 
  Name              Method   Scheme   Host   Path                       Controller                                Aliases                                
 ----------------- -------- -------- ------ -------------------------- ----------------------------------------- --------------------------------------- 
  _preview_error    ANY      ANY      ANY    /_error/{code}.{_format}   error_controller::preview()                                                      
  app_user_index    GET      ANY      ANY    /user/{id}                 App\Controller\UserController::index()    App\Controller\UserController::index   
  app_user_edit     POST     ANY      ANY    /user/{id}/edit            App\Controller\UserController::edit()     App\Controller\UserController::edit    
  app_user_delete   DELETE   ANY      ANY    /user/{id}/delete          App\Controller\UserController::delete()   App\Controller\UserController::delete  
 ----------------- -------- -------- ------ -------------------------- ----------------------------------------- ---------------------------------------
 ```

```bash
php bin/console router:match /user/10
                                                                                          
 [OK] Route "app_user_index" matches                                                                                    
                                                                                                                        

+--------------+---------------------------------------------------------+
| Property     | Value                                                   |
+--------------+---------------------------------------------------------+
| Route Name   | app_user_index                                          |
| Path         | /user/{id}                                              |
| Path Regex   | {^/user/(?P<id>\d+)$}sDu                                |
| Host         | ANY                                                     |
| Host Regex   |                                                         |
| Scheme       | ANY                                                     |
| Method       | GET                                                     |
| Requirements | id: \d+                                                 |
| Class        | Symfony\Component\Routing\Route                         |
| Defaults     | _controller: App\Controller\UserController::index()     |
| Options      | compiler_class: Symfony\Component\Routing\RouteCompiler |
|              | utf8: true                                              |
+--------------+---------------------------------------------------------+
```

```bash
php bin/console debug:router --help  
```

```bash
php bin/console router:match /user/10/edit

 Route "app_user_edit" almost matches but method "GET" does not match any of the required methods (POST)

                                                                                                                        
 [ERROR] None of the routes match the path "/user/10/edit"   
 ```

 ```bash
php bin/console router:match /user/10/edit --method=POST
                                                                                                                        
 [OK] Route "app_user_edit" matches                                                                                     
                                                                                                                        

+--------------+---------------------------------------------------------+
| Property     | Value                                                   |
+--------------+---------------------------------------------------------+
| Route Name   | app_user_edit                                           |
| Path         | /user/{id}/edit                                         |
| Path Regex   | {^/user/(?P<id>\d+)/edit$}sDu                           |
| Host         | ANY                                                     |
| Host Regex   |                                                         |
| Scheme       | ANY                                                     |
| Method       | POST                                                    |
| Requirements | id: \d+                                                 |
| Class        | Symfony\Component\Routing\Route                         |
| Defaults     | _controller: App\Controller\UserController::edit()      |
| Options      | compiler_class: Symfony\Component\Routing\RouteCompiler |
|              | utf8: true                                              |
+--------------+---------------------------------------------------------+
 ```

 ```bash
 php bin/console router:match --help
 ```