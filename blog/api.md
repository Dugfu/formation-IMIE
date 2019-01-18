# API Doc

## Authors

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /authors   | GET |  | 200: ``` [ { "id": 42, "name": "John", "email": "email@domain.net"}, {..} ] ``` |
| /authors   | POST      |   *required* body ``` {"name": "John", "email": "email@domain.net" } ``` | 201: ``` { "id": 42, "name": "John", "email": "email@domain.net", "articles": [ {"id": 1, "title": "Titre de l'article"}]} ``` |
| /authors/{id}   | GET      |     | 200: ``` { "id": 42, "name": "John", "email": "email@domain.net", "articles": [ {"id": 1, "title": "Titre de l'article"}]} ``` |

## Article

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /articles   | GET |  | 200: ``` [ { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"}, {..} ] ``` |
| /articles   | POST      |   *required* body ``` {"title": "Titre", "description": "description", "author": 42, "category": 1  } ``` | 201: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"} }``` | 200: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"} }``` |
| /articles/{id}   | GET      |     | 200: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"} }``` |
| /articles/{id}   | DELETE      |     | 200 ``` {} ``` |
| /articles/{id}   | PUT      |  *required* body ``` {"title": "Titre", "description": "description", "author": 42, "category": 1  } ```   | 200: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", "author": 42 }``` |


## Category

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /categories   | GET |  | 200: ``` [ { "id": 42, "name": "Nom"}, {..} ] ``` |
| /categories   | POST      |   *required* body ``` {"name": "Titre"} ``` | 201: ``` { "id": 42, "name": "Nom"}``` |
| /categories/{id}   | GET      |     | 200: ``` { "id": 42, "name": "Nom"}``` |
| /categories/{id}   | DELETE      |     | 200 ``` {} ``` |
| /categories/{id}   | PUT      |  *required* body ``` {"name": "Titre"} ```   | 200: ``` { "id": 42, "name": "Nom"}``` |
