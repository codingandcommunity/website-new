# Coding and Community website

## Local Development 

A docker-compose.yml is included for convenience

### Running the site locally

1. Install [Docker](https://docs.docker.com/install/) and [Docker-compose](https://docs.docker.com/compose/install/)
2. Run `docker-compose up` in the project directory, a wordpress instance with the wp-content directory mounted will be started along with a mariadb database
3. Visit http://localhost:8000 and perform initial wordpress configuration

### Theme Development

1. Run the site locally
2. install npm
3. change to the `wp-content/themes/cc-theme/` directory
4. run `npm install`
5. run `npx node-sass ./assets/sass/style.sass ./assets/css/style.css` to rebuild css

**note:** the theme will not work properly until it is built locally with the instructions above
