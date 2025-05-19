FROM wordpress:latest

# Copy the custom theme into the WordPress themes directory
# The WordPress files are served from /var/www/html/ in the container
COPY ./wp-content/themes/blog-theme /var/www/html/wp-content/themes/blog-theme

# WordPress image handles the rest (Apache, PHP, WordPress core)
# Port 80 is exposed by the base image by default
