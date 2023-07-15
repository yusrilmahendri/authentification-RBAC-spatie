# API Spec

## Use Authentication concep RBAC on laravel sanctum with spatie permission

All API must use this authentication function standar RBAC

Request :
- Header :
    - accept: application/json
    - Barer : 'Bearer '.$accessToken

## LOGIN

Request :
- Method : post
- Endpoint : `/api/login`
- Header :
    - Accept: application/json
    - body
       {
            'email': yusrilmahendri@gmail.com
            'password': 12345678
       }
Response :

```json 
    {
    "accessToken": "1|twFsrSrIUPQqmLdP58dgharRH8KPqbWPusimwQPW",
    "token_type": "Bearer"
    }
```

## Admin register user penerima 

Request :
- Method : POST
- Endpoint : `/api/pengirim`
- Header :
    - authentication: Barer .$accessToken # example Barer .1|9pXEqDMjs7vLCnfzF3EvvS9z8VwfVQ8I9T1tqTux
    - Accept: application/json
- Body :

```json 
{
    "kode_pengirim": "PJ001"
    "name" : "string",
    "email" : "string, unique",
    "password" : "string",
    "c_password: "string"
}
```
Response :

```json
{
    "status": "success",
    "message": "successfully save data."
}
"status": "fail",
    "message": {
        "email": [
            "The email has already been taken."
        ]
    }
```



## ALL ENDPOINT
```
  POST            api/login ..................................................................................................................... Api\AuthenticatesController@login
  GET|HEAD        api/orders ................................................................................................................. orders.index › OrderController@index
  POST            api/orders ................................................................................................................. orders.store › OrderController@store
  GET|HEAD        api/orders/create ........................................................................................................ orders.create › OrderController@create
  GET|HEAD        api/orders/{order} ........................................................................................................... orders.show › OrderController@show
  PUT|PATCH       api/orders/{order} ....................................................................................................... orders.update › OrderController@update
  DELETE          api/orders/{order} ..................................................................................................... orders.destroy › OrderController@destroy
  GET|HEAD        api/orders/{order}/edit ...................................................................................................... orders.edit › OrderController@edit
  GET|HEAD        api/pengirims .......................................................................................................................... PengirimController@index
  POST            api/pengirims .......................................................................................................................... PengirimController@store
  GET|HEAD        api/products ........................................................................................................... products.index › ProductController@index
  POST            api/products ........................................................................................................... products.store › ProductController@store
  GET|HEAD        api/products/create .................................................................................................. products.create › ProductController@create
  GET|HEAD        api/products/{product} ................................................................................................... products.show › ProductController@show
  PUT|PATCH       api/products/{product} ............................................................................................... products.update › ProductController@update
  DELETE          api/products/{product} ............................................................................................. products.destroy › ProductController@destroy
  GET|HEAD        api/products/{product}/edit .............................................................................................. products.edit › ProductController@edit
  POST            api/register ............................................................................................................... Api\AuthenticatesController@register
  GET|HEAD        api/roles .................................................................................................................... roles.index › RoleController@index
  POST            api/roles .................................................................................................................... roles.store › RoleController@store
  GET|HEAD        api/roles/create ........................................................................................................... roles.create › RoleController@create
  GET|HEAD        api/roles/{role} ............................................................................................................... roles.show › RoleController@show
  PUT|PATCH       api/roles/{role} ........................................................................................................... roles.update › RoleController@update
  DELETE          api/roles/{role} ......................................................................................................... roles.destroy › RoleController@destroy
  GET|HEAD        api/roles/{role}/edit .......................................................................................................... roles.edit › RoleController@edit
  GET|HEAD        api/users .................................................................................................................... users.index › UserController@index
  POST            api/users .................................................................................................................... users.store › UserController@store
  GET|HEAD        api/users/create ........................................................................................................... users.create › UserController@create
  GET|HEAD        api/users/{user} ............................................................................................................... users.show › UserController@show
  PUT|PATCH       api/users/{user} ........................................................................................................... users.update › UserController@update
  DELETE          api/users/{user} ......................................................................................................... users.destroy › UserController@destroy
  GET|HEAD        api/users/{user}/edit .......................................................................................................... users.edit › UserController@edit
```
