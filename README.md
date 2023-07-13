# API Spec

## Authentication

All API must use this authentication

Request :
- Header :
    - accept: application/json
    - Barer : 'Bearer '.$accessToken

## Register Penerima

Request :
- Method : POST
- Endpoint : `/api/register`
- Header :
    - authentication: Barer .$accessToken # example Barer .1|9pXEqDMjs7vLCnfzF3EvvS9z8VwfVQ8I9T1tqTux
    - Accept: application/json
- Body :

```json 
{
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
    "status": "success",
    "message": "success authenticated.",
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHRpbWUiOjE2ODg5OTE4MDAsImlkIjoxfQ.drj4yZmXNJS-mAv5BiNWwlnQDHqDF-9eV4lU8xOlOfA"
}
```
