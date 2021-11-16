# Falabella Backend Dev - Technical Challenge
## Multiples Printer

App running live on: https://numbers-printer.herokuapp.com/

### Description
Application that prints all the numbers from 1 to 100.   
For multiples of 3 prints "Falabella".  
For multiples of 5 prints "IT".  
For numbers which are multiples of both 3 and 5, prints "Integraciones".  

### Local Installation Process

#### Step 1: Clone repository

```
git clone https://github.com/joseburgon/falabella-challenge.git
```

#### Step 2: Switch to the repo folder

```
cd falabella-challenge
```

#### Step 3: Install project packages and dependencies

```
composer install
```

#### Step 4: Start the local development server

Now you should be able to access the project's local site in the browser


### Unit Tests
```
php vendor/bin/phpunit tests/NumbersPrinterTest.php
```

