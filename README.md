# hvybmx
This is the hvybmx website.

It is built from:
* Nginx:stable:alpine
* PHP:
* Mariadb:lts

##  Installation
 
<strong>Step 1:</strong> Clone this repository on your local computer
```shell
sudo git clone git@github.com:bravepinata/hvybmx.git
```

<strong>Step 2:</strong> Enter the newly created hvybmx directory
```shell
cd hvybmx/
```

<strong>Step 3:</strong> Remove the local .git repository
```shell
sudo rm -rf .git
```

<strong>Step 4:</strong> Pull the components, build the containers, and populate the environment
```shell
sudo docker compose up -d
```

<strong>Step 5:</strong> When it completes building, go to http://localhost
