## Frontend Vuejs Laravel Assessment 


### Setup

```
composer i
```

```
cp .env.example .env
```

```
php artisan key:generate
```

```
yarn
```

```
yarn watch
```

-----
Run the migrations with the following command

-----

```
php artisan migrate
```

-----
Set your database configuration in the `.env` file and serve the app using the command below

-----


```
php artisan serve
```


### API Documentations
#### List of endpoints available

- **GET** : .../employee/list *(Get list of employees)*
- **GET** : .../employee/{id} *(Get one employees by passing the id)*
- **POST** : .../employee/create *(Create new employee record)*
- **PUT** : .../employee/{id} *(update single employee record)*
- **DELETE** : .../employee/{id} *(delete single employee record)*

requests payload schema sample for POST, PUT/PATCH

```json
{
    "name": "Aminat  Yakubu",
    "salary": 6000,
    "image": "https://pbs.twimg.com/profile_images/1297361147096637442/bjzUwL-Q_400x400.jpg",
    "job_title": "Frontend Engineer",
    "job_type": "Full time",
    "job_status": "Senior Engineer"
}
```