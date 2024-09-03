#!/bin/bash

# Define the base directory where the WordPress site is located
BASE_DIR="/var/www/"

# Define the path to the GitHub php file
GITHUB_php_URL="https://raw.githubusercontent.com/hzron3/ngcdf-wordpress/main/content-page-contact.php"

# Define the relative path to the php file in the WordPress site's styles folder
php_FILE_PATH="public_html/wp-content/themes/cdf_constituency/template-parts/content-page-contact.php"

# Check if the base directory is empty
if [ -z "$(ls -A $BASE_DIR)" ]; then
    echo "The base directory $BASE_DIR is empty. No sites to update."
    exit 1
fi

# Loop through each directory in the base directory
for site in "$BASE_DIR"/*; do
    if [ -d "$site" ]; then
        TARGET_php_FILE="$site/$php_FILE_PATH"

        # Check if the target php file exists
        if [ -f "$TARGET_php_FILE" ]; then
            echo "Updating php file in $site"

            # Download the new php file from GitHub and replace the existing one
            curl -o "$TARGET_php_FILE" "$GITHUB_php_URL" 2> /tmp/curl_error.log

            if [ $? -eq 0 ]; then
                echo "Successfully replaced php file in $site"
            else
                echo "Failed to replace php file in $site"
                echo "Error details:"
                cat /tmp/curl_error.log
            fi
        else
            echo "php file not found in $site"
        fi
    else
        echo "$site is not a directory."
    fi
done

# Clean up temporary files
rm -f /tmp/curl_error.log

echo "php update process completed."
