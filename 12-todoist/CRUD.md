# CRUD

C = Create

R = Read

U = Update

D = Delete

## Todo

| Verb     | URL                     | Method  | CRUD   | Description                                             |
| -------- | ----------------------- | ------- | ------ | ------------------------------------------------------- |
| `GET`    | `/todos`                | index   | Read   | Visar en lista över alla todos                          |
| `GET`    | `/todos/create`         | create  |        | Visar ett formulär för att skapa en ny Todo             |
| `POST`   | `/todos`                | store   | Create | Skapar en ny Todo                                       |
| `GET`    | `/todos/{todo}`         | show    | Read   | Visar en enskild todo                                   |
| `GET`    | `/todos/{todo}/edit`    | edit    |        | Visar ett formulär för att redigera en befintlig todo   |
| `PUT`    | `/todos/{todo}`         | update  | Update | Uppdaterar en befintlig todo                            |
| `DELETE` | `/todos/{todo}`         | destroy | Delete | Tar bort en todo                                        |
