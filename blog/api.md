# API Doc

## Category

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /categories   | GET |  | 200: ``` [ { "id": 42, "name": "Name"}, {..} ] ``` |
| /categories   | POST      |   *required* body ``` {"name": "Name"} ``` | 201: ``` { "id": 42, "name": "Name"}``` | 200: ``` { "id": 42, "name": "Name"}``` |
| /categories/{id}   | GET      |     | 200: ``` { "id": 42, "name": "Name"} }``` |
| /categories/{id}   | DELETE      |     | 200 ``` {} ``` |
| /categories/{id}   | PUT      |  *required* body ``` {"name": "Name"} ```   | 200: ``` { "id": 42, "name": "Name"}``` |

## Movie

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /movies   | GET |  | 200: ``` [ { "id": 42, "title": "Title", "year": "Year", "poster": "Poster", "synopsis": "Synopsis", actor: { "id": 42, "lastname": "Lastname", "firstname": "Firstname"}, category: { "id": 1, "name": "Name"} }, {..} ] ``` |
| /movies   | POST      |   *required* body ``` {"title": "Title", "year": "Year", "poster": "Poster", "synopsis": "Synopsis", "actor": [42, ..], "category": 1 } ``` | 201: ``` { "id": 42, "title": "Title", "year": "Year", "poster": "Poster", "synopsis": "Synopsis", actor: { "id": 42, "lastname": "Lastname", "firstname": "Firstname"}, category: { "id": 1, "name": "Name"} }``` | 200: ``` { "id": 42, "title": "Title", "year": "Year", "poster": "Poster", "synopsis": "Synopsis", actor: { "id": 42, "lastname": "Lastname", "firstname": "Firstname"}, category: { "id": 1, "name": "Name"} }``` |
| /movies/{id}   | GET      |     | 200: ``` { "id": 42, "title": "Title", "year": "Year", "poster": "Poster", "synopsis": "Synopsis", actor: [{ "id": 42, "lastname": "Lastname", "firstname": "Firstname"}, {..} ], category: { "id": 1, "name": "Name"} }``` |
| /movies/{id}   | DELETE      |     | 200 ``` {} ``` |
| /movies/{id}   | PUT      |  *required* body ``` {"title": "Title", "year": "Year", "poster": "Poster", "synopsis": "Synopsis", "actor": [42, ..], "category": 1 } ```   | 200: ``` {"title": "Title", "year": "Year", "poster": "Poster", "synopsis": "Synopsis", "actor": [42, ..], "category": 1 }``` |


## Actor

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /actors   | GET |  | 200: ``` [ { "id": 42, "lastname": "Lastname", "firstname": "Firstname"}, {..} ] ``` |
| /actors   | POST      |   *required* body ``` {"lastname": "Lastname", "firstname": "Firstname" } ``` | 201: ``` { "id": 42, "lastname": "Lastname", "firstname": "Firstname"}``` | 200: ``` { "id": 42, "lastname": "Lastname", "firstname": "Firstname"}``` |
| /actors/{id}   | GET      |     | 200: ``` { "id": 42, "lastname": "Lastname", "firstname": "Firstname"}``` |
| /actors/{id}   | DELETE      |     | 200 ``` {} ``` |
| /actors/{id}   | PUT      |  *required* body ``` {"lastname": "Lastname", "firstname": "Firstname" } ```   | 200: ``` { "id": 42, "lastname": "Lastname", "firstname": "Firstname"}``` |
