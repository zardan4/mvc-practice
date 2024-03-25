#### Source
My small practice for MVC
Project from https://habr.com/en/articles/150267/

#### Little diff
Conected mysql to project using it as basic field in `app/core/model.php`.
Using singleton pattern(`app/core/db.php`) for keeping database instance.

#### Requirements
- Apache(tested on 2.4)
- PHP
- MySQL

#### Basic classes MVC(inheritance from them)
```/app/core```

#### Basic classes' offsprings
```/app 
    /models
    /views
    /controlles
```

#### Init point
```index.php```

#### Initialisation of all modules and application loading
```app/bootstrap.php```

```
/views
    # each page content
    /error_view.php
    /contacts_view.php
    /main_view.php
    /portfolio_view.php
    /services_view.php
    
    # common template for each page
    /template_view.php
```