**Documentação da API To-Do List**




**Login da API** 

Admin
Email: admin@teste.com
Senha: admin12345

Cliente 1
Email: cliente1@teste.com
Senha: cliente12345

Cliente 2
Email: cliente2@teste.com
Senha: cliente12345


**Faça Download das Imagem Docker do link** https://drive.google.com/drive/folders/11IQt6z85VRnZsme3bH5HLvBC76iIc-zK?usp=sharing

**DB**: mariadb-10.5.tar
**Servidor**: nginx-alpine.tar
**Aplicação**: todo-list-api-php.tar

importe as imagem no docker e execute as 3 

Para fazer requisição basta colocar no postman **http://localhost:8080/ + endpoints**





**Introdução**

Esta API permite gerenciar listas de tarefas (To-Do Lists) com suporte para usuários administradores e clientes.

**Autenticação**

A API utiliza autenticação via token JWT (JSON Web Token). Para acessar os endpoints protegidos, é necessário obter um token de autenticação através do endpoint `/api/login` e enviá-lo no header `Authorization` de cada requisição, no formato `Bearer <token>`.

**Endpoints**

**1. Autenticação**

*   **`POST /api/login`**

    *   **Descrição:** Autentica um usuário e retorna um token JWT.
    *   **Roles:** `PUBLIC_ACCESS`
    *   **Request Body:**

        ```json
        {
            "username": "seu_email@example.com",
            "password": "sua_senha"
        }
        ```

    *   **Respostas:**

        *   **200 OK:**

            ```json
            {
                "token": "seu_token_jwt_aqui"
            }
            ```

        *   **401 Unauthorized:**

            ```json
            {
                "message": "Invalid credentials."
            }
            ```

**2. Usuários (Acesso: `ROLE_ADMIN`)**

*   **`GET /api/usuarios/`**

    *   **Descrição:** Retorna a lista de todos os usuários.
    *   **Respostas:**

        *   **200 OK:**

            ```json
            [
                {
                    "id": 1,
                    "email": "admin@example.com",
                    "roles": ["ROLE_ADMIN"],
                    "listas": [],
                    "listasCompartilhadas": []
                },
                {
                    "id": 2,
                    "email": "cliente@example.com",
                    "roles": ["ROLE_USER"],
                    "listas": [],
                    "listasCompartilhadas": []
                }
            ]
            ```

*   **`POST /api/usuarios/`**

    *   **Descrição:** Cria um novo usuário.
    *   **Request Body:**

        ```json
        {
            "email": "novo_usuario@example.com",
            "roles": ["ROLE_USER"],
            "password": "senha_do_novo_usuario"
        }
        ```

    *   **Respostas:**

        *   **201 Created:**

            ```json
            {
                "id": 3,
                "email": "novo_usuario@example.com",
                "roles": ["ROLE_USER"],
                "listas": [],
                "listasCompartilhadas": []
            }
            ```

*   **`GET /api/usuarios/{id}`**

    *   **Descrição:** Retorna um usuário específico pelo ID.
    *   **Parâmetros:**
        *   `id` (integer, path): ID do usuário.
    *   **Respostas:**

        *   **200 OK:**

            ```json
            {
                "id": 2,
                "email": "cliente@example.com",
                "roles": ["ROLE_USER"],
                "listas": [],
                "listasCompartilhadas": []
            }
            ```

*   **`PUT /api/usuarios/{id}`**

    *   **Descrição:** Atualiza um usuário existente.
    *   **Parâmetros:**
        *   `id` (integer, path): ID do usuário.
    *   **Request Body:**

        ```json
        {
            "email": "cliente_atualizado@example.com",
            "roles": ["ROLE_USER"]
        }
        ```

    *   **Respostas:**

        *   **200 OK:**

            ```json
            {
                "id": 2,
                "email": "cliente_atualizado@example.com",
                "roles": ["ROLE_USER"],
                "listas": [],
                "listasCompartilhadas": []
            }
            ```

*   **`DELETE /api/usuarios/{id}`**

    *   **Descrição:** Exclui um usuário.
    *   **Parâmetros:**
        *   `id` (integer, path): ID do usuário.
    *   **Respostas:**

        *   **204 No Content:**

**3. Listas (Acesso: `ROLE_USER`)**

*   **`GET /api/lista/`**

    *   **Descrição:** Retorna todas as listas do usuário autenticado, incluindo as listas compartilhadas com ele.
    *   **Respostas:**

        *   **200 OK:**

            ```json
            [
                {
                    "id": 1,
                    "nome": "Minha Lista",
                    "usuario": {
                        "id": 2,
                        "email": "cliente@example.com"
                    },
                    "tarefas": [
                        {
                            "id": 1,
                            "descricao": "Fazer compras",
                            "concluida": false,
                            "dataCriacao": "2023-12-16T10:00:00+00:00",
                            "dataConclusao": null
                        }
                    ],
                    "usuariosCompartilhados": []
                },
                {
                    "id": 2,
                    "nome": "Lista Compartilhada",
                    "usuario": {
                        "id": 1,
                        "email": "admin@example.com"
                    },
                    "tarefas": [],
                    "usuariosCompartilhados": [
                        {
                            "id": 2,
                            "email": "cliente@example.com"
                        }
                    ]
                }
            ]
            ```

*   **`POST /api/lista/`**

    *   **Descrição:** Cria uma nova lista para o usuário autenticado.
    *   **Request Body:**

        ```json
        {
            "nome": "Nova Lista"
        }
        ```

    *   **Respostas:**

        *   **201 Created:**

            ```json
            {
                "id": 3,
                "nome": "Nova Lista",
                "usuario": {
                    "id": 2,
                    "email": "cliente@example.com"
                },
                "tarefas": [],
                "usuariosCompartilhados": []
            }
            ```

*   **`GET /api/lista/{id}`**

    *   **Descrição:** Retorna uma lista específica pelo ID, se o usuário autenticado for o dono da lista ou se a lista foi compartilhada com ele.
    *   **Parâmetros:**
        *   `id` (integer, path): ID da lista.
    *   **Respostas:**

        *   **200 OK:**

            ```json
            {
                "id": 1,
                "nome": "Minha Lista",
                "usuario": {
                    "id": 2,
                    "email": "cliente@example.com"
                },
                "tarefas": [
                    {
                        "id": 1,
                        "descricao": "Fazer compras",
                        "concluida": false,
                        "dataCriacao": "2023-12-16T10:00:00+00:00",
                        "dataConclusao": null
                    }
                ],
                "usuariosCompartilhados": []
            }
            ```
        *   **403 Forbidden:** (Se o usuário não tiver permissão para acessar a lista)

*   **`PUT /api/lista/{id}`**

    *   **Descrição:** Atualiza uma lista existente, se o usuário autenticado for o dono da lista.
    *   **Parâmetros:**
        *   `id` (integer, path): ID da lista.
    *   **Request Body:**

        ```json
        {
            "nome": "Minha Lista Atualizada"
        }
        ```

    *   **Respostas:**

        *   **200 OK:**

            ```json
            {
                "id": 1,
                "nome": "Minha Lista Atualizada",
                "usuario": {
                    "id": 2,
                    "email": "cliente@example.com"
                },
                "tarefas": [],
                "usuariosCompartilhados": []
            }
            ```
        *   **403 Forbidden:** (Se o usuário não tiver permissão para editar a lista)

*   **`DELETE /api/lista/{id}`**

    *   **Descrição:** Exclui uma lista, se o usuário autenticado for o dono da lista.
    *   **Parâmetros:**
        *   `id` (integer, path): ID da lista.
    *   **Respostas:**

        *   **204 No Content:**
        *   **403 Forbidden:** (Se o usuário não tiver permissão para excluir a lista)

*   **`POST /api/lista/{id}/compartilhar`**

    *   **Descrição:** Compartilha uma lista com outro usuário, se o usuário autenticado for o dono da lista.
    *   **Parâmetros:**
        *   `id` (integer, path): ID da lista.
    *   **Request Body:**

        ```json
        {
            "usuarioId": 1
        }
        ```

    *   **Respostas:**

        *   **200 OK:**

            ```json
            {
                "message": "Lista compartilhada com sucesso."
            }
            ```
        *   **400 Bad Request:** (Se o usuário com o ID especificado não for encontrado)
        *   **403 Forbidden:** (Se o usuário não tiver permissão para compartilhar a lista)

**4. Tarefas (Acesso: `ROLE_USER`)**

*   **`GET /api/tarefa`**
    *   **Descrição:** Retorna todas as tarefas.
    *   **Respostas:**
        *   **200 OK:**
            ```json
            [
                {
                    "id": 1,
                    "descricao": "Fazer compras",
                    "concluida": false,
                    "dataCriacao": "2023-12-16T10:00:00+00:00",
                    "dataConclusao": null,
                    "lista": {
                        "id": 1,
                        "nome": "Minha Lista"
                    }
                },
                {
                    "id": 2,
                    "descricao": "Estudar Symfony",
                    "concluida": true,
                    "dataCriacao": "2023-12-15T14:30:00+00:00",
                    "dataConclusao": "2023-12-15T18:00:00+00:00",
                    "lista": {
                        "id": 1,
                        "nome": "Minha Lista"
                    }
                }
            ]
            ```
*   **`POST /api/tarefa/lista/{listaId}`**

    *   **Descrição:** Cria uma nova tarefa em uma lista específica, se o usuário autenticado tiver acesso à lista.
    *   **Parâmetros:**
        *   `listaId` (integer, path): ID da lista.
    *   **Request Body:**

        ```json
        {
            "descricao": "Nova Tarefa"
        }
        ```

    *   **Respostas:**

        *   **201 Created:**

            ```json
            {
                "id": 3,
                "descricao": "Nova Tarefa",
                "concluida": false,
                "dataCriacao": "2023-12-16T12:00:00+00:00",
                "dataConclusao": null,
                "lista": {
                    "id": 1,
                    "nome": "Minha Lista"
                }
            }
            ```
        *   **403 Forbidden:** (Se o usuário não tiver permissão para adicionar tarefas à lista)
        *   **404 Not Found:** (Se a lista com o ID especificado não for encontrada)

*   **`GET /api/tarefa/{id}/`**

    *   **Descrição:** Retorna uma tarefa específica pelo ID, se o usuário autenticado tiver acesso à lista da tarefa.
    *   **Parâmetros:**
        *   `id` (integer, path): ID da tarefa.
    *   **Respostas:**

        *   **200 OK:**

            ```json
            {
                "id": 1,
                "descricao": "Fazer compras",
                "concluida": false,
                "dataCriacao": "2023-12-16T10:00:00+00:00",
                "dataConclusao": null,
                "lista": {
                    "id": 1,
                    "nome": "Minha Lista"
                }
            }
            ```
        *   **403 Forbidden:** (Se o usuário não tiver permissão para acessar a tarefa)

*   **`PUT /api/tarefa/{id}`**

    *   **Descrição:** Atualiza uma tarefa existente, se o usuário autenticado tiver acesso à lista da tarefa.
    *   **Parâmetros:**
        *   `id` (integer, path): ID da tarefa.
    *   **Request Body:**

        ```json
        {
            "descricao": "Fazer compras no supermercado",
            "concluida": true
        }
        ```

    *   **Respostas:**

        *   **200 OK:**

            ```json
            {
                "id": 1,
                "descricao": "Fazer compras no supermercado",
                "concluida": true,
                "dataCriacao": "2023-12-16T10:00:00+00:00",
                "dataConclusao": "2023-12-16T11:00:00+00:00",
                "lista": {
                    "id": 1,
                    "nome": "Minha Lista"
                }
            }
            ```
        *   **403 Forbidden:** (Se o usuário não tiver permissão para editar a tarefa)

*   **`DELETE /api/tarefa/{id}/`**

    *   **Descrição:** Exclui uma tarefa, se o usuário autenticado tiver acesso à lista da tarefa.
    *   **Parâmetros:**
        *   `id` (integer, path): ID da tarefa.
    *   **Respostas:**

        *   **204 No Content:**
        *   **403 Forbidden:** (Se o usuário não tiver permissão para excluir a tarefa)

**Como usar no Postman**

1. **Autenticação:**
    *   Vá na aba `Authorization` da requisição ou da collection.
    *   Selecione o tipo `Bearer Token`.
    *   No campo `Token`, cole o token JWT obtido do endpoint `/api/login`.
2. **Requisições:**

    *   Selecione o endpoint desejado na collection importada.
    *   Preencha os parâmetros necessários (path, query, body).
    *   Clique em `Send` para enviar a requisição.
3. **Respostas:**

    *   O Postman exibirá a resposta da API, incluindo o status code, headers e body.

**Exemplo no Postman (Login):**

1. Selecione a requisição `POST /api/login`.
2. Vá na aba `Body` e selecione `raw` e `JSON`.
3. Insira o JSON com as credenciais:

    ```json
    {
        "username": "admin@example.com",
        "password": "senha_admin"
    }
    ```
4. Clique em `Send`.
5. Copie o token retornado na resposta.
6. Vá na aba `Authorization` da collection ou de uma requisição específica e cole o token no campo `Token`.
