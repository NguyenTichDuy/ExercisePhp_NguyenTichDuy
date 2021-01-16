# ExercisePhp_NguyenTichDuy

## Install

### Docker
#### Install docker 
- https://docs.docker.com/engine/install/

#### Clone project 
* Clone project
* Create file .env to setup environment variable
> * DB_CONNECTION=mysql
> * DB_HOST=database
> * DB_DATABASE=shop
> * DB_USERNAME=root
> * DB_PASSWORD=123123
> * DB_ROOT_PASSWORD=12345
* Run docker: docker-compose up 
* http://localhost:8080/shop

## Feature product

* Show list product
* Detail product
* Load data from database
* 

## Feature project
Route: 
> Support route with regex
Autoload file:
> Support auto load controller, model, view 
Work all docker:
> Support docker
MVC:
> Project depend on design pattem MVC

## Database

### Product
* name
* color
* size
* quality
* image
* content
* price
### Category
* idCategory
* title
### Cart
* IdCart
* UserId
* CreateDate
### product_category
* id
* idCategory
* idProduct
### CartItems
* Id
* IdCart
* idCategory
* content
* discount
* quality

