# xklid101/h40-php-tests-assets

H40 apps tests helpers and other tests assets

**************************
**************************

### /src/Helpers/ApplicationRequestMock.php
**************************

class ApplicationRequestMock extends \Nette\Application\Request  
    used for tests
  
**************************
**************************

### /src/Helpers/DatabaseTrait.php
**************************

database use helper  
    by using this trait in some testcase  
    someone can change database name to be used in some test  
    (if database is going to be used but does not exists and is not going to be created,  
    it has to be defined in config parameters)  
all app is using environment variables to connect to database, so this class just sets env variable  
    to properly connect to the correct database
  
**************************
**************************

### /src/Helpers/HttpRequestMock.php
**************************

class HttpRequestMock extends \Nette\Http\Request  
    used for tests
  
**************************
**************************

### /src/Helpers/PresenterTrait.php
**************************

trait PresenterTrait here hase to be used in tests that are using presenters  
    (majority for /front testing)  
if prepares all presenters services and more needed to run app for testing...
  
**************************
**************************

## License  
MIT  

## Authors  
{
    "name": "xklid101"
}  
